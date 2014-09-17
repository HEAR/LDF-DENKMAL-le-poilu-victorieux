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

/**
 * Quand jquery est prêt
 * @return {[type]} [description]
 */
$(document).ready(function(){

    console.log( '« Le poilu victorieux » — jquery ok' );

    

    redirection();


    $('#recap #id_statue span').text(dataUser.id_statue);
    $('#recap #id_socle span').text(dataUser.id_socle);
    $('#recap #id_ornement span').text(dataUser.id_ornement);
    $('#recap #epitaphe span').text(dataUser.epitaphe);
    $('#recap #noms span').text(dataUser.noms);


    $lineData = {};
    getGDocLine('id_statue', 0);


    $(".choix li").click(function(event){

        $(".choix li").removeClass('selected');
        $(this).addClass('selected');

    	console.log($(this).parent().attr('id')+ " " + $(this).index());

    	dataUser[$(this).parent().attr('id')] = $(this).index();

    	console.log('s');
    	console.log(dataUser);
    	$.cookie('sauvegarde', JSON.stringify(dataUser) );
    });

   $("#epitaphe").change(function(e){
        dataUser.epitaphe = $("#epitaphe").val();
        $.cookie('sauvegarde', JSON.stringify(dataUser) );
    });

    $("#noms").change(function(e){
        dataUser.noms = $("#noms").val();
        $.cookie('sauvegarde', JSON.stringify(dataUser) );
    });

    $('#clear-cookie').click(function(e){
        $.removeCookie('sauvegarde');
        $('#valeur').text("nettoyage des cookies");
    });
});


/**
 * gere la redirection à partir de la page d'accueil
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
		break;

		case "etape2.html" :
			refreshData();
		break;

		case "etape3.html" :
			refreshData();
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

function checkDataUser(){
	refreshData();

	// on commence à l'envers
	if(dataUser.noms !== false && confirm('vous avez déjà rempli toutes les étapes')){
    	window.location.replace("fin.html");
    }

    if(dataUser.epitaphe !== false && confirm('il vous reste à choisir les noms')){
    	window.location.replace("etape5.html");
    }

    if(dataUser.id_ornement !== false && confirm('il vous reste à choisir l\'épitaphe')){
    	window.location.replace("etape4.html");
    }

    if(dataUser.id_socle !== false && confirm('il vous reste à choisir l\'ornement')){
    	window.location.replace("etape3.html");
    }

    if(dataUser.id_statue !== false && confirm('il vous reste à choisir les socle')){
    	window.location.replace("etape2.html");
    }
}

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

    if (dataUser.id_statue !== false){  $("#id_statue li").eq(dataUser.id_statue).addClass('selected'); }
    if (dataUser.id_socle !== false){  $("#id_socle li").eq(dataUser.id_socle).addClass('selected'); }
    if (dataUser.id_ornement !== false){  $("#id_ornement li").eq(dataUser.id_ornement).addClass('selected'); }
    $("#epitaphe").val(dataUser.epitaphe);
    $("#noms").val(dataUser.noms);

    console.log('dataUser');
    console.log(dataUser);
}

/**
 * Charge une ligne depuis un des tableaux Google Docs
 * @param  {[type]} tableau [description]
 * @param  {[type]} id      [description]
 * @return {[type]}         [description]
 */
function getGDocLine(tableau,id){
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
     * GOOGLE SPREADSHEET
     */
    
    // https://docs.google.com/spreadsheets/d/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/pubhtml
    var url = 'https://spreadsheets.google.com/feeds/list/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/'+googleDB[tableau].id_tab+'/public/values?alt=json&single=false';

    //var url = 'https://spreadsheets.google.com/feeds/list/1oyu-uzNaZjUyjAMUoEmbQtZJfKzb4h-_-61FDXvsXoY/od6/public/values?alt=json&single=false';

    $.getJSON( url, function( data ) {

        //console.log("json ready");

        //console.log(data.feed.entry);
        //console.log(data);
        //
        
        

        //console.log(data.feed.entry[id]);

        /*ligne = data.feed.entry[id].content.$t;

        t = ligne.split(', ');


        $.each( t, function( key, val ) {
            tt = val.split(': ');                    
            $lineData[tt[0]] = tt[1];
        });*/

        $.each( googleDB[tableau].structure, function( key, val ) {
            $lineData[val] = data.feed.entry[id]["gsx$"+val].$t ;
        });

        //console.log($lineData);

        /*$.each(data.feed.entry, function (key, val){
            console.log(key+" "+val);
        });*/

        /*var items = [];
        $.each( data, function( key, val ) {
        items.push( "<li id='" + key + "'>" + val + "</li>" );
        });

        $( "<ul/>", {
        "class": "my-new-list",
        html: items.join( "" )
        }).appendTo( "body" );*/

        //console.log('ok');
    });

    return 'requête effectuée';
}