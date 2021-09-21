$(document).ready(function(){
    $(".search-icon").click(function(){
        $("#dataTable_filter input").addClass("active");
        $(".search-wrapper").addClass("active");
    });
    $(".close").click(function(){
        $("#dataTable_filter input").removeClass("active");
        $(".search-wrapper").removeClass("active");
    });
})