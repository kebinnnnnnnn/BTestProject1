<?php

class UsersController extends Controller {

	function view($id = null,$name = null) {
	
		$this->set('title',$name.' - Users');
		//$this->set('todo',$this->Item->select($id));

	}
	
	function viewall() {

		$this->set('title','Users');
		$this->set('todo',$this->User->selectAll());
	}
	
	function add() {
		$todo = $_POST['todo'];
		$this->set('title','Success - Feed');
		$this->set('todo',$this->User->query('insert into items (item_name) values (\''.mysql_real_escape_string($todo).'\')'));	
	}
	
	function delete($id = null) {
		$this->set('title','Success -Feed');
		$this->set('todo',$this->User->query('delete from items where id = \''.mysql_real_escape_string($id).'\''));	
	}

}
