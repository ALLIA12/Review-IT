<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <title>FEEDBACK</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['mainTitle' => 'Send us your', 'subTitle' => 'feedback'])
        </div>
        <div class="flex-grow">
            <div class="flex flex-col">
                <p class="text-3xl font-bold text-center capitalize lg:text-4xl underline decoration-sky-200">
                    All feedback
                </p>
                <br>
                @if (count($feedbacks))
                    <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                        @foreach ($feedbacks as $feedback)
                            <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>

                                <div class="ml-4">
                                    <h1 class="font-black uppercase">{{ $feedback->subject }}</h1>
                                    <h1 class="font-bold">{{ $feedback->fName . ' ' . $feedback->lName }}</h1>
                                    <h3 class="font-semibold">{{ $feedback->email }}</h3>
                                    <p class="mt-2 text-sm text-gray-500">{{ $feedback->comment }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif


                <br>
                <div class="text-center">
                    <a href="{{ route('feedback.create') }}">
                        <button class="bg-sky-200 hover:bg-sky-400 text-white font-bold py-2 px-4 rounded-full">
                            Submit Feedback
                        </button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <div class="h-10"> @include('includes.footer')
        </div>
    </div>


</body>

</html>
