
setTimeout(() => {
    demo.init();
    $('canvas').fadeIn('slow');
}, 600);

$(document).ready(function(){
    
    // Au chargement initial   
    redimensionnement();
    
    // En cas de redimensionnement de la fenêtre
    $(window).resize(function(){ 
        redimensionnement(); 
    }); 

    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene, {
        onReady: parallaxStart,
        clipRelativeInput: true,
        relativeInput: true,
        limitX: 200,
        limitY: 200,
        scalarX: 25,
        scalarY: 15,
        frictionX: 0.1,
        frictionY: 0.1,
        selector: '.layer'
    });
}); 
            
function parallaxStart() {
    setTimeout(() => {
        demo.spinner.setComplete();
        $('.revealer__layer').addClass('anim_out');
    }, 8000);
}

function redimensionnement(){ 
    var $image = $('.layer img');
    var image_width = $image.width(); 
    var image_height = $image.height();     
    
    var over = image_width / image_height; 
    var under = image_height / image_width; 
    
    var body_width = $(window).width(); 
    var body_height = $(window).height(); 

    body_width = body_width + (body_width/10);
    body_height = body_height + (body_height/10);

    if (body_width / body_height >= over) { 
    $image.css({ 
        'width': body_width + 'px', 
        'height': Math.ceil(under * body_width) + 'px', 
        'left': '0px', 
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px' 
    }); 
    }  
    
    else { 
    $image.css({ 
        'width': Math.ceil(over * body_height) + 'px', 
        'height': body_height + 'px', 
        'top': '0px', 
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px' 
    }); 
    } 
} 