(function($){$(document).ready(
    function(){
        $('.search-field').hide();
        $('.search-submit').on( "click", 
        function( event ){
            event.preventDefault();
            $('.search-field').show();
            $('.search-field').focus();
        } 
    )  

        $('.search-field').on('blur',
        function(){
            $('.search-field').hide();
        });

        $(document).keydown(function( event ) {
            if ( event.which == 13 ) {
                $('.search-form').submit();
        
            }
        });
    

    }
)




})(jQuery);