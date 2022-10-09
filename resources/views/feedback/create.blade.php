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
    @include('includes.info')
    @include('includes.errors')


    <p class="text-3xl font-bold text-center capitalize lg:text-4xl underline decoration-sky-200">Submit feedback:
    </p>
    <form role="form" method="POST" action="{{ route('feedback.store') }}" data-parsley-validate>
        {{ csrf_field() }}
        <div class="flex justify-center">
            <div class="row">
                <div class="items-center justify-center bg-white w-[50rem]">
                    <div class="mx-3 text-center">
                        <fieldset class="bg-sky-100	rounded-lg">
                            <legend class="pt-10 mb-3 block text-2xl font-medium text-[#07074D]">Contact Information:
                            </legend>
                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Please write your Email:<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="email" id="email"
                                        placeholder="ALLIA1999@HOTMAIL.COM"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        value="{{ old('email') }}" />
                                </div>
                            </div>

                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Please write your Last Name:<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="fName" id="fName" placeholder="Ali"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        value="{{ old('fName') }}" />
                                </div>
                            </div>

                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Please write your First Name:<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="lName" id="lName" placeholder="Thunder"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        value="{{ old('lName') }}" />
                                </div>
                            </div>

                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Please write your Phone:<span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" name="phone" id="phone" placeholder="0558165744"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        value="{{ old('phone') }}" />
                                </div>
                            </div>

                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="satisfaction" class="mb-3 block text-base font-medium text-[#07074D]">
                                        What is your gender?<span class="text-red-500">*</span>
                                    </label>
                                    <select name="gender" id="gender"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                        <option value="2">Other</option>
                                    </select>
                                </div>
                            </div>

                        </fieldset>
                        <fieldset class="bg-sky-100	rounded-lg">
                            <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                                Pick The Subject Of Your Feedback:<span class="text-red-500">*</span>
                            </label>
                            <select name="subject" id="subject"
                                class="w-[97%] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="website">Website</option>
                                <option value="reviews">Reviews</option>
                                <option value="general">General</option>
                            </select>
                            <legend class="pt-10 mb-3 block text-2xl font-medium text-[#07074D]">Feedback: </legend>
                            <div class="w-full px-3 py-3">
                                <label for="comment" class="mb-3 block text-base font-medium text-[#07074D]">Your
                                    feedback<span class="text-red-500">*</span></label>
                                <textarea name="comment" id="comment" rows="4"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    placeholder="Your feedback...">{{ old('comment') }}</textarea>
                            </div>

                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="satisfaction" class="mb-3 block text-base font-medium text-[#07074D]">
                                        How are you stasfied with our website?<span class="text-red-500">*</span>
                                    </label>
                                    <div class='flex items-center justify-center'>
                                        <div class='w-full max-w-lg px-20 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                                            <div class="flex justify-between text-sm text-center item-center">
                                                <div>
                                                    <input name="satisfaction" type="radio" id="1"
                                                        value="1" class="hidden peer" />
                                                    <label for="1"
                                                        class="inline-block cursor-pointer w-10 h-10 p-3 font-semibold text-white rounded-full bg-slate-700 peer-hover:bg-gray-300 peer-hover:text-white peer-checked:bg-sky-500 peer-checked:text-white">
                                                        1
                                                    </label>
                                                </div>
                                                <div>
                                                    <input name="satisfaction" type="radio" id="2"
                                                        value="2" class="hidden peer" />
                                                    <label for="2"
                                                        class="inline-block cursor-pointer w-10 h-10 p-3 font-semibold text-white rounded-full bg-slate-700 peer-hover:bg-gray-300 peer-hover:text-white peer-checked:bg-sky-500 peer-checked:text-white">
                                                        2
                                                    </label>
                                                </div>
                                                <div>
                                                    <input name="satisfaction" type="radio" id="3"
                                                        value="3" class="hidden peer" />
                                                    <label for="3"
                                                        class="inline-block cursor-pointer w-10 h-10 p-3 font-semibold text-white rounded-full bg-slate-700 peer-hover:bg-gray-300 peer-hover:text-white peer-checked:bg-sky-500 peer-checked:text-white">
                                                        3
                                                    </label>
                                                </div>
                                                <div>
                                                    <input name="satisfaction" type="radio" id="4"
                                                        value="4" class="hidden peer" />
                                                    <label for="4"
                                                        class="inline-block cursor-pointer w-10 h-10 p-3 font-semibold text-white rounded-full bg-slate-700 peer-hover:bg-gray-300 peer-hover:text-white peer-checked:bg-sky-500 peer-checked:text-white">
                                                        4
                                                    </label>
                                                </div>
                                                <div>
                                                    <input name="satisfaction" type="radio" id="5"
                                                        value="5" class="hidden peer" />
                                                    <label for="5"
                                                        class="inline-block cursor-pointer w-10 h-10 p-3 font-semibold text-white rounded-full bg-slate-700 peer-hover:bg-gray-300 peer-hover:text-white peer-checked:bg-sky-500 peer-checked:text-white">
                                                        5
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3">
                                <div class="mb-5">
                                    <label for="allow" class="mb-3 block text-base font-medium text-[#07074D] ">
                                        Do you allow us to disclose your feedback ? <input name="allow"
                                            id="allow" type="checkbox" value="yes"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>


                        <!-- This is an example component -->
                        <div class="form-layout-footer my-3 text-center ">
                            <button class="bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-full">
                                Submit Feedback
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
