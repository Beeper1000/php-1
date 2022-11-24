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
           ]
        ];
        
    ?> 
       
    

        <h1>
        
      
        </h1>
    <h1>
    gekaufte autos
    </h1>
    <ul>

    <?php foreach ($autos as $auto) : ?>
       <?php if ($book['marke'] = 'bugatti') :  ?>
        <li>
            <a href="<?= $book['link']?> ">

            <?= $auto['name']; ?>      (<?= $auto['year'] ?>)    -By <?= $auto['marke'] ?>

              </a>
            </li>
           
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</html>