<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIDEO</title>
</head>

<body>
    @include('includes.header', ['mainTitle' => 'Most anticipated', 'subTitle' => 'Shows'])


    <div class="grid lg:grid-cols-2 gap-6 m-5">
        <div class="relative"style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/-xR_lBtEvSc"
                frameborder="0" …></iframe>
        </div>

        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/4FDeLtjCslo"
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/C_uTkUGcHv4"
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/EGeJczJvWns"
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/u_jJiZ2oZgs"
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/g4_xDVQm8MY"
                frameborder="0" …></iframe>
        </div>
    </div>
    <br>
    </section>
    <!-- Section: Design Block -->

    @include('includes.footer')
</body>

</html>
