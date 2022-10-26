<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Create Review</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['mainTitle' => 'Submit your own review', 'subTitle' => 'for review!'])
        </div>
        <div class="flex-grow">
            @include('includes.info')
            @include('includes.errors')
            <p class="text-3xl font-bold text-center capitalize lg:text-4xl underline decoration-sky-200">Submit a
                review:
            </p>
            <br>
            <form role="form" method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data"
                data-parsley-validate>
                {{ csrf_field() }}
                <div class="flex justify-center">
                    <div class="row">
                        <div class="items-center justify-center bg-white w-[50rem]">
                            <div class="mx-3 text-center">
                                <div class="px-3">
                                    <div>
                                        <label for="title" class="mb-3 block font-medium text-[#07074D]">
                                            Please write the title of the show:<span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="title" id="title" placeholder="Title"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            value="{{ old('title') }}" required />
                                    </div>
                                </div>
                                <br>
                                <div class="px-3">
                                    <div class="mb-5">
                                        <label for="author" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Please write your name: <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="author" id="author" placeholder="Author"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            value="{{ old('author') }}" required />
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="mb-5">
                                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Please write your Email:<span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="email" id="email"
                                            placeholder="ALLIA1999@HOTMAIL.COM"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            value="{{ old('email') }}" required />
                                    </div>
                                </div>
                                <div class="w-full px-3 ">
                                    <label for="rating" class="mb-3 block text-base font-medium text-[#07074D]">
                                        What is your rating out of 5 ?<span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" name="rating" id="rating" placeholder="5" min="0"
                                        max="5"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        value="{{ old('rating') }}" required />
                                </div>
                                <div class="w-full px-3 py-3">
                                    <label for="summary" class="mb-3 block text-base font-medium text-[#07074D]">Your
                                        review<span class="text-red-500">*</span></label>
                                    <textarea name="summary" id="summary" rows="4"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        placeholder="Your review..." required>{{ old('summary') }}</textarea>
                                </div>
                                <div class="w-full px-3">
                                    <label for="imagePath" class="mb-3 block text-base font-medium">
                                        Upload Image:<span class="text-red-500">*</span>
                                    </label>
                                    <label for="imagePath"
                                        class="mx-auto cursor-pointer flex max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Upload Image
                                        </h2>

                                        <p class="mt-2 text-gray-500 tracking-wide">Upload or darg & drop your file
                                            JPEG,
                                            PNG,
                                            JPG </p>

                                        <input name="imagePath" id="imagePath" type="file" class="hidden"
                                            accept=".jpg,.jpeg,.png" />
                                        </section>
                                </div>

                                <div class="form-layout-footer my-3 text-center ">
                                    <button
                                        class="bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-full">
                                        Submit A Review
                                    </button>
                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                        </div><!-- section-wrapper -->
                    </div>
                </div><!-- col-6 -->

            </form>
        </div>
    </div>
    <div class="h-10"> @include('includes.footer')
    </div>
    </div>


</body>

</html>
