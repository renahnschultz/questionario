<?php
require_once ('..\jpgraph\src\jpgraph.php');
require_once ('..\jpgraph\src\jpgraph_pie.php');
require('connection.php');

$query = "SELECT count(*) as valor, resposta  FROM questionario.resposta group by resposta";
$result = $connection->query($query);


$data = array();
$labels = array();
while($row = mysqli_fetch_array($result) ){
	array_push($data, $row['valor']);
	array_push($labels, $row['resposta']);
}

$graph = new PieGraph(700,200);
$graph->clearTheme();

$graph->title->Set("Melhor cidade para se viver no Brasil");
$graph->title->SetFont(FF_FONT1,FS_BOLD);

$p1 = new PiePlot($data);
$p1->SetLegends($labels);
$p1->SetCenter(0.4);

$graph->Add($p1);
$graph->Stroke();

?>