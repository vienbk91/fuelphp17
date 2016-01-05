<?php 
use Fuel\Core\Form;
use Fuel\Core\Input;
?>


<?php if (isset($html_error)): ?>
<?php echo $html_error;  ?>
<?php endif; ?>

<?php echo Form::open('form/confirm'); ?>

<p>
<?php echo Form::label('名前' , 'name'); ?>(*) :
<?php echo Form::input('name' , Input::post('name')); ?>
</p>

<p>
<?php echo Form::label('メールアドレス' , 'email'); ?>(*) :
<?php echo Form::input('email' , Input::post('email')); ?>
</p>

<p>
<?php echo Form::label('コメント' , 'comment'); ?>(*) :
<?php echo Form::textarea('comment' , Input::post('comment') , array(
		'cols' => 70 ,
		'rows' => 6
		)); 
?>
</p>


<div class="actions">
<?php echo Form::submit('submit' , '確認') ?>
</div>

<p>
<?php echo Form::close(); ?>
</p>