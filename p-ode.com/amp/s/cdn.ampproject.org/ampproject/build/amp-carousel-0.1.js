;
(self.AMP = self.AMP || []).push({
    m: 0,
    v: "2401032027001",
    n: "amp-carousel",
    ev: "0.1",
    l: !0,
    f: function(t, i) {
        ! function() {
            function i(t, n) {
                return (i = Object.setPrototypeOf || function(t, i) {
                    return t.__proto__ = i,
                        t
                })(t, n)
            }

            function n(t, n) {
                if ("function" != typeof n && null !== n)
                    throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(n && n.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }),
                    n && i(t, n)
            }

            function r(t) {
                return (r = Object.setPrototypeOf ? Object.getPrototypeOf : function(t) {
                    return t.__proto__ || Object.getPrototypeOf(t)
                })(t)
            }

            function e(t) {
                return (e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                        return typeof t
                    } :
                    function(t) {
                        return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
                    }
                )(t)
            }

            function o(t) {
                if (void 0 === t)
                    throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }

            function s(t, i) {
                if (i && ("object" === e(i) || "function" == typeof i))
                    return i;
                if (void 0 !== i)
                    throw new TypeError("Derived constructors may only return object or undefined");
                return o(t)
            }

            function a(t) {
                var i = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct)
                        return !1;
                    if (Reflect.construct.sham)
                        return !1;
                    if ("function" == typeof Proxy)
                        return !0;
                    try {
                        return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, e = r(t);
                    if (i) {
                        var o = r(this).constructor;
                        n = Reflect.construct(e, arguments, o)
                    } else
                        n = e.apply(this, arguments);
                    return s(this, n)
                }
            }

            function u(t, i, n) {
                return i in t ? Object.defineProperty(t, i, {
                        value: n,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : t[i] = n,
                    t
            }

            function h(t, i) {
                var n = Object.keys(t);
                if (Object.getOwnPropertySymbols) {
                    var r = Object.getOwnPropertySymbols(t);
                    i && (r = r.filter((function(i) {
                            return Object.getOwnPropertyDescriptor(t, i).enumerable
                        }))),
                        n.push.apply(n, r)
                }
                return n
            }

            function l(t) {
                for (var i = 1; i < arguments.length; i++) {
                    var n = null != arguments[i] ? arguments[i] : {};
                    i % 2 ? h(Object(n), !0).forEach((function(i) {
                        u(t, i, n[i])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : h(Object(n)).forEach((function(i) {
                        Object.defineProperty(t, i, Object.getOwnPropertyDescriptor(n, i))
                    }))
                }
                return t
            }
            var c = Array.isArray;

            function f(t) {
                return "string" == typeof t
            }

            function v(t, i) {
                (null == i || i > t.length) && (i = t.length);
                for (var n = 0, r = new Array(i); n < i; n++)
                    r[n] = t[n];
                return r
            }

            function p(t, i) {
                var n = "undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"];
                if (n)
                    return (n = n.call(t)).next.bind(n);
                if (Array.isArray(t) || (n = function(t, i) {
                        if (t) {
                            if ("string" == typeof t)
                                return v(t, i);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            return "Object" === n && t.constructor && (n = t.constructor.name),
                                "Map" === n || "Set" === n ? Array.from(t) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? v(t, i) : void 0
                        }
                    }(t)) || i && t && "number" == typeof t.length) {
                    n && (t = n);
                    var r = 0;
                    return function() {
                        return r >= t.length ? {
                            done: !0
                        } : {
                            done: !1,
                            value: t[r++]
                        }
                    }
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }
            var m = Object.prototype;

            function d(t) {
                var i = Object.create(null);
                return t && Object.assign(i, t),
                    i
            }

            function b(t) {
                return "number" == typeof t && isFinite(t)
            }

            function g(t, i, n, r, e, o, s, a, u, h, l) {
                return t
            }

            function x(t) {
                return (t.ownerDocument || t).defaultView
            }
            m.hasOwnProperty,
                m.toString;
            var y = /(\0)|^(-)$|([\x01-\x1f\x7f]|^-?[0-9])|([\x80-\uffff0-9a-zA-Z_-]+)|[^]/g;

            function w(t, i, n, r, e) {
                return e || (i ? "�" : r ? t.slice(0, -1) + "\\" + t.slice(-1).charCodeAt(0).toString(16) + " " : "\\" + t)
            }

            function S(t) {
                return String(t).replace(y, w)
            }

            function k(t) {
                return function(t, i) {
                    for (var n = [], r = t.firstElementChild; r; r = r.nextElementSibling)
                        void 0,
                        s = void 0,
                        a = void 0,
                        f(o = e = r) ? s = o : 1 == (null == (a = o) ? void 0 : a.nodeType) && (s = o.tagName), !(s && s.toLowerCase().startsWith("i-") || e.nodeType === Node.ELEMENT_NODE && (e.hasAttribute("placeholder") || e.hasAttribute("fallback") || e.hasAttribute("overflow"))) && n.push(r);
                    var e, o, s, a;
                    return n
                }(t)
            }
            var j = {
                bubbles: !0,
                cancelable: !0
            };

            function E(t) {
                return t.parent && t.parent != t
            }

            function O(t, i, n) {
                var r = t.hasAttribute(i),
                    e = void 0 !== n ? n : !r;
                return e !== r && (e ? t.setAttribute(i, "") : t.removeAttribute(i)),
                    e
            }

            function M(t, i, n, r) {
                var e = n || {};
                g(t.ownerDocument);
                var o = r || j,
                    s = o.bubbles,
                    a = o.cancelable,
                    u = new MessageEvent(i, {
                        data: e,
                        bubbles: s,
                        cancelable: a
                    });
                t.dispatchEvent(u)
            }

            function A(t) {
                return t.hasAttribute("i-amphtml-ssr")
            }
            var z, I = "amp-carousel-button-prev",
                T = "amp-carousel-button-next",
                N = "i-amphtml-carousel-has-controls",
                R = "amp-carousel-slide",
                P = "i-amphtml-slide-item",
                _ = "i-amphtml-slides-container",
                B = "i-amphtml-slidescroll-no-snap",
                C = "i-amphtml-slide-item-show",
                L = "i-amphtml-scrollable-carousel-container";

            function W() {
                for (var t = 0; t < arguments.length; t++)
                    if (!arguments[t])
                        throw new Error("Invalid server render")
            }

            function F(t, i) {
                var n = i.className,
                    r = i.enabled,
                    e = i.title,
                    o = Z(t) ? "presentation" : "button",
                    s = t.ownerDocument.createElement("div");
                return s.setAttribute("tabindex", "0"),
                    s.classList.add("amp-carousel-button", n),
                    s.setAttribute("role", o),
                    s.setAttribute("title", e),
                    U(s, r),
                    t.appendChild(s),
                    s
            }

            function U(t, i) {
                t.classList.toggle("amp-disabled", !i),
                    t.setAttribute("aria-disabled", String(!i)),
                    t.setAttribute("tabindex", String(i ? 0 : -1))
            }

            function D(t) {
                var i = k(t).length,
                    n = Z(t) ? function(t) {
                        if (A(t))
                            return function(t) {
                                var i = t.querySelector(".".concat(S(L))),
                                    n = Array.from(t.querySelectorAll(".".concat(S(R))));
                                return W(i, n), {
                                    container: i,
                                    cells: n
                                }
                            }(t);
                        var i = t.ownerDocument,
                            n = k(t),
                            r = i.createElement("div");
                        return r.classList.add(L),
                            r.setAttribute("tabindex", "-1"),
                            t.appendChild(r),
                            n.forEach((function(t) {
                                t.classList.add(R, "amp-scrollable-carousel-slide"),
                                    r.appendChild(t)
                            })), {
                                cells: n,
                                container: r
                            }
                    }(t) : function(t) {
                        var i;
                        if (A(t))
                            return function(t) {
                                var i = t.querySelector(".".concat(S(_))),
                                    n = Array.from(t.querySelectorAll(".".concat(S(P)))),
                                    r = Array.from(t.querySelectorAll(".".concat(S(R))));
                                return W(i, n, r), {
                                    slides: r,
                                    slidesContainer: i,
                                    slideWrappers: n
                                }
                            }(t);
                        var n = t.ownerDocument,
                            r = k(t);
                        t.classList.add("i-amphtml-slidescroll");
                        var e = n.createElement("div");
                        e.setAttribute("tabindex", "-1"),
                            e.classList.add(_, B),
                            e.setAttribute("aria-live", "polite"),
                            t.appendChild(e);
                        var o = [];
                        return r.forEach((function(t) {
                                t.classList.add(R);
                                var i = n.createElement("div");
                                i.classList.add(P),
                                    i.appendChild(t),
                                    e.appendChild(i),
                                    o.push(i)
                            })),
                            null === (i = o[0]) || void 0 === i || i.classList.add(C), {
                                slidesContainer: e,
                                slides: r,
                                slideWrappers: o
                            }
                    }(t);
                return l(l({}, function(t, i) {
                    if (A(t))
                        return function(t) {
                            var i = t.querySelector(".".concat(S(I))),
                                n = t.querySelector(".".concat(S(T)));
                            return W(i, n), {
                                prevButton: i,
                                nextButton: n
                            }
                        }(t);
                    var n, r;
                    n = t.ownerDocument,
                        r = n.documentElement,
                        (["⚡4email", "amp4email"].some((function(t) {
                            return r.hasAttribute(t)
                        })) || t.hasAttribute("controls")) && t.classList.add(N);
                    var e = t.hasAttribute("loop"),
                        o = i > 1 ? 2 : e ? 0 : 1;
                    return {
                        prevButton: F(t, {
                            className: I,
                            title: G(t, {
                                index: String(e ? i : 0),
                                total: String(i)
                            }),
                            enabled: t.hasAttribute("loop")
                        }),
                        nextButton: F(t, {
                            className: T,
                            title: H(t, {
                                index: String(o),
                                total: String(i)
                            }),
                            enabled: i > 1
                        })
                    }
                }(t, i)), n)
            }

            function H(t, i) {
                var n = t.getAttribute("data-next-button-aria-label") || "Next item in carousel";
                return X(t, {
                    prefix: n,
                    index: i.index,
                    total: i.total
                })
            }

            function G(t, i) {
                var n = t.getAttribute("data-prev-button-aria-label") || "Previous item in carousel";
                return X(t, {
                    prefix: n,
                    index: i.index,
                    total: i.total
                })
            }

            function X(t, i) {
                var n = i.index,
                    r = i.prefix,
                    e = i.total;
                if (Z(t))
                    return r;
                var o = (t.getAttribute("data-button-count-format") || "(%s of %s)").replace("%s", n).replace("%s", e);
                return "".concat(r, " ").concat(o)
            }

            function Z(t) {
                return "slides" !== t.getAttribute("type")
            }

            function $() {
                return z || (z = Promise.resolve(void 0))
            }
            var J = function() {
                    var t = this;
                    this.promise = new Promise((function(i, n) {
                        t.resolve = i,
                            t.reject = n
                    }))
                },
                V = "ArrowLeft",
                Y = "ArrowRight",
                q = "fixed",
                K = "fixed-height";

            function Q(t, i) {
                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                    r = n.needsRootBounds,
                    e = n.rootMargin,
                    o = n.threshold,
                    s = E(i) && (r || e) ? i.document : void 0;
                return new i.IntersectionObserver(t, {
                    threshold: o,
                    root: s,
                    rootMargin: e
                })
            }
            var tt, it = new WeakMap,
                nt = new WeakMap;

            function rt(t, i, n) {
                var r = x(t);
                if (n) {
                    var e = Q((function(t) {
                        i(t[t.length - 1])
                    }), r, n);
                    return e.observe(t),
                        function() {
                            e.unobserve(t)
                        }
                }
                var o = it.get(r);
                o || it.set(r, o = Q(et, r));
                var s = nt.get(t);
                return s || (s = [],
                        nt.set(t, s)),
                    s.push(i),
                    o.observe(t),
                    function() {
                        ! function(t, i) {
                            var n, r, e, o = nt.get(t);
                            if (o && (r = i, -1 != (e = (n = o).indexOf(r)) && (n.splice(e, 1),
                                    1) && !o.length)) {
                                var s = x(t),
                                    a = it.get(s);
                                null == a || a.unobserve(t),
                                    nt.delete(t)
                            }
                        }(t, i)
                    }
            }

            function et(t) {
                for (var i = new Set, n = t.length - 1; n >= 0; n--) {
                    var r = t[n],
                        e = r.target;
                    if (!i.has(e)) {
                        i.add(e);
                        var o = nt.get(e);
                        if (o)
                            for (var s = 0; s < o.length; s++)
                                (0,
                                    o[s])(r)
                    }
                }
            }

            function ot(t) {
                var i = Object.getOwnPropertyDescriptor(t, "message");
                if (null != i && i.writable)
                    return t;
                var n = t.message,
                    r = t.stack,
                    e = new Error(n);
                for (var o in t)
                    e[o] = t[o];
                return e.stack = r,
                    e
            }

            function st(t) {
                for (var i, n = null, r = "", e = p(arguments, !0); !(i = e()).done;) {
                    var o = i.value;
                    o instanceof Error && !n ? n = ot(o) : (r && (r += " "),
                        r += o)
                }
                return n ? r && (n.message = r + ": " + n.message) : n = new Error(r),
                    n
            }

            function at(t) {
                var i, n;
                null === (i = (n = self).__AMP_REPORT_ERROR) || void 0 === i || i.call(n, t)
            }

            function ut(t) {
                var i = st.apply(null, arguments);
                setTimeout((function() {
                    throw at(i),
                        i
                }))
            }

            function ht(t) {
                try {
                    for (var i = arguments.length, n = new Array(i > 1 ? i - 1 : 0), r = 1; r < i; r++)
                        n[r - 1] = arguments[r];
                    return t.apply(null, n)
                } catch (t) {
                    ut(t)
                }
            }
            var lt = ["Webkit", "webkit", "Moz", "moz", "ms", "O", "o"],
                ct = {
                    "getPropertyPriority": function() {
                        return ""
                    },
                    "getPropertyValue": function() {
                        return ""
                    }
                };

            function ft(t, i, n) {
                if (pt(i))
                    return i;
                tt || (tt = d());
                var r = tt[i];
                if (!r || n) {
                    if (r = i,
                        void 0 === t[i]) {
                        var e = function(t) {
                                return t.charAt(0).toUpperCase() + t.slice(1)
                            }(i),
                            o = function(t, i) {
                                for (var n = 0; n < lt.length; n++) {
                                    var r = lt[n] + i;
                                    if (void 0 !== t[r])
                                        return r
                                }
                                return ""
                            }(t, e);
                        void 0 !== t[o] && (r = o)
                    }
                    n || (tt[i] = r)
                }
                return r
            }

            function vt(t, i, n, r, e) {
                var o = ft(t.style, i, e);
                if (o) {
                    var s, a = r ? n + r : n;
                    t.style.setProperty((s = o.replace(/[A-Z]/g, (function(t) {
                            return "-" + t.toLowerCase()
                        })),
                        lt.some((function(t) {
                            return s.startsWith(t + "-")
                        })) ? "-".concat(s) : s), a)
                }
            }

            function pt(t) {
                return t.startsWith("--")
            }

            function mt(t, i) {
                return function(n) {
                    return t + (i - t) * n
                }
            }
            var dt = /(?:^[#?]?|&)([^=&]+)(?:=([^&]*))?/g;

            function bt(t) {
                var i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                try {
                    return decodeURIComponent(t)
                } catch (t) {
                    return i
                }
            }
            self.__AMP_LOG = self.__AMP_LOG || {
                user: null,
                dev: null,
                userForEmbed: null
            };
            var gt = self.__AMP_LOG;

            function xt(t, i) {
                throw new Error("failed to call initLogConstructor")
            }

            function yt(t) {
                return gt.user || (gt.user = wt()),
                    function(t, i) {
                        return i && i.ownerDocument.defaultView != t
                    }(gt.user.win, t) ? gt.userForEmbed || (gt.userForEmbed = wt()) : gt.user
            }

            function wt(t) {
                return xt()
            }

            function St() {
                return gt.dev || (gt.dev = xt())
            }

            function kt(t, i, n, r, e, o, s, a, u, h, l) {
                return t
            }

            function jt(t, i) {
                return zt(t = function(t) {
                    return t.__AMP_TOP || (t.__AMP_TOP = t)
                }(t), i)
            }

            function Et(t, i) {
                return zt(At(Mt(t)), i)
            }

            function Ot(t, i) {
                return It(At(t), i)
            }

            function Mt(t) {
                return t.nodeType ? (i = x(t),
                    jt(i, "ampdoc")).getAmpDoc(t) : t;
                var i
            }

            function At(t) {
                var i = Mt(t);
                return i.isSingleDoc() ? i.win : i
            }

            function zt(t, i) {
                kt(Nt(t, i));
                var n = Tt(t)[i];
                return n.obj || (kt(n.ctor),
                        kt(n.context),
                        n.obj = new n.ctor(n.context),
                        kt(n.obj),
                        n.context = null,
                        n.resolve && n.resolve(n.obj)),
                    n.obj
            }

            function It(t, i) {
                var n = Tt(t)[i];
                return n ? n.promise ? n.promise : (zt(t, i),
                    n.promise = Promise.resolve(n.obj)) : null
            }

            function Tt(t) {
                var i = t.__AMP_SERVICES;
                return i || (i = t.__AMP_SERVICES = {}),
                    i
            }

            function Nt(t, i) {
                var n = t.__AMP_SERVICES && t.__AMP_SERVICES[i];
                return !(!n || !n.ctor)
            }
            var Rt = function(t) {
                    return i = "action",
                        Nt(n = At(Mt(t)), i) ? zt(n, i) : null;
                    var i, n
                },
                Pt = function(t) {
                    return function(t, i, n, r) {
                        var e = Ot(t, i);
                        if (e)
                            return e;
                        var o = Mt(t);
                        return o.whenExtensionsKnown().then((function() {
                            var t = o.getExtensionVersion(n);
                            return t ? jt(o.win, "extensions").waitForExtension(n, t) : null
                        })).then((function(n) {
                            return n ? function(t, i) {
                                return function(t, i) {
                                    var n = It(t, i);
                                    if (n)
                                        return n;
                                    var r, e, o, s, a = Tt(t);
                                    return a[i] = (e = (r = new J).promise,
                                            o = r.reject,
                                            s = r.resolve,
                                            e.catch((function() {})), {
                                                obj: null,
                                                promise: e,
                                                resolve: s,
                                                reject: o,
                                                context: null,
                                                ctor: null
                                            }),
                                        a[i].promise
                                }(At(t), i)
                            }(t, i) : null
                        }))
                    }(t, "amp-analytics-instrumentation", "amp-analytics")
                },
                _t = function(t) {
                    return Et(t, "owners")
                },
                Bt = function(t) {
                    return jt(t, "platform")
                },
                Ct = function(t) {
                    return zt(t, "timer")
                },
                Lt = function(t) {
                    return jt(t, "vsync")
                };

            function Wt(t, i, n, r) {
                return function(e) {
                    return Ft.solveYValueFromXValue(e, 0, 0, t, i, n, r, 1, 1)
                }
            }
            var Ft = function() {
                    function t() {}
                    return t.solveYValueFromXValue = function(i, n, r, e, o, s, a, u, h) {
                            return t.dl(t.ml(i, n, e, s, u), r, o, a, h)
                        },
                        t.ml = function(i, n, r, e, o) {
                            var s = 1e-6,
                                a = (i - n) / (o - n);
                            if (a <= 0)
                                return 0;
                            if (a >= 1)
                                return 1;
                            for (var u = 0, h = 1, l = 0, c = 0; c < 8; c++) {
                                l = t.pl(a, n, r, e, o);
                                var f = (t.pl(a + s, n, r, e, o) - l) / s;
                                if (Math.abs(l - i) < s)
                                    return a;
                                if (Math.abs(f) < s)
                                    break;
                                l < i ? u = a : h = a,
                                    a -= (l - i) / f
                            }
                            for (var v = 0; Math.abs(l - i) > s && v < 8; v++)
                                l < i ? (u = a,
                                    a = (a + h) / 2) : (h = a,
                                    a = (a + u) / 2),
                                l = t.pl(a, n, r, e, o);
                            return a
                        },
                        t.pl = function(i, n, r, e, o) {
                            if (0 == i)
                                return n;
                            if (1 == i)
                                return o;
                            var s = t.bl(n, r, i),
                                a = t.bl(r, e, i),
                                u = t.bl(e, o, i);
                            return s = t.bl(s, a, i),
                                a = t.bl(a, u, i),
                                t.bl(s, a, i)
                        },
                        t.dl = function(i, n, r, e, o) {
                            if (0 == i)
                                return n;
                            if (1 == i)
                                return o;
                            var s = t.bl(n, r, i),
                                a = t.bl(r, e, i),
                                u = t.bl(e, o, i);
                            return s = t.bl(s, a, i),
                                a = t.bl(a, u, i),
                                t.bl(s, a, i)
                        },
                        t.bl = function(t, i, n) {
                            return t + n * (i - t)
                        },
                        t
                }(),
                Ut = {
                    LINEAR: function(t) {
                        return t
                    },
                    EASE: function(t) {
                        return Ft.solveYValueFromXValue(t, 0, 0, .25, .1, .25, 1, 1, 1)
                    },
                    EASE_IN: function(t) {
                        return Ft.solveYValueFromXValue(t, 0, 0, .42, 0, 1, 1, 1, 1)
                    },
                    EASE_OUT: function(t) {
                        return Ft.solveYValueFromXValue(t, 0, 0, 0, 0, .58, 1, 1, 1)
                    },
                    EASE_IN_OUT: function(t) {
                        return Ft.solveYValueFromXValue(t, 0, 0, .42, 0, .58, 1, 1, 1)
                    }
                },
                Dt = {
                    "linear": Ut.LINEAR,
                    "ease": Ut.EASE,
                    "ease-in": Ut.EASE_IN,
                    "ease-out": Ut.EASE_OUT,
                    "ease-in-out": Ut.EASE_IN_OUT
                };

            function Ht(t) {
                if (!t)
                    return null;
                if (f(t)) {
                    if (-1 != t.indexOf("cubic-bezier")) {
                        var i = t.match(/cubic-bezier\((.+)\)/);
                        if (i) {
                            var n = i[1].split(",").map(parseFloat);
                            if (4 == n.length) {
                                for (var r = 0; r < 4; r++)
                                    if (isNaN(n[r]))
                                        return null;
                                return Wt(n[0], n[1], n[2], n[3])
                            }
                        }
                        return null
                    }
                    return Dt[t]
                }
                return t
            }
            var Gt, Xt = "Animation",
                Zt = function() {},
                $t = function() {
                    function t(t, i) {
                        this.gl = t,
                            this.Ih = i || Lt(self),
                            this.yl = null,
                            this.wl = []
                    }
                    t.animate = function(i, n, r, e) {
                        return new t(i).setCurve(e).add(0, n, 1).start(r)
                    };
                    var i = t.prototype;
                    return i.setCurve = function(t) {
                            return t && (this.yl = Ht(t)),
                                this
                        },
                        i.add = function(t, i, n, r) {
                            return this.wl.push({
                                    delay: t,
                                    func: i,
                                    duration: n,
                                    curve: Ht(r)
                                }),
                                this
                        },
                        i.start = function(t) {
                            return new Jt(this.Ih, this.gl, this.wl, this.yl, t)
                        },
                        t
                }(),
                Jt = function() {
                    function t(t, i, n, r, e) {
                        this.Ih = t,
                            this.gl = i,
                            this.wl = [];
                        for (var o = 0; o < n.length; o++) {
                            var s = n[o];
                            this.wl.push({
                                delay: s.delay,
                                func: s.func,
                                duration: s.duration,
                                curve: s.curve || r,
                                started: !1,
                                completed: !1
                            })
                        }
                        this.Al = e,
                            this.sf = Date.now(),
                            this.Ho = !0,
                            this._e = {};
                        var a = new J;
                        this.xl = a.promise,
                            this.Te = a.resolve,
                            this.El = a.reject,
                            this.Ol = this.Ih.createAnimTask(this.gl, {
                                mutate: this.Tl.bind(this)
                            }),
                            this.Ih.canAnimate(this.gl) ? this.Ol(this._e) : (St().warn(Xt, "cannot animate"),
                                this.Pl(!1, 0))
                    }
                    var i = t.prototype;
                    return i.then = function(t, i) {
                            return t || i ? this.xl.then(t, i) : this.xl
                        },
                        i.thenAlways = function(t) {
                            var i = t || Zt;
                            return this.then(i, i)
                        },
                        i.halt = function(t) {
                            this.Pl(!1, t || 0)
                        },
                        i.Pl = function(t, i) {
                            if (this.Ho) {
                                if (this.Ho = !1,
                                    0 != i) {
                                    this.wl.length > 1 && this.wl.sort((function(t, i) {
                                        return t.delay + t.duration - (i.delay + i.duration)
                                    }));
                                    try {
                                        if (i > 0)
                                            for (var n = 0; n < this.wl.length; n++)
                                                this.wl[n].func(1, !0);
                                        else
                                            for (var r = this.wl.length - 1; r >= 0; r--)
                                                this.wl[r].func(0, !1)
                                    } catch (i) {
                                        St().error(Xt, "completion failed: " + i, i),
                                            t = !1
                                    }
                                }
                                t ? this.Te() : this.El()
                            }
                        },
                        i.Tl = function(t) {
                            if (this.Ho) {
                                for (var i = Date.now(), n = Math.min((i - this.sf) / this.Al, 1), r = 0; r < this.wl.length; r++) {
                                    var e = this.wl[r];
                                    !e.started && n >= e.delay && (e.started = !0)
                                }
                                for (var o = 0; o < this.wl.length; o++) {
                                    var s = this.wl[o];
                                    s.started && !s.completed && this.Il(s, n)
                                }
                                1 == n ? this.Pl(!0, 0) : this.Ih.canAnimate(this.gl) ? this.Ol(this._e) : (St().warn(Xt, "cancel animation"),
                                    this.Pl(!1, 0))
                            }
                        },
                        i.Il = function(t, i) {
                            var n, r;
                            if (t.duration > 0) {
                                if (r = n = Math.min((i - t.delay) / t.duration, 1),
                                    t.curve && 1 != r)
                                    try {
                                        r = t.curve(n)
                                    } catch (t) {
                                        return St().error(Xt, "step curve failed: " + t, t),
                                            void this.Pl(!1, 0)
                                    }
                            } else
                                n = 1,
                                r = 1;
                            1 == n && (t.completed = !0);
                            try {
                                t.func(r, t.completed)
                            } catch (t) {
                                return St().error(Xt, "step mutate failed: " + t, t),
                                    void this.Pl(!1, 0)
                            }
                        },
                        t
                }();

            function Vt(t, i, n, r) {
                var e = {
                    detail: n
                };
                if (Object.assign(e, r),
                    "function" == typeof t.CustomEvent)
                    return new t.CustomEvent(i, e);
                var o = t.document.createEvent("CustomEvent");
                return o.initCustomEvent(i, !!e.bubbles, !!e.cancelable, n),
                    o
            }

            function Yt(t, i, n, r) {
                return function(t, i, n, r) {
                    var e = t,
                        o = n,
                        s = function(t) {
                            try {
                                return o(t)
                            } catch (t) {
                                var i, n;
                                throw null === (i = (n = self).__AMP_REPORT_ERROR) || void 0 === i || i.call(n, t),
                                    t
                            }
                        },
                        a = function() {
                            if (void 0 !== Gt)
                                return Gt;
                            Gt = !1;
                            try {
                                var t = {
                                    get capture() {
                                        return Gt = !0, !1
                                    }
                                };
                                self.addEventListener("test-options", null, t),
                                    self.removeEventListener("test-options", null, t)
                            } catch (t) {}
                            return Gt
                        }(),
                        u = !(null == r || !r.capture);
                    return e.addEventListener(i, s, a ? r : u),
                        function() {
                            null == e || e.removeEventListener(i, s, a ? r : u),
                                o = null,
                                e = null,
                                s = null
                        }
                }(t, i, n, r)
            }
            var qt = function() {
                    function t(t) {
                        var i = t.element,
                            n = t.go,
                            r = t.nextButton,
                            e = t.prevButton;
                        this.Ut = i,
                            this.tst = n,
                            this.t = x(i),
                            this.mi = e,
                            this.vi = r,
                            this.Uit = !1,
                            this.ist()
                    }
                    var i = t.prototype;
                    return i.ist = function() {
                            var t, i = this;
                            this.setupButtonInteraction(this.mi, (function() {
                                    return i.handlePrev()
                                })),
                                this.setupButtonInteraction(this.vi, (function() {
                                    return i.handleNext()
                                })),
                                this.Ut.hasAttribute("controls") ? this.Uit = !0 : (t = this.t,
                                    jt(t, "input")).onMouseDetected((function(t) {
                                    t && (i.Uit = !0,
                                        O(i.Ut, "i-amphtml-carousel-hide-buttons", !i.Uit),
                                        i.Ut.classList.add(N))
                                }), !0)
                        },
                        i.setupButtonInteraction = function(t, i) {
                            t.addEventListener("click", i),
                                t.addEventListener("keydown", (function(t) {
                                    t.defaultPrevented || "Enter" != t.key && " " != t.key || (t.preventDefault(),
                                        i())
                                }))
                        },
                        i.setControlsState = function(t) {
                            var i = t.next,
                                n = t.prev;
                            U(this.mi, n),
                                U(this.vi, i)
                        },
                        i.hintControls = function() {
                            var t = this;
                            this.Uit || Lt(this.t).mutate((function() {
                                var i = "i-amphtml-carousel-button-start-hint";
                                t.Ut.classList.add(i),
                                    Ct(t.t).delay((function() {
                                        var n;
                                        (n = t.Ut,
                                            Et(n, "mutator")).measureMutateElement(t.Ut, null, (function() {
                                            t.Ut.classList.remove(i),
                                                O(t.Ut, "i-amphtml-carousel-hide-buttons", !t.Uit)
                                        }))
                                    }), 4e3)
                            }))
                        },
                        i.updateButtonTitles = function(t, i) {
                            this.mi.title = t,
                                this.vi.title = i
                        },
                        i.handlePrev = function() {
                            !this.mi.classList.contains("amp-disabled") && this.tst(-1, !0, !1)
                        },
                        i.handleNext = function() {
                            !this.vi.classList.contains("amp-disabled") && this.tst(1, !0, !1)
                        },
                        t
                }(),
                Kt = "amp-scrollable-carousel",
                Qt = function(t) {
                    n(r, t);
                    var i = a(r);

                    function r(t) {
                        var n;
                        return (n = i.call(this, t))._Z = 0,
                            n.nst = 0,
                            n.rst = null,
                            n.pg = null,
                            n.BZ = null,
                            n.bS = null,
                            n.np = null,
                            n
                    }
                    var e = r.prototype;
                    return e.isLayoutSupported = function(t) {
                            return function(t) {
                                return t == q || t == K
                            }(t)
                        },
                        e.isRelayoutNeeded = function() {
                            return !0
                        },
                        e.est = function() {
                            var t = this;
                            this.ost(),
                                this.pg.addEventListener("scroll", this.Ht.bind(this)),
                                this.pg.addEventListener("keydown", this.iX.bind(this)),
                                this.rst.forEach((function(i) {
                                    _t(t.element).setOwner(i, t.element)
                                })),
                                this.registerAction("goToSlide", (function(i) {
                                    var n = i.args;
                                    if (n) {
                                        var r = parseInt(n.index, 10);
                                        t.goToSlide(r)
                                    }
                                }), 1),
                                Rt(this.element).addToAllowlist("amp-carousel", "goToSlide", ["email"])
                        },
                        e.buildCallback = function() {
                            var t = D(this.element),
                                i = t.cells,
                                n = t.container,
                                r = t.nextButton,
                                e = t.prevButton;
                            this.pg = n,
                                this.rst = i,
                                this.np = new qt({
                                    element: this.element,
                                    prevButton: e,
                                    nextButton: r,
                                    go: this.go.bind(this)
                                }),
                                this.est()
                        },
                        e.layoutCallback = function() {
                            var t = this;
                            return this.bS = rt(this.element, (function(i) {
                                    var n = i.isIntersecting;
                                    return t.viewportCallback(n)
                                })),
                                this.sst(this._Z),
                                this.ast(this._Z, 1),
                                this.np.setControlsState({
                                    prev: this.ust(),
                                    next: this.hst()
                                }),
                                $()
                        },
                        e.unlayoutCallback = function() {
                            var t;
                            return null === (t = this.bS) || void 0 === t || t.call(this),
                                this.bS = null, !0
                        },
                        e.viewportCallback = function(t) {
                            this.lst(this._Z, this._Z),
                                t && this.np.hintControls()
                        },
                        e.go = function(t, i) {
                            var n = this,
                                r = this.cst(this._Z, t),
                                e = this._Z;
                            if (r != e)
                                if (i) {
                                    var o = mt(e, r);
                                    $t.animate(this.element, (function(t) {
                                        n.pg.scrollLeft = o(t)
                                    }), 200, "ease-in-out").thenAlways((function() {
                                        n.fst(r)
                                    }))
                                } else
                                    this.fst(r),
                                    this.pg.scrollLeft = r
                        },
                        e.goToSlide = function(t) {
                            var i = this,
                                n = this.rst.length;
                            if (!isFinite(t) || t < 0 || t >= n)
                                return this.user().error(Kt, "Invalid [slide] value: %s", t),
                                    $();
                            var r = this._Z,
                                e = r;
                            this.measureMutateElement((function() {
                                e = i.vst(t)
                            }), (function() {
                                if (e != r) {
                                    var t = mt(r, e);
                                    $t.animate(i.element, (function(n) {
                                        i.pg.scrollLeft = t(n)
                                    }), 200, "ease-in-out").thenAlways((function() {
                                        i.fst(e)
                                    }))
                                }
                            }))
                        },
                        e.vst = function(t) {
                            var i = this.element.offsetWidth;
                            return this.rst[t].offsetLeft - (i - this.rst[t].offsetWidth) / 2
                        },
                        e.Ht = function() {
                            var t = this.pg.scrollLeft;
                            this._Z = t,
                                null === this.BZ && this.$J(t)
                        },
                        e.iX = function(t) {
                            var i = t.key;
                            i != V && i != Y || t.stopPropagation()
                        },
                        e.$J = function(t) {
                            var i = this;
                            this.BZ = Ct(this.win).delay((function() {
                                Math.abs(t - i._Z) < 30 ? (St().fine(Kt, "slow scrolling: %s - %s", t, i._Z),
                                    i.BZ = null,
                                    i.fst(i._Z)) : (St().fine(Kt, "fast scrolling: %s - %s", t, i._Z),
                                    i.$J(i._Z))
                            }), 100)
                        },
                        e.fst = function(t) {
                            this.lst(t, this.nst),
                                this.sst(t),
                                this.ast(t, Math.sign(t - this.nst)),
                                this.nst = t,
                                this._Z = t,
                                this.np.setControlsState({
                                    prev: this.ust(),
                                    next: this.hst()
                                })
                        },
                        e.cst = function(t, i) {
                            var n = this.element.offsetWidth,
                                r = this.pg.scrollWidth,
                                e = t + i * n;
                            return e < 0 ? 0 : r >= n && e > r - n ? r - n : e
                        },
                        e.pst = function(t, i) {
                            for (var n = this.element.offsetWidth, r = 0; r < this.rst.length; r++) {
                                var e = this.rst[r];
                                e.offsetLeft + e.offsetWidth >= t && e.offsetLeft <= t + n && i(e)
                            }
                        },
                        e.sst = function(t) {
                            var i = this;
                            this.pst(t, (function(t) {
                                _t(i.element).scheduleLayout(i.element, t)
                            }))
                        },
                        e.ast = function(t, i) {
                            var n = this,
                                r = this.cst(t, i);
                            r != t && this.pst(r, (function(t) {
                                _t(n.element).schedulePreload(n.element, t)
                            }))
                        },
                        e.lst = function(t, i) {
                            var n = this,
                                r = [];
                            this.pst(t, (function(t) {
                                    r.push(t)
                                })),
                                i != t && this.pst(i, (function(t) {
                                    r.includes(t) || _t(n.element).schedulePause(n.element, t)
                                }))
                        },
                        e.ust = function() {
                            return 0 != this._Z
                        },
                        e.hst = function() {
                            var t = this.element.offsetWidth,
                                i = this.pg.scrollWidth,
                                n = Math.max(i - t, 0);
                            return this._Z != n
                        },
                        e.interactionNext = function() {
                            this.np.handleNext()
                        },
                        e.interactionPrev = function() {
                            this.np.handlePrev()
                        },
                        e.goCallback = function(t, i) {
                            this.go(t, i)
                        },
                        e.ost = function() {
                            Yt(this.element, "touchmove", (function(t) {
                                return t.stopPropagation()
                            }), {
                                passive: !0
                            })
                        },
                        r
                }(t.BaseElement),
                ti = /vertical/,
                ii = new WeakMap,
                ni = new WeakMap,
                ri = new WeakMap;

            function ei(t) {
                var i = ii.get(t);
                return i || (i = new t.ResizeObserver(oi),
                        ii.set(t, i)),
                    i
            }

            function oi(t) {
                for (var i = new Set, n = t.length - 1; n >= 0; n--) {
                    var r = t[n],
                        e = r.target;
                    if (!i.has(e)) {
                        i.add(e);
                        var o = ni.get(e);
                        if (o) {
                            ri.set(e, r);
                            for (var s = 0; s < o.length; s++) {
                                var a = o[s],
                                    u = a.callback;
                                si(a.type, u, r)
                            }
                        }
                    }
                }
            }

            function si(t, i, n) {
                if (0 == t) {
                    var r = n.contentRect,
                        e = r.height;
                    ht(i, {
                        width: r.width,
                        height: e
                    })
                } else if (1 == t) {
                    var o, s = n.borderBoxSize;
                    if (s)
                        o = s.length > 0 ? s[0] : {
                            inlineSize: 0,
                            blockSize: 0
                        };
                    else {
                        var a, u, h = n.target,
                            l = x(h),
                            c = ti.test(function(t, i) {
                                return t.getComputedStyle(i) || ct
                            }(l, h).writingMode),
                            f = h,
                            v = f.offsetHeight,
                            p = f.offsetWidth;
                        c ? (u = p,
                                a = v) : (a = p,
                                u = v),
                            o = {
                                inlineSize: a,
                                blockSize: u
                            }
                    }
                    ht(i, o)
                }
            }
            var ai = "__AMP__EXPERIMENT_TOGGLES",
                ui = "AMP-CAROUSEL",
                hi = function(t) {
                    n(r, t);
                    var i = a(r);

                    function r(t) {
                        var n;
                        (n = i.call(this, t)).Ih = null,
                            n.mst = !1,
                            n.h7 = [],
                            n.dst = 0,
                            n.krt = null,
                            n.bst = [],
                            n.gst = !1,
                            n.xst = null,
                            n.yst = !1,
                            n.wst = null,
                            n.Sst = !1,
                            n.kst = !1,
                            n.aq = !1,
                            n.jst = 5e3,
                            n.Est = null,
                            n.Ost = 0,
                            n.Mst = !1,
                            n.Ast = !1,
                            n.zst = 0,
                            n.Ist = null,
                            n.Tst = 0,
                            n.Nst = 0,
                            n.Rst = 0,
                            n.Pst = [];
                        var r, e = Bt(n.win);
                        return n.VZ = e.isIos(),
                            n.pk = e.isSafari(),
                            n.Yo = null,
                            n._st = !!Bt(n.win).getIosVersionString().startsWith("10.3") || !n.VZ && ("amp-carousel-chrome-scroll-snap",
                                r = function(t) {
                                    var i, n, r, e, o;
                                    if (t[ai])
                                        return t[ai];
                                    t[ai] = d();
                                    var s = t[ai];
                                    g(s);
                                    var a, u = l(l({}, null !== (i = t.AMP_CONFIG) && void 0 !== i ? i : {}), null !== (n = t.AMP_EXP) && void 0 !== n ? n : (a = (null === (r = t.__AMP_EXP) || void 0 === r ? void 0 : r.textContent) || "{}",
                                        JSON.parse(a)));
                                    for (var h in u) {
                                        var f = u[h];
                                        "number" == typeof f && f >= 0 && f <= 1 && (s[h] = Math.random() < f)
                                    }
                                    var v = null === (e = t.AMP_CONFIG) || void 0 === e ? void 0 : e["allow-doc-opt-in"];
                                    if (c(v) && v.length) {
                                        var m = t.document.head.querySelector('meta[name="amp-experiments-opt-in"]');
                                        if (m)
                                            for (var b, x, y = p((null === (b = m.getAttribute("content")) || void 0 === b ? void 0 : b.split(",")) || [], !0); !(x = y()).done;) {
                                                var w = x.value;
                                                v.includes(w) && (s[w] = !0)
                                            }
                                    }
                                    Object.assign(s, function(t) {
                                        var i, n = "";
                                        try {
                                            var r;
                                            "localStorage" in t && (n = null !== (r = t.localStorage.getItem("amp-experiment-toggles")) && void 0 !== r ? r : "")
                                        } catch (t) {
                                            St().warn("EXPERIMENTS", "Failed to retrieve experiments from localStorage.")
                                        }
                                        for (var e, o = (null === (i = n) || void 0 === i ? void 0 : i.split(/\s*,\s*/g)) || [], s = d(), a = p(o, !0); !(e = a()).done;) {
                                            var u = e.value;
                                            u && ("-" == u[0] ? s[u.substr(1)] = !1 : s[u] = !0)
                                        }
                                        return s
                                    }(t));
                                    var S = null === (o = t.AMP_CONFIG) || void 0 === o ? void 0 : o["allow-url-opt-in"];
                                    if (c(S) && S.length)
                                        for (var k, j = function(t) {
                                                var i, n = d();
                                                if (!t)
                                                    return n;
                                                for (; i = dt.exec(t);) {
                                                    var r = bt(i[1], i[1]),
                                                        e = i[2] ? bt(i[2].replace(/\+/g, " "), i[2]) : "";
                                                    n[r] = e
                                                }
                                                return n
                                            }(t.location.originalHash || t.location.hash), E = p(S, !0); !(k = E()).done;) {
                                            var O = k.value,
                                                M = j["e-".concat(O)];
                                            "1" == M && (s[O] = !0),
                                                "0" == M && (s[O] = !1)
                                        }
                                    return s
                                }(n.win), !r["amp-carousel-chrome-scroll-snap"]),
                            n.Bst = !1,
                            n.Db = n.Db.bind(o(n)),
                            n.bS = null,
                            n.np = null,
                            n
                    }
                    var e = r.prototype;
                    return e.isLayoutSupported = function(t) {
                            return function(t) {
                                return t == q || t == K || "responsive" == t || "fill" == t || "flex-item" == t || "fluid" == t || "intrinsic" == t
                            }(t)
                        },
                        e.isRelayoutNeeded = function() {
                            return !0
                        },
                        e.est = function() {
                            var t, i = this,
                                n = this.element.getAttribute("autoplay");
                            n && (this.Est = parseInt(n, 10),
                                    t = b(this.Est),
                                    yt().assert(t, undefined, undefined, undefined, undefined, undefined, undefined, undefined, undefined, undefined, undefined)),
                                this.Ast && 0 != this.Est && this.Cst(),
                                this.registerAction("toggleAutoplay", (function(t) {
                                    var n = t.args;
                                    n && void 0 !== n.toggleOn ? i.Vit(n.toggleOn) : i.Vit(!i.aq)
                                }), 1)
                        },
                        e.Lst = function() {
                            var t = this;
                            if (this.Ih = this.getVsync(),
                                this.Yo = Rt(this.element),
                                this.Yo.addToAllowlist(ui, "goToSlide", ["email"]),
                                this.mst = null != function(t, i, n) {
                                    var r = ft(t.style, "scrollSnapType", void 0);
                                    if (r)
                                        return pt(r) ? t.style.getPropertyValue(r) : t.style[r]
                                }(this.element),
                                this._st && (this.mst = !1),
                                this.krt.classList.toggle(B, this._st),
                                this.mst) {
                                var i = this.win.document.createElement("div");
                                i.classList.add("i-amphtml-carousel-start-marker"),
                                    this.krt.appendChild(i);
                                var n = this.win.document.createElement("div");
                                n.classList.add("i-amphtml-carousel-end-marker"),
                                    this.krt.appendChild(n)
                            }
                            this.h7.forEach((function(i, n) {
                                    var r = i.getAttribute("data-slide-id") || n.toString();
                                    t.Pst.push(r),
                                        _t(t.element).setOwner(i, t.element)
                                })),
                                this.ost(),
                                this.krt.addEventListener("scroll", this.Ht.bind(this)),
                                this.krt.addEventListener("keydown", this.iX.bind(this)),
                                Yt(this.krt, "touchmove", this.Wst.bind(this), {
                                    passive: !0
                                }),
                                Yt(this.krt, "touchend", this.Fst.bind(this), {
                                    passive: !0
                                }),
                                this.registerAction("goToSlide", (function(i) {
                                    var n = i.args;
                                    n && t.goToSlide(n.index, 3)
                                }), 1)
                        },
                        e.attachedCallback = function() {
                            (function(t, i, n) {
                                var r = t.ownerDocument.defaultView;
                                if (r) {
                                    var e = ni.get(t);
                                    if (e || (e = [],
                                            ni.set(t, e),
                                            ei(r).observe(t)), !e.some((function(t) {
                                            return t.callback === n && 0 === t.type
                                        }))) {
                                        e.push({
                                            type: 0,
                                            callback: n
                                        });
                                        var o = ri.get(t);
                                        o && setTimeout((function() {
                                            return si(0, n, o)
                                        }))
                                    }
                                }
                            })(this.element, 0, this.Db)
                        },
                        e.detachedCallback = function() {
                            (function(t, i, n) {
                                var r = ni.get(t);
                                if (r && (function(t, i) {
                                            for (var r = [], e = 0, o = 0; o < t.length; o++) {
                                                var s = t[o];
                                                (a = s).callback === n && 0 === a.type ? r.push(s) : (e < o && (t[e] = s),
                                                    e++)
                                            }
                                            var a;
                                            e < t.length && (t.length = e)
                                        }(r),
                                        0 == r.length)) {
                                    ni.delete(t),
                                        ri.delete(t);
                                    var e = t.ownerDocument.defaultView;
                                    e && ei(e).unobserve(t)
                                }
                            })(this.element, 0, this.Db)
                        },
                        e.isLoopingEligible = function() {
                            return this.dst > 1
                        },
                        e.mutatedAttributesCallback = function(t) {
                            var i = t.slide;
                            void 0 !== i && this.goToSlide(i, 3)
                        },
                        e.Wst = function() {
                            this.Ust(),
                                this.yst = !0
                        },
                        e.viewportCallback = function(t) {
                            var i;
                            t ? (this.cS(),
                                null === (i = this.np) || void 0 === i || i.hintControls()) : this.Ust()
                        },
                        e.interactionNext = function() {
                            this.np.handleNext()
                        },
                        e.interactionPrev = function() {
                            this.np.handlePrev()
                        },
                        e.goCallback = function(t, i, n) {
                            this.go(t, i, n)
                        },
                        e.go = function(t, i, n) {
                            var r = n ? 1 : 3;
                            this.moveSlide(t, i, r),
                                n ? this.cS() : this.Ust()
                        },
                        e.Dst = function(t) {
                            var i = this;
                            this.xst && Ct(this.win).cancel(this.xst),
                                this.xst = Ct(this.win).delay((function() {
                                    if (i.xst = null, !i.gst && !i.yst) {
                                        var t = i.krt.scrollLeft;
                                        i.mst ? i.Hst(t, 1) : i.Gst(t, void 0, 3)
                                    }
                                }), t)
                        },
                        e.Fst = function() {
                            var t = this._st ? 45 : 100;
                            this.yst = !1,
                                this.Dst(t)
                        },
                        e.Db = function(t) {
                            this.Nst = t.width,
                                this.Bst = !0
                        },
                        e.buildCallback = function() {
                            var t = D(this.element),
                                i = t.nextButton,
                                n = t.prevButton,
                                r = t.slideWrappers,
                                e = t.slides,
                                o = t.slidesContainer;
                            this.h7 = e,
                                this.krt = o,
                                this.bst = r,
                                this.dst = this.h7.length,
                                this.Sst = this.element.hasAttribute("loop"),
                                this.aq = this.element.hasAttribute("autoplay"),
                                this.Mst = this.Sst && this.isLoopingEligible(),
                                this.Ast = this.aq && this.isLoopingEligible(),
                                this.np = new qt({
                                    element: this.element,
                                    go: this.go.bind(this),
                                    nextButton: i,
                                    prevButton: n
                                }),
                                this.np.updateButtonTitles(this.getPrevButtonTitle(), this.getNextButtonTitle()),
                                this.est(),
                                this.Lst()
                        },
                        e.layoutCallback = function() {
                            var t, i = this;
                            if (this.bS = rt(this.element, (function(t) {
                                    var n = t.isIntersecting;
                                    return i.viewportCallback(n)
                                })),
                                "[i-amphtml-scale-animation]",
                                (t = this.element).closest ? t.closest("[i-amphtml-scale-animation]") : function(t, i, n) {
                                    var r;
                                    for (r = t; r && void 0 !== r; r = r.parentElement)
                                        if (i(r))
                                            return r;
                                    return null
                                }(t, (function(t) {
                                    return function(t, i) {
                                        var n = t.matches || t.webkitMatchesSelector || t.mozMatchesSelector || t.msMatchesSelector || t.oMatchesSelector;
                                        return !!n && n.call(t, "[i-amphtml-scale-animation]")
                                    }(t)
                                })))
                                return $();
                            if (this.Bst || (this.Nst = this.krt.clientWidth),
                                null === this.Ist)
                                this.Xst(this.Tst);
                            else {
                                var n = yt().assertNumber(this.Ist, "E#19457 this.slideIndex_"),
                                    r = this.Zst(n);
                                _t(this.element).scheduleLayout(this.element, this.h7[n]),
                                    this.krt.scrollLeft = r,
                                    this.Rst = r
                            }
                            return $()
                        },
                        e.unlayoutCallback = function() {
                            var t;
                            return null === (t = this.bS) || void 0 === t || t.call(this),
                                this.bS = null,
                                this.Ist = null, !0
                        },
                        e.ust = function() {
                            return this.Mst || this.Ist > 0
                        },
                        e.hst = function() {
                            return this.Mst || this.Ist < this.h7.length - 1
                        },
                        e.moveSlide = function(t, i, n) {
                            if (null !== this.Ist) {
                                var r = this.hst(),
                                    e = this.ust();
                                if (1 == t && r || -1 == t && e) {
                                    var o = this.Ist + t;
                                    if (-1 == o ? o = this.dst - 1 : o >= this.dst && (o = 0),
                                        i) {
                                        var s = 1 != t || e ? this.Nst : 0;
                                        this.Gst(s, t, n)
                                    } else
                                        this.$st(o, n)
                                }
                            }
                        },
                        e.Ht = function(t) {
                            var i = this.krt.scrollLeft;
                            this.VZ || this.pk || this.Jst(i);
                            var n = this.mst ? 200 : this.VZ ? 45 : 100;
                            this.Dst(n),
                                this.Rst = i
                        },
                        e.iX = function(t) {
                            var i = t.key;
                            i != V && i != Y || t.stopPropagation()
                        },
                        e.Jst = function(t) {
                            var i = this,
                                n = this.krt.scrollWidth; -
                            1 == this.zst && t >= this.Rst || 1 == this.zst && t <= this.Rst ? this.Gst(t).then((function() {
                                i.zst = 0
                            })) : t < 0 ? this.zst = -1 : t + this.Nst > n ? this.zst = 1 : this.zst = 0
                        },
                        e.Gst = function(t, i, n) {
                            var r = this;
                            this.gst = !0;
                            var e = this.Vst(t) - this.Ist,
                                o = this.ust(),
                                s = o ? this.Nst : 0;
                            return 0 != e || 1 != i && -1 != i || (e = i),
                                1 == e || -1 != e && e == -1 * (this.dst - 1) ? s = o ? 2 * this.Nst : this.Nst : -1 != e && e != this.dst - 1 || (s = 0),
                                this.Yst(t, s).then((function() {
                                    r.Hst(s, n)
                                }))
                        },
                        e.Vst = function(t) {
                            if (!t && !this.Nst)
                                return 0;
                            var i = Math.round(t / this.Nst),
                                n = 0,
                                r = this.ust(),
                                e = this.hst();
                            r && e ? n = i - 1 : e ? n = i : r && (n = i - 1);
                            var o = this.Ist + n;
                            return this.Mst ? o < 0 ? this.dst - 1 : o >= this.dst ? 0 : o : o < 0 ? 0 : o >= this.dst ? this.dst - 1 : o
                        },
                        e.getPrevButtonTitle = function() {
                            var t = this.Kit(this.Ist),
                                i = (null == t ? 0 : t) + 1;
                            return G(this.element, {
                                index: String(i),
                                total: String(this.dst)
                            })
                        },
                        e.getNextButtonTitle = function() {
                            var t = this.Qit(this.Ist),
                                i = (null == t ? this.dst - 1 : t) + 1;
                            return H(this.element, {
                                index: String(i),
                                total: String(this.dst)
                            })
                        },
                        e.Hst = function(t, i) {
                            var n = this;
                            if (b(t) && null !== this.Ist) {
                                this.gst = !0;
                                var r = this.Vst(t);
                                this.Ih.mutate((function() {
                                    n.$st(r, i),
                                        n.Ih.mutate((function() {
                                            n.gst = !1
                                        }))
                                }))
                            }
                        },
                        e.goToSlide = function(t, i) {
                            var n = parseInt(t, 10);
                            !isFinite(n) || n < 0 || n >= this.dst ? this.user().error(ui, "Invalid [slide] value: ", t) : null !== this.Ist ? this.$st(n, i) : this.Tst = n
                        },
                        e.Kit = function(t) {
                            return t - 1 >= 0 ? t - 1 : this.Mst ? this.dst - 1 : null
                        },
                        e.Qit = function(t) {
                            return t + 1 < this.dst ? t + 1 : this.Mst ? 0 : null
                        },
                        e.Xst = function(t) {
                            var i, n, r = this,
                                e = this.dst;
                            if (t < 0 || t >= e || this.Ist == t)
                                return !1;
                            var o = this.Kit(t),
                                s = this.Qit(t),
                                a = [];
                            return null != o && a.push(o),
                                a.push(t),
                                null != s && s !== o && a.push(s),
                                void 0 === this.h7[t] ? (St().error(ui, "Attempting to access a non-existant slide %s / %s", t, e), !1) : (a.forEach((function(i, n) {
                                        r.Mst && vt(r.bst[i], "order", n + 1),
                                            r.bst[i].classList.add(C);
                                        var e = _t(r.element);
                                        i == t ? (e.scheduleLayout(r.element, r.h7[i]),
                                            e.scheduleResume(r.element, r.h7[i]),
                                            r.h7[i].setAttribute("aria-hidden", "false")) : (e.schedulePreload(r.element, r.h7[i]),
                                            r.h7[i].setAttribute("aria-hidden", "true"))
                                    })),
                                    this.krt.scrollLeft = this.Zst(t),
                                    this.bnt(t),
                                    this.Ist = t,
                                    this.Est && this.Ist === this.dst - 1 && (this.Ost++,
                                        this.Ost == this.Est && this.qst()),
                                    this.Kst(a),
                                    null === (i = this.np) || void 0 === i || i.setControlsState({
                                        prev: this.ust(),
                                        next: this.hst()
                                    }),
                                    null === (n = this.np) || void 0 === n || n.updateButtonTitles(this.getPrevButtonTitle(), this.getNextButtonTitle()), !0)
                        },
                        e.$st = function(t) {
                            var i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1,
                                n = this.Xst(t);
                            if (n) {
                                var r = "slideChange",
                                    e = Vt(this.win, "slidescroll.".concat(r), {
                                        "index": t
                                    });
                                this.Yo.trigger(this.element, r, e, i),
                                    M(this.element, r, {
                                        index: t,
                                        actionTrust: i
                                    })
                            }
                        },
                        e.Zst = function(t) {
                            var i = this.Nst;
                            return (!this.Mst && 0 == t || this.h7.length <= 1) && (i = 0),
                                i
                        },
                        e.Kst = function(t) {
                            for (var i = this.dst, n = 0; n < i; n++)
                                this.bst[n].classList.contains(C) && (t.includes(n) || (this.Mst && vt(this.bst[n], "order", ""),
                                        this.bst[n].classList.remove(C),
                                        this.h7[n].removeAttribute("aria-hidden")),
                                    this.Ist != n && _t(this.element).schedulePause(this.element, this.h7[n]))
                        },
                        e.Yst = function(t, i) {
                            var n = this;
                            if (t == i)
                                return $();
                            var r = mt(t, i),
                                e = Wt(.8, 0, .6, 1),
                                o = this.krt;
                            return $t.animate(o, (function(t) {
                                n.krt.scrollLeft = r(t)
                            }), 80, e).thenAlways()
                        },
                        e.ost = function() {
                            Yt(this.element, "touchmove", (function(t) {
                                return t.stopPropagation()
                            }), {
                                passive: !0
                            })
                        },
                        e.bnt = function(t) {
                            var i = t - this.Ist;
                            if (0 != i) {
                                1 !== Math.abs(i) && (i = i < 0 ? 1 : -1,
                                    null === this.Ist && (i = 1));
                                var n = {
                                    "fromSlide": null === this.Ist ? "null" : this.Pst[this.Ist],
                                    "toSlide": this.Pst[t]
                                };
                                this.v6("amp-carousel-change", n),
                                    1 == i ? this.v6("amp-carousel-next", n) : this.v6("amp-carousel-prev", n)
                            }
                        },
                        e.v6 = function(t, i) {
                            ! function(t, i) {
                                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                                    r = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3];
                                Pt(t).then((function(e) {
                                    e && e.triggerEventForTarget(t, i, n, r)
                                }))
                            }(this.element, t, i)
                        },
                        e.Cst = function() {
                            var t = Number(this.element.getAttribute("delay"));
                            t > 0 && (this.jst = Math.max(1e3, t)),
                                this.Sst || (this.element.setAttribute("loop", ""),
                                    this.kst = !0,
                                    this.Sst = !0,
                                    this.Mst = !0)
                        },
                        e.cS = function() {
                            this.Ast && 0 != this.Est && (this.Ust(),
                                this.wst = Ct(this.win).delay(this.go.bind(this, 1, !0, !0), this.jst))
                        },
                        e.Vit = function(t) {
                            if (t != this.Ast) {
                                var i = this.Ast;
                                this.aq = t,
                                    this.Ast = this.aq && this.isLoopingEligible(), !i && this.Ast && this.Cst(),
                                    this.Ast ? this.cS() : this.Ust()
                            }
                        },
                        e.Ust = function() {
                            null !== this.wst && (Ct(this.win).cancel(this.wst),
                                this.wst = null)
                        },
                        e.qst = function() {
                            this.Ust(),
                                this.kst && (this.element.removeAttribute("loop"),
                                    this.kst = !1,
                                    this.Sst = !1,
                                    this.Mst = !1),
                                this.aq = !1,
                                this.Ast = this.aq && this.isLoopingEligible()
                        },
                        r
                }(t.BaseElement),
                li = function(t) {
                    n(r, t);
                    var i = a(r);

                    function r() {
                        return i.apply(this, arguments)
                    }
                    return r.prototype.upgradeCallback = function() {
                            return Z(this.element) ? new Qt(this.element) : new hi(this.element)
                        },
                        r
                }(t.BaseElement);
            t.registerElement("amp-carousel", li, '.amp-carousel-slide>.i-amphtml-replaced-content{-o-object-fit:contain;object-fit:contain}.amp-carousel-button{position:absolute;box-sizing:border-box;top:50%;height:34px;width:34px;border-radius:2px;opacity:0;pointer-events:all;background-color:rgba(0,0,0,.5);background-position:50% 50%;background-repeat:no-repeat;transform:translateY(-50%);visibility:hidden;z-index:10}.amp-carousel-button:focus{border:1px solid #000;outline:1px solid #fff}.amp-mode-mouse .amp-carousel-button,amp-carousel.i-amphtml-carousel-has-controls .amp-carousel-button,amp-carousel[controls] .amp-carousel-button{opacity:1;visibility:visible}.amp-carousel-button-prev{left:16px;background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="%23fff"><path d="M15 8.25H5.87l4.19-4.19L9 3 3 9l6 6 1.06-1.06-4.19-4.19H15v-1.5z"/></svg>\');background-size:18px 18px}.amp-carousel-button-next{right:16px;background-image:url(\'data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="%23fff"><path d="M9 3 7.94 4.06l4.19 4.19H3v1.5h9.13l-4.19 4.19L9 15l6-6z"/></svg>\');background-size:18px 18px}.i-amphtml-carousel-button-start-hint .amp-carousel-button:not(.amp-disabled){animation:i-amphtml-carousel-hint 1s ease-in 3s 1 normal both}.amp-mode-mouse .i-amphtml-carousel-button-start-hint .amp-carousel-button:not(.amp-disabled){animation:none}@keyframes i-amphtml-carousel-hint{0%{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}amp-carousel .amp-carousel-button.amp-disabled{animation:none;clip:rect(0 0 0 0);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;overflow:hidden;position:absolute;white-space:nowrap;width:1px}amp-carousel[i-amphtml-carousel-hide-buttons] .amp-carousel-button-next,amp-carousel[i-amphtml-carousel-hide-buttons] .amp-carousel-button-prev{opacity:0;pointer-events:none;visibility:visible!important}.i-amphtml-slides-container{display:-ms-flexbox!important;display:flex!important;-ms-flex-wrap:nowrap;flex-wrap:nowrap;height:100%!important;left:0;overflow-x:auto!important;overflow-y:hidden!important;position:absolute!important;top:0;width:100%!important;scroll-snap-type:x mandatory!important;scrollbar-width:none;padding-bottom:20px!important;box-sizing:content-box!important;-webkit-overflow-scrolling:touch!important}.i-amphtml-slides-container::-webkit-scrollbar{display:none!important}.i-amphtml-slides-container.i-amphtml-no-scroll{overflow-x:hidden!important}.i-amphtml-slide-item{-ms-flex-align:center!important;align-items:center!important;display:none!important;-ms-flex:0 0 100%!important;flex:0 0 100%!important;height:100%!important;-ms-flex-pack:center!important;justify-content:center!important;position:relative!important;scroll-snap-align:start!important;width:100%!important}.i-amphtml-slide-item>*{height:100%;width:100%;overflow:hidden!important}.i-amphtml-slide-item-show{display:-ms-flexbox!important;display:flex!important}.i-amphtml-carousel-end-marker,.i-amphtml-carousel-start-marker{background-color:transparent!important;display:block!important;-ms-flex:0 0 1px!important;flex:0 0 1px!important;height:100%!important;position:relative!important;scroll-snap-align:start!important;width:1px!important}.i-amphtml-carousel-start-marker{-ms-flex-order:-1!important;order:-1!important;margin-left:-1px!important}.i-amphtml-carousel-end-marker{-ms-flex-order:100000000!important;order:100000000!important;margin-right:-1px!important}.i-amphtml-slidescroll-no-snap.i-amphtml-slides-container{scroll-snap-type:none!important}.i-amphtml-slidescroll-no-snap .i-amphtml-slide-item{scroll-snap-align:none!important}.i-amphtml-slidescroll-no-snap.i-amphtml-slides-container.i-amphtml-no-scroll{-webkit-overflow-scrolling:auto!important}.amp-scrollable-carousel-slide{display:inline-block!important;margin-left:8px}.amp-scrollable-carousel-slide:first-child{margin-left:0px}.i-amphtml-scrollable-carousel-container{white-space:nowrap!important;overflow-x:auto!important;overflow-y:hidden!important;-webkit-overflow-scrolling:touch!important}\n/*# sourceURL=/extensions/amp-carousel/0.1/amp-carousel.css*/')
        }();
        /*! https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
    }
});
//# sourceMappingURL=amp-carousel-0.1.js.map