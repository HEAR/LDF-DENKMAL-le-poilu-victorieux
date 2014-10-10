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
      
      </head>
    <body>
        
    <!--BACKGROUNG-->
        
    <div class="back"></div>
        
    <!--HEADER-->
    
    <?php include '../navigation.php';?>
        
    <!--END HEADER-->
            <div class="container">
        
        <div class="indicateur">

        <?php include '../etapes/etapes3.php';?>
        </div>
        <h1 id="bigtitre">Choix de l'&eacute;pitaphe <span style="font-weight:100;">Quel sont les noms de vos h&eacute;ros ?</span></h1>        
        <div class="contentbox3"> 
            <div class="liste-quefaire"><p>Cliquez sur le texte pour modifier la liste de noms.</p></div>
        <div class="texte-epitaphe">
            </div>
       <div class="liste">
           <h5>&Agrave; nos morts</h5>
             <div class="text-entree-liste">
                <form>
<TEXTAREA required onkeyup="reste(this.value);" maxlength="250" class="text-entree" name="champ" rows=5 cols=40>
   Philippe Morris, Chuck Candel, Antoine H&eacute;l&egrave;ne, Lucas Mourra, Octave Desch&ecirc;nes, Henri Lucien, Roger Ruais, Burnel Fortier, Arthur de la Veigne, Denis Beaujoli, Simon Sidney, Avril Deryes.</TEXTAREA>

                 </form>
           </div>  
           
                   <div class="modification">
            
            <span id="caracteres">250</span> caractères restants
            <script type="text/javascript">
                function reste(texte)
                {
                    var restants=250-texte.length;
                    document.getElementById('caracteres').innerHTML=restants;
                }
            </script>
                </div>
           
           <a id="pasdepadding"  href="../ornements/ornements-vict-drapeau-socle1.php"><div id="bouton-epitaphe"><i class="fa fa-check"></i>&nbsp;&nbsp;Valider </div></a>
           
                </div>
                
                        <div class="statuemini">
            <img id="statmin-drapeau" src="../statues/statue3min.png"/>
            <img style="display:none;" accesskey=""id="soclemin" src="../socles/imgs-socle/socle6.png">
            <img id="soclemin" src="../socles/imgs-socle/socle7.png">
            <img style="display:none;" id="soclemin" src="../socles/imgs-socle/socle8.png">
                </div>
</div>  
                
                
    </div>
        </body>
    </html>