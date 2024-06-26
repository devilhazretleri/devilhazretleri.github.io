(function() {
    function Lb(N) {
        var ra = 0;
        return function() {
            return ra < N.length ? {
                done: !1,
                value: N[ra++]
            } : {
                done: !0
            }
        }
    }
    var Kc = "function" == typeof Object.defineProperties ? Object.defineProperty : function(N, ra, ab) {
        N != Array.prototype && N != Object.prototype && (N[ra] = ab.value)
    }
    ;
    function xd(N) {
        N = ["object" == typeof globalThis && globalThis, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global, N];
        for (var ra = 0; ra < N.length; ++ra) {
            var ab = N[ra];
            if (ab && ab.Math == Math)
                return ab
        }
        throw Error("Cannot find global object");
    }
    var Ve = xd(this);
    function We() {
        We = function() {}
        ;
        Ve.Symbol || (Ve.Symbol = si)
    }
    function ti(N, ra) {
        this.Qb = N;
        Kc(this, "description", {
            configurable: !0,
            writable: !0,
            value: ra
        })
    }
    ti.prototype.toString = function() {
        return this.Qb
    }
    ;
    var si = function() {
        function N(ab) {
            if (this instanceof N)
                throw new TypeError("Symbol is not a constructor");
            return new ti("jscomp_symbol_" + (ab || "") + "_" + ra++,ab)
        }
        var ra = 0;
        return N
    }();
    function ui() {
        We();
        var N = Ve.Symbol.iterator;
        N || (N = Ve.Symbol.iterator = Ve.Symbol("Symbol.iterator"));
        "function" != typeof Array.prototype[N] && Kc(Array.prototype, N, {
            configurable: !0,
            writable: !0,
            value: function() {
                return vi(Lb(this))
            }
        });
        ui = function() {}
    }
    function vi(N) {
        ui();
        N = {
            next: N
        };
        N[Ve.Symbol.iterator] = function() {
            return this
        }
        ;
        return N
    }
    try {
        (function(N) {
            function ra(a, c) {
                if (!c)
                    return !1;
                var b = J(a);
                return (new RegExp(c)).test("" + b.pathname + b.hash + b.search)
            }
            function ab(a, c) {
                return Ba(a, c, function(b) {
                    b = n(b, "settings.dr");
                    return wi(a, b)
                })
            }
            function xi(a, c, b, d, e) {
                b = yd(a, a.document.body, b);
                d = yd(a, a.document.body, d);
                V(e.target, [b, d]) && zd(a, c)
            }
            function Xe(a, c, b, d) {
                (b = yi(a, d, b)) && zd(a, c, b)
            }
            function Ye(a, c) {
                var b = Ze(a, c);
                return zi(a, b)
            }
            function Ze(a, c) {
                var b = yd(a, a.document.body, c);
                return b ? Ai(a, b) : ""
            }
            function zd(a, c, b) {
                (c = Ca(a, c)) && c.params(Ad(["__ym", "dr", b || q($e, af)(a)]))
            }
            function yd(a, c, b) {
                var d = null;
                try {
                    if (b) {
                        var e = Bd(b, a, c);
                        var f = e && e.length ? e[0] : null
                    } else
                        f = d;
                    d = f
                } catch (g) {}
                return d
            }
            function bf(a, c, b) {
                try {
                    var d = ya(a.atob(c));
                    return K(function(e) {
                        e = e.charCodeAt(0).toString(2);
                        return cf("0", 8 - e.length) + e
                    }, d).join(b)
                } catch (e) {
                    return ""
                }
            }
            function $e(a) {
                return Ta(a, 10, 99)
            }
            function Ai(a, c) {
                if (!c)
                    return "";
                var b = []
                  , d = n(a, "document");
                df(a, c, function(e) {
                    e.nodeType === d.TEXT_NODE && e.textContent ? b.push(e.textContent.trim()) : e instanceof HTMLImageElement && e.alt && b.push(e.alt.trim())
                });
                return 0 === b.length ? "" : b.join(" ")
            }
            function Bi(a, c, b, d) {
                d = n(d, "target");
                (d = Lc("button,input", a, d)) && "submit" === d.type && (d = ef(a, d)) && (b.push(d),
                sa(a, H([!1, a, c, b, d], ff), 300))
            }
            function ff(a, c, b, d, e) {
                var f = pb(c)(e, d)
                  , g = -1 !== f;
                if (a || g)
                    g && d.splice(f, 1),
                    a = gf(c, e),
                    a = "?" + gc(a),
                    d = H([c, b, "Form goal. Counter " + b.id + ". Form: " + a + "."], hf),
                    Cd(c, b, "form", d)(a)
            }
            function hf(a, c, b) {
                return Ci(a, c).then(function(d) {
                    d && qb(a, c, b)()
                })
            }
            function Di(a) {
                a = hb(a);
                if (!a)
                    return "";
                a = a("video");
                try {
                    var c = ka("canPlayType", a)
                      , b = C("x", K(c, jf))
                      , d = C("x", yb(function(e) {
                        return K(q(L, ka("concat", e + "; codecs="), c), Ei)
                    }, jf));
                    return b + "x" + d
                } catch (e) {
                    return "canPlayType"
                }
            }
            function Fi(a) {
                var c = n(a, "speechSynthesis.getVoices");
                if (!c)
                    return "";
                a = E(c, a.speechSynthesis);
                return C("x", yb(function(b) {
                    return K(w(b, n), Gi)
                }, a()))
            }
            function Hi(a) {
                var c = Dd("navigator.", Ii, a);
                try {
                    var b = n(a, "navigator.getGamepads");
                    var d = Na(b, "getGamepads") && a.navigator.getGamepads() || []
                } catch (e) {
                    d = []
                }
                return c + "x" + Mb(d)
            }
            function Ji(a) {
                a = hb(a)("canvas");
                var c = n(a, "getContext");
                if (!c)
                    return "";
                try {
                    var b = E(c, a)("2d");
                    b.font = "72px mmmmmmmmmmlli";
                    a = [];
                    var d = b.measureText("mmmmmmmmmmlli").width;
                    c = void 0;
                    for (var e = 0; e < kf.length; e += 1)
                        b.font = "72px " + kf[e],
                        c = b.measureText("mmmmmmmmmmlli").width,
                        a.push("" + (d === c));
                    return C("x", a)
                } catch (f) {
                    return ""
                }
            }
            function Ki(a) {
                var c = n(a, "matchMedia");
                if (!c || !Z("matchMedia", c))
                    return "";
                var b = ka("matchMedia", a);
                return C("x", K(function(d) {
                    return Dd("", ["matches", "media"], b("(" + d + ")"))
                }, Li))
            }
            function Mi() {
                return {
                    jc: Ni,
                    nc: Oi
                }
            }
            function Oi(a, c) {
                var b = c.bc;
                if (!Pi(a, b))
                    return "";
                var d = []
                  , e = b.createBuffer();
                if (!e || !b.getParameter || !Z("getParameter", b.getParameter))
                    return "";
                b.bindBuffer(b.ARRAY_BUFFER, e);
                var f = new a.Float32Array(Qi);
                b.bufferData(b.ARRAY_BUFFER, f, b.STATIC_DRAW);
                e.vc = 3;
                e.Ac = 3;
                f = b.createProgram();
                var g = b.createShader(b.VERTEX_SHADER);
                b.shaderSource(g, "attribute vec2 attrVertex;varying vec2 varyinTexCoordinate;uniform vec2 uniformOffset;void main(){varyinTexCoordinate=attrVertex+uniformOffset;gl_Position=vec4(attrVertex,0,1);}");
                b.compileShader(g);
                b.attachShader(f, g);
                g = b.createShader(b.FRAGMENT_SHADER);
                b.shaderSource(g, "precision mediump float;varying vec2 varyinTexCoordinate;void main() {gl_FragColor=vec4(varyinTexCoordinate,0,1);}");
                b.compileShader(g);
                b.attachShader(f, g);
                b.linkProgram(f);
                b.useProgram(f);
                f.Tc = b.getAttribLocation(f, "attrVertex");
                f.Cc = b.getUniformLocation(f, "uniformOffset");
                b.enableVertexAttribArray(f.yd);
                b.vertexAttribPointer(f.Tc, e.vc, b.FLOAT, !1, 0, 0);
                b.uniform2f(f.Cc, 1, 1);
                b.drawArrays(b.TRIANGLE_STRIP, 0, e.Ac);
                e = b.canvas;
                null != e && d.push(Ri(e));
                e = {
                    hd: C(";", Si(b)),
                    "webgl aliased line width range": Ed(b.getParameter(b.ALIASED_LINE_WIDTH_RANGE), b),
                    "webgl aliased point size range": Ed(b.getParameter(b.ALIASED_POINT_SIZE_RANGE), b),
                    "webgl alpha bits": b.getParameter(b.ALPHA_BITS),
                    "webgl antialiasing": b.getContextAttributes().antialias ? "yes" : "no",
                    "webgl blue bits": b.getParameter(b.BLUE_BITS),
                    "webgl depth bits": b.getParameter(b.DEPTH_BITS),
                    "webgl green bits": b.getParameter(b.GREEN_BITS),
                    "webgl max anisotropy": Ti(b),
                    "webgl max combined texture image units": b.getParameter(b.MAX_COMBINED_TEXTURE_IMAGE_UNITS),
                    "webgl max cube map texture size": b.getParameter(b.MAX_CUBE_MAP_TEXTURE_SIZE),
                    "webgl max fragment uniform vectors": b.getParameter(b.MAX_FRAGMENT_UNIFORM_VECTORS),
                    "webgl max render buffer size": b.getParameter(b.MAX_RENDERBUFFER_SIZE),
                    "webgl max texture image units": b.getParameter(b.MAX_TEXTURE_IMAGE_UNITS),
                    "webgl max texture size": b.getParameter(b.MAX_TEXTURE_SIZE),
                    "webgl max varying vectors": b.getParameter(b.MAX_VARYING_VECTORS),
                    "webgl max vertex attribs": b.getParameter(b.MAX_VERTEX_ATTRIBS),
                    "webgl max vertex texture image units": b.getParameter(b.MAX_VERTEX_TEXTURE_IMAGE_UNITS),
                    "webgl max vertex uniform vectors": b.getParameter(b.MAX_VERTEX_UNIFORM_VECTORS),
                    "webgl max viewport dims": Ed(b.getParameter(b.MAX_VIEWPORT_DIMS), b),
                    "webgl red bits": b.getParameter(b.RED_BITS),
                    "webgl renderer": b.getParameter(b.RENDERER),
                    "webgl shading language version": b.getParameter(b.SHADING_LANGUAGE_VERSION),
                    "webgl stencil bits": b.getParameter(b.STENCIL_BITS),
                    "webgl vendor": b.getParameter(b.VENDOR),
                    "webgl version": b.getParameter(b.VERSION)
                };
                Fd(d, e, ": ");
                try {
                    var h = b.getExtension("WEBGL_debug_renderer_info");
                    h && Fd(d, {
                        "webgl unmasked vendor": b.getParameter(h.UNMASKED_VENDOR_WEBGL),
                        "webgl unmasked renderer": b.getParameter(h.UNMASKED_RENDERER_WEBGL)
                    })
                } catch (k) {}
                if (!b.getShaderPrecisionFormat)
                    return C("~", d);
                b = Q(function(k, l) {
                    var m = l[0]
                      , p = l[1];
                    k[m + " precision"] = n(p, "precision") || "n";
                    k[m + " precision rangeMin"] = n(p, "rangeMin") || "n";
                    k[m + " precision rangeMax"] = n(p, "rangeMax") || "n";
                    return k
                }, {}, [["webgl vertex shader high float", b.getShaderPrecisionFormat(b.VERTEX_SHADER, b.HIGH_FLOAT)], ["webgl vertex shader medium", b.getShaderPrecisionFormat(b.VERTEX_SHADER, b.MEDIUM_FLOAT)], ["webgl vertex shader low float", b.getShaderPrecisionFormat(b.VERTEX_SHADER, b.LOW_FLOAT)], ["webgl fragment shader high float", b.getShaderPrecisionFormat(b.FRAGMENT_SHADER, b.HIGH_FLOAT)], ["webgl fragment shader medium float", b.getShaderPrecisionFormat(b.FRAGMENT_SHADER, b.MEDIUM_FLOAT)], ["webgl fragment shader low float", b.getShaderPrecisionFormat(b.FRAGMENT_SHADER, b.LOW_FLOAT)], ["webgl vertex shader high int", b.getShaderPrecisionFormat(b.VERTEX_SHADER, b.HIGH_INT)], ["webgl vertex shader medium int", b.getShaderPrecisionFormat(b.VERTEX_SHADER, b.MEDIUM_INT)], ["webgl vertex shader low int", b.getShaderPrecisionFormat(b.VERTEX_SHADER, b.LOW_INT)], ["webgl fragment shader high int", b.getShaderPrecisionFormat(b.FRAGMENT_SHADER, b.HIGH_INT)], ["webgl fragment shader medium int", b.getShaderPrecisionFormat(b.FRAGMENT_SHADER, b.MEDIUM_INT)], ["webgl fragment shader low int precision", b.getShaderPrecisionFormat(b.FRAGMENT_SHADER, b.LOW_INT)]]);
                Fd(d, b);
                return C("~", d)
            }
            function Pi(a, c) {
                if (!W(a.Float32Array))
                    return !1;
                var b = n(c, "canvas");
                if (!b || !Z("toDataUrl", b.toDataURL))
                    return !1;
                try {
                    c.createBuffer()
                } catch (d) {
                    return !1
                }
                return !0
            }
            function Si(a) {
                try {
                    return Na(a.getSupportedExtensions, "getSupportedExtensions") ? a.getSupportedExtensions() || [] : []
                } catch (c) {
                    return []
                }
            }
            function Fd(a, c, b) {
                void 0 === b && (b = ":");
                return I(function(d) {
                    return a.push("" + d[0] + b + d[1])
                }, Ua(c))
            }
            function Ti(a) {
                var c = a.getExtension("EXT_texture_filter_anisotropic") || a.getExtension("WEBKIT_EXT_texture_filter_anisotropic") || a.getExtension("MOZ_EXT_texture_filter_anisotropic");
                if (c) {
                    var b = a.getParameter(c.MAX_TEXTURE_MAX_ANISOTROPY_EXT);
                    0 === b && (b = 2)
                }
                return c ? b : null
            }
            function Ed(a, c) {
                c.clearColor(0, 0, 0, 1);
                c.enable(c.DEPTH_TEST);
                c.depthFunc(c.LEQUAL);
                c.clear(c.COLOR_BUFFER_BIT | c.DEPTH_BUFFER_BIT);
                return "[" + n(a, "0") + ", " + n(a, "1") + "]"
            }
            function Ui(a) {
                return function(c) {
                    var b = hb(c);
                    if (!b)
                        return "";
                    b = b("canvas");
                    var d = []
                      , e = a()
                      , f = e.nc;
                    e = e.jc;
                    try {
                        var g = ka("getContext", b);
                        d = K(q(L, g), e)
                    } catch (h) {
                        return ""
                    }
                    return (g = zb(L, d)) ? f(c, {
                        canvas: b,
                        bc: g
                    }) : ""
                }
            }
            function Vi(a) {
                function c(b) {
                    return C(",", [b.description, b.suffixes, b.type])
                }
                a = n(a, "navigator.plugins") || [];
                return Mb(a) ? q(ya, Nb(Boolean), lf(function(b, d) {
                    return b.name > d.name ? 1 : 2
                }), Oa(function(b) {
                    var d = Mb(b) ? b : [];
                    return C(",", [b.name, b.description, q(ya, Nb(Boolean), Oa(c), Ob(","))(d)])
                }), Ob(","))(a) : ""
            }
            function Wi(a) {
                var c = n(a, "ApplePaySession")
                  , b = J(a).protocol;
                return !c || "https:" !== b || Pb(a) ? "" : Q(function(d, e, f) {
                    e = "" + (f + 1);
                    var g = c.supportsVersion;
                    return W(g) ? g.call(c, f + 1) ? d + e : d + "0" : d
                }, "", Xi(9)) + c.canMakePayments()
            }
            function Yi(a) {
                a = n(a, "navigator") || {};
                return a.doNotTrack || a.msDoNotTrack || "unknown"
            }
            function Zi(a) {
                var c = a.o
                  , b = bb(a.M);
                if (b) {
                    var d = Math.random();
                    a = {
                        x: b.scrollLeft,
                        y: b.scrollTop
                    };
                    if (b.Sa) {
                        if (d = Gd[b.Sa],
                        !d || 10 > Math.abs(a.x - d.x) && 10 > Math.abs(a.y - d.y))
                            return
                    } else {
                        for (; Gd[d]; )
                            d = Math.random();
                        b.Sa = d
                    }
                    Gd[b.Sa] = a;
                    if (b !== c.document) {
                        d = cb(c, b);
                        c = wa(c);
                        var e = [];
                        b = b[pa];
                        !b || 0 > b ? a = [] : (xa(e, 16),
                        y(e, c),
                        y(e, a.x),
                        y(e, a.y),
                        y(e, b),
                        a = e);
                        a = R(d, a)
                    } else
                        a = [];
                    return a
                }
            }
            function mf(a) {
                var c = a.o
                  , b = a.M;
                nf(a);
                if (b.touches && b.touches.length) {
                    var d = bb(b);
                    if (d && d !== c.document)
                        return R(cb(c, d), yb(function(e) {
                            return of(c, wa(c), "touch", d, [e.pageX, e.pageY], 0, 0)
                        }, ya(b.touches)))
                }
            }
            function $i(a) {
                var c = a.o;
                a = wa(c);
                var b = Hd(c)
                  , d = pf(c);
                c = [];
                var e = b[0];
                b = b[1];
                var f = d[0];
                d = d[1];
                xa(c, 28);
                y(c, a);
                y(c, e);
                y(c, b);
                y(c, f);
                y(c, d);
                return c
            }
            function qf(a) {
                var c = [];
                return Da(a.o, c, 13) ? [] : c
            }
            function aj(a) {
                var c = a.o;
                a = a.M;
                var b = bb(a);
                if (b) {
                    var d;
                    "wheel" === a.type ? d = 0 < a.deltaY ? 1 : 0 > a.deltaY ? 2 : 0 : "mousewheel" === a.type && a.wheelDelta && (d = 0 < a.wheelDelta ? 2 : 0 > a.wheelDelta ? 1 : 0);
                    if (d) {
                        var e = Mc(c, a);
                        a = cb(c, b);
                        c = wa(c);
                        e = [e.x, e.y];
                        b = b[pa];
                        if (!b || 0 > b)
                            b = [];
                        else {
                            var f = [];
                            xa(f, 31);
                            y(f, c);
                            y(f, b);
                            y(f, e[0]);
                            y(f, e[1]);
                            xa(f, 0);
                            xa(f, 0);
                            xa(f, d);
                            b = f
                        }
                        return R(a, b)
                    }
                }
            }
            function nf(a) {
                var c = a.o;
                a = Id(c);
                var b = Y(c)(U);
                if (!(10 > b - rf || 10 > Math.abs(a.x - Jd.x) && 10 > Math.abs(a.y - Jd.y)))
                    return rf = b,
                    Jd = a,
                    c = wa(c),
                    b = [],
                    xa(b, 3),
                    y(b, c),
                    y(b, a.x),
                    y(b, a.y),
                    b
            }
            function bj(a) {
                var c = a.o
                  , b = a.M
                  , d = Y(c)(U)
                  , e = d - sf;
                if (!(10 > e)) {
                    c = Mc(c, b);
                    b = Kd.x - c.x;
                    var f = Kd.y - c.y;
                    b = b * b + f * f;
                    if (!(0 >= b || 16 > b && 100 > e || 20 > e && 256 > b))
                        return sf = d,
                        Kd = c,
                        hc(a)
                }
            }
            function cj(a, c) {
                var b = a.document;
                if (V(b.readyState, ["interactive", "complete"]))
                    ic(a, c);
                else {
                    var d = qa(a)
                      , e = d.F
                      , f = d.Ea
                      , g = function() {
                        f(b, "DOMContentLoaded", g);
                        f(a, "load", g);
                        c()
                    };
                    e(b, "DOMContentLoaded", g);
                    e(a, "load", g)
                }
            }
            function dj(a, c) {
                var b = ej(a)
                  , d = da(a, "r", c)
                  , e = x(a, "rts.p");
                return Ba(a, c, E(Q, null, function(f, g) {
                    var h = {
                        id: g.dc,
                        K: g.K
                    };
                    h = d({
                        J: g.Fc,
                        D: la(g.ac),
                        C: g.H,
                        oa: g.oa
                    }, h, g.Ic)["catch"](e);
                    return f.then(w(h, L))
                }, G.resolve(""), b))["catch"](e)
            }
            function fj(a, c) {
                return Ld(a).then(function() {
                    var b = a.document.body;
                    Z("MutationObserver", a.MutationObserver) && (new MutationObserver(c.O)).observe(b, {
                        attributes: !0,
                        childList: !0,
                        subtree: !0
                    })
                })
            }
            function tf(a, c, b) {
                c = Qb(a, void 0, c);
                c = uf(a, c.b("phc_settings") || "");
                var d = n(c, "clientId")
                  , e = n(c, "orderId")
                  , f = n(c, "service_id")
                  , g = n(c, "phones") || [];
                return d && e && g ? gj(a).Ba(g).then(function(h) {
                    return hj(b, {
                        ga: d,
                        ia: e,
                        Hb: f
                    }, h.N, g, h.R)
                })["catch"](function() {}) : G.resolve()
            }
            function hj(a, c, b, d, e) {
                var f;
                c.ga && c.ia && (c.ga === a.ga && c.ia === a.ia || F(a, c, {
                    N: {},
                    Ma: !0
                }),
                0 < e && Ia(a.R, [e]),
                I(function(g) {
                    var h, k, l = g[0];
                    g = g[1];
                    var m = +(a.N[l] && a.N[l][g] ? a.N[l][g] : 0);
                    F(a.N, (h = {},
                    h[l] = (k = {},
                    k[g] = m,
                    k),
                    h))
                }, d),
                I(function(g) {
                    var h, k, l = g[0];
                    g = g[1];
                    var m = 1 + (a.N[l] ? a.N[l][g] : 0);
                    F(a.N, (h = {},
                    h[l] = (k = {},
                    k[g] = m,
                    k),
                    h))
                }, b),
                a.pb && (a.Ma || b.length) && ((c = Ca(a.o, a.fc)) && c.params("__ym", "phc", (f = {},
                f.clientId = a.ga,
                f.orderId = a.ia,
                f.service_id = a.Hb,
                f.phones = a.N,
                f.performance = a.R,
                f)),
                a.Ma = !1))
            }
            function ij(a, c) {
                var b = a.document.body;
                if (!b)
                    return [];
                var d = vf(c);
                return Q(function(e, f) {
                    var g = decodeURI(n(f, "href") || "");
                    if ("tel:" === g.slice(0, 4) && (g = (d.exec(g) || [])[0])) {
                        var h = Md(g);
                        X(c[h]) || e.push({
                            type: "href",
                            node: f,
                            from: h,
                            aa: wf(g, c[h].aa),
                            Nc: f.href
                        })
                    }
                    return e
                }, [], ya(b.querySelectorAll("a")))
            }
            function jj(a, c) {
                var b = a.document.body;
                if (!b)
                    return [];
                var d = []
                  , e = vf(c);
                df(a, b, function(f) {
                    var g;
                    f === b || (null === (g = f.parentNode) || void 0 === g ? 0 : g.nodeName) && "script" === f.parentNode.nodeName.toLowerCase() || (g = e.exec(f.textContent || ""),
                    I(function(h) {
                        var k = Md(h);
                        X(c[k]) || d.push({
                            type: "text",
                            node: f,
                            from: k,
                            aa: wf(h, c[k].aa),
                            Nc: f.textContent || ""
                        })
                    }, g || []))
                }, function(f) {
                    return e.test(f.textContent || "") ? 1 : 0
                }, a.NodeFilter.SHOW_TEXT);
                return d
            }
            function wf(a, c) {
                for (var b = [], d = a.split(""), e = c.split(""), f = 0, g = 0; g < a.length && !(f >= e.length); g += 1) {
                    var h = d[g];
                    "0" <= h && "9" >= h ? (b.push(e[f]),
                    f += 1) : b.push(d[g])
                }
                return C("", b) + c.slice(f + 1)
            }
            function xf(a) {
                return 11 === a.length && "7" === a[0] ? "8" + a.slice(1) : a
            }
            function yf(a) {
                return C("[^\\d<>]*", a.split(""))
            }
            function df(a, c, b, d, e) {
                function f(g) {
                    return W(d) ? d(g) ? a.NodeFilter.FILTER_ACCEPT : a.NodeFilter.FILTER_REJECT : a.NodeFilter.FILTER_ACCEPT
                }
                void 0 === e && (e = -1);
                if (W(b) && f(c) === a.NodeFilter.FILTER_ACCEPT && (b(c),
                !zf(c)))
                    for (c = a.document.createTreeWalker(c, e, d ? {
                        acceptNode: f
                    } : null, !1); c.nextNode() && !1 !== b(c.currentNode); )
                        ;
            }
            function Ld(a, c) {
                function b(e) {
                    n(c, d) ? e() : sa(a, w(e, b), 100)
                }
                void 0 === c && (c = a);
                var d = (c.nodeType ? "contentWindow." : "") + "document.body";
                return new G(b)
            }
            function kj(a, c) {
                return qa(a).F(a, "load", E(Nd, null, a, c, !0))
            }
            function Nd(a, c, b) {
                void 0 === b && (b = !1);
                c = Qb(a, void 0, c);
                c = Ab(a, decodeURIComponent(c.b("mp2_substs") || ""));
                a = Af(a);
                return c && 0 < c.length && a.Ba(c, b)
            }
            function lj(a, c, b) {
                if ("adv" === b.type)
                    return mj(a, b, c);
                var d = a.document.referrer;
                return jc(a, d || "").host === J(a).host ? !1 : ta(function(e) {
                    return (e = d.match(new RegExp(e,"i"))) && nj(b.params || [], e[1])
                }, b.patterns || [])
            }
            function nj(a, c) {
                if (!a.length)
                    return !0;
                var b = q(function(d) {
                    return (d || "").replace(/\+/g, "%20")
                }, Nc)(c);
                b = ea(b);
                return ta(q(Nc, b), a)
            }
            function mj(a, c, b) {
                function d(m) {
                    return Ja(new RegExp(m,"i"))
                }
                var e = jc(a, J(a).href)
                  , f = e.query
                  , g = e.hash;
                a = a.document.referrer;
                e = Od(f || "");
                f = oj(f || "", g || "");
                g = pj(e);
                var h = (b = b.kc) ? c.direct_orders : c.direct_camp
                  , k = c.ServiceNamePattern
                  , l = c.RefererPattern;
                k = ta(q(d, w(b && "direct.yandex.ru" || f.service || g.source), fa), k || []);
                c.yandex_direct || (k = k || ta(d(a), l || []));
                return (k = k || c.google_adwords && e.gclid) && h && h.length ? ta(q(af, ea("" + (b || f.campaign || g.campaign))), h) : k
            }
            function oj(a, c) {
                var b = ["service", "campaign", "ad", "source"]
                  , d = Od(a)._openstat;
                d || (d = zb(q(Od, P("_openstat")), c.replace("#", "").split("?") || []) || "");
                var e = "";
                return (e = -1 === d.indexOf(";") ? q(Pd, Bf, function(f) {
                    if (f) {
                        for (var g = "", h = 0; h < f.length; ) {
                            var k = f.charCodeAt(h);
                            if (128 > k)
                                g += String.fromCharCode(k),
                                h++;
                            else if (191 < k && 224 > k) {
                                var l = f.charCodeAt(h + 1);
                                g += String.fromCharCode((k & 31) << 6 | l & 63);
                                h += 2
                            } else
                                l = f.charCodeAt(h + 1),
                                g += String.fromCharCode((k & 15) << 12 | (l & 63) << 6 | f.charCodeAt(h + 2) & 63),
                                h += 3
                        }
                        f = g
                    }
                    return f
                })(d || "") : Nc(d)) ? Q(function(f, g, h) {
                    f[b[h]] = g;
                    return f
                }, {}, e.split(";")) : {}
            }
            function pj(a) {
                return Q(function(c, b) {
                    a["utm_" + b] && (c[b] = a["utm_" + b]);
                    return c
                }, {}, ["source", "medium", "campaign", "term", "content"])
            }
            function qj(a, c) {
                var b = c.substr(1)
                  , d = c[0]
                  , e = [];
                "#" === d ? (b = a.document.getElementById(b)) && e.push(b) : "." === d && (e = ya(a.document.getElementsByClassName(b)));
                return e
            }
            function rj(a, c) {
                try {
                    var b = c.origin
                } catch (d) {}
                b && ta(q(Ja, w(b), fa), [/^http:\/\/([\w\-.]+\.)?webvisor\.com\/?$/, /^https:\/\/([\w\-.]+\.)?metri[kc]a\.yandex\.(ru|ua|by|kz|com|com\.tr)\/?$/]) && (b = Ab(a, c.data),
                "appendremote" === n(b, "action") && sj(n(b, "resource") || "") && tj(a, c, b))
            }
            function uj(a, c) {
                var b = hb(a);
                if (b) {
                    b = b("div");
                    var d = Rb(a);
                    if (d) {
                        b.innerHTML = '<iframe name="RemoteIframe" allowtransparency="true" style="position: absolute; left: -999px; top: -999px; width: 1px; height: 1px;"></iframe>';
                        var e = b.firstChild;
                        e.onload = function() {
                            kc(e.contentWindow, {
                                src: c
                            })
                        }
                        ;
                        a._ym__remoteIframeEl = e;
                        d.appendChild(b);
                        b.removeChild(e);
                        var f = null;
                        b.attachShadow ? f = b.attachShadow({
                            mode: "open"
                        }) : b.createShadowRoot ? f = b.createShadowRoot() : b.webkitCreateShadowRoot && (f = b.webkitCreateShadowRoot());
                        f ? f.appendChild(e) : (d.appendChild(e),
                        a._ym__remoteIframeContainer = e)
                    }
                }
            }
            function gf(a, c, b) {
                return Cf(a, c, ["i", "n", "p"], void 0, b)
            }
            function vj(a) {
                var c = n(a, "ecommerce") || {};
                a = ma(ib(wj), Ka(c));
                a = Q(function(b, d) {
                    b[d] = c[d];
                    return b
                }, {}, a);
                return Ka(a).length ? a : void 0
            }
            function xj(a, c, b) {
                var d = !1
                  , e = "";
                if (!lc(c))
                    return Sb(b, "Ecommerce data should be an object"),
                    d;
                var f = c.goods;
                switch (a) {
                case "detail":
                case "add":
                case "remove":
                    Va(f) && f.length ? (d = Qd(function(g) {
                        return lc(g) && (Wa(g.id) || Rd(b, g.id) || Wa(g.name))
                    }, f)) || (e = "All items in 'goods' should be objects and contain 'id' or 'name' field") : e = "Ecommerce data should contain 'goods' non-empty array";
                    break;
                case "purchase":
                    Rd(b, c.id) || Wa(c.id) ? d = !0 : e = "Purchase object should contain string or number 'id' field"
                }
                Sb(b, e);
                return d
            }
            function Sd(a, c, b) {
                var d, e, f = c.purchase || c;
                c = Ka(f);
                var g = f[b];
                if (g) {
                    var h = (d = {},
                    d[a] = (e = {},
                    e.products = K(yj, g),
                    e),
                    d);
                    1 < c.length && (h[a].actionField = Q(function(k, l) {
                        if (l === b)
                            return k;
                        if ("currency" === l)
                            return h.currencyCode = f.currency,
                            k;
                        k[Td[l] || l] = f[l];
                        return k
                    }, {}, c));
                    return h
                }
            }
            function yj(a) {
                var c = {};
                I(function(b) {
                    var d = Td[b] || b;
                    -1 !== b.indexOf("item_category") ? (d = Td.item_category,
                    c[d] = c[d] ? c[d] + ("/" + a[b]) : a[b]) : c[d] = a[b]
                }, Ka(a));
                return c
            }
            function zj(a, c, b, d) {
                var e;
                if (a = Ca(a, b)) {
                    var f = d.data;
                    b = "" + b.id;
                    var g = d.sended || [];
                    d.sended || (d.sended = g);
                    V(b, g) || !a.params || d.counter && "" + d.counter !== b || (a.params(f),
                    g.push(b),
                    d.parent && c.Cb((e = {},
                    e.type = "params",
                    e.data = f,
                    e)))
                }
            }
            function Aj(a, c, b) {
                if (b && (b = Df(a, b),
                b = Ef(a, b))) {
                    b = "?" + gc(b);
                    var d = qb(a, c, "Button goal. Counter " + c.id + ". Button: " + b + ".");
                    Cd(a, c, "btn", d)(b)
                }
            }
            function Bj(a, c) {
                var b = Ea(a);
                if ("" !== b.b("cc"))
                    return 0;
                var d = w("cc", b.l);
                d(0);
                var e = Y(a)
                  , f = O(a);
                f = q(P(La({
                    Ca: 1
                }) + ".c"), mc(function(g) {
                    d(g + "&" + e(Xa))
                }), w("cc", f.l));
                da(a, "6", c)({}).then(f)["catch"](q(mc(function() {
                    var g = e(Xa);
                    b.l("cc", "&" + g)
                }), x(a, "cc")))
            }
            function Cj(a, c) {
                var b;
                a((b = {},
                b.clickmap = X(c) ? !0 : c,
                b))
            }
            function Dj(a, c, b, d, e) {
                function f() {
                    k && k.stop()
                }
                if (!c.sa)
                    return G.resolve(D);
                var g = da(a, "4", c)
                  , h = {
                    C: {
                        "wv-type": "0"
                    },
                    D: la()
                };
                b = new Ej(a,b,function(l, m, p) {
                    g && (m = "wv-data=" + Ff(l, !0),
                    g(F({}, h, {
                        J: m,
                        C: {
                            "wv-check": Oc(l),
                            "wv-type": "0"
                        }
                    }), c, p)["catch"](x(a, "m.n.m.s")))
                }
                );
                var k = Fj(a, b, d, e);
                return Ba(a, c, function(l) {
                    l && O(a).l("isEU", n(l, "settings.eu"));
                    if (!Ud(a) && k) {
                        var m = Bb(a)
                          , p = m.b("visorc");
                        V(p, ["w", "b"]) || (p = "");
                        Gf(a) && Hf(a, nc, "visorc") && !Gj.test(jb(a) || "") || (p = "b");
                        l = n(l, "settings.webvisor.recp");
                        if (!a.isFinite(l) || 0 > l || 1 < l)
                            p = "w";
                        p || (p = O(a).b("hitId") % 1E4 / 1E4 < l ? "w" : "b");
                        m.l("visorc", p, 30);
                        "w" === p && k.start()
                    }
                    return f
                })
            }
            function Fj(a, c, b, d) {
                var e = a.document
                  , f = []
                  , g = qa(a)
                  , h = ":submit" + Math.random()
                  , k = []
                  , l = E(c.flush, c)
                  , m = B(function(t, z) {
                    x(a, "hfv." + t, function() {
                        try {
                            var u = z.type
                        } catch (M) {
                            return
                        }
                        u = -1 !== pb(a)(u, d);
                        c.push(z, {
                            type: t
                        });
                        u && l()
                    })()
                })
                  , p = x(a, "sfv", function() {
                    if (!Vd(a)) {
                        var t = b(a)
                          , z = Hj(a);
                        I(function(u) {
                            f.push(g.F(u.target, u.event, m(u.type)))
                        }, t);
                        I(function(u) {
                            f.push(g.F(u.target, u.event, x(a, "hff." + u.type + "." + u.event, function(M) {
                                I(q(w({
                                    o: a,
                                    M: M,
                                    flush: l
                                }), fa), u.G)
                            })))
                        }, z);
                        k = If(a, "form", e);
                        e.attachEvent && (t = If(a, "form *", e),
                        I(function(u) {
                            f.push(g.F(u, "submit", m("form")))
                        }, k),
                        I(function(u) {
                            Wd(u) && f.push(g.F(u, "change", m("formInput")))
                        }, t));
                        I(function(u) {
                            var M = u.submit;
                            if (W(M) || "object" === typeof M && Ij.test("" + M))
                                u[h] = M,
                                u.submit = x(a, "fv", function() {
                                    m("document", {
                                        target: u,
                                        type: "submit"
                                    });
                                    return u[h]()
                                })
                        }, k)
                    }
                })
                  , v = x(a, "ufv", function() {
                    I(fa, f);
                    I(function(t) {
                        t && (t.submit = t[h])
                    }, k);
                    c.flush()
                });
                return {
                    start: p,
                    stop: v
                }
            }
            function Jf(a, c) {
                var b = ma(function(e) {
                    return 0 < e.G.length
                }, c)
                  , d = Kf({
                    target: a.document,
                    type: "document"
                });
                return K(q(L, d, Jj(a)), b)
            }
            function Lf(a, c) {
                var b = a.o
                  , d = []
                  , e = c.form;
                if (!c[pa] && e) {
                    var f = e.elements;
                    e = e.length;
                    for (var g = 0; g < e; g += 1) {
                        var h = f[g];
                        Pc(h) && !h[pa] && Ia(d, cb(b, h))
                    }
                } else
                    Ia(d, cb(b, c));
                return d
            }
            function Xd(a) {
                if (oc) {
                    oc = !1;
                    var c = wa(a.o)
                      , b = [];
                    Da(a.o, b, 15) ? a = [] : (y(b, c),
                    a = b);
                    return a
                }
            }
            function Mf(a) {
                if (!oc) {
                    oc = !0;
                    a = wa(a.o);
                    var c = [];
                    xa(c, 14);
                    y(c, a);
                    return c
                }
            }
            function Kj(a, c, b) {
                var d = c[pa];
                if (d) {
                    a: {
                        var e = wa(a)
                          , f = c[pa];
                        if (0 < f) {
                            var g = [];
                            c = Yd(a, c);
                            var h = Cb[f]
                              , k = c[0] + "x" + c[1]
                              , l = c[2] + "x" + c[3];
                            if (k !== h.vb) {
                                h.vb = k;
                                if (Da(a, g, 9)) {
                                    a = [];
                                    break a
                                }
                                y(g, e);
                                y(g, f);
                                y(g, c[0]);
                                y(g, c[1])
                            }
                            if (l !== h.size) {
                                h.size = l;
                                if (Da(a, g, 10)) {
                                    a = [];
                                    break a
                                }
                                y(g, e);
                                y(g, f);
                                y(g, c[2]);
                                y(g, c[3])
                            }
                            if (g.length) {
                                a = g;
                                break a
                            }
                        }
                        a = []
                    }
                    Ia(b, a)
                }
                return d
            }
            function pc(a, c, b) {
                void 0 === b && (b = !1);
                if ("button" === c.getAttribute("type"))
                    return !1;
                var d = c && kb("ym-record-keys", c)
                  , e = Nf(c);
                a = Of(a, c) || b && e;
                return !d && a
            }
            function Of(a, c) {
                return Pf(a, c) || qc(a, c) ? !0 : Qf(a, c)
            }
            function Nf(a) {
                if (!a)
                    return !1;
                var c = a.placeholder;
                a = [a.className, a.id, a.name];
                return ta(Ja(Lj), a) || Mj.test(c)
            }
            function Rf(a, c) {
                return c && kb("(ym-disable-submit|-metrika-noform)", c)
            }
            function Qf(a, c) {
                if (Fa(c))
                    return !1;
                if (zf(c)) {
                    var b = c.parentNode;
                    return (Fa(b) ? 0 : 11 === b.nodeType) ? !1 : Qf(a, c.parentNode)
                }
                if (Nj.test(c.className))
                    return !0;
                b = Sf(a);
                if (!b)
                    return !1;
                var d = b.call(c, ".ym-hide-content *");
                return d && (Oj.test(c.className) || b.call(c, ".ym-hide-content .ym-show-content *")) ? !1 : d
            }
            function Pj(a, c, b, d, e) {
                var f;
                c = {
                    D: la(),
                    C: (f = {},
                    f["page-url"] = c,
                    f["pointer-click"] = b,
                    f)
                };
                d(c, e)["catch"](x(a, "c.s.c"))
            }
            function Qj(a, c, b, d, e) {
                if (rc(a, "ymDisabledClickmap") || Vd(a) || !c || !c.element)
                    return !1;
                a = za(c.element);
                if (e && !e(c.element, a) || V(c.button, [2, 3]) && "A" !== a || ta(ea(a), d))
                    return !1;
                d = c.element;
                if (c && b) {
                    if (50 > c.time - b.time)
                        return !1;
                    e = Math.abs(b.position.x - c.position.x);
                    a = Math.abs(b.position.y - c.position.y);
                    c = c.time - b.time;
                    if (b.element === d && 2 > e && 2 > a && 1E3 > c)
                        return !1
                }
                for (; d; ) {
                    if (Rj(d))
                        return !1;
                    d = d.parentElement
                }
                return !0
            }
            function Sj(a, c) {
                var b = null;
                try {
                    if (b = c.target || c.srcElement)
                        !b.ownerDocument && b.documentElement ? b = b.documentElement : b.ownerDocument !== a.document && (b = null)
                } catch (d) {}
                return b
            }
            function Tj(a) {
                var c = a.which;
                a = a.button;
                return c || void 0 === a ? c : 1 === a || 3 === a ? 1 : 2 === a ? 3 : 4 === a ? 2 : 0
            }
            function Mc(a, c) {
                var b = Rb(a)
                  , d = Id(a);
                return {
                    x: c.pageX || c.clientX + d.x - (b.clientLeft || 0) || 0,
                    y: c.pageY || c.clientY + d.y - (b.clientTop || 0) || 0
                }
            }
            function Uj(a) {
                var c = x(a, "i.clch", Vj);
                qa(a).F(a.document, "click", E(c, null, a), {
                    passive: !1
                });
                return function(b) {
                    var d = na.ba
                      , e = a.Ya[na.Ga]
                      , f = !!e._informer;
                    e._informer = F({
                        domain: "informer.yandex.ru"
                    }, b);
                    f || kc(a, {
                        src: d + "//informer.yandex.ru/metrika/informer.js"
                    })
                }
            }
            function Wj(a, c, b, d, e) {
                var f = e(U);
                return Xj(a, b, c).then(function(g) {
                    if (!g)
                        return Db(db("ds.h"));
                    var h = g.Ca
                      , k = g.host;
                    if (n(h, "settings"))
                        return Db(db("ds.e"));
                    d.l("ds", e(Xa));
                    g = e(U) - f;
                    k = k.port;
                    var l, m;
                    h = la((l = {},
                    l.di = h,
                    l.dit = g,
                    l.dip = k,
                    l));
                    l = (m = {},
                    m["page-url"] = J(a).href,
                    m);
                    return da(a, "S", Tf)({
                        D: h,
                        C: l
                    }, Tf)
                })["catch"](function(g) {
                    d.l("ds", e(Xa) - 60 + 15);
                    Uf(a, "d.s", g)
                })
            }
            function Yj(a, c, b, d, e) {
                return new G(function(f, g) {
                    var h = O(a);
                    if (h.b("dSync", !1))
                        return g();
                    h.l("dSync", !0);
                    h = d.b("ds", 0);
                    h = parseInt("" + h, 10);
                    return 60 >= c(Xa) - h || !ea(b.K, "0") ? g() : Zj(a) ? f(void 0) : Vf(e) ? g() : f(Wf(a, b))
                }
                )
            }
            function Xj(a, c, b) {
                var d = da(a, "s", c);
                return G.all(K(function(e) {
                    return d(ak, K(function(f) {
                        return f.host + ":" + f.port + "/p"
                    }, e), {
                        Pb: !1,
                        Kc: !0
                    }).then(function(f) {
                        return F({}, f, {
                            host: e[f.Rc]
                        })
                    }, w(!1, L))
                }, b)).then(w(Boolean, zb))
            }
            function bk(a, c, b) {
                var d = c || {}
                  , e = da(a, "u", b)
                  , f = Ea(a);
                return {
                    b: function(g, h) {
                        return X(d[g]) ? f.b(g, h) : d[g]
                    },
                    l: function(g, h) {
                        var k, l = "" + h;
                        d[g] = l;
                        f.l(g, l);
                        return e({
                            C: (k = {},
                            k.key = g,
                            k.value = l,
                            k)
                        }, [na.ba + "//mc.yandex.ru/user_storage_set"], {})["catch"](x(a, "u.d.s.s"))
                    }
                }
            }
            function ck(a, c) {
                if (a.Qc()) {
                    var b = null;
                    try {
                        b = c.target || c.srcElement
                    } catch (z) {}
                    if (b) {
                        3 === b.nodeType && (b = b.parentNode);
                        for (var d = b && b.nodeName && ("" + b.nodeName).toLowerCase(); n(b, "parentNode.nodeName") && ("a" !== d && "area" !== d || !b.href && !b.getAttribute("xlink:href")); )
                            d = (b = b.parentNode) && b.nodeName && ("" + b.nodeName).toLowerCase();
                        var e = b.href ? b : null
                    } else
                        e = null;
                    if (e && !kb("ym-disable-tracklink", e)) {
                        var f = a.o
                          , g = a.globalStorage;
                        b = a.ec;
                        var h = a.hc
                          , k = a.tc
                          , l = a.sender
                          , m = a.oc
                          , p = h.xa
                          , v = e.href;
                        d = Eb(e && e.innerHTML && e.innerHTML.replace(/<\/?[^>]+>/gi, ""));
                        d = v === d ? "" : d;
                        if (kb("ym-external-link", e))
                            Qc(f, h, {
                                url: v,
                                Pa: !0,
                                title: d,
                                sender: l
                            });
                        else {
                            p = p ? jc(f, p).hostname : J(f).hostname;
                            m = RegExp("\\.(" + C("|", K(dk, m)) + ")$", "i");
                            var t = e.protocol + "//" + e.hostname + e.pathname;
                            m = Xf.test(t) || Xf.test(v) || m.test(v) || m.test(t);
                            e = e.hostname;
                            Yf(p) === Yf(e) ? m ? Qc(f, h, {
                                url: v,
                                Oa: !0,
                                title: d,
                                sender: l
                            }) : ((k = (f = g.b("pai", D)()) && f + "-" + k) && b.l("pai", k),
                            d && b.l("il", Eb(d).slice(0, 100))) : v && ek.test(v) || Qc(f, h, {
                                url: v,
                                za: !0,
                                Pa: !0,
                                Oa: m,
                                title: d,
                                sender: l
                            })
                        }
                    }
                }
            }
            function Qc(a, c, b, d) {
                var e, f = la();
                b.Oa && f.l("dl", "1");
                b.Pa && f.l("ln", "1");
                f = {
                    D: f,
                    title: b.title,
                    za: !!b.za,
                    H: b.H,
                    C: (e = {},
                    e["page-url"] = b.url,
                    e["page-ref"] = c.xa || J(a).href,
                    e)
                };
                b.sender(f, c).then(d || D)["catch"](x(a, "cl.p.s")).then(H([a, E(b.ca || D, b.o)], rb))
            }
            function fk(a, c) {
                var b, d, e = (b = {},
                b.string = !0,
                b.object = !0,
                b["boolean"] = c,
                b)[typeof c] || !1;
                a((d = {},
                d.trackLinks = e,
                d))
            }
            function Rc(a, c) {
                return q(Zf(c), Zd(a))
            }
            function sc(a, c) {
                return q(gk(c), Zd(a))
            }
            function Zd(a) {
                a = O(a);
                var c = a.b("dsjf") || eb({});
                a.qa("dsjf", c);
                return c
            }
            function qb(a, c, b, d) {
                return $f(c) ? D : w(H(R([a], d ? [b + ". Params:", d] : [b]), Sb), fa)
            }
            function Sb() {
                var a = ha(arguments)
                  , c = a.slice(1);
                ag(a[0]).log.apply(Sb, c)
            }
            function hk(a, c, b) {
                var d;
                (d = oa[c]) || (d = ua);
                d = d.slice();
                d.unshift(ik);
                d.unshift(jk);
                return K(q(H([a, c, b]), fa), d)
            }
            function bg(a, c) {
                var b = J(a)
                  , d = b.href
                  , e = b.host
                  , f = -1;
                if (!Wa(c) || X(c))
                    return d;
                b = c.replace(cg, "");
                if (-1 !== b.search(kk))
                    return b;
                var g = b.charAt(0);
                if ("?" === g && (f = d.search(/\?/),
                -1 === f) || "#" === g && (f = d.search(/#/),
                -1 === f))
                    return d + b;
                if (-1 !== f)
                    return d.substr(0, f) + b;
                if ("/" === g) {
                    if (f = d.indexOf(e),
                    -1 !== f)
                        return d.substr(0, f + e.length) + b
                } else
                    return d = d.split("/"),
                    d[d.length - 1] = b,
                    C("/", d);
                return ""
            }
            function jk(a) {
                return {
                    L: function(c, b) {
                        Ud(a) || b()
                    }
                }
            }
            function Ud(a) {
                var c;
                return c = (c = !!O(a).b("oo")) || Vd(a)
            }
            function lk(a) {
                a = mk(a);
                return nk[a] || a
            }
            function ok(a) {
                a = dg(a);
                return pk[a] || "ru"
            }
            function Ca(a, c) {
                var b = O(a).b("counters", {})
                  , d = T(c);
                return b[d]
            }
            function ik(a, c, b) {
                return {
                    L: function(d, e) {
                        qk(a, d, b, e)
                    }
                }
            }
            function qk(a, c, b, d) {
                if (b.Uc)
                    d();
                else {
                    var e = $d(a)
                      , f = c.D
                      , g = Qb(a, "");
                    c = f ? q(function() {
                        var v = eg(e);
                        f.l("gdpr", "" + v + rk(v, g))
                    }, d) : d;
                    if (3 === b.id)
                        c();
                    else {
                        var h = O(a);
                        if (d = h.b("f1"))
                            d(c);
                        else if (d = (d = eg(e)) ? K(w(Sc, n), d.split(",")) : [],
                        fg(d))
                            c();
                        else {
                            var k = gg(a)
                              , l = J(a)
                              , m = k && (-1 !== l.href.indexOf("yagdprcheck=1") || g.b("yaGdprCheck"));
                            l = g.b("gdpr");
                            g.b("yandex_login") ? (d.push("13"),
                            g.l("gdpr", Tb, 525600)) : k ? V(l, sb) ? l === ae ? d.push("12") : d.push("3") : hg(a) || be(a) ? d.push("17") : sk(a) && d.push("28") : d.push("14");
                            var p = w(e, tk);
                            fg(d) ? (I(p, d),
                            c()) : (Tc.push(c),
                            h.l("f1", function(v, t) {
                                var z = 0;
                                if (t) {
                                    var u = tb(a, t) || "";
                                    z += u.length
                                }
                                Tc.push(v);
                                1E6 >= z && Tc.push(v)
                            }),
                            (0,
                            ce[0])(a).then(P("params.eu")).then(function(v) {
                                if (v || m) {
                                    g.l("gdpr_popup", ae);
                                    uk(a, b);
                                    if (Pb(a))
                                        return vk(a, p, b);
                                    var t = ig(a, e);
                                    if (t)
                                        return wk(a, p, t, b)
                                }
                                v || p("8");
                                return G.resolve({
                                    value: Tb,
                                    Qa: !0
                                })
                            }).then(function(v) {
                                g.ha("gdpr_popup");
                                if (v) {
                                    var t = v.value;
                                    v = v.Qa;
                                    V(t, sb) && g.l("gdpr", t, v ? void 0 : 525600)
                                }
                                t = jg(Tc, fa);
                                xk(a, t, 20)(yk(x(a, "gdr"), D));
                                h.l("f1", fa)
                            })["catch"](x(a, "gdp.a")))
                        }
                    }
                }
            }
            function vk(a, c, b) {
                var d = Uc(a, b);
                return new G(function(e) {
                    var f;
                    if (d) {
                        var g = d.W
                          , h = q(w("4", c), w(null, e))
                          , k = sa(a, h, 2E3, "gdp.f.t");
                        d.Cb((f = {},
                        f.type = "isYandex",
                        f)).then(function(l) {
                            l.isYandex ? (c("5"),
                            g.F(C(",", R(["GDPR-ok-view-default", "GDPR-ok-view-detailed"], de)), function(m) {
                                e({
                                    value: kg(m[1].type)
                                })
                            })) : (c("6"),
                            e(null))
                        })["catch"](h).then(H([a, k], fb))
                    } else
                        e({
                            value: ae,
                            Qa: !0
                        })
                }
                )
            }
            function uk(a, c) {
                var b = Uc(a, c);
                b && b.W.F("isYandex", function() {
                    var d;
                    return d = {
                        type: "isYandex"
                    },
                    d.isYandex = gg(a),
                    d
                });
                return b
            }
            function wk(a, c, b, d) {
                var e = zk(a, d.Vc)
                  , f = Uc(a, d);
                if (!f)
                    return G.resolve({
                        value: Tb,
                        Qa: !0
                    });
                var g = kc(a, {
                    src: "https://yastatic.net/s3/gdpr/popup/v2/" + e + ".js"
                });
                return new G(function(h, k) {
                    g ? (c("7"),
                    g.onerror = function() {
                        var l;
                        c("9");
                        f.Bb((l = {},
                        l.type = "GDPR-ok-view-default",
                        l));
                        h(null)
                    }
                    ,
                    g.onload = function() {
                        c("10");
                        b.F(C(",", R(["GDPR-ok-view-default", "GDPR-ok-view-detailed"], de)), function(l) {
                            var m;
                            l = l.type;
                            f.Bb((m = {},
                            m.type = l,
                            m));
                            h({
                                value: kg(l)
                            })
                        })
                    }
                    ) : (c("9"),
                    k(db("gdp.e")))
                }
                )
            }
            function zk(a, c) {
                var b = c || dg(a);
                return V(b, Ak) ? b : "en"
            }
            function lg(a, c) {
                var b = mg(a, c)
                  , d = []
                  , e = [];
                if (!b)
                    return null;
                var f = Bk(a, b.Va)
                  , g = Ck(f);
                b.W.F("initToParent", function(h) {
                    g(d, b.fa[h[1].counterId])
                }).F("parentConnect", function(h) {
                    g(e, b.ja[h[1].counterId])
                });
                return {
                    W: b.W,
                    wd: function(h, k) {
                        return new G(function(l, m) {
                            b.Va(h, k, function(p, v) {
                                l([p, v])
                            });
                            sa(a, w(db(), m), 5100, "is.o")
                        }
                        )
                    },
                    Bb: function(h) {
                        var k = {
                            Db: [],
                            ab: [],
                            data: h
                        };
                        d.push(k);
                        return f(b.fa, k, h)
                    },
                    Cb: function(h) {
                        var k = {
                            Db: [],
                            ab: [],
                            data: h
                        };
                        e.push(k);
                        return f(b.ja, k, h)
                    }
                }
            }
            function ee() {
                return function(a, c, b) {
                    return {
                        L: function(d, e) {
                            var f, g = d.D, h = d.C;
                            if (g && h) {
                                var k = V(h["wv-type"], Dk);
                                if (!h["wv-type"] || k) {
                                    var l = Y(a);
                                    g.Wa("rqnl", 1);
                                    g = g.o();
                                    for (var m = tc(a), p = 1; m[p]; )
                                        p += 1;
                                    d.oa = p;
                                    m[p] = (f = {},
                                    f.protocol = na.ba,
                                    f.host = "mc.yandex.ru",
                                    f.resource = k ? "webvisor" : "watch",
                                    f.postParams = d.J,
                                    f.time = l(U),
                                    f.counterType = b.K,
                                    f.params = h,
                                    f.browserInfo = g,
                                    f.counterId = b.id,
                                    f.ghid = Ub(a),
                                    f);
                                    fe(a)
                                }
                            }
                            e()
                        },
                        Z: function(d, e) {
                            ng(a, d);
                            e()
                        }
                    }
                }
            }
            function ng(a, c) {
                var b = tc(a);
                c.D && !lb(b) && (delete b[c.oa],
                fe(a))
            }
            function fe(a) {
                var c = tc(a);
                Ea(a).l("retryReqs", c)
            }
            function og(a, c, b) {
                var d = Vc(a, c, b);
                return function(e, f, g) {
                    var h = F({
                        D: la()
                    }, e);
                    h.C || (h.C = {});
                    var k = h.C;
                    k.wmode = "0";
                    k["wv-part"] = "" + g;
                    k["wv-hit"] = k["wv-hit"] || "" + Ub(a);
                    k["page-url"] = k["page-url"] || a.location.href;
                    e = k["wv-type"] ? G.resolve(k["wv-type"]) : Ek(a, f, h);
                    k.rn = k.rn || "" + Ta(a);
                    return e.then(function(l) {
                        var m;
                        k["wv-type"] = l;
                        l = "webvisor/" + f.id;
                        return d(F(h, {
                            C: k
                        }), l, {
                            ma: (m = {},
                            m["Content-Type"] = "text/plain",
                            m),
                            Ob: "POST"
                        })
                    })
                }
            }
            function Ek(a, c, b) {
                return Ba(a, c, function(d) {
                    var e = b.pd;
                    d = !!n(d, "settings.publisher.schema");
                    var f = "4"
                      , g = "2";
                    e && (f = "5",
                    g = "3");
                    e = !!b.D.b("bt");
                    return d && !e ? f : g
                })
            }
            function Fk(a, c, b, d) {
                c = d.b("cc");
                d = H(["cc", ""], d.l);
                if (c) {
                    var e = c.split("&");
                    c = e[0];
                    if ((e = (e = e[1]) && parseInt(e, 10)) && 1440 < Y(a)(Xa) - e)
                        return d();
                    b.l("cc", c)
                } else
                    ea(0, c) || d()
            }
            function Gk(a, c, b, d) {
                return Ba(a, c, function(e) {
                    if ("0" === n(e, "settings.pcs") && !Vb(a))
                        if (e = d.b("zzlc"),
                        X(e) || lb(e) || "na" === e) {
                            e = "ru";
                            var f = pg(a, 68)
                              , g = qg(a, 79);
                            if (f || g)
                                e = "md";
                            if (f = hb(a)) {
                                var h = f("iframe");
                                F(h.style, {
                                    display: "none",
                                    width: "1px",
                                    height: "1px",
                                    visibility: "hidden"
                                });
                                h.src = "https://mc.yandex." + e + Bf("L21ldHJpa2EvenpsYy5odG1s");
                                if (e = Rb(a)) {
                                    e.appendChild(h);
                                    var k = 0
                                      , l = qa(a).F(a, "message", x(a, "zz.m", function(m) {
                                        (m = n(m, "data")) && m.substr && "__ym__zz" === m.substr(0, 8) && (Wb(h),
                                        m = m.substr(8),
                                        d.l("zzlc", m),
                                        b.l("zzlc", m),
                                        l(),
                                        fb(a, k))
                                    }));
                                    k = sa(a, q(l, w(h, Wb)), 3E3)
                                }
                            }
                        } else
                            b.l("zzlc", e)
                })
            }
            function Hk(a, c, b, d, e, f, g, h) {
                var k = b.b(f);
                Fa(k) && (b.l(f, g),
                e(a, c, b, d),
                k = b.b(f, g));
                X(h) || h.Wa(f, "" + k);
                return k
            }
            function pg(a, c) {
                if (Wc(a) && c) {
                    var b = jb(a).match(Ik);
                    if (b && b.length)
                        return +b[1] >= c
                }
                return !1
            }
            function qg(a, c) {
                var b = jb(a);
                return b && (b = b.match(Jk)) && 1 < b.length ? parseInt(b[1], 10) >= c : !1
            }
            function Ba(a, c, b) {
                a = T(c);
                return rg()(Kk(a)).then(b)
            }
            function Lk(a, c, b) {
                var d, e = mg(a, c);
                if (e) {
                    e.W.F("gpu-get", function() {
                        var h;
                        return h = {},
                        h.type = "gpu-get",
                        h.pu = b.b("pu"),
                        h
                    });
                    var f = n(a, "opener");
                    if (f) {
                        var g = sa(a, H([a, c, b], sg), 200, "pu.m");
                        e.Va(f, (d = {},
                        d.type = "gpu-get",
                        d), function(h, k) {
                            var l = n(k, "pu");
                            l && (fb(a, g),
                            b.l("pu", l))
                        })
                    } else
                        sg(a, c, b)
                }
            }
            function sg(a, c, b) {
                var d = n(a, "location.host");
                a = ge(a, c);
                b.l("pu", "" + Xc(d) + a)
            }
            function Mk(a, c) {
                var b = Yc(a);
                c.F("initToParent", function(d) {
                    var e = d[1];
                    b.fa[e.counterId] = {
                        info: e,
                        window: d[0].source
                    }
                }).F("initToChild", function(d) {
                    var e = d[0];
                    d = d[1];
                    e.source === a.parent && c.O("parentConnect", [e, d])
                }).F("parentConnect", function(d) {
                    var e = d[1];
                    e.counterId && (b.ja[e.counterId] = {
                        info: e,
                        window: d[0].source
                    })
                })
            }
            function he(a, c, b) {
                return {
                    L: function(d, e) {
                        var f = d.D;
                        if (f && (!b || b.Ab)) {
                            var g = a.document.title;
                            d.title && (g = d.title);
                            var h = ub("getElementsByTagName", a.document);
                            "string" !== typeof g && h && (g = h("title"),
                            g = (g = n(g, "0.innerHtml")) ? g : "");
                            g = g.slice(0, na.Ub);
                            f.l("t", g)
                        }
                        e()
                    }
                }
            }
            function Fb(a) {
                void 0 === a && (a = Nk);
                return function(c, b, d) {
                    return {
                        L: function(e, f) {
                            var g = e.D
                              , h = e.C;
                            g && h && I(function(k) {
                                x(c, "bi:" + k, q(H([c, d, e], mb[k]), E(g.Wa, g, k)))()
                            }, a);
                            f()
                        }
                    }
                }
            }
            function Ub(a) {
                var c = O(a)
                  , b = c.b("hitId");
                b || (b = Ta(a),
                c.l("hitId", b));
                return b
            }
            function Ff(a, c) {
                void 0 === c && (c = !1);
                for (var b = a.length, d = b - b % 3, e = [], f = 0; f < d; f += 3) {
                    var g = (a[f] << 16) + (a[f + 1] << 8) + a[f + 2];
                    e.push.apply(e, ["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[g >> 18 & 63], "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[g >> 12 & 63], "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[g >> 6 & 63], "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[g & 63]])
                }
                switch (b - d) {
                case 1:
                    b = a[d] << 4;
                    e.push.apply(e, ["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[b >> 6 & 63], "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[b & 63], "=", "="]);
                    break;
                case 2:
                    b = (a[d] << 10) + (a[d + 1] << 2),
                    e.push.apply(e, ["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[b >> 12 & 63], "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[b >> 6 & 63], "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[b & 63], "="])
                }
                e = e.join("");
                return c ? Pd(e, !0) : e
            }
            function Bf(a, c) {
                void 0 === c && (c = !1);
                var b = a
                  , d = ""
                  , e = 0;
                if (!b)
                    return "";
                for (c && (b = Pd(b)); b.length % 4; )
                    b += "=";
                do {
                    var f = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(b.charAt(e++))
                      , g = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(b.charAt(e++))
                      , h = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(b.charAt(e++))
                      , k = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(b.charAt(e++));
                    if (0 > f || 0 > g || 0 > h || 0 > k)
                        return null;
                    var l = f << 18 | g << 12 | h << 6 | k;
                    f = l >> 16 & 255;
                    g = l >> 8 & 255;
                    l &= 255;
                    d = 64 === h ? d + String.fromCharCode(f) : 64 === k ? d + String.fromCharCode(f, g) : d + String.fromCharCode(f, g, l)
                } while (e < b.length);
                return d
            }
            function Pd(a, c) {
                void 0 === c && (c = !1);
                return a ? a.replace(c ? /[+/=]/g : /[-*_]/g, function(b) {
                    return Ok[b] || b
                }) : ""
            }
            function tg(a, c) {
                var b = a.length ? K(function(d, e) {
                    var f = c[e];
                    return f === d ? null : f
                }, a) : c;
                a.length = 0;
                I(q(L, ka("push", a)), c);
                return ma(ea(null), b).length === a.length ? null : b
            }
            function ug(a, c, b) {
                return K(function(d) {
                    var e = d[0]
                      , f = d[1];
                    if (W(e))
                        return e(a, c) || null;
                    if (W(f))
                        return null;
                    var g = !(!c[e] || !c[f]);
                    !g && 2 === d.length && (g = 0 === c[e] && 0 === c[f]) && (g = d[1],
                    g = !(vg[d[0]] || vg[g]));
                    return g ? (d = Math.round(c[e]) - Math.round(c[f]),
                    0 > d || 36E5 < d ? null : d) : 1 === d.length && c[e] ? Math.round(c[e]) : null
                }, b)
            }
            function uc(a, c, b) {
                return {
                    L: function(d, e) {
                        var f = wg(b)
                          , g = d.D;
                        g ? g.b("pv") && !g.b("ar") ? (f.lb = g,
                        e()) : (f = f.La,
                        !0 === f ? e() : f.push(e)) : e()
                    },
                    Z: function(d, e) {
                        var f = d.D
                          , g = d.Jc
                          , h = wg(b);
                        if (f) {
                            var k = h.La;
                            h.lb === f && !0 !== k && (g && O(a).l("isEU", n(g, "settings.eu")),
                            I(fa, k),
                            h.La = !0)
                        }
                        e()
                    }
                }
            }
            function ie(a) {
                return {
                    L: function(c, b) {
                        var d = a.document
                          , e = c.D;
                        if (e && je(a)) {
                            var f = qa(a);
                            f.F(d, "webkitvisibilitychange,visibilitychange", xg(a, f, b));
                            e.l("pr", "1")
                        } else
                            b()
                    }
                }
            }
            function Aa(a, c, b) {
                var d = Vc(a, c, b);
                return function(e, f) {
                    var g, h = F({
                        D: la()
                    }, e), k = h.C, l = h.D;
                    k = (g = {},
                    g["page-url"] = k && k["page-url"] || "",
                    g.charset = "utf-8",
                    g);
                    "0" !== f.K && (k["cnt-class"] = f.K);
                    g = F(h, {
                        C: F(h.C || {}, k)
                    });
                    h = "";
                    k = T(f);
                    yg(f)[k] && (h = Xc(ge(a, f)) + ".",
                    g.D && g.D.l("rt", 1));
                    F(g, {
                        mb: h
                    });
                    return d(g, "watch/" + f.id, {
                        fb: !(!l.b("pv") || l.b("ar") || l.b("wh"))
                    })
                }
            }
            function Vc(a, c, b) {
                var d = Xb(a, c);
                return function(e, f, g) {
                    void 0 === g && (g = {});
                    var h = Pk(a);
                    e.mb && (h = "" + e.mb + h);
                    f = [na.ba + "//" + (h || "mc.yandex.ru") + "/" + f];
                    return ke(a, b, e, !0).then(H([e, f, g], d)).then(function(k) {
                        e.Jc = k.Ca;
                        return ke(a, b, e).then(w(k.Ca, L))
                    })
                }
            }
            function Pk(a) {
                var c = "mc.yandex.ru"
                  , b = n(a, "document.referrer");
                if (!b)
                    return c;
                (a = jc(a, b).host.match(/(?:^|\.)(?:ya|yandex)\.(?:\w+|com?\.\w+)$/)) ? (a = a[0].split("yandex").reverse()[0].substring(1),
                a = V(a, zg) ? a : !1) : a = !1;
                return "mc.yandex." + (a || "ru")
            }
            function Qk(a, c) {
                return a && c ? Ag(a) === Ag(c) : a || c ? !1 : !0
            }
            function Ag(a) {
                return (a.split(":")[1] || "").replace(/^\/*/, "").replace(/^www\./, "").split("/")[0]
            }
            function ke(a, c, b, d) {
                void 0 === d && (d = !1);
                return new G(function(e, f) {
                    var g = q(gb, fa, e)
                      , h = jg(c.slice().concat([{
                        L: g,
                        Z: g
                    }]), function(k, l) {
                        var m = d ? k.L : k.Z;
                        if (m)
                            try {
                                m(b, l)
                            } catch (p) {
                                h(Rk),
                                f(p)
                            }
                        else
                            l()
                    });
                    h(le(a))
                }
                )
            }
            function ic(a, c, b) {
                var d = b || "as";
                if (a.postMessage && !a.attachEvent) {
                    b = qa(a);
                    var e = "__ym__promise_" + Ta(a) + "_" + Ta(a)
                      , f = D;
                    d = x(a, d, function(g) {
                        try {
                            var h = g.data
                        } catch (k) {
                            return
                        }
                        h === e && (f(),
                        g.stopPropagation && g.stopPropagation(),
                        c())
                    });
                    f = b.F(a, "message", d);
                    a.postMessage(e, "*")
                } else
                    sa(a, c, 0, d)
            }
            function xk(a, c, b, d) {
                function e(f, g) {
                    function h() {
                        try {
                            var l = c(Bg(a, b));
                            k = k.concat(l)
                        } catch (m) {
                            f(m)
                        }
                        c(Cg);
                        if (c(vc))
                            return g(k);
                        e.flush ? (c(Bg(a, 1E4)),
                        g(k)) : sa(a, h, d)
                    }
                    var k = [];
                    h()
                }
                void 0 === b && (b = 1);
                void 0 === d && (d = 200);
                return eb(e)
            }
            function Sk(a) {
                return eb(function(c, b) {
                    b(a)
                })
            }
            function jg(a, c) {
                void 0 === c && (c = L);
                return eb({
                    ya: a,
                    qb: c,
                    ra: !1,
                    X: 0
                })
            }
            function Tk(a) {
                vc(a) && Db(me("i"));
                var c = a.qb(a.ya[a.X]);
                a.X += 1;
                return c
            }
            function Cg(a) {
                a.ra = !1
            }
            function Uk(a) {
                a.ra = !0
            }
            function Rk(a) {
                a.X = a.ya.length
            }
            function vc(a) {
                return a.ra || a.ya.length <= a.X
            }
            function Xb(a, c) {
                return function(b, d, e) {
                    void 0 === e && (e = {});
                    return Dg(a, c, d, b, F(e, {
                        V: b.V || [],
                        J: e.J || b.J
                    }))
                }
            }
            function Dg(a, c, b, d, e, f, g) {
                var h;
                void 0 === f && (f = 0);
                void 0 === g && (g = 0);
                var k = F({}, e)
                  , l = c[g]
                  , m = l[0];
                l = l[1];
                var p = F({}, d.C)
                  , v = Y(a);
                d.D && (p["browser-info"] = la(d.D.o()).l("ti", m).l("st", v(Zc)).Eb());
                v = b[f];
                k.ma && k.ma["Content-Type"] || !k.J || (k.ma = F({}, k.ma, (h = {},
                h["Content-Type"] = "application/x-www-form-urlencoded",
                h)),
                k.J = "site-info=" + ne(k.J));
                k.Ob = k.J ? "POST" : "GET";
                k.na = p;
                k.V.push(m);
                return l("" + v + (d.xc ? "/1" : ""), k).then(function(t) {
                    return {
                        Ca: t,
                        Rc: f
                    }
                })["catch"](function(t) {
                    var z = g + 1 >= c.length
                      , u = f + 1 >= b.length;
                    z && u && Db(t);
                    return Dg(a, c, b, d, e, !u && z ? f + 1 : f, z ? 0 : g + 1)
                })
            }
            function Eg(a, c) {
                var b = c.Ra
                  , d = b || "uid";
                b = b ? a.location.hostname : void 0;
                var e = Bb(a)
                  , f = Ea(a)
                  , g = Y(a)
                  , h = g(Zc)
                  , k = Fg(a, c)
                  , l = k[0];
                k = k[1];
                var m = e.b("d");
                Gg(a, c);
                var p = !1;
                !k && l && (k = l,
                p = !0);
                if (!k)
                    k = C("", [g(Zc), Ta(a)]),
                    p = !0;
                else if (!m || 15768E3 < h - parseInt(m, 10))
                    p = !0;
                p && !c.da && (e.l(d, k, 525600, b),
                e.l("d", "" + h, 525600, b));
                f.l(d, k);
                return k
            }
            function Fg(a, c) {
                var b = Ea(a)
                  , d = Bb(a)
                  , e = c.Ra || "uid";
                return [b.b(e), d.b(e)]
            }
            function wa(a) {
                a = Y(a);
                return Math.round(a(Vk) / 50)
            }
            function Vk(a) {
                var c = a.R
                  , b = c[1];
                a = c[0] && b ? b() : U(a) - a.uc;
                return Math.round(a)
            }
            function Zc(a) {
                return Math.round(U(a) / 1E3)
            }
            function Xa(a) {
                return Math.floor(U(a) / 1E3 / 60)
            }
            function U(a) {
                var c = a.cb;
                return 0 !== c ? c : oe(a.o, a.R)
            }
            function Hg(a) {
                var c = qa(a)
                  , b = Ig(a)
                  , d = {
                    o: a,
                    cb: 0,
                    R: b,
                    uc: oe(a, b)
                }
                  , e = b[1];
                b[0] && e || c.F(a, "beforeunload,unload", function() {
                    0 === d.cb && (d.cb = oe(a, d.R))
                });
                return eb(d)
            }
            function Wk(a) {
                return (10 >= a ? "0" : "") + a
            }
            function oe(a, c) {
                var b = c || Ig(a)
                  , d = b[0];
                b = b[1];
                return !isNaN(d) && W(b) ? Math.round(b() + d) : a.Date.now ? a.Date.now() : (new a.Date).getTime()
            }
            function Ig(a) {
                a = pe(a);
                var c = n(a, "timing.navigationStart")
                  , b = n(a, "now");
                b && (b = E(b, a));
                return [c, b]
            }
            function pe(a) {
                return n(a, "performance") || n(a, "webkitPerformance")
            }
            function Jg(a, c, b) {
                void 0 === c && (c = "");
                void 0 === b && (b = "_ym");
                var d = "" + b + c + "_";
                return {
                    Na: Xk(a),
                    b: function(e, f) {
                        var g = Kg(a, "" + d + e);
                        return lb(g) && !X(f) ? f : g
                    },
                    l: function(e, f) {
                        Lg(a, "" + d + e, f);
                        return this
                    },
                    ha: function(e) {
                        Mg(a, "" + d + e);
                        return this
                    }
                }
            }
            function Lg(a, c, b) {
                var d = qe(a);
                a = tb(a, b);
                if (!lb(a))
                    try {
                        d.setItem(c, a)
                    } catch (e) {}
            }
            function Kg(a, c) {
                var b = qe(a);
                try {
                    return Ab(a, b.getItem(c))
                } catch (d) {}
                return null
            }
            function Mg(a, c) {
                var b = qe(a);
                try {
                    b.removeItem(c)
                } catch (d) {}
            }
            function qe(a) {
                try {
                    return a.localStorage
                } catch (c) {}
                return null
            }
            function Gf(a, c, b) {
                $c(a, "metrika_enabled", "1", 0, c, b);
                (b = nc(a, "metrika_enabled")) && $c(a, "metrika_enabled", "", -100, c, void 0);
                return !!b
            }
            function nc(a, c) {
                var b = null;
                try {
                    b = a.document.cookie
                } catch (d) {
                    return null
                }
                return (b = (new RegExp("(?:^|;\\s*)" + c + "=([^;]*)")).exec(b)) && 2 <= b.length ? decodeURIComponent(b[1]) : null
            }
            function Hf(a, c, b) {
                V(b, ["gdpr", "gdpr_popup", "metrika_enabled"]) ? a = !0 : (b = $d(a),
                b = Ng(b),
                a = c(a, "gdpr"),
                a = ma(ib(Yk), b).length ? !0 : V(a, [Tb, Zk]));
                return a
            }
            function kg(a) {
                if (V(a, ["GDPR-ok-view-default", "GDPR-ok-view-detailed"]))
                    return Tb;
                a = a.replace("GDPR-ok-view-detailed-", "");
                return V(a, sb) ? a : Tb
            }
            function ig(a, c, b) {
                void 0 === b && (b = L);
                var d = Og(a);
                b(d);
                var e = B($k)(d);
                Pg(a, c, function(f) {
                    f.F(e)
                });
                return d
            }
            function $k(a, c) {
                var b = n(c, "ymetrikaEvent");
                b && a.O(n(b, "type"), b)
            }
            function Pg(a, c, b) {
                void 0 === b && (b = D);
                var d = ad(a);
                if (c && W(c.push)) {
                    var e = c.push;
                    c.push = function() {
                        var f = ha(arguments)
                          , g = e.apply(c, f);
                        d.O(f[0]);
                        return g
                    }
                    ;
                    b(d);
                    I(d.O, c);
                    return d
                }
            }
            function $d(a) {
                a = O(a);
                var c = a.b("dataLayer", []);
                a.l("dataLayer", c);
                return c
            }
            function tk(a, c) {
                var b, d;
                a.push((b = {},
                b.ymetrikaEvent = (d = {},
                d.type = c,
                d),
                b))
            }
            function al(a, c, b) {
                function d() {
                    f = 0;
                    g && (g = !1,
                    f = sa(a, d, b),
                    e.O(h))
                }
                var e = ad(a), f, g = !1, h;
                c.F(function(k) {
                    g = !0;
                    h = k;
                    f || d();
                    return D
                });
                return e
            }
            function bl(a, c) {
                return a.clearInterval(c)
            }
            function cl(a, c, b, d) {
                return a.setInterval(x(a, "i.err." + (d || "def"), c), b)
            }
            function sa(a, c, b, d) {
                return bd(a, x(a, "d.err." + (d || "def"), c), b)
            }
            function Og(a) {
                var c = {};
                return {
                    F: function(b, d) {
                        I(function(e) {
                            n(c, e) || (c[e] = ad(a));
                            c[e].F(d)
                        }, b.split(","));
                        return this
                    },
                    tb: function(b, d) {
                        I(function(e) {
                            n(c, e) && c[e].tb(d)
                        }, b.split(","));
                        return this
                    },
                    O: function(b, d) {
                        return Q(function(e, f) {
                            return n(c, f) ? e.concat(x(a, "e." + f, c[f].O)(d)) : e
                        }, [], b.split(","))
                    }
                }
            }
            function ad(a) {
                var c = []
                  , b = {};
                b.qd = c;
                b.F = q(ka("push", c), w(b, L));
                b.tb = q(Gb(pb(a))(c), Gb(ka("splice", c))(1), w(b, L));
                b.O = q(L, Gb(fa), dl(c));
                return b
            }
            function A(a, c, b) {
                return function() {
                    return x(arguments[0], a, c, b).apply(this, arguments)
                }
            }
            function x(a, c, b, d, e) {
                var f = b || Db;
                return function() {
                    var g = d;
                    try {
                        g = f.apply(e || null, arguments)
                    } catch (h) {
                        Uf(a, c, h)
                    }
                    return g
                }
            }
            function Uf(a, c, b) {
                var d, e, f, g, h;
                if (!(.01 >= a.Math.random())) {
                    var k = "u.a.e"
                      , l = "";
                    b && ("object" === typeof b ? (k = b.message,
                    l = "string" === typeof b.stack && b.stack.replace(/\n/g, "\\n") || "n.s.e.s") : k = "" + b);
                    if (!el(k) && !ta(q(ka("indexOf", k), ea(-1), Yb), fl)) {
                        c = (d = {},
                        d.jserrs = (e = {},
                        e[na.ua] = (f = {},
                        f[k] = (g = {},
                        g[c] = (h = {},
                        h[a.location.href] = l,
                        h),
                        g),
                        f),
                        e),
                        d);
                        a: {
                            var m;
                            d = na.ba + "//mc.yandex.ru/watch/" + na.Rb;
                            try {
                                var p = re(a, "er")[0];
                                var v = void 0 === p ? [] : p;
                                var t = v[1];
                                var z = void 0 === t ? null : t
                            } catch (u) {
                                break a
                            }
                            p = (m = {},
                            m["browser-info"] = "ar:1:pv:1:v:" + na.ua + ":vf:" + wc.version,
                            m["page-url"] = a.location && "" + a.location.href,
                            m);
                            a = tb(a, c);
                            if (z && a)
                                z(d, {
                                    na: p,
                                    V: [],
                                    J: "site-info=" + ne(a)
                                })["catch"](D)
                        }
                    }
                }
            }
            function Hb(a) {
                return K(function(c) {
                    return !c || V(c, a) ? c : 0
                }, Ib)
            }
            function Qg(a) {
                var c = n(a, "navigator.sendBeacon");
                return c && Z("sendBeacon", c) && !be(a) ? gl(a, E(c, n(a, "navigator"))) : !1
            }
            function se(a) {
                return hb(a) ? hl(a) : !1
            }
            function la(a) {
                var c = a || {};
                return {
                    o: w(c, L),
                    b: function(b, d) {
                        var e = c[b];
                        return X(e) && !X(d) ? d : e
                    },
                    l: function(b, d) {
                        c[b] = d;
                        return this
                    },
                    Wa: function(b, d) {
                        return "" === d || Fa(d) ? this : this.l(b, d)
                    },
                    Eb: w(c, q(Ua, lf(function(b, d) {
                        return "t" === b[0] ? 1 : "t" === d[0] ? -1 : 0
                    }), xc(function(b, d) {
                        b.push(C(":", d));
                        return b
                    }, []), Ob(":")))
                }
            }
            function il(a, c) {
                try {
                    delete a[c]
                } catch (b) {
                    a[c] = void 0
                }
            }
            function Ta(a, c, b) {
                var d = X(b);
                X(c) && d ? (d = 1,
                c = 1073741824) : d ? d = 1 : (d = c,
                c = b);
                return a.Math.floor(a.Math.random() * (c - d)) + d
            }
            function Rd(a, c) {
                return a.isFinite(c) && !a.isNaN(c) && "[object Number]" === cd(c)
            }
            function yc(a) {
                var c = hb(a);
                return c ? jl(a, c) : !1
            }
            function Ef(a, c, b) {
                var d = za(c);
                return d && Cf(a, c, ma(Boolean, ["p", kl[d], "c"]), Rg(a), b)
            }
            function Df(a, c) {
                var b = Lc(te, a, c);
                if (!b) {
                    var d = Lc("div", a, c);
                    d && (Bd(te + ",div", a, d).length || (b = d))
                }
                return b
            }
            function Cf(a, c, b, d, e) {
                return Q(function(f, g) {
                    var h = null;
                    g in Sg ? h = c.getAttribute && c.getAttribute(Sg[g]) : g in Zb && (h = "p" === g ? Zb[g](a, c, e) : "c" === g ? Zb[g](a, c, d) : Zb[g](a, c));
                    h && (h = h.slice(0, Tg[g] || 100),
                    f[g] = ue[g] ? "" + Xc(h) : h);
                    return f
                }, {}, b)
            }
            function If(a, c, b) {
                if (a.document.querySelectorAll && Z("querySelectorAll", n(a, "Element.prototype.querySelectorAll")))
                    return ya(b.querySelectorAll(c));
                var d = Ug(c.split(" "), b);
                return ma(function(e, f) {
                    return pb(a)(e, d) === f
                }, d)
            }
            function Ug(a, c) {
                var b = R(a)
                  , d = b.shift();
                if (!d)
                    return [];
                d = c.getElementsByTagName(d);
                return b.length ? yb(w(b, Ug), ya(d)) : ya(d)
            }
            function Bd(a, c, b) {
                return b ? (a = b.querySelectorAll(a)) ? ya(a) : [] : []
            }
            function kc(a, c) {
                var b = a.document
                  , d = F({
                    type: "text/javascript",
                    charset: "utf-8",
                    async: !0
                }, c)
                  , e = hb(a);
                if (e) {
                    var f = e("script");
                    ve(Ua, Oa(function(l) {
                        var m = l[0];
                        l = l[1];
                        "async" === m && l ? f.async = !0 : f[m] = l
                    }))(d);
                    try {
                        var g = ub("getElementsByTagName", b)
                          , h = g("head")[0];
                        if (!h) {
                            var k = g("html")[0];
                            h = e("head");
                            k && k.appendChild(h)
                        }
                        h.insertBefore(f, h.firstChild);
                        return f
                    } catch (l) {}
                }
            }
            function Vg(a, c) {
                var b = ""
                  , d = "width height align title alt name".split(" ")
                  , e = za(c);
                "IMG" === e && (b += c.src.toLowerCase());
                "A" === e && (b += c.href.toLowerCase());
                b += ("" + (c.className || "")).toLowerCase();
                for (e = 0; e < d.length; e += 1)
                    c.getAttribute && (b += ("" + (c.getAttribute(d[e]) || "")).toLowerCase());
                return Oc(b.replace(/[\u0000-\u0020]+/g, ""))
            }
            function Wg(a, c) {
                for (var b = "", d = c.childNodes, e = d.length, f = 0; f < e; f += 1)
                    d[f] && 3 === d[f].nodeType && (b += d[f].nodeValue);
                return Oc(b.replace(/[\u0000-\u0020]+/g, ""))
            }
            function ll(a, c) {
                var b = Va(a) ? a : [a];
                c = c || document;
                if (c.querySelectorAll) {
                    var d = C(", ", K(function(e) {
                        return "." + e
                    }, b));
                    return ya(c.querySelectorAll(d))
                }
                if (c.getElementsByClassName)
                    return yb(q(ka("getElementsByClassName", c), ya), b);
                d = c.getElementsByTagName("*");
                b = "(" + C("|", b) + ")";
                return ma(w(b, kb), ya(d))
            }
            function Xg(a, c, b) {
                for (var d = "", e = Yg(), f = za(c) || "*"; c && c.parentNode && !V(f, ["BODY", "HTML"]); )
                    d += e[f] || "*",
                    d += Zg(a, c, b) || "",
                    c = c.parentElement,
                    f = za(c) || "*";
                return Eb(d, 128)
            }
            function Zg(a, c, b) {
                if (a = zc(a, c)) {
                    a = a.childNodes;
                    for (var d = c && c.nodeName, e = 0, f = 0; f < a.length; f += 1)
                        if (d === (a[f] && a[f].nodeName)) {
                            if (c === a[f])
                                return e;
                            b && a[f] === b || (e += 1)
                        }
                }
                return 0
            }
            function zc(a, c) {
                var b = n(a, "document");
                if (!c || c === b.documentElement)
                    return null;
                if (c === $b(a))
                    return b.documentElement;
                b = null;
                try {
                    b = c.parentNode
                } catch (d) {}
                return b
            }
            function Yd(a, c) {
                var b = we(a, c)
                  , d = b.left;
                b = b.top;
                var e = dd(a, c);
                return [d, b, e[0], e[1]]
            }
            function dd(a, c) {
                var b = n(a, "document");
                return c === $b(a) || c === b.documentElement ? pf(a) : (b = $g(c)) ? [b.width, b.height] : [c.offsetWidth, c.offsetHeight]
            }
            function we(a, c) {
                var b = c
                  , d = n(a, "document")
                  , e = za(b);
                if (!b || !b.ownerDocument || "PARAM" === e || b === $b(a) || b === d.documentElement)
                    return {
                        left: 0,
                        top: 0
                    };
                if (d = b.getBoundingClientRect && $g(b))
                    return b = Id(a),
                    {
                        left: Math.round(d.left + b.x),
                        top: Math.round(d.top + b.y)
                    };
                for (e = d = 0; b; )
                    d += b.offsetLeft,
                    e += b.offsetTop,
                    b = b.offsetParent;
                return {
                    left: d,
                    top: e
                }
            }
            function Lc(a, c, b) {
                if (!(c && c.Element && c.Element.prototype && c.document))
                    return null;
                if (c.Element.prototype.closest && Z("closest", c.Element.prototype.closest) && b.closest)
                    return b.closest(a);
                var d = Sf(c);
                if (d) {
                    for (; b && 1 === b.nodeType && !d.call(b, a); )
                        b = b.parentElement || b.parentNode;
                    return b && 1 === b.nodeType ? b : null
                }
                if (c.document.querySelectorAll && Z("querySelectorAll", n(c, "Element.prototype.querySelectorAll"))) {
                    for (a = ya((c.document || c.ownerDocument).querySelectorAll(a)); b && 1 === b.nodeType && -1 === pb(c)(b, a); )
                        b = b.parentElement || b.parentNode;
                    return b && 1 === b.nodeType ? b : null
                }
                return null
            }
            function ah(a) {
                return ed(a) && !ta(ea(a.type), ml) ? bh(a) ? !a.checked : !a.value : nl(a) ? !a.value : ol(a) ? 0 > a.selectedIndex : !0
            }
            function za(a) {
                if (a)
                    try {
                        if (Wa(a.nodeName))
                            return a.nodeName;
                        if (Wa(a.tagName))
                            return a.tagName
                    } catch (c) {}
            }
            function ch(a, c) {
                var b = a.document.getElementsByTagName("form");
                return pb(a)(c, ya(b))
            }
            function pl(a, c, b) {
                b = ub("dispatchEvent", b || a.document);
                var d = null
                  , e = n(a, "Event.prototype.constructor");
                if (e && (Z("(Event|Object|constructor)", e) || fd(a) && "[object Event]" === "" + e))
                    try {
                        d = new a.Event(c)
                    } catch (f) {
                        if ((a = ub("createEvent", n(a, "document"))) && W(a)) {
                            try {
                                d = a(c)
                            } catch (g) {}
                            d && d.initEvent && d.initEvent(c, !1, !1)
                        }
                    }
                d && b(d)
            }
            function $g(a) {
                try {
                    return a.getBoundingClientRect && a.getBoundingClientRect()
                } catch (c) {
                    return "object" === typeof c && null !== c && 16389 === (c.sb && c.sb & 65535) ? {
                        top: 0,
                        bottom: 0,
                        left: 0,
                        width: 0,
                        height: 0,
                        right: 0
                    } : null
                }
            }
            function pf(a) {
                var c = Rb(a);
                a = Hd(a);
                return [Math.max(c.scrollWidth, a[0]), Math.max(c.scrollHeight, a[1])]
            }
            function Id(a) {
                var c = $b(a)
                  , b = n(a, "document");
                return {
                    x: a.pageXOffset || b.documentElement && b.documentElement.scrollLeft || c && c.scrollLeft || 0,
                    y: a.pageYOffset || b.documentElement && b.documentElement.scrollTop || c && c.scrollTop || 0
                }
            }
            function Hd(a) {
                var c = n(a, "visualViewport.width");
                var b = n(a, "visualViewport.height")
                  , d = n(a, "visualViewport.scale");
                if (c = Fa(c) || Fa(b) ? null : [Math.floor(c), Math.floor(b), d])
                    return b = c[2],
                    [a.Math.round(c[0] * b), a.Math.round(c[1] * b)];
                c = Rb(a);
                return [n(c, "clientWidth") || a.innerWidth, n(c, "clientHeight") || a.innerHeight]
            }
            function Rb(a) {
                var c = n(a, "document") || {}
                  , b = c.documentElement;
                return "CSS1Compat" === c.compatMode ? b : $b(a) || b
            }
            function $b(a) {
                a = n(a, "document");
                try {
                    return a.getElementsByTagName("body")[0]
                } catch (c) {
                    return null
                }
            }
            function kb(a, c) {
                try {
                    return (new RegExp("(?:^|\\s)" + a + "(?:\\s|$)")).test(c.className)
                } catch (b) {
                    return !1
                }
            }
            function bb(a) {
                var c;
                try {
                    if (c = a.target || a.srcElement)
                        !c.ownerDocument && c.documentElement ? c = c.documentElement : c.ownerDocument !== document && (c = null)
                } catch (b) {}
                return c
            }
            function Wb(a) {
                var c = a && a.parentNode;
                c && c.removeChild(a)
            }
            function zf(a) {
                if (Fa(a))
                    return !1;
                a = a.nodeType;
                return 3 === a || 8 === a
            }
            function ac(a) {
                var c;
                if (c = n(a, "XMLHttpRequest"))
                    if (c = "withCredentials"in new a.XMLHttpRequest) {
                        a: {
                            if (ql.test(a.location.host) && a.opera && W(a.opera.version) && (c = a.opera.version(),
                            "string" === typeof c && "12" === c.split(".")[0])) {
                                c = !0;
                                break a
                            }
                            c = !1
                        }
                        c = !c
                    }
                return c ? rl(a) : !1
            }
            function sl(a, c, b, d, e, f, g, h) {
                if (4 === c.readyState)
                    if (200 === c.status || e || g(b),
                    e)
                        200 === c.status ? f(c.responseText) : g("s." + c.status + ".st." + c.statusText + ".rt." + c.responseText);
                    else {
                        e = null;
                        if (d)
                            try {
                                (e = Ab(a, c.responseText)) || g(b)
                            } catch (k) {
                                g(b)
                            }
                        f(e)
                    }
                return h
            }
            function dh(a, c, b) {
                (b = gc(b)) && (a += "?" + b);
                c.J && (a += (b ? "&" : "?") + c.J);
                return a
            }
            function tb() {
                var a, c = ha(arguments), b = c[0];
                c = c.slice(1);
                try {
                    return (a = b.JSON).stringify.apply(a, c)
                } catch (d) {
                    return null
                }
            }
            function gc(a) {
                return a ? q(Ua, xc(function(c, b) {
                    var d = b[0]
                      , e = b[1];
                    X(e) || Fa(e) || c.push(d + "=" + ne(e));
                    return c
                }, []), Ob("&"))(a) : ""
            }
            function Od(a) {
                return a ? q(Oa(function(c) {
                    c = c.split("=");
                    var b = c[1];
                    return [c[0], Fa(b) ? void 0 : Nc(b)]
                }), xc(function(c, b) {
                    c[b[0]] = b[1];
                    return c
                }, {}))(a.split("&")) : {}
            }
            function Nc(a) {
                var c = "";
                try {
                    c = decodeURIComponent(a)
                } catch (b) {}
                return c
            }
            function ne(a) {
                try {
                    return encodeURIComponent(a)
                } catch (c) {}
                a = C("", ma(function(c) {
                    return 55296 >= c.charCodeAt(0)
                }, a.split("")));
                return encodeURIComponent(a)
            }
            function eh() {
                var a = ha(arguments);
                return Db(db(a))
            }
            function db(a) {
                var c = "";
                Va(a) ? c = C(".", a) : Wa(a) && (c = a);
                return me("err.kn(" + na.ua + ")" + c)
            }
            function tl(a) {
                this.message = a
            }
            function fh(a, c, b, d, e) {
                var f = gh(a, hh)
                  , g = gh(a, ih);
                if (f || g) {
                    var h = f ? hh : ih;
                    g = h[0];
                    h = h[1];
                    E.apply(void 0, R([a[e ? h : g], a], f ? [c, b, d] : ["on" + c, b]))()
                }
            }
            function gh(a, c) {
                return Q(function(b, d) {
                    return b && a[d]
                }, !0, c)
            }
            function J(a) {
                return Q(function(c, b) {
                    var d = n(a, "location." + b);
                    c[b] = d ? "" + d : "";
                    return c
                }, {}, ul)
            }
            function vl(a, c, b, d, e) {
                var f = "object" === typeof a ? a : {
                    id: a,
                    K: d,
                    va: e,
                    H: b
                };
                a = Q(function(g, h) {
                    var k = h[1]
                      , l = k.yc;
                    k = f[k.ub];
                    g[h[0]] = l ? l(k) : k;
                    return g
                }, {}, Ua(c));
                jh(a, a.H || {});
                return a
            }
            function wl(a, c) {
                return Q(function(b, d) {
                    b[c[d[0]].ub] = d[1];
                    return b
                }, {}, Ua(a))
            }
            function jh(a, c) {
                var b = T(a)
                  , d = n(c, "__ym.turbo_page")
                  , e = n(c, "__ym.turbo_page_id");
                nb[b] || (nb[b] = {});
                if (d || e)
                    nb[b].Oc = d,
                    nb[b].Lb = e
            }
            function je(a) {
                return V("prerender", K(w(n(a, "document"), n), ["webkitVisibilityState", "visibilityState"]))
            }
            function ya(a) {
                if (a) {
                    if (!Va(a)) {
                        We();
                        if ("undefined" === typeof Symbol)
                            var c = !1;
                        else
                            try {
                                We(),
                                ui(),
                                c = W(a[Symbol.iterator])
                            } catch (b) {
                                c = !1
                            }
                        a = c && kh ? kh(a) : "number" === typeof a.length && 0 <= a.length ? ha(a) : []
                    }
                } else
                    a = [];
                return a
            }
            function Xi(a) {
                if (0 > a)
                    return [];
                for (var c = [], b = 0; b <= a; b += 1)
                    c.push(b);
                return c
            }
            function gd(a, c, b) {
                return b ? a : c
            }
            function hd() {
                return []
            }
            function Ac() {
                return {}
            }
            function id(a, c) {
                return function() {
                    var b = ha(arguments)
                      , d = b[0];
                    b = b.slice(1);
                    var e = O(d)
                      , f = e.b("m523", {})
                      , g = n(f, a);
                    g || (g = r(c),
                    f[a] = g,
                    e.l("m523", f));
                    return g.apply(void 0, R([d], b))
                }
            }
            function D() {}
            function rb(a, c) {
                try {
                    if (W(c)) {
                        var b = ha(arguments).slice(2);
                        c.apply(void 0, b)
                    }
                } catch (d) {
                    bd(a, w(d, Db), 0)
                }
            }
            function fa(a, c) {
                return c ? a(c) : a()
            }
            function Db(a) {
                throw a;
            }
            function bd(a, c, b) {
                return ub("setTimeout", a)(c, b)
            }
            function fb(a, c) {
                return ub("clearTimeout", a)(c)
            }
            function ub(a, c) {
                var b = n(c, a)
                  , d = n(c, "constructor.prototype." + a) || b;
                try {
                    if (d && d.apply)
                        return function() {
                            return d.apply(c, arguments)
                        }
                } catch (e) {
                    return b
                }
                return d
            }
            function xl(a, c) {
                if (!Wc(a))
                    return !0;
                try {
                    c.call({
                        0: !0,
                        length: -Math.pow(2, 32) + 1
                    }, function() {
                        throw 1;
                    })
                } catch (b) {
                    return !1
                }
                return !0
            }
            function r(a, c) {
                var b = []
                  , d = [];
                var e = c ? c : L;
                return function() {
                    var f = ha(arguments)
                      , g = e.apply(void 0, f)
                      , h = lh(g, d);
                    if (-1 !== h)
                        return b[h];
                    f = a.apply(void 0, f);
                    b.push(f);
                    d.push(g);
                    return f
                }
            }
            function Yb(a) {
                return !a
            }
            function gb(a, c) {
                return c
            }
            function L(a) {
                return a
            }
            function pb(a) {
                if (xe)
                    return xe;
                var c = !1;
                try {
                    c = [].indexOf && 0 === [void 0].indexOf(void 0)
                } catch (d) {}
                var b = a.Array && a.Array.prototype && Na(a.Array.prototype.indexOf, "indexOf");
                return xe = a = c && b ? function(d, e) {
                    return b.call(e, d)
                }
                : yl
            }
            function yl(a, c) {
                for (var b = 0; b < c.length; b += 1)
                    if (c[b] === a)
                        return b;
                return -1
            }
            function zl(a, c) {
                for (var b = "", d = 0; d < c; d += 1)
                    b += a;
                return b
            }
            function Al(a) {
                return X(a) ? [] : Bc(function(c, b) {
                    c.push([b, a[b]]);
                    return c
                }, [], mh(a))
            }
            function Bl(a, c) {
                return Bc(function(b, d, e) {
                    d = a(d, e);
                    return b.concat(Va(d) ? d : [d])
                }, [], c)
            }
            function Cl(a, c) {
                return Bc(function(b, d, e) {
                    b.push(a(d, e));
                    return b
                }, [], c)
            }
            function Dl() {
                var a = ha(arguments)
                  , c = a[0]
                  , b = a[1]
                  , d = a.slice(2);
                return function() {
                    var e = R(d, ha(arguments));
                    if (Function.prototype.call)
                        return Function.prototype.call.apply(c, R([b], e));
                    if (b) {
                        for (var f = "_b"; b[f]; )
                            f += "_" + f.length;
                        b[f] = c;
                        e = b[f] && nh(f, e, b);
                        delete b[f];
                        return e
                    }
                    return nh(c, e)
                }
            }
            function nh(a, c, b) {
                void 0 === c && (c = []);
                b = b || {};
                var d = c.length
                  , e = a;
                W(e) && (e = "d",
                b[e] = a);
                var f;
                d ? 1 === d ? f = b[e](c[0]) : 2 === d ? f = b[e](c[0], c[1]) : 3 === d ? f = b[e](c[0], c[1], c[2]) : 4 === d && (f = b[e](c[0], c[1], c[2], c[3])) : f = b[e]();
                return f
            }
            function El() {
                var a = ha(arguments)
                  , c = a[0];
                for (a = a.slice(1); a.length; ) {
                    var b = a.shift(), d;
                    for (d in b)
                        rc(b, d) && (c[d] = b[d]);
                    rc(b, "toString") && (c.toString = b.toString)
                }
                return c
            }
            function mh(a) {
                var c = [], b;
                for (b in a)
                    rc(a, b) && c.push(b);
                return c
            }
            function Fl(a, c) {
                return 1 <= oh(ea(a), c).length
            }
            function oh(a, c) {
                return Bc(function(b, d, e) {
                    a(d, e) && b.push(d);
                    return b
                }, [], c)
            }
            function rc(a, c) {
                return Fa(a) ? !1 : ye.call(a, c)
            }
            function Va(a) {
                if (Cc)
                    return Cc(a);
                (Cc = Na(Array.isArray, "isArray")) || (Cc = Gl);
                return Cc(a)
            }
            function q() {
                var a = ha(arguments);
                return function() {
                    var c = ha(arguments);
                    return Q(function(b, d, e) {
                        b = d.apply(void 0, b);
                        return e + 1 === a.length ? b : [b]
                    }, c, a)
                }
            }
            function Ad(a, c) {
                void 0 === c && (c = {});
                if (!a || 1 > a.length)
                    return c;
                Q(function(b, d, e) {
                    if (e === a.length - 1)
                        return b;
                    b[d] = e === a.length - 2 ? a[e + 1] : b[d] || {};
                    return b[d]
                }, c, a);
                return c
            }
            function n(a, c) {
                return a ? Q(function(b, d) {
                    if (Fa(b))
                        return b;
                    var e = null;
                    try {
                        e = b[d]
                    } catch (f) {}
                    return e
                }, a, c.split(".")) : null
            }
            function Bc(a, c, b) {
                var d = 0
                  , e = b.length;
                X(c) && (c = b[0],
                d += 1);
                for (; d < e; )
                    c = a(c, b[d], d),
                    d += 1;
                return c
            }
            function lc(a) {
                return !lb(a) && !X(a) && "[object Object]" === cd(a)
            }
            function Fa(a) {
                return X(a) || lb(a)
            }
            function W(a) {
                return "function" === typeof a
            }
            function Gb(a) {
                return B(function(c, b) {
                    return a(b, c)
                })
            }
            function B() {
                var a = ha(arguments)
                  , c = a[0]
                  , b = a.slice(1);
                return function() {
                    var d = ha(arguments);
                    return c.length > d.length + b.length ? B.apply(void 0, R([c], b, d)) : c.apply(void 0, R(b, d))
                }
            }
            function Hl(a, c) {
                for (var b = "", d = 0; d < c.length; d += 1)
                    b += "" + (d ? a : "") + c[d];
                return b
            }
            function Na(a, c) {
                return Z(c, a) && a
            }
            function Z(a, c) {
                if (!c || "function" !== typeof c)
                    return !1;
                var b = new RegExp("function\\s*(" + a + ")?\\s*\\(\\)\\s*\\{\\s*\\[native[\\s-]code\\]\\s*\\}","i");
                try {
                    return b.test("" + c)
                } catch (d) {
                    return !1
                }
            }
            function ha(a) {
                for (var c = a.length, b = [], d = 0; d < c; d += 1)
                    b[d] = a[d];
                return b
            }
            function ze(a, c) {
                ze = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(b, d) {
                    b.__proto__ = d
                }
                || function(b, d) {
                    for (var e in d)
                        d.hasOwnProperty(e) && (b[e] = d[e])
                }
                ;
                return ze(a, c)
            }
            function dk(a) {
                return a.replace(/\^/g, "\\^").replace(/\$/g, "\\$").replace(/\./g, "\\.").replace(/\[/g, "\\[").replace(/\]/g, "\\]").replace(/\|/g, "\\|").replace(/\(/g, "\\(").replace(/\)/g, "\\)").replace(/\?/g, "\\?").replace(/\*/g, "\\*").replace(/\+/g, "\\+").replace(/\{/g, "\\{").replace(/\}/g, "\\}")
            }
            function Eb(a, c) {
                if (a) {
                    var b = ("" + a).replace(cg, "");
                    return c && b.length > c ? b.substr(0, c) : b
                }
                return ""
            }
            function af(a) {
                return "" + a
            }
            function Wa(a) {
                return "[object String]" === cd(a)
            }
            function cd(a) {
                return Object.prototype.toString.call(a)
            }
            function Il(a, c) {
                function b() {
                    this.constructor = a
                }
                ze(a, c);
                a.prototype = null === c ? Object.create(c) : (b.prototype = c.prototype,
                new b)
            }
            function R() {
                for (var a = 0, c = 0, b = arguments.length; c < b; c++)
                    a += arguments[c].length;
                a = Array(a);
                var d = 0;
                for (c = 0; c < b; c++)
                    for (var e = arguments[c], f = 0, g = e.length; f < g; f++,
                    d++)
                        a[d] = e[f];
                return a
            }
            function Jl() {}
            function Kl(a, c) {
                return function() {
                    a.apply(c, arguments)
                }
            }
            function ba(a) {
                if (!(this instanceof ba))
                    throw new TypeError("Promises must be constructed via new");
                if ("function" !== typeof a)
                    throw new TypeError("not a function");
                this.T = 0;
                this.hb = !1;
                this.Y = void 0;
                this.ea = [];
                ph(a, this)
            }
            function qh(a, c) {
                for (; 3 === a.T; )
                    a = a.Y;
                0 === a.T ? a.ea.push(c) : (a.hb = !0,
                ba.ib(function() {
                    var b = 1 === a.T ? c.Dc : c.Ec;
                    if (null === b)
                        (1 === a.T ? Ae : Dc)(c.$, a.Y);
                    else {
                        try {
                            var d = b(a.Y)
                        } catch (e) {
                            Dc(c.$, e);
                            return
                        }
                        Ae(c.$, d)
                    }
                }))
            }
            function Ae(a, c) {
                try {
                    if (c === a)
                        throw new TypeError("A promise cannot be resolved with itself.");
                    if (c && ("object" === typeof c || "function" === typeof c)) {
                        var b = c.then;
                        if (c instanceof ba) {
                            a.T = 3;
                            a.Y = c;
                            Be(a);
                            return
                        }
                        if ("function" === typeof b) {
                            ph(Kl(b, c), a);
                            return
                        }
                    }
                    a.T = 1;
                    a.Y = c;
                    Be(a)
                } catch (d) {
                    Dc(a, d)
                }
            }
            function Dc(a, c) {
                a.T = 2;
                a.Y = c;
                Be(a)
            }
            function Be(a) {
                2 === a.T && 0 === a.ea.length && ba.ib(function() {
                    a.hb || ba.Zb(a.Y)
                });
                for (var c = 0, b = a.ea.length; c < b; c++)
                    qh(a, a.ea[c]);
                a.ea = null
            }
            function Ll(a, c, b) {
                this.Dc = "function" === typeof a ? a : null;
                this.Ec = "function" === typeof c ? c : null;
                this.$ = b
            }
            function ph(a, c) {
                var b = !1;
                try {
                    a(function(d) {
                        b || (b = !0,
                        Ae(c, d))
                    }, function(d) {
                        b || (b = !0,
                        Dc(c, d))
                    })
                } catch (d) {
                    b || (b = !0,
                    Dc(c, d))
                }
            }
            function Oc(a) {
                for (var c = a.length, b = 0, d = 255, e = 255, f, g, h; c; ) {
                    f = 21 < c ? 21 : c;
                    c -= f;
                    do
                        g = "string" === typeof a ? a.charCodeAt(b) : a[b],
                        b += 1,
                        255 < g && (h = g >> 8,
                        g &= 255,
                        g ^= h),
                        d += g,
                        e += d;
                    while (--f);
                    d = (d & 255) + (d >> 8);
                    e = (e & 255) + (e >> 8)
                }
                a = (d & 255) + (d >> 8) << 8 | (e & 255) + (e >> 8);
                return 65535 === a ? 0 : a
            }
            function Ab(a, c) {
                if (!c)
                    return null;
                try {
                    return a.JSON.parse(c)
                } catch (b) {
                    return null
                }
            }
            function Xc(a) {
                a = "" + a;
                for (var c = 2166136261, b = a.length, d = 0; d < b; d += 1)
                    c ^= a.charCodeAt(d),
                    c += (c << 1) + (c << 4) + (c << 7) + (c << 8) + (c << 24);
                return c >>> 0
            }
            function $c(a, c, b, d, e, f) {
                if (Hf(a, nc, c)) {
                    c = [c + "=" + encodeURIComponent(b)];
                    c = c.concat(Ml(a));
                    d && (b = new Date,
                    b.setTime(b.getTime() + 6E4 * d),
                    c.push("expires=" + b.toUTCString()));
                    e && (d = e.replace(Nl, ""),
                    c.push("domain=" + d));
                    c.push("path=" + (f || "/"));
                    f = C(";", c);
                    try {
                        a.document.cookie = f
                    } catch (g) {}
                }
            }
            function Qb(a, c, b) {
                void 0 === c && (c = "_ym_");
                void 0 === b && (b = "");
                var d = Ol(a)
                  , e = 1 === (d || "").split(".").length ? d : "." + d
                  , f = b ? "_" + b : "";
                return {
                    ha: function(g, h, k) {
                        $c(a, "" + c + g + f, "", -100, h || e, k);
                        return this
                    },
                    b: function(g) {
                        return nc(a, "" + c + g + f)
                    },
                    l: function(g, h, k, l, m) {
                        $c(a, "" + c + g + f, h, k, l || e, m);
                        return this
                    }
                }
            }
            function jc(a, c) {
                var b = Pl(a);
                return b ? (b.href = c,
                {
                    protocol: b.protocol,
                    host: b.host,
                    port: b.port,
                    hostname: b.hostname,
                    hash: b.hash,
                    search: b.search,
                    query: b.search.replace(/^\?/, ""),
                    pathname: b.pathname || "/",
                    path: (b.pathname || "/") + b.search,
                    href: b.href
                }) : {}
            }
            function Pa(a, c) {
                a = [a[0] >>> 16, a[0] & 65535, a[1] >>> 16, a[1] & 65535];
                c = [c[0] >>> 16, c[0] & 65535, c[1] >>> 16, c[1] & 65535];
                var b = [0, 0, 0, 0];
                b[3] += a[3] * c[3];
                b[2] += b[3] >>> 16;
                b[3] &= 65535;
                b[2] += a[2] * c[3];
                b[1] += b[2] >>> 16;
                b[2] &= 65535;
                b[2] += a[3] * c[2];
                b[1] += b[2] >>> 16;
                b[2] &= 65535;
                b[1] += a[1] * c[3];
                b[0] += b[1] >>> 16;
                b[1] &= 65535;
                b[1] += a[2] * c[2];
                b[0] += b[1] >>> 16;
                b[1] &= 65535;
                b[1] += a[3] * c[1];
                b[0] += b[1] >>> 16;
                b[1] &= 65535;
                b[0] += a[0] * c[3] + a[1] * c[2] + a[2] * c[1] + a[3] * c[0];
                b[0] &= 65535;
                return [b[0] << 16 | b[1], b[2] << 16 | b[3]]
            }
            function vb(a, c) {
                a = [a[0] >>> 16, a[0] & 65535, a[1] >>> 16, a[1] & 65535];
                c = [c[0] >>> 16, c[0] & 65535, c[1] >>> 16, c[1] & 65535];
                var b = [0, 0, 0, 0];
                b[3] += a[3] + c[3];
                b[2] += b[3] >>> 16;
                b[3] &= 65535;
                b[2] += a[2] + c[2];
                b[1] += b[2] >>> 16;
                b[2] &= 65535;
                b[1] += a[1] + c[1];
                b[0] += b[1] >>> 16;
                b[1] &= 65535;
                b[0] += a[0] + c[0];
                b[0] &= 65535;
                return [b[0] << 16 | b[1], b[2] << 16 | b[3]]
            }
            function bc(a, c) {
                c %= 64;
                if (32 === c)
                    return [a[1], a[0]];
                if (32 > c)
                    return [a[0] << c | a[1] >>> 32 - c, a[1] << c | a[0] >>> 32 - c];
                c -= 32;
                return [a[1] << c | a[0] >>> 32 - c, a[0] << c | a[1] >>> 32 - c]
            }
            function Ma(a, c) {
                c %= 64;
                return 0 === c ? a : 32 > c ? [a[0] << c | a[1] >>> 32 - c, a[1] << c] : [a[1] << c - 32, 0]
            }
            function aa(a, c) {
                return [a[0] ^ c[0], a[1] ^ c[1]]
            }
            function rh(a) {
                a = aa(a, [0, a[0] >>> 1]);
                a = Pa(a, [4283543511, 3981806797]);
                a = aa(a, [0, a[0] >>> 1]);
                a = Pa(a, [3301882366, 444984403]);
                return a = aa(a, [0, a[0] >>> 1])
            }
            function Ql(a, c) {
                var b = c || ""
                  , d = a || 0
                  , e = b.length % 16
                  , f = b.length - e
                  , g = [0, d];
                d = [0, d];
                var h = [2277735313, 289559509], k = [1291169091, 658871167], l;
                for (l = 0; l < f; l += 16) {
                    var m = [b.charCodeAt(l + 4) & 255 | (b.charCodeAt(l + 5) & 255) << 8 | (b.charCodeAt(l + 6) & 255) << 16 | (b.charCodeAt(l + 7) & 255) << 24, b.charCodeAt(l) & 255 | (b.charCodeAt(l + 1) & 255) << 8 | (b.charCodeAt(l + 2) & 255) << 16 | (b.charCodeAt(l + 3) & 255) << 24];
                    var p = [b.charCodeAt(l + 12) & 255 | (b.charCodeAt(l + 13) & 255) << 8 | (b.charCodeAt(l + 14) & 255) << 16 | (b.charCodeAt(l + 15) & 255) << 24, b.charCodeAt(l + 8) & 255 | (b.charCodeAt(l + 9) & 255) << 8 | (b.charCodeAt(l + 10) & 255) << 16 | (b.charCodeAt(l + 11) & 255) << 24];
                    m = Pa(m, h);
                    m = bc(m, 31);
                    m = Pa(m, k);
                    g = aa(g, m);
                    g = bc(g, 27);
                    g = vb(g, d);
                    g = vb(Pa(g, [0, 5]), [0, 1390208809]);
                    p = Pa(p, k);
                    p = bc(p, 33);
                    p = Pa(p, h);
                    d = aa(d, p);
                    d = bc(d, 31);
                    d = vb(d, g);
                    d = vb(Pa(d, [0, 5]), [0, 944331445])
                }
                m = [0, 0];
                p = [0, 0];
                switch (e) {
                case 15:
                    p = aa(p, Ma([0, b.charCodeAt(l + 14)], 48));
                case 14:
                    p = aa(p, Ma([0, b.charCodeAt(l + 13)], 40));
                case 13:
                    p = aa(p, Ma([0, b.charCodeAt(l + 12)], 32));
                case 12:
                    p = aa(p, Ma([0, b.charCodeAt(l + 11)], 24));
                case 11:
                    p = aa(p, Ma([0, b.charCodeAt(l + 10)], 16));
                case 10:
                    p = aa(p, Ma([0, b.charCodeAt(l + 9)], 8));
                case 9:
                    p = aa(p, [0, b.charCodeAt(l + 8)]),
                    p = Pa(p, k),
                    p = bc(p, 33),
                    p = Pa(p, h),
                    d = aa(d, p);
                case 8:
                    m = aa(m, Ma([0, b.charCodeAt(l + 7)], 56));
                case 7:
                    m = aa(m, Ma([0, b.charCodeAt(l + 6)], 48));
                case 6:
                    m = aa(m, Ma([0, b.charCodeAt(l + 5)], 40));
                case 5:
                    m = aa(m, Ma([0, b.charCodeAt(l + 4)], 32));
                case 4:
                    m = aa(m, Ma([0, b.charCodeAt(l + 3)], 24));
                case 3:
                    m = aa(m, Ma([0, b.charCodeAt(l + 2)], 16));
                case 2:
                    m = aa(m, Ma([0, b.charCodeAt(l + 1)], 8));
                case 1:
                    m = aa(m, [0, b.charCodeAt(l)]),
                    m = Pa(m, h),
                    m = bc(m, 31),
                    m = Pa(m, k),
                    g = aa(g, m)
                }
                g = aa(g, [0, b.length]);
                d = aa(d, [0, b.length]);
                g = vb(g, d);
                d = vb(d, g);
                g = rh(g);
                d = rh(d);
                g = vb(g, d);
                d = vb(d, g);
                return ("00000000" + (g[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (g[1] >>> 0).toString(16)).slice(-8) + ("00000000" + (d[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (d[1] >>> 0).toString(16)).slice(-8)
            }
            function sh(a) {
                return (a = J(a).hash.split("#")[1]) ? a.split("?")[0] : ""
            }
            function Rl(a, c) {
                var b = sh(a);
                th = cl(a, function() {
                    var d = sh(a);
                    d !== b && (c(),
                    b = d)
                }, 200, "t.h");
                return E(bl, null, a, th)
            }
            function Sl(a, c, b) {
                var d, e, f = c.K, g = c.eb, h = c.xa, k = O(a), l = la((d = {},
                d.wh = "1",
                d.pv = "1",
                d));
                "1" === f && a.Yb && a.Yb.Yc && l.l("ad", "1");
                g && l.l("ut", "1");
                f = k.b("lastReferrer");
                d = J(a).href;
                h = {
                    C: (e = {},
                    e["page-url"] = h || d,
                    e["page-ref"] = f,
                    e),
                    D: l
                };
                b(h, c)["catch"](x(a, "g.s"));
                k.l("lastReferrer", d)
            }
            function Tl(a, c) {
                if (fd(a))
                    return fb(a, c);
                Ce[c] = !0;
                return fb(a, jd[c] || 0)
            }
            function Ul(a, c, b) {
                function d() {
                    m || (l = !0,
                    p = !1,
                    m = !0,
                    f())
                }
                function e() {
                    Ce[u] = !0;
                    g(!1);
                    c()
                }
                function f() {
                    fb(a, jd[u]);
                    if (Ce[u])
                        g(!1);
                    else {
                        var ia = Math.max(0, b - (p ? v : v + k(U) - t));
                        ia ? jd[u] = sa(a, e, ia, "u.t.d.c") : e()
                    }
                }
                function g(ia) {
                    I(function(Ga) {
                        var Qa = Ga[0]
                          , wb = Ga[1];
                        Ga = Ga[2];
                        ia ? z.F(Qa, wb, Ga) : z.Ea(Qa, wb, Ga)
                    }, M)
                }
                var h = w(!1, g);
                if (fd(a))
                    return {
                        id: sa(a, c, b, "u.t.d"),
                        kb: h
                    };
                var k = Y(a)
                  , l = !1
                  , m = !1
                  , p = !0
                  , v = 0
                  , t = k(U)
                  , z = qa(a)
                  , u = uh;
                uh += 1;
                jd[u] = 0;
                var M = [[a, "blur", function() {
                    p = l = m = !0;
                    v += k(U) - t;
                    t = k(U);
                    f()
                }
                ], [a, "focus", function() {
                    l || m || (v = 0);
                    t = k(U);
                    l = m = !0;
                    p = !1;
                    f()
                }
                ], [a.document, "click", d], [a.document, "mousemove", d], [a.document, "keydown", d], [a.document, "scroll", d]];
                g(!0);
                f();
                return {
                    id: u,
                    kb: h
                }
            }
            function Vj(a, c) {
                var b, d = bb(c), e = na.Ga;
                if (d && kb("ym-advanced-informer", d)) {
                    var f = d.getAttribute("data-lang")
                      , g = parseInt(d.getAttribute("data-cid") || "", 10);
                    if (g || 0 === g)
                        n(a, "Ya." + e + ".informer")((b = {},
                        b.i = d,
                        b.id = g,
                        b.lang = f,
                        b)),
                        b = c || window.event,
                        b.preventDefault ? b.preventDefault() : b.returnValue = !1
                }
            }
            function qc(a, c, b) {
                a = c && kb(Vl, c);
                return b && c ? a || !!ll(vh, c).length : a
            }
            function Pf(a, c) {
                return ed(c) ? "password" === c.type || c.name && wh.test(c.name) || c.id && wh.test(c.id) : !1
            }
            function Ec(a, c) {
                var b = Math.max(0, Math.min(c, 65535));
                Ia(a, [b >> 8, b & 255])
            }
            function xa(a, c) {
                Ia(a, [c & 255])
            }
            function Da(a, c, b) {
                xa(c, b);
                return !1
            }
            function y(a, c) {
                for (var b = Math.max(0, c | 0); 127 < b; )
                    Ia(a, [b & 127 | 128]),
                    b >>= 7;
                Ia(a, [b])
            }
            function De(a, c) {
                y(a, c.length);
                for (var b = 0; b < c.length; b += 1)
                    y(a, c.charCodeAt(b))
            }
            function Ee(a, c) {
                var b = c;
                255 < b.length && (b = b.substr(0, 255));
                a.push(b.length);
                for (var d = 0; d < b.length; d += 1)
                    Ec(a, b.charCodeAt(d))
            }
            function Wl(a, c) {
                var b = [];
                if (Da(a, b, 27))
                    return [];
                y(b, c);
                return b
            }
            function Xl(a, c) {
                var b = za(c);
                if (!b)
                    return c[pa] = -1,
                    null;
                var d = +c[pa];
                if (!isFinite(d) || 0 >= d)
                    return null;
                if (c.attributes)
                    for (var e = c; e; ) {
                        if (e.attributes.ed)
                            return null;
                        e = e.parentElement
                    }
                e = 64;
                var f = 0
                  , g = zc(a, c)
                  , h = g && g[pa] ? g[pa] : 0;
                0 > h && (h = 0);
                b = (b || "").toUpperCase();
                var k = Yl()[b];
                k || (e |= 2);
                var l = Zg(a, c);
                l || (e |= 4);
                var m = Yd(a, c);
                (g = g ? Yd(a, g) : null) && m[0] === g[0] && m[1] === g[1] && m[2] === g[2] && m[3] === g[3] && (e |= 8);
                Cb[d].vb = m[0] + "x" + m[1];
                Cb[d].size = m[2] + "x" + m[3];
                c.id && "string" === typeof c.id && (e |= 32);
                (g = Wg(a, c)) && (e |= 16);
                var p = Vg(a, c);
                p && (f |= 2);
                var v = 0;
                a: {
                    var t = zc(a, c)
                      , z = za(c);
                    var u = [];
                    if (t && (t = t.childNodes) && t.length)
                        for (var M = 0; M < t.length; M += 1) {
                            var ia = t[M];
                            ia && ("INPUT" === ia.nodeName && ia.type && "hidden" === ia.type.toLocaleLowerCase() || z && ia.nodeName !== z || u.push(ia))
                        }
                    for (z = 0; z < u.length; z += 1)
                        if ((!u[z].id || "string" !== typeof u[z].id) && Vg(a, u[z]) === p && Wg(a, u[z]) === g) {
                            u = !0;
                            break a
                        }
                    u = !1
                }
                if (u) {
                    e |= 1;
                    v = "";
                    try {
                        v = c.innerHTML || ""
                    } catch (Ga) {}
                    v = Oc(v.replace(/(<[^>]*>|[\u0000-\u0020])/g, ""))
                }
                u = [];
                if (Da(a, u, 1))
                    return null;
                y(u, d);
                xa(u, e);
                y(u, h);
                k ? xa(u, k) : Ee(u, b);
                l && y(u, l);
                e & 8 || (y(u, m[0]),
                y(u, m[1]),
                y(u, m[2]),
                y(u, m[3]));
                e & 32 && Ee(u, c.id);
                g && Ec(u, g);
                e & 1 && Ec(u, v);
                xa(u, f);
                p && Ec(u, p);
                return u
            }
            function Zl(a, c) {
                var b = c[pa];
                if (!b || 0 > b || !Wd(c) || !c.form || Rf(a, c.form))
                    return [];
                var d = ch(a, c.form);
                if (0 > d)
                    return [];
                if (ed(c)) {
                    var e = {
                        text: 0,
                        color: 0,
                        wa: 0,
                        gd: 0,
                        "datetime-local": 0,
                        email: 0,
                        sb: 0,
                        vd: 0,
                        search: 0,
                        xd: 0,
                        time: 0,
                        url: 0,
                        month: 0,
                        zd: 0,
                        password: 2,
                        ud: 3,
                        fd: 4,
                        file: 6,
                        image: 7
                    };
                    e = e[c.type]
                } else {
                    e = {
                        bd: 1,
                        cd: 5
                    };
                    var f = za(c);
                    e = X(f) ? "" : e[f]
                }
                if ("number" !== typeof e)
                    return [];
                f = -1;
                for (var g = c.form.elements, h = g.length, k = 0, l = 0; k < h; k += 1)
                    if (g[k].name === c.name) {
                        if (g[k] === c) {
                            f = l;
                            break
                        }
                        l += 1
                    }
                if (0 > f)
                    return [];
                g = [];
                if (Da(a, g, 7))
                    return [];
                y(g, b);
                y(g, d);
                y(g, e);
                De(g, c.name || "");
                y(g, f);
                return g
            }
            function of(a, c, b, d, e, f, g) {
                var h;
                var k = dd(a, d);
                var l = k[0];
                for (k = k[1]; d && (!l || !k); )
                    if (d = zc(a, d))
                        k = dd(a, d),
                        l = k[0],
                        k = k[1];
                if (!d)
                    return [];
                l = d[pa];
                if (!l || 0 > l)
                    return [];
                k = (h = {},
                h.mousemove = 2,
                h.click = 32,
                h.dblclick = 33,
                h.mousedown = 4,
                h.mouseup = 30,
                h.touch = 12,
                h)[b];
                if (!k)
                    return [];
                h = [];
                d = we(a, d);
                if (Da(a, h, k))
                    return [];
                y(h, c);
                y(h, l);
                y(h, Math.max(0, e[0] - d.left));
                y(h, Math.max(0, e[1] - d.top));
                /^mouse(up|down)|click$/.test(b) && (a = f || g,
                xa(h, 2 > a ? 1 : a === (f ? 2 : 4) ? 4 : 2));
                return h
            }
            function $l(a, c, b) {
                var d = ch(a, b);
                if (0 > d)
                    return [];
                var e = b.elements
                  , f = e.length;
                b = [];
                for (var g = 0; g < f; g += 1)
                    if (!ah(e[g])) {
                        var h = e[g][pa];
                        h && 0 < h && b.push(h)
                    }
                e = [];
                if (Da(a, e, 11))
                    return [];
                y(e, c);
                y(e, d);
                y(e, b.length);
                for (a = 0; a < b.length; a += 1)
                    y(e, b[a]);
                return e
            }
            function cb(a, c, b) {
                void 0 === b && (b = []);
                for (var d = []; c && !Kj(a, c, b); c = zc(a, c))
                    d.push(c);
                I(function(e) {
                    Cb.Ha += 1;
                    var f = Cb.Ha;
                    e[pa] = f;
                    Cb[f] = {};
                    f = Xl(a, e);
                    e = Zl(a, e);
                    f && e && (Ia(b, f),
                    Ia(b, e))
                }, d.reverse());
                return b
            }
            function am(a) {
                var c = a.M;
                if (!oc || c && !c.fromElement)
                    return Mf(a)
            }
            function bm(a) {
                var c = a.M;
                if (c && !c.toElement)
                    return Xd(a)
            }
            function xh(a) {
                var c = bb(a.M);
                if (c && Pc(c)) {
                    var b = Lf(a, c);
                    var d = wa(a.o)
                      , e = [];
                    Da(a.o, e, 17) ? a = [] : (y(e, d),
                    y(e, c[pa]),
                    a = e);
                    return R(b, a)
                }
            }
            function yh(a) {
                var c = a.o
                  , b = a.M.target;
                if (b && Pc(b)) {
                    c = cb(c, b);
                    var d = wa(a.o)
                      , e = [];
                    Da(a.o, e, 18) ? a = [] : (y(e, d),
                    y(e, b[pa]),
                    a = e);
                    return R(c, a)
                }
            }
            function zh(a) {
                var c = a.o
                  , b = bb(a.M);
                if (!b || Pf(c, b) || qc(c, b))
                    return [];
                if (Wd(b)) {
                    var d = O(c).b("isEU")
                      , e = pc(c, b, d);
                    d = pc(c, b);
                    if (bh(b))
                        var f = b.checked;
                    else
                        f = b.value,
                        f = e ? C("", Ah(f.split(""))) : f;
                    c = cb(c, b);
                    e = wa(a.o);
                    var g = [];
                    Da(a.o, g, 39) ? a = [] : (y(g, e),
                    y(g, b[pa]),
                    Ee(g, String(f)),
                    xa(g, d ? 1 : 0),
                    a = g);
                    return R(c, a)
                }
            }
            function hc(a) {
                var c = a.o
                  , b = a.M
                  , d = bb(b);
                if (!d || "SCROLLBAR" === d.nodeName)
                    return [];
                var e = []
                  , f = Ia(e);
                d && Pc(d) ? f(Lf(a, d)) : f(cb(c, d));
                f = Mc(c, b);
                return R(e, of(c, wa(a.o), b.type, d, [f.x, f.y], b.which, b.button))
            }
            function cm(a) {
                var c = null
                  , b = a.o
                  , d = b.document;
                if (b.getSelection) {
                    d = void 0;
                    try {
                        d = b.getSelection()
                    } catch (g) {
                        return []
                    }
                    if (lb(d))
                        return [];
                    var e = "" + d;
                    c = d.anchorNode
                } else
                    d.selection && d.selection.createRange && (d = d.selection.createRange(),
                    e = d.text,
                    c = d.parentElement());
                if ("string" !== typeof e)
                    return [];
                try {
                    for (; c && 1 !== c.nodeType; )
                        c = c.parentNode
                } catch (g) {
                    return []
                }
                if (!c)
                    return [];
                d = pc(b, c) || qc(b, c, !0);
                c = c.getElementsByTagName("*");
                for (var f = 0; f < c.length && !d; )
                    d = c[f],
                    d = pc(b, d) || qc(b, d, !0),
                    f += 1;
                if (e !== Fe)
                    return Fe = e,
                    d = d ? C("", Ah(e.split(""))) : e,
                    e = wa(a.o),
                    0 === d.length ? d = b = "" : 100 >= d.length ? (b = d,
                    d = "") : 200 >= d.length ? (b = d.substr(0, 100),
                    d = d.substr(100)) : (b = d.substr(0, 97),
                    d = d.substr(d.length - 97)),
                    c = [],
                    Da(a.o, c, 29) ? a = [] : (y(c, e),
                    De(c, b),
                    De(c, d),
                    a = c),
                    a
            }
            function dm(a) {
                return R(hc(a), cm(a) || [])
            }
            function Bh(a) {
                return (a.shiftKey ? 2 : 0) | (a.ctrlKey ? 4 : 0) | (a.altKey ? 1 : 0) | (a.metaKey ? 8 : 0) | (a.ctrlKey || a.altKey ? 16 : 0)
            }
            function Ch(a) {
                var c = [];
                Ge || (Ge = !0,
                Fe && c.push.apply(c, Wl(a.o, wa(a.o))),
                ic(a.o, function() {
                    Ge = !1
                }, "fv.c"));
                return c
            }
            function Dh(a, c, b, d) {
                var e = bb(c);
                if (!e || Of(a, e))
                    return [];
                var f = e && kb("ym-record-keys", e)
                  , g = Nf(e);
                c = pc(a, e);
                var h = O(a);
                if (!f && (g && h.b("isEU") || qc(a, e)))
                    a = [];
                else {
                    f = cb(a, e);
                    h = wa(a);
                    g = [];
                    if (Da(a, g, 38))
                        a = [];
                    else {
                        y(g, h);
                        Ec(g, b);
                        xa(g, d);
                        a = e[pa];
                        if (!a || 0 > a)
                            a = 0;
                        y(g, a);
                        xa(g, c ? 1 : 0);
                        a = g
                    }
                    a = R(f, a)
                }
                return a
            }
            function em(a) {
                var c = a.o
                  , b = a.M
                  , d = b.keyCode
                  , e = Bh(b)
                  , f = []
                  , g = Ia(f);
                if ({
                    3: 1,
                    8: 1,
                    9: 1,
                    13: 1,
                    16: 1,
                    17: 1,
                    18: 1,
                    19: 1,
                    20: 1,
                    27: 1,
                    33: 1,
                    34: 1,
                    35: 1,
                    36: 1,
                    37: 1,
                    38: 1,
                    39: 1,
                    40: 1,
                    45: 1,
                    46: 1,
                    91: 1,
                    92: 1,
                    93: 1,
                    106: 1,
                    110: 1,
                    111: 1,
                    144: 1,
                    145: 1
                }[d] || 112 <= d && 123 >= d || 96 <= d && 105 >= d || e & 16)
                    19 === d && 4 === (e & -17) && (d = 144),
                    g(Dh(c, b, d, e | 16)),
                    He = !1,
                    ic(c, function() {
                        He = !0
                    }, "fv.kd"),
                    !(67 === d && e & 4) || e & 1 || e & 2 || g(Ch(a));
                return f
            }
            function fm(a) {
                var c = a.o;
                a = a.M;
                var b = [];
                He && !Ie && 0 !== a.which && (b.push.apply(b, Dh(c, a, a.charCode || a.keyCode, Bh(a))),
                Ie = !0,
                ic(c, function() {
                    Ie = !1
                }, "fv.kp"));
                return b
            }
            function Eh(a) {
                var c = a.o
                  , b = bb(a.M);
                if (!b || Rf(c, b))
                    return [];
                var d = [];
                if ("FORM" === b.nodeName) {
                    for (var e = b.elements, f = 0; f < e.length; f += 1)
                        ah(e[f]) || d.push.apply(d, cb(c, e[f]));
                    d.push.apply(d, $l(c, wa(a.o), b))
                }
                return d
            }
            function gm(a) {
                var c = a.flush;
                a = bb(a.M);
                "BODY" === za(a) && c()
            }
            function kd(a, c, b) {
                return function() {
                    var d = Ca(a, c)
                      , e = ha(arguments);
                    if (d)
                        return b.apply(void 0, e)
                }
            }
            function hm(a, c, b) {
                return function() {
                    var d = Ca(a, c)
                      , e = ha(arguments);
                    b.apply(void 0, e);
                    return d
                }
            }
            function im(a, c, b, d) {
                return function() {
                    for (var e = [], f = 0; f < arguments.length; f++)
                        e[f] = arguments[f];
                    f = Qd(function(g) {
                        return !1 === g
                    }, e);
                    return 0 < e.length && f || !b.length || !d ? d : q.apply(void 0, Q(function(g, h, k) {
                        return !1 === e[k] ? g : g.concat(function() {
                            for (var l = [], m = 0; m < arguments.length; m++)
                                l[m] = arguments[m];
                            return h.apply(void 0, R([a, c], l))
                        })
                    }, [], b))(d)
                }
            }
            function Ri(a) {
                try {
                    return a.toDataURL()
                } catch (c) {
                    return ""
                }
            }
            var cg = /^\s+|\s+$/g, Fh = Na(Array.prototype.join, "join"), C = Fh ? function(a, c) {
                return Fh.call(c, a)
            }
            : Hl, ea = B(function(a, c) {
                return a === c
            }), mc = B(function(a, c) {
                a(c);
                return c
            }), Ob = B(C), eb = B(function(a, c) {
                return c(a)
            }), lb = ea(null), X = ea(void 0), Gh = Na(Array.prototype.reduce, "reduce"), Q = Gh ? function(a, c, b) {
                return Gh.call(b, a, c)
            }
            : Bc, xc = B(Q), P = Gb(n), Mb = P("length"), ve = q, Cc, Gl = q(cd, ea("[object Array]")), ye = Object.prototype.hasOwnProperty, xe, lh = pb(window), jm = Gb(lh), Hh = Na(Function.prototype.bind, "bind"), E = Hh ? function() {
                var a = ha(arguments);
                return Hh.apply(a[0], R([a[1]], a.slice(2)))
            }
            : Dl, H = B(function(a, c) {
                return E.apply(void 0, R([c, null], a))
            }), w = B(function(a, c) {
                return H([a], c)
            }), ka = B(function(a, c) {
                return E(c[a], c)
            }), Ja = ka("test"), Ih = r(function(a) {
                a = n(a, "navigator") || {};
                var c = n(a, "userAgent") || "";
                return {
                    ob: -1 < (n(a, "vendor") || "").indexOf("Apple"),
                    Nb: c
                }
            }), Jh = r(w(/gecko/, function(a, c) {
                return -1 !== (n(c, "navigator.userAgent") || "").toLowerCase().search(a)
            })), Wc = r(function(a) {
                var c = n(a, "document.documentElement.style");
                a = n(a, "InstallTrigger");
                return !(!(c && "MozAppearance"in c) || Fa(a))
            }), Kh = Na(Array.prototype.map, "map"), K = Kh && xl(window, Array.prototype.map) ? function(a, c) {
                return c && 0 < c.length ? Kh.call(c, a) : []
            }
            : Cl, I = K, yb = Array.prototype.flatMap ? function(a, c) {
                return Array.prototype.flatMap.call(c, a)
            }
            : Bl, Oa = B(K), dl = Gb(K), Ua = Object.entries ? function(a) {
                return a ? Object.entries(a) : []
            }
            : Al, Ka = Object.keys ? Object.keys : mh, F = Object.assign || El, Kf = B(function(a, c) {
                return F({}, a, c)
            }), O = r(function(a) {
                a = a.Ya = a.Ya || {};
                var c = a._metrika = a._metrika || {};
                return {
                    qa: function(b, d) {
                        ye.call(c, b) || (c[b] = d);
                        return this
                    },
                    l: function(b, d) {
                        c[b] = d;
                        return this
                    },
                    b: function(b, d) {
                        var e = c[b];
                        return ye.call(c, b) || X(d) ? e : d
                    }
                }
            }), Qd = Array.prototype.every ? function(a, c) {
                return Array.prototype.every.call(c, a)
            }
            : function(a, c) {
                return Q(function(b, d) {
                    return b ? a(d) : !1
                }, !0, c)
            }
            , Lh = Na(Array.prototype.filter, "filter"), ma = Lh ? function(a, c) {
                return Lh.call(c, a)
            }
            : oh, Nb = B(ma), zb = gd(function(a, c) {
                return Array.prototype.find.call(c, a)
            }, function(a, c) {
                for (var b = 0; b < c.length; b += 1)
                    if (a.call(c, c[b], b))
                        return c[b]
            }, Z("find", Array.prototype.find)), V = Array.prototype.includes ? function(a, c) {
                return Array.prototype.includes.call(c, a)
            }
            : Fl, ib = Gb(V), ta = gd(function(a, c) {
                return Array.prototype.some.call(c, a)
            }, function(a, c) {
                for (var b = 0; b < c.length; b += 1)
                    if (b in c && a.call(c, c[b], b))
                        return !0;
                return !1
            }, Z("some", Array.prototype.some)), kh = Na(Array.from, "from"), Mh = r(pb), lf = B(function(a, c) {
                return Array.prototype.sort.call(c, a)
            }), Ia = B(function(a, c) {
                I(q(L, ka("push", a)), c);
                return a
            }), Vb = r(q(P("String.fromCharCode"), w("fromCharCode", Z), Yb)), jb = r(P("navigator.userAgent")), km = r(q(jb, Ja(/ipad|iphone|ipod/i))), Je = r(function(a) {
                return n(a, "navigator.platform") || ""
            }), hg = r(function(a) {
                a = Ih(a);
                var c = a.Nb;
                return a.ob && (!c.match(/Safari/) && c.match(/Mobile/) || c.match(/CFNetwork\/[0-9][0-9.]*.*Darwin\/[0-9][0-9.]*/) || -1 !== c.indexOf("FB_IAB") || -1 !== c.indexOf("FBAV") || -1 !== c.indexOf("OKApp") || -1 !== c.indexOf("GSA/"))
            }), Ke = r(function(a) {
                a = Ih(a);
                var c = a.Nb;
                return a.ob && !c.match("CriOS")
            }), be = r(q(jb, ka("test", /Android.*Version\/[0-9][0-9.]*\sChrome\/[0-9][0-9.]|Android.*Version\/[0-9][0-9.]*\s(?:Mobile\s)?Safari\/[0-9][0-9.]*\sChrome\/[0-9][0-9.]*|; wv\).*Chrome\/[0-9][0-9.]*\sMobile/))), lm = /Chrome\/(\d+)\./, mm = r(function(a) {
                return (a = (n(a, "navigator.userAgent") || "").match(lm)) && a.length ? 76 <= parseInt(a[1], 10) : !1
            }), Nh = r(function(a) {
                var c = (jb(a) || "").toLowerCase();
                a = Je(a);
                return !(-1 === c.indexOf("android") || -1 === c.indexOf(c, "mobile") || !/^android|linux armv/i.test(a))
            }), nm = "other none unknown wifi ethernet bluetooth cellular wimax mixed".split(" "), om = r(function(a) {
                var c = n(a, "navigator.connection.type");
                if (X(c))
                    return null;
                a = Mh(a)(c, nm);
                return -1 === a ? c : "" + a
            }), fd = r(q(P("document.addEventListener"), Yb)), Oh = r(function(a) {
                var c = n(a, "navigator") || {};
                return Q(function(b, d) {
                    return b || n(c, d)
                }, "", ["language", "userLanguage", "browserLanguage", "systemLanguage"])
            }), dg = r(function(a) {
                var c = n(a, "navigator") || {};
                a = Oh(a);
                Wa(a) || (a = "",
                c = n(c, "languages.0"),
                Wa(c) && (a = c));
                return a.toLowerCase().split("-")[0]
            }), Pb = r(function(a) {
                var c = !1;
                try {
                    c = a.top !== a
                } catch (b) {}
                return c
            }), pm = r(function(a) {
                var c = !1;
                try {
                    c = a.top.contentWindow || !0
                } catch (b) {}
                return c
            }), qm = r(function(a) {
                var c = !1;
                try {
                    c = a.navigator.javaEnabled()
                } catch (b) {}
                return c
            }), rm = r(function(a) {
                var c = "__webdriver_evaluate __selenium_evaluate __webdriver_script_function __webdriver_script_func __webdriver_script_fn __fxdriver_evaluate __driver_unwrapped __webdriver_unwrapped __driver_evaluate __selenium_unwrapped __fxdriver_unwrapped".split(" ")
                  , b = n(a, "external");
                b = -1 !== (n(b, "toString") ? "" + b.toString() : "").indexOf("Sequentum");
                var d = n(a, "document.documentElement")
                  , e = ["selenium", "webdriver", "driver"];
                return !!(ta(w(a, n), ["_selenium", "callSelenium", "_Selenium_IDE_Recorder"]) || ta(w(n(a, "document"), n), c) || b || d && ta(E(d.getAttribute, d), e))
            }), sm = r(function(a) {
                return !!(ta(w(a, n), ["_phantom", "__nightmare", "callPhantom"]) || /(PhantomJS)|(HeadlessChrome)/.test(jb(a)) || n(a, "navigator.webdriver") || n(a, "isChrome") && !n(a, "chrome"))
            }), tm = r(function(a) {
                return Qd(w(a, n), ["ia_document.shareURL", "ia_document.referrer"])
            }), um = r(function(a) {
                a = n(a, "navigator.plugins");
                return !!(a && Mb(a) && ta(q(P("name"), Ja(/Chrome PDF Viewer/)), a))
            }), vm = new RegExp(C("|", "yandex.com/bots;Googlebot;APIs-Google;Mediapartners-Google;AdsBot-Google;FeedFetcher-Google;Google-Read-Aloud;DuplexWeb-Google;Google Favicon;googleweblight;Mail.RU_Bot;StackRambler;Slurp;msnbot;bingbot;www.baidu.com/search/spi_?der.htm".split(";")).replace(/[./]/g, "\\$&")), sk = r(q(P("navigator.userAgent"), Ja(vm))), Le = r(function(a) {
                var c = jb(a) || ""
                  , b = c.match(/Mac OS X ([0-9]+)_([0-9]+)/);
                b = b ? [+b[1], +b[2]] : [0, 0];
                c = c.match(/iPhone OS ([1-9]+)_([0-9]+)/);
                return 14 <= (c ? +c[1] : 0) ? !0 : (km(a) || 10 < b[0] || 10 === b[0] && 13 <= b[1]) && Ke(a)
            }), wc = {
                construct: "Metrika",
                callbackPostfix: "",
                version: "bx1nzewshyqnl6m"
            }, wm = wc.construct, Me = fd(window), na = {
                Wb: 24226447,
                Rb: 26302566,
                Xb: 51533966,
                Zc: 65446441,
                ba: "https:",
                ua: "523",
                Ga: wm,
                Vb: Me ? 512 : 2048,
                Tb: Me ? 512 : 2048,
                Ub: Me ? 100 : 400,
                $c: 100,
                ad: "noindex"
            }, nb = {}, T = r(function(a) {
                return a.id + ":" + a.K
            }), va = {
                id: "id",
                eb: "ut",
                K: "type",
                Ra: "ldc",
                da: "nck",
                xa: "url",
                qc: "referrer"
            }, xm = /^\d+$/, Jb = {
                id: function(a) {
                    a = "" + (a || "0");
                    xm.test(a) || (a = "0");
                    try {
                        var c = parseInt(a, 10)
                    } catch (b) {
                        c = 0
                    }
                    return c
                },
                K: function(a) {
                    return "" + (a || 0 === a ? a : "0")
                },
                da: Boolean,
                eb: Boolean
            };
            va.va = "defer";
            Jb.va = Boolean;
            va.Uc = "yaDisableGDPR";
            va.Vc = "yaGDPRLang";
            va.exp = "experiments";
            va.Ka = "ecommerce";
            Jb.Ka = function(a) {
                if (a)
                    return !0 === a ? "dataLayer" : "" + a
            }
            ;
            va.H = "params";
            va.Fa = "userParams";
            va.ta = "accurateTrackBounce";
            va.Mb = "triggerEvent";
            Jb.Mb = Boolean;
            va.Ab = "sendTitle";
            Jb.Ab = function(a) {
                return !!a || X(a)
            }
            ;
            va.$a = "trackHash";
            Jb.$a = Boolean;
            va.kc = "directCampaign";
            va.cc = "clickmap";
            va.sa = "webvisor";
            Jb.sa = Boolean;
            va.Da = "trackLinks";
            va.lc = "enableAll";
            var Ph = Q(function(a, c) {
                var b = c[0];
                a[b] = {
                    ub: c[1],
                    yc: Jb[b]
                };
                return a
            }, {}, Ua(va))
              , ul = "hash host hostname href pathname port protocol search".split(" ")
              , zg = "ru ua by kz az kg lv md tj tm uz ee fr co.il com.ge com.am com.tr".split(" ")
              , mk = r(function(a) {
                a = J(a).hostname.split(".");
                return a[a.length - 1]
            })
              , Qh = r(function(a) {
                return -1 !== J(a).hostname.search(/(?:^|\.)(?:ya|yandex|beru|kinopoisk|edadeal)\.(?:\w+|com?\.\w+)$/)
            })
              , Yf = r(function(a) {
                return (a ? a.replace(/^www\./, "") : "").toLowerCase()
            })
              , zm = /^(.*\.)?((yandex(-team)?)\.(com?\.)?[a-z]+|(auto|kinopoisk|beru|bringly)\.ru|ya\.(ru|cc)|yadi\.sk|yastatic\.net|.*\.yandex|turbopages\.org|turbo\.site)$/
              , gg = r(function(a) {
                a = J(a).hostname;
                var c = !1;
                a && (c = -1 !== a.search(zm));
                return c
            })
              , Am = /^(.*\.)?((yandex(-team)?)\.(com?\.)?[a-z]+|(auto|kinopoisk|beru|bringly)\.ru|ya\.(ru|cc)|yadi\.sk|.*\.yandex|turbopages\.org|turbo\.site)$/
              , Zj = r(function(a) {
                a = J(a).hostname;
                var c = !1;
                a && (c = -1 !== a.search(Am));
                return c
            })
              , Bm = /(?:^|\.)(?:ya|yandex)\.(?:\w+|com?\.\w+)$/
              , Cm = r(function(a) {
                a = J(a).hostname;
                var c = !1;
                a && (c = -1 !== a.search(Bm));
                return c
            })
              , Ml = r(function(a) {
                var c = [];
                mm(a) && "https:" === J(a).protocol && (c.push("SameSite=None"),
                c.push("Secure"));
                return c
            })
              , hh = ["addEventListener", "removeEventListener"]
              , ih = ["attachEvent", "detachEvent"]
              , Dm = r(function(a) {
                var c = !1;
                if (!a.addEventListener)
                    return c;
                try {
                    var b = Object.defineProperty({}, "passive", {
                        get: function() {
                            c = !0;
                            return 1
                        }
                    });
                    a.addEventListener("test", D, b)
                } catch (d) {}
                return c
            })
              , Em = B(function(a, c) {
                return a ? F({
                    capture: !0,
                    passive: !0
                }, c || {}) : !!c
            })
              , qa = r(function(a) {
                function c(f, g, h) {
                    h = d(h);
                    f = B(f)(h);
                    I(f, g.split(","))
                }
                var b = [];
                a = Dm(a);
                var d = Em(a)
                  , e = {};
                return F(e, {
                    F: function(f, g, h, k) {
                        c(function(l, m) {
                            var p = [f, m, h, l];
                            b.push(p);
                            fh.apply(void 0, p.concat(!1))
                        }, g, k);
                        return E(e.Ea, e, f, g, h, k)
                    },
                    Ea: function(f, g, h, k) {
                        c(function(l, m) {
                            var p = [f, m, h]
                              , v = Q(function(t, z, u) {
                                ma(ib(z), p).length === p.length && (t = u);
                                return t
                            }, -1, b);
                            -1 !== v && (fh.apply(void 0, b[v].concat(!0)),
                            b.splice(v, 1))
                        }, g, k)
                    }
                })
            })
              , Fm = setTimeout;
            ba.prototype["catch"] = function(a) {
                return this.then(null, a)
            }
            ;
            ba.prototype.then = function(a, c) {
                var b = new this.constructor(Jl);
                qh(this, new Ll(a,c,b));
                return b
            }
            ;
            ba.prototype["finally"] = function(a) {
                var c = this.constructor;
                return this.then(function(b) {
                    return c.resolve(a()).then(function() {
                        return b
                    })
                }, function(b) {
                    return c.resolve(a()).then(function() {
                        return c.reject(b)
                    })
                })
            }
            ;
            ba.all = function(a) {
                return new ba(function(c, b) {
                    function d(h, k) {
                        try {
                            if (k && ("object" === typeof k || "function" === typeof k)) {
                                var l = k.then;
                                if ("function" === typeof l) {
                                    l.call(k, function(m) {
                                        d(h, m)
                                    }, b);
                                    return
                                }
                            }
                            e[h] = k;
                            0 === --f && c(e)
                        } catch (m) {
                            b(m)
                        }
                    }
                    if (!a || "undefined" === typeof a.length)
                        return b(new TypeError("Promise.all accepts an array"));
                    var e = Array.prototype.slice.call(a);
                    if (0 === e.length)
                        return c([]);
                    for (var f = e.length, g = 0; g < e.length; g++)
                        d(g, e[g])
                }
                )
            }
            ;
            ba.resolve = function(a) {
                return a && "object" === typeof a && a.constructor === ba ? a : new ba(function(c) {
                    c(a)
                }
                )
            }
            ;
            ba.reject = function(a) {
                return new ba(function(c, b) {
                    b(a)
                }
                )
            }
            ;
            ba.race = function(a) {
                return new ba(function(c, b) {
                    if (!a || "undefined" === typeof a.length)
                        return b(new TypeError("Promise.race accepts an array"));
                    for (var d = 0, e = a.length; d < e; d++)
                        ba.resolve(a[d]).then(c, b)
                }
                )
            }
            ;
            ba.ib = "function" === typeof setImmediate && function(a) {
                setImmediate(a)
            }
            || function(a) {
                Fm(a, 0)
            }
            ;
            ba.Zb = function(a) {
                "undefined" !== typeof console && console && console.warn("Possible Unhandled Promise Rejection:", a)
            }
            ;
            var G = window.Promise;
            G = Z("Promise", G) && !V(!1, [Z("resolve", G.resolve), Z("reject", G.reject), Z("all", G.all)]) ? G : ba;
            var fl = ["network error occurred", "send beacon", "Content Security Policy", "DOM Exception 18"], Fc, me = function(a) {
                return function(c) {
                    if (Fc)
                        return new Fc(c);
                    if (Z("Error", a.Error))
                        return Fc = a.Error,
                        new a.Error(c);
                    Fc = tl;
                    return new Fc(c)
                }
            }(window), el = Ja(/^err.kn/), ql = /[^a-z0-9.:-]/, rl = B(function(a, c, b) {
                var d, e = new a.XMLHttpRequest, f = b.J, g = F(b.fb ? (d = {},
                d.wmode = "7",
                d) : {}, b.na);
                return new G(function(h, k) {
                    e.open(b.Ob || "GET", c + "?" + gc(g), !0);
                    e.withCredentials = !1 !== b.Pb;
                    b.Xa && (e.timeout = b.Xa);
                    ve(Ua, Oa(function(m) {
                        e.setRequestHeader(m[0], m[1])
                    }))(b.ma);
                    var l = B(sl)(a, e, db(b.V), b.fb, b.Kc, h, k);
                    e.onreadystatechange = l;
                    try {
                        e.send(f)
                    } catch (m) {}
                }
                )
            }), Gm = r(function(a) {
                a = n(a, "document") || {};
                return ("" + (a.characterSet || a.charset || "")).toLowerCase()
            }), hb = r(q(P("document"), w("createElement", ub))), Sf = r(function(a) {
                var c = n(a, "Element.prototype");
                return c ? (a = zb(function(b) {
                    return Z(b, c[b])
                }, ["matches", "webkitMatchesSelector", "mozMatchesSelector", "msMatchesSelector", "oMatchesSelector"])) ? c[a] : null : null
            }), Hm = ea("INPUT"), ed = q(za, Hm), Im = ea("TEXTAREA"), nl = q(za, Im), Jm = ea("SELECT"), ol = q(za, Jm), bh = q(P("type"), Ja(/^(checkbox|radio)$/)), Wd = q(za, Ja(/^INPUT|SELECT|TEXTAREA$/)), Pc = q(za, Ja(/^INPUT|SELECT|TEXTAREA|BUTTON$/)), ml = ["submit", "image", "hidden"], Km = B(Lc), Rh = "A B BIG BODY BUTTON DD DIV DL DT EM FIELDSET FORM H1 H2 H3 H4 H5 H6 HR I IMG INPUT LI OL P PRE SELECT SMALL SPAN STRONG SUB SUP TABLE TBODY TD TEXTAREA TFOOT TH THEAD TR U UL ABBR AREA BLOCKQUOTE CAPTION CENTER CITE CODE CANVAS DFN EMBED FONT INS KBD LEGEND LABEL MAP OBJECT Q S SAMP STRIKE TT ARTICLE AUDIO ASIDE FOOTER HEADER MENU METER NAV PROGRESS SECTION TIME VIDEO NOINDEX NOBR MAIN svg circle clippath ellipse defs foreignobject g glyph glyphref image line lineargradient marker mask path pattern polygon polyline radialgradient rect set text textpath title".split(" "), Yg = r(function() {
                for (var a = 59, c = {}, b = 0; b < Rh.length; b += 1)
                    c[Rh[b]] = String.fromCharCode(a),
                    a += 1;
                return c
            }), Sh = B(Bd), Tg = {}, ue = {};
            Tg.p = 500;
            var Sg = {
                i: "id",
                n: "name",
                h: "href",
                ty: "type"
            };
            ue.h = !0;
            ue.c = !0;
            var Zb = {};
            Zb.p = Xg;
            Zb.c = function(a, c, b) {
                (a = Eb(n(c, "textContent"))) && b && (b = b(c),
                b.length && ta(q(P("textContent"), Eb, ea(a)), b) && (a = ""));
                ed(c) && (a = Eb(c.getAttribute && c.getAttribute("value") || a));
                return a
            }
            ;
            var cc, te = "button," + K(function(a) {
                return 'input[type="' + a + '"]'
            }, ["button", "submit", "reset", "file"]).join(",") + ",a", Rg = Sh(te), kl = (cc = {},
            cc.A = "h",
            cc.BUTTON = "i",
            cc.DIV = "i",
            cc.INPUT = "ty",
            cc), jl = B(function(a, c, b, d) {
                return new G(function(e, f) {
                    var g = Rb(a)
                      , h = c("img")
                      , k = q(w(h, Wb), w(db(d.V), f))
                      , l = bd(a, k, d.Xa || 3E3);
                    h.onerror = k;
                    h.onload = q(w(h, Wb), w(null, e), H([a, l], fb));
                    k = F({}, d.na);
                    delete k.wmode;
                    h.src = dh(b, d, k);
                    Ke(a) && (F(h.style, {
                        position: "absolute",
                        visibility: "hidden",
                        width: "0px",
                        height: "0px"
                    }),
                    g.appendChild(h))
                }
                )
            }), hl = B(function(a, c, b) {
                return new G(function(d, e) {
                    var f, g, h = "_ymjsp" + Ta(a), k = F((f = {},
                    f.callback = h,
                    f), b.na), l = H([a, h], il);
                    a[h] = function(p) {
                        try {
                            l(),
                            Wb(m),
                            d(p)
                        } catch (v) {
                            e(v)
                        }
                    }
                    ;
                    k.wmode = "5";
                    var m = kc(a, (g = {},
                    g.src = dh(c, b, k),
                    g));
                    if (!m)
                        return l(),
                        e(me("jp.s"));
                    f = w(m, Wb);
                    f = q(f, w(db(b.V), e));
                    g = bd(a, f, b.Xa || 1E4);
                    g = H([a, g], fb);
                    m.onload = g;
                    m.onerror = q(l, g, f)
                }
                )
            }), gl = B(function(a, c, b, d) {
                return new G(function(e, f) {
                    if (!n(a, "navigator.onLine"))
                        return f();
                    var g = F(d.na, {
                        "force-urlencoded": 1
                    });
                    return c(b + "?" + gc(g), d.J) ? e("") : f()
                }
                )
            }), Gc;
            var Ib = [Qg, 0, ac, se, yc];
            var Th = [ac];
            Th.push(se);
            var Uh = Hb(Th)
              , Hc = Hb([yc])
              , Lm = Hb([Qg, yc])
              , ld = Hb([0, ac, se, yc]);
            var ja = (Gc = {},
            Gc.h = Uh,
            Gc.f = Uh,
            Gc.er = Hc,
            Gc);
            ja.d = Hc;
            ja.s = Hb([ac]);
            ja.S = ja.s;
            ja.u = Hc;
            ja.m = Lm;
            ja["2"] = Ib;
            ja["6"] = Hb([0, ac]);
            ja.t = Ib;
            ja.a = ld;
            ja.n = Ib;
            ja["4"] = Hb([0, ac, yc]);
            ja.r = ld;
            ja["1"] = ld;
            ja.g = ld;
            ja.c = Hc;
            ja.e = Ib;
            ja.adb = Hc;
            ja["5"] = Ib;
            var re = r(function(a, c) {
                var b;
                (b = c ? ja[c] : Ib) || (b = []);
                b = Q(function(d, e, f) {
                    (e = e && e(a)) && d.push([f, e]);
                    return d
                }, [], b);
                b.length || eh();
                return b
            }, gb)
              , sb = ["0", "1", "2", "3"]
              , Tb = sb[0]
              , ae = sb[1]
              , Zk = sb[2]
              , de = K(q(L, ka("concat", "GDPR-ok-view-detailed-")), sb)
              , Sc = R("GDPR-ok GDPR-cross GDPR-cancel 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 GDPR-settings GDPR-ok-view-default GDPR-ok-view-detailed 21 22 23".split(" "), de, ["28"])
              , Yk = "3 13 14 15 16 17 28".split(" ")
              , Ng = q(Oa(P("ymetrikaEvent.type")), Nb(ib(Sc)))
              , Nl = /:\d+$/
              , Ol = r(function(a) {
                var c = (J(a).host || "").split(".");
                return 1 === c.length ? c[0] : Q(function(b, d, e) {
                    e += 1;
                    2 <= e && !b && (e = C(".", c.slice(-e)),
                    Gf(a, e) && (b = e));
                    return b
                }, null, c)
            })
              , Bb = r(Qb)
              , Xk = r(function(a) {
                Lg(a, "_ymBRC", "1");
                var c = "1" !== Kg(a, "_ymBRC");
                c || Mg(a, "_ymBRC");
                return c
            })
              , Ea = r(Jg)
              , md = r(Jg, function(a, c, b) {
                return "" + c + b
            })
              , Y = r(Hg)
              , Gg = id("r", function(a, c) {
                var b = Fg(a, c)
                  , d = b[0];
                return !b[1] && d
            })
              , ge = r(Eg, function(a, c) {
                return "{" + c.Ra + c.da
            })
              , yg = r(Ac, T)
              , Mm = B(function(a, c) {
                for (var b = []; !vc(c); ) {
                    var d = Tk(c);
                    a(d, function(e) {
                        return e(c)
                    });
                    b.push(d)
                }
                return b
            })
              , Bg = B(function(a, c, b) {
                var d = Y(a)
                  , e = d(U);
                return Mm(function(f, g) {
                    d(U) - e >= c && g(Uk)
                }, b)
            })
              , le = B(function(a, c) {
                if (c.ra)
                    sa(a, H([a, c], le), 0);
                else
                    for (; !vc(c); )
                        if (c.ra = !0,
                        c.qb(c.ya[c.X], w(c, Cg)),
                        c.X += 1,
                        vc(c)) {
                            le(a, c);
                            break
                        }
            })
              , yk = B(function(a, c, b) {
                return b(a, c)
            })
              , Pl = r(function(a) {
                if (a = hb(a))
                    return a("a")
            })
              , xg = B(function(a, c, b, d) {
                var e = a.document;
                je(a) || (c.Ea(e, "webkitvisibilitychange,visibilitychange", xg),
                b());
                return d
            })
              , ob = H([1, null], gd);
            H([1, 0], gd);
            var wg = r(function() {
                return {
                    lb: null,
                    La: []
                }
            }, T), Ra, Nm = [["domainLookupEnd", "domainLookupStart"], ["connectEnd", "connectStart"], ["responseStart", "requestStart"], ["responseEnd", "responseStart"], ["fetchStart"], ["redirectEnd", "redirectStart"], ["redirectCount"], ["domInteractive", "responseEnd"], ["domContentLoadedEventEnd", "domContentLoadedEventStart"], ["domComplete"], ["loadEventStart"], ["loadEventEnd", "loadEventStart"], ["domContentLoadedEventStart"]], vg = (Ra = {},
            Ra.responseEnd = 1,
            Ra.domInteractive = 1,
            Ra.domContentLoadedEventStart = 1,
            Ra.domContentLoadedEventEnd = 1,
            Ra.domComplete = 1,
            Ra.loadEventStart = 1,
            Ra.loadEventEnd = 1,
            Ra.unloadEventStart = 1,
            Ra.unloadEventEnd = 1,
            Ra.secureConnectionStart = 1,
            Ra), Om = r(hd), Pm = [["domainLookupEnd", "domainLookupStart"], ["connectEnd", "connectStart"], ["responseStart", "requestStart"], ["responseEnd", "responseStart"], ["fetchStart", "navigationStart"], ["redirectEnd", "redirectStart"], [function(a, c) {
                return n(c, "redirectCount") || n(a, "navigation.redirectCount")
            }
            ], ["domInteractive", "domLoading"], ["domContentLoadedEventEnd", "domContentLoadedEventStart"], ["domComplete", "navigationStart"], ["loadEventStart", "navigationStart"], ["loadEventEnd", "loadEventStart"], ["domContentLoadedEventStart", "navigationStart"]], Qm = r(hd), Ok = {
                "*": "+",
                "-": "/",
                dd: "=",
                "+": "*",
                "/": "-",
                "=": "_"
            }, Vh = q(id("i", function(a) {
                a = (n(a, "document.interestCohort") || D)();
                if (!a)
                    return null;
                var c = [];
                n(a, "then") && a.then(ka("push", c), D);
                return c
            }), P("0")), Wh = /\/$/, Rm = r(q(Y, eb(function(a) {
                return -(new a.o.Date).getTimezoneOffset()
            }))), Sm = q(Y, eb(function(a) {
                a = new a.o.Date;
                return C("", K(Wk, [a.getFullYear(), a.getMonth() + 1, a.getDate(), a.getHours(), a.getMinutes(), a.getSeconds()]))
            })), Tm = q(Y, eb(Zc)), Xh = r(q(Y, eb(function(a) {
                return a.R[0]
            }))), Um = r(Ac), Vm = r(Ac), Wm = r(function(a) {
                var c = n(a, "webkitRequestFileSystem");
                if (W(c) && !Nh(a))
                    return (new G(E(c, a, 0, 0))).then(function() {
                        var d = n(a, "navigator.storage") || {};
                        return d.estimate ? d.estimate() : {}
                    }).then(function(d) {
                        return (d = d.quota) && 12E7 > d ? !0 : !1
                    })["catch"](w(!0, L));
                if (Wc(a))
                    return c = n(a, "navigator.serviceWorker"),
                    G.resolve(X(c));
                c = n(a, "openDatabase");
                if (Ke(a) && W(c)) {
                    var b = !1;
                    try {
                        c(null, null, null, null)
                    } catch (d) {
                        b = !0
                    }
                    return G.resolve(b)
                }
                return G.resolve(!n(a, "indexedDB") && (n(a, "PointerEvent") || n(a, "MSPointerEvent")))
            }), Xm = /(\?|&)turbo_uid=([\w\d]+)($|&)/, Ym = r(function(a, c) {
                var b = Bb(a)
                  , d = J(a).search.match(Xm);
                return d && 2 <= d.length ? (d = d[2],
                c.da || b.l("turbo_uid", d),
                d) : (b = b.b("turbo_uid")) ? b : ""
            }), Zm = r(function(a) {
                return W(n(a, "yandex.getSiteUid")) ? a.yandex.getSiteUid() : null
            }), S, Ya, $m = r(function(a) {
                a = O(a);
                var c = a.b("counterNum", 0) + 1;
                a.l("counterNum", c);
                return c
            }, q(gb, T)), mb = (S = {},
            S.vf = w(wc.version, L),
            S.nt = om,
            S.fp = function(a, c, b) {
                if (b.C && b.C.nohit)
                    return null;
                c = T(c);
                b = Um(a);
                if (b[c])
                    return null;
                a: {
                    var d = Xh(a)
                      , e = n(a, "performance.getEntriesByType");
                    if (W(e)) {
                        if (a = ma(q(L, P("name"), ea("first-contentful-paint")), e.call(a.performance, "paint")),
                        a.length) {
                            a = a[0].startTime;
                            break a
                        }
                    } else {
                        e = n(a, "chrome.loadTimes");
                        if (W(e) && (e = e.call(a.chrome),
                        e = n(e, "firstPaintTime"),
                        d && e)) {
                            a = 1E3 * e - d;
                            break a
                        }
                        if (a = n(a, "performance.timing.msFirstPaint")) {
                            a -= d;
                            break a
                        }
                    }
                    a = void 0
                }
                return a ? (b[c] = a,
                Math.round(a)) : null
            }
            ,
            S.fu = function(a, c, b) {
                var d = b.C;
                if (!d)
                    return null;
                c = (n(a, "document.referrer") || "").replace(Wh, "");
                b = (d["page-ref"] || "").replace(Wh, "");
                d = d["page-url"];
                a = J(a).href !== d;
                c = c !== b;
                b = 0;
                a && c ? b = 3 : c ? b = 1 : a && (b = 2);
                return b
            }
            ,
            S.en = Gm,
            S.la = Oh,
            S.ut = function(a, c, b) {
                var d = b.za;
                (b = b.C) && (Cm(a) || c.eb || d) && (b.ut = "noindex");
                return null
            }
            ,
            S.v = w(na.ua, L),
            S.cn = $m,
            S.dp = function(a) {
                var c = O(a)
                  , b = c.b("bt", {});
                if (X(c.b("bt"))) {
                    var d = n(a, "navigator.getBattery");
                    try {
                        b.p = d ? d.call(a.navigator) : null
                    } catch (e) {}
                    c.l("bt", b);
                    b.p && b.p.then && b.p.then(function(e) {
                        b.Sc = e.charging && 0 === e.chargingTime
                    })
                }
                return b.Sc ? "1" : "0"
            }
            ,
            S.ls = r(function(a, c) {
                var b = md(a, c.id)
                  , d = Y(a)
                  , e = b.b("lsid");
                return +e ? e : (d = Ta(a, 0, d(U)),
                b.l("lsid", d),
                d)
            }, gb),
            S.hid = Ub,
            S.z = Rm,
            S.i = Sm,
            S.et = Tm,
            S.c = q(P("navigator.cookieEnabled"), ob),
            S.rn = q(L, Ta),
            S.rqn = function(a, c, b) {
                b = b.C;
                if (!b || b.nohit)
                    return null;
                a = md(a, c.id);
                c = (a.b("reqNum", 0) || 0) + 1;
                a.l("reqNum", c);
                if (a.b("reqNum") === c)
                    return c;
                a.ha("reqNum");
                return null
            }
            ,
            S.u = ge,
            S.tp = q(gb, function(a) {
                a = T(a);
                return !(!nb[a] || !nb[a].Oc)
            }, ob),
            S.tpid = q(gb, function(a) {
                a = T(a);
                return nb[a] && nb[a].Lb ? nb[a].Lb : void 0
            }),
            S.w = function(a) {
                a = Hd(a);
                return a[0] + "x" + a[1]
            }
            ,
            S.s = function(a) {
                var c = n(a, "screen");
                if (c) {
                    a = n(c, "width");
                    var b = n(c, "height");
                    c = n(c, "colorDepth") || n(c, "pixelDepth");
                    return C("x", [a, b, c])
                }
                return null
            }
            ,
            S.sk = P("devicePixelRatio"),
            S.ifr = q(Pb, ob),
            S.j = q(qm, ob),
            S.sti = function(a) {
                return Pb(a) ? pm(a) ? "1" : null : null
            }
            ,
            S);
            mb.pri = function(a) {
                if (be(a))
                    return null;
                var c = Vm(a)
                  , b = c.wb;
                X(b) && (c.wb = null,
                Wm(a).then(function(d) {
                    c.wb = d
                }));
                return b ? 1 : null
            }
            ;
            F(mb, (Ya = {},
            Ya.iss = q(rm, ob),
            Ya.hdl = q(sm, ob),
            Ya.iia = q(tm, ob),
            Ya.cpf = q(um, ob),
            Ya.ntf = r(function(a) {
                a: switch (n(a, "Notification.permission")) {
                case "denied":
                    a = !1;
                    break a;
                case "granted":
                    a = !0;
                    break a;
                default:
                    a = null
                }
                return lb(a) ? null : a ? 2 : 1
            }),
            Ya.eu = function(a) {
                return O(a).b("isEU")
            }
            ,
            Ya.ns = Xh,
            Ya.np = function(a) {
                if (Ta(a, 0, 100))
                    a = null;
                else {
                    a = Eb(Je(a), 100);
                    for (var c = [], b = 0; b < a.length; b++) {
                        var d = a.charCodeAt(b);
                        128 > d ? c.push(d) : (127 < d && 2048 > d ? c.push(d >> 6 | 192) : (c.push(d >> 12 | 224),
                        c.push(d >> 6 & 63 | 128)),
                        c.push(d & 63 | 128))
                    }
                    a = Ff(c)
                }
                return a
            }
            ,
            Ya.re = q(function(a, c) {
                return !c.da && Gg(a, c)
            }, ob),
            Ya));
            mb.ds = function(a, c, b) {
                b = b.C;
                if ((void 0 === b ? {} : b).nohit)
                    return null;
                a = pe(a);
                c = T(c);
                if (!a)
                    return null;
                b = n(a, "timing");
                if (!b)
                    return null;
                a = ug(a, b, Pm);
                c = Qm(c);
                return (c = tg(c, a)) && C(",", c)
            }
            ;
            mb.dsn = function(a, c, b) {
                b = b.C;
                if ((void 0 === b ? {} : b).nohit)
                    return null;
                a = pe(a);
                c = T(c);
                if (!a)
                    return null;
                b = null;
                if (W(a.getEntriesByType)) {
                    var d = n(a.getEntriesByType("navigation"), "0");
                    d && (b = d)
                }
                if (!b)
                    return null;
                a = ug(a, b, Nm);
                c = Om(c);
                return (c = tg(c, a)) && C(",", c)
            }
            ;
            mb.flo = Vh;
            mb.bu = Zm;
            mb.td = Ym;
            var Nk = Ka(mb), Yc = r(function() {
                return {
                    ja: {},
                    pending: {},
                    fa: {}
                }
            }), Ne = P("postMessage"), an = B(function(a, c, b, d) {
                var e, f = {
                    wa: Y(a)(U),
                    key: a.Math.random(),
                    dir: 0
                };
                b.length && (f.wa = parseInt(b[0], 10),
                f.key = parseFloat(b[1]),
                f.dir = parseInt(b[2], 10));
                F(d, c);
                c = (e = {
                    data: d
                },
                e.__yminfo = C(":", ["__yminfo", f.wa, f.key, f.dir]),
                e);
                return {
                    rb: f,
                    Jb: tb(a, c) || ""
                }
            }), bn = B(function(a, c, b, d, e) {
                c = c(d);
                var f = Yc(a)
                  , g = C(":", [c.rb.wa, c.rb.key]);
                if (Ne(b)) {
                    f.pending[g] = e;
                    try {
                        b.postMessage(c.Jb, "*")
                    } catch (h) {
                        delete f.pending[g];
                        return
                    }
                    sa(a, function() {
                        delete f.pending[g]
                    }, 5E3, "if.s")
                }
            }), cn = A("s.f", bn), dn = B(function(a, c, b, d, e, f) {
                var g = null
                  , h = null
                  , k = Yc(a)
                  , l = null;
                try {
                    g = Ab(a, f.data),
                    h = g.__yminfo,
                    l = g.data
                } catch (m) {
                    return
                }
                if (!Fa(h) && h.substring && "__yminfo" === h.substring(0, 8) && !Fa(l) && (g = h.split(":"),
                4 === g.length))
                    if (h = c.id,
                    c = g[1],
                    a = g[2],
                    g = g[3],
                    !Va(l) && l.type && "0" === g && l.counterId) {
                        if (!l.toCounter || l.toCounter == h) {
                            k = null;
                            try {
                                k = f.source
                            } catch (m) {}
                            !lb(k) && Ne(k) && (f = d.O(l.type, [f, l]),
                            e = K(q(L, Kf(e)), f.concat([{}])),
                            l = b([c, a, l.counterId], e),
                            k.postMessage(l.Jb, "*"))
                        }
                    } else
                        g === "" + h && Va(l) && ma(function(m) {
                            return !(!m.hid || !m.counterId)
                        }, l).length === l.length && (b = k.pending[C(":", [c, a])]) && b.apply(null, [f].concat(l))
            }), en = A("s.fh", dn), mg = r(function(a, c) {
                var b, d = ub("getElementsByTagName", n(a, "document")), e = Yc(a), f = Ne(a), g = Og(a), h = qa(a);
                if (!d || !f)
                    return null;
                d = d.call(a.document, "iframe");
                f = (b = {},
                b.counterId = c.id,
                b.hid = "" + Ub(a),
                b);
                Mk(a, g);
                b = an(a, f);
                var k = cn(a, b([]));
                I(function(l) {
                    var m = null;
                    try {
                        m = l.contentWindow
                    } catch (p) {}
                    m && k(m, {
                        type: "initToChild"
                    }, function(p, v) {
                        g.O("initToParent", [p, v])
                    })
                }, d);
                Pb(a) && k(a.parent, {
                    type: "initToParent"
                }, function(l, m) {
                    g.O("parentConnect", [l, m])
                });
                h.F(a, "message", en(a, c, b, g, f));
                return {
                    W: g,
                    ja: e.ja,
                    fa: e.fa,
                    Va: k
                }
            }, q(gb, T)), fn = B(function(a, c, b) {
                var d = b[a];
                d ? (d.Gc = c,
                d.zb = !0,
                d.yb ? d.yb(c) : d.$ = G.resolve(c)) : b[a] = {
                    $: G.resolve(c),
                    Gc: c,
                    zb: !0
                }
            }), Kk = B(function(a, c) {
                if (!c[a]) {
                    var b, d = new G(function(e) {
                        b = e
                    }
                    );
                    c[a] = {
                        yb: b,
                        $: d,
                        zb: !1
                    }
                }
                return c[a].$
            }), rg = r(q(Ac, eb)), Ik = /Firefox\/([0-9]+)/, gn = /\sYptp\/\d\.(\d+)\s/, Jk = /Edg\/(\d+)\./, Yh = r(function(a) {
                var c;
                a: {
                    if ((c = jb(a)) && (c = gn.exec(c)) && 1 < c.length) {
                        c = parseInt(c[1], 10);
                        break a
                    }
                    c = 0
                }
                return 50 <= c && 99 >= c || qg(a, 79) ? !1 : !Le(a) || hg(a)
            }), Oe = r(function(a, c, b) {
                var d = O(a);
                c = Ea(a);
                var e = [];
                b = H([a, b, d, c], Hk);
                var f = Yh(a) && !pg(a, 68);
                f || e.push(H([Lk, "pu", ""], b));
                f || c.Na || Le(a) || (e.push(H([Gk, "zzlc", "na"], b)),
                e.push(H([Fk, "cc", ""], b)));
                return e.length ? {
                    Z: function(g, h) {
                        if (0 === d.b("isEU"))
                            try {
                                I(q(L, fa), e)
                            } catch (k) {}
                        h()
                    },
                    L: function(g, h) {
                        var k = g.D;
                        if (k && 0 === d.b("isEU"))
                            try {
                                I(q(w(k), fa), e)
                            } catch (l) {}
                        h()
                    }
                } : {}
            }, function(a, c, b) {
                return T(b)
            }), Dk = ["0"], tc = r(function(a) {
                return Ea(a).b("retryReqs", {})
            }), ej = A("g.r", function(a) {
                var c = Y(a)
                  , b = tc(a);
                return q(Ua, Nb(function(d) {
                    return (d = d[1]) && d.ghid && d.ghid !== Ub(a) && d.time && d.time + 864E5 > c(U) && 2 >= d.browserInfo.rqnl
                }), Oa(function(d) {
                    var e = d[1];
                    return {
                        protocol: e.protocol,
                        host: e.host,
                        Ic: e.resource,
                        Fc: e.postParams,
                        H: e.params,
                        ac: e.browserInfo,
                        md: e.ghid,
                        time: e.time,
                        oa: parseInt(d[0], 10),
                        dc: e.counterId,
                        K: e.counterType
                    }
                }))(b) || []
            }), ce = [], Bk = B(function(a, c, b, d, e) {
                return (new G(function(f, g) {
                    var h = Ka(b)
                      , k = q(d.resolve ? d.resolve : L, mc(f))
                      , l = q(d.reject ? d.reject : L, mc(g));
                    d.resolve = k;
                    d.reject = l;
                    I(function(m) {
                        var p;
                        d.ab.push(m);
                        var v = b[m]
                          , t = sa(a, w(db(), l), 5100, "is.m");
                        c(v.window, F(e, (p = {},
                        p.toCounter = parseInt(m, 10),
                        p)), function(z, u) {
                            fb(a, t);
                            d.Db.push(m);
                            d.resolve && d.resolve(u)
                        })
                    }, h)
                }
                ))["catch"](x(a, "if.b"))
            }), Ck = B(function(a, c, b) {
                c = ma(function(d) {
                    return !V(b.info.counterId, d.ab)
                }, c);
                I(function(d) {
                    var e;
                    b.info.counterId && a((e = {},
                    e[b.info.counterId] = b,
                    e), d, d.data)
                }, c)
            }), Uc = r(lg, q(gb, T)), Ak = "ru en et fi lt lv pl".split(" "), Tc = [], eg = q(Ng, Oa(jm(Sc)), Ob(",")), fg = q(Nb(ib(Sc)), Mb, Boolean), rk = r(function(a, c) {
                var b = c.b("gdpr");
                return V(b, sb) ? "-" + b : ""
            }), Zh = r(hd), Ha, Sa, $h = {
                "mc.edadeal.ru": {
                    Aa: /^([^/]+\.)?edadeal\.ru$/,
                    Za: "ru"
                },
                "mc.yandexsport.ru": {
                    Aa: /^([^/]+\.)?yandexsport\.ru$/,
                    Za: "ru"
                },
                "mc.beru.ru": {
                    Aa: /^([^/]+\.)?beru\.ru$/,
                    Za: "ru"
                },
                "mc.kinopoisk.ru": {
                    Aa: /^([^/]+\.)?kinopoisk\.ru$/,
                    Za: "ru"
                }
            }, pk = (Ha = {},
            Ha.ka = "ge",
            Ha.ro = "md",
            Ha.tg = "tj",
            Ha.tk = "tm",
            Ha.et = "ee",
            Ha.hy = "com.am",
            Ha.he = "co.li",
            Ha.ky = "kg",
            Ha.uk = "ua",
            Ha.be = "by",
            Ha.tr = "com.tr",
            Ha.kk = "kz",
            Ha), ai = r(hd), nk = (Sa = {},
            Sa.am = "com.am",
            Sa.tr = "com.tr",
            Sa.ge = "com.ge",
            Sa.il = "co.il",
            Sa["\u0440\u0444"] = "ru",
            Sa["xn--p1ai"] = "ru",
            Sa["\u0443\u043a\u0440"] = "ua",
            Sa["xn--j1amh"] = "ua",
            Sa["\u0431\u0435\u043b"] = "by",
            Sa["xn--90ais"] = "by",
            Sa), hn = r(function() {
                var a = q(Nb(q(L, ea("ru"), Yb)), xc(function(c, b) {
                    c[b] = ["mc.yandex." + b];
                    return c
                }, {}))(zg);
                ve(Ua, Oa(function(c) {
                    c = c[0];
                    a[c] = [c]
                }))($h);
                return a
            }), jn = r(function(a) {
                var c = J(a).hostname;
                return (a = zb(function(b) {
                    return b[1].Aa.test(c)
                }, Ua($h))) ? a[0] : ""
            }), kn = B(function(a, c) {
                var b = Qh(c)
                  , d = ok(c)
                  , e = jn(c) || lk(c)
                  , f = Y(c)
                  , g = Ea(c)
                  , h = g.b("synced", {});
                b = b ? [e, d] : [];
                h && (b = ma(function(k) {
                    var l = (h[k] || 1) + 1440 < f(Xa);
                    l && delete h[k];
                    return l
                }, b));
                g.l("synced", h);
                return Q(function(k, l) {
                    I(function(m) {
                        k.push({
                            domain: m,
                            wc: l
                        })
                    }, a[l] || []);
                    return k
                }, [], b)
            }), ln = function(a, c) {
                return function(b) {
                    var d = hn()
                      , e = kn(d);
                    return Le(b) ? {} : {
                        L: function(f, g) {
                            var h = f.D
                              , k = O(b);
                            if (!Qh(b) || Pb(b) || !h || !h.b("pv"))
                                return g();
                            h = e(b);
                            if (!h.length)
                                return g();
                            if (k.b("startSync"))
                                ai(b).push(g);
                            else {
                                k.l("startSync", !0);
                                k = ce[0];
                                if (!k)
                                    return g();
                                k(b).then(H([b, h], a)).then(g, q(mc(g), x(b, c)))["catch"](D)
                            }
                        }
                    }
                }
            }(function(a, c) {
                var b = Y(a)
                  , d = O(a)
                  , e = Ea(a)
                  , f = re(a, "c")
                  , g = Xb(a, f);
                return Q(function(h, k) {
                    function l() {
                        var v = e.b("synced");
                        d.l("startSync", !1);
                        v && (v[k.wc] = p,
                        e.l("synced", v));
                        I(fa, ai(a))
                    }
                    var m = g({
                        V: ["sync.cook"]
                    }, [na.ba + "//" + k.domain + "/sync_cookie_image_check"]), p;
                    m.then(function() {
                        p = b(Xa);
                        l()
                    })["catch"](function() {
                        p = b(Xa) - 1435;
                        l()
                    });
                    m = w(m, L);
                    return h.then(m)
                }, G.resolve(""), c)["catch"](x(a, "ctl"))
            }, "sy.c"), mn = Ja(/^.+\.mtproxy\.yandex\.net$/), Vd = r(function(a) {
                if ("MetrikaPlayer" === a.name)
                    return !0;
                a = J(a).hostname;
                return mn(a)
            }), kk = /^[a-z][\w.+-]+:/i, bi = {}, Dd = B(function(a, c, b) {
                return C("x", K(q(L, ka("concat", "" + a), w(b, n)), c))
            }), nn = A("fip", function(a, c) {
                if (!Yh(a) || Wc(a)) {
                    var b = Ea(a);
                    if (!b.b("fip")) {
                        var d = q(Oa(q(function(e, f) {
                            return A("fip." + f, e)(a)
                        }, E(Ql, null, 210))), Ob("-"))(c);
                        b.l("fip", d)
                    }
                }
            }), La = q(Ka, P("0"));
            La({
                od: 1
            });
            La({
                jd: 1
            });
            var nd, ua = [ie, uc, Fb(), he], on = Fb("et w v z i u vf".split(" "));
            ua.push(ln);
            ua.unshift(function(a, c, b) {
                return {
                    Z: function(d, e) {
                        var f = Ca(a, b);
                        (f = f && f.userParams) && d.Fa && f(d.Fa);
                        e()
                    }
                }
            });
            ua.unshift(function(a, c, b) {
                return {
                    L: function(d, e) {
                        if (d.H && (jh(b, d.H),
                        !d.J && d.D && d.C)) {
                            var f = tb(a, d.H)
                              , g = Zh(a)
                              , h = d.D.b("pv");
                            f && !d.C.nohit && (h ? encodeURIComponent(f).length > na.Tb ? g.push([d.D, d.H]) : d.C["site-info"] = f : (d.J = f,
                            d.xc = !0))
                        }
                        e()
                    },
                    Z: function(d, e) {
                        var f = Zh(a)
                          , g = Ca(a, b)
                          , h = g && g.params;
                        h && (g = ma(q(P("0"), ea(d.D)), f),
                        I(function(k) {
                            h(k[1]);
                            k = Mh(a)(k, f);
                            f.splice(k, 1)
                        }, g));
                        e()
                    }
                }
            });
            ua.push(ee());
            ua.push(function(a) {
                return {
                    L: function(c, b) {
                        var d = c.D;
                        if (d) {
                            var e = O(a).b("adBlockEnabled");
                            e && d.l("adb", e)
                        }
                        b()
                    }
                }
            });
            ua.push(Oe);
            ua.push(function(a) {
                return {
                    L: function(c, b) {
                        var d = c.D
                          , e = Ea(a).b("fip");
                        e && d && d.l("fip", e);
                        b()
                    }
                }
            });
            var oa = (nd = {},
            nd.h = ua,
            nd.er = [],
            nd);
            oa.adb = [];
            var ci = [Fb(), he];
            ci.push(Oe);
            oa.f = ci;
            oa["2"] = ua;
            oa["1"] = function(a, c) {
                return ma(q(ib(c), Yb), a)
            }(ua, [he]);
            oa.a = ua;
            oa.g = ua;
            oa.e = ua;
            var di = [uc];
            di.push(function() {
                return function(a) {
                    return {
                        L: function(c, b) {
                            var d = c.D
                              , e = void 0 === d ? la() : d
                              , f = c.oa
                              , g = tc(a);
                            d = e.b("rqnl", 0) + 1;
                            e.l("rqnl", d);
                            if (e = n(g, C(".", [f, "browserInfo"])))
                                e.rqnl = d,
                                fe(a);
                            b()
                        },
                        Z: function(c, b) {
                            ng(a, c);
                            b()
                        }
                    }
                }
            }());
            oa.r = di;
            oa["6"] = [uc];
            oa.t = ua;
            oa["4"] = [on];
            var Pe = [ie, uc, Fb()];
            Pe.push(ee());
            Pe.push(Oe);
            oa.n = Pe;
            oa.d = [Fb(["hid", "u", "v", "vf"])];
            oa.m = [Fb(["u", "v", "vf"]), ee()];
            oa.s = [];
            oa.u = [];
            oa.S = [Fb(["v", "hid", "u", "vf", "rn"])];
            ua.unshift(function(a, c, b) {
                return {
                    L: function(d, e) {
                        var f = d.D
                          , g = d.C;
                        if (!f || !g)
                            return e();
                        !bi[b.id] && f.b("pv") && b.exp && !g.nohit && (g.exp = b.exp,
                        bi[b.id] = !0);
                        f = g["page-ref"];
                        var h = g["page-url"];
                        f && h !== f ? g["page-ref"] = bg(a, f) : delete g["page-ref"];
                        g["page-url"] = bg(a, h).slice(0, na.Vb);
                        return e()
                    }
                }
            });
            oa["5"] = ma(q(ib([ie, uc]), Yb), ua);
            var od, ei = E(G.reject, G, db()), ca = (od = {},
            od.h = Aa,
            od.er = w(ei, L),
            od);
            ca.a = Aa;
            ca["4"] = og;
            ca.f = Aa;
            ca.n = Aa;
            ca["6"] = function(a, c, b) {
                var d = Xb(a, c);
                return function(e) {
                    return ke(a, b, e, !0).then(H([e, ["https://mc.yandex.md/cc"], {
                        fb: !0,
                        Pb: !1
                    }], d))
                }
            }
            ;
            ca["1"] = Aa;
            ca.n = Aa;
            ca.c = Xb;
            ca.g = Aa;
            ca.e = Aa;
            ca["2"] = Aa;
            ca.r = function(a, c, b) {
                var d = og(a, c, b)
                  , e = Aa(a, c, b);
                return function(f, g, h) {
                    return "webvisor" === h ? d(f, g, f.C["wv-part"]) : e(f, g)
                }
            }
            ;
            ca.adb = Vc;
            ca.s = Xb;
            ca.S = Aa;
            ca.u = Xb;
            ca.m = function(a, c, b) {
                return function(d, e) {
                    var f, g = d.C;
                    g = (f = {},
                    f["page-url"] = g && g["page-url"] || "",
                    f);
                    f = F(d, {
                        C: F(d.C || {}, g)
                    });
                    return Vc(a, c, b)(f, "clmap/" + e.id)["catch"](x(a, "c.m"))
                }
            }
            ;
            ca.d = Aa;
            ca.t = Aa;
            ca["5"] = Aa;
            var da = A("g.sen", function(a, c, b) {
                var d = re(a, c);
                b = hk(a, c, b);
                var e = ca[c]
                  , f = e ? e(a, d, b) : Aa(a, d, b);
                return function() {
                    var g = ha(arguments)
                      , h = g.slice(1);
                    g = F(g[0], {
                        V: [c]
                    });
                    return f.apply(void 0, R([g], h))
                }
            }, ei), pd = r(function(a) {
                a = n(a, "console");
                var c = n(a, "log");
                c = Na(c, "log") || D;
                var b = n(a, "warn")
                  , d = n(a, "error");
                c = E(c, a);
                return {
                    log: c,
                    error: Z("error", d) ? E(d, a) : c,
                    warn: Z("warn", b) ? E(b, a) : c
                }
            }), $f = r(q(P("id"), ib([26812653])), T), pn = {
                log: D,
                warn: D,
                error: D
            }, qn = A("dc.init", function(a) {
                var c = J(a)
                  , b = pd(a)
                  , d = Bb(a)
                  , e = Bb(a);
                var f = J(a);
                e = "1" === e.b("debug");
                var g = -1 < f.href.indexOf("_ym_debug=1")
                  , h = a._ym_debug;
                f = h || g;
                ta(Boolean, [e, h, g]);
                f && !e && d.l("debug", "1", void 0, c.host);
                return Ud(a) || !f && !e ? pn : b
            }), ag = r(qn), rn = x(window, "h.p", function(a, c) {
                var b, d, e = da(a, "h", c), f = c.xa || "" + J(a).href, g = c.qc || a.document.referrer, h = {
                    D: la((b = {},
                    b.pv = 1,
                    b)),
                    C: (d = {},
                    d["page-url"] = f,
                    d["page-ref"] = g,
                    d)
                };
                h.H = c.H;
                h.Fa = c.Fa;
                c.va && h.C && (h.C.nohit = "1");
                return e(h, c).then(function(k) {
                    if (k) {
                        c.va || qb(a, c, "PageView. Counter " + c.id + ". URL: " + f + ". Referrer: " + g, c.H)();
                        var l = T(c)
                          , m = Hg(a);
                        k = F({
                            pc: m(U)
                        }, k);
                        rg()(fn(l, k))
                    }
                })["catch"](x(a, "h.g.s"))
            }), Ic = r(Ac, T), sn = A("p.ar", function(a, c) {
                var b = da(a, "a", c);
                return function(d, e, f, g, h, k) {
                    var l, m, p = {
                        C: {},
                        D: la((l = {},
                        l.pv = 1,
                        l.ar = 1,
                        l))
                    };
                    d && (e = lc(e) ? {
                        title: e.title,
                        xb: e.referer,
                        H: e.params,
                        ca: e.callback,
                        o: e.ctx
                    } : {
                        title: e,
                        xb: f,
                        H: g,
                        ca: h,
                        o: k
                    },
                    f = Ic(c),
                    f.url !== d && (f.Hc = f.url,
                    f.url = d),
                    d = d || J(a).href,
                    f = e.xb || f.Hc || a.document.referrer,
                    g = qb(a, c, "PageView. Counter " + c.id + ". URL: " + d + ". Referrer: " + f, e.H),
                    b(F(p, {
                        H: e.H,
                        title: e.title,
                        C: F(p.C, (m = {},
                        m["page-url"] = d,
                        m["page-ref"] = f,
                        m))
                    }), c).then(g)["catch"](x(a, "p.ar.s")).then(H([a, E(e.ca || D, e.o)], rb)))
                }
            }), tn = function() {
                function a(c, b, d) {
                    this.Ua = 1;
                    this.gb = 5E3;
                    this.o = c;
                    this.Gb = b;
                    this.Mc = d
                }
                a.prototype.Ib = function() {
                    sa(this.o, q(E(this.flush, this), E(this.Ib, this)), this.gb, "b.f")
                }
                ;
                a.prototype.send = function(c, b) {
                    this.Mc(c, b || [], this.Ua);
                    this.Ua += 1
                }
                ;
                a.prototype.push = function() {}
                ;
                a.prototype.flush = function() {}
                ;
                return a
            }(), Zf = B(function(a, c) {
                return c[a] || {}
            }), gk = B(function(a, c, b) {
                var d = Zf(a, b);
                b[a] = F(d, c)
            }), un = B(function(a, c) {
                delete c[a]
            }), vn = A("c.c.cc", function(a) {
                var c = O(a)
                  , b = q(w(a, Rc), fa, function(d) {
                    var e;
                    return F({}, d, (e = {},
                    e.oldCode = !!a.ya_cid,
                    e.clickmap = d.clickmap && !!d.clickmap,
                    e))
                });
                return x(a, "g.c.cc", q(E(c.b, c, "counters", {}), Ka, w(b, K)))
            }), wn = A("gt.c.rs", function(a, c) {
                var b, d = T(c), e = sc(a, d), f = c.id, g = c.K, h = c.cc, k = c.sa, l = c.$a;
                d = q(w(d, un), Zd(a));
                e((b = {},
                b.id = f,
                b.type = +g,
                b.clickmap = h,
                b.webvisor = !!k,
                b.trackHash = !!l,
                b));
                return d
            }), th, xn = A("th.e", function(a, c) {
                function b() {
                    f || (h = rc(a, "onhashchange") ? qa(a).F(a, "hashchange", g) : Rl(a, g))
                }
                var d = da(a, "t", c)
                  , e = sc(a, T(c))
                  , f = !1
                  , g = x(a, "h.h.ch", E(Sl, null, a, c, d))
                  , h = D;
                c.$a && (b(),
                f = !0);
                return {
                    Pc: x(a, "tr.hs.h", function(k) {
                        var l;
                        k ? b() : h();
                        f = !!k;
                        e((l = {},
                        l.trackHash = f,
                        l))
                    }),
                    unsubscribe: h
                }
            }), yn = {
                1882689622: 1,
                2318205080: 1,
                3115871109: 1,
                3604875100: 1,
                339366994: 1,
                2890452365: 1,
                849340123: 1,
                173872646: 1,
                2343947156: 1,
                655012937: 1,
                3724710748: 1,
                3364370932: 1,
                1996539654: 1,
                2065498185: 1,
                823651274: 1,
                12282461: 1,
                1555719328: 1,
                1417229093: 1,
                138396985: 1
            }, uh = 1, Ce = {}, jd = {}, Bn = A("nb.p", function(a, c) {
                function b(M) {
                    k() || (M = "number" === typeof M ? M : 15E3,
                    M = Ul(a, d(!1), M),
                    t = M.id,
                    u = M.kb,
                    l())
                }
                function d(M) {
                    return function(ia) {
                        var Ga, Qa, wb;
                        void 0 === ia && (ia = (Ga = {},
                        Ga.ctx = {},
                        Ga.callback = D,
                        Ga));
                        if (M || !v && !h.Na) {
                            v = !0;
                            l();
                            t && Tl(a, t);
                            var qd = m(U);
                            Ga = (parseInt(h.b("lastHit"), 10) || 0) < qd - 18E5;
                            var zn = .1 > Math.random();
                            h.l("lastHit", qd);
                            qd = la((Qa = {},
                            Qa.nb = "1",
                            Qa.cl = z,
                            Qa.ar = "1",
                            Qa));
                            Qa = Ic(c);
                            Qa = {
                                C: (wb = {},
                                wb["page-url"] = Qa.url || J(a).href,
                                wb),
                                D: qd
                            };
                            wb = pd(a).warn;
                            !ia.callback && ia.ctx && wb('"callback" argument missing');
                            (M || Ga || zn || !Qk(a.location.href, a.document.referrer)) && f(Qa, c).then(function() {
                                if (!M) {
                                    var dc = .002, ec = c.id === na.Wb ? 1 : .002, fc, rd, Qe, sd, Re;
                                    void 0 === dc && (dc = 1);
                                    void 0 === ec && (ec = 1);
                                    var Jc = a.performance;
                                    if (Jc && W(Jc.getEntriesByType) && (dc = Math.random() > dc,
                                    ec = Math.random() > ec,
                                    !dc || !ec)) {
                                        Jc = a.performance.getEntriesByType("resource");
                                        for (var td = {}, Se = {}, ud = {}, Te = 0; Te < Jc.length; Te += 1) {
                                            var Za = Jc[Te]
                                              , vd = Za.name.replace(/^https?:\/\//, "").split("?")[0]
                                              , An = Xc(vd)
                                              , fi = (fc = {},
                                            fc.dns = Math.round(Za.domainLookupEnd - Za.domainLookupStart),
                                            fc.tcp = Math.round(Za.connectEnd - Za.connectStart),
                                            fc.duration = Math.round(Za.duration),
                                            fc.response = Math.round(Za.responseEnd - Za.requestStart),
                                            fc);
                                            "script" !== Za.initiatorType || dc || (Se[vd] = F(fi, (rd = {},
                                            rd.name = Za.name,
                                            rd.decodedBodySize = Za.decodedBodySize,
                                            rd)));
                                            !yn[An] || td[vd] || ec || (td[vd] = F(fi, (Qe = {},
                                            Qe.pages = a.location.href,
                                            Qe)))
                                        }
                                        Ka(td).length && (ud.timings8 = td);
                                        Ka(Se).length && (ud.scripts = Se);
                                        if (Ka(ud).length)
                                            da(a, "d", c)({
                                                D: la((sd = {},
                                                sd.ar = "1",
                                                sd.pv = "1",
                                                sd)),
                                                J: tb(a, ud) || void 0,
                                                C: (Re = {},
                                                Re["page-url"] = a.location && "" + a.location.href,
                                                Re)
                                            }, {
                                                id: na.Xb,
                                                K: "0"
                                            })["catch"](x(a, "r.tim.ng2"))
                                    }
                                }
                            }).then(H([a, E(ia.callback || D, ia.ctx)], rb), x(a, "l.o.l"))
                        }
                    }
                }
                var e, f = da(a, "n", c), g = T(c), h = md(a, c.id), k = w(Rc(a, g), q(fa, P("accurateTrackBounce"))), l = w((e = {},
                e.accurateTrackBounce = !0,
                e), sc(a, g)), m = Y(a), p = m(U), v = !1, t = 0, z = 0, u;
                Ba(a, c, function(M) {
                    z = M.pc - p
                });
                c.ta && b(c.ta);
                return {
                    zc: d(!0),
                    ta: b,
                    Ja: u
                }
            }), Ue = ["yandex_metrika_callback" + wc.callbackPostfix, "yandex_metrika_callbacks" + wc.callbackPostfix], Cn = A("cb.i", function(a) {
                var c = Ue[0]
                  , b = Ue[1];
                if (W(a[c]))
                    a[c]();
                "object" === typeof a[b] && I(function(d, e) {
                    a[b][e] = null;
                    rb(a, d)
                }, a[b]);
                I(function(d) {
                    try {
                        delete a[d]
                    } catch (e) {
                        a[d] = void 0
                    }
                }, Ue)
            }), gi = {
                nd: Ja(/[/&=?#]/)
            }, Cd = A("go.in", function(a, c, b, d) {
                void 0 === b && (b = "goal");
                return function(e, f, g, h) {
                    var k, l;
                    if (!(!e || gi[b] && gi[b](e))) {
                        var m = f
                          , p = g || D;
                        W(f) && (p = f,
                        m = void 0,
                        h = g);
                        f = qb(a, c, "Reach goal. Counter: " + c.id + ". Goal id: " + e, m);
                        g = "goal" === b;
                        var v = da(a, "g", c);
                        var t = b;
                        var z = J(a);
                        var u = z.hostname;
                        z = z.href;
                        var M = Ic(c).url;
                        M && (z = jc(a, M),
                        u = z.hostname,
                        z = z.href);
                        t = [t + "://" + u + "/" + e, z || ""];
                        e = t[0];
                        t = t[1];
                        v({
                            H: m,
                            D: la((k = {},
                            k.ar = 1,
                            k)),
                            C: (l = {},
                            l["page-url"] = e,
                            l["page-ref"] = t,
                            l)
                        }, c).then(q(g ? f || D : D, d || D))["catch"](x(a, "g.s")).then(E(rb, null, a, E(p, h)))
                    }
                }
            }), ek = /^ *(data|javascript):/i, Xf = new RegExp(C("", ["\\.(" + C("|", "3gp 7z aac ac3 acs ai avi ape apk asf bmp bz2 cab cdr crc32 css csv cue divx dmg djvu? doc(x|m|b)? emf eps exe flac? flv iso swf gif t?gz jpe?g? js m3u8? m4a mp(3|4|e?g?) m4v md5 mkv mov msi ods og(g|m|v) psd rar rss rtf sea sfv sit sha1 svg tar tif?f torrent ts txt vob wave? wma wmv wmf webm ppt(x|m|b)? xls(x|m|b)? pdf phps png xpi g?zip".split(" ")) + ")$"]),"i"), Dn = B(function(a, c) {
                Wa(c) ? a.push(c) : I(q(L, ka("push", a)), c)
            }), En = A("cl.p", function(a, c) {
                function b(m, p, v, t) {
                    void 0 === t && (t = {});
                    v ? Qc(a, c, {
                        url: v,
                        Pa: !0,
                        Oa: m,
                        za: p,
                        sender: d,
                        o: t.ctx,
                        ca: t.callback,
                        title: t.title,
                        H: t.params
                    }, qb(a, c, (m ? "File" : "Ext link") + ". Counter " + c.id + ". Url: " + v, t)) : f.warn("Empty link")
                }
                var d = da(a, "2", c)
                  , e = []
                  , f = pd(a)
                  , g = T(c)
                  , h = x(a, "s.s.tr", w(sc(a, g), fk));
                g = {
                    o: a,
                    hc: c,
                    oc: e,
                    sender: d,
                    globalStorage: O(a),
                    ec: md(a, c.id),
                    tc: Ub(a),
                    Qc: w(Rc(a, g), q(fa, P("trackLinks")))
                };
                g = x(a, "cl.p.c", w(g, ck));
                g = qa(a).F(a, "click", g);
                c.Da && h(c.Da);
                var k = x(a, "file.clc", H([!0, !1], b))
                  , l = x(a, "e.l.l.clc", H([!1, !0], b));
                e = x(a, "add.f.e.clc", Dn(e));
                return {
                    file: k,
                    mc: l,
                    $b: e,
                    Da: h,
                    Ja: g
                }
            }), Fn = [[{
                host: "http://127.0.0.1",
                port: 30102
            }, {
                host: "http://127.0.0.1",
                port: 29009
            }], [{
                host: "https://yandexmetrica.com",
                port: 30103
            }, {
                host: "https://yandexmetrica.com",
                port: 29010
            }]], Gn = [[{
                host: "https://yandexmetrica.com",
                port: 30103
            }], [{
                host: "https://yandexmetrica.com",
                port: 29010
            }]], ak = {
                C: {
                    t: 'UV|L7,!"T[rwe&D_>ZIb\\aW#98Y.PC6k'
                }
            }, Tf = {
                id: 42822899,
                K: "0"
            }, Wf = id("csp", function(a, c) {
                return da(a, "s", c)({}, ["https://ymetrica1.com/watch/3/1"])
            }), Vf = q(P("settings.pcs"), ea("1")), Hn = A("s", function(a, c) {
                return Ba(a, c, function(b) {
                    var d = Y(a)
                      , e = bk(a, b.userData, c)
                      , f = Nh(a)
                      , g = q(Je, ib(["iPhone", "iPad"]))(a);
                    return (f || g) && Yj(a, d, c, e, b).then(function() {
                        if (f)
                            var h = Fn;
                        else if (g)
                            h = Gn;
                        else
                            return;
                        return Wj(a, h, c, e, d)
                    }, D)
                })
            }), Rj = B(kb)("(ym-disable-clickmap|ym-clickmap-ignore)"), In = A("clm.p", function(a, c) {
                if (Vb(a))
                    return D;
                var b = da(a, "m", c), d = T(c), e = Y(a), f = e(U), g = w(Rc(a, d), q(fa, P("clickmap"))), h, k = null;
                d = x(a, "clm.p.c", function(l) {
                    var m = g();
                    if (m) {
                        var p = "object" === typeof m ? m : {}
                          , v = p.filter;
                        m = p.isTrackHash || !1;
                        var t = K(function(u) {
                            return ("" + u).toUpperCase()
                        }, p.ignoreTags || []);
                        X(h) && (h = p.quota || null);
                        var z = !!p.quota;
                        l = {
                            element: Sj(a, l),
                            position: Mc(a, l),
                            button: Tj(l),
                            time: e(U)
                        };
                        p = J(a).href;
                        if (Qj(a, l, k, t, v)) {
                            if (z) {
                                if (!h)
                                    return;
                                --h
                            }
                            t = dd(a, l.element);
                            v = t[0];
                            t = t[1];
                            z = we(a, l.element);
                            v = ["rn", Ta(a), "x", Math.floor(65535 * (l.position.x - z.left) / (v || 1)), "y", Math.floor(65535 * (l.position.y - z.top) / (t || 1)), "t", Math.floor((l.time - f) / 100), "p", Xg(a, l.element), "X", l.position.x, "Y", l.position.y];
                            v = C(":", v);
                            m && (v += ":wh:1");
                            Pj(a, p, v, b, c);
                            k = l
                        }
                    }
                });
                return qa(a).F(n(a, "document"), "click", d)
            }), Jn = r(function(a) {
                var c = O(a)
                  , b = c.b("isEU");
                if (X(b)) {
                    var d = parseInt(nc(a, "is_gdpr") || "", 10);
                    if (V(d, [0, 1]))
                        c.l("isEU", d),
                        b = !!d;
                    else if (a = Ea(a).b("wasSynced"),
                    a = n(a, "params.eu"))
                        c.l("isEU", a),
                        b = !!a
                }
                return b
            }, function(a) {
                return O(a).b("isEU")
            }), Kn = A("i.e", Jn), Ln = function() {
                function a(c, b) {
                    this.o = c;
                    this.rc = b
                }
                a.prototype.Eb = function(c) {
                    return Sk(yb(E(this.Fb, this), c))
                }
                ;
                a.prototype.Fb = function(c, b) {
                    var d = this
                      , e = []
                      , f = this.rc(this.o, b && b.type, c.type);
                    f && (e = yb(function(g) {
                        return g({
                            o: d.o,
                            M: c
                        }) || []
                    }, f));
                    return e
                }
                ;
                a.prototype.sc = function(c) {
                    return c.length
                }
                ;
                a.prototype.isEnabled = function() {
                    return !0
                }
                ;
                return a
            }(), Ej = function(a) {
                function c(b, d, e) {
                    b = a.call(this, b, d, e) || this;
                    b.buffer = [];
                    b.Sb = 7500;
                    b.gb = 3E4;
                    b.Ib();
                    return b
                }
                Il(c, a);
                c.prototype.push = function(b, d) {
                    var e = this.Gb.Fb(b, d);
                    Ia(this.buffer, e);
                    this.Gb.sc(this.buffer) > this.Sb && this.flush()
                }
                ;
                c.prototype.flush = function() {
                    var b = this.buffer;
                    b.length && (this.send(b),
                    this.buffer = [])
                }
                ;
                return c
            }(tn), pa = "metrikaId_" + Math.random(), Cb = {
                Ha: 0
            }, hi = "first(-|\\.|_|\\s){0,2}name last(-|\\.|_|\\s){0,2}name zip postal phone address passport (bank|credit)(-|\\.|_|\\s){0,2}card card(-|\\.|_|\\s){0,2}number card(-|\\.|_|\\s){0,2}holder cvv card(-|\\.|_|\\s){0,2}exp card(-|\\.|_|\\s){0,2}name card.*month card.*year card.*month card.*year password email birth(-|\\.|_|\\s){0,2}(day|date) second(-|\\.|_|\\s){0,2}name third(-|\\.|_|\\s){0,2}name patronymic middle(-|\\.|_|\\s){0,2}name birth(-|\\.|_|\\s){0,2}place house street city flat state contact.*".split(" "), Nj = /ym-hide-content/, Oj = /ym-show-content/, Lj = new RegExp("(" + C("|", hi) + ")","i"), wh = /^(password|passwd|pswd)$/, vh = ["ym-disable-keys", "-metrika-nokeys"], Vl = "(" + C("|", vh) + ")", Mj = new RegExp("(" + C("|", hi.concat("\u0438\u043c\u044f \u0444\u0430\u043c\u0438\u043b\u0438\u044f \u043e\u0442\u0447\u0435\u0441\u0442\u0432\u043e \u0438\u043d\u0434\u0435\u043a\u0441 \u0442\u0435\u043b\u0435\u0444\u043e\u043d \u0430\u0434\u0440\u0435\u0441 \u043f\u0430\u0441\u043f\u043e\u0440\u0442 \u043d\u043e\u043c\u0435\u0440(-|\\.|_|\\s){0,2}\u043a\u0430\u0440\u0442\u044b \u0434\u0430\u0442\u0430(-|\\.|_|\\s){0,2}\u0440\u043e\u0436\u0434\u0435\u043d\u0438\u044f \u0434\u043e\u043c \u0443\u043b\u0438\u0446\u0430 \u043a\u0432\u0430\u0440\u0442\u0438\u0440\u0430 \u0433\u043e\u0440\u043e\u0434 \u043e\u0431\u043b\u0430\u0441\u0442\u044c".split(" "))) + ")","i"), Yl = r(function() {
                var a;
                return a = {},
                a.A = 1,
                a.ABBR = 2,
                a.ACRONYM = 3,
                a.ADDRESS = 4,
                a.APPLET = 5,
                a.AREA = 6,
                a.B = 7,
                a.BASE = 8,
                a.BASEFONT = 9,
                a.BDO = 10,
                a.BIG = 11,
                a.BLOCKQUOTE = 12,
                a.BODY = 13,
                a.BR = 14,
                a.BUTTON = 15,
                a.CAPTION = 16,
                a.CENTER = 17,
                a.CITE = 18,
                a.CODE = 19,
                a.COL = 20,
                a.COLGROUP = 21,
                a.DD = 22,
                a.DEL = 23,
                a.DFN = 24,
                a.DIR = 25,
                a.DIV = 26,
                a.DL = 27,
                a.DT = 28,
                a.EM = 29,
                a.FIELDSET = 30,
                a.FONT = 31,
                a.FORM = 32,
                a.FRAME = 33,
                a.FRAMESET = 34,
                a.H1 = 35,
                a.H2 = 36,
                a.H3 = 37,
                a.H4 = 38,
                a.H5 = 39,
                a.H6 = 40,
                a.HEAD = 41,
                a.HR = 42,
                a.HTML = 43,
                a.I = 44,
                a.IFRAME = 45,
                a.IMG = 46,
                a.INPUT = 47,
                a.INS = 48,
                a.ISINDEX = 49,
                a.KBD = 50,
                a.LABEL = 51,
                a.LEGEND = 52,
                a.LI = 53,
                a.LINK = 54,
                a.MAP = 55,
                a.MENU = 56,
                a.META = 57,
                a.NOFRAMES = 58,
                a.NOSCRIPT = 59,
                a.OBJECT = 60,
                a.OL = 61,
                a.OPTGROUP = 62,
                a.OPTION = 63,
                a.P = 64,
                a.PARAM = 65,
                a.PRE = 66,
                a.Q = 67,
                a.S = 68,
                a.SAMP = 69,
                a.SCRIPT = 70,
                a.SELECT = 71,
                a.SMALL = 72,
                a.SPAN = 73,
                a.STRIKE = 74,
                a.STRONG = 75,
                a.STYLE = 76,
                a.SUB = 77,
                a.SUP = 78,
                a.TABLE = 79,
                a.TBODY = 80,
                a.TD = 81,
                a.TEXTAREA = 82,
                a.TFOOT = 83,
                a.TH = 84,
                a.THEAD = 85,
                a.TITLE = 86,
                a.TR = 87,
                a.TT = 88,
                a.U = 89,
                a.UL = 90,
                a.VAR = 91,
                a.NOINDEX = 100,
                a
            }), Mn = function() {
                var a = "first(-|\\.|_|\\s){0,2}name last(-|\\.|_|\\s){0,2}name zip postal phone address passport (bank|credit)(-|\\.|_|\\s){0,2}card card(-|\\.|_|\\s){0,2}number card(-|\\.|_|\\s){0,2}holder cvv card(-|\\.|_|\\s){0,2}exp card(-|\\.|_|\\s){0,2}name card.*month card.*year card.*month card.*year password email birth(-|\\.|_|\\s){0,2}(day|date) second(-|\\.|_|\\s){0,2}name third(-|\\.|_|\\s){0,2}name patronymic middle(-|\\.|_|\\s){0,2}name birth(-|\\.|_|\\s){0,2}place house street city flat state".split(" ");
                return {
                    ld: new RegExp("(" + C("|", a) + ")","i"),
                    sd: new RegExp("(" + C("|", a.concat("\u0438\u043c\u044f;\u0444\u0430\u043c\u0438\u043b\u0438\u044f;\u043e\u0442\u0447\u0435\u0441\u0442\u0432\u043e;\u0438\u043d\u0434\u0435\u043a\u0441;\u0442\u0435\u043b\u0435\u0444\u043e\u043d;\u0430\u0434\u0440\u0435\u0441;\u043f\u0430\u0441\u043f\u043e\u0440\u0442;\u041d\u043e\u043c\u0435\u0440(-|\\.|_|\\s){0,2}\u043a\u0430\u0440\u0442\u044b;\u0434\u0430\u0442\u0430(-|\\.|_|\\s){0,2} \u0440\u043e\u0436\u0434\u0435\u043d\u0438\u044f;\u0434\u043e\u043c;\u0443\u043b\u0438\u0446\u0430;\u043a\u0432\u0430\u0440\u0442\u0438\u0440\u0430;\u0433\u043e\u0440\u043e\u0434;\u043e\u0431\u043b\u0430\u0441\u0442\u044c".split(";"))) + ")","i"),
                    kd: /ym-record-keys/i,
                    Bc: "\u2022",
                    rd: 88
                }
            }(), Ah = Oa(w(Mn.Bc, L)), oc = !0, Fe = "", Ge = !1, He = !0, Ie = !1, Jj = B(function(a, c) {
                var b = H([a, "efv." + c.event], x);
                c.G = K(q(L, b), c.G);
                return c
            }), Nn = r(function(a) {
                var c = []
                  , b = []
                  , d = [];
                a.document.attachEvent && !a.opera && (c.push(Xd),
                b.push(am),
                b.push(bm));
                a.document.addEventListener ? c.push(yh) : (b.push(xh),
                d.push(yh));
                c = R([{
                    target: a,
                    type: "window",
                    event: "beforeunload",
                    G: [D]
                }, {
                    target: a,
                    type: "window",
                    event: "unload",
                    G: [D]
                }, {
                    event: "click",
                    G: [hc]
                }, {
                    event: "dblclick",
                    G: [hc]
                }, {
                    event: "mousedown",
                    G: [hc]
                }, {
                    event: "mouseup",
                    G: [dm]
                }, {
                    event: "keydown",
                    G: [em]
                }, {
                    event: "keypress",
                    G: [fm]
                }, {
                    event: "copy",
                    G: [Ch]
                }, {
                    event: "blur",
                    G: c
                }, {
                    event: "focusin",
                    G: b
                }, {
                    event: "focusout",
                    G: d
                }], !a.document.attachEvent || a.opera ? [{
                    target: a,
                    type: "window",
                    event: "focus",
                    G: [Mf]
                }, {
                    target: a,
                    type: "window",
                    event: "blur",
                    G: [Xd]
                }] : [], a.document.addEventListener ? [{
                    event: "focus",
                    G: [xh]
                }, {
                    event: "change",
                    G: [zh]
                }, {
                    event: "submit",
                    G: [Eh]
                }] : [{
                    type: "formInput",
                    event: "change",
                    G: [zh]
                }, {
                    type: "form",
                    event: "submit",
                    G: [Eh]
                }]);
                return Jf(a, c)
            }), Hj = r(function(a) {
                return R($b(a) ? [{
                    target: a,
                    type: "document",
                    event: "mouseleave",
                    G: [gm]
                }] : [])
            }), On = ["submit", "beforeunload", "unload"], Pn = r(function(a, c) {
                var b = c(a);
                return Q(function(d, e) {
                    d[e.type + ":" + e.event] = e.G;
                    return d
                }, {}, b)
            }), Ij = /^\s*function submit\(\)/, Gj = /opera mini/i, Qn = A("pr.p", function(a, c) {
                var b, d;
                if (je(a)) {
                    var e = da(a, "5", c)
                      , f = la((b = {},
                    b.pq = 1,
                    b.ar = 1,
                    b));
                    e({
                        D: f,
                        C: (d = {},
                        d["page-url"] = J(a).href,
                        d["page-ref"] = n(a, "document.referrer") || "",
                        d)
                    }, c)["catch"](x(a, "pr.p.s"))
                }
            }), Rn = A("c.m.p", function(a, c) {
                var b = T(c);
                return w(sc(a, b), Cj)
            }), Sn = A("e.a.p", function(a, c) {
                var b = Ca(a, c);
                b = H([q(L, w(!0), fa), ma(Boolean, K(w(b, n), ["clickmap", "trackLinks", "accurateTrackBounce"]))], K);
                c.lc && b();
                return b
            }), Tn = A("cc.i", function(a, c) {
                var b = H([a, c], Bj);
                b = H([a, b, 300], sa);
                Ba(a, c, b)
            }), Un = A("s.f.i", function(a, c) {
                return Ba(a, c, function(b) {
                    if (n(b, "settings.button_goals") || -1 !== J(a).href.indexOf("yagoalsbuttons=1"))
                        qa(a).F(a, "click", x(a, "c.t.c", q(P("target"), H([a, c], kd(a, c, Aj))))),
                        qb(a, c, "Button goal. Counter " + c.id + ". Init.")()
                })
            }), Vn = A("p.fh", function(a, c) {
                var b, d;
                void 0 === c && (c = !0);
                var e = Ea(a)
                  , f = Y(a)
                  , g = e.b("wasSynced")
                  , h = {
                    id: 3,
                    K: "0"
                };
                return c && g && g.time + 864E5 > f(U) ? G.resolve(g) : da(a, "f", h)({
                    D: la((b = {},
                    b.pv = 1,
                    b)),
                    C: (d = {},
                    d["page-url"] = J(a).href,
                    d["page-ref"] = a.document.referrer,
                    d)
                }, h).then(function(k) {
                    var l;
                    k = (l = {},
                    l.time = f(U),
                    l.params = n(k, "settings"),
                    l.bkParams = n(k, "userData"),
                    l);
                    e.l("wasSynced", k);
                    return k
                })["catch"](x(a, "f.h"))
            }), Wn = A("pa.int", function(a, c) {
                return x(a, "pa.c", function() {
                    var b, d;
                    var e = ha(arguments)
                      , f = D;
                    var g = null;
                    var h = e.length;
                    if (0 !== e.length && e[0]) {
                        var k = e.slice(-1)[0];
                        W(k) && (f = k,
                        h = e.length + -1);
                        var l = e.slice(-2)[0];
                        W(l) && (f = l,
                        g = k,
                        h = e.length + -2);
                        h = e.slice(0, h);
                        g = {
                            ic: g,
                            ca: f,
                            H: 1 === h.length ? e[0] : Ad(h)
                        }
                    } else
                        g = void 0;
                    if (g && (e = g.ic,
                    f = g.H,
                    g = g.ca,
                    lc(f) || Va(f))) {
                        h = da(a, "1", c);
                        k = Ic(c).url;
                        l = n(f, "__ym.user_id");
                        var m = Ka(f)
                          , p = V("__ymu", m)
                          , v = V("__ym", m) && l;
                        m = !$f(c);
                        l = qb(a, c, v ? "Set user id " + l : (p ? "User p" : "P") + "arams. Counter " + c.id, v ? void 0 : JSON.stringify(f));
                        h({
                            H: f,
                            D: la((b = {},
                            b.pa = 1,
                            b.ar = 1,
                            b)),
                            C: (d = {},
                            d["page-url"] = k || J(a).href,
                            d)
                        }, c).then(m ? l : D)["catch"](x(a, "p.s")).then(E(rb, null, a, E(g, e)))
                    }
                })
            }), Xn = A("exps.int", function(a, c) {
                return x(a, "e.m", function(b, d, e) {
                    var f, g;
                    void 0 === d && (d = D);
                    if (b && 0 < b.length) {
                        var h = da(a, "e", c)
                          , k = Ic(c).url;
                        return h({
                            D: la((f = {},
                            f.ex = 1,
                            f.ar = 1,
                            f)),
                            C: (g = {},
                            g["page-url"] = k || J(a).href,
                            g.exp = b,
                            g)
                        }, c).then(E(rb, null, a, E(d, e)), x(a, "exps.s"))
                    }
                })
            }), Yn = A("y.p", function(a, c) {
                var b = lg(a, c);
                if (b) {
                    var d = $d(a)
                      , e = B(zj)(a, b, c);
                    ig(a, d, function(f) {
                        f.F("params", e)
                    });
                    b.W.F("params", q(P("1"), e))
                }
            }), $a, Kb, Td = ($a = {},
            $a.transaction_id = "id",
            $a.item_id = "id",
            $a.item_name = "name",
            $a.item_brand = "brand",
            $a.promotion_name = "coupon",
            $a.index = "position",
            $a.item_variant = "variant",
            $a.value = "revenue",
            $a.item_category = "category",
            $a), ii = (Kb = {},
            Kb.view_item = "detail",
            Kb.add_to_cart = "add",
            Kb.remove_from_cart = "remove",
            Kb.begin_checkout = "checkout",
            Kb.purchase = "purchase",
            Kb), wj = "currencyCode add delete remove purchase checkout detail".split(" "), ji = A("dl.w", function(a, c, b) {
                var d;
                Pg(a, a[c], function(e) {
                    b(e)
                }) || (d = sa(a, function() {
                    ji(a, c, b)
                }, 1E3, "ec.dl"));
                return E(fb, null, a, d)
            }), Zn = B(function(a, c, b) {
                var d, e;
                a = n(b, "ecommerce") || {};
                var f = n(b, "event") || "";
                a = (f = ii[f]) ? Sd(f, a, "items") : void 0;
                if (!a)
                    a: {
                        if (Va(b) && (a = ii[b[1]],
                        "event" === b[0] && a)) {
                            a = Sd(a, b[2], "items");
                            break a
                        }
                        a = void 0
                    }
                (b = a || vj(b)) && c && c((d = {},
                d.__ym = (e = {},
                e.ecommerce = [b],
                e),
                d))
            }), $n = A("p.e", function(a, c) {
                var b = Ca(a, c);
                if (b && c.Ka) {
                    b = E(b.params, b);
                    var d = Zn(a, b);
                    return ji(a, c.Ka, function(e) {
                        e.F(d)
                    })
                }
            }), wd = B(function(a, c, b, d) {
                var e, f;
                (b = Ca(c, b)) && xj(a, d, c) && (c = E(b.params, b),
                (a = Sd(a, d, "goods")) && c && c((e = {},
                e.__ym = (f = {},
                f.ecommerce = [a],
                f),
                e)))
            }), ao = A("ecm.a", wd("add")), bo = A("ecm.r", wd("remove")), co = A("ecm.d", wd("detail")), eo = A("ecm.p", wd("purchase")), ef = Km("form"), fo = Sh("form"), sj = Ja(/^https:\/\/(yastatic\.net\/s3\/metrika|s3\.mds\.yandex\.net\/internal-metrika-betas|[\w-]+\.dev\.webvisor\.com|[\w-]+\.dev\.metrika\.yandex\.ru)\/(\w|-|\/|(\.)(?!\.))+\.js$/), tj = r(function(a, c, b) {
                var d, e, f = b.resource;
                b.inline ? (c = O(a),
                b = {},
                b.getCachedTags = Yg,
                b.form = (d = {},
                d.closest = w(a, ef),
                d.select = w(a, fo),
                d.getData = w(a, gf),
                d),
                b.button = (e = {},
                e.closest = w(a, Df),
                e.select = w(a, Rg),
                e.getData = w(a, Ef),
                e),
                c.l("_u", b),
                kc(a, {
                    src: f
                })) : (a._ym__postMessageEvent = c,
                a._ym__inpageMode = b.inpageMode,
                a._ym__initMessage = b.initMessage,
                uj(a, b.resource))
            }, function(a, c, b) {
                return b.id
            }), Af = r(function(a) {
                function c(d, e, f) {
                    f && (e && b.push([f, f.innerHTML]),
                    f.innerHTML = d)
                }
                var b = [];
                return {
                    Ba: function(d, e) {
                        void 0 === e && (e = !1);
                        return Q(function(f, g) {
                            var h = g.text;
                            return !!q(E(qj, null, a), Oa(E(c, null, h, e)), Mb)(g.selector) || f
                        }, !1, d || [])
                    },
                    Lc: function() {
                        I(function(d) {
                            d[0].innerHTML = d[1]
                        }, b)
                    }
                }
            }), go = A("ph.p", function(a, c) {
                if (Vb(a))
                    return D;
                var b = Af(a)
                  , d = c.id
                  , e = Qb(a, void 0, d);
                kj(a, d);
                Nd(a, d, !0);
                Ba(a, c, function(f) {
                    var g = n(f, "settings.mp2.conditions");
                    f = n(f, "settings.mp2.substs");
                    var h = (g = (g = zb(E(lj, null, a, c), g || [])) && g.track_id) && f && f[g];
                    g && h || (h = (g = e.b("mp2_track") || "") && f && f[g]);
                    g && h ? (e.l("mp2_substs", tb(a, h) || "").l("mp2_track", "" + g, 43200),
                    f = b.Ba(h),
                    Ca(a, c).params("__ym", f ? "mp_trackid" : "mp_trackid_bad", g)) : (b.Lc(),
                    e.ha("mp2_substs").ha("mp2_track"))
                });
                return E(A("ph.fc", Nd), null, a, c.id, !1)
            }), ho = r(function(a) {
                return new RegExp(yf(a),"g")
            }), vf = r(function(a) {
                return new RegExp("(?:" + C("|", K(yf, Ka(a))) + ")")
            }), Md = q(ka("replace"), H([/\D/g, ""]), fa), gj = r(function(a) {
                function c(e) {
                    var f, g = ho(e.from);
                    if ("href" === e.type) {
                        var h = e.node;
                        var k = h.href.replace(g, e.aa);
                        if (h.href !== k)
                            return h.href = k,
                            null === (f = b[e.from]) || void 0 === f ? void 0 : f.bb
                    } else if ((f = null === (h = e.node.textContent) || void 0 === h ? void 0 : h.replace(g, e.aa)) && f !== e.node.textContent)
                        return e.node.textContent = f,
                        null === (k = b[e.from]) || void 0 === k ? void 0 : k.bb;
                    return null
                }
                var b, d = r(xc(function(e, f) {
                    var g = K(Md, f)
                      , h = g[0];
                    g = g[1];
                    e[h] = {
                        aa: g,
                        bb: f
                    };
                    var k = xf(h);
                    k !== h && (e[k] = {
                        aa: xf(g),
                        bb: f
                    });
                    return e
                }, {}));
                return {
                    Ba: function(e) {
                        if (!e || !e.length)
                            return G.reject();
                        b = d(e);
                        return Ld(a).then(function() {
                            var f = Y(a)
                              , g = f(U)
                              , h = ij(a, b)
                              , k = jj(a, b);
                            return {
                                N: ma(Va, K(c, h.concat(k))),
                                R: f(U) - g
                            }
                        })
                    }
                }
            }), uf = r(Ab, gb), io = A("phc.p", function(a, c) {
                return Vb(a) || !Z("querySelectorAll", a.document.querySelectorAll) ? D : Ba(a, c, function(b) {
                    var d = c.id
                      , e = Qb(a, void 0, d)
                      , f = e.b("phc_settings") || "";
                    if (b = n(b, "settings.phchange")) {
                        var g = tb(a, b) || "";
                        g !== f && e.l("phc_settings", g)
                    } else
                        f && (b = uf(a, f));
                    e = n(b, "clientId");
                    f = n(b, "orderId");
                    b = n(b, "phones") || [];
                    e && f && b.length && (f = {
                        ga: "",
                        ia: "",
                        Hb: 0,
                        N: {},
                        R: [],
                        pb: !1,
                        Ma: !0,
                        o: a,
                        fc: c
                    },
                    F(f, {
                        pb: !0
                    }),
                    tf(a, d, f),
                    b = ad(a),
                    e = al(a, b, 1E3),
                    d = E(tf, null, a, d, f),
                    e.F(d),
                    fj(a, b))
                })
            }), jo = A("up.int", function(a, c) {
                return x(a, "up.c", function(b, d, e) {
                    var f, g = Ca(a, c), h = ag(a).warn;
                    g ? lc(b) ? (b = (f = {},
                    f.__ymu = b,
                    f),
                    (f = g.params) && f(b, d || D, e)) : h("Wrong user params") : h("No counter instance found")
                })
            }), ko = A("trigger.in", function(a, c) {
                c.Mb && ic(a, H([a, "yacounter" + c.id + "inited"], pl), "t.i")
            }), lo = A("destruct.e", function(a, c, b) {
                return function() {
                    var d = O(a)
                      , e = c.id;
                    I(function(f, g) {
                        return W(f) && x(a, "dest.fr." + g, f)()
                    }, b);
                    delete d.b("counters")[T(c)];
                    delete a["yaCounter" + e]
                }
            }), mo = [97, 100, 118, 101, 114, 116, 46, 103, 105, 102], no = A("ad", function(a, c) {
                if (!Vb(a) && !c.da) {
                    var b = O(a);
                    if (!b.b("adBlockEnabled")) {
                        var d = function(m) {
                            V(m, ["2", "1"]) && b.l("adBlockEnabled", m)
                        }
                          , e = Bb(a)
                          , f = e.b("isad");
                        if (f)
                            d(f);
                        else {
                            var g = w("adStatus", b.l)
                              , h = function(m) {
                                m = m ? "1" : "2";
                                d(m);
                                g("complete");
                                e.l("isad", m, 1200);
                                return m
                            }
                              , k = da(a, "adb", c);
                            if (!b.b("adStatus")) {
                                g("process");
                                var l = "metrika/" + String.fromCharCode.apply(String, mo);
                                cj(a, function() {
                                    return k({}, l).then(w(!1, h))["catch"](w(!0, h))
                                })
                            }
                        }
                    }
                }
            }), oo = A("pa.plgn", function(a, c) {
                var b = Uc(a, c);
                b && b.W.F("pluginInfo", x(a, "c.plgn", function() {
                    return wl(c, Ph)
                }))
            }), po = A("suid.int", function(a, c) {
                return x(a, "suid.c", function(b, d, e) {
                    var f = Ca(a, c)
                      , g = pd(a);
                    Wa(b) || Rd(a, b) ? (b = Ad(["__ym", "user_id", b]),
                    f.params(b, d || D, e)) : g.error("Incorrect user ID")
                })
            }), qo = A("guid.int", function(a, c) {
                return x(a, "guid.c", function(b) {
                    var d = Eg(a, c);
                    b && rb(a, b, d);
                    return d
                })
            }), sf = 0, Kd = {
                x: 0,
                y: 0
            }, rf = 0, Jd = {
                x: 0,
                y: 0
            }, Gd = {}, ki = r(function(a) {
                var c = R([{
                    event: "mousemove",
                    G: [bj]
                }, {
                    target: a,
                    type: "window",
                    event: "scroll",
                    G: [nf]
                }, {
                    event: "onmousewheel"in a.document ? "mousewheel" : "wheel",
                    G: [aj]
                }, {
                    target: a,
                    type: "window",
                    event: "beforeunload",
                    G: [qf]
                }], Jh(a) ? [{
                    target: a,
                    type: "window",
                    event: "unload",
                    G: [qf]
                }] : [], [{
                    target: a,
                    type: "window",
                    event: "resize",
                    G: [$i]
                }, {
                    event: "touchmove",
                    G: [mf]
                }, {
                    event: "touchstart",
                    G: [mf]
                }], a.document.addEventListener ? [{
                    event: "scroll",
                    G: [Zi]
                }] : []);
                return R(Nn(a), Jf(a, c))
            }), ro = w(ki, function(a, c, b, d) {
                return Pn(c, a)[b + ":" + d] || []
            }), so = r(function(a) {
                return R(On, ["beforeunload"], Jh(a) ? ["unload"] : [])
            }), to = A("wv.p", function(a, c) {
                if (!c.sa)
                    return G.resolve(D);
                var b = new Ln(a,ro);
                return Dj(a, c, b, ki, so(a))
            }), uo = B(function(a, c) {
                0 === parseFloat(n(c, "settings.c_recp")) && (a.Ta.l("ymoo" + a.jb, a.Kb(Xa)),
                a.Ia && a.Ia.destruct && a.Ia.destruct())
            }), vo = A("wsa", function(a, c) {
                var b = {
                    jb: T(c),
                    Ia: Ca(a, c),
                    Kb: Y(a),
                    Ta: Ea(a)
                }
                  , d = b.Kb(Xa);
                if (b.Ta.Na)
                    return !1;
                var e = b.Ta.b("ymoo" + b.jb);
                if (e && 30 > d - e)
                    return !0;
                Ba(a, c, uo(b))["catch"](x(a, "d.f"));
                return !1
            }), Qi = [-.2, -.9, 0, .4, -.26, 0, 0, .732134444, 0], Ni = ["webgl", "experimental-webgl"], Li = "prefers-reduced-motion;prefers-reduced-transparency;prefers-color-scheme: dark;prefers-color-scheme: light;pointer: none;pointer: coarse;pointer: fine;any-pointer: none;any-pointer: coarse;any-pointer: fine;scan: interlace;scan: progressive;color-gamut: srgb;color-gamut: p3;color-gamut: rec2020;update: fast;update: slow;update: none;grid: 0;grid: 2;hover: hover;inverted-colors: inverted;inverted-colors: none".split(";"), kf = "monospace;sans-serif;serif;Andale Mono;Arial;Arial Black;Arial Hebrew;Arial MT;Arial Narrow;Arial Rounded MT Bold;Arial Unicode MS;Bitstream Vera Sans Mono;Book Antiqua;Bookman Old Style;Calibri;Cambria;Cambria Math;Century;Century Gothic;Century Schoolbook;Comic Sans;Comic Sans MS;Consolas;Courier;Courier New;Garamond;Geneva;Georgia;Helvetica;Helvetica Neue;Impact;Lucida Bright;Lucida Calligraphy;Lucida Console;Lucida Fax;LUCIDA GRANDE;Lucida Handwriting;Lucida Sans;Lucida Sans Typewriter;Lucida Sans Unicode;Microsoft Sans Serif;Monaco;Monotype Corsiva;MS Gothic;MS Outlook;MS PGothic;MS Reference Sans Serif;MS Sans Serif;MS Serif;MYRIAD;MYRIAD PRO;Palatino;Palatino Linotype;Segoe Print;Segoe Script;Segoe UI;Segoe UI Light;Segoe UI Semibold;Segoe UI Symbol;Tahoma;Times;Times New Roman;Times New Roman PS;Trebuchet MS;Verdana;Wingdings;Wingdings 2;Wingdings 3".split(";"), Ii = "appName vendor deviceMemory hardwareConcurrency maxTouchPoints appVersion productSub appCodeName vendorSub".split(" "), wo = q(P("performance.memory.jsHeapSizeLimit"), ka("concat", "")), xo = Dd("screen.", ["availWidth", "availHeight", "availTop"]), Gi = ["name", "lang", "localService", "voiceURI", "default"], jf = "video/ogg video/mp4 video/webm audio/x-aiff audio/x-m4a audio/mpeg audio/aac audio/wav audio/ogg audio/mp4".split(" "), Ei = "theora vorbis 1 avc1.4D401E mp4a.40.2 vp8.0 mp4a.40.5".split(" "), Ci = r(function(a, c) {
                return Ba(a, c, P("settings.form_goals"))
            }, gb), yo = w(!0, ff), zo = A("s.f.i", function(a, c) {
                var b = [];
                qa(a).F(a, "click", x(a, "s.f.c", H([a, c, b], Bi)));
                qa(a).F(a, "submit", x(a, "s.f.e", q(P("target"), H([a, c, b], yo))));
                hf(a, c, "Form goal. Counter " + c.id + ". Init.")
            }), Ao = id("rtg", function(a, c) {
                var b = T(c);
                Ba(a, c, function(d) {
                    var e = n(d, "settings.rt");
                    d = Vf(d);
                    if (e && !d)
                        return Wf(a, c).then(function() {
                            yg(c)[b] = 1
                        })
                })["catch"](x(a, "l.rtg"))
            }), li = Na(String.prototype.repeat, "repeat"), cf = li ? function(a, c) {
                return li.call(a, c)
            }
            : zl, mi = /[^\d]/g, Bo = /[^\d.,]/g, Co = /[.,]$/, zi = A("ep.pp", function(a, c) {
                if (!c)
                    return 0;
                a: {
                    var b = c.replace(Bo, "").replace(Co, "");
                    var d = "0" === b[b.length - 1];
                    for (var e = b.length; 0 < e && !(3 < b.length - e + 1 && d); --e) {
                        var f = b[e - 1];
                        if (V(f, [",", "."])) {
                            d = f;
                            break a
                        }
                    }
                    d = ""
                }
                b = d ? c.split(d) : [c];
                d = d ? b[1] : "00";
                b = parseFloat(b[0].replace(mi, "") + "." + d.replace(mi, ""));
                d = Math.pow(10, 8) - .01;
                a.isNaN(b) ? b = 0 : (b = Math.min(b, d),
                b = Math.max(b, 0));
                return b
            }), Do = [[["EUR", "\u20ac"], "978"], [["USD", "\u0423\\.\u0415\\.", "\\$"], "840"], [["UAH", "\u0413\u0420\u041d", "\u20b4"], "980"], ["\u0422\u0413 KZT \u20b8 \u0422\u04a2\u0413 TENGE \u0422\u0415\u041d\u0413\u0415".split(" "), "398"], [["GBP", "\u00a3", "UKL"], "826"], ["RUR RUB \u0420 \u0420\u0423\u0411 \u20bd P \u0420UB P\u0423\u0411 P\u0423B PY\u0411 \u0420Y\u0411 \u0420\u0423B P\u0423\u0411".split(" "), "643"]], Eo = /\s/g, Fo = r(function(a) {
                return new RegExp(a.join("|"),"i")
            }), Go = A("ep.cp", function(a) {
                if (!a)
                    return "000";
                var c = a.replace(Eo, "");
                return (a = zb(function(b) {
                    return Fo(b[0]).test(c)
                }, Do)) ? a[1] : "000"
            }), yi = A("ep.en", function(a, c, b) {
                a = $e(a);
                c = "" + 100 * c + b + a;
                b = 16 - c.length;
                if (0 > b)
                    return "";
                c = cf("0", b) + c;
                b = c.slice(0, 8);
                c = c.slice(-8);
                b = (+b ^ 92844).toString(35);
                c = (+c ^ 92844).toString(35);
                return "" + b + "z" + c
            }), ni = q(Ze, Go), oi = A("ep.ctp", function(a, c, b, d) {
                var e = ni(a, b)
                  , f = Ye(a, d);
                Xe(a, c, e, f);
                Z("MutationObserver", a.MutationObserver) && (new MutationObserver(function() {
                    var g = ni(a, b)
                      , h = Ye(a, d);
                    if (e !== g || f !== h)
                        e = g,
                        f = h,
                        Xe(a, c, e, f)
                }
                )).observe(a.document.body, {
                    attributes: !0,
                    childList: !0,
                    subtree: !0,
                    characterData: !0
                })
            }), Ho = A("ep.chp", function(a, c, b, d, e) {
                b && zd(a, c);
                return d || e ? qa(a).F(a.document, "click", x(a, "ep.chp.cl", H([a, c, d, e], xi))) : D
            }), Io = r(function(a) {
                function c() {
                    var l = k + "0"
                      , m = k + "1";
                    g[l] ? g[m] ? (k = k.slice(0, -1),
                    --h) : (f[m] = d(8),
                    g[m] = 1) : (f[l] = d(8),
                    g[l] = 1)
                }
                function b() {
                    var l = k + "1";
                    g[k + "0"] ? g[l] ? (k = k.slice(0, -1),
                    --h) : (k += "1",
                    g[k] = 1) : (k += "0",
                    g[k] = 1)
                }
                function d(l) {
                    void 0 === l && (l = 1);
                    var m = e.slice(h, h + l);
                    h += l;
                    return m
                }
                for (var e = bf(a, "AT5T6ku06kEsXK3iyBRgo6lk8rCtX4Kjf0qpRe74vtAplOkkpSi8E9FDTBJlIV6szGuWawyILrLlztwl4KEqs1pNFvNdtIrYtROBN1gSGS1adp+myrzmZKoqErtCv20WyWiRlEqZQUzvV3sRa1nScmlxptwLLY7o", ""), f = {}, g = {}, h = 1, k = ""; h < e.length - 1; )
                    ("0" === d() ? b : c)();
                return f
            }), wi = A("ep.dec", function(a, c) {
                if (!c || Vb(a))
                    return [];
                var b = bf(a, c, " ").split(" ")
                  , d = b[1]
                  , e = b[2]
                  , f = b.slice(3);
                if (1 !== parseInt(b[0], 2))
                    return [];
                b = Io(a);
                f = f.join("");
                d = parseInt(d + e, 2);
                for (var g = e = "", h = 0; g.length < d && f[h]; )
                    e += f[h],
                    b[e] && (g += String.fromCharCode(parseInt(b[e], 2)),
                    e = ""),
                    h += 1;
                b = Ab(a, g);
                return Va(b) ? b : []
            }), Jo = A("ep.i", function(a, c) {
                return Z("querySelectorAll", a.document.querySelectorAll) ? ab(a, c).then(function(b) {
                    var d = b[0]
                      , e = b[1]
                      , f = b[2]
                      , g = b[3]
                      , h = b[4]
                      , k = b[5]
                      , l = b[6]
                      , m = b[7]
                      , p = b[8]
                      , v = b[9]
                      , t = ra(a, d)
                      , z = ra(a, g)
                      , u = ra(a, l)
                      , M = ra(a, p)
                      , ia = "" + d + e + f === "" + g + h + k;
                    return Ld(a).then(function() {
                        t && oi(a, c, e, f);
                        z && !ia && oi(a, c, h, k);
                        return Ho(a, c, u || M, m, v)
                    })
                }) : G.resolve(D)
            }), xb = O(window);
            xb.qa("hitParam", {});
            xb.qa("lastReferrer", window.location.href);
            xb.qa("getCounters", vn(window));
            ce.push(Vn);
            var pi = function() {
                return function(a, c, b, d) {
                    var e = this;
                    return x(window, "c.i", function() {
                        function f(u) {
                            return kd(h, k, u)(h, k)
                        }
                        function g(u) {
                            return im(h, k, v, u)
                        }
                        (!window || isNaN(a) && !a) && eh();
                        var h = window
                          , k = vl(a, Ph, c, b, d);
                        k.id || Sb(h, "Invalid Metrika id: " + k.id);
                        var l = T(k)
                          , m = xb.b("counters", {})
                          , p = []
                          , v = [kd, hm];
                        if (m[l])
                            return Sb(h, "Duplicate counter " + l + " initialization"),
                            m[l];
                        var t = !1
                          , z = xb.b("hitParam", {});
                        z[l] && (t = !("1" !== k.K || m[l]));
                        z[l] = 1;
                        e._webvisor = k.sa || !1;
                        m[l] = e;
                        xb.l("counters", m);
                        xb.qa("counter", e);
                        z = wn(window, k);
                        p.push(z);
                        Kn(window);
                        vo(window, k) && delete m[l];
                        f(no);
                        nn(h, [Ui(Mi), Vi, Wi, Yi, Ji, Hi, wo, xo, Fi, Di, Ki]);
                        f(rn);
                        f(dj);
                        e.replacePhones = f(go) || D;
                        f(io);
                        e.hit = g(sn(h, k))();
                        e.params = g(Wn(h, k))();
                        l = f(xn);
                        p.push(n(l, La({
                            unsubscribe: 1
                        })));
                        e.trackHash = kd(h, k, n(l, La({
                            Pc: 1
                        })));
                        e.reachGoal = g(Cd(h, k))();
                        e.experiments = g(Xn(h, k))();
                        f(ko);
                        f(Vh);
                        t || f(to);
                        t = f(Bn);
                        p.push(n(t, La({
                            Ja: 1
                        })));
                        e.notBounce = g(n(t, La({
                            zc: 1
                        })))();
                        e.accurateTrackBounce = g(n(t, La({
                            ta: 1
                        })))();
                        f(Yn);
                        t = f(En);
                        p.push(n(t, La({
                            Ja: 1
                        })));
                        e.extLink = g(n(t, La({
                            mc: 1
                        })))();
                        e.addFileExtension = g(n(t, La({
                            $b: 1
                        })))();
                        e.file = g(n(t, La({
                            file: 1
                        })))();
                        e.trackLinks = g(n(t, La({
                            Da: 1
                        })))();
                        p.push($n(h, k));
                        e.ecommerceAdd = g(ao(h, k))();
                        e.ecommerceRemove = g(bo(h, k))();
                        e.ecommerceDetail = g(co(h, k))();
                        e.ecommercePurchase = g(eo(h, k))();
                        t = f(jo);
                        e.userParams = g(t || D)();
                        e.destruct = g(lo(h, k, p))(!0, !1);
                        f(oo);
                        f(Hn);
                        t = f(po);
                        e.setUserID = g(t || D)();
                        e.getClientID = f(qo) || D;
                        p.push(f(In));
                        e.clickmap = g(Rn(h, k))();
                        (t = f(Jo)) && t.then(ka("push", p));
                        f(Qn);
                        e.enableAll = g(Sn(h, k))();
                        f(zo);
                        f(Ao);
                        f(Tn);
                        f(Un)
                    })()
                }
            }();
            (function(a) {
                var c = O(a);
                c.b("i") || (c.l("i", !0),
                qa(a).F(a, "message", w(a, rj)))
            }
            )(window);
            if (window.Ya && pi) {
                var qi = na.Ga;
                window.Ya[qi] = pi;
                Cn(window);
                var ri = window.Ya[qi];
                ri.informer = Uj(window);
                ri.counters = xb.b("getCounters")
            }
            N.Wc = 1;
            N.Xc = 10;
            return N
        }
        )({})
    } catch (N) {}
    ;
}
).call(this)
