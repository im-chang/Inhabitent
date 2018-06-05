(function($){$(document).ready(
    function(){
        $('.site-header .search-field').hide();
        $('.site-header .search-submit').on( "click", 
        function( event ){
            event.preventDefault();
            $('.site-header .search-field').show();
            $('.site-header .search-field').focus();
        } 
    )  

        $('.site-header .search-field').on('blur',
        function(){
            $('.site-header .search-field').hide();
        });

        $(document).keydown(function( event ) {
            if ( event.which == 13 ) {
                $('.site-header .search-form').submit();
        
            }
        });
    

    }
)




})(jQuery);