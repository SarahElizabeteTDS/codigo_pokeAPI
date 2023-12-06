<?php 

   //$nome = readline("Qual o seu pokemon?");

   $short = "p";

   $long = ["pokemon:"];

  $options = getopt($short, $long);

  $nome = $options['pokemon'];

  $dados_em_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome}");

   $pokemon = json_decode($dados_em_texto, true);

  foreach ($pokemon['moves'] as $move) 
  {
    print(" - " . $move['move']['name'] . "\n");
  }

   print(strtoupper($pokemon['name'])  . "\n");
   print("altura: " . $pokemon['height'] . "\n");
   print("peso: " . $pokemon['weight'] . "\n");
   print("movimentos:" . $move . "\n");
   
   
