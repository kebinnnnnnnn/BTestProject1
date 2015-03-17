<?php

class PostsController extends Controller {

	function view($id = null,$name = null) {
	
		$this->set('title',$name.' - Feed');
		//$this->set('todo',$this->Item->select($id));

	}
	
	function viewall() {

		$this->set('title','Feed');
		$this->set('todo',$this->Post->selectAll());
	}
	
	function add() {
		$todo = $_POST['todo'];
		$this->set('title','Success - Feed');
		$this->set('todo',$this->Post->query('insert into posts (item_name) values (\''.mysql_real_escape_string($todo).'\')'));	
	}
	
	function delete($id = null) {
		$this->set('title','Success -Feed');
		$this->set('todo',$this->Post->query('delete from posts where id = \''.mysql_real_escape_string($id).'\''));	
	}

}
