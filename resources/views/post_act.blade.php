@extends('layouts.app')

@section('content')
    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            <h1 class="page-title"
                title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                itemprop="headline">{{$activity->title}}</h1>
            <ul class="entry-meta" data-type="simple:slash">
                <li class="meta-date" itemprop="datePublished">
                    <time class="ct-meta-element-date" datetime="2022-03-24T09:17:08+01:00" style="color: white">
                        {{ \Carbon\Carbon::parse($activity->created_at)->locale('ar')->isoFormat('DD  MMMM  YYYY') }}



                    </time>
                </li>

            </ul>
        </header>
    </div>

    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">
        <article id="post-1573" class="post-1573 post type-post status-publish format-standard has-post-thumbnail hentry category-17 category---ar">
            <div class="entry-content">
                <div class="wp-block-columns is-layout-flex wp-container-3">
                    <div class="wp-block-column is-layout-flow" style="flex-basis:66.66%">
                        {!!$activity->body!!}
                    </div>
                    <div class="wp-block-column is-layout-flow" style="flex-basis:33.33%">
                        <figure class="wp-block-image size-large">
                            <img decoding="async" width="1024" height="644"
                                src="{{ Voyager::image($activity->thumbnail) }}" alt="" class="wp-image-1575"
                                srcset="{{ Voyager::image($activity->thumbnail) }} 1024w, {{ Voyager::image($activity->thumbnail) }} 300w, {{ Voyager::image($activity->thumbnail) }} 768w, {{ Voyager::image($activity->thumbnail) }}"
                                sizes="(max-width: 1024px) 100vw, 1024px">
                        </figure>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <div class="ct-related-posts-container">
        <div class="ct-container">
            <div class="ct-related-posts">
                <h3 class="ct-block-title">مقالات مشابهة</h3>
                <div class="ct-related-posts-items" data-layout="grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                    @foreach ($activities as $act)
                        <article itemscope="itemscope" itemtype="https://schema.org/CreativeWork" style="border: 1px solid #ddd; padding: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                            <a class="ct-image-container"
                                href="/post/{{$act->id}}"
                                aria-label="{{$act->title}}"
                                tabindex="-1">
                                <img width="300" height="137"
                                    src="{{ Voyager::image($act->thumbnail) }}"
                                    class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                    loading="lazy" srcset="{{ Voyager::image($act->thumbnail) }} 300w, {{ Voyager::image($act->thumbnail) }} 424w"
                                    sizes="(max-width: 300px) 100vw, 300px" itemprop="image" style="aspect-ratio: 16/9;">
                            </a>
                            <h4 class="related-entry-title" itemprop="name">
                                <a href="/post/{{$act->id}}"
                                    itemprop="url" rel="bookmark">{{$act->title}}</a>
                            </h4>
                            <ul class="entry-meta" data-type="simple:slash">
                                <li class="meta-date" itemprop="datePublished">
                                    <time class="ct-meta-element-date" datetime="{{$act->created_at}}">{{$act->created_at}}</time>
                                </li>
                            </ul>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
