<html>
<head>
    <title>Red Nucleus: Award-winning learning, performance and process solutions for the life sciences industry</title>
    <link rel="icon" type="image/x-icon" sizes="16x16" href="https://www.rednucleus.com/images/favicon.ico">
    <style>
    #chart {
    border: 5px solid #AAA;
    min-height: 450px;
    }
    </style>
</head>
<body>
<h5 style="text-align: center; text-decoration: black;font-weight: bold;font-family: Arial"> Assessment </h5>
<div id="chart">
    <div id="chart_div"></div>
</div>
</body>
</html>
<?php
$pieArray = array();
$pieArray[] = array("Project Name", "Employees", ["role" => 'style']);
$colors = ['#1E90FF', '#6495ED', '#4682B4', '#5F9EA0', '#7B68EE', '#6A5ACD', '#483D8B', '#4169E1'];
$i = 0;
foreach ($projectsList as $name => $emp) {

    $color = "color:$colors[$i]";
    $pieArray[] = array($emp['project_name'], (int)$emp['employees'], $color);
    $i++;
    if($i>=count($colors)) {
        $i = 0;
    }
}
$pieString = json_encode($pieArray);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    customGraphs ('<?php echo "bar";?>','<?php echo json_encode($pieArray);?>','<?php echo "Project Employees";?>','<?php echo " ";?>','<?php echo "chart_div";?>','<?php echo 380;?>','400','vertical');
    function customGraphs(graph_type,JsonString,title, sub_title, div_id,width, height,bars)
    {
        google.charts.load('current', {'packages':[graph_type]});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts()
        {
            /*var data = google.visualization.arrayToDataTable([
                  ['', '', '', ''],
                  ['Harish', 1000, 400, 200],
                  ['Girish', 1170, 460, 250],
                  ['Ganesh', 660, 1120, 300],
                  ['Suresh', 1030, 540, 350]
                ]);
            */
            var data = google.visualization.arrayToDataTable(<?php echo $pieString;?>);
            var options = {
                chartArea: {
                backgroundColor:
                    {
                        fill: '#000000',
                        fillOpacity: 0.1,
                        width:width,
                    },
                left:20,
                top:0,
                },
                tooltip: {isHtml: true},
                backgroundColor: {
                    fill: '#000000',
                    fillOpacity: 0.8
                },
                chart: {
                    title: title,
                    subtitle: sub_title,
                },
                bars: 'vertical',
                vAxis: {format: 'decimal'},
                height: 400,
                allowHtml : true,
                legend: {
                    position: 'none'
                }
            };
            var charts = new google.charts.Bar(document.getElementById(div_id));
            charts.draw(data, google.charts.Bar.convertOptions(options));
            window.addEventListener('resize', drawCharts, false);
        }
    }
</script>
