(function($) {
    $(window).load(function() {
        $(".scroll").mCustomScrollbar({
            set_width: false, /*optional element width: boolean, pixels, percentage*/
            set_height: false, /*optional element height: boolean, pixels, percentage*/
            horizontalScroll: false, /*scroll horizontally: boolean*/
            scrollInertia: 950, /*scrolling inertia: integer (milliseconds)*/
            mouseWheel: true, /*mousewheel support: boolean*/
            mouseWheelPixels: "auto", /*mousewheel pixels amount: integer, "auto"*/
            autoDraggerLength: true, /*auto-adjust scrollbar dragger length: boolean*/
            autoHideScrollbar: false, /*auto-hide scrollbar when idle*/
            scrollButtons: {/*scroll buttons*/
                enable: false, /*scroll buttons support: boolean*/
                scrollType: "continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
                scrollSpeed: "auto", /*scroll buttons continuous scrolling speed: integer, "auto"*/
                scrollAmount: 40 /*scroll buttons pixels scroll amount: integer (pixels)*/
            },
            advanced: {
                updateOnBrowserResize: true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
                updateOnContentResize: false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
                autoExpandHorizontalScroll: false, /*auto-expand width for horizontal scrolling: boolean*/
                autoScrollOnFocus: true, /*auto-scroll on focused elements: boolean*/
                normalizeMouseWheelDelta: false /*normalize mouse-wheel delta (-1/1)*/
            },
            contentTouchScroll: true, /*scrolling by touch-swipe content: boolean*/
            callbacks: {
                onScrollStart: function() {
                }, /*user custom callback function on scroll start event*/
                onScroll: function() {
                }, /*user custom callback function on scroll event*/
                onTotalScroll: function() {
                }, /*user custom callback function on scroll end reached event*/
                onTotalScrollBack: function() {
                }, /*user custom callback function on scroll begin reached event*/
                onTotalScrollOffset: 0, /*scroll end reached offset: integer (pixels)*/
                onTotalScrollBackOffset: 0, /*scroll begin reached offset: integer (pixels)*/
                whileScrolling: function() {
                } /*user custom callback function on scrolling event*/
            },
            theme: "dark-thick" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
        });
    });
})(jQuery);