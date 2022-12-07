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
                'name' =>'thor',
            'creator' =>'marvel',
            'year' =>'2022'
            ],
           [
            'name' =>'dr.strange',
           'creator' =>'marvel',
           'year' =>'1990'
           ],
          [
            'name' =>'end game',
           'creator' =>'marvel',
           'year' =>'2000'
           ],
          [
            'name' =>'der Sueden',
           'creator' =>'tom',
           'year' =>'2005'
           ]
        ];

     function filterByYear($autos, $year)
      {
            $filteredAutos = [];    
       
       foreach ($autos as $auto) {
            if($auto['year']=== $year) {
                    $filteredAutos[] = $auto;
            }
         }
         return $filteredAutos;
    }

       

    ?> 
       
    

        <h1>
        
      
        </h1>
    <h1>
    Filme
    </h1>
    <ul>

    <?php foreach (filterByYear($autos,'2022') as $auto) : ?>
        <?php if ($auto['year'] <= '2022') :  ?>
        <li>
            

            <?= $auto['name']; ?>         (<?= $auto['creator'] ?>)      -By <?= $auto['year'] ?>

              </a>
            </li>
           
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>

   
    </p>



</html>