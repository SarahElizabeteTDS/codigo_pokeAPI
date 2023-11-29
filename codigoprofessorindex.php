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
            .pokemon
            {
                width: 15%;
                border: solid 2px #555; 
                padding: 28px; 
                margin: 15px;
                background: #666;
                float: left;
            }
            .pokemons img
            {
                max-width: 100%;
            }
        </style>

    </head>
    
    <body>
        <div id = "pesquisa">
            <form>
                <input type = "text" placeholder = "Digite um Pokémon">
                <input type = "submit" value = "Buscar">
            </form>
        </div>

        <div id = "pokemons">
            <?php for($i = 0; $i < 20; $i++):?>
                <div class = "pokemon">
                    <img src = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/448.png" alt = "Lucario" width = "300px">

                    <h1><?php print $pokemons['results'][$i]['name'];?></h1>
                    <p>peso: 0.8</p>
                    <p>altura: 0.8</p>
                </div>
            <?php endfor; ?>
        </div>

    </body>
</html>
