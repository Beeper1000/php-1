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
            [
                'name' =>'la ferrari',
            'marke' =>'ferrari',
            'link' =>'https://de.wikipedia.org/wiki/Ferrari',
            'year' =>'1213'
            ],
           [
            'name' =>'grand sports',
           'marke' =>'bugatti',
           'link' =>'https://de.wikipedia.org/wiki/Bugatti',
           'year' =>'1990'
           ],
          [
            'name' =>'vitesse',
           'marke' =>'bugatti',
           'link' =>'https://de.wikipedia.org/wiki/Bugatti',
           'year' =>'1995'
           ],
          [
            'name' =>'Chiron',
           'marke' =>'bugatti',
           'link' =>'https://de.wikipedia.org/wiki/Bugatti',
           'year' =>'2005'
           ]
        ];

     function filterByMarke($autos, $marke)
      {
            $filteredAutos = [];    
       
       foreach ($autos as $auto) {
            if($auto['marke']=== $marke) {
                    $filteredAutos[] = $auto;
            }
         }
         return $filteredAutos;
    }

       

    ?> 
       
    

        <h1>
        
      
        </h1>
    <h1>
    gekaufte autos
    </h1>
    <ul>

    <?php foreach (filterByMarke($autos,'bugatti') as $auto) : ?>
        <?php if ($auto['marke'] === 'bugatti') :  ?>
        <li>
            <a href="<?= $auto['link']?> ">

            <?= $auto['name']; ?>      (<?= $auto['year'] ?>)    -By <?= $auto['marke'] ?>

              </a>
            </li>
           
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>

   
    </p>



</html>