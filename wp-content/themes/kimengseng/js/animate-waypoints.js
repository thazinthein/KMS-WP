$(document).ready(function() {
    var animatedDivs = new Array()
    var i = 0
    $('.animate-waypoint').each(function() {
        animatedDivs[i] = $(this);
        i++;
    });

    for (i = 0; i < animatedDivs.length; i++) {
        var div = animatedDivs[i];
        div.waypoint({
            handler: function(direction) {
                if (direction == 'down') {// up, down, left, or right
                    applyEffect($(this));
                }
            },
            offset: 'bottom-in-view'
        });
    }


    function applyEffect(div) {
        var effect = div.data('animation');
        div.removeClass("transparent").addClass("opaque").addClass(effect);

    }

});