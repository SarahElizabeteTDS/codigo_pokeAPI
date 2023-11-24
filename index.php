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
                padding: 15px; 
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

                    <h1>Lucario</h1>
                    <p>peso: 0.8</p>
                    <p>altura: 0.8</p>
                </div>
            <?php endfor; ?>
        </div>

    </body>
</html>
