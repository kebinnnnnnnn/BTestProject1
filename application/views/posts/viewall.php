
<?php $number = 0?>

<?php foreach ($todo as $todoitem):?>
	<a class="big" href="../items/view/<?php echo $todoitem['Post']['id']?>/<?php echo strtolower(str_replace(" ","-",$todoitem['Post']['title']))?>">
	<span class="item">
	<?php echo ++$number?>
	<?php echo $todoitem['Post']['title']?>

	</span>
	</a><br/>

	<?php echo $todoitem['Post']['body']?>
<?php endforeach?>
