<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="indexphp.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <?php

     $livreA = array(
       'name' => 'TitreA',
       'price'=> 20,
       'note' => 3,
       'client' => 'prime'
     );

        $livreB = array(
          'name' => 'TitreB',
          'price'=> 20,
          'note' => 3,
          'client' => 'pas prime'
        );

        $livreC = array(
          'name' => 'TitreC',
          'price'=> 25,
          'note' => 5,
          'client' => 'prime'
        );

           $livreD = array(
             'name' => 'TitreD',
             'price'=> 20,
             'note' => 2,
             'client' => 'prime'
           );
           $livreE = array(
             'name' => 'TitreE',
             'price'=> 35,
             'note' => 3,
             'client' => 'pas prime'
           );

              $livreF = array(
                'name' => 'TitreF',
                'price'=> 15,
                'note' => 3,
                'client' => 'prime'
              );
              $livreG = array(
                'name' => 'TitreG',
                'price'=> 20,
                'note' => 5,
                'client' => 'prime'
              );

                 $livreH = array(
                   'name' => 'TitreH',
                   'price'=> 25,
                   'note' => 3,
                   'client' => 'prime'
                 );

        $LIVRE = array($livreA, $livreB,$livreC,$livreD,$livreE,$livreG,$livreH);

        foreach ($LIVRE as $info)
        {
          echo '<div class=tr>';
          echo $info['name']. '<br />'.$info['price']. '<br />'.$info['note']. '<br />'.$info['client']. '<br/ >';
         echo '</div>';
         echo  '<br  />';
     }




     ?>

  </body>
</html>
