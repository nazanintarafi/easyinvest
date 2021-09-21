
function addComma( str ) {
	var objRegex = new RegExp( '(-?[0-9]+)([0-9]{3})' );
 
	while( objRegex.test( str ) ) {
		str = str.replace( objRegex, '$1,$2' );
	}
 
	return str;
};





$(document).ready(function(){

//cash-in
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/cash-in."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          $("#cashin-error").html(val.error);
          items.push( "<div class=\'icon-img\'><img src=\'"
          + val.icon +
          "\'></div><h3>"
          + val.name +
          "</h3><span id=\"priceval\">"
          + addComma(val.price) +
          "</span>"
          );

          
        });
        $("#cashin-body").html(items.join(''));
        //error
        $(".cash-in-modal .price-input").keyup(function(){
          var inputval = parseInt($(".cash-in-modal .price-input").val());
          var priceval = parseInt($("#priceval").html());
          if ( inputval > priceval ) {
            $("#cashin-error").css("display","block");
            $(".price-form input:focus-visible").css("outline","1px solid red")
          }
          else{
            $("#cashin-error").css("display","none");
            $(".price-form input:focus-visible").css("outline","none")
          }
        });

        

    });



//cash-out

$lang = $('body').attr('lang');
$.getJSON( "http://localhost/kiaalap-master/json/cash-out."+$lang+".json", function( data ) {
    $.each( data, function( key, val ) {
      $("#volume-content").html(addComma(val.amountofuserassets));
      $("#price-content").html(addComma(val.Priceperunitoffund));
      $("#value-content").html(addComma(val.Userassetvalue));
      $("#cashout-error").html(val.error);
    });

    //error
    $(".cash-out-modal .price-input").keyup(function(){
      var inputvalue = parseInt($(".cash-out-modal .price-input").val());
      var volume = parseInt($("#volume-content").html());
      if ( inputvalue > volume ) {
        $("#cashout-error").css("display","block");
        $(".price-form input:focus-visible").css("outline","1px solid red")
      }
      else{
        $("#cashout-error").css("display","none");
        $(".price-form input:focus-visible").css("outline","none")
      }
    });


});




});