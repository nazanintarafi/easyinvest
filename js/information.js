
var st = JSON.parse(localStorage.st||'{}');

$(document).ready(function(){
    var token = getCookie("pass");
    //get profile informations api
    $.ajax({
        headers : {
            token : token
        },
        url : "https://easyinvest.ir/api/profile/get",
        type: "get",
        data :{},
        success: (data) =>{
            myData = JSON.parse(data);
            $key = Object.keys(myData);
            for($name of $key){
                $(".info-form [name="+$name+"").val(myData[$name]);
                st[$name] = myData[$name];
            };
            localStorage.setItem("st",JSON.stringify(st));
            progressbar();
            AdminName()

        },
        error:(data) => {
            console.log(data.responseJSON.message);
        }
    });


    //update profile informations api
    $(".form-group :input").change(function(){
        $t= $(this);
        $name = $t.attr('name');
        $val = $t.val();
        st[$name] = $val;
        $dataKey = st[$name];

        $.ajax({
            headers : {
                token : token
            },
            url : "http://easyinvest.ir/api/profile/update",
            type: "patch",
            data:{
                $name : $dataKey
            },
            success: (data) =>{
                localStorage.setItem("st",JSON.stringify(st));
                progressbar();
                AdminName();
            },
            error:(data) => {
               console.log(data.responseJSON.message);
            }
        });
        
        
    });


    //get file
    $inputId = ["IDPic" , "NotePic" , "CardPic"]
    for ( $type of $inputId){
        $.ajax({
            headers : {
                token : token
            },
            url : "http://easyinvest.ir/api/profile/get-picture",
            type: "get",
            data:{
                type : $type
            },
            success: (data) =>{
                if (data.status==true){
                    $("#"+$type+""+".file-caption-name").val(data.url);
                    st[$type] = data.url;
                    progressbar();
                }
                            
            },
            error:(data) => {
                console.log(data.responseJSON.message);
            }
        });
    };




    //upload file
    $(".fileinput-upload-button").click(function(){
        $t= $(".file-group :input");
        $type = $t.attr('name');
        $val = $t.val();
        st[$type] = $val;
        $file = st[$type];
        $.ajax({
            headers : {
                token : token
            },
            url : "http://easyinvest.ir/api/profile/upload-picture",
            type: "patch",
            data:{
                type : $type,
                file : $file
            },
            success: (data) =>{
                localStorage.setItem("st",JSON.stringify(st));
                progressbar();
            },
            error:(data) => {
                //console.log(data.responseJSON.message);
                console.log("upload file api problem");
            }
        });
    });
    //delete file
    $(".fileinput-remove-button").click(function(){
        $.ajax({
            headers : {
                token : token
            },
            url : "http://easyinvest.ir/api/profile/del-picture",
            type: "DELETE",
            data:{
                type : $type
            },
            success: (data) =>{
                st[$type] = "";
                localStorage.setItem("st",JSON.stringify(st));
                progressbar();
                            
            },
            error:(data) => {
                //console.log(data.responseJSON.message);
                console.log("delete api problem");
            }
        });
    });
    




    

    
    
})

//progressbar
function progressbar(){
    $val = Object.values(st).filter(e=>e!='');
    $jsonLength = $val.length;
    $w = (($jsonLength)*100)/16;
    $(".progress-bar-success").css("width",$w+"%");
}

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


function AdminName() {
    var adminName = $(".info-form [name="+"Fullname"+"").val();
    if(adminName==""){
        $(".admin-name").html("کاربر");
    }else{
        $(".admin-name").html(adminName);
    }
}