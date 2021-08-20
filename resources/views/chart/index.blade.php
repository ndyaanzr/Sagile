@extends('layouts.app2')



<style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
</style>

@section('dashboard')

                     
@endsection

@section('content')

<html>
<head>
<br>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Planning');
      data.addColumn('number', 'Actual');

      data.addRows([
        [1,  82, 82],
        [2,  80, 80],
        [3,  78, 77],
        [4,  76, 75],
        [5,  74, 73],
        [6,  72, 71],
        [7,  70, 69],
        [8,  68, 67],
        [9,  66, 65],
        [10, 64, 63],
        [11, 62, 61],
        [12, 60, 59],
        [13, 58, 57],
        [14, 56, 55],
        [15, 54, 53],
        [16, 52, 51],
        [17, 50, 49],
        [18, 48, 47],
        [19, 46, 45],
        [20, 44, 43],
        [21, 42, 41],
        [22, 40, 39],
        [23, 38, 37],
        [24, 36, 35],
        [25, 34, 33],
        [26, 32, 31],
        [27, 30, 29],
        [28, 28, 27],
        [29, 26, 25],
        [30, 24, 23],
        [31, 22, 21]
      ]);

      var options = {
        chart: {
          title: 'Burn Down Chart',
          subtitle: ''
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'bottom'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_bottom_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_bottom_x"></div>
</body>
</html>

@endsection
