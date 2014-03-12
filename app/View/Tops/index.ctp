<?php
$content = $this->Html->tag("h3","京都工芸繊維大学コミュニティ");
$content .= $this->Html->tag("p","登録していない方は登録してください!");
$buttons = $this->Html->link("新規登録",array("controller"=>"students","action"=>"add"),array("class"=>"btn btn-primary btn-lg","role"=>"button"));
$content .= $this->Html->tag("p",$buttons);
echo $this->Html->div("jumbotron",$content);
?>
