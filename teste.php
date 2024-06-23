<!DOCTYPE html>
<html>
  <head>
    <title>Maturity Radar Demo</title>
  </head>
  <body>

    <input type="text" id="teste">
    <div id="microservices"></div>
    <script src="/js/radar.js"></script>
    <script>

      let valor =parseInt(document.getElementById("teste").value = 10)
      console.log(valor)
      console.log(typeof(valor))
      radar.show('#microservices', {
        size: 700,
        curve: false,
        metrics: [
          {
            name: "Força",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
              
            ],
            target: 2,
            actual: 2.5
          },
          {
            name: "Constituição",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 3,
            actual: 2
          },
          {
            name: "Destreza",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 2,
            actual: 0
          },
          {
            name: "Sabedoria",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 3,
            actual: 2
          },
          {
            name: "Carisma",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 2,
            actual: 1
          }
        ]
      });
    </script>
  </body>
</html>
