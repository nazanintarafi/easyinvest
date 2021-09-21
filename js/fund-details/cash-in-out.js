function addComma( str ) {
	var objRegex = new RegExp( '(-?[0-9]+)([0-9]{3})' );
 
	while( objRegex.test( str ) ) {
		str = str.replace( objRegex, '$1,$2' );
	}
 
	return str;
};






$(document).ready(function(){
//cash-in
    $("#assets-list").change(function(){
        $("#price").val(this.options[this.selectedIndex].getAttribute("data-price"));
        $(".cash-in-btn").click(function(){
            alert($("#assets-list").options[$("#assets-list").selectedIndex].getAttribute("data-price"));
            if($("#price").val() > $("#assets-list").options[$("#assets-list").selectedIndex].getAttribute("data-price")){
                alert("error!");
            }
        });
    });

    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/select-options-data."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          items.push( "<option data-price=\""
          + addComma(val.price) +
          "\" data-thumbnail=\"" 
          + val.icon +
          "\" value=\""
          + val.idname +
          " ><span style=\"padding=\"0 5px\"\">" 
            + val.name +
            "</span></option>" );
        });
        $("#assets-list").html(items.join(''));

        //test for getting url value from attr
        // var img1 = $('.test').attr("data-thumbnail");
        // console.log(img1);

        //test for iterating over child elements
        var langArray = [];
        $('.vodiapicker option').each(function(){
            var img = $(this).attr("data-thumbnail");
            var price = $(this).attr("data-price");
            var text = this.innerHTML;
            var value = $(this).val();
            var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span><span style=\"padding:0 10px;\">'+price+'</span></li>';
            langArray.push(item);
        })

        $('.a').html(langArray);

        //Set the button value to the first el of the array
        $('.btn-select').html(langArray[0]);
        $('.btn-select').attr('value', 'BTC');
        

        //change button stuff on click
        $('.a li').click(function(){
            var img = $(this).find('img').attr("src");
            var value = $(this).find('img').attr('value');
            var text = this.innerHTML;
            var item = '<li><span>'+ text +'</span></li>';
            $('.btn-select').html(item);
            $('.btn-select').attr('value', value);
            $(".b").toggle();
            //console.log(value);
        });

        $(".btn-select").click(function(){
            $(".b").toggle();
            $(".lang-select").toggleClass("openb");
        });

        //check local storage for the lang
        var sessionLang = localStorage.getItem('lang');
        if (sessionLang){
        //find an item with value of sessionLang
        var langIndex = langArray.indexOf(sessionLang);
        $('.btn-select').html(langArray[langIndex]);
        $('.btn-select').attr('value', sessionLang);
        } else {
        var langIndex = langArray.indexOf('ch');
        console.log(langIndex);
        $('.btn-select').html(langArray[langIndex]);
        //$('.btn-select').attr('value', 'en');
        };



    });




//cash-out
    $("#cash-out-list").change(function(){
        $("#volume").val(this.options[this.selectedIndex].getAttribute("data-price"));
        $(".cash-in-btn").click(function(){
            alert($("#cash-out-list").options[this.selectedIndex].getAttribute("data-price"));
            if($("#volume").val() > $("#cash-out-list").options[this.selectedIndex].getAttribute("data-price")){
                alert("error!");
            }
        });
    });

    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/select-options-data."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
            items.push( "<option data-price=\""
            + addComma(val.price) +
            "\" data-thumbnail=\"" 
            + val.icon +
            "\" value=\""
            + val.idname +
            " ><span style=\"padding=\"0 5px\"\">" 
              + val.name +
              "</span></option>" );
        });
        $("#cash-out-list").html(items.join(''));

                //test for getting url value from attr
        // var img1 = $('.test').attr("data-thumbnail");
        // console.log(img1);

        //test for iterating over child elements
        var langArray = [];
        $('.vodiapicker2 option').each(function(){
            var img = $(this).attr("data-thumbnail");
            var price = $(this).attr("data-price");
            var text = this.innerHTML;
            var value = $(this).val();
            var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span><span style=\"padding:0 10px;\">'+price+'</span></li>';
            langArray.push(item);
        })

        $('.a2').html(langArray);

        //Set the button value to the first el of the array
        $('.btn-select2').html(langArray[0]);
        $('.btn-select2').attr('value', 'BTC');
        

        //change button stuff on click
        $('.a2 li').click(function(){
            var img = $(this).find('img').attr("src");
            var value = $(this).find('img').attr('value');
            var text = this.innerHTML;
            var item = '<li><span>'+ text +'</span></li>';
            $('.btn-select2').html(item);
            $('.btn-select2').attr('value', value);
            $(".b2").toggle();
            //console.log(value);
        });

        $(".btn-select2").click(function(){
                $(".b2").toggle();
                $(".lang-select2").toggleClass("openb2");
        });

        //check local storage for the lang
        var sessionLang = localStorage.getItem('lang');
        if (sessionLang){
        //find an item with value of sessionLang
        var langIndex = langArray.indexOf(sessionLang);
        $('.btn-select2').html(langArray[langIndex]);
        $('.btn-select2').attr('value', sessionLang);
        } else {
        var langIndex = langArray.indexOf('ch');
        console.log(langIndex);
        $('.btn-select2').html(langArray[langIndex]);
        //$('.btn-select').attr('value', 'en');
        };
    });

       


});