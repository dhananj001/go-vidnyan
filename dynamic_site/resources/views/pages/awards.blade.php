@extends('layouts.public')

@section('title', 'पुरस्कार | गो विज्ञान संशोधन संस्था')

@section('content')
    <!-- Page Hero -->
        <section class="page-hero text-white py-20">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-white/90 text-md font-medium">२०१० पासून</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6">कै.श्री. मोरोपंत पिंगळे
                        वार्षिक पुरस्कार</h1>
                    <p class="text-xl text-gray-100 max-w-3xl mx-auto">
                        देशी गाय व पंचगव्य उपयोजनावर संशोधन, गो आधारित सेंद्रिय शेती व पंचगव्य चिकित्सेवर दीर्घकाळ काम
                        करणाऱ्या व्यक्ती व संस्थांना पुरस्कारित केले जाते.
                    </p>
                </div>
            </div>
        </section>

        <!-- Awards Stats -->
        <section class="py-12 bg-white border-b border-gray-100">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div
                        class="text-center bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200">
                        <p class="text-4xl font-bold primary-green mb-2">14+</p>
                        <p class="text-gray-700 font-medium marathi-heading">वर्षे</p>
                    </div>
                    <div
                        class="text-center bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 border border-orange-200">
                        <p class="text-4xl font-bold accent-orange mb-2">100+</p>
                        <p class="text-gray-700 font-medium marathi-heading">पुरस्कारार्थी</p>
                    </div>
                    <div
                        class="text-center bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200">
                        <p class="text-4xl font-bold text-blue-600 mb-2">10+</p>
                        <p class="text-gray-700 font-medium marathi-heading">शहरे</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Awards Timeline -->
        <section class="py-16 lg:py-20 bg-gradient-to-br from-gray-50 via-white to-green-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">पुरस्कार इतिहास</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="max-w-7xl mx-auto">
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-gradient-to-b from-green-400 via-blue-400 to-purple-400 h-full hidden lg:block">
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                            <!-- 2023 -->
                            <div class="lg:pr-6 mb-8 lg:mb-10 relative">
                                <div
                                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                                    <div class="absolute -top-4 left-6">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-sm flex items-center justify-center">
                                            <span class="text-white text-lg font-bold">23</span>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-gray-900 marathi-heading">२०२३ - बारामती
                                            </h3>
                                        </div>

                                        <div
                                            class="bg-gradient-to-r from-green-50 to-orange-50 rounded-lg p-4 mb-4 border-l-4 border-green-500">
                                            <div class="space-y-2">
                                                <p class="text-gray-700 font-medium">अध्यक्ष: श्री. केशवराव सर्जेराव
                                                    जगताप</p>
                                                <p class="text-gray-700 font-medium">प्रमुख वक्ते: श्री. भैय्याजी जोशी
                                                </p>
                                                <p class="text-gray-600">अतिथि: भा. ह. भ. प. बंडतात्या कराडकर महाराज</p>
                                            </div>
                                        </div>

                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                                पुरस्कारार्थी
                                            </h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-green-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">वैद्य श्री. चंदन मलजी घोटा, रतलाम</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-green-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्रीमती. नगीना मोहम्मद अन्वर खान,
                                                        बारामुल्ला</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-green-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्री. प्रदीप दत्तात्रय मदने, फलटण</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2022 -->
                            <div class="lg:pl-6 mb-8 lg:mb-10 relative lg:mt-12">
                                <div
                                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                                    <div class="absolute -top-4 right-6 lg:right-auto lg:left-6">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-sm flex items-center justify-center">
                                            <span class="text-white text-lg font-bold">22</span>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-gray-900 marathi-heading">२०२२ - नगर</h3>
                                        </div>

                                        <div
                                            class="bg-gradient-to-r from-blue-50 to-green-50 rounded-lg p-4 mb-4 border-l-4 border-blue-500">
                                            <div class="space-y-2">
                                                <p class="text-gray-700 font-medium">प्रमुख वक्ते: मा. नाना जाधव</p>
                                                <p class="text-gray-600">प्रमुख अतिथी: मा. राधाकृष्ण विखेपाटील</p>
                                            </div>
                                        </div>

                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                                पुरस्कारार्थी
                                            </h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">सुयश चॅरिटेबल ट्रस्ट</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">डॉ. अजित रावळ</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्री. दिपक नरवडे</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">स्थानिक गोपालक</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2019 -->
                            <div class="lg:pr-6 mb-8 lg:mb-10 relative">
                                <div
                                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                                    <div class="absolute -top-4 left-6">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-sm flex items-center justify-center">
                                            <span class="text-white text-lg font-bold">19</span>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-gray-900 marathi-heading">२०१९ - पुणे</h3>
                                        </div>

                                        <div
                                            class="bg-gradient-to-r from-orange-50 to-red-50 rounded-lg p-4 mb-4 border-l-4 border-orange-500">
                                            <p class="text-gray-700 font-medium">प्रमुख वक्ते: प.पू. सरसंघचालक मा.
                                                मोहनजी भागवत</p>
                                        </div>

                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                                पुरस्कारार्थी
                                            </h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-orange-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">गोसेवा परिवार, कोलकाता</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-orange-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">वैद्या ज्योती मुंदरगी</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-orange-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">वैद्य अजित उदावंत</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-orange-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्याम अगरवाल</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2018 -->
                            <div class="lg:pl-6 mb-8 lg:mb-10 relative lg:mt-12">
                                <div
                                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                                    <div class="absolute -top-4 right-6 lg:right-auto lg:left-6">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-sm flex items-center justify-center">
                                            <span class="text-white text-lg font-bold">18</span>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-gray-900 marathi-heading">२०१८ - रांजणगाव
                                            </h3>
                                        </div>

                                        <div
                                            class="bg-gradient-to-r from-purple-50 to-blue-50 rounded-lg p-4 mb-4 border-l-4 border-purple-500">
                                            <div class="space-y-2">
                                                <p class="text-gray-700 font-medium">प्रमुख वक्ते: मा. सुहासराव हिरेमठ
                                                </p>
                                                <p class="text-gray-600">प्रमुख अतिथी: मा. कथुरिया, अध्यक्ष, कामधेनू
                                                    आयोग</p>
                                            </div>
                                        </div>

                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                                पुरस्कारार्थी
                                            </h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-purple-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्री. सुनिलजी मानसिंग का</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-purple-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्री. पद्माकर चिंचोळे</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-purple-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">श्री. सुरेंद्र देव</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-purple-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">सौ. व श्री. सोहन उदय हजारे</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-purple-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">हांगे बंधु</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-purple-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">सौ. रुपाली श्रीकांत चव्हाण</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2015-2017 -->
                            <div class="lg:pr-6 mb-8 lg:mb-10 relative">
                                <div
                                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                                    <div class="absolute -top-4 left-6">
                                        <div
                                            class="w-16 h-12 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl shadow-sm flex items-center justify-center">
                                            <span class="text-white text-sm font-bold">15-17</span>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-teal-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-gray-900 marathi-heading">२०१५-२०१७</h3>
                                        </div>

                                        <div
                                            class="bg-gradient-to-r from-teal-50 to-green-50 rounded-lg p-4 mb-4 border-l-4 border-teal-500">
                                            <p class="text-gray-700 font-medium">सोलापूर, भोसरी पांजरापोळ, कुडुव गाडी
                                            </p>
                                        </div>

                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                                उल्लेखनीय पुरस्कारार्थी
                                            </h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-teal-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">डॉ. देविंदर सडाना, करनाल, हरयाना</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-teal-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">डॉ. महेंद्र दारोकर</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-teal-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">गो विज्ञान अनुसंधान संस्था</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-teal-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">दिव्य ज्योती जागृती संस्थान</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-teal-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">मारुती फुले पांडुरंग गोशाळा</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2010-2014 -->
                            <div class="lg:pl-6 mb-8 lg:mb-10 relative lg:mt-12">
                                <div
                                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                                    <div class="absolute -top-4 right-6 lg:right-auto lg:left-6">
                                        <div
                                            class="w-16 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl shadow-sm flex items-center justify-center">
                                            <span class="text-white text-sm font-bold">10-14</span>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-indigo-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-gray-900 marathi-heading">२०१०-२०१४
                                                (प्रारंभिक वर्षे)</h3>
                                        </div>

                                        <div
                                            class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg p-4 mb-4 border-l-4 border-indigo-500">
                                            <p class="text-gray-700 font-medium">पुणे, कराड, नाशिक</p>
                                        </div>

                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                                <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                                                संस्थापक पुरस्कारार्थी
                                            </h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-indigo-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">जनभारती न्यास, कोल्हापूर</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-indigo-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">वैद्या नंदिनी भोजराज, नागपूर</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-indigo-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">माधव गो-विज्ञान अनुसंधान संस्थान,
                                                        भीलवाडा</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-indigo-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">प्रा. रामस्वरूप चौहान, पंतनगर</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <div
                                                        class="w-1.5 h-1.5 bg-indigo-600 rounded-full mt-2 mr-2 flex-shrink-0">
                                                    </div>
                                                    <span class="text-gray-700">अखिल भारतीय कृषी गो-सेवा संघ</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Award Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
                <div
                    class="bg-gradient-to-br from-green-50 to-orange-50 rounded-2xl p-8 lg:p-12 border border-green-100">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">पुरस्काराबद्दल
                        </h2>
                        <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                    </div>
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed text-lg mb-6">
                            श्रद्धेय <span class="font-semibold text-green-700">कै. श्री. मोरोपंत पिंगळे</span> यांच्या
                            स्मरणार्थ हा वार्षिक पुरस्कार देण्यात येतो. २०१० पासून सुरू झालेला हा पुरस्कार देशी गाय व
                            पंचगव्य उपयोजन क्षेत्रात उल्लेखनीय कार्य करणाऱ्या व्यक्ती आणि संस्थांना गौरवित करतो.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg mb-6">
                            पुरस्कारासाठी खालील क्षेत्रातील कार्य विचारात घेतले जाते:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-4 border border-green-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <span class="text-xl">🔬</span>
                                    </div>
                                    <span class="font-medium text-gray-800">पंचगव्य संशोधन</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4 border border-orange-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <span class="text-xl">🌾</span>
                                    </div>
                                    <span class="font-medium text-gray-800">गो-आधारित सेंद्रिय शेती</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4 border border-blue-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <span class="text-xl">💊</span>
                                    </div>
                                    <span class="font-medium text-gray-800">पंचगव्य चिकित्सा</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4 border border-purple-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <span class="text-xl">🐄</span>
                                    </div>
                                    <span class="font-medium text-gray-800">देशी गायींचे संवर्धन</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <!-- <section class="py-16 bg-gradient-to-r from-green-600 to-green-700">
            <div class="container mx-auto px-4 sm:px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold marathi-heading text-white mb-6">
                    पुरस्कारासाठी नामांकन
                </h2>
                <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto">
                    गोसेवा क्षेत्रातील उल्लेखनीय कार्य करणाऱ्या व्यक्ती किंवा संस्थेचे नामांकन करा
                </p>
                <a href="contact.html"
                    class="inline-flex items-center justify-center bg-white text-green-700 font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-gray-50 shadow-lg">
                    संपर्क करा
                </a>
            </div>
        </section> -->

        <!-- Call to Action -->
        <section class="py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेची पुरस्कार पहा</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        कै. श्री. मोरोपंत पिंगळे वार्षिक पुरस्कार आणि विजेत्यांबद्दल अधिक माहिती मिळवा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/team') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            टीम पहा
                        </a>
                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            संपर्क करा
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
