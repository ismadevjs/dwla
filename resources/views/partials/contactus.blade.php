<section
class="elementor-section elementor-top-section elementor-element elementor-element-d79eeae ct-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
data-id="d79eeae" data-element_type="section"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;curve&quot;,&quot;shape_divider_top_negative&quot;:&quot;yes&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-shape elementor-shape-top" data-negative="true">
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1000 100"
        preserveAspectRatio="none">
        <path class="elementor-shape-fill"
            d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
        </path>
    </svg>
</div>
<div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d375518"
        data-id="d375518" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-5c7937a elementor-widget elementor-widget-heading"
                data-id="5c7937a" data-element_type="widget"
                data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">{{heading(3)->title}}</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-ea1d930 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                data-id="ea1d930" data-element_type="widget"
                data-widget_type="divider.default">
                <div class="elementor-widget-container">
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-9378a3f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="9378a3f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b54edf5"
                        data-id="b54edf5" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-84c2c47 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="84c2c47" data-element_type="section">
                                <div
                                    class="elementor-container elementor-column-gap-default">
                                   @foreach($contactus as $contact)
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bcedb0a"
                                        data-id="bcedb0a"
                                        data-element_type="column">
                                        <div
                                            class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5093ecc ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                                data-id="5093ecc"
                                                data-element_type="widget"
                                                data-widget_type="elementskit-icon-box.default">
                                                <div
                                                    class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <!-- link opening -->
                                                        <a href="#"
                                                            target="_self"
                                                            rel=""
                                                            class="ekit_global_links">
                                                            <!-- end link opening -->

                                                            <div
                                                                class="elementskit-infobox text-center text- icon-top-align elementor-animation-bob   ">
                                                                <div
                                                                    class="elementskit-box-header elementor-animation-">
                                                                    <div
                                                                        class="elementskit-info-box-icon  ">
                                                                        {!!$contact->icon!!}
                                                                    </div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <h3
                                                                        class="elementskit-info-box-title">
                                                                        {{$contact->title}} </h3>
                                                                    <p> {{$contact->subtitle}} </p>
                                                                </div>


                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</section>
