<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
<?php
echo $this->Html->meta('icon');
echo '<meta name="viewport" content="width=device-width,initial-scale=1.0"/>';
echo $this->Html->css('bootstrap');
echo $this->Html->css("my");
echo $this->Html->script('jquery-1.9.1.min');
echo $this->Html->script('bootstrap.min');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link("KIT Community",array("controller"=>"tops","action"=>"index"),array("class"=>"navbar-brand"));?>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse1">
			<ul class="nav navbar-nav">
				<li class="active"><?php echo $this->Html->link("研究室配属希望表",array("controller"=>"research_rooms","action"=>"index"));?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
				<?php echo $this->Html->link($userName,array("controller"=>"students","action"=>"myPage"));?>
				</li>
				<li>
<?php
if($isLoggedIn){
				echo $this->Html->link("ログアウト",array("controller"=>"students","action"=>"logout"));
}
else{
				echo $this->Html->link("ログイン",array("controller"=>"students","action"=>"login"));
}
?>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">something</a></li>
					</ul>
				</li>-->
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
	<div id="container">
		<div id="header">
		</div>
		<div id="body">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<!--<div id="footer">
				<p>Devloped and maintained by Hitoshi Otsuki.</p>
				<p>Contact information: <a href="mailto:hitochan777@google.com">hitochan777@google.com</a>.</p>
		</div>-->
	</div>
</body>
</html>
