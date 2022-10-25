<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REVIEWS</title>
</head>

<body>
    @include('includes.header', ['mainTitle' => 'Have a look at our', 'subTitle' => 'reviews'])
    <br>

    @foreach ($reviews as $review)
        <div>
            <div class="object-center content-center text-center" dir="auto">
                <div class="w-full text-slate-700 flex flex-col items-center">
                    <div class="text-left flex flex-col w-full items-center justify-center">
                        <div class="w-full h">
                            <a href="{{ route('reviews.show', $review->id) }}" rel="noreferrer" target="_blank"
                                class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 rounded-xl w-full flex flex-col md:flex-row justify-start shadow-md transition-all duration-100 ">
                                <!-- <div class="flex-grow"> -->
                                <div class="flex-grow w-1/3 shadow bg-cover rounded-t-xl md:rounded-none md:rounded-l-xl"
                                    style='background-image: url("{{ asset($review->imagePath) }}");'>
                                </div>
                                <div class="w-full xl:w-2/3 p-3 flex flex-col justify-between  md:h-96 overflow-auto">
                                    <div>
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
            </div>
        </div>
        <br>
    @endforeach
    <div class="text-center">
        <a href="{{ route('reviews.create') }}">
            <button class="bg-sky-200 hover:bg-sky-400 text-white font-bold py-2 px-4 rounded-full">
                Submit A Review
            </button>
        </a>
    </div>
    <br>
    @include('includes.footer')
</body>

</html>
