@extends('layouts.app')

@section('content')
    <div class="hero-section" data-type="type-2" style="padding: 30px;">
        <header class="entry-header ct-container">
            @if (Str::contains(request()->getRequestUri(), '/search'))
                <h1 class="page-title"
                    title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                    itemprop="headline">نتائج البحث عن {{ $query }}</h1>
            @else
                <h1 class="page-title"
                    title="مشاركة المجلس الوطني لحقوق الإنسان في ندوة تحاضر عن بعد حول عرض نقاط التواصل الوطنية لمنظمة التعاون الاقتصادي والتنمية OCDE من أجل نظام عمل مسؤول للمؤسسات."
                    itemprop="headline"></h1>
            @endif

            <ul class="entry-meta" data-type="simple:slash">
                <li class="meta-date" itemprop="datePublished">
                    <time class="ct-meta-element-date" datetime="2022-03-24T09:17:08+01:00" style="color: white">
                        {{-- {{ \Carbon\Carbon::parse($activity->created_at)->locale('ar')->isoFormat('DD  MMMM  YYYY') }} --}}

                    </time>
                </li>

            </ul>
        </header>
    </div>


    <div class="ct-container" data-vertical-spacing="top:bottom">
        <section>
            <div class="entries" data-archive="default" data-layout="simple" data-cards="boxed" data-hover="zoom-out">
            @if(count($blogs) < 0) 
                @foreach ($blogs as $post)
                    <article id="post-8770"
                        class="entry-card post-8770 post type-post status-publish format-standard has-post-thumbnail hentry category-142 category-17 category---ar">
                        <a class="ct-image-container boundless-image" href="/post/{{ $post->id }}"
                            aria-label="{{ $post->title }}" tabindex="-1"><img width="768" height="512"
                                src="{{ Voyager::image($post->image) }}"
                                class="attachment-medium_large size-medium_large wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="{{ Voyager::image($post->image) }} 768w, {{ Voyager::image($post->image) }} 300w, {{ Voyager::image($post->image) }} 1024w, {{ Voyager::image($post->image) }} 1280w"
                                sizes="(max-width: 768px) 100vw, 768px" itemprop="image" style="aspect-ratio: 16/9;"></a>
                        <div class="card-content">
                            <ul class="entry-meta" data-type="simple:slash">
                                <li class="meta-date" itemprop="datePublished"><time class="ct-meta-element-date"
                                        datetime="2024-06-12T16:27:12+02:00">12 يونيو 2024</time></li>
                                <li class="meta-categories" data-type="simple"><a href="/category/{{ $post->category_id }}"
                                        rel="tag" class="ct-term-142">{{ $post->category->title }}</a>
                            </ul>
                            <h2 class="entry-title">
                                <a href="/post/{{ $post->id }}" rel="bookmark">
                                    {{ $post->title }} </a>
                            </h2>

                            <div class="entry-excerpt">
                                <p>{{ Str::limit(strip_tags($post->body), 100, '...') }}</p>


                            </div><a class="entry-button ct-button" data-type="background" data-alignment="left"
                                href="/post/{{ $post->id }}">اقرأ
                                المزيد<svg width="17px" height="17px" viewBox="0 0 32 32">
                                    <path
                                        d="M 21.1875 9.28125 L 19.78125 10.71875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 19.78125 21.28125 L 21.1875 22.71875 L 27.90625 16 Z ">
                                    </path>
                                </svg></a>
                        </div>
                    </article>
                @endforeach

                @else 
        لا توجد نتائج

                @endif



            </div>



        </section>
        <div class="custom-pagination">
           @if(count($blogs) > 0) 
           @if ($blogs->onFirstPage())
                <span>السابق</span>
            @else
                <a href="{{ $blogs->previousPageUrl() }}" rel="prev">السابق</a>
            @endif



            @if ($blogs->hasMorePages())
                <a href="{{ $blogs->nextPageUrl() }}" rel="next">التالي</a>
            @else
                <span>التالي</span>
            @endif
           @endif
        </div>


    </div>


<style>
    /* Custom CSS for left-aligned pagination */
.custom-pagination {
    margin-top: 20px; /* Adjust margin as needed */
    text-align: left;
}

.custom-pagination .pagination {
    display: inline-block;
    margin: 0;
    padding: 0;
}

.custom-pagination .pagination > .page-item {
    display: inline;
    margin-right: 5px; /* Adjust margin between pagination items */
}

.custom-pagination .pagination > .page-item > .page-link {
    color: #333;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 6px 12px;
    text-decoration: none;
}

.custom-pagination .pagination > .page-item > .page-link:hover {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

</style>
@endsection
