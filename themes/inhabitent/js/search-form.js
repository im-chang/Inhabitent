(function($)
    
    {$(document).ready(function () {

        $('.site-header .search-field').hide();


        $('.site-header .icon-search').on( 'click', 
        function( event ){
            event.preventDefault();
            $('.site-header .search-field').show({duration:300});
            $('.site-header .search-field').focus();
        });  


        $('.site-header .search-field').on('blur',
        function(){
            $('.site-header .search-field').hide({duration:300});
        });

    }
)


})(jQuery);
