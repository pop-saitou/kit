<?php
$tableContent = "";
$tableContent.= $this->Html->tableHeaders(array("研究室名","人数",""));
foreach($researchRooms as $room){
				$button = $this->Html->link("この研究室を選ぶ",array("controller"=>"research_rooms","action"=>"setRoom",$room["ResearchRoom"]["id"]),array("type"=>"button","class"=>"btn btn-primary","role"=>"button"));
				if($room["ResearchRoom"]["id"]==$me["Student"]["research_room_id"]){
								$tableContent .= $this->Html->tableCells(array($room["ResearchRoom"]["name"],(count($room["Student"])+1)."/".$room["ResearchRoom"]["student_count"],$button),array("class"=>"info"),array("class"=>"info"));
				}
				else{
								$tableContent .= $this->Html->tableCells(array($room["ResearchRoom"]["name"],$room["ResearchRoom"]["student_count"],$button));

				}
}
$tableContent = $this->Html->tag("table",$tableContent,array("class"=>"table table-hover table-bordered"));
echo $this->Html->div("row",$this->Html->div("col-sm-offset-2 col-md-8",$tableContent));
?>
