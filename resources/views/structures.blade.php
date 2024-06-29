@extends('layouts.app')



@section('content')
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
    <link rel="stylesheet" id="wp-block-library-rtl-css" href="{{asset('css/style-rtl.min.css')}}" media="all">
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
            --wp--preset--duotone--dark-grayscale: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%88%D9%89-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A.html#wp-duotone-blue-orange');
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

    <link rel="stylesheet" id="contact-form-7-css" href="{{asset('css/autoptimize_single_0e4a098f3f6e3faede64db8b9da80ba2.css')}}"
        media="all">
    <link rel="stylesheet" id="contact-form-7-rtl-css" href="{{asset('css/autoptimize_single_3ae045c00f92fc31d3585fe7f975412d.css')}}"
        media="all">
    <link rel="stylesheet" id="fd-nt-style-css" href="{{asset('css/autoptimize_single_74d5c683ccfc8bf97fc3d00588bb42a7.css')}}"
        media="all">
    <link rel="stylesheet" id="ticker-style-css" href="{{asset('css/autoptimize_single_0a385a7e8ce7486a58abb93f0019d4c8.css')}}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-ekiticons-css"
        href="{{asset('css/autoptimize_single_9323fd320e12c4d0d865a254138147d4.css')}}" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{asset('css/elementor-icons.min.css')}}" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('css/frontend-lite-rtl.min.css')}}" media="all">
    <style id="elementor-frontend-inline-css">
        .elementor-kit-13 {
            --e-global-color-primary: #187181;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #2E589B;
            --e-global-color-6d49f54: #000000;
            --e-global-color-782ac5e: #5F545E00;
            --e-global-color-8a574c9: #054C59;
            --e-global-color-d22c0f0: #0F454F;
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

        .elementor-2905 .elementor-element.elementor-element-fadb20d.ekit-equal-height-enable,
        .elementor-2905 .elementor-element.elementor-element-fadb20d.ekit-equal-height-enable .elementor-widget-container,
        .elementor-2905 .elementor-element.elementor-element-fadb20d.ekit-equal-height-enable .ekit-wid-con,
        .elementor-2905 .elementor-element.elementor-element-fadb20d.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox .box-body>p {
            color: var(--e-global-color-text);
            font-family: "Tajawal", tajawal;
            font-size: 1.1em;
            font-weight: 500;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-btn {
            padding: 0px 0px 0px 0px;
            color: #2575fc;
            background-color: rgba(255, 255, 255, 0);
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-btn svg path {
            stroke: #2575fc;
            fill: #2575fc;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox:hover .elementskit-btn {
            color: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox:hover .elementskit-btn svg path {
            stroke: #ffffff;
            fill: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-fadb20d .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb.ekit-equal-height-enable,
        .elementor-2905 .elementor-element.elementor-element-65707bb.ekit-equal-height-enable .elementor-widget-container,
        .elementor-2905 .elementor-element.elementor-element-65707bb.ekit-equal-height-enable .ekit-wid-con,
        .elementor-2905 .elementor-element.elementor-element-65707bb.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox {
            background-color: #ffffff;
            padding: 30px 40px 60px 40px;
            box-shadow: 0px 0px 29px 1px rgba(0, 0, 0, 0.07);
            border-style: solid;
            border-width: 1px 1px 5px 1px;
            border-color: #E7E7E7;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: var(--e-global-color-primary);
            font-family: "Cairo", tajawal;
            font-size: 1.4em;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox:hover .elementskit-info-box-title {
            color: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox .box-body>p {
            color: var(--e-global-color-text);
            font-family: "Tajawal", tajawal;
            font-size: 1.1em;
            font-weight: 500;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox:hover .box-body>p {
            color: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox .elementskit-info-box-icon {
            transform: rotate(0deg);
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-btn {
            padding: 0px 0px 0px 0px;
            color: #2575fc;
            background-color: rgba(255, 255, 255, 0);
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-btn svg path {
            stroke: #2575fc;
            fill: #2575fc;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox:hover .elementskit-btn {
            color: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox:hover .elementskit-btn svg path {
            stroke: #ffffff;
            fill: #ffffff;
        }

        .elementor-2905 .elementor-element.elementor-element-65707bb .elementskit-infobox.gradient-active:hover::before {
            background-color: transparent;
            background-image: linear-gradient(90deg, var(--e-global-color-blocksy_palette_4) 0%, var(--e-global-color-primary) 100%);
        }
    </style>
    <link rel="stylesheet" id="swiper-css" href="{{asset('css/swiper.min.css')}}" media="all">
    <link rel="stylesheet" id="blocksy-fonts-font-source-google-css"
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&amp;family=Tajawal:wght@400;500&amp;display=swap"
        media="all">
    <link rel="stylesheet" id="ct-main-styles-css" href="{{asset('css/main.min.css')}}" media="all">
    <link rel="stylesheet" id="ct-main-rtl-styles-css" href="{{asset('css/main-rtl.min.css')}}" media="all">
    <link rel="stylesheet" id="ct-elementor-styles-css" href="{{asset('css/elementor-frontend.min.css')}}" media="all">
    <link rel="stylesheet" id="ct-cf-7-styles-css" href="{{asset('css/cf-7.min.css')}}" media="all">
    <link rel="stylesheet" id="ct-wpforms-styles-css" href="{{asset('css/wpforms.min.css')}}" media="all">
    <link rel="stylesheet" id="ekit-widget-styles-css" href="{{asset('css/autoptimize_single_0556fb7bf8dda33ac05da657338c285c.css')}}"
        media="all">
    <link rel="stylesheet" id="ekit-responsive-css" href="{{asset('css/autoptimize_single_d942a12c644c208f99aeaa5fc0914d92.css')}}"
        media="all">
    <link rel="stylesheet" id="elementskit-rtl-css" href="{{asset('css/autoptimize_single_0edb73c474c3af165c37ac4e4abebbbe.css')}}"
        media="all">
    <link rel="stylesheet" id="eael-general-css" href="{{asset('css/general.min.css')}}" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Cairo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTajawal%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('css/fontawesome.min.css')}}" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('css/brands.min.css')}}" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script defer="" src="{{asset('js/frontend-gtag.min.js')}}" id="monsterinsights-frontend-script-js"></script>
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
    <script defer="" src="{{asset('js/jquery.min.js')}}" id="jquery-core-js"></script>
    <script defer="" src="{{asset('js/jquery-migrate.min.js')}}" id="jquery-migrate-js"></script>

    <noscript>
        <link rel='stylesheet' href='https://cndh.org.dz/wp-content/themes/blocksyCNDH/static/bundle/no-scripts.min.css'
            type='text/css'>
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
            background-image: url({{asset('images/bgCNDH-e1674493529722.png')}});
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
            --paletteColor1: #187181;
            --paletteColor2: #2E589B;
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
            background-image: url({{asset('images/bgCNDH-e1674493529722.png')}});
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
            background-image: url({{asset('images/bgCNDH-e1674493529722.png')}});
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

        @media (max-width: 999.98px) {[data-header*="type-1"] .ct-header [data-row*="middle"] {
            --height:70px;
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

        @media (max-width: 689.98px) {[data-header*="type-1"] #offcanvas {
            --side-panel-width:90vw;
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


    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            <h1 class="page-title"
                title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                itemprop="headline">@if($type) {{$type->title}} @endif</h1>

        </header>
    </div>


    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">



        <article id="post-2905" class="post-2905 page type-page status-publish hentry">




            <div class="entry-content">
                <div data-elementor-type="wp-page" data-elementor-id="2905" class="elementor elementor-2905">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-8769c44 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="8769c44" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2eb0818"
                                data-id="2eb0818" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-faff2a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="faff2a5" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="row">
                                @foreach ($structures as $structure)
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ff7d74d col">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-fadb20d ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="fadb20d" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con"> <!-- link opening -->
                                                        <!-- end link opening -->

                                                        <div class="elementskit-infobox text-right text-right icon-top-align elementor-animation- gradient-active  hover_from_top">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon ">
                                                                    <img decoding="async" src="" title="" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">{{ $structure->title }}</h3>

                                                                {!! $structure->body !!}
                                                                <div class="box-footer enable_hover_btn">
                                                                    <div class="btn-wraper">
                                                                        <a href="{{$structure->slug}}" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">اقرا المزيد</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                </div>
            </div>





        </article>



    </div>

    <style>
        .row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px; /* Adjust according to your design */
}

.col {
    flex: 0 0 50%; /* Two columns per row */
    padding: 0 15px; /* Adjust according to your design */
}

/* For small devices, make it one item in a row */
@media (max-width: 768px) {
    .col {
        flex: 0 0 100%;
    }
}

    </style>
@endsection
