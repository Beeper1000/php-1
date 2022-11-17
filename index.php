<!doctype html>
<html> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
           
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;

        }
        </style>

</head>
<body>
<?php?> 
       <?php
        $buch1 = " -dunkle materie";
        $gelesen = false;
        
        if($gelesen)
        {
            $aussage = "du hast gelesen: $buch1";    
        }else{
            $aussage = "du hast nicht gelesen: $buch1"; 
        }

        ?> 
	<h1>
         <?php 
         $gruss = "Hello ";
         $grussZiel = "World ";
        
       
         ?> 
    </h1>
	<h1>
    <?= $aussage ?> 
    </h1>
</body>
</html>