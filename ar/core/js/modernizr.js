/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-canvas-cssanimations-flexbox-fullscreen-getusermedia-lowbandwidth-objectfit-sessionstorage-supports-svg-svgasimg-touchevents-video-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,s,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],t=C[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),S.push((o?"":"no-")+a.join("-"))}}function i(e){var t=T.className,n=Modernizr._config.classPrefix||"";if(x&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),x?T.className.baseVal=t:T.className=t)}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):x?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function l(e,t){if("object"==typeof e)for(var n in e)P(e,n)&&l(n,e[n]);else{e=e.toLowerCase();var r=e.split("."),o=Modernizr[r[0]];if(2==r.length&&(o=o[r[1]]),"undefined"!=typeof o)return Modernizr;t="function"==typeof t?t():t,1==r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),i([(t&&0!=t?"":"no-")+r.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function u(){var e=t.body;return e||(e=s(x?"svg":"body"),e.fake=!0),e}function c(e,n,r,o){var i,a,l,c,f="modernizr",d=s("div"),p=u();if(parseInt(r,10))for(;r--;)l=s("div"),l.id=o?o[r]:f+(r+1),d.appendChild(l);return i=s("style"),i.type="text/css",i.id="s"+f,(p.fake?p:d).appendChild(i),p.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),d.id=f,p.fake&&(p.style.background="",p.style.overflow="hidden",c=T.style.overflow,T.style.overflow="hidden",T.appendChild(p)),a=n(d,e),p.fake?(p.parentNode.removeChild(p),T.style.overflow=c,T.offsetHeight):d.parentNode.removeChild(d),!!a}function f(e,t){return!!~(""+e).indexOf(t)}function d(e,t){return function(){return e.apply(t,arguments)}}function p(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?d(o,n||t):o);return!1}function v(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,n,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,t,n);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var s=i.error?"error":"log";i[s].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!n&&t.currentStyle&&t.currentStyle[r];return o}function g(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(v(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+v(t[o])+":"+r+")");return i=i.join(" or "),c("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==m(e,null,"position")})}return n}function h(e,t,o,i){function l(){c&&(delete U.style,delete U.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var u=g(e,o);if(!r(u,"undefined"))return u}for(var c,d,p,v,m,h=["modernizr","tspan","samp"];!U.style&&h.length;)c=!0,U.modElem=s(h.shift()),U.style=U.modElem.style;for(p=e.length,d=0;p>d;d++)if(v=e[d],m=U.style[v],f(v,"-")&&(v=a(v)),U.style[v]!==n){if(i||r(o,"undefined"))return l(),"pfx"==t?v:!0;try{U.style[v]=o}catch(y){}if(U.style[v]!=m)return l(),"pfx"==t?v:!0}return l(),!1}function y(e,t,n,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+z.join(s+" ")+s).split(" ");return r(t,"string")||r(t,"undefined")?h(a,t,o,i):(a=(e+" "+L.join(s+" ")+s).split(" "),p(a,t,n))}function w(e,t,r){return y(e,n,n,t,r)}var S=[],C=[],_={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){C.push({name:e,fn:t,options:n})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=_,Modernizr=new Modernizr,Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("lowbandwidth",function(){var e=navigator.connection||{type:0};return 3==e.type||4==e.type||/^[23]g$/.test(e.type)}),Modernizr.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(t){return!1}}),Modernizr.addTest("getUserMedia","mediaDevices"in navigator&&"getUserMedia"in navigator.mediaDevices);var T=t.documentElement,x="svg"===T.nodeName.toLowerCase();Modernizr.addTest("canvas",function(){var e=s("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("video",function(){var e=s("video"),t=!1;try{t=!!e.canPlayType,t&&(t=new Boolean(t),t.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),t.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),t.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),t.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),t.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(n){}return t});var b=_._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];_._prefixes=b;var P;!function(){var e={}.hasOwnProperty;P=r(e,"undefined")||r(e.call,"undefined")?function(e,t){return t in e&&r(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),_._l={},_.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},_._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,r;for(e=0;e<n.length;e++)(r=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){_.addTest=l}),Modernizr.addTest("svgasimg",t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var E=_.testStyles=c;Modernizr.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var r=["@media (",b.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");E(r,function(e){n=9===e.offsetTop})}return n});var j="Moz O ms Webkit",z=_._config.usePrefixes?j.split(" "):[];_._cssomPrefixes=z;var N=function(t){var r,o=b.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var s=0;o>s;s++){var a=b[s],l=a.toUpperCase()+"_"+r;if(l in i)return"@-"+a.toLowerCase()+"-"+t}return!1};_.atRule=N;var L=_._config.usePrefixes?j.toLowerCase().split(" "):[];_._domPrefixes=L;var R="CSS"in e&&"supports"in e.CSS,$="supportsCSS"in e;Modernizr.addTest("supports",R||$);var O={elem:s("modernizr")};Modernizr._q.push(function(){delete O.elem});var U={style:O.elem.style};Modernizr._q.unshift(function(){delete U.style}),_.testAllProps=y;var k=_.prefixed=function(e,t,n){return 0===e.indexOf("@")?N(e):(-1!=e.indexOf("-")&&(e=a(e)),t?y(e,t,n):y(e,"pfx"))};Modernizr.addTest("fullscreen",!(!k("exitFullscreen",t,!1)&&!k("cancelFullScreen",t,!1))),Modernizr.addTest("objectfit",!!k("objectFit"),{aliases:["object-fit"]}),_.testAllProps=w,Modernizr.addTest("cssanimations",w("animationName","a",!0)),Modernizr.addTest("flexbox",w("flexBasis","1px",!0)),o(),i(S),delete _.addTest,delete _.addAsyncTest;for(var q=0;q<Modernizr._q.length;q++)Modernizr._q[q]();e.Modernizr=Modernizr}(window,document);

window.Detectizr = (function(window, navigator, document, undefined) {
    var Detectizr = {},
        Modernizr = window.Modernizr,
        deviceTypes = ["tv", "tablet", "mobile", "desktop"],
        options = {
            // option for enabling HTML classes of all features (not only the true features) to be added
            addAllFeaturesAsClass: false,
            // option for enabling detection of device
            detectDevice: true,
            // option for enabling detection of device model
            detectDeviceModel: true,
            // option for enabling detection of screen size
            detectScreen: true,
            // option for enabling detection of operating system type and version
            detectOS: true,
            // option for enabling detection of browser type and version
            detectBrowser: true,
            // option for enabling detection of common browser plugins
            detectPlugins: true
        },
        plugins2detect = [{
            name: "adobereader",
            substrs: ["Adobe", "Acrobat"],
            // AcroPDF.PDF is used by version 7 and later
            // PDF.PdfCtrl is used by version 6 and earlier
            progIds: ["AcroPDF.PDF", "PDF.PDFCtrl.5"]
        }, {
            name: "flash",
            substrs: ["Shockwave Flash"],
            progIds: ["ShockwaveFlash.ShockwaveFlash.1"]
        }, {
            name: "wmplayer",
            substrs: ["Windows Media"],
            progIds: ["wmplayer.ocx"]
        }, {
            name: "silverlight",
            substrs: ["Silverlight"],
            progIds: ["AgControl.AgControl"]
        }, {
            name: "quicktime",
            substrs: ["QuickTime"],
            progIds: ["QuickTime.QuickTime"]
        }],
        rclass = /[\t\r\n]/g,
        docElement = document.documentElement,
        resizeTimeoutId,
        oldOrientation;

    // Create Global "extend" method, so Detectizr does not need jQuery.extend
    function extend(obj, extObj) {
        var a, b, i;
        if (arguments.length > 2) {
            for (a = 1, b = arguments.length; a < b; a += 1) {
                extend(obj, arguments[a]);
            }
        } else {
            for (i in extObj) {
                if (extObj.hasOwnProperty(i)) {
                    obj[i] = extObj[i];
                }
            }
        }
        return obj;
    }

    // simplified and localized indexOf method as one parameter fixed as useragent
    function is(key) {
        return Detectizr.browser.userAgent.indexOf(key) > -1;
    }

    // simplified and localized regex test method as one parameter fixed as useragent
    function test(regex) {
        return regex.test(Detectizr.browser.userAgent);
    }

    // simplified and localized regex exec method as one parameter fixed as useragent
    function exec(regex) {
        return regex.exec(Detectizr.browser.userAgent);
    }

    // localized string trim method
    function trim(value) {
        return value.replace(/^\s+|\s+$/g, "");
    }

    // convert string to camelcase
    function toCamel(string) {
        if (string === null || string === undefined) {
            return "";
        }
        return String(string).replace(/((\s|\-|\.)+[a-z0-9])/g, function($1) {
            return $1.toUpperCase().replace(/(\s|\-|\.)/g, "");
        });
    }

    // removeClass function inspired from jQuery.removeClass
    function removeClass(element, value) {
        var class2remove = value || "",
            cur = element.nodeType === 1 && (element.className ? (" " + element.className + " ").replace(rclass, " ") : "");
        if (cur) {
            while (cur.indexOf(" " + class2remove + " ") >= 0) {
                cur = cur.replace(" " + class2remove + " ", " ");
            }
            element.className = value ? trim(cur) : "";
        }
    }

    // add version test to Modernizr
    function addVersionTest(version, major, minor) {
        if (!!version) {
            version = toCamel(version);
            if (!!major) {
                major = toCamel(major);
                addConditionalTest(version + major, true);
                if (!!minor) {
                    addConditionalTest(version + major + "_" + minor, true);
                }
            }
        }
    }

    // add test to Modernizr based on a condition
    function addConditionalTest(feature, test) {
        if (!!feature && !!Modernizr) {
            if (options.addAllFeaturesAsClass) {
                Modernizr.addTest(feature, test);
            } else {
                test = typeof test === "function" ? test() : test;
                if (test) {
                    Modernizr.addTest(feature, true);
                } else {
                    delete Modernizr[feature];
                    removeClass(docElement, feature);
                }
            }
        }
    }

    // set version based on versionFull
    function setVersion(versionType, versionFull) {
        versionType.version = versionFull;
        var versionArray = versionFull.split(".");
        if (versionArray.length > 0) {
            versionArray = versionArray.reverse();
            versionType.major = versionArray.pop();
            if (versionArray.length > 0) {
                versionType.minor = versionArray.pop();
                if (versionArray.length > 0) {
                    versionArray = versionArray.reverse();
                    versionType.patch = versionArray.join(".");
                } else {
                    versionType.patch = "0";
                }
            } else {
                versionType.minor = "0";
            }
        } else {
            versionType.major = "0";
        }
    }

    function checkOrientation() {
        //timeout wrapper points with doResizeCode as callback
        window.clearTimeout(resizeTimeoutId);
        resizeTimeoutId = window.setTimeout(function() {
            oldOrientation = Detectizr.device.orientation;
            //wrapper for height/width check
            if (window.innerHeight > window.innerWidth) {
                Detectizr.device.orientation = "portrait";
            } else {
                Detectizr.device.orientation = "landscape";
            }
            addConditionalTest(Detectizr.device.orientation, true);
            if (oldOrientation !== Detectizr.device.orientation) {
                addConditionalTest(oldOrientation, false);
            }
        }, 10);
    }

    function detectPlugin(substrs) {
        var plugins = navigator.plugins,
            plugin, haystack, pluginFoundText, j, k;
        for (j = plugins.length - 1; j >= 0; j--) {
            plugin = plugins[j];
            haystack = plugin.name + plugin.description;
            pluginFoundText = 0;
            for (k = substrs.length; k >= 0; k--) {
                if (haystack.indexOf(substrs[k]) !== -1) {
                    pluginFoundText += 1;
                }
            }
            if (pluginFoundText === substrs.length) {
                return true;
            }
        }
        return false;
    }

    function detectObject(progIds) {
        var j;
        for (j = progIds.length - 1; j >= 0; j--) {
            try {
                new ActiveXObject(progIds[j]);
            } catch (e) {
                // Ignore
            }
        }
        return false;
    }

    function detect(opt) {
        var i, j, device, os, browser, plugin2detect, pluginFound;

        options = extend({}, options, opt || {});

        /** Device detection **/
        if (options.detectDevice) {
            Detectizr.device = {
                type: "",
                model: "",
                orientation: ""
            };
            device = Detectizr.device;
            if (test(/googletv|smarttv|smart-tv|internet.tv|netcast|nettv|appletv|boxee|kylo|roku|dlnadoc|roku|pov_tv|hbbtv|ce\-html/)) {
                // Check if user agent is a smart tv
                device.type = deviceTypes[0];
                device.model = "smartTv";
            } else if (test(/xbox|playstation.3|wii/)) {
                // Check if user agent is a game console
                device.type = deviceTypes[0];
                device.model = "gameConsole";
            } else if (test(/ip(a|ro)d/)) {
                // Check if user agent is a iPad
                device.type = deviceTypes[1];
                device.model = "ipad";
            } else if ((test(/tablet/) && !test(/rx-34/)) || test(/folio/)) {
                // Check if user agent is a Tablet
                device.type = deviceTypes[1];
                device.model = String(exec(/playbook/) || "");
            } else if (test(/linux/) && test(/android/) && !test(/fennec|mobi|htc.magic|htcX06ht|nexus.one|sc-02b|fone.945/)) {
                // Check if user agent is an Android Tablet
                device.type = deviceTypes[1];
                device.model = "android";
            } else if (test(/kindle/) || (test(/mac.os/) && test(/silk/))) {
                // Check if user agent is a Kindle or Kindle Fire
                device.type = deviceTypes[1];
                device.model = "kindle";
            } else if (test(/gt-p10|sc-01c|shw-m180s|sgh-t849|sch-i800|shw-m180l|sph-p100|sgh-i987|zt180|htc(.flyer|\_flyer)|sprint.atp51|viewpad7|pandigital(sprnova|nova)|ideos.s7|dell.streak.7|advent.vega|a101it|a70bht|mid7015|next2|nook/) || (test(/mb511/) && test(/rutem/))) {
                // Check if user agent is a pre Android 3.0 Tablet
                device.type = deviceTypes[1];
                device.model = "android";
            } else if (test(/bb10/)) {
                // Check if user agent is a BB10 device
                device.type = deviceTypes[1];
                device.model = "blackberry";
            } else {
                // Check if user agent is one of common mobile types
                device.model = exec(/iphone|ipod|android|blackberry|opera mini|opera mobi|skyfire|maemo|windows phone|palm|iemobile|symbian|symbianos|fennec|j2me/);
                if (device.model !== null) {
                    device.type = deviceTypes[2];
                    device.model = String(device.model);
                } else {
                    device.model = "";
                    if (test(/bolt|fennec|iris|maemo|minimo|mobi|mowser|netfront|novarra|prism|rx-34|skyfire|tear|xv6875|xv6975|google.wireless.transcoder/)) {
                        // Check if user agent is unique Mobile User Agent
                        device.type = deviceTypes[2];
                    } else if (test(/opera/) && test(/windows.nt.5/) && test(/htc|xda|mini|vario|samsung\-gt\-i8000|samsung\-sgh\-i9/)) {
                        // Check if user agent is an odd Opera User Agent - http://goo.gl/nK90K
                        device.type = deviceTypes[2];
                    } else if ((test(/windows.(nt|xp|me|9)/) && !test(/phone/)) || test(/win(9|.9|nt)/) || test(/\(windows 8\)/)) {
                        // Check if user agent is Windows Desktop, "(Windows 8)" Chrome extra exception
                        device.type = deviceTypes[3];
                    } else if (test(/macintosh|powerpc/) && !test(/silk/)) {
                        // Check if agent is Mac Desktop
                        device.type = deviceTypes[3];
                        device.model = "mac";
                    } else if (test(/linux/) && test(/x11/)) {
                        // Check if user agent is a Linux Desktop
                        device.type = deviceTypes[3];
                    } else if (test(/solaris|sunos|bsd/)) {
                        // Check if user agent is a Solaris, SunOS, BSD Desktop
                        device.type = deviceTypes[3];
                    } else if (test(/cros/)) {
                        // Check if user agent is a Chromebook
                        device.type = deviceTypes[3];
                    } else if (test(/bot|crawler|spider|yahoo|ia_archiver|covario-ids|findlinks|dataparksearch|larbin|mediapartners-google|ng-search|snappy|teoma|jeeves|tineye/) && !test(/mobile/)) {
                        // Check if user agent is a Desktop BOT/Crawler/Spider
                        device.type = deviceTypes[3];
                        device.model = "crawler";
                    } else {
                        // Otherwise assume it is a Mobile Device
                        device.type = deviceTypes[2];
                    }
                }
            }
            for (i = 0, j = deviceTypes.length; i < j; i += 1) {
                addConditionalTest(deviceTypes[i], (device.type === deviceTypes[i]));
            }
            if (options.detectDeviceModel) {
                addConditionalTest(toCamel(device.model), true);
            }
        }

        /** Screen detection **/
        if (options.detectScreen) {
            device.screen = {};
            if (!!Modernizr && !!Modernizr.mq) {
                if (Modernizr.mq("only screen and (max-width: 240px)")) {
                    device.screen.size = "veryVerySmall";
                    addConditionalTest("veryVerySmallScreen", true);
                } else if (Modernizr.mq("only screen and (max-width: 320px)")) {
                    device.screen.size = "verySmall";
                    addConditionalTest("verySmallScreen", true);
                } else if (Modernizr.mq("only screen and (max-width: 480px)")) {
                    device.screen.size = "small";
                    addConditionalTest("smallScreen", true);
                }
                if (device.type === deviceTypes[1] || device.type === deviceTypes[2]) {
                    if (Modernizr.mq("only screen and (-moz-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen  and (min-device-pixel-ratio: 1.3), only screen and (min-resolution: 1.3dppx)")) {
                        device.screen.resolution = "high";
                        addConditionalTest("highresolution", true);
                    }
                }
            }
            if (device.type === deviceTypes[1] || device.type === deviceTypes[2]) {
                window.onresize = function(event) {
                    checkOrientation(event);
                };
                checkOrientation();
            } else {
                device.orientation = "landscape";
                addConditionalTest(device.orientation, true);
            }
        }

        /** OS detection **/
        if (options.detectOS) {
            Detectizr.os = {};
            os = Detectizr.os;
            if (device.model !== "") {
                if (device.model === "ipad" || device.model === "iphone" || device.model === "ipod") {
                    os.name = "ios";
                    setVersion(os, (test(/os\s([\d_]+)/) ? RegExp.$1 : "").replace(/_/g, "."));
                } else if (device.model === "android") {
                    os.name = "android";
                    setVersion(os, (test(/android\s([\d\.]+)/) ? RegExp.$1 : ""));
                } else if (device.model === "blackberry") {
                    os.name = "blackberry";
                    setVersion(os, (test(/version\/([^\s]+)/) ? RegExp.$1 : ""));
                } else if (device.model === "playbook") {
                    os.name = "blackberry";
                    setVersion(os, (test(/os ([^\s]+)/) ? RegExp.$1.replace(";", "") : ""));
                }
            }
            if (!os.name) {
                if (is("win") || is("16bit")) {
                    os.name = "windows";
                    if (is("windows nt 10")) {
                        setVersion(os, "10");
                    } else if (is("windows nt 6.3")) {
                        setVersion(os, "8.1");
                    } else if (is("windows nt 6.2") || test(/\(windows 8\)/)) { //windows 8 chrome mac fix
                        setVersion(os, "8");
                    } else if (is("windows nt 6.1")) {
                        setVersion(os, "7");
                    } else if (is("windows nt 6.0")) {
                        setVersion(os, "vista");
                    } else if (is("windows nt 5.2") || is("windows nt 5.1") || is("windows xp")) {
                        setVersion(os, "xp");
                    } else if (is("windows nt 5.0") || is("windows 2000")) {
                        setVersion(os, "2k");
                    } else if (is("winnt") || is("windows nt")) {
                        setVersion(os, "nt");
                    } else if (is("win98") || is("windows 98")) {
                        setVersion(os, "98");
                    } else if (is("win95") || is("windows 95")) {
                        setVersion(os, "95");
                    }
                } else if (is("mac") || is("darwin")) {
                    os.name = "mac os";
                    if (is("68k") || is("68000")) {
                        setVersion(os, "68k");
                    } else if (is("ppc") || is("powerpc")) {
                        setVersion(os, "ppc");
                    } else if (is("os x")) {
                        setVersion(os, (test(/os\sx\s([\d_]+)/) ? RegExp.$1 : "os x").replace(/_/g, "."));
                    }
                } else if (is("webtv")) {
                    os.name = "webtv";
                } else if (is("x11") || is("inux")) {
                    os.name = "linux";
                } else if (is("sunos")) {
                    os.name = "sun";
                } else if (is("irix")) {
                    os.name = "irix";
                } else if (is("freebsd")) {
                    os.name = "freebsd";
                } else if (is("bsd")) {
                    os.name = "bsd";
                }
            }
            if (!!os.name) {
                addConditionalTest(os.name, true);
                if (!!os.major) {
                    addVersionTest(os.name, os.major);
                    if (!!os.minor) {
                        addVersionTest(os.name, os.major, os.minor);
                    }
                }
            }
            if (test(/\sx64|\sx86|\swin64|\swow64|\samd64/)) {
                os.addressRegisterSize = "64bit";
            } else {
                os.addressRegisterSize = "32bit";
            }
            addConditionalTest(os.addressRegisterSize, true);
        }

        /** Browser detection **/
        if (options.detectBrowser) {
            browser = Detectizr.browser;
            if (!test(/opera|webtv/) && (test(/msie\s([\d\w\.]+)/) || is("trident"))) {
                browser.engine = "trident";
                browser.name = "ie";
                if (!window.addEventListener && document.documentMode && document.documentMode === 7) {
                    setVersion(browser, "8.compat");
                } else if (test(/trident.*rv[ :](\d+)\./)) {
                    setVersion(browser, RegExp.$1);
                } else {
                    setVersion(browser, (test(/trident\/4\.0/) ? "8" : RegExp.$1));
                }
            } else if (is("firefox")) {
                browser.engine = "gecko";
                browser.name = "firefox";
                setVersion(browser, (test(/firefox\/([\d\w\.]+)/) ? RegExp.$1 : ""));
            } else if (is("gecko/")) {
                browser.engine = "gecko";
            } else if (is("opera")) {
                browser.name = "opera";
                browser.engine = "presto";
                setVersion(browser, (test(/version\/([\d\.]+)/) ? RegExp.$1 : (test(/opera(\s|\/)([\d\.]+)/) ? RegExp.$2 : "")));
            } else if (is("konqueror")) {
                browser.name = "konqueror";
            } else if (is("edge")) {
                browser.engine = "webkit";
                browser.name = "edge";
                setVersion(browser, (test(/edge\/([\d\.]+)/) ? RegExp.$1 : ""));
            } else if (is("chrome")) {
                browser.engine = "webkit";
                browser.name = "chrome";
                setVersion(browser, (test(/chrome\/([\d\.]+)/) ? RegExp.$1 : ""));
            } else if (is("iron")) {
                browser.engine = "webkit";
                browser.name = "iron";
            } else if (is("crios")) {
                browser.name = "chrome";
                browser.engine = "webkit";
                setVersion(browser, (test(/crios\/([\d\.]+)/) ? RegExp.$1 : ""));
            } else if (is("applewebkit/")) {
                browser.name = "safari";
                browser.engine = "webkit";
                setVersion(browser, (test(/version\/([\d\.]+)/) ? RegExp.$1 : ""));
            } else if (is("mozilla/")) {
                browser.engine = "gecko";
            }
            if (!!browser.name) {
                addConditionalTest(browser.name, true);
                if (!!browser.major) {
                    addVersionTest(browser.name, browser.major);
                    if (!!browser.minor) {
                        addVersionTest(browser.name, browser.major, browser.minor);
                    }
                }
            }
            addConditionalTest(browser.engine, true);

            // Browser Language
            browser.language = navigator.userLanguage || navigator.language;
            addConditionalTest(browser.language, true);
        }

        /** Plugin detection **/
        if (options.detectPlugins) {
            browser.plugins = [];
            for (i = plugins2detect.length - 1; i >= 0; i--) {
                plugin2detect = plugins2detect[i];
                pluginFound = false;
                if (window.ActiveXObject) {
                    pluginFound = detectObject(plugin2detect.progIds);
                } else if (navigator.plugins) {
                    pluginFound = detectPlugin(plugin2detect.substrs);
                }
                if (pluginFound) {
                    browser.plugins.push(plugin2detect.name);
                    addConditionalTest(plugin2detect.name, true);
                }
            }
            if (navigator.javaEnabled()) {
                browser.plugins.push("java");
                addConditionalTest("java", true);
            }
        }
    }
    Detectizr.detect = function(settings) {
        return detect(settings);
    };
    Detectizr.init = function() {
        if (Detectizr !== undefined) {
            Detectizr.browser = {
                userAgent: (navigator.userAgent || navigator.vendor || window.opera).toLowerCase()
            };
            Detectizr.detect();
        }
    };
    Detectizr.init();

    return Detectizr;
}(this, this.navigator, this.document));


