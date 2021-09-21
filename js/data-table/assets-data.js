/*create table rows*/
function addComma( str ) {
	var objRegex = new RegExp( '(-?[0-9]+)([0-9]{3})' );
 
	while( objRegex.test( str ) ) {
		str = str.replace( objRegex, '$1,$2' );
	}
 
	return str;
}
function addColor( str ) {
    var color;
    if((str).includes("-")){
        color = "red";
    }
    else{
        color = "black";
    }

    return color;
}
$(document).ready(function(){


    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/data."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          var color;
          switch(val.idrisk){
            case "low":
                color="conic-gradient( #1ff51f 0, #1ff51f 20%, #eee 0, #eee 100% )";
            break;
            case "high":
                color="conic-gradient( red 0, red 75%, #eee 0, #eee 100% )";
            break;
            case "medium":
                color="conic-gradient( orange 0, orange 50%, #eee 0, #eee 100% )";
            break;    
          };

          items.push( "<tr><td><span class=\"fa fa-star\"></span></td><td class=\"td-icon\"><img src=\""
          + val.icon +
          "\" class=\"img-icon\" alt=\"table-img\"></td><td class=\"ass-name\">" 
           + val.name + " " + "(" + val.idname + ")" +
            "</td><td class=\"risk\"><span> <div class=\"pie-chart\" style=\"margin: 0 3px;background:"+color+";\" title=\"Memory usage: 20%\"> </div> "
            + val.risk +
            "</span></td><td class=\"price\">"
            +addComma(val.price)+
            "</td><td class=\"percent-table\" style=\"color:"+addColor(val.percent1mth)+";\">"
            +val.percent1mth+
            "</td><td class=\"percent-table\" style=\"color:"+addColor(val.percent2mth)+";\">"
            +val.percent2mth+
            "</td><td class=\"percent-table\" style=\"color:"+addColor(val.percent6mth)+";\">"
            +val.percent6mth+
            "</td><td class=\"percent-table\" style=\"color:"+addColor(val.percent1year)+";\">"
            +val.percent1year+
            "</td></tr>" );
        });
        $("#alldata").html(items.join(''));

        var next = new Image();
        var per = new Image();
        next.src = "https://img.icons8.com/material-rounded/24/000000/forward.png";
        per.src = "https://img.icons8.com/material-rounded/24/000000/back--v1.png";
       
        $('#data-table').DataTable(
            { 
                "language": 
                {
                    "search": "",
                    "info":"",
                    "infoEmpty":"",
                    "infoFiltered":"",
                    "paginate": {
                        "first":      "First",
                        "last":       "Last",
                        "next":       next,
                        "previous":   per
                    },
                    "lengthMenu":     " _MENU_ ",
                 }
            });
        });

})





