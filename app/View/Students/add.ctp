<center>
<div class="row">
<div class="col-sm-offset-4 col-md-4">
<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
<div class="form-group">
<?php echo $this->Form->input('username',array("label"=>"ユーザー名","class"=>"form-control"));?>
</div>
<div class="form-group">
<?php echo $this->Form->input('password',array("label"=>"パスワード","class"=>"form-control"));?>
</div>
<div class="form-group">
<?php echo $this->Form->input("password_check",array("label"=>"パスワード確認","class"=>"form-control","type"=>"password"));?>
</div>
<div class="form-group">
<?php echo $this->Form->input('gpa',array("label"=>"GPA","type"=>"text","class"=>"form-control"));?>
</div>
<div class="form-group">
<?php echo $this->Form->input('email',array("label"=>"メールアドレス","class"=>"form-control"));?>
</div>
	</fieldset>
<?php echo $this->Html->tag("button","登録",array("type"=>"submit","class"=>"btn btn-success"));?>
</div>
</div>
</div>
</center>

