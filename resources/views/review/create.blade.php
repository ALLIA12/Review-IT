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
    @include('includes.header')

    @if (session('info'))
        <br>
        <div class="flex justify-center">
            <div class="row">
                <div class="items-center justify-center bg-white w-[50rem]">
                    <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">Created!</span> {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
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
                                    Please write the title of the show:
                                </label>
                                <input type="text" name="title" id="title" placeholder="Title"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <br>
                        <div class="px-3">
                            <div class="mb-5">
                                <label for="author" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Please write your name:
                                </label>
                                <input type="text" name="author" id="author" placeholder="Author"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="px-3">
                            <div class="mb-5">
                                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Please write your Email:
                                </label>
                                <input type="text" name="email" id="email" placeholder="ALLIA1999@HOTMAIL.COM"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 ">
                            <label for="rating" class="mb-3 block text-base font-medium text-[#07074D]">
                                What is your rating out of 5 ?
                            </label>
                            <input type="number" name="rating" id="rating" placeholder="5" min="0"
                                max="5"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="w-full px-3 py-3">
                            <label for="summary" class="mb-3 block text-base font-medium text-[#07074D]">Your
                                review</label>
                            <textarea name="summary" id="summary" rows="4"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                placeholder="Your review..."></textarea>
                        </div>
                        <div class="w-full px-3">
                            <label for="imagePath" class="mb-3 block text-base font-medium">
                                Upload Image:
                            </label>
                            <label for="imagePath"
                                class="mx-auto cursor-pointer flex max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                        {{-- <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                Are you coming to the event?
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                    <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                        Yes
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <!-- This is an example component -->
                        <div class="form-layout-footer my-3 text-center ">
                            <button class="bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-full">
                                Submit A Review
                            </button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </div><!-- section-wrapper -->
            </div>
        </div><!-- col-6 -->

    </form>
    </div>
    @include('includes.footer')
</body>

</html>
