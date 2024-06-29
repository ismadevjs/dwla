@extends('layouts.app')

@section('content')
    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            <h1 class="page-title"
                title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                itemprop="headline">{{ $post->title }}</h1>

        </header>
    </div>

    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">
        <article id="post-1573"
            class="post-1573 post type-post status-publish format-standard has-post-thumbnail hentry category-17 category---ar">
            <div class="entry-content">
                <div class="wp-block-columns is-layout-flex wp-container-3">
                    <div class="wp-block-column is-layout-flow" style="flex-basis:66.66%">
                        {!! $post->excerpt !!}
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
