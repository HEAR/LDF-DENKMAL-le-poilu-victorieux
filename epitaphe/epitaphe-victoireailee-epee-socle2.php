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
        
                <?php include '../etapes/etapes3.php';?>
        <h1 id="bigtitre">Rédigez votre l'&eacute;pitaphe <span style="font-weight:100;">Quel hommage rendre &agrave; vos h&eacute;ros ?</span></h1>  
            
        <div class="contentbox3">  
            
            <div class="epitaphe-quefaire"><p>Cliquez sur le texte pour modifier l'épitaphe.</p></div>
        <div class="texte-epitaphe">
            </div>
       <div class="eptiaphe">
             <div class="text-entree">
                <form>
<TEXTAREA required onkeyup="reste(this.value);" maxlength="105" class="text-entree" name="champ" rows=5 cols=40>Gloire et honneur aux enfants de Trembley-les-gunesses, morts pour la patrie.</TEXTAREA>
                    <p id="quatorze">1914 - 1918</p>

                 </form>
           </div>  
           
                   <div class="modification">
            
            <span id="caracteres">105</span> caractères restants
            <script type="text/javascript">
                function reste(texte)
                {
                    var restants=105-texte.length;
                    document.getElementById('caracteres').innerHTML=restants;
                }
            </script>
                </div>
           
           <a href="../liste/liste-victoireailee-epee-socle2.php">
               <div id="bouton-epitaphe"><i class="fa fa-check"></i>&nbsp;&nbsp;Valider</div></a>
           
                </div>
                
                        <div class="statuemini">
            <img id="statmin" src="../statues/statue2min.png" alt="Victoire ailée (2) (Épée)">
            <img id="soclemin" src="../socles/imgs-socle/socle3.png">
            <img style="display:none;" id="soclemin" src="../socles/imgs-socle/socle4.png">
            <img style="display:none;" id="soclemin" src="../socles/imgs-socle/socle5.png">
                </div>
</div>  
                
                
    </div>
        </body>
    </html>