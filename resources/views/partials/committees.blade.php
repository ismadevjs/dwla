<style>
    /* Grid */
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;
    }

    /* Columns */
    .col-33 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
        padding: 0 15px;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 767px) {
        .col-33 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 479px) {
        .col-33 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<section class="elementor-section elementor-top-section elementor-element elementor-element-3e858ec elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3e858ec" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b963324" data-id="1b963324" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-847a231 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="847a231" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fe63a1d" data-id="fe63a1d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f8ea4f0 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f8ea4f0" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b274196 elementor-widget elementor-widget-heading" data-id="b274196" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h1 class="elementor-heading-title elementor-size-default">{{heading(4)->title}}</h1>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b24cb7f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="b24cb7f" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    @foreach ($comitees as $cmt)
                    <div class="col-33">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-4127d5e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4127d5e6" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5dc7f4a8" data-id="5dc7f4a8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6e0db40 ekit-equal-height-enable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="6e0db40" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInDown&quot;}" data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con"> <!-- link opening -->
                                                    <a href="https://cndh.org.dz/%d8%a7%d9%84%d9%84%d8%ac%d9%86%d8%a9-%d8%a7%d9%84%d8%af%d8%a7%d8%a6%d9%85%d8%a9-%d9%84%d9%84%d8%b4%d8%a4%d9%88%d9%86-%d8%a7%d9%84%d9%82%d8%a7%d9%86%d9%88%d9%86%d9%8a%d8%a9/" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div class="elementskit-infobox text-center text-center icon-top-align elementor-animation- gradient-active hover_from_top">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon ">
                                                                    <img decoding="async" src="" title="" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <p>{{$cmt->title}}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
