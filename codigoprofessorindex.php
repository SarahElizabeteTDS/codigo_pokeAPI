<?php

    // include 'logica.php';

    $pokemons_api = file_get_contents('https://pokeapi.co/api/v2/pokemon');
    $pokemons = json_decode($pokemons_api, true);

    // $dados_em_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome}");
    // $pokemon = json_decode($dados_em_texto, true);

    for ($i=0; $i < 20; $i++) 
    { 
        $pokemon = $pokemons['results'][$i];

        $todas_api = file_get_contents($pokemon['url']);
        $pokemons['results'][$i] = json_decode($todas_api, true);
    }

    if(isset($_GET['capo_busca']))
    {
        

    }

?>

<html>
    
    <head>
        <title>Pokedex</title>

        <style>
            #pesquisa
            {
                background: #c92626;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 20px;
                text-align: center;
            }

            #pesquisa input [type = "text"]
            {
                width: 300px;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 15px;
            }

            #pesquisa input [type = "submit"]
            {
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 15px;
            }

            .pokemon
            {
                width: 15.4%;
                border: solid 4px #000; 
                padding: 28px; 
                margin: 10px 10px 10px 10px;
                background: #888;
                float: left;
                text-align: center;
            }
            .pokemon img
            {
                max-width: 100%;
                height: 300px;
            }
        </style>

    </head>
    
    <body>
        <div id = "pesquisa">
            <form method = "get">
                <input type = "text" name= "campo_busca" placeholder = "Digite um Pokémon">
                <input type = "submit" value = "Buscar">
            </form>
        </div>

        <div id = "pokemons">
            <?php for($i = 0; $i < 20; $i++):?>
                <div class = "pokemon">
                    <img src = " <?=$pokemons['results'][$i]['sprites']['other']['dream_world']['front_default']; ?> " alt = "pokémon!" width = "300px">

                    <h1><?php print $pokemons['results'][$i]['name'];?></h1>
                    <p><?php print "peso: " . ($pokemons['results'][$i]['weight'])/10 . "kg";?></p>
                    <p><?php print "altura: " . ($pokemons['results'][$i]['height'])/10 . "m";?></p>
                </div>
            <?php endfor; ?>
        </div>

    </body>
</html>
