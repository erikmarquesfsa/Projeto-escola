<?php
include "config.php";
$sql = "SELECT
DATE(data_matricula) as dt,
COUNT(id) as total
FROM cad_aluno
GROUP BY DATE(data_matricula)
order by DATE(data_matricula) ASC";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()){

    $geral[] = array("country"=>implode("-",array_reverse(explode("-",$dados["dt"]))),"visits"=>$dados["total"]);
}

$dados_g = json_encode($geral);
?>

<script language="javascript">
var chart = AmCharts.makeChart( "chartdiv", {
    "type": "serial",
    "theme": "none",
    "dataProvider": <?php echo $dados_g; ?>,
    "valueAxes": [ {
      "gridColor": "#FFFFFF",
      "gridAlpha": 0.2,
      "dashLength": 0
    } ],
    "gridAboveGraphs": true,
    "startDuration": 1,
    "graphs": [ {
      "balloonText": "[[category]]: <b>[[value]]</b>",
      "fillAlphas": 0.8,
      "lineAlpha": 0.2,
      "type": "column",
      "valueField": "visits"
    } ],
    "chartCursor": {
      "categoryBalloonEnabled": false,
      "cursorAlpha": 0,
      "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
      "gridPosition": "start",
      "gridAlpha": 0,
      "tickPosition": "start",
      "tickLength": 20
    },
    "export": {
      "enabled": true
    }
  
  } );
  </script>


