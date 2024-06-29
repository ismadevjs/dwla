<section
    class="elementor-section elementor-inner-section elementor-element elementor-element-67578b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="67578b9" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f53c752"
            data-id="f53c752" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-e052e0e elementor-widget elementor-widget-heading"
                    data-id="e052e0e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                            {{heading(1)->title}}</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ab98e66 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="ab98e66" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="elementor-element elementor-element-f2dfee7 elementor-widget elementor-widget-ucaddon_uc_card_post_carousel"
    data-id="f2dfee7" data-element_type="widget" data-widget_type="ucaddon_uc_card_post_carousel.default">
    <div class="elementor-widget-container">
        <!-- start Post Carousel Lite -->
        <link id="font-awesome-css" href="css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
        <link id="font-awesome-4-shim-css" href="css/autoptimize_single_e140a7d32f343530f016095df3cc2ae4.css"
            type="text/css" rel="stylesheet">
        <link id="owl-carousel-css" href="css/autoptimize_single_c8322bd5bffc8e2856f2cbcd03c61d18.css" type="text/css"
            rel="stylesheet">

        <style type="text/css">
            /* widget: Post Carousel Lite */

            #uc_uc_card_post_carousel_elementor16424 * {
                box-sizing: border-box;
            }

            #uc_uc_card_post_carousel_elementor16424 {
                position: relative;
                min-height: 1px;
            }

            #uc_uc_card_post_carousel_elementor16424 .uc_image_carousel_content {
                text-align: center;
                display: flex;
                flex-flow: column nowrap;
            }

            #uc_uc_card_post_carousel_elementor16424 .ue_post_carousel_item {
                overflow: hidden;

            }

            #uc_uc_card_post_carousel_elementor16424 .ue_post_btn_holder {
                margin-top: auto;
            }

            #uc_uc_card_post_carousel_elementor16424 .uc_more_btn {

                display: inline-block;
                text-align: center;
                text-decoration: none;
            }

            .uc_overlay_image_carousel .uc_more_btn {
                text-decoration: none;
                display: inline-block;
            }

            .uc_overlay_image_carousel .uc_post_title {
                font-size: 21px;
                text-decoration: none;
            }

            #uc_uc_card_post_carousel_elementor16424 .owl-nav .owl-prev {
                position: absolute;
                display: inline-block;
                text-align: center;
            }

            #uc_uc_card_post_carousel_elementor16424 .owl-nav .owl-next {
                position: absolute;
                display: inline-block;
                text-align: center;
            }


            #uc_uc_card_post_carousel_elementor16424 .owl-dots {
                overflow: hidden;
                display: false !important;
                text-align: center;
            }

            #uc_uc_card_post_carousel_elementor16424 .owl-dot {
                border-radius: 50%;
                display: inline-block;
            }
        </style>

        <div class="uc_overlay_image_carousel" id="uc_uc_card_post_carousel_elementor16424" data-custom-sethtml="true">
            <div class="uc_carousel owl-carousel owl-theme uc-items-wrapper">

                @foreach ($activities as $activity)
                    {{-- @include('partials.components.cards', ['item' => $activity]) --}}
                    <div class="uc_image_carousel_container_holder ue_post_carousel_item ue-أنشطة المجلس">
                        <div class="uc_image_carousel_placeholder">
                            <a href="/posts/activities/{{ $activity->id }}">
                                <div class="image-with-text-container"
                                    style="background-image: url('{{ Voyager::image($activity->thumbnail) }}');">
                                    <div class="text-overlay">
                                        <a href="/posts/activities/{{ $activity->id }}" style="text-decoration:none;">
                                            <div class="uc_post_title" style="color : white">{{ $activity->title }}
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end Post Carousel Lite -->
    </div>
</div>
<style>
    .image-with-text-container {
        position: relative;
        height: 320px;
        /* Adjust height as needed */
        overflow: hidden;
        background-size: cover;
        background-position: center;
    }

    .text-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
        padding: 20px;
        /* Adjust padding for text */
        color: #fff;
        /* Text color */
    }

    .uc_post_title {
        font-size: 18px;
        /* Adjust font size */
        font-weight: bold;
        margin-bottom: 10px;
        /* Space between title and button */
    }

    .uc_more_btn {
        color: #fff;
        background-color: #007bff;
        /* Button background color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .uc_more_btn:hover {
        background-color: #0056b3;
        /* Hover state background color */
    }
</style>
