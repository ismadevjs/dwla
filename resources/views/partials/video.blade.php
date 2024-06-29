<!--HTML CODE-->
<div class="w-full relative">
    <div class="swiper default-carousel swiper-container">
        <div class="swiper-wrapper">

            @foreach (videos() as $key => $video)
                <div class="swiper-slide">
                    <div class="mx-14 md:mx-20 lg:mx-28">
                        <div class="bg-transparent h-screen w-full flex justify-center items-center">
                            <iframe width="560" height="900" src="{{ $video->video }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="flex items-center gap-8 lg:justify-start justify-center">
            <button id="slider-button-left"
                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8 !left-5 hover:bg-indigo-600 "
                data-carousel-prev>
                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button id="slider-button-right"
                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8  !right-5 hover:bg-indigo-600"
                data-carousel-next>
                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        img {
            border-style: none !important;
        }

        .swiper-pagination-bullet {
            background: #4f46e5;
        }
    </style>
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--JAVASCRIPT CODE-->
    <script>
        var swiper = new Swiper(".default-carousel", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
