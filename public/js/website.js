// Products Show Thumbs -->
$(document).ready(function(){
     $(".thumbs a").mouseover(function(e) {
        e.preventDefault();
            
        $("#largeImage").attr("src", $(this).attr("href"));
    })
});