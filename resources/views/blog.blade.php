<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <title>BLOG</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['mainTitle' => 'BLOG', 'subTitle' => 'COPE'])
        </div>
        <div class="flex-grow">
            <div class="text-center">BLOG TEMP</div>
        </div>
        <div class="h-10"> @include('includes.footer')
        </div>
    </div>
</body>

</html>
