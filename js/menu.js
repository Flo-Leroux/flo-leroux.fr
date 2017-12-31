
$(document).ready(function() {
    (function() {
        [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
            var menuItems = menu.querySelectorAll('.menu__link'),
                setCurrent = function(ev) {
                    ev.preventDefault();

                    var item = ev.target.parentNode; // li

                    // return if already current
                    if (classie.has(item, 'menu__item--current')) {
                        return false;
                    }
                    // remove current
                    classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
                    // set current
                    classie.add(item, 'menu__item--current');
                };

            [].slice.call(menuItems).forEach(function(el) {
                el.addEventListener('click', setCurrent);
            });
        });

        [].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
            link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
            new Clipboard(link);
            link.addEventListener('click', function() {
                classie.add(link, 'link-copy--animate');
                setTimeout(function() {
                    classie.remove(link, 'link-copy--animate');
                }, 300);
            });
        });
    })(window);

    $('.menu__link').click(function() {
        var direction = $(this).attr('href');
        var getUrl = window.location;
        $('.revealer__layer').css('top', '100vh');
        $('.revealer__layer').css('display', 'block');
        $('.revealer__layer').removeClass('anim_out');
        $('.revealer__layer').addClass('anim_in');
        setTimeout(() => {
            document.location.href= getUrl.protocol + "//" + getUrl.host + "/" + direction;
        }, 1500);
    });

    $('.grid__link').click(function() {
        var direction = $(this).attr('hrefA');
        var getUrl = window.location;
        $('.revealer__layer').css('top', '100vh');
        $('.revealer__layer').css('display', 'block');
        $('.revealer__layer').removeClass('anim_out');
        $('.revealer__layer').addClass('anim_in');
        setTimeout(() => {
            document.location.href= getUrl.protocol + "//" + getUrl.host + "/" + direction;
        }, 1500);
    });
});
