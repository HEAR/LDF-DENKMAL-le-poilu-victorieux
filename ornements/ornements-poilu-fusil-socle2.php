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
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     
    <!--clearbox-->
      <script src="../clearbox/clearbox.js" type="text/javascript"></script>
      
      <style>
          ::-moz-scrollbar {background-color:#fff; height:8px; width:4px}
          ::-moz-scrollbar-thumb:vertical {background-color:#c9c9c9; height:20px}
          ::-moz-scrollbar-thumb:horizontal {background-color:#c9c9c9; height:8px!important}

          ::-webkit-scrollbar {background-color:#fff; height:8px; width:4px}
          ::-webkit-scrollbar-thumb:vertical {background-color:#c9c9c9; height:20px}
          ::-webkit-scrollbar-thumb:horizontal {background-color:#c9c9c9; height:8px!important}
    
      </style>
      
      </head>
    <body>
        
    <!--BACKGROUNG-->
        
    <div class="back"></div>
        
    <!--HEADER-->

    <?php include '../navigation.php';?>
        
    <!--END HEADER-->
            <div class="container">
        
        <?php include '../etapes/etapes4.php';?> 
        <h1 id="bigtitre">Choix d'un ornement <span style="font-weight:100;">Terminez votre monument.</span></h1>        
        <div class="contentbox3"> 
            
            <div id="marges"><img id="socle_back_ornements" src="../socles/imgs-socle/soclebig.png"></div>
            
                    <div id="ornements-slideshow">
            <div id="ornement_s1">
                <div id="ornement_s2">
                    <div id="ornement_s3">
                        <div id="ornement_s4">
                            <div id="ornement_s5">
                                
                                <a id="ornement_chevron2" class="next-ornement next1-ornement" href="#ornement_s2"></a>
                                <a id="ornement_chevron" class="prev-ornement prev2-ornement" href="#ornement_s1"></a>
                                <a id="ornement_chevron2" class="next-ornement next2-ornement" href="#ornement_s3"></a>
                                <a id="ornement_chevron" class="prev-ornement prev3-ornement" href="#ornement_s2"></a>
                                <a id="ornement_chevron2" class="next-ornement next3-ornement" href="#ornement_s4"></a>
                                <a id="ornement_chevron" class="prev-ornement prev4-ornement" href="#ornement_s3"></a>
                                <a id="ornement_chevron2" class="next-ornement next4-ornement" href="#ornement_s5"></a>
                                <a id="ornement_chevron" class="prev-ornement prev5-ornement" href="#ornement_s4"></a>
                        
                                    <ul id="S_ornement_content">
                                        <li class="ornement1">
                                            <img src="../ornements/img/ornement1.png">
                                        </li>
                                        <li class="ornement2">
                                            <img src="../ornements/img/ornement2.png">
                                        </li>       
                                        <li class="ornement3">
                                            <img src="../ornements/img/ornement3.png">
                                        </li>            
                                        <li class="ornement4">
                                            <img id="ornement4" src="../ornements/img/ornement4.png" style="width:240px;" >
                                        </li>            
                                        <li class="ornement5">
                                            <img src="../ornements/img/ornement5.png">
                                        </li>            
                                    </ul>  

                                <?php include '../textes/contenu-ornement.php';?>

                                <div id="boutonsdevalidations">
                        <a class="boutonsavecclasse1" href="../cartes/choix_emplacement_poilu_fusil_socle2_ornement1.php">
                            <div id="bouton-ornement">Choisir cet ornement</div></a>
                        <a class="boutonsavecclasse2"  href="../cartes/choix_emplacement_poilu_fusil_socle2_ornement2.php">
                            <div id="bouton-ornement">Choisir cet ornement</div></a>    
                        <a class="boutonsavecclasse3" href="../cartes/choix_emplacement_poilu_fusil_socle2_ornement3.php">
                            <div id="bouton-ornement">Choisir cet ornement</div></a>
                        <a class="boutonsavecclasse4"  href="../cartes/choix_emplacement_poilu_fusil_socle2_ornement4.php">
                            <div id="bouton-ornement">Choisir cet ornement</div></a>    
                        <a class="boutonsavecclasse5"  href="../cartes/choix_emplacement_poilu_fusil_socle2_ornement5.php">
                            <div id="bouton-ornement">Choisir cet ornement</div></a>    
                                </div>
     
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
            
            
            
                <div class="statuemini">
                    <img id="statmin-laurier" src="../statues/statue14min.png"/>
                    <img style="display:none;" accesskey=""id="soclemin" src="../socles/imgs-socle/socle3.png">
                    <img style="display:none;" id="soclemin" src="../socles/imgs-socle/socle4.png">
                    <img id="soclemin" src="../socles/imgs-socle/socle5.png">
                </div>
            
            
            </div>
                
                </div>

        <?php include '../textes/ensavoirplus-ornement.php';?>
        
    </body>
</html>