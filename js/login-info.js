var xtimer = null;
//var stlog = JSON.parse(localStorage.stlog||'{}');

$(document).ready(function(){
    //timer
    function timer(x){
        var minute = x;
        var sec = 0;
        clearInterval(xtimer);
        xtimer = setInterval(function(){
        
        if(sec >0){
            sec = sec-1;
            
        }
        if(sec == 0 && minute >0){
            minute = minute - 1;
            sec= 59;
        }
        if(10>sec && sec>-1){
            sec= "0"+sec;
        }
        if (sec==0 && minute==0){
            clearInterval(xtimer);
            $('#timer').html( "" );
            $("#uniqueCode").css({"display":"none"});
            $(".continueBtn").css({"display":"block"});
            $(".loginBtn").css({"display":"none"});
            return;
        }
        $('#timer').html( minute +":"+ sec );
        
        },1000);
    };

    

    //error
    function showError($code) {
        switch ($code) {
            case true :{
                $(".successful").css({"display":"block"});
                $(".phonenumerror").css({"display":"none"});
                break;
            }
            case false :{
                //$message = "شماره همراه وارد شده نادرست است"
                //$(".codeerror").html($message);
                $(".successful").css({"display":"none"});
                if($(".loginBtn").css({"display":"block"})){
                    $(".phonenumerror").css({"display":"none"});
                }
                break;
            }
        }
    }

    //save info
    //$key = Object.keys(stlog);
    //for($name of $key){
        //console.log($name ,stlog[$name] )
        //$(".login-info [name="+$name+"").val(stlog[$name])
    //}
    //$(".login-info :input").change(function(){
        //$t= $(this);
        //$name = $t.attr('name');
        //$val = $t.val();
        //stlog[$name] = $val;
        //localStorage.setItem("stlog",JSON.stringify(stlog));
        //document.cookie= "num=" + 
        

    //});
    //save info
    $("#login_username").val(getCookie("num"));
    $("#login_username").change(function(){
        document.cookie= "num=" + $(this).val();
    });

    $(".continueBtn").click(function(){
        timer(5);
        //$parameter پاسخ برگشتی api
        //$parameter = "مقدار وارد شده معتبر نمی باشد";
        $.ajax({
            url: "https://easyinvest.ir/api/auth/login_code",
            type: 'post',
            data:{
                phone: $("#login_username").val()
            },
            // headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            success: (data) => {
                // alert('success')
                showError(true);
                //show/hide login and continue btn
                $("#uniqueCode").css({"display":"block"});
                $(".continueBtn").css({"display":"none"});
                $(".loginBtn").css({"display":"block"});
            },
            error: (data) => {
                console.log(data.responseJSON.message);
            }
        });
        // window.location.replace("{{route('get_cart')}}")
        // switch($parameter) {
        //     case 200 : {
        //
        //         break;
        //     }
        //     case 400 :{
        //         showError($parameter);
        //         $("#uniqueCode").css({"display":"none"});
        //         $(".continueBtn").css({"display":"block"});
        //         $(".loginBtn").css({"display":"none"});
        //         break;
        //     }
        // }
    });

    //token evaluation
    $(".loginBtn").click(function(){
        console.log("hi");
        $.ajax({
            url: "https://easyinvest.ir/api/auth/login",
            type: 'post',
            data:{
                phone: $("#login_username").val(),
                token: $("#login_password").val()
            },
            success: (data) => {
                document.cookie="pass="+data.token;
                
                switch(data.status ) {
                    case true : {
                        window.location.replace("http://localhost/kiaalap-master/edit-student.php?name=sfdsf&fname=fgs&date=rtrr&code=rt&id=&bloc=uyiu&imageico=#");
                        break;
                    }
                    case false :{
                        $("#uniqueCode").css({"display":"none"});
                        $(".continueBtn").css({"display":"block"});
                        $(".loginBtn").css({"display":"none"});
                        break;
                    }
                };
                

                
            },
            error: (data) => {
                console.log(data.responseJSON.message);
            }
        });
    });





    $(".exit").click(function(){
        localStorage.clear();
        delete_cookie("pass");
        $.ajax({
            url: "http://easyinvest.ir/api/auth/logout",
            type: 'post',
            data:{
                phone: $("#login_username").val(),
                token: $("#login_password").val()
            },
            success: (data) => {
            },
            error: (data) => {
                console.log(data.responseJSON.message);
            }
        });
    })
    
})

//get cookie
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
//delete cookie
function delete_cookie(name) {
  document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}