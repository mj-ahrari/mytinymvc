<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mvc</title>
    <link rel="stylesheet" href="<?php echo BASE_URL.'public/css/bootstrap.min.css' ?>" media="all" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'public/css/style.css'?>" media="all" type="text/css">
</head>
<body>
<section id="app">

    <nav class="navbar navbar-expand-lg navbar-dark  bg-blue">
        <a class="navbar-brand" href="<?php echo BASE_URL ?>">MVC tutorial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                foreach($categories as $menuCategory){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL."home/category/".$menuCategory['id'] ?>"><?=$menuCategory['name']?></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>