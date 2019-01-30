<html>
  <head>

    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

    body{
      background-image: url('https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
    font-family: 'Montserrat';
    background-size:cover;
    background-repeat:no-repeat;
    background-position: center center;
    }

    .regions_div{
      padding:40px;
    }

    input[type=text]{
      border-radius: 10px;
      border-style: solid;
    }

    .bg{
      padding:40px;
    }
    input[type=submit]{
      border: 10px;
      border-color: black;
      background-color: transparent;
      font-size: 30px;
      cursor: pointer;
    }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('upcoming', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],['Afghanistan', 29], ['Albania', 30], ['Algeria', 31], ['Andorra', 32], ['Angola', 33], ['Antigua and Barbuda', 34], ['Argentina', 35], ['Armenia', 36], ['Australia', 37]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body><center>
    <div id="regions_div" style="padding:70px;width: 900px; height: 500px;"></div>

    <?php
    $stuff = exec('python jdd.py', $output, $return);
    $a=null;
    foreach($output as $key=>$thing){
     if($key==1)
     print chr(0x0D); //Newline feed after PNG declaration
     if($key>0)
     print "\n";
     print $thing;
    }
    ?>


  </body>
</html>
