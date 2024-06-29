@extends('layouts.app')

@section('content')
<div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">



    <article id="post-41" class="post-41 page type-page status-publish hentry">




        <div class="entry-content">
            <div data-elementor-type="wp-page" data-elementor-id="41" class="elementor elementor-41">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-bb848ef elementor-section-height-min-height ct-section-stretched elementor-section-items-top elementor-section-boxed elementor-section-height-default"
                    data-id="bb848ef" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                            preserveAspectRatio="none">
                            <path class="elementor-shape-fill"
                                d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
                            </path>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9317c5"
                            data-id="f9317c5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e54c220 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="e54c220" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-custom">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-441e3a2"
                                            data-id="441e3a2" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div
                                                class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1a464be elementor-widget elementor-widget-eael-content-ticker"
                                                    data-id="1a464be" data-element_type="widget"
                                                    data-widget_type="eael-content-ticker.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="eael-ticker-wrap"
                                                            id="eael-ticker-wrap-1a464be">
                                                            <div class="ticker-badge">
                                                                <span>بيانات وإعلانات</span>
                                                            </div>
                                                            <div
                                                                class="swiper-container-wrap eael-ticker">
                                                                <div class="swiper-container eael-content-ticker swiper-container-1a464be"
                                                                    data-pagination=".swiper-pagination-1a464be"
                                                                    data-arrow-next=".swiper-button-next-1a464be"
                                                                    data-arrow-prev=".swiper-button-prev-1a464be"
                                                                    dir="rtl" data-effect="slide"
                                                                    data-speed="400"
                                                                    data-autoplay="2000"
                                                                    data-pause-on-hover="true"
                                                                    data-loop="1" data-grab-cursor="1"
                                                                    data-arrows="1">
                                                                    <div class="swiper-wrapper">

                                                                        @foreach ($news as $new)

                                                                            <div class="swiper-slide">
                                                                                <div class="ticker-content">
                                                                                    <a href="/news/{{$new->id}}"
                                                                                    class="ticker-content-link">{{$new->title}}</a>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                                <div class="content-ticker-pagination">
                                                                    <div
                                                                        class="swiper-button-next swiper-button-next-1a464be">
                                                                        <i class="fas fa-angle-right"></i>
                                                                    </div>
                                                                    <div
                                                                        class="swiper-button-prev swiper-button-prev-1a464be">
                                                                        <i class="fas fa-angle-left"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                @include('partials.carousel')

                                @include('partials.activities')

                            </div>
                        </div>
                    </div>
                </section>
                @include('partials.tasks')
                @include('partials.contactus')
                @include('partials.committees')
                @include('partials.video')

            </div>
        </div>


    </article>



</div>
@endsection
