<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div> @include('includes.header', [
            'mainTitle' => 'Welcome to the website where you can',
            'subTitle' => 'Review Everything',
        ])
        </div>
        <div class="flex-grow">
            <br>
            <!-- This is an example component -->
            @if (count($reviews))
                @if (count($reviews) == 1)
                    @php
                        $review = $reviews[0];
                    @endphp
                    <div class="w-full text-slate-700 flex flex-col items-center">
                        <div class="text-left flex flex-col w-full items-center justify-center">
                            <div class="w-full h">
                                <a href="{{ route('reviews.show', $review->id) }}" rel="noreferrer" target="_blank"
                                    class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 rounded-xl w-full flex flex-col md:flex-row justify-start shadow-md">
                                    <!-- <div class="flex-grow"> -->
                                    <div class="flex-grow w-1/3 shadow bg-cover rounded-t-xl md:rounded-none md:rounded-l-xl"
                                        style='background-image: url("{{ asset($review->imagePath) }}");'>
                                    </div>
                                    <div
                                        class="w-full xl:w-2/3 p-3 flex flex-col justify-between  md:h-96 overflow-auto">
                                        <div>
                                            <div class="flex flex-col md:w-full text-xs text-left">
                                                <h2 class="text-slate-900 font-bold text-2xl">
                                                    <span class="uppercase">{{ $review->title }}
                                                    </span>
                                                </h2>
                                            </div>
                                            <div class="flex flex-col md:w-full text-xs text-left">
                                                <h2 class="text-slate-900 font-bold text-xl">
                                                    Written by:
                                                    <span class="uppercase">{{ $review->author }}
                                                    </span>
                                                </h2>
                                            </div>
                                            <p
                                                class="text-slate-500 text-base md:text-lg xl:text-xl font-bold leading-normal">
                                                {{ $review->summary }} </p>
                                        </div>
                                        <p
                                            class="flex text-left text-xs md:text-sm text-blue-700 dark:text-blue-400 font-bold leading-normal items-center">
                                            <span
                                                class="text-slate-700 text-xl md:text-lg xl:text-xl font-bold leading-normal">
                                                Rating {{ $review->rating }}/5 </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="#0f172a  " class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                            </svg>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="w-100% mx-auto">
                        <div id="default-carousel" class="relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                @foreach ($reviews as $review)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <div class="object-center content-center text-center" dir="auto">
                                            <div class="w-full text-slate-700 flex flex-col items-center">
                                                <div class="text-left flex flex-col w-full items-center justify-center">
                                                    <div class="w-full h">
                                                        <a href="{{ route('reviews.show', $review->id) }}"
                                                            rel="noreferrer" target="_blank"
                                                            class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 rounded-xl w-full flex flex-col md:flex-row justify-start shadow-md transition-all duration-100 ">
                                                            <!-- <div class="flex-grow"> -->
                                                            <div class="flex-grow w-1/3 shadow bg-cover rounded-t-xl md:rounded-none md:rounded-l-xl"
                                                                style='background-image: url("{{ asset($review->imagePath) }}");'>
                                                            </div>
                                                            <div
                                                                class="w-full xl:w-2/3 p-3 flex flex-col justify-between  md:h-96 overflow-auto">
                                                                <div>
                                                                    <div
                                                                        class="flex flex-col md:w-full text-xs text-left">
                                                                        <h2 class="text-slate-900 font-bold text-2xl">
                                                                            <span class="uppercase">{{ $review->title }}
                                                                            </span>
                                                                        </h2>
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:w-full text-xs text-left">
                                                                        <h2 class="text-slate-900 font-bold text-xl">
                                                                            Written by:
                                                                            <span
                                                                                class="uppercase">{{ $review->author }}
                                                                            </span>
                                                                        </h2>
                                                                    </div>
                                                                    <p
                                                                        class="text-slate-500 text-base md:text-lg xl:text-xl font-bold leading-normal">
                                                                        {{ $review->summary }} </p>

                                                                </div>
                                                                <p
                                                                    class="flex text-left text-xs md:text-sm text-blue-700 dark:text-blue-400 font-bold leading-normal items-center">
                                                                    <span
                                                                        class="text-slate-700 text-xl md:text-lg xl:text-xl font-bold leading-normal">
                                                                        Rating {{ $review->rating }}/5 </span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="#0f172a  "
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                                    </svg>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                @for ($i = 0; $i < count($reviews); $i++)
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="{{ 'Slide' . ($i + 1) }}"
                                        data-carousel-slide-to="{{ $i }}"></button>
                                @endfor
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7">
                                        </path>
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>
                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    </div>
                @endif
            @else
                <div class="text-center"> No reviews To show</div>
            @endif

            <br>
        </div>
        <div> @include('includes.footer')
        </div>
    </div>

</body>

</html>
