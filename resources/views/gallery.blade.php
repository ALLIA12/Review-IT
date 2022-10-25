<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GALLERY</title>
</head>

<body>
    @include('includes.header', [
        'mainTitle' => 'We are looking',
        'subTitle' => 'forward to',
    ])

    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-[700px] rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                        Slide</span>
                    <img src="{{ asset('reviewImages/6vz2YD1Kie2hgOPoNa2ajtXCWnh9tTqiMLH0olFY.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/4c3PINyjYbmFz4dJtocmeCaquidCJAvVoEUEoPCx.png') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/3v70Mm0LItk8Vpsg0zctGIaTlUsPrjKNEbyFe8e3.png') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/C2XIhUREnvWv7smPCFdX2Q2n87bl2UnQmX4rwm0U.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/DMVTJcyZI509NxSq294wlbOFVT64pmNJRcFPeoNL.png') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 6 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/G5saBifrb10FEA7iVSqFGMxDdqeG34oBH0gPA36e.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 7 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/XlVqIoEG9rXT09ClDw2u74IRLyJYNk7CxjQKOTli.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 8 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/nKLnQHWdgLs6L0BtzG3qEYZfCWJzs3kGUKIh3v9e.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 9 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/dxWmL3QatZ1DDJ26qQ5Pw4dEvY0SsiBorMynD7dw.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 10 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('reviewImages/EDuI3LGWdwFF4i3uPlT3Umudv1uKyWlEGVeTqwYJ.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>  
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="4"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="5"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="6"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="7"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="8"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="9"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
    <br>
    @include('includes.footer')
</body>

</html>
