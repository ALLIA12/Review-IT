<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESUMES</title>
</head>

<body>
    @include('includes.header', ['mainTitle' => 'Our ', 'subTitle' => 'team'])

    <div class="grid place-items-center">
        <iframe height="1100" width="900" src="{{ asset('resumes/Ali CV.pdf') }}" frameborder="0"></iframe>
        <br>
        <iframe height="1100" width="900" src="{{ asset('resumes/Black CV.pdf') }}" frameborder="0"></iframe>
        <br>

        <iframe height="1100" width="900" src="{{ asset('resumes/Marwan_CV.pdf') }}" frameborder="0"></iframe>
        <br>

        <iframe height="1100" width="900" src="{{ asset('resumes/Yousuf CV.pdf') }}" frameborder="0"></iframe>
        <br>

        <iframe height="1100" width="900" src="{{ asset('resumes/Ali CV.pdf') }}" frameborder="0"></iframe>
        <br>
        <iframe height="1000" width="900" src="{{ asset('resumes/Ali CV.pdf') }}" frameborder="0"></iframe>
        <br>
    </div>
    @include('includes.footer')
</body>

</html>
