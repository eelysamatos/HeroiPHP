<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

    $universo = ("Marvel ou DC?");
    $universo = $universo.toLowerCase();
    echo "$universo";
    print_r ($universo);

                   
           if ($universo == "marvel") {
                
                $listaHerois = 
                [
                    'homem de ferro',
                    'thor',
                    'vampira',
                    'ciclope',
                    'polaris'
                ];
                print_r ($listaHerois);

                $heroi = "Digite o nome de um herói";
                $heroi = $heroi.toLowerCase();
                echo "$heroi";
                print_r ($heroi);

                for($i = 0; $i <= 4; $i++){

                    if($heroi == $listaHerois[i]){
                        echo( "universo Marvel e super herói " + $listaHerois[i] );
                    }

                }

            }else if($universo == "dc"){

                $listaHerois = 
                [
                    'flash',
                    'batman',
                    'aquaman',
                    'mulher maravilha',
                    'lanterna verde'
                ];
                print_r ($listaHerois);

                $heroi = "Digite o nome de um herói";
                $heroi = $heroi.toLowerCase();
                echo "$heroi";          

                for($i = 0; $i <= 4; $i++){

                    if($heroi == $listaHerois[i]){
                        echo( "universo DC e super herói " + $listaHerois[i] );
                    }

                }

            }else{

            }
  ?>

</body>
</html>