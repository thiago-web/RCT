<?php 
$conect = include("../../banco/conection.php");

$sql_info = "SELECT sum(id), data FROM cancelamentos";
$r_info = mysqli_query($conect, $sql_info);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teste</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
<canvas id="myChart" style="width:100%;max-width:700px"></canvas>
</body>
<script type="text/javascript">
$.ajax({
	type: 'POST',
	url:'chart_line.php'
	dataType: 'json',
	success: function(data){
		var ctx = document.getElementById("myChart").getContext("2d");
		var myLineChart = new Chart(ctx, {
			type:'line',
			data: data
		});
	}
});

</script>
<script type="text/javascript">

// $.ajax({
//     type: 'POST',
//     url: 'templates/getdata.php',
//     dataType: 'json', //tell jQuery to parse received data as JSON before passing it onto successCallback
//     success: function (data) {
//         var ctx = document.getElementById("OmzetChart").getContext("2d");
//         var myLineChart = new Chart(ctx, {
//             type: 'line',
//             data: data //jQuery will parse this since dataType is set to json
//         });
//     }
// });

// Cordenadas de X e Y


// var xyValues = [
//   {x:50, y:7},
//   {x:60, y:8},
//   {x:70, y:8},
//   {x:80, y:9},
//   {x:90, y:9},
//   {x:100, y:9},
//   {x:110, y:10},
//   {x:120, y:11},
//   {x:130, y:14},
//   {x:140, y:14},
//   {x:150, y:15}
// ];

// var myChart = new Chart("myChart", {
//   type: "line",
//   data: { 
//   	datasets: [{
//       pointRadius: 4,
//       pointBackgroundColor: "rgba(0,0,255,1)",
//       data: xyValues
//     }]},
//   options: {}
// });	

</script>
</html>