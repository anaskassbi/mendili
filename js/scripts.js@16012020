$(window).load(function () {

    var $block_txt_center = $(".block_txt_center"),
            $scroll_pane = $('.scroll-pane'),
            minus = $('.header').height() + 42,
            hh = parseInt($('.block_txt_center h1').outerHeight(true) + 42),
            api,
            spw,
            throttleTimeout;

    function d() {
        var mh = $(window).height() - minus;
        $block_txt_center.css({height: mh});
        $scroll_pane.css({height: mh - hh});
        if (api && !throttleTimeout) {
            throttleTimeout = setTimeout(function () {
                api.scrollTo(0, 0);
                api.reinitialise();
                $('.jspContainer,.jspPane').css({width: spw});
                $scroll_pane.css({width: spw});
                throttleTimeout = null;
            }, 50);
        }
    }

    $(this).resize(function () {
        d();
    });

    setTimeout(function () {
        $block_txt_center.show("clip", {direction: "left"}, 1000);
        spw = $scroll_pane.width();
        api = $scroll_pane.jScrollPane({contentWidth: spw, hideFocus: true, showArrows: true}).data().jsp;
    }, 800);

    d();
});
