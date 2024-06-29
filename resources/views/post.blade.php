@extends('layouts.app')

@section('content')
    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            <h1 class="page-title"
                title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                itemprop="headline">{{ $post->title }}</h1>
            <ul class="entry-meta" data-type="simple:slash">
                <li class="meta-date" itemprop="datePublished">
                    <time class="ct-meta-element-date" datetime="2022-03-24T09:17:08+01:00" style="color: white">
                        24 مارس 2022
                    </time>
                </li>
                <li class="meta-categories" data-type="simple">
                    <a href="https://cndh.org.dz/category/%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/"
                        rel="tag" class="ct-term-17" style="color: white">أنشطة المجلس</a>,
                    <a href="https://cndh.org.dz/category/%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d9%85%d8%ac%d9%84%d8%b3/%d8%a7%d9%84%d8%a3%d9%86%d8%b4%d8%b7%d8%a9-%d8%a7%d9%84%d8%af%d9%88%d9%84%d9%8a%d8%a9-ar/"
                        rel="tag" class="ct-term-13" style="color: white">الأنشطة الدولية</a>
                </li>
            </ul>
        </header>
    </div>

    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">
        <article id="post-1573"
            class="post-1573 post type-post status-publish format-standard has-post-thumbnail hentry category-17 category---ar">
            <div class="entry-content">
                <div class="wp-block-columns is-layout-flex wp-container-3">
                    <div class="wp-block-column is-layout-flow" style="flex-basis:66.66%">
                        {!! $post->body !!}
                    </div>
                    <div class="wp-block-column is-layout-flow" style="flex-basis:33.33%">
                        <figure class="wp-block-image size-large">
                            <img decoding="async" width="1024" height="644" src="{{ Voyager::image($post->image) }}"
                                alt="" class="wp-image-1575"
                                srcset="{{ Voyager::image($post->image) }} 1024w, {{ Voyager::image($post->image) }} 300w, {{ Voyager::image($post->image) }} 768w, {{ Voyager::image($post->thumbnail) }}"
                                sizes="(max-width: 1024px) 100vw, 1024px">
                        </figure>
                    </div>
                </div>
            </div>
        </article>
    </div>




    @if ($post->images)
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-34e84c5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="34e84c5" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-01087bf"
                    data-id="01087bf" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-347a05d elementor-widget elementor-widget-image-gallery"
                            data-id="347a05d" data-element_type="widget" data-widget_type="image-gallery.default">
                            <div class="elementor-widget-container">
                                <!-- Removed inline style and unnecessary classes -->
                                <div class="elementor-image-gallery">
                                    <div class="gallery galleryid-8770">
                                        @php
                                            $postImagesArray = json_decode($post->images, true);
                                        @endphp
                                        @foreach ($postImagesArray as $img)
                                            <figure class="gallery-item">
                                                <div class="gallery-icon landscape">
                                                    <a data-elementor-open-lightbox="yes"
                                                        data-elementor-lightbox-slideshow="347a05d"
                                                        data-elementor-lightbox-title="448251406_885459386955291_2005220088463960611_n"
                                                        data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6ODc3MiwidXJsIjoiaHR0cDpcL1wvY25kaC5vcmcuZHpcL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjRcLzA2XC80NDgyNTE0MDZfODg1NDU5Mzg2OTU1MjkxXzIwMDUyMjAwODg0NjM5NjA2MTFfbi5qcGciLCJzbGlkZXNob3ciOiIzNDdhMDVkIn0%3D"
                                                        href="{{ Voyager::image($img) }}"><img
                                                            src="{{ Voyager::image($img) }}"
                                                            class="attachment-full size-full" alt=""
                                                            decoding="async" loading="lazy"></a>
                                                </div>
                                            </figure>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif



    <div class="ct-related-posts-container">
        <div class="ct-container">
            <div class="ct-related-posts">
                <h3 class="ct-block-title">مقالات مشابهة</h3>
                <div class="ct-related-posts-items" data-layout="grid"
                    style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                    @foreach ($posts as $pst)
                        <article itemscope="itemscope" itemtype="https://schema.org/CreativeWork"
                            style="border: 1px solid #ddd; padding: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                            <a class="ct-image-container" href="/post/{{ $pst->id }}" aria-label="{{ $pst->title }}"
                                tabindex="-1">
                                <img width="300" height="137" src="{{ Voyager::image($pst->image) }}"
                                    class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                    loading="lazy"
                                    srcset="{{ Voyager::image($pst->image) }} 300w, {{ Voyager::image($pst->image) }} 424w"
                                    sizes="(max-width: 300px) 100vw, 300px" itemprop="image" style="aspect-ratio: 16/9;">
                            </a>
                            <h4 class="related-entry-title" itemprop="name">
                                <a href="/post/{{ $pst->id }}" itemprop="url" rel="bookmark">{{ $pst->title }}</a>
                            </h4>
                            <ul class="entry-meta" data-type="simple:slash">
                                <li class="meta-date" itemprop="datePublished">
                                    <time class="ct-meta-element-date"
                                        datetime="{{ $pst->created_at }}">{{ $pst->created_at }}</time>
                                </li>
                            </ul>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <style>
        /* CSS Grid Layout */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
            /* For small devices, one image per row */
            grid-gap: 20px;
            /* Adjust as needed */
        }

        @media (min-width: 768px) {

            /* For larger screens, three images per row */
            .gallery {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>



    <style>
        @media (max-width: 768px) {
            .ct-related-posts-items {
                grid-template-columns: 1fr;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            .ct-related-posts-items {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
@endsection
