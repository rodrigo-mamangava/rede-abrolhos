jQuery(document).ready(function ($) {

    $('#btn-search-menu').click(function (){
        
        console.log('clicou no menu!');
        
        $('#btn-search-menu').toggleClass('verde');
        $('#search-menu').toggleClass('verde');
        
       $('#search-menu').toggleClass('show-item-menu'); 
    });
    

});
