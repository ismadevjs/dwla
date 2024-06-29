@extends('layouts.app')

@section('content')
    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            <h1 class="page-title"
                title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                itemprop="headline">{{ $news->title }}</h1>

        </header>
    </div>

    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">
        <article id="post-1573"
            class="post-1573 post type-post status-publish format-standard has-post-thumbnail hentry category-17 category---ar">
            <div class="entry-content">
                <div class=" is-layout-flex wp-container-3">
                    <div class="wp-block-column is-layout-flow" style="flex-basis:66.66%">
                        {!!  $news->body !!}
                    </div>

                </div>
            </div>
        </article>
    </div>



@endsection
