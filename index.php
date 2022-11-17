<!doctype html>
<html> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
           
    display: grid;
    place-items: center;
    height: 10vh;
    margin: 0;
    font-family: sans-serif;

        }
        </style>

</head>
<body>
    <?php
        $autos = [
            "la ferrari",
            "bugatti grand sports",
            "ds survolt",
            "lamboghini aventador",
            "la blance"
        ];
    ?> 
       
    

        <h1>
        
      
        </h1>
    <h1>
    gekaufte autos
    </h1>
    <ul>

       <?= $autos[0] ?>

    </ul>
</body>
</html>