<header id="header" class="ct-header" data-id="type-1" itemscope="" itemtype="https://schema.org/WPHeader">
    <div data-device="desktop">
        <div data-row="top" data-column-set="1">
            <div class="ct-container">
                <div data-column="end" data-placements="1">
                    <div data-items="primary">
                        <nav id="header-menu-2" class="header-menu-2" data-id="menu-secondary"
                            data-interaction="click:item" data-menu="type-1" data-dropdown="type-1:simple"
                            data-responsive="no" itemscope="" itemtype="https://schema.org/SiteNavigationElement"
                            aria-label="Header Menu">

                            {{-- <ul id="menu-langues" class="menu" role="menubar">
                                        <li id="menu-item-2348-fr"
                                            class="lang-item lang-item-8 lang-item-fr lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-2348-fr"
                                            role="none"><a href="https://cndh.org.dz/accueil/"
                                                class="ct-menu-link" role="menuitem" hreflang="fr-FR"
                                                lang="fr-FR">Français</a></li>
                                    </ul> --}}
                        </nav>


                        <button data-toggle-panel="#search-modal" class="ct-header-search ct-toggle "
                            aria-label="Open search form" data-label="left" data-id="search">

                            <span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Rechercher</span>

                            <svg class="ct-icon" aria-hidden="true" width="15" height="15" viewBox="0 0 15 15">
                                <path
                                    d="M14.8,13.7L12,11c0.9-1.2,1.5-2.6,1.5-4.2c0-3.7-3-6.8-6.8-6.8S0,3,0,6.8s3,6.8,6.8,6.8c1.6,0,3.1-0.6,4.2-1.5l2.8,2.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C15.1,14.5,15.1,14,14.8,13.7z M1.5,6.8c0-2.9,2.4-5.2,5.2-5.2S12,3.9,12,6.8S9.6,12,6.8,12S1.5,9.6,1.5,6.8z">
                                </path>
                            </svg></button>

                        <div class="ct-header-socials " data-id="socials">


                            <div class="ct-social-box" data-icon-size="custom" data-color="custom"
                                data-icons-type="simple">



                                <a href="https://www.facebook.com/CNDH.DZ/" data-network="facebook"
                                    aria-label="Facebook" target="_blank" rel="noopener">
                                    <span class="ct-icon-container">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
                                            <path
                                                d="M20,10.1c0-5.5-4.5-10-10-10S0,4.5,0,10.1c0,5,3.7,9.1,8.4,9.9v-7H5.9v-2.9h2.5V7.9C8.4,5.4,9.9,4,12.2,4c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3c-1.2,0-1.6,0.8-1.6,1.6v1.9h2.8L13.9,13h-2.3v7C16.3,19.2,20,15.1,20,10.1z">
                                            </path>
                                        </svg>
                                    </span><span class="ct-label" hidden="">Facebook</span> </a>

                                <a href="https://www.youtube.com/@cndh_dz" data-network="youtube" aria-label="YouTube"
                                    target="_blank" rel="noopener">
                                    <span class="ct-icon-container">
                                        <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                                            <path
                                                d="M15,0H5C2.2,0,0,2.2,0,5v10c0,2.8,2.2,5,5,5h10c2.8,0,5-2.2,5-5V5C20,2.2,17.8,0,15,0z M14.5,10.9l-6.8,3.8c-0.1,0.1-0.3,0.1-0.5,0.1c-0.5,0-1-0.4-1-1l0,0V6.2c0-0.5,0.4-1,1-1c0.2,0,0.3,0,0.5,0.1l6.8,3.8c0.5,0.3,0.7,0.8,0.4,1.3C14.8,10.6,14.6,10.8,14.5,10.9z">
                                            </path>
                                        </svg>
                                    </span><span class="ct-label" hidden="">YouTube</span> </a>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-row="middle" data-column-set="2">
            <div class="ct-container">
                <div data-column="start" data-placements="1">
                    <div data-items="primary">
                        <div class="site-branding" data-id="logo" data-logo="left" itemscope="itemscope"
                            itemtype="https://schema.org/Organization">

                            <a href="/" class="site-logo-container" rel="home">
                                <img width="84"
                                    height="83" src="{{ Voyager::image(setting('admin.icon_image')) }}" class="default-logo"
                                    alt="{{setting('admin.title')}}"></a>
                            <div class="site-title-container">

                                <p class="site-description " itemprop="description">
                                    <span class="sloganAr">{{setting('admin.title')}}</span><br>
                                    <span class="sloganAm">{{(setting('admin.title_amazigh'))}}</span><br>
                                    <span class="sloganFR">{{setting('admin.admin_title_fr')}}</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div data-column="end" data-placements="1">
                    <div data-items="primary">
                        <nav id="header-menu-1" class="header-menu-1" data-id="menu" data-interaction="hover"
                            data-menu="type-2:default" data-dropdown="type-1:solid" data-responsive="no" itemscope=""
                            itemtype="https://schema.org/SiteNavigationElement" aria-label="Header Menu">




                            <ul id="menu-%d8%a7%d9%84%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d8%a9"
                                class="menu" role="menubar">
                                @php
                                    $menuItems = menu_front();
                                    $menuTree = buildMenuTree($menuItems);
                                @endphp

                                @foreach ($menuTree as $item)
                                    <li id="menu-item-{{ $item->id }}"
                                        class="menu-item {{ isset($item->children) ? 'menu-item-has-children animated-submenu' : '' }}"
                                        role="none">
                                        <a href="{{ $item->url }}" class="ct-menu-link"
                                            role="menuitem">{{ $item->title }}</a>

                                        @if (isset($item->children))
                                            <button class="ct-toggle-dropdown-desktop-ghost"
                                                aria-label="Expand dropdown menu" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <ul class="sub-menu" role="menu">
                                                @foreach ($item->children as $child)
                                                    @include('partials.menu-item', ['item' => $child])
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>

                            </ul>
                        </nav>


                        <div class="ct-header-text " data-id="text">
                            {{-- <div class="entry-content">
                                        <p><img class="alignnone size-full wp-image-37"
                                                src="{{asset('images/AlgerianFlag.png')}}" alt="" width="160"
                                                height="96"></p>
                                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-device="mobile">
        <div data-row="middle" data-column-set="2">
            <div class="ct-container">
                <div data-column="start" data-placements="1">
                    <div data-items="primary">
                        <div class="site-branding" data-id="logo" data-logo="left" itemscope="itemscope"
                            itemtype="https://schema.org/Organization">

                            <a href="/" class="site-logo-container" rel="home"><img width="84"
                                    height="83" src="{{ asset('images/LOGO.png') }}" class="default-logo"
                                    alt="CNDH"></a>
                            <div class="site-title-container">

                                <p class="site-description " itemprop="description">
                                    <span class="sloganAr">الموقع الرسمي للمترشح عبد المجيد تبون</span><br><span
                                        class="sloganAm">Lⴻ ⵙⵉⵜⴻ oⴼⴼⵉⵛⵉⴻⵍ ⴷⵓ ⵛⴰⵏⴷⵉⴷⴰⵜ ⵄⴱⴷⴻⵍⵎⴰⴷⵊⵉⴷ
                                        ⵟⴻⴱⴱoⵓⵏⴻ</span><br><span class="sloganFR">Le site officiel du candidat
                                        Abdelmadjid Tebboune</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div data-column="end" data-placements="1">
                    <div data-items="primary">
                        <button data-toggle-panel="#offcanvas" class="ct-header-trigger ct-toggle "
                            data-design="simple" data-label="right" aria-label="Open off canvas" data-id="trigger">

                            <span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">القائمة</span>

                            <svg class="ct-icon" width="18" height="14" viewBox="0 0 18 14"
                                aria-hidden="true" data-type="type-1">

                                <rect y="0.00" width="18" height="1.7" rx="1"></rect>
                                <rect y="6.15" width="18" height="1.7" rx="1"></rect>
                                <rect y="12.3" width="18" height="1.7" rx="1"></rect>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
