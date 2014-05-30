
// show popup
(function(a) {
    a.fn.extend({showPopup: function(b) {
            function f(c) {
                if (b.onClose instanceof Function)
                    b.onClose();
                a("html").css({overflow: "auto"});
                a("body").css({overflow: "auto"});
                a("#lean_overlay").fadeOut(200);
                a(c).css({display: "none"})
            }
            var e = a("<div id='lean_overlay'></div>");
            a("body").append(e);
            b = a.extend({top: 100, overlay: 0.5, scroll: !0, closeButton: null}, b);
            return this.each(function() {
                var c = b;
                a(this).click(function(b) {
                    var d = a(this).attr("href");
                    a("#lean_overlay").click(function() {
                        f(d)
                    });
                    a(c.closeButton).click(function() {
                        f(d)
                    });
                    a(d).outerHeight();
                    var e = a(d).outerWidth();
                    a("#lean_overlay").css({display: "block", opacity: 0});
                    a("#lean_overlay").fadeTo(200, c.overlay);
                    a(d).css({display: "block", position: "fixed", opacity: 0, "z-index": 110, left: "50%", "margin-left": -(e / 2) + "px", top: c.top + "px"});
                    c.scroll && (a("html").css({overflow: "hidden"}), a("body").css({overflow: "hidden"}));
                    a(d).fadeTo(200, 1);
                    b.preventDefault()
                })
            })
        }})
})(jQuery);
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


