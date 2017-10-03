$( document ).ready(function() {
$("img").on('click',function(){
   
   var show = $(this).attr('data-id');
   $('.guides').hide();
   $('.gridguide').hide();
   $('.selection').addClass("selectionshow");
   $('.selection').show();
   $('#'+show).show();
});

$('img').click(function(){
    var aktiv = $(this).attr('data-id');
    $('img[data-id = '+aktiv+']').addClass('active1').siblings().removeClass("active1");
    
}); 
});

