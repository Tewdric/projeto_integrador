<html>
  <head>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js">     </script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>
    <style type="text/css">
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #container{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="container"></div>
    <script>
      anychart.onDocumentReady(function () {
        // drawing our chart goes here
        var data1 = [
        {x: "Constituição", value: 16},
        {x: "Força", value: 15},
        {x: "Armadura", value: 13},
        {x: "Ataque Especial", value: 18},
        {x: "Defesa Especial", value: 20},
        {x: "Locomoção", value: 10},

        ];


        // create radar chart
        var chart = anychart.radar();

        // set chart title

        // set chart yScale settings
        chart.yScale()
        .minimum(0)
        .maximum(100)
        .ticks({'interval':20});

        // create first series
        chart.line(data1)
    

        // set container id for the chart
        chart.container('container');
        // initiate chart drawing
        chart.draw();

        // set chart yScale settings
        chart.yScale()
        .minimum(0)
        .maximum(20)
        .ticks({'interval':3});
        chart.yGrid().palette(["black 0.5", "gray 0.2"]);
        // create first series
        chart.area(data1).name('Anão').markers(true).fill("#f51707", 0.5).stroke("#f51707")

        
            });
    </script>
  </body>
</html>