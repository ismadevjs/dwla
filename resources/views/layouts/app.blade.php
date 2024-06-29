<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>{{setting('site.title')}}</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="alternate" href="https://cndh.org.dz/" hreflang="ar">
    <link rel="alternate" href="https://cndh.org.dz/accueil/" hreflang="fr">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="alternate" type="application/rss+xml" title="CNDH « الخلاصة" href="https://cndh.org.dz/feed/">
    <link rel="alternate" type="application/rss+xml" title="CNDH « خلاصة التعليقات"
        href="https://cndh.org.dz/comments/feed/">
    <link id="font-awesome-css" href="{{ asset('css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
    <link id="font-awesome-4-shim-css" href="{{ asset('css/autoptimize_single_e140a7d32f343530f016095df3cc2ae4.css') }}"
        type="text/css" rel="stylesheet">
    <!-- This site uses the Google Analytics by MonsterInsights plugin v8.14.1 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <script src="//www.googletagmanager.com/gtag/js?id=G-P2LCVCX96K" data-cfasync="false" data-wpfc-render="false" async="">
    </script>
    <script data-cfasync="false" data-wpfc-render="false">
        var mi_version = '8.14.1';
        var mi_track_user = true;
        var mi_no_track_reason = '';

        var disableStrs = [
            'ga-disable-G-P2LCVCX96K',
        ];

        /* Function to detect opted out users */
        function __gtagTrackerIsOptedOut() {
            for (var index = 0; index < disableStrs.length; index++) {
                if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
                    return true;
                }
            }

            return false;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gtagTrackerIsOptedOut()) {
            for (var index = 0; index < disableStrs.length; index++) {
                window[disableStrs[index]] = true;
            }
        }

        /* Opt-out function */
        function __gtagTrackerOptout() {
            for (var index = 0; index < disableStrs.length; index++) {
                document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                window[disableStrs[index]] = true;
            }
        }

        if ('undefined' === typeof gaOptout) {
            function gaOptout() {
                __gtagTrackerOptout();
            }
        }
        window.dataLayer = window.dataLayer || [];

        window.MonsterInsightsDualTracker = {
            helpers: {},
            trackers: {},
        };
        if (mi_track_user) {
            function __gtagDataLayer() {
                dataLayer.push(arguments);
            }

            function __gtagTracker(type, name, parameters) {
                if (!parameters) {
                    parameters = {};
                }

                if (parameters.send_to) {
                    __gtagDataLayer.apply(null, arguments);
                    return;
                }

                if (type === 'event') {
                    parameters.send_to = monsterinsights_frontend.v4_id;
                    var hookName = name;
                    if (typeof parameters['event_category'] !== 'undefined') {
                        hookName = parameters['event_category'] + ':' + name;
                    }

                    if (typeof MonsterInsightsDualTracker.trackers[hookName] !== 'undefined') {
                        MonsterInsightsDualTracker.trackers[hookName](parameters);
                    } else {
                        __gtagDataLayer('event', name, parameters);
                    }

                } else {
                    __gtagDataLayer.apply(null, arguments);
                }
            }

            __gtagTracker('js', new Date());
            __gtagTracker('set', {
                'developer_id.dZGIzZG': true,
            });
            __gtagTracker('config', 'G-P2LCVCX96K', {
                "forceSSL": "true",
                "link_attribution": "true"
            });
            window.gtag = __gtagTracker;
            (function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                /* ga and __gaTracker compatibility shim. */
                var noopfn = function() {
                    return null;
                };
                var newtracker = function() {
                    return new Tracker();
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift('send');
                    __gaTracker.apply(null, args);
                };
                var __gaTracker = function() {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        if ('send' === arguments[0]) {
                            var hitConverted, hitObject = false,
                                action;
                            if ('event' === arguments[1]) {
                                if ('undefined' !== typeof arguments[3]) {
                                    hitObject = {
                                        'eventAction': arguments[3],
                                        'eventCategory': arguments[2],
                                        'eventLabel': arguments[4],
                                        'value': arguments[5] ? arguments[5] : 1,
                                    }
                                }
                            }
                            if ('pageview' === arguments[1]) {
                                if ('undefined' !== typeof arguments[2]) {
                                    hitObject = {
                                        'eventAction': 'page_view',
                                        'page_path': arguments[2],
                                    }
                                }
                            }
                            if (typeof arguments[2] === 'object') {
                                hitObject = arguments[2];
                            }
                            if (typeof arguments[5] === 'object') {
                                Object.assign(hitObject, arguments[5]);
                            }
                            if ('undefined' !== typeof arguments[1].hitType) {
                                hitObject = arguments[1];
                                if ('pageview' === hitObject.hitType) {
                                    hitObject.eventAction = 'page_view';
                                }
                            }
                            if (hitObject) {
                                action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject
                                    .eventAction;
                                hitConverted = mapArgs(hitObject);
                                __gtagTracker('event', action, hitConverted);
                            }
                        }
                        return;
                    }

                    function mapArgs(args) {
                        var arg, hit = {};
                        var gaMap = {
                            'eventCategory': 'event_category',
                            'eventAction': 'event_action',
                            'eventLabel': 'event_label',
                            'eventValue': 'event_value',
                            'nonInteraction': 'non_interaction',
                            'timingCategory': 'event_category',
                            'timingVar': 'name',
                            'timingValue': 'value',
                            'timingLabel': 'event_label',
                            'page': 'page_path',
                            'location': 'page_location',
                            'title': 'page_title',
                        };
                        for (arg in args) {
                            if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
                                hit[gaMap[arg]] = args[arg];
                            } else {
                                hit[arg] = args[arg];
                            }
                        }
                        return hit;
                    }

                    try {
                        f.hitCallback();
                    } catch (ex) {}
                };
                __gaTracker.create = newtracker;
                __gaTracker.getByName = newtracker;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                __gaTracker.loaded = true;
                window['__gaTracker'] = __gaTracker;
            })();
        } else {
            console.log("");
            (function() {
                function __gtagTracker() {
                    return null;
                }

                window['__gtagTracker'] = __gtagTracker;
                window['gtag'] = __gtagTracker;
            })();
        }
    </script>
    <!-- / Google Analytics by MonsterInsights -->
    <link rel="stylesheet" id="wp-block-library-rtl-css" href="{{ asset('css/style-rtl.min.css') }}" media="all">
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--palette-color-1: var(--paletteColor1, #187181);
            --wp--preset--color--palette-color-2: var(--paletteColor2, #2E589B);
            --wp--preset--color--palette-color-3: var(--paletteColor3, #3A4F66);
            --wp--preset--color--palette-color-4: var(--paletteColor4, #132644);
            --wp--preset--color--palette-color-5: var(--paletteColor5, #e1e8ed);
            --wp--preset--color--palette-color-6: var(--paletteColor6, #f2f5f7);
            --wp--preset--color--palette-color-7: var(--paletteColor7, #FAFBFC);
            --wp--preset--color--palette-color-8: var(--paletteColor8, #ffffff);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--gradient--juicy-peach: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
            --wp--preset--gradient--young-passion: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
            --wp--preset--gradient--true-sunset: linear-gradient(to right, #fa709a 0%, #fee140 100%);
            --wp--preset--gradient--morpheus-den: linear-gradient(to top, #30cfd0 0%, #330867 100%);
            --wp--preset--gradient--plum-plate: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --wp--preset--gradient--aqua-splash: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
            --wp--preset--gradient--love-kiss: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
            --wp--preset--gradient--new-retrowave: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);
            --wp--preset--gradient--plum-bath: linear-gradient(to top, #cc208e 0%, #6713d2 100%);
            --wp--preset--gradient--high-flight: linear-gradient(to right, #0acffe 0%, #495aff 100%);
            --wp--preset--gradient--teen-party: linear-gradient(-225deg, #FF057C 0%, #8D0B93 50%, #321575 100%);
            --wp--preset--gradient--fabled-sunset: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%);
            --wp--preset--gradient--arielle-smile: radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%);
            --wp--preset--gradient--itmeo-branding: linear-gradient(180deg, #2af598 0%, #009efd 100%);
            --wp--preset--gradient--deep-blue: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            --wp--preset--gradient--strong-bliss: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);
            --wp--preset--gradient--sweet-period: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
            --wp--preset--gradient--purple-division: linear-gradient(to top, #7028e4 0%, #e5b2ca 100%);
            --wp--preset--gradient--cold-evening: linear-gradient(to top, #0c3483 0%, #a2b6df 100%, #6b8cce 100%, #a2b6df 100%);
            --wp--preset--gradient--mountain-rock: linear-gradient(to right, #868f96 0%, #596164 100%);
            --wp--preset--gradient--desert-hump: linear-gradient(to top, #c79081 0%, #dfa579 100%);
            --wp--preset--gradient--ethernal-constance: linear-gradient(to top, #09203f 0%, #537895 100%);
            --wp--preset--gradient--happy-memories: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);
            --wp--preset--gradient--grown-early: linear-gradient(to top, #0ba360 0%, #3cba92 100%);
            --wp--preset--gradient--morning-salad: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);
            --wp--preset--gradient--night-call: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);
            --wp--preset--gradient--mind-crawl: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);
            --wp--preset--gradient--angel-care: linear-gradient(-225deg, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
            --wp--preset--gradient--juicy-cake: linear-gradient(to top, #e14fad 0%, #f9d423 100%);
            --wp--preset--gradient--rich-metal: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
            --wp--preset--gradient--mole-hall: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);
            --wp--preset--gradient--cloudy-knoxville: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            --wp--preset--gradient--soft-grass: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
            --wp--preset--gradient--saint-petersburg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --wp--preset--gradient--everlasting-sky: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
            --wp--preset--gradient--kind-steel: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
            --wp--preset--gradient--over-sun: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
            --wp--preset--gradient--premium-white: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
            --wp--preset--gradient--clean-mirror: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
            --wp--preset--gradient--wild-apple: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
            --wp--preset--gradient--snow-again: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
            --wp--preset--gradient--confident-cloud: linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
            --wp--preset--gradient--glass-water: linear-gradient(to top, #dfe9f3 0%, white 100%);
            --wp--preset--gradient--perfect-white: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            --wp--preset--duotone--dark-grayscale: url('index_1.html#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('index_1.html#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('index_1.html#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('index_1.html#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('index_1.html#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('index_1.html#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('index_1.html#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('index_1.html#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        body {
            margin: 0;
            --wp--style--global--content-size: var(--block-max-width);
            --wp--style--global--wide-size: var(--block-wide-max-width);
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-site-blocks>* {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-site-blocks>*+* {
            margin-block-start: var(--content-spacing);
        }

        body {
            --wp--style--block-gap: var(--content-spacing);
        }

        body .is-layout-flow>* {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        body .is-layout-flow>*+* {
            margin-block-start: var(--content-spacing);
            margin-block-end: 0;
        }

        body .is-layout-constrained>* {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        body .is-layout-constrained>*+* {
            margin-block-start: var(--content-spacing);
            margin-block-end: 0;
        }

        body .is-layout-flex {
            gap: var(--content-spacing);
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-palette-color-1-color {
            color: var(--wp--preset--color--palette-color-1) !important;
        }

        .has-palette-color-2-color {
            color: var(--wp--preset--color--palette-color-2) !important;
        }

        .has-palette-color-3-color {
            color: var(--wp--preset--color--palette-color-3) !important;
        }

        .has-palette-color-4-color {
            color: var(--wp--preset--color--palette-color-4) !important;
        }

        .has-palette-color-5-color {
            color: var(--wp--preset--color--palette-color-5) !important;
        }

        .has-palette-color-6-color {
            color: var(--wp--preset--color--palette-color-6) !important;
        }

        .has-palette-color-7-color {
            color: var(--wp--preset--color--palette-color-7) !important;
        }

        .has-palette-color-8-color {
            color: var(--wp--preset--color--palette-color-8) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-palette-color-1-background-color {
            background-color: var(--wp--preset--color--palette-color-1) !important;
        }

        .has-palette-color-2-background-color {
            background-color: var(--wp--preset--color--palette-color-2) !important;
        }

        .has-palette-color-3-background-color {
            background-color: var(--wp--preset--color--palette-color-3) !important;
        }

        .has-palette-color-4-background-color {
            background-color: var(--wp--preset--color--palette-color-4) !important;
        }

        .has-palette-color-5-background-color {
            background-color: var(--wp--preset--color--palette-color-5) !important;
        }

        .has-palette-color-6-background-color {
            background-color: var(--wp--preset--color--palette-color-6) !important;
        }

        .has-palette-color-7-background-color {
            background-color: var(--wp--preset--color--palette-color-7) !important;
        }

        .has-palette-color-8-background-color {
            background-color: var(--wp--preset--color--palette-color-8) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-palette-color-1-border-color {
            border-color: var(--wp--preset--color--palette-color-1) !important;
        }

        .has-palette-color-2-border-color {
            border-color: var(--wp--preset--color--palette-color-2) !important;
        }

        .has-palette-color-3-border-color {
            border-color: var(--wp--preset--color--palette-color-3) !important;
        }

        .has-palette-color-4-border-color {
            border-color: var(--wp--preset--color--palette-color-4) !important;
        }

        .has-palette-color-5-border-color {
            border-color: var(--wp--preset--color--palette-color-5) !important;
        }

        .has-palette-color-6-border-color {
            border-color: var(--wp--preset--color--palette-color-6) !important;
        }

        .has-palette-color-7-border-color {
            border-color: var(--wp--preset--color--palette-color-7) !important;
        }

        .has-palette-color-8-border-color {
            border-color: var(--wp--preset--color--palette-color-8) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-juicy-peach-gradient-background {
            background: var(--wp--preset--gradient--juicy-peach) !important;
        }

        .has-young-passion-gradient-background {
            background: var(--wp--preset--gradient--young-passion) !important;
        }

        .has-true-sunset-gradient-background {
            background: var(--wp--preset--gradient--true-sunset) !important;
        }

        .has-morpheus-den-gradient-background {
            background: var(--wp--preset--gradient--morpheus-den) !important;
        }

        .has-plum-plate-gradient-background {
            background: var(--wp--preset--gradient--plum-plate) !important;
        }

        .has-aqua-splash-gradient-background {
            background: var(--wp--preset--gradient--aqua-splash) !important;
        }

        .has-love-kiss-gradient-background {
            background: var(--wp--preset--gradient--love-kiss) !important;
        }

        .has-new-retrowave-gradient-background {
            background: var(--wp--preset--gradient--new-retrowave) !important;
        }

        .has-plum-bath-gradient-background {
            background: var(--wp--preset--gradient--plum-bath) !important;
        }

        .has-high-flight-gradient-background {
            background: var(--wp--preset--gradient--high-flight) !important;
        }

        .has-teen-party-gradient-background {
            background: var(--wp--preset--gradient--teen-party) !important;
        }

        .has-fabled-sunset-gradient-background {
            background: var(--wp--preset--gradient--fabled-sunset) !important;
        }

        .has-arielle-smile-gradient-background {
            background: var(--wp--preset--gradient--arielle-smile) !important;
        }

        .has-itmeo-branding-gradient-background {
            background: var(--wp--preset--gradient--itmeo-branding) !important;
        }

        .has-deep-blue-gradient-background {
            background: var(--wp--preset--gradient--deep-blue) !important;
        }

        .has-strong-bliss-gradient-background {
            background: var(--wp--preset--gradient--strong-bliss) !important;
        }

        .has-sweet-period-gradient-background {
            background: var(--wp--preset--gradient--sweet-period) !important;
        }

        .has-purple-division-gradient-background {
            background: var(--wp--preset--gradient--purple-division) !important;
        }

        .has-cold-evening-gradient-background {
            background: var(--wp--preset--gradient--cold-evening) !important;
        }

        .has-mountain-rock-gradient-background {
            background: var(--wp--preset--gradient--mountain-rock) !important;
        }

        .has-desert-hump-gradient-background {
            background: var(--wp--preset--gradient--desert-hump) !important;
        }

        .has-ethernal-constance-gradient-background {
            background: var(--wp--preset--gradient--ethernal-constance) !important;
        }

        .has-happy-memories-gradient-background {
            background: var(--wp--preset--gradient--happy-memories) !important;
        }

        .has-grown-early-gradient-background {
            background: var(--wp--preset--gradient--grown-early) !important;
        }

        .has-morning-salad-gradient-background {
            background: var(--wp--preset--gradient--morning-salad) !important;
        }

        .has-night-call-gradient-background {
            background: var(--wp--preset--gradient--night-call) !important;
        }

        .has-mind-crawl-gradient-background {
            background: var(--wp--preset--gradient--mind-crawl) !important;
        }

        .has-angel-care-gradient-background {
            background: var(--wp--preset--gradient--angel-care) !important;
        }

        .has-juicy-cake-gradient-background {
            background: var(--wp--preset--gradient--juicy-cake) !important;
        }

        .has-rich-metal-gradient-background {
            background: var(--wp--preset--gradient--rich-metal) !important;
        }

        .has-mole-hall-gradient-background {
            background: var(--wp--preset--gradient--mole-hall) !important;
        }

        .has-cloudy-knoxville-gradient-background {
            background: var(--wp--preset--gradient--cloudy-knoxville) !important;
        }

        .has-soft-grass-gradient-background {
            background: var(--wp--preset--gradient--soft-grass) !important;
        }

        .has-saint-petersburg-gradient-background {
            background: var(--wp--preset--gradient--saint-petersburg) !important;
        }

        .has-everlasting-sky-gradient-background {
            background: var(--wp--preset--gradient--everlasting-sky) !important;
        }

        .has-kind-steel-gradient-background {
            background: var(--wp--preset--gradient--kind-steel) !important;
        }

        .has-over-sun-gradient-background {
            background: var(--wp--preset--gradient--over-sun) !important;
        }

        .has-premium-white-gradient-background {
            background: var(--wp--preset--gradient--premium-white) !important;
        }

        .has-clean-mirror-gradient-background {
            background: var(--wp--preset--gradient--clean-mirror) !important;
        }

        .has-wild-apple-gradient-background {
            background: var(--wp--preset--gradient--wild-apple) !important;
        }

        .has-snow-again-gradient-background {
            background: var(--wp--preset--gradient--snow-again) !important;
        }

        .has-confident-cloud-gradient-background {
            background: var(--wp--preset--gradient--confident-cloud) !important;
        }

        .has-glass-water-gradient-background {
            background: var(--wp--preset--gradient--glass-water) !important;
        }

        .has-perfect-white-gradient-background {
            background: var(--wp--preset--gradient--perfect-white) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css"
        href="{{ asset('css/autoptimize_single_0e4a098f3f6e3faede64db8b9da80ba2.css') }}" media="all">
    <link rel="stylesheet" id="contact-form-7-rtl-css"
        href="{{ asset('css/autoptimize_single_3ae045c00f92fc31d3585fe7f975412d.css') }}" media="all">
    <link rel="stylesheet" id="fd-nt-style-css"
        href="{{ asset('css/autoptimize_single_74d5c683ccfc8bf97fc3d00588bb42a7.css') }}" media="all">
    <link rel="stylesheet" id="ticker-style-css"
        href="{{ asset('css/autoptimize_single_0a385a7e8ce7486a58abb93f0019d4c8.css') }}" media="all">
    <link rel="stylesheet" id="elementor-icons-ekiticons-css"
        href="{{ asset('css/autoptimize_single_9323fd320e12c4d0d865a254138147d4.css') }}" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('css/elementor-icons.min.css') }}" media="all">
    <style id="elementor-icons-inline-css">
        .elementor-add-new-section .elementor-add-templately-promo-button {
            background-color: #5d4fff;
            background-image: url(images/logo-icon.svg);
            background-repeat: no-repeat;
            background-position: center center;
            margin-left: 5px;
            position: relative;
            bottom: 5px;
        }

        .elementor-add-new-section .elementor-add-templately-promo-button {
            background-color: #5d4fff;
            background-image: url(images/logo-icon.svg);
            background-repeat: no-repeat;
            background-position: center center;
            margin-left: 5px;
            position: relative;
            bottom: 5px;
        }
    </style>
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('css/frontend-lite-rtl.min.css') }}"
        media="all">
    <style id="elementor-frontend-inline-css">
        .elementor-kit-13 {
            --e-global-color-primary: #00731b;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #00731b;
            --e-global-color-6d49f54: #000000;
            --e-global-color-782ac5e: #5F545E00;
            --e-global-color-8a574c9: #00731b;
            --e-global-color-d22c0f0: #00731b;
            --e-global-typography-primary-font-family: "Cairo";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Tajawal";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
            --e-global-typography-a1a4bb9-font-family: "Tajawal";
            --e-global-typography-a1a4bb9-font-weight: 600;
            --e-global-typography-a1a4bb9-font-style: normal;
            --e-global-typography-4a55b6e-font-family: "Tajawal";
            --e-global-typography-4a55b6e-font-weight: 500;
            --e-global-typography-4a55b6e-font-style: normal;
            --e-global-typography-9bca482-font-family: "Tajawal";
            --e-global-typography-9bca482-font-weight: 600;
            --e-global-typography-9bca482-font-style: normal;
            --e-global-typography-9293ccd-font-family: "Tajawal";
            --e-global-typography-9293ccd-font-weight: 600;
            --e-global-typography-9293ccd-font-style: normal;
            --e-global-typography-9293ccd-line-height: 2.5em;
            font-family: "Tajawal", tajawal;
        }

        .elementor-kit-13 h2 {
            font-family: "Tajawal", tajawal;
            font-size: 25px;
            font-weight: 500;
            font-style: normal;
        }

        .elementor-kit-13 h3 {
            font-family: "Tajawal", tajawal;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-kit-13 h4 {
            font-family: "Tajawal", tajawal;
            font-size: 19px;
            font-weight: 500;
        }

        .elementor-kit-13 h5 {
            font-family: "Tajawal", tajawal;
            font-size: 18px;
            font-weight: 500;
            font-style: normal;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .e-con {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-41 .elementor-element.elementor-element-bb848ef>.elementor-container {
            min-height: 1118px;
        }

        .elementor-41 .elementor-element.elementor-element-bb848ef:not(.elementor-motion-effects-element-type-background),
        .elementor-41 .elementor-element.elementor-element-bb848ef>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url({{ Voyager::image(carouselImg()) }});
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-41 .elementor-element.elementor-element-bb848ef>.elementor-background-overlay {
            opacity: 0.8;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-bb848ef {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -30px;
            margin-bottom: 0px;
            padding: 20px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-bb848ef>.elementor-shape-bottom svg {
            width: calc(168% + 1.3px);
            height: 500px;
        }

        .elementor-41 .elementor-element.elementor-element-e54c220 .elementor-column-gap-custom .elementor-column>.elementor-element-populated {
            padding: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-e54c220:not(.elementor-motion-effects-element-type-background),
        .elementor-41 .elementor-element.elementor-element-e54c220>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-782ac5e);
        }

        .elementor-41 .elementor-element.elementor-element-e54c220:hover {
            background-color: var(--e-global-color-782ac5e);
        }

        .elementor-41 .elementor-element.elementor-element-e54c220>.elementor-background-overlay {
            background-color: var(--e-global-color-782ac5e);
            opacity: 0.5;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-e54c220 {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 40px;
        }

        .elementor-41 .elementor-element.elementor-element-441e3a2:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-41 .elementor-element.elementor-element-441e3a2>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-441e3a2>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-441e3a2>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .eael-ticker-wrap .eael-ticker .ticker-content a {
            color: var(--e-global-color-8a574c9);
            font-family: "Cairo", tajawal;
            font-weight: 500;
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .eael-ticker-wrap .eael-ticker .ticker-content a:hover {
            color: #f44336;
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .eael-ticker-wrap .ticker-badge {
            background-color: #00731b;
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .eael-ticker-wrap .ticker-badge span {
            color: #fff;
            font-family: var(--e-global-typography-accent-font-family), tajawal;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .swiper-container-wrap .swiper-button-next,
        .elementor-41 .elementor-element.elementor-element-1a464be .swiper-container-wrap .swiper-button-prev {
            font-size: 22px;
            color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .swiper-container-wrap .swiper-button-next img,
        .elementor-41 .elementor-element.elementor-element-1a464be .swiper-container-wrap .swiper-button-prev img {
            width: 22px;
            height: 22px;
        }

        .elementor-41 .elementor-element.elementor-element-1a464be .swiper-container-wrap .swiper-button-next svg,
        .elementor-41 .elementor-element.elementor-element-1a464be .swiper-container-wrap .swiper-button-prev svg {
            width: 22px;
            height: 22px;
            line-height: 22px;
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-62d4038>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 22px;
        }

        .elementor-41 .elementor-element.elementor-element-17e5e70 {
            text-align: center;
        }

        .elementor-41 .elementor-element.elementor-element-17e5e70 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Cairo", tajawal;
        }

        .elementor-41 .elementor-element.elementor-element-31113cd {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-blocksy_palette_6);
            --divider-border-width: 1px;
        }

        .elementor-41 .elementor-element.elementor-element-31113cd .elementor-divider-separator {
            width: 28%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-41 .elementor-element.elementor-element-31113cd .elementor-divider {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-fb0107d {
            text-align: justify;
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit_double_button {
            width: 50%;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn:not(:last-child) {
            margin-right: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-one>i {
            padding-right: 9px;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-one>svg {
            margin-right: 9px;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-two>i {
            padding-right: 8px;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-two>svg {
            margin-right: 8px;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-one {
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-color: var(--e-global-color-blocksy_palette_7);
            border-radius: 10px 10px 10px 10px;
            background-color: #FFFFFF00;
            margin: 0px 0px 0px 10px;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-one svg path {
            stroke: var(--e-global-color-blocksy_palette_8);
            fill: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-one:hover {
            color: var(--e-global-color-primary);
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-color: var(--e-global-color-blocksy_palette_8);
            background-color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-one:hover svg path {
            stroke: var(--e-global-color-primary);
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-two {
            color: #ffffff;
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-radius: 10px 10px 10px 10px;
            background-color: #FFFFFF00;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-two svg path {
            stroke: #ffffff;
            fill: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-two:hover {
            color: var(--e-global-color-primary);
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-color: var(--e-global-color-blocksy_palette_8);
            background-color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-228cfcc .ekit-double-btn.ekit-double-btn-two:hover svg path {
            stroke: var(--e-global-color-primary);
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-67578b9 {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .elementor-41 .elementor-element.elementor-element-f53c752>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-f53c752>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-e052e0e {
            text-align: center;
        }

        .elementor-41 .elementor-element.elementor-element-e052e0e .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Cairo", tajawal;
        }

        .elementor-41 .elementor-element.elementor-element-ab98e66 {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-blocksy_palette_8);
            --divider-border-width: 1px;
        }

        .elementor-41 .elementor-element.elementor-element-ab98e66 .elementor-divider-separator {
            width: 18%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-41 .elementor-element.elementor-element-ab98e66 .elementor-divider {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue_post_carousel_item {
            border-radius: 12px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .uc_image_carousel_content {
            padding: 30px 30px 30px 30px;
            background-color: var(--e-global-color-blocksy_palette_8);
            min-height: 275px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue_post_category a {
            color: #9a9a9a;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue_post_category {
            margin-top: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue_post_date {
            color: #9a9a9a;
            margin-top: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue-grid-item-meta-data {
            color: #9a9a9a;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue-grid-item-meta-data svg {
            fill: #9a9a9a;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .uc_post_title {
            color: #000000;
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            margin-top: 10px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .ue_post_intro {
            color: #747474;
            margin-top: 10px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .uc_more_btn {
            font-family: "Tajawal", tajawal;
            padding: 10px 20px 10px 20px;
            border-radius: 8px;
            background-color: var(--e-global-color-primary);
            color: #ffffff;
            margin-top: 20px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .uc_more_btn:hover {
            background-color: var(--e-global-color-accent);
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-dot {
            width: 8px;
            height: 8px;
            background-color: #c6c6c6;
            margin: 0px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-dot.active {
            background-color: #000000;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-dots {
            margin-top: 20px;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-nav .owl-prev {
            left: -84px;
            right: auto;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-nav .owl-next {
            right: -84px;
            left: auto;
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-carousel .owl-nav .owl-next,
        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-carousel .owl-nav .owl-prev {
            top: 150px;
            border-radius: 10px;
            width: 47px;
            height: 47px;
            line-height: 47px;
            font-size: 30px;
            background-color: #FFFFFF00;
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-carousel .owl-nav .owl-next:hover,
        .elementor-41 .elementor-element.elementor-element-f2dfee7 .owl-carousel .owl-nav .owl-prev:hover {
            background-color: var(--e-global-color-blocksy_palette_6);
            color: var(--e-global-color-blocksy_palette_4);
        }

        .elementor-41 .elementor-element.elementor-element-f2dfee7>.elementor-widget-container {
            margin: -33px 0px 0px 0px;
            padding: 50px 0px 50px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-05c6021 {
            margin-top: -55px;
            margin-bottom: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit_double_button {
            width: 55%;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn:not(:last-child) {
            margin-right: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-one>i {
            padding-right: 9px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-one>svg {
            margin-right: 9px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-two>i {
            padding-right: 8px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-two>svg {
            margin-right: 8px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-one {
            color: var(--e-global-color-primary);
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: var(--e-global-color-primary);
            border-radius: 10px 10px 10px 10px;
            background-color: var(--e-global-color-blocksy_palette_8);
            margin: 0px 0px 0px 10px;
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-one svg path {
            stroke: var(--e-global-color-primary);
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-one:hover {
            color: var(--e-global-color-blocksy_palette_8);
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: var(--e-global-color-primary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-one:hover svg path {
            stroke: var(--e-global-color-blocksy_palette_8);
            fill: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-two {
            color: var(--e-global-color-primary);
            font-family: "Tajawal", tajawal;
            font-size: 1.2em;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-radius: 10px 10px 10px 10px;
            background-color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-two svg path {
            stroke: var(--e-global-color-primary);
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-two:hover {
            color: var(--e-global-color-blocksy_palette_8);
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: var(--e-global-color-primary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-e9b970f .ekit-double-btn.ekit-double-btn-two:hover svg path {
            stroke: var(--e-global-color-blocksy_palette_8);
            fill: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-c0e6499>.elementor-container {
            min-height: 400px;
        }

        .elementor-41 .elementor-element.elementor-element-c0e6499:not(.elementor-motion-effects-element-type-background),
        .elementor-41 .elementor-element.elementor-element-c0e6499>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url({{ asset('images/BgListe-1.png') }});
            background-position: center center;
            background-repeat: no-repeat;
        }

        .elementor-41 .elementor-element.elementor-element-c0e6499 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -76px;
            margin-bottom: -76px;
            padding: 120px 40px 40px 40px;
        }

        .elementor-41 .elementor-element.elementor-element-c0e6499>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-bb8afc3>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-d8c00c5 {
            padding: 40px 40px 40px 40px;
        }

        .elementor-41 .elementor-element.elementor-element-4d8c333 .ue-overlay-image {
            transition: 0.3s;
            object-fit: cover;
        }

        .elementor-41 .elementor-element.elementor-element-4d8c333 .ue-main-image {
            object-fit: cover;
        }

        .elementor-41 .elementor-element.elementor-element-0850a38>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 20px;
        }

        .elementor-41 .elementor-element.elementor-element-bb57701 {
            text-align: right;
        }

        .elementor-41 .elementor-element.elementor-element-bb57701 .elementor-heading-title {
            font-family: "Cairo", tajawal;
            font-size: 1.8em;
            line-height: 1.4em;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item {
            flex-direction: row;
            text-align: inherit;
            padding: 0px 0px 10px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_spacer {
            width: 6px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_hr_line {
            background-color: var(--e-global-color-primary);
            height: 1px;
            width: 15px;
            margin-top: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_vr_line {
            background-color: var(--e-global-color-primary);
            width: 1px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_icon {
            background-color: var(--e-global-color-blocksy_palette_1);
            color: var(--e-global-color-blocksy_palette_8);
            width: 30px;
            height: 30px;
            font-size: 17px;
            border-radius: 100px;
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_icon svg {
            fill: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_icon img {
            width: 30px;
            height: 30px;
            border-radius: 100px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item:hover .ue_item_icon {
            background-color: var(--e-global-color-blocksy_palette_8);
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item:hover .ue_item_icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_active .ue_item_icon {
            background-color: #FFFFFF00;
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_active .ue_item_icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_content {
            background-color: #FFFFFF00;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_active .ue_item_content {
            border-color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_active .ue_item_title {
            color: #000000;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_title {
            margin-top: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .ue_item_text {
            color: #737373;
            font-family: "Tajawal", tajawal;
            margin-top: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .elementor-repeater-item-85a2e41 .ue_item_icon {
            color: #ffffff;
            background-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .elementor-repeater-item-85a2e41 .ue_item_icon svg {
            fill: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .elementor-repeater-item-dc871b0 .ue_item_icon {
            color: #ffffff;
            background-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .elementor-repeater-item-dc871b0 .ue_item_icon svg {
            fill: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .elementor-repeater-item-da2a067 .ue_item_icon {
            color: #ffffff;
            background-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-072d1f8 .elementor-repeater-item-da2a067 .ue_item_icon svg {
            fill: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-1b25662 .elementor-button {
            font-family: "Tajawal", tajawal;
            font-size: 1.1em;
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-primary) 0%, var(--e-global-color-accent) 100%);
            border-radius: 10px 10px 10px 10px;
            padding: 15px 40px 15px 40px;
        }

        .elementor-41 .elementor-element.elementor-element-1b25662 .elementor-button:hover,
        .elementor-41 .elementor-element.elementor-element-1b25662 .elementor-button:focus {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-accent) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-1b25662>.elementor-widget-container {
            margin: 12px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-d79eeae>.elementor-container {
            min-height: 400px;
        }

        .elementor-41 .elementor-element.elementor-element-d79eeae:not(.elementor-motion-effects-element-type-background),
        .elementor-41 .elementor-element.elementor-element-d79eeae>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url({{ asset('images/fds.jpg') }});
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-41 .elementor-element.elementor-element-d79eeae>.elementor-background-overlay {
            background-color: transparent;
            background-image: linear-gradient(90deg, #00731b 0%, #00731e 100%);
            opacity: 0.9;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-d79eeae {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 100px;
            margin-bottom: 0px;
            padding: 50px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-d79eeae>.elementor-shape-top svg {
            width: calc(189% + 1.3px);
        }

        .elementor-41 .elementor-element.elementor-element-d375518>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-5c7937a {
            text-align: center;
        }

        .elementor-41 .elementor-element.elementor-element-5c7937a .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Cairo", tajawal;
        }

        .elementor-41 .elementor-element.elementor-element-5c7937a>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-ea1d930 {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-blocksy_palette_6);
            --divider-border-width: 1px;
        }

        .elementor-41 .elementor-element.elementor-element-ea1d930 .elementor-divider-separator {
            width: 12%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-41 .elementor-element.elementor-element-ea1d930 .elementor-divider {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-a61d2f0.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-a61d2f0.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-a61d2f0.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 0px 0px 0px 0px;
            border-style: none;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox:hover {
            border-style: none;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox:hover .elementskit-info-box-title {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox .box-body>p {
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Tajawal", tajawal;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox:hover .box-body>p {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox p {
            margin: 0px 0px 35px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementkit-infobox-icon {
            color: #FFFFFF;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-info-box-icon>svg path {
            fill: #FFFFFF;
            stroke: #FFFFFF;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-info-box-icon {
            background-color: var(--e-global-color-primary);
            border-style: solid;
            border-width: 6px 6px 6px 6px;
            border-color: rgba(2, 1, 1, 0);
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox:hover .elementskit-info-box-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox:hover .elementskit-info-box-icon svg path {
            fill: var(--e-global-color-primary);
            stroke: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox:hover .elementskit-info-box-icon {
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 6px 6px 6px 6px;
            border-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox .elementskit-box-header .elementskit-info-box-icon {
            margin: 30px 0px 25px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox .elementskit-info-box-icon {
            padding: 15px 10px 15px 10px;
            transform: rotate(0deg);
            width: 90px;
            line-height: 47px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox .elementskit-info-box-icon {
            height: 90px;
        }

        .elementor-41 .elementor-element.elementor-element-a61d2f0 .elementskit-infobox .elementkit-infobox-icon {
            line-height: 47px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-5093ecc.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-5093ecc.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-5093ecc.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 0px 0px 0px 0px;
            border-style: none;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox:hover {
            border-style: none;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox:hover .elementskit-info-box-title {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox .box-body>p {
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Tajawal", tajawal;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox:hover .box-body>p {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox p {
            margin: 0px 0px 35px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementkit-infobox-icon {
            color: #FFFFFF;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-info-box-icon>svg path {
            fill: #FFFFFF;
            stroke: #FFFFFF;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-info-box-icon {
            background-color: #00731b;
            border-style: solid;
            border-width: 6px 6px 6px 6px;
            border-color: rgba(2, 1, 1, 0);
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox:hover .elementskit-info-box-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox:hover .elementskit-info-box-icon svg path {
            fill: var(--e-global-color-primary);
            stroke: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox:hover .elementskit-info-box-icon {
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 6px 6px 6px 6px;
            border-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox .elementskit-box-header .elementskit-info-box-icon {
            margin: 30px 0px 25px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox .elementskit-info-box-icon {
            padding: 15px 10px 15px 10px;
            transform: rotate(0deg);
            width: 90px;
            line-height: 47px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox .elementskit-info-box-icon {
            height: 90px;
        }

        .elementor-41 .elementor-element.elementor-element-5093ecc .elementskit-infobox .elementkit-infobox-icon {
            line-height: 47px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-7cad3c3.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-7cad3c3.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-7cad3c3.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 0px 0px 0px 0px;
            border-style: none;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox:hover {
            border-style: none;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: var(--e-global-color-blocksy_palette_8);
            font-family: "Cairo", tajawal;
            font-size: 2.2em;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox:hover .elementskit-info-box-title {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox .box-body>p {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox:hover .box-body>p {
            color: var(--e-global-color-blocksy_palette_8);
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox p {
            margin: 0px 0px 35px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementkit-infobox-icon {
            color: #FFFFFF;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-info-box-icon>svg path {
            fill: #FFFFFF;
            stroke: #FFFFFF;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-info-box-icon {
            background-color: var(--e-global-color-primary);
            border-style: solid;
            border-width: 6px 6px 6px 6px;
            border-color: rgba(2, 1, 1, 0);
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox:hover .elementskit-info-box-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox:hover .elementskit-info-box-icon svg path {
            fill: var(--e-global-color-primary);
            stroke: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox:hover .elementskit-info-box-icon {
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 6px 6px 6px 6px;
            border-color: var(--e-global-color-primary);
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox .elementskit-box-header .elementskit-info-box-icon {
            margin: 30px 0px 25px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox .elementskit-info-box-icon {
            padding: 15px 10px 15px 10px;
            transform: rotate(0deg);
            width: 90px;
            line-height: 47px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox .elementskit-info-box-icon {
            height: 90px;
        }

        .elementor-41 .elementor-element.elementor-element-7cad3c3 .elementskit-infobox .elementkit-infobox-icon {
            line-height: 47px;
        }

        .elementor-41 .elementor-element.elementor-element-3e858ec {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 50px 0px 50px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-847a231 {
            padding: 0px 0px 30px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-f8ea4f0 {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-blocksy_palette_8);
            --divider-border-width: 7px;
        }

        .elementor-41 .elementor-element.elementor-element-f8ea4f0 .elementor-divider-separator {
            width: 12%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-41 .elementor-element.elementor-element-f8ea4f0 .elementor-divider {
            text-align: center;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .elementor-41 .elementor-element.elementor-element-f8ea4f0>.elementor-widget-container {
            margin: -69px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-b274196 {
            text-align: center;
        }

        .elementor-41 .elementor-element.elementor-element-b274196 .elementor-heading-title {
            font-family: "Cairo", tajawal;
        }

        .elementor-41 .elementor-element.elementor-element-b24cb7f {
            --divider-border-style: solid;
            --divider-color: var(--e-global-color-text);
            --divider-border-width: 1px;
        }

        .elementor-41 .elementor-element.elementor-element-b24cb7f .elementor-divider-separator {
            width: 8%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-41 .elementor-element.elementor-element-b24cb7f .elementor-divider {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-6e0db40.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-6e0db40.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-6e0db40.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #000000;
            font-size: 18px;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox .box-body>p {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
            font-weight: 700;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-41 .elementor-element.elementor-element-6e0db40 .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-ff7dc34.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-ff7dc34.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-ff7dc34.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #000000;
            font-size: 18px;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox .box-body>p {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
            font-weight: 700;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-41 .elementor-element.elementor-element-ff7dc34 .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-2fee3df0.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-2fee3df0.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-2fee3df0.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #000000;
            font-size: 18px;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox .box-body>p {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
            font-weight: 700;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-41 .elementor-element.elementor-element-2fee3df0 .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-567cd8b.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-567cd8b.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-567cd8b.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #000000;
            font-size: 18px;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox .box-body>p {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
            font-weight: 700;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-41 .elementor-element.elementor-element-567cd8b .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-9541fec.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-9541fec.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-9541fec.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-9541fec.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #000000;
            font-size: 18px;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox .box-body>p {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
            font-weight: 700;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-41 .elementor-element.elementor-element-9541fec .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-daba734.ekit-equal-height-enable,
        .elementor-41 .elementor-element.elementor-element-daba734.ekit-equal-height-enable .elementor-widget-container,
        .elementor-41 .elementor-element.elementor-element-daba734.ekit-equal-height-enable .ekit-wid-con,
        .elementor-41 .elementor-element.elementor-element-daba734.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #000000;
            font-size: 18px;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox .box-body>p {
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
            font-weight: 700;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-41 .elementor-element.elementor-element-daba734 .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-1a5c98f:not(.elementor-motion-effects-element-type-background),
        .elementor-41 .elementor-element.elementor-element-1a5c98f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(209deg, var(--e-global-color-primary) 0%, var(--e-global-color-accent) 100%);
        }

        .elementor-41 .elementor-element.elementor-element-1a5c98f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }

        .elementor-41 .elementor-element.elementor-element-1a5c98f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-slide {
            margin-right: 15px;
            margin-left: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider {
            --ekit_client_logo_left_right_spacing: 15px;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-slide>div {
            margin-bottom: 0px;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-list {
            margin-bottom: -0px;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .ekit-price-card-slider {
            --ekit_client_logo_slidetosho: 4;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .simple_logo_image .single-client .content-image .main-image {
            opacity: 1;
            filter: alpha(opacity=1);
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .single-client img {
            opacity: 1;
            filter: alpha(opacity=1);
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .simple_logo_image .single-client:hover .content-image img {
            opacity: 1;
            filter: alpha(opacity=1);
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .simple_logo_image .single-client:hover .content-image .main-image {
            opacity: 1;
            filter: alpha(opacity=1);
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-dots li {
            margin-right: 8px;
            margin-left: 8px;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider ul.slick-dots {
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-dots li button {
            width: 8px;
            height: 8px;
            background-color: #1871819E;
        }

        .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-dots li.slick-active button {
            background-color: transparent;
            background-image: linear-gradient(180deg, var(--e-global-color-primary) 0%, var(--e-global-color-accent) 100%);
            width: 40px;
        }

        @media(max-width:1024px) {
            .elementor-41 .elementor-element.elementor-element-228cfcc .ekit_double_button {
                width: 80%;
            }

            .elementor-41 .elementor-element.elementor-element-e9b970f .ekit_double_button {
                width: 80%;
            }

            .elementor-41 .elementor-element.elementor-element-c0e6499:not(.elementor-motion-effects-element-type-background),
            .elementor-41 .elementor-element.elementor-element-c0e6499>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-size: cover;
            }

            .elementor-41 .elementor-element.elementor-element-c0e6499 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-slide {
                margin-right: 10px;
                margin-left: 10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider {
                --ekit_client_logo_left_right_spacing: 10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-slide>div {
                margin-bottom: 10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-list {
                margin-bottom: -10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .ekit-price-card-slider {
                --ekit_client_logo_slidetosho: 2;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-dots li {
                margin-right: 10px;
                margin-left: 10px;
            }
        }

        @media(min-width:1025px) {

            .elementor-41 .elementor-element.elementor-element-bb848ef:not(.elementor-motion-effects-element-type-background),
            .elementor-41 .elementor-element.elementor-element-bb848ef>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-attachment: fixed;
            }

            .elementor-41 .elementor-element.elementor-element-d79eeae:not(.elementor-motion-effects-element-type-background),
            .elementor-41 .elementor-element.elementor-element-d79eeae>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-attachment: fixed;
            }
        }

        @media(max-width:767px) {

            .elementor-41 .elementor-element.elementor-element-bb848ef:not(.elementor-motion-effects-element-type-background),
            .elementor-41 .elementor-element.elementor-element-bb848ef>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-repeat: repeat;
            }

            .elementor-41 .elementor-element.elementor-element-228cfcc .ekit_double_button {
                width: 100%;
            }

            .elementor-41 .elementor-element.elementor-element-e9b970f .ekit_double_button {
                width: 100%;
            }

            .elementor-41 .elementor-element.elementor-element-c0e6499 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-41 .elementor-element.elementor-element-d8c00c5 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-slide {
                margin-right: 10px;
                margin-left: 10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider {
                --ekit_client_logo_left_right_spacing: 10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-slide>div {
                margin-bottom: 10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-list {
                margin-bottom: -10px;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .ekit-price-card-slider {
                --ekit_client_logo_slidetosho: 1;
            }

            .elementor-41 .elementor-element.elementor-element-5d43147 .elementskit-clients-slider .slick-dots li {
                margin-right: 10px;
                margin-left: 10px;
            }
        }
    </style>
    <link rel="stylesheet" id="swiper-css" href="{{ asset('css/swiper.min.css') }}" media="all">
    <link rel="stylesheet" id="blocksy-fonts-font-source-google-css"
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&amp;family=Tajawal:wght@400;500&amp;display=swap"
        media="all">
    <link rel="stylesheet" id="ct-main-styles-css" href="{{ asset('css/main.min.css') }}" media="all">
    <link rel="stylesheet" id="ct-main-rtl-styles-css" href="{{ asset('css/main-rtl.min.css') }}" media="all">
    <link rel="stylesheet" id="ct-elementor-styles-css" href="{{ asset('css/elementor-frontend.min.css') }}"
        media="all">
    <link rel="stylesheet" id="ct-cf-7-styles-css" href="{{ asset('css/cf-7.min.css') }}" media="all">
    <link rel="stylesheet" id="ct-wpforms-styles-css" href="{{ asset('css/wpforms.min.css') }}" media="all">
    <link rel="stylesheet" id="ekit-widget-styles-css"
        href="{{ asset('css/autoptimize_single_0556fb7bf8dda33ac05da657338c285c.css') }}" media="all">
    <link rel="stylesheet" id="ekit-responsive-css"
        href="{{ asset('css/autoptimize_single_d942a12c644c208f99aeaa5fc0914d92.css') }}" media="all">
    <link rel="stylesheet" id="elementskit-rtl-css"
        href="{{ asset('css/autoptimize_single_0edb73c474c3af165c37ac4e4abebbbe.css') }}" media="all">
    <link rel="stylesheet" id="eael-general-css" href="{{ asset('css/general.min.css') }}" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Cairo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTajawal%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('css/fontawesome.min.css') }}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('css/brands.min.css') }}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('css/solid.min.css') }}"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script defer="" src="{{ asset('js/frontend-gtag.min.js') }}" id="monsterinsights-frontend-script-js')}}"></script>
    <script data-cfasync="false" data-wpfc-render="false" id="monsterinsights-frontend-script-js-extra">
        var monsterinsights_frontend = {
            "js_events_tracking": "true",
            "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
            "inbound_paths": "[]",
            "home_url": "http:\/\/cndh.org.dz",
            "hash_tracking": "false",
            "ua": "",
            "v4_id": "G-P2LCVCX96K"
        };
    </script>
    <script defer="" src="{{ asset('js/jquery.min.js') }}" id="jquery-core-js')}}"></script>
    <script defer="" src="{{ asset('js/jquery-migrate.min.js') }}" id="jquery-migrate-js')}}"></script>

    <noscript>
        <link rel='stylesheet'
            href='https://cndh.org.dz/wp-content/themes/blocksyCNDH/static/bundle/no-scripts.min.css' type='text/css'>
    </noscript>
    <style id="ct-main-styles-inline-css">
        [data-header*="type-1"] .ct-header [data-id="logo"] .site-logo-container {
            --logo-max-height: 83px;
        }

        [data-header*="type-1"] .ct-header [data-id="logo"] .site-title {
            --fontWeight: 700;
            --fontSize: 25px;
            --lineHeight: 1.5;
            --linkInitialColor: var(--paletteColor4);
        }

        [data-header*="type-1"] .ct-header [data-id="logo"] .site-description {
            --fontWeight: 500;
            --fontSize: 13px;
        }

        [data-header*="type-1"] .ct-header [data-id="menu"]>ul>li>a {
            --fontFamily: Cairo, Sans-Serif;
            --fontWeight: 700;
            --textTransform: uppercase;
            --fontSize: 1em;
            --lineHeight: 1.3;
            --linkInitialColor: var(--paletteColor3);
            --linkHoverColor: var(--paletteColor1);
        }

        [data-header*="type-1"] .ct-header [data-id="menu"][data-menu*="type-3"]>ul>li>a {
            --linkHoverColor: #ffffff;
            --linkActiveColor: #ffffff;
        }

        [data-header*="type-1"] .ct-header [data-id="menu"] {
            --menu-indicator-active-color: var(--paletteColor1);
        }

        [data-header*="type-1"] .ct-header [data-id="menu"] .sub-menu {
            --linkInitialColor: #132644;
            --linkHoverColor: var(--paletteColor8);
            --dropdown-background-color: var(--paletteColor8);
            --dropdown-background-hover-color: var(--paletteColor1);
            --fontFamily: Tajawal, Sans-Serif;
            --fontWeight: 500;
            --fontSize: 1em;
            --dropdown-divider: 1px dashed rgba(255, 255, 255, 0.1);
            --box-shadow: 0px 10px 20px rgba(41, 51, 61, 0.1);
            --border-radius: 0px 0px 2px 2px;
        }

        [data-header*="type-1"] .ct-header [data-id="menu-secondary"]>ul>li>a {
            --fontWeight: 700;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
            --linkInitialColor: var(--paletteColor8);
            --linkHoverColor: var(--paletteColor1);
        }

        [data-header*="type-1"] .ct-header [data-id="menu-secondary"][data-menu*="type-3"]>ul>li>a {
            --linkHoverColor: #ffffff;
            --linkActiveColor: #ffffff;
        }

        [data-header*="type-1"] .ct-header [data-id="menu-secondary"] .sub-menu {
            --linkInitialColor: var(--paletteColor8);
            --linkHoverColor: var(--paletteColor1);
            --dropdown-background-color: var(--paletteColor1);
            --fontWeight: 500;
            --fontSize: 12px;
            --dropdown-divider: 1px dashed rgba(255, 255, 255, 0.1);
            --box-shadow: 0px 10px 20px rgba(41, 51, 61, 0.1);
            --border-radius: 0px 0px 2px 2px;
        }

        [data-header*="type-1"] .ct-header [data-row*="middle"] {
            --height: 120px;
            background-color: var(--paletteColor8);
            background-image: none;
            --borderTop: none;
            --borderBottom: none;
            --box-shadow: none;
        }

        [data-header*="type-1"] .ct-header [data-row*="middle"]>div {
            --borderTop: none;
            --borderBottom: none;
        }

        [data-header*="type-1"] [data-id="mobile-menu"] {
            --fontWeight: 700;
            --fontSize: 20px;
            --linkInitialColor: #ffffff;
            --mobile-menu-divider: none;
        }

        [data-header*="type-1"] #offcanvas .ct-panel-inner {
            background-color: rgba(18, 21, 25, 0.98);
        }

        [data-header*="type-1"] #offcanvas {
            --side-panel-width: 500px;
        }

        [data-header*="type-1"] [data-behaviour*="side"] {
            --box-shadow: 0px 0px 70px rgba(0, 0, 0, 0.35);
        }

        [data-header*="type-1"] [data-id="search"] {
            --icon-color: var(--paletteColor8);
            --icon-hover-color: var(--paletteColor1);
        }

        [data-header*="type-1"] [data-id="search"] .ct-label {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-header*="type-1"] #search-modal .ct-search-results a {
            --fontWeight: 500;
            --fontSize: 14px;
            --lineHeight: 1.4;
        }

        [data-header*="type-1"] #search-modal {
            --linkInitialColor: #ffffff;
            --form-text-initial-color: #ffffff;
            --form-text-focus-color: #ffffff;
            background-color: rgba(18, 21, 25, 0.98);
        }

        [data-header*="type-1"] [data-id="socials"].ct-header-socials .ct-label {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --visibility: none;
        }

        [data-header*="type-1"] [data-id="socials"].ct-header-socials [data-color="custom"] {
            --icon-color: var(--paletteColor8);
            --icon-hover-color: var(--paletteColor1);
            --background-color: rgba(218, 222, 228, 0.3);
            --background-hover-color: var(--paletteColor1);
        }

        [data-header*="type-1"] .ct-header [data-id="text"] {
            --max-width: 100%;
            --fontSize: 15px;
            --lineHeight: 1.3;
        }

        [data-header*="type-1"] .ct-header [data-row*="top"] {
            --height: 50px;
            background-position: 0% 8%;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: var(--paletteColor1);
            background-image: url({{ Voyager::image(carouselImg()) }});
            --borderTop: none;
            --borderBottom: none;
            --box-shadow: none;
        }

        [data-header*="type-1"] .ct-header [data-row*="top"]>div {
            --borderTop: none;
            --borderBottom: none;
        }

        [data-header*="type-1"] [data-id="trigger"] {
            --icon-size: 18px;
        }

        [data-header*="type-1"] [data-id="trigger"] .ct-label {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-header*="type-1"] {
            --header-height: 170px;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="bottom"]>div {
            --container-spacing: 25px;
            --border: none;
            --border-top: none;
            --border-bottom: none;
            --grid-template-columns: initial;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="bottom"] .widget-title {
            --fontSize: 16px;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="bottom"] {
            --border-top: none;
            --border-bottom: none;
            background-color: transparent;
        }

        [data-footer*="type-1"] [data-id="copyright"] {
            --fontWeight: 400;
            --fontSize: 15px;
            --lineHeight: 1.3;
        }

        [data-footer*="type-1"][data-footer*="reveal"] .site-main {
            --footer-box-shadow: 0px 30px 50px rgba(0, 0, 0, 0.1);
        }

        [data-footer*="type-1"] footer.ct-footer {
            background-color: var(--paletteColor6);
        }

        :root {
            --fontFamily: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            --fontWeight: 400;
            --textTransform: none;
            --textDecoration: none;
            --fontSize: 16px;
            --lineHeight: 1.65;
            --letterSpacing: 0em;
            --buttonFontWeight: 500;
            --buttonFontSize: 15px;
            --has-classic-forms: var(--true);
            --has-modern-forms: var(--false);
            --form-field-border-initial-color: var(--border-color);
            --form-field-border-focus-color: var(--paletteColor1);
            --form-selection-control-initial-color: var(--border-color);
            --form-selection-control-accent-color: var(--paletteColor1);
            --paletteColor1: #00731b;
            --paletteColor2: #00731b;
            --paletteColor3: #3A4F66;
            --paletteColor4: #132644;
            --paletteColor5: #e1e8ed;
            --paletteColor6: #f2f5f7;
            --paletteColor7: #FAFBFC;
            --paletteColor8: #ffffff;
            --color: var(--paletteColor3);
            --linkInitialColor: var(--paletteColor1);
            --linkHoverColor: var(--paletteColor2);
            --selectionTextColor: #ffffff;
            --selectionBackgroundColor: var(--paletteColor1);
            --border-color: var(--paletteColor5);
            --headings-color: var(--paletteColor1);
            --content-spacing: 1.5em;
            --buttonMinHeight: 40px;
            --buttonShadow: none;
            --buttonTransform: none;
            --buttonTextInitialColor: #ffffff;
            --buttonTextHoverColor: #ffffff;
            --buttonInitialColor: var(--paletteColor1);
            --buttonHoverColor: var(--paletteColor2);
            --button-border: none;
            --buttonBorderRadius: 3px;
            --button-padding: 5px 20px;
            --normal-container-max-width: 1290px;
            --content-vertical-spacing: 30px;
            --narrow-container-max-width: 750px;
            --wide-offset: 130px;
        }

        h1 {
            --fontWeight: 700;
            --fontSize: 40px;
            --lineHeight: 1.5;
        }

        h2 {
            --fontWeight: 700;
            --fontSize: 35px;
            --lineHeight: 1.5;
        }

        h3 {
            --fontWeight: 700;
            --fontSize: 30px;
            --lineHeight: 1.5;
        }

        h4 {
            --fontWeight: 700;
            --fontSize: 25px;
            --lineHeight: 1.5;
        }

        h5 {
            --fontWeight: 700;
            --fontSize: 20px;
            --lineHeight: 1.5;
        }

        h6 {
            --fontWeight: 700;
            --fontSize: 16px;
            --lineHeight: 1.5;
        }

        .wp-block-quote.is-style-large p,
        .wp-block-pullquote p,
        .ct-quote-widget blockquote {
            --fontFamily: Georgia;
            --fontWeight: 600;
            --fontSize: 25px;
        }

        code,
        kbd,
        samp,
        pre {
            --fontFamily: monospace;
            --fontWeight: 400;
            --fontSize: 16px;
        }

        .ct-sidebar .widget-title {
            --fontSize: 18px;
        }

        .ct-breadcrumbs {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        body {
            background-color: var(--paletteColor7);
        }

        [data-prefix="single_blog_post"] .entry-header .page-title {
            --fontFamily: Cairo, Sans-Serif;
            --fontWeight: 600;
            --fontSize: 30px;
            --heading-color: var(--paletteColor8);
        }

        [data-prefix="single_blog_post"] .entry-header .entry-meta {
            --fontFamily: Tajawal, Sans-Serif;
            --fontWeight: 400;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
            --color: var(--paletteColor8);
            --linkHoverColor: var(--paletteColor5);
        }

        [data-prefix="single_blog_post"] .entry-header .page-description {
            --color: var(--paletteColor3);
        }

        [data-prefix="single_blog_post"] .hero-section[data-type="type-2"] {
            --alignment: center;
            background-color: var(--paletteColor6);
            background-image: none;
            --container-padding: 50px 0;
        }

        [data-prefix="categories"] .entry-header .page-title {
            --fontFamily: Cairo, Sans-Serif;
            --fontWeight: 600;
            --fontSize: 2em;
            --heading-color: var(--paletteColor8);
        }

        [data-prefix="categories"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="categories"] .entry-header .page-description {
            --color: var(--paletteColor3);
        }

        [data-prefix="categories"] .hero-section[data-type="type-2"] {
            --min-height: 0px;
            background-position: 0% 0%;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: var(--paletteColor6);
            background-image: url({{ Voyager::image(carouselImg()) }});
            --container-padding: 50px 0;
        }

        [data-prefix="search"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="search"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="author"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="author"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="author"] .hero-section[data-type="type-2"] {
            background-color: var(--paletteColor6);
            background-image: none;
            --container-padding: 50px 0;
        }

        [data-prefix="single_page"] .entry-header .page-title {
            --fontFamily: Cairo, Sans-Serif;
            --fontWeight: 400;
            --fontSize: 2em;
            --heading-color: var(--paletteColor8);
        }

        [data-prefix="single_page"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="single_page"] .entry-header .page-description {
            --color: var(--paletteColor8);
        }

        [data-prefix="single_page"] .hero-section[data-type="type-2"] {
            --min-height: 0px;
            background-position: 0% 0%;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: var(--paletteColor6);
            background-image: url({{ Voyager::image(carouselImg()) }});
            --container-padding: 50px 0;
        }

        [data-prefix="elementskit_content_single"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="elementskit_content_single"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_content_archive"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="elementskit_content_archive"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_template_single"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="elementskit_template_single"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_template_archive"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="elementskit_template_archive"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_widget_single"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="elementskit_widget_single"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_widget_archive"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="elementskit_widget_archive"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="blog"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="blog"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="blog"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="blog"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="categories"] .entry-card .entry-title {
            --fontFamily: Cairo, Sans-Serif;
            --fontWeight: 400;
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="categories"] .entry-excerpt {
            --fontFamily: Tajawal, Sans-Serif;
            --fontWeight: 400;
        }

        [data-prefix="categories"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --color: var(--paletteColor3);
        }

        [data-prefix="categories"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="author"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="author"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="author"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="author"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="search"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="search"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="search"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="search"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="elementskit_content_archive"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="elementskit_content_archive"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_content_archive"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="elementskit_content_archive"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="elementskit_template_archive"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="elementskit_template_archive"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_template_archive"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="elementskit_template_archive"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="elementskit_widget_archive"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="elementskit_widget_archive"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="elementskit_widget_archive"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="elementskit_widget_archive"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        form textarea {
            --form-field-height: 170px;
        }

        .ct-sidebar {
            --linkInitialColor: var(--color);
        }

        .ct-back-to-top {
            --icon-color: #ffffff;
            --icon-hover-color: #ffffff;
            --border-radius: 2px;
        }

        [data-prefix="single_blog_post"] .ct-related-posts-container {
            background-color: var(--paletteColor6);
        }

        [data-prefix="single_blog_post"] .ct-related-posts {
            --grid-template-columns: repeat(3, 1fr);
        }

        [data-prefix="elementskit_content_single"] [class*="ct-container"]>article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        [data-prefix="elementskit_template_single"] [class*="ct-container"]>article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        [data-prefix="elementskit_widget_single"] [class*="ct-container"]>article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        [data-prefix="single_blog_post"] [class*="ct-container"]>article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        [data-prefix="single_page"] [class*="ct-container"]>article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        @media (max-width: 999.98px) {
            [data-header*="type-1"] .ct-header [data-row*="middle"] {
                --height: 70px;
            }

            [data-header*="type-1"] #offcanvas {
                --side-panel-width: 65vw;
            }

            [data-header*="type-1"] {
                --header-height: 70px;
            }

            [data-footer*="type-1"] .ct-footer [data-row*="bottom"]>div {
                --grid-template-columns: initial;
            }

            [data-prefix="blog"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="author"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="search"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="elementskit_content_archive"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="elementskit_template_archive"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="elementskit_widget_archive"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            :root {
                --content-vertical-spacing: 60px;
            }

            [data-prefix="single_blog_post"] .ct-related-posts {
                --grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 689.98px) {
            [data-header*="type-1"] #offcanvas {
                --side-panel-width: 90vw;
            }

            [data-footer*="type-1"] .ct-footer [data-row*="bottom"]>div {
                --container-spacing: 15px;
                --grid-template-columns: initial;
            }

            [data-prefix="blog"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="blog"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="categories"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="author"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="author"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="search"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="search"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="elementskit_content_archive"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="elementskit_content_archive"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="elementskit_template_archive"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="elementskit_template_archive"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="elementskit_widget_archive"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="elementskit_widget_archive"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            :root {
                --content-vertical-spacing: 50px;
            }

            [data-prefix="single_blog_post"] .ct-related-posts {
                --grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
    <meta name="generator"
        content="Elementor 3.11.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-internal, google_font-enabled, font_display-swap">
    <link rel="icon" href="{{ asset('images/cropped-LogoCNDH-32x32.jpg') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('images/cropped-LogoCNDH-192x192.jpg') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('images/cropped-LogoCNDH-180x180.jpg') }}">
    <meta name="msapplication-TileImage"
        content="https://cndh.org.dz/wp-content/uploads/2023/07/cropped-LogoCNDH-270x270.jpg')}}">
    <style id="wp-custom-css">
        .slaganAr {
            font-family: 'Cairo', sans-serif;
            font-size: 1.8em;
        }

        .slaganFr {
            font-size: 1em;
        }

        .slaganAm {
            font-size: 1em;
        }
    </style>
    <style id="wpforms-css-vars-root">
        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
            --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
            --wpforms-label-color: rgba(0, 0, 0, 0.85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
            --wpforms-label-error-color: #d63637;
            --wpforms-button-border-radius: 3px;
            --wpforms-button-background-color: #066aab;
            --wpforms-button-text-color: #ffffff;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px;

        }
    </style>

    @stack('styles')
</head>

<body
    class="rtl home page-template-default page page-id-41 wp-custom-logo wp-embed-responsive elementor-default elementor-kit-13 elementor-page elementor-page-41 ct-loading ct-elementor-default-template"
    data-link="type-2" data-prefix="single_page" data-header="type-1" data-footer="type-1" itemscope="itemscope"
    itemtype="https://schema.org/WebPage">

    <a class="skip-link show-on-focus" href="#main">
        التجاوز إلى المحتوى</a>

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627"></feFuncR>
                    <feFuncG type="table" tableValues="0 0.49803921568627"></feFuncG>
                    <feFuncB type="table" tableValues="0 0.49803921568627"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1"></feFuncR>
                    <feFuncG type="table" tableValues="0 1"></feFuncG>
                    <feFuncB type="table" tableValues="0 1"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"></feFuncR>
                    <feFuncG type="table" tableValues="0 1"></feFuncG>
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1"></feFuncR>
                    <feFuncG type="table" tableValues="0 0.27843137254902"></feFuncG>
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0"></feFuncR>
                    <feFuncG type="table" tableValues="0 0.64705882352941"></feFuncG>
                    <feFuncB type="table" tableValues="0 1"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1"></feFuncR>
                    <feFuncG type="table" tableValues="0 0.94901960784314"></feFuncG>
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"></feFuncR>
                    <feFuncG type="table" tableValues="0 1"></feFuncG>
                    <feFuncB type="table" tableValues="0.44705882352941 0.4"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0"
        focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </feColorMatrix>
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1"></feFuncR>
                    <feFuncG type="table" tableValues="0 0.66274509803922"></feFuncG>
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"></feFuncB>
                    <feFuncA type="table" tableValues="1 1"></feFuncA>
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in"></feComposite>
            </filter>
        </defs>
    </svg>
    <div class="ct-drawer-canvas">
        <div id="search-modal" class="ct-panel" data-behaviour="modal">
            <div class="ct-panel-actions">
                <button class="ct-toggle-close" data-type="type-1" aria-label="Close search modal">
                    <svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                        <path
                            d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z">
                        </path>
                    </svg> </button>
            </div>

            <div class="ct-panel-content">

                <form role="search" method="get" class="search-form-isdo" action="{{ route('search') }}" aria-haspopup="listbox" data-live-results="thumbs">
                    <input type="search" class="modal-field" placeholder="ابحث" name="s" autocomplete="off" title="Search for..." aria-label="Search for...">

                    <button type="submit" class="search-submit" aria-label="Search button">
                        <svg class="ct-icon" aria-hidden="true" width="15" height="15" viewBox="0 0 15 15">
                            <path d="M14.8,13.7L12,11c0.9-1.2,1.5-2.6,1.5-4.2c0-3.7-3-6.8-6.8-6.8S0,3,0,6.8s3,6.8,6.8,6.8c1.6,0,3.1-0.6,4.2-1.5l2.8,2.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C15.1,14.5,15.1,14,14.8,13.7z M1.5,6.8c0-2.9,2.4-5.2,5.2-5.2S12,3.9,12,6.8S9.6,12,6.8,12S1.5,9.6,1.5,6.8z"></path>
                        </svg>
                        <span data-loader="circles"><span></span><span></span><span></span></span>
                    </button>



                    <div class="screen-reader-text" aria-live="polite" role="status">No results</div>
                </form>



            </div>
        </div>

        <div id="offcanvas" class="ct-panel ct-header" data-behaviour="right-side">
            <div class="ct-panel-inner">
                <div class="ct-panel-actions">
                    <button class="ct-toggle-close" data-type="type-1" aria-label="Close drawer">
                        <svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                            <path
                                d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-panel-content" data-device="desktop"></div>
                <div class="ct-panel-content" data-device="mobile">
                    <nav class="mobile-menu has-submenu" data-id="mobile-menu" data-interaction="click"
                        data-toggle-type="type-1" aria-label="Off Canvas Menu">
                        <ul id="menu-%d8%a7%d9%84%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d8%a9-1"
                            role="menubar">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-73"
                                role="none"><a href="{{ route('index') }}" aria-current="page"
                                    class="ct-menu-link" role="menuitem">الرئيسية</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-445"
                                role="none"><span class="ct-sub-menu-parent"><a href="#"
                                        class="ct-menu-link" role="menuitem">عن المجلس</a><button
                                        class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                        aria-haspopup="true" aria-expanded="false"><svg class="ct-icon toggle-icon-1"
                                            width="15" height="15" viewBox="0 0 15 15">
                                            <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z"></path>
                                        </svg></button></span>
                                <ul class="sub-menu" role="menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1052"
                                        role="none"><span class="ct-sub-menu-parent"><a
                                                href="https://cndh.org.dz/%d8%aa%d9%82%d8%af%d9%8a%d9%85-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/"
                                                class="ct-menu-link" role="menuitem">تقديم المجلس</a><button
                                                class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                                aria-haspopup="true" aria-expanded="false"><svg
                                                    class="ct-icon toggle-icon-1" width="15" height="15"
                                                    viewBox="0 0 15 15">
                                                    <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z">
                                                    </path>
                                                </svg></button></span>
                                        <ul class="sub-menu" role="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3043"
                                                role="none"><a href="{{ route('history') }}" class="ct-menu-link"
                                                    role="menuitem">نبذة تاريخية عن المجلس</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d9%85%d9%87%d8%a7%d9%85-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d9%88%d8%b7%d9%86%d9%8a-%d9%84%d8%ad%d9%82%d9%88%d9%82-%d8%a7%d9%84%d8%a5%d9%86%d8%b3%d8%a7%d9%86/"
                                                    class="ct-menu-link" role="menuitem">مهام المجلس</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d9%85%d9%86%d9%87%d8%ac%d9%8a%d8%a9-%d8%b9%d9%85%d9%84-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3-%d8%a7%d9%84%d9%88%d8%b7%d9%86%d9%8a-%d9%84%d8%ad%d9%82%d9%88%d9%82-%d8%a7%d9%84%d8%a5%d9%86%d8%b3%d8%a7/"
                                                    class="ct-menu-link" role="menuitem">منهجية عمل المجلس</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-572"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d8%a7%d9%84%d9%86%d8%b5%d9%88%d8%b5-%d8%a7%d9%84%d9%85%d8%b1%d8%ac%d8%b9%d9%8a%d8%a9/"
                                                    class="ct-menu-link" role="menuitem">النصوص المرجعية</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4131"
                                        role="none"><span class="ct-sub-menu-parent"><a
                                                href="https://cndh.org.dz/%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3/"
                                                class="ct-menu-link" role="menuitem">رئيس المجلس</a><button
                                                class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                                aria-haspopup="true" aria-expanded="false"><svg
                                                    class="ct-icon toggle-icon-1" width="15" height="15"
                                                    viewBox="0 0 15 15">
                                                    <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z">
                                                    </path>
                                                </svg></button></span>
                                        <ul class="sub-menu" role="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1451"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d9%83%d9%84%d9%85%d8%a9-%d8%b1%d8%a6%d9%8a%d8%b3-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/"
                                                    class="ct-menu-link" role="menuitem">كلمة الرئيس</a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5171"
                                                role="none"><a
                                                    href="https://cndh.org.dz/category/%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3/"
                                                    class="ct-menu-link" role="menuitem">أنشطة الرئيس</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3907"
                                        role="none"><a
                                            href="https://cndh.org.dz/%d8%a3%d8%b9%d8%b6%d8%a7%d8%a1-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/"
                                            class="ct-menu-link" role="menuitem">أعضاء المجلس</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1504"
                                        role="none"><span class="ct-sub-menu-parent"><a href="#"
                                                class="ct-menu-link" role="menuitem">هياكل المجلس</a><button
                                                class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                                aria-haspopup="true" aria-expanded="false"><svg
                                                    class="ct-icon toggle-icon-1" width="15" height="15"
                                                    viewBox="0 0 15 15">
                                                    <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z">
                                                    </path>
                                                </svg></button></span>
                                        <ul class="sub-menu" role="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3042"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d9%88%d9%89-%d8%a7%d9%84%d9%85%d8%b1%d9%83%d8%b2%d9%8a-2/"
                                                    class="ct-menu-link" role="menuitem">على المستوى المركزي</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3051"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d9%88%d9%89-%d8%a7%d9%84%d8%ac%d9%87%d9%88%d9%8a/"
                                                    class="ct-menu-link" role="menuitem">على المستوى الجهوي</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-727"
                                role="none"><span class="ct-sub-menu-parent"><a href="#"
                                        class="ct-menu-link" role="menuitem">المديريات الولائية</a><button
                                        class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                        aria-haspopup="true" aria-expanded="false"><svg class="ct-icon toggle-icon-1"
                                            width="15" height="15" viewBox="0 0 15 15">
                                            <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z"></path>
                                        </svg></button></span>
                                <ul class="sub-menu" role="menu">


                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-728"
                                        role="none"><a
                                            href="https://cndh.org.dz/%d8%a7%d9%84%d9%84%d8%ac%d9%86%d8%a9-%d8%a7%d9%84%d8%af%d8%a7%d8%a6%d9%85%d8%a9-%d9%84%d9%84%d8%b4%d8%a4%d9%88%d9%86-%d8%a7%d9%84%d9%82%d8%a7%d9%86%d9%88%d9%86%d9%8a%d8%a9/"
                                            class="ct-menu-link" role="menuitem">اللجنة الدائمة للشؤون القانونية</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-893"
                                role="none"><span class="ct-sub-menu-parent"><a
                                        href="https://cndh.org.dz/category/%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/"
                                        class="ct-menu-link" role="menuitem">أنشطة المجلس</a><button
                                        class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                        aria-haspopup="true" aria-expanded="false"><svg class="ct-icon toggle-icon-1"
                                            width="15" height="15" viewBox="0 0 15 15">
                                            <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z"></path>
                                        </svg></button></span>
                                <ul class="sub-menu" role="menu">
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-895"
                                        role="none"><a
                                            href="https://cndh.org.dz/category/%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/%d8%a7%d9%84%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%88%d8%b7%d9%86%d9%8a%d8%a9-ar/"
                                            class="ct-menu-link" role="menuitem">الأنشطة الوطنية</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-894"
                                        role="none"><a
                                            href="https://cndh.org.dz/category/%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/%d8%a7%d9%84%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d8%af%d9%88%d9%84%d9%8a%d8%a9-ar/"
                                            class="ct-menu-link" role="menuitem">الأنشطة الدولية</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3188"
                                        role="none"><span class="ct-sub-menu-parent"><a href="#"
                                                class="ct-menu-link" role="menuitem">الإتفاقيات ومذكرات
                                                التفاهم</a><button class="ct-toggle-dropdown-mobile"
                                                aria-label="Expand dropdown menu" aria-haspopup="true"
                                                aria-expanded="false"><svg class="ct-icon toggle-icon-1"
                                                    width="15" height="15" viewBox="0 0 15 15">
                                                    <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z">
                                                    </path>
                                                </svg></button></span>
                                        <ul class="sub-menu" role="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3187"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d8%a7%d9%84%d8%a5%d8%aa%d9%81%d8%a7%d9%82%d9%8a%d8%a7%d8%aa-%d9%88%d9%85%d8%b0%d9%83%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d9%81%d8%a7%d9%87%d9%85-%d8%a7%d9%84%d9%88%d8%b7%d9%86%d9%8a%d8%a9/"
                                                    class="ct-menu-link" role="menuitem">الإتفاقيات ومذكرات التفاهم
                                                    الوطنية</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3186"
                                                role="none"><a
                                                    href="https://cndh.org.dz/%d8%a7%d9%84%d8%a5%d8%aa%d9%81%d8%a7%d9%82%d9%8a%d8%a7%d8%aa-%d9%88%d9%85%d8%b0%d9%83%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d9%81%d8%a7%d9%87%d9%85-%d8%a7%d9%84%d8%af%d9%88%d9%84%d9%8a%d8%a9/"
                                                    class="ct-menu-link" role="menuitem">الإتفاقيات ومذكرات التفاهم
                                                    الدولية</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-776"
                                role="none"><span class="ct-sub-menu-parent"><a href="#"
                                        class="ct-menu-link" role="menuitem">المطبوعات</a><button
                                        class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                        aria-haspopup="true" aria-expanded="false"><svg class="ct-icon toggle-icon-1"
                                            width="15" height="15" viewBox="0 0 15 15">
                                            <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z"></path>
                                        </svg></button></span>
                                <ul class="sub-menu" role="menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-804"
                                        role="none"><a
                                            href="https://cndh.org.dz/%d8%aa%d9%82%d8%a7%d8%b1%d9%8a%d8%b1-%d8%b3%d9%86%d9%88%d9%8a%d8%a9/"
                                            class="ct-menu-link" role="menuitem">تقارير سنوية</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-873"
                                        role="none"><a
                                            href="https://cndh.org.dz/%d8%aa%d9%82%d8%a7%d8%b1%d9%8a%d8%b1-%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/"
                                            class="ct-menu-link" role="menuitem">تقارير أنشطة المجلس</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3301"
                                        role="none"><a
                                            href="https://cndh.org.dz/%d8%a7%d9%84%d9%85%d8%b7%d8%a8%d9%88%d8%b9%d8%a7%d8%aa/"
                                            class="ct-menu-link" role="menuitem">المطبوعات</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-947"
                                role="none"><span class="ct-sub-menu-parent"><a
                                        href="https://cndh.org.dz/category/%d9%81%d8%b6%d8%a7%d8%a1-%d8%a7%d9%84%d8%b5%d8%ad%d8%a7%d9%81%d8%a9/"
                                        class="ct-menu-link" role="menuitem">فضاء الصحافة</a><button
                                        class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu"
                                        aria-haspopup="true" aria-expanded="false"><svg class="ct-icon toggle-icon-1"
                                            width="15" height="15" viewBox="0 0 15 15">
                                            <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z"></path>
                                        </svg></button></span>
                                <ul class="sub-menu" role="menu">
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-948"
                                        role="none"><a
                                            href="https://cndh.org.dz/category/%d9%81%d8%b6%d8%a7%d8%a1-%d8%a7%d9%84%d8%b5%d8%ad%d8%a7%d9%81%d8%a9/%d9%85%d9%82%d8%a7%d8%a8%d9%84%d8%a7%d8%aa-%d9%85%d8%b9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3-ar/"
                                            class="ct-menu-link" role="menuitem">مقابلات مع الرئيس</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-970"
                                        role="none"><a
                                            href="https://cndh.org.dz/category/%d9%82%d8%b1%d8%a7%d8%a1%d8%a9-%d9%81%d9%8a-%d8%a7%d9%84%d8%b5%d8%ad%d8%a7%d9%81%d8%a9/"
                                            class="ct-menu-link" role="menuitem">قراءة في الصحافة</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-989"
                                        role="none"><a
                                            href="https://cndh.org.dz/category/%d9%85%d9%83%d8%aa%d8%a8%d8%a9-%d8%a7%d9%84%d9%81%d9%8a%d8%af%d9%8a%d9%88/"
                                            class="ct-menu-link" role="menuitem">مكتبة الفيديو</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-995"
                                        role="none"><a
                                            href="https://cndh.org.dz/category/%d9%81%d8%b6%d8%a7%d8%a1-%d8%a7%d9%84%d8%b5%d8%ad%d8%a7%d9%81%d8%a9/%d8%a8%d9%8a%d8%a7%d9%86%d8%a7%d8%aa-%d8%b5%d8%ad%d9%81%d9%8a%d8%a9-ar/"
                                            class="ct-menu-link" role="menuitem">بيانات صحفية</a></li>
                                </ul>
                            </li>
                            <li class="lang-item lang-item-8 lang-item-fr lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-8401-fr"
                                role="none"><a href="https://cndh.org.dz/accueil/" class="ct-menu-link"
                                    role="menuitem" hreflang="fr-FR" lang="fr-FR">Français</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div id="main-container">
        @include('partials.header')
        <main id="main" class="site-main hfeed">

            @yield('content')

            @include('partials.footer')
            @stack('scripts')
        </main>
    </div>
</body>

</html>
