!function (e) {
    function t(n) {
        if (o[n])return o[n].exports;
        var c = o[n] = {i: n, l: !1, exports: {}};
        return e[n].call(c.exports, c, c.exports, t), c.l = !0, c.exports
    }

    var o = {};
    t.m = e, t.c = o, t.i = function (e) {
        return e
    }, t.d = function (e, o, n) {
        t.o(e, o) || Object.defineProperty(e, o, {configurable: !1, enumerable: !0, get: n})
    }, t.n = function (e) {
        var o = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return t.d(o, "a", o), o
    }, t.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "./", t(t.s = 4)
}({
    10: function (e, t) {
    }, 4: function (e, t, o) {
        "use strict";
        o(10), $(function () {
            $(document).on("click", "body", function () {
                $(".cd-selectbox--opened").selectToggle()
            }), $(document).on("click", ".cd-selectbox__item", function (e) {
                e.preventDefault(), e.stopPropagation();
                var t = $(this), o = t.closest(".cd-selectbox"), n = t.closest(".cd-selectbox__list"), c = o.find("input"), s = t.text();
                n.siblings(".cd-selectbox__selected").text(s), c.val(s), n.slideUp(function () {
                    o.removeClass("cd-selectbox--opened")
                })
            }), $(document).on("click", ".cd-selectbox__selected", function (e) {
                e.stopPropagation();
                var t = $(this), o = t.closest(".cd-selectbox"), n = $(".cd-selectbox--opened").not(o);
                n.length ? n.find(".cd-selectbox__list").slideUp(function () {
                    n.removeClass("cd-selectbox--opened"), o.selectToggle()
                }) : o.selectToggle()
            }), $.fn.selectToggle = function () {
                return this.each(function () {
                    var e = $(this), t = e.find(".cd-selectbox__list");
                    e.hasClass("cd-selectbox--opened") ? t.slideUp(function () {
                        e.removeClass("cd-selectbox--opened")
                    }) : (e.addClass("cd-selectbox--opened"), t.slideDown())
                })
            }
        })
    }
});