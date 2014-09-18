/**
* LE POILU VICTORIEUX
*/

// url google docs : https://docs.google.com/spreadsheets/d/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/pubhtml
// demo récupéation tableau google : http://jsfiddle.net/lohic/D7Rsn/
// jquery cookie : https://github.com/carhartl/jquery-cookie/tree/v1.4.1


var sauvegarde;

// on crée le jeu de donnée à charger / sauvegarder avec le cookie
var dataUser = {
	'id_statue'     : false,
	'id_socle'      : false,
	'id_ornement'   : false,
	'epitaphe'      : false,
	'noms'          : false,
}

var googleDB = {
    'id_statue'        : {
        'id_tab'        : 1,
        'structure'     : [
            'id',          
            'urlimage',    
            'titre',       
            'meta',       
            'description',
            'branche',   
            'catalogue',  
            'prix'      
        ]
    },
    'id_socle'         : {
        'id_tab'        : 2,
        'structure'     : [
            'id',
            'urlimage',
            'titre',
            'description',
            'prix'
        ]
    },
    'id_ornement'      : {
        'id_tab'        : 3,
        'structure'     : [
            'id',
            'urlimage',
            'titre',
            'description',
            'prix'                        
        ]
    } 
};

/**
 * Quand jquery est prêt
 * @return {[type]} [description]
 */
$(document).ready(function(){

    console.log( '« Le poilu victorieux » — jquery ok' );


    redirection();


    // si on est sur la page fin (donc présence de #recap) on affiche les valeurs sauvegardées
    $('#recap #id_statue span').text(dataUser.id_statue);
    $('#recap #id_socle span').text(dataUser.id_socle);
    $('#recap #id_ornement span').text(dataUser.id_ornement);
    $('#recap #epitaphe pre').text(dataUser.epitaphe);
    $('#recap #noms pre').text(dataUser.noms);


    $lineData = {};
    getGDocLine('id_statue', 0);


    // quand on choisi un élément ou écrit un texte
    saveListChoice();

   $("#epitaphe").change(function(e){
        dataUser.epitaphe = $("#epitaphe").val();
        $.cookie('sauvegarde', JSON.stringify(dataUser) );
    });

    $("#noms").change(function(e){
        dataUser.noms = $("#noms").val();
        $.cookie('sauvegarde', JSON.stringify(dataUser) );
    });


    // quand on clique sur le bouton de suppression des informations sauvegardées
    $('#clear-cookie').click(function(e){
        $.removeCookie('sauvegarde');
        $('#valeur').text("nettoyage des cookies");
        if(confirm('recommencer depuis le début ?')){
            window.location.replace("index.html");
        }
    });
});


/**
 * gèsre la redirection à partir de la page d'accueil
 * @return {[type]} [description]
 */
function redirection(){
	var sPath = window.location.pathname;
	var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
	var page = sPage.split('.')[0];
	console.log("page : " + sPage);

	switch (sPage){

		case "index.html" :
			checkDataUser();
		break;

		case "etape1.html" :
			refreshData();
            loadGDocLine("id_statue");
		break;

		case "etape2.html" :
			refreshData();
            loadGDocLine("id_socle");
		break;

		case "etape3.html" :
			refreshData();
            loadGDocLine("id_ornement");
		break;

		case "etape4.html" :
			refreshData();
		break;

		case "etape5.html" :
			refreshData();
		break;

		case "fin.html" :
			refreshData();
		break;

		default :
			checkDataUser();
		break;

	}
}


/**
 * permet de vérifier les données existantes et éventuellement d'effectuer une redirection
 * @return {[type]} [description]
 */
function checkDataUser(){
	refreshData();

	// on commence à l'envers
	if(dataUser.noms !== false){
        if(confirm('vous avez déjà rempli toutes les étapes')){
    	   window.location.replace("fin.html");
        }
    }else if(dataUser.epitaphe !== false){
        if(confirm('il vous reste à choisir les noms')){
    	   window.location.replace("etape5.html");
        }
    }else if(dataUser.id_ornement !== false){
        if(confirm('il vous reste à choisir l\'épitaphe')){
    	   window.location.replace("etape4.html");
        }
    }else if(dataUser.id_socle !== false){
        if(confirm('il vous reste à choisir l\'ornement')){
            window.location.replace("etape3.html");
        }
    }else if(dataUser.id_statue !== false){
        if(confirm('il vous reste à choisir les socle')){
            window.location.replace("etape2.html");
        }
    }
}

/**
 * Sert à charger les données du cookie
 * et le cas échant de les créer
 * Permet également de remplir sélectionner les informations quand on est sur la bonne page
 * @return {[type]} [description]
 */
function refreshData(){
	/**
     * COOKIE
     */
    if( $.cookie('sauvegarde') ){
        sauvegarde = JSON.parse( $.cookie('sauvegarde') );

        //sauvegarde.test = "youpi 2";
        //$.cookie('sauvegarde', JSON.stringify(sauvegarde) );

        dataUser = sauvegarde;

    }else{
        sauvegarde = dataUser;
        $.cookie('sauvegarde', JSON.stringify(sauvegarde) );
    }

    if (dataUser.epitaphe    !== false){ $("#epitaphe").val(dataUser.epitaphe); }
    if (dataUser.noms        !== false){ $("#noms").val(dataUser.noms); }

    console.log('dataUser');
    console.log(dataUser);
}

/**
 * Charge l'ensemble des données d'un tableau
 * @param  {[type]} tableau [description]
 * @return {[type]}         [description]
 */
function loadGDocLine(tableau){
    var url = 'https://spreadsheets.google.com/feeds/list/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/'+googleDB[tableau].id_tab+'/public/values?alt=json&single=false';

    $.getJSON( url, function( data ) {

        $.each(data.feed.entry, function (key, val){

            $('#'+tableau).append(
                "<li><span>"+key+" </span>"+val.gsx$titre.$t +"</li>"
            );

        });

        saveListChoice();
       
    });
}

/**
 * Permet de sauvegarder un choix quand on clique sur un élément de liste
 * @return {[type]} [description]
 */
function saveListChoice(){
    if (dataUser.id_statue   !== false){ $("#id_statue li").eq(dataUser.id_statue).addClass('selected'); }
    if (dataUser.id_socle    !== false){ $("#id_socle li").eq(dataUser.id_socle).addClass('selected'); }
    if (dataUser.id_ornement !== false){ $("#id_ornement li").eq(dataUser.id_ornement).addClass('selected'); }

    $(".choix li").click(function(event){

        $(".choix li").removeClass('selected');
        $(this).addClass('selected');

        console.log($(this).parent().attr('id')+ " " + $(this).index());

        dataUser[$(this).parent().attr('id')] = $(this).index();

        console.log('s');
        console.log(dataUser);
        $.cookie('sauvegarde', JSON.stringify(dataUser) );
    });


}



/**
 * Charge une ligne depuis un des tableaux Google Docs
 * @param  {[type]} tableau [description]
 * @param  {[type]} id      [description]
 * @return {[type]}         [description]
 */
function getGDocLine(tableau,id){
    
    /**
     * GOOGLE SPREADSHEET
     */
    
    // https://docs.google.com/spreadsheets/d/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/pubhtml
    var url = 'https://spreadsheets.google.com/feeds/list/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/'+googleDB[tableau].id_tab+'/public/values?alt=json&single=false';

    //var url = 'https://spreadsheets.google.com/feeds/list/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/od6/public/values?alt=json&single=false';

    $.getJSON( url, function( data ) {

        $.each( googleDB[tableau].structure, function( key, val ) {
            $lineData[val] = data.feed.entry[id]["gsx$"+val].$t ;
        });

        //console.log($lineData);

        
        //console.log('ok');
    });

    return 'requête effectuée';
}