<script>
    var initTopPosition= $('#sidebar').offset().top;   
    $(window).scroll(function(){
        if($(window).scrollTop() > (initTopPosition + 90))
            $('#sidebar').css({'position':'fixed','top':'-90px'});
        else
            $('#sidebar').css({'position':'absolute','top':initTopPosition+'px'});
    });
</script>