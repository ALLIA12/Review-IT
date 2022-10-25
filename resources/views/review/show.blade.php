<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('includes.header', ['mainTitle' => 'Read the review for', 'subTitle' =>$review->title ])
    <br>
    <div class="flex justify-center">
        <div class=" w-1/2 h-64 shadow bg-cover  rounded-t-xl rounded-b-xl "
            style='background-image: url("{{ asset($review->imagePath != null ? $review->imagePath : 'images/01.jpeg') }}");'>
        </div>
    </div>

    <div class="mb-4 text-3xl max-w-2xl mx-auto text-justify text-black-500">
        Written by: {{ $review->author }}
    </div>

    <div class="indent-7 max-w-2xl mx-auto my-6 text-justify text-black-500">
        {{ $review->summary }}
    </div>

    <hr class="space s" />
    @include('includes.footer')
</body>

</html>
