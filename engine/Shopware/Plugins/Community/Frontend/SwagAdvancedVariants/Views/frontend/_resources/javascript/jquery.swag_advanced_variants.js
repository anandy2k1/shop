(function($) {
        $(document).ready(function() {
            var $configval = $('.config-value');
            //Hover-Effects
            $configval.bind('mouseenter mouseleave', function(event) {
                var $me = $(this);
                $me.toggleClass('changeColor');
            });
//Setting the unique value to identify the different options
$configval.bind('click', function(event) {
        var $me = $(this);
        $me.parents('.config-group').find(':hidden').val($me.attr('rel'));
        $me.parents('form').submit();
        });
//Set image in the center of the div
$('div#image').each(function(){
        var divHeight = $(this).height();
        var imgHeight = $(this).find('img').height();
        $(this).find('img').css('margin-top', (divHeight-imgHeight)/2);
        });
});
})(jQuery);