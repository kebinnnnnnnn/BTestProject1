
<?php $number = 0?>

<?php foreach ($todo as $todoitem):?>
	<a class="big" href="../items/view/<?php echo $todoitem['User']['id']?>/<?php echo strtolower(str_replace(" ","-",$todoitem['User']['first_name']))?>">
	<span class="item">
	<?php echo ++$number?>
	<?php echo $todoitem['User']['email_address']?>

	</span>
	</a><br/>

	<?php echo $todoitem['User']['password']?>
<?php endforeach?>
