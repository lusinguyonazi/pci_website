! function(a) {
    "use strict";
    var e = a(".demo-iframe"),
        s = a(".iframe-wrapper"),
        t = a(".items-toggle-btn"),
        i = a(".viewports"),
        r = a(".switcher-carousel .carousel-wrapper"),
        n = !(!window.history || !history.pushState);
    var o = function(e) {
        for (var t = window.location.search.substring(1).split("&"), i = 0; i < t.length; i++) {
            var a = t[i].split("=");
            if (a[0] === e) return a[1]
        }
        return !1
    }("theme");

    function l() {
        e.attr("src", $themes[o].url), document.title = $themes[o].name + " - " + $themes[o].tooltip, t.html($themes[o].name + " - " + $themes[o].tooltip + "<span>" + $themes[o].tag + "</span>"), a(".buy-now-btn").attr("href", $themes[o].purchase), a(".remove-frame-btn").attr("href", $themes[o].url), void 0 !== $themes[o].responsive && !1 === $themes[o].responsive ? i.addClass("hidden") : i.removeClass("hidden")
    }
    o in $themes && "" !== o || (o = $defaultTheme), t.on("click", function(e) {
        e.preventDefault(), a(".switcher-carousel").toggleClass("active")
    }), a.each($themes, function(e, t) {
        var i;
        "tooltip" in t && (i = 'title="' + t.tooltip.replace(/"/g, "'") + '"'), r.append('<a class="item" data-id="' + e + '" ' + i + '><div class="header" >' + t.name + '<span class="badge">' + t.tag + '</span></div><img src="' + imgURL + t.img + '" alt="' + t.name + '"><div class="footer">' + t.tooltip + "</div></a>")
    }), l(), r.owlCarousel({
        items: 4,
        itemsTablet: [1199, 3],
        itemsTabletSmall: [991, 2],
        mouseDrag: !0,
        pagination: !1,
        navigation: !0,
        navigationText: ['<a class="icon-arrow-left">', '<a class="icon-arrow-right">'],
        slideSpeed: 500,
        rewindNav: !1
    }), i.each(function() {
        a(this).on("click", "li > a", function(e) {
            var t = a(this),
                i = t.data("size");
            e.preventDefault(), i && (s.css("width", i), t.parent("li").addClass("active").siblings("li").removeClass("active"), l())
        })
    }), r.find(".item").on("click", function() {
        return (o = a(this).data("id")) in $themes && (n ? (l(), s.css("width", "100%"), a(".viewports li:first-child").addClass("active").siblings("li").removeClass("active"), a(".switcher-carousel").removeClass("active"), history.pushState({
            id: o
        }, "", "?theme=" + o)) : top.location.href = "?theme=" + o), !1
    })
}(jQuery);