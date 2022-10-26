<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCHEDULE</title>
    <link rel="icon" href="{{ asset('icon.png') }}">

</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', [
            'mainTitle' => 'Our upcoming',
            'subTitle' => 'reviews',
        ])</div>
        <div class="flex-grow">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full max-w-7xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">Upcoming reviews</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Author</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Name</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Date</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="{{ asset('reviewers/Minos and Linux.jpg') }}"
                                                        width="100" height="100" alt="Minos and Linux"></div>
                                                <div class="font-medium text-lg text-gray-800">Minos and Linux</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Windows</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">11/9/2001</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Ziad.jpg') }}"
                                                        width="100" height="100" alt="Ziad"></div>
                                                <div class="font-medium text-lg text-gray-800">Ziad Al-Mehmadi</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Black Bullet</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">4/8/2015</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Emad.jpg') }}"
                                                        width="100" height="100" alt="Emad"></div>
                                                <div class="font-medium text-lg text-gray-800">Emad Shamlan </div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Cats</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">12/20/2019</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="{{ asset('reviewers/Mohamad-AlKhamis.jpg') }}"
                                                        width="100" height="100" alt="Mohammed Alkhamis"></div>
                                                <div class="font-medium text-lg text-gray-800">Mohammed Alkhamis</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg">91 Days</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">9/11/2022</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Bilal.png') }}"
                                                        width="100" height="100" alt="Bilal"></div>
                                                <div class="font-medium text-lg text-gray-800">Bilal Al-Majnoni</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">McDonald's</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">11/29/2022</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Khalid.jpg') }}"
                                                        width="100" height="100" alt="Khalid"></div>
                                                <div class="font-medium text-lg text-gray-800">Khaldi Algamdi</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Mario</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">12/29/2022</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Sami.jpg') }}"
                                                        width="100" height="100" alt="Sami Al Gamdi"></div>
                                                <div class="font-medium text-lg text-gray-800">Sami Al Gamdi</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Hollow Knight</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">4/8/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Rory.jpg') }}"
                                                        width="100" height="100" alt="Sami Al Gamdi"></div>
                                                <div class="font-medium text-lg text-gray-800">Rory</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Fate Grand Order</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">7/8/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full" src="{{ asset('reviewers/Feras.png') }}"
                                                        width="100" height="100" alt="Feras"></div>
                                                <div class="font-medium text-lg text-gray-800">Feras Hilabi</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Attack On Titan</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">9/20/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="{{ asset('reviewers/OsamaH.jpg') }}" width="100"
                                                        height="100" alt="Osama"></div>
                                                <div class="font-medium text-lg text-gray-800">Osama Al-Howaidi</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">League of Legends</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">5/8/2023</div>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="{{ asset('reviewers/Yosef alshamrani.jpg') }}"
                                                        width="100" height="100" alt="Yosef alshamrani"></div>
                                                <div class="font-medium text-lg text-gray-800">Yosef alshamrani</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Among Us</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">9/6/2023</div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-30 h-30 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="{{ asset('reviewers/Sami Ismail.jpg') }}" width="100"
                                                        height="100" alt="Sami Ismail"></div>
                                                <div class="font-medium text-lg text-gray-800">Sami Ismail</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Isekai Ojisan</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-green-500">6/9/2024</div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="h-10"> @include('includes.footer')</div>
    </div>
</body>

</html>
