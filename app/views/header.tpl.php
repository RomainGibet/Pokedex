<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
     <base href="<?= $absoluteURL?>">
    <link rel="stylesheet" href="css/style.css">
   
    <title>Document</title>
</head>

<body>
    <header>

        <nav class="header">

            <ul class = "flex-nav">
            <li>Pokédex</li>
</ul>
            
        <ul class="flex-nav">
                <li class="li-nav">Liste</li>
                <li class="li-nav"><a href="<?php $router->generate("liste-page") ?>">Types</a></li>
            </ul>

</nav>

    </header>