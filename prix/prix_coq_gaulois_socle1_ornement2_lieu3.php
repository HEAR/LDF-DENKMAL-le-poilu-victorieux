    <?php include '../header.php';?>
    <body>
        
    <!--BACKGROUNG-->
        
    <div class="back"></div>
        
    <!--HEADER-->
    
    <?php include '../navigation.php';?>
        
    <!--END HEADER-->
        <div class="container">
                     
        <div class="contentboxprix"> 
            <h2 id="titre">R&eacute;capitulatif de votre commande</h2>   
             
			<div class="content-bloc1">
			<div class="statueprix">
            <img id="statprix-coq" src="../statues/statue4.png"/>
            <img id="socleprix" src="../socles/imgs-socle/socle1.png">
            <img id="ornementprixobe" src="../ornements/img/ornement2.png">
            <img id="listeprix" src="../prix/img/liste.png">
                </div>
            
            <div class="numeros"><a id="un-coq">1</a><a id="deux">2</a><a id="trois-obe">3</a><a id="quatre-obe">4</a></div>
            
            <div class="recap">
            <ul>
                <li><?php include '../prix/textes/txt-vict-epee.php';?></li>
                <li><?php include '../prix/textes/txt-socle1.php';?></li>
                <li><?php include '../prix/textes/txt-epitaphe.php';?></li>
                <li><?php include '../prix/textes/txt-ornement2.php';?></li>
            </ul>                
            </div>
            <p id="total">Total TTC : 15000F</p>
			</div>
            <div class="separateur"></div>
            <div class="content-bloc1">
            <div id="carte"></div>
            <div class="prix_lieux">
            <?php include '../prix/textes/txt-lieu3.php';?>
            </div>
			</div>
            <div class="separateur2"></div>
            
            <div class="papacharts">
            <div class="charts">
            <h2>Détail du monument</h2>
            <div class="colonnes">
                <div class="charts1">
                    <h3>Statue</h3>
                    <canvas id="linestatue" width="400" height="266"></canvas>
                </div>
                
                <div class="charts2">
                    <h3 class="line">Socle</h3>
                    <canvas id="linesocle" width="400" height="266"></canvas>
                </div>
                </div>
            </div>
            
            <div class="charts-line2">
            <div class="colonnes">
                <div class="charts1">
                    <h3>Ornements</h3>
                    <canvas id="lineornement" width="400" height="266"></canvas>
                </div>
                
                <div class="charts2">
                    <h3 class="line">Lieu</h3>
                    <canvas id="linelieu" width="400" height="266"></canvas>
                </div>
                </div>
            </div>
            
                <div class="big-charts">
            <h3>L'ensemble</h3>
            <canvas id="radar" width="580" height="420"></canvas>
                </div>
            </div>
            
            <div class="conclusion">
            <p> Au final, votre monument est plutôt :</p>
            <div class="tag"><h2>H&eacute;ro&iuml;que</h2> <h2>Patriote</h2></div>
            <div class="separateur3"></div>
            <a href="../gallerie-photo/gallerie-coq-gaulois.php">
                <div id="bouton-prix"><i class="fa fa-truck"></i>&nbsp;&nbsp;Commander </div></a>
            </div>
            
            
            
        </div>
        </div>
  
        
        <script>
            
            // radar
            var radarData = {
    labels: ["Humaniste", "Endeuilli", "Républicain", "Figuratif", "Patriote", "Héroique", "Religieux", "Abstrait"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(221, 66, 49, 0.76)",
            strokeColor: "#DD4231",
            pointColor: "rgba(221, 66, 49, 0.82)",
            pointStrokeColor: "#DD4231",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [14, 16, 13, 16, 18, 20, 16, 10]
        },

    ]
};
                        // get line chart canvas
            var radar = document.getElementById('radar').getContext('2d');
            var radar = new Chart(radar).Radar(radarData);
            
</script>
        
         <script>
                    //line
            
            var linestatueData = {
	labels: ["Humaniste", "Endeuilli", "Républicain", "Figuratif", "Patriote", "Héroique", "Religieux", "Abstrait"],
	datasets : [
		{
			fillColor : "rgba(221, 66, 49, 0.76)",
			strokeColor : "#DD4231",
			pointColor : "rgba(221, 66, 49, 0.82)",
			pointStrokeColor : "#DD4231",
			data : [2, 2, 8, 5, 8, 8, 2, 5]
		}
	]
}
            
                        // get line chart canvas
            var linestatue = document.getElementById('linestatue').getContext('2d');
            var linestatue = new Chart(linestatue).Bar(linestatueData);
        
        
        </script>
        
        <script>
                    //line
            
            var linesocleData = {
	labels: ["Humaniste", "Endeuilli", "Républicain", "Figuratif", "Patriote", "Héroique", "Religieux", "Abstrait"],
	datasets : [
		{
			fillColor : "rgba(221, 66, 49, 0.76)",
			strokeColor : "#DD4231",
			pointColor : "rgba(221, 66, 49, 0.82)",
			pointStrokeColor : "#DD4231",
			data : [6,6,0,0,4,4,8,0]
		}
	]
}
            
                        // get line chart canvas
            var linesocle = document.getElementById('linesocle').getContext('2d');
            var linesocle = new Chart(linesocle).Bar(linesocleData);
        
        
        </script>
        
        <script>
                    //line
            
            var lineornementData = {
	labels: ["Humaniste", "Endeuilli", "Républicain", "Figuratif", "Patriote", "Héroique", "Religieux", "Abstrait"],
	datasets : [
		{
			fillColor : "rgba(221, 66, 49, 0.76)",
			strokeColor : "#DD4231",
			pointColor : "rgba(221, 66, 49, 0.82)",
			pointStrokeColor : "#DD4231",
			data : [6,8,0,3,0,0,6,5]
		}
	]
}
            
                        // get line chart canvas
            var lineornement = document.getElementById('lineornement').getContext('2d');
            var lineornement = new Chart(lineornement).Bar(lineornementData);
        
        
        </script>
        
        <script>
                    //line
            
            var linelieuData = {
	labels: ["Humaniste", "Endeuilli", "Républicain", "Figuratif", "Patriote", "Héroique", "Religieux", "Abstrait"],
	datasets : [
		{
			fillColor : "rgba(221, 66, 49, 0.76)",
			strokeColor : "#DD4231",
			pointColor : "rgba(221, 66, 49, 0.82)",
			pointStrokeColor : "#DD4231",
			data : [0,0,5,8,6,8,0,0]
		}
	]
}
            
                        // get line chart canvas
            var linelieu = document.getElementById('linelieu').getContext('2d');
            var linelieu = new Chart(linelieu).Bar(linelieuData);
        
        
        </script>
        
        
    </body>
</html>