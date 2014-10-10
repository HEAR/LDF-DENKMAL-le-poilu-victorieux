<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title>Le Poilu Victorieux</title>
    
    <!--Stylesheet-->
    <link rel="stylesheet" href="../style.css" type="text/css" media="screen">
      
      
    <!--Fonts-->
      <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    <!--Font Awesome-->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      
      </head>
    <body>
        
    <!--BACKGROUNG-->
        
    <div class="back"></div>
    
    <!--HEADER-->
    
    <div class="menu"><i class="fa fa-angle-left fa-2x"></i> <p id="ouvrir">&nbsp;Menu</p></div>
        
    <?php include '../navigation.php';?>
        
    <!--END HEADER-->
        
    <div class="container">
        
		<?php include '../etapes/etapes1.php';?>
        
        <h1 id="bigtitre">Choix du style <span style="font-weight:100;">D&eacute;finissez l'esprit de votre monument</span></h1>
        <div class="selecteur">
            <a href="../selectionmonum/choixstat4.php">
                <div class="droite">
                    <div id="sentinelle" class="rectangle">
                        <h2 class="choix" id="aleg">Sentinelle</h2>    
                    </div>
                    <div class="covopa2">
                    
                    </div>
                </div>
            </a>
            <div class="oubien"><p id="oubientext">OU</p></div>
            <a href="../selectionmonum/choixstat3.php">
                <div class="gauche">
                    <div id="guerriervictorieux" class="rectangle2">
                    <h2 class="choix" id="mili">Victorieux</h2>
                    </div>
                    <div class="covopa"></div>
                </div>
            </a>
        </div>
    </div>
           </body>
    </html>