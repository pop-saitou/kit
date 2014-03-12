<center>
<div class="row">
<div class="col-sm-offset-4 col-md-4">
<?php echo $this->Session->flash("auth");?>
<?php echo $this->Form->create("Student");?>
<div class="form-group">
<?php echo $this->Form->input("username",array("label"=>"ユーザー名","class"=>"form-control"));?>
</div>
<div class="form-group">
<?php echo $this->Form->input("password",array("label"=>"パスワード","class"=>"form-control"));?>
</div>
<div class="form-group">
<?php echo $this->Html->tag("button","ログイン",array("type"=>"submit","class"=>"btn btn-success"));?>
</div>
<br>
<?php
echo $this->Html->link(
				"新規登録はこちら",
				array(
								"controller"=>"students",
								"action"=>"add"
				)
);
?>
</div>
</div>
</center>
<script>

</script>
