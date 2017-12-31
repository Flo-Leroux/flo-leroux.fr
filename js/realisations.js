
var grid_height = 0;

$(document).ready(function () {
    $('.menu__item--current').removeClass('menu__item--current');
    $('a[href="views/realisations.php"]').parent('.menu__item').addClass('menu__item--current');

    setTimeout(() => {
        $('.revealer__layer').addClass('anim_out');
        setTimeout(() => {
            $('.revealer__layer').css('display', 'none');
        }, 2000);
    }, 1000);

    var $grid = $('#grid--isotope').isotope({
        itemSelector: '.element--isotope',
        layoutMode: 'fitRows'
    });

    $grid.isotope({filter: '.element--isotope'});
    
    scrollHeight();
    isoGrid();
    
    $('#all').on('click', function() {
        $grid.isotope({filter: '.element--isotope'});
        
        $('.filter--current').removeClass('filter--current');
        $(this).addClass('filter--current');

        scrollHeight();
    });
    $('#web').on('click', function() {
        $grid.isotope({filter: '.Web'});
    
        $('.filter--current').removeClass('filter--current');
        $(this).addClass('filter--current');

        scrollHeight();
    });
    $('#mobile').on('click', function() { 
        $grid.isotope({filter: '.Mobile'});
    
        $('.filter--current').removeClass('filter--current');
        $(this).addClass('filter--current');
        
        scrollHeight();
    });

    $(window).resize(function() {
        isoGrid();
    });
});

function scrollHeight() {
    grid_height = $('#grid--isotope').height();
    grid_height = grid_height + (grid_height/10);
    $('#scroll').height(grid_height+400);
    $('#grid--isotope').height(grid_height);
}

function isoGrid() {
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    [].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
        new IsoGrid(el, {
            type : 'scrollable',
            transform : 'translateX(-15vw) translateY(275px) rotateX(45deg) rotateZ(45deg)',
            stackItemsAnimation : {
                properties : function(pos) {
                    return {
                        translateZ: (pos+1) * 50,
                        rotateZ: getRandomInt(-3, 3)
                    };
                },
                options : function(pos, itemstotal) {
                    return {
                        type: dynamics.bezier,
                        duration: 500,
                        points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
                        //delay: (itemstotal-pos-1)*40
                    };
                }
            },
            onGridLoaded : function() {
                classie.add(document.body, 'grid-loaded');
            }
        });
    });
}