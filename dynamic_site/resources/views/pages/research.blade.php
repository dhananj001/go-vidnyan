@extends('layouts.public')

@section('title', 'संशोधन | गो विज्ञान संशोधन संस्था')

@push('styles')
    .card-minimal {
            border: 1px solid #e5e7eb;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
.card-minimal:hover {
            border-color: var(--primary-green);
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.1);
        }
@endpush

@section('content')
    <!-- Main Content -->
    <main class="min-h-screen bg-gradient-to-br from-green-50 to-white">
        <!-- Hero Section -->
        <section class="relative py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-green-100 text-green-800 rounded-full px-4 py-1.5 mb-4">
                        <span class="font-semibold text-sm uppercase tracking-wider">संशोधन</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold marathi-heading primary-green mb-4 leading-tight">
                        गो-विज्ञान संशोधन कार्य
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        देशी गायी, पंचगव्य आणि गो-आधारित उत्पादनांवर वैज्ञानिक संशोधन - परंपरागत ज्ञानाला
                        आधुनिक विज्ञानाची जोड
                    </p>
                    <div class="w-16 h-0.5 bg-orange-400 mx-auto rounded-full mt-6"></div>
                </div>

                <!-- Research Vision -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-2xl font-bold marathi-heading primary-green mb-4">संशोधन दृष्टीकोन</h2>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                गो विज्ञान संशोधन संस्था भारतीय देशी गायींच्या वैज्ञानिक अभ्यासावर आधारित संशोधन करते.
                                संस्थेच्या संशोधनाचे उद्दिष्ट म्हणजे प्राचीन भारतीय ज्ञानाला आधुनिक वैज्ञानिक पद्धतींनी
                                प्रमाणित करून समाजासमोर आणणे.
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-green-600 mb-1">15+</div>
                                    <div class="text-sm text-gray-600">संशोधन प्रकल्प</div>
                                </div>
                                <div class="bg-orange-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-orange-600 mb-1">20+</div>
                                    <div class="text-sm text-gray-600">संशोधन पेपर्स</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-blue-600 mb-1">5+</div>
                                    <div class="text-sm text-gray-600">विद्यापीठ सहकार्य</div>
                                </div>
                                <div class="bg-purple-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-purple-600 mb-1">10+</div>
                                    <div class="text-sm text-gray-600">तज्ञ संशोधक</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-orange-100 to-green-50 rounded-xl p-6">
                            <div class="text-center">
                                <div
                                    class="w-20 h-20 bg-white rounded-full mx-auto flex items-center justify-center mb-4 shadow-md">
                                    <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-2">संशोधन सहभाग</h3>
                                <p class="text-3xl font-bold text-orange-600 mb-1">२०+</p>
                                <p class="text-gray-600">प्रकाशित पेपर्स</p>
                                <a href="{{ url('/query') }}"
                                    class="inline-block mt-4 px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 smooth-transition font-medium">
                                    संपर्क साधा
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Research Areas -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">संशोधन क्षेत्रे</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Research Area 1 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal research-card">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-3">पंचगव्य संशोधन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                गोमूत्र, गोमय, दूध, दही आणि तूप यांच्या औषधी गुणधर्मांचे वैज्ञानिक विश्लेषण
                                आणि त्यांच्या आरोग्यदायी फायद्यांचे संशोधन.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">गोमूत्र
                                    अर्क</span>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">पंचगव्य
                                    घृत</span>
                            </div>
                        </div>

                        <!-- Research Area 2 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal research-card">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-3">आरोग्य व चिकित्सा</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                पंचगव्य आधारित चिकित्सा पद्धतींचे क्लिनिकल स्टडीज. मधुमेह, त्वचारोग,
                                कर्करोग आणि इतर व्याधींवर पंचगव्याच्या प्रभावाचे संशोधन.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded-full">क्लिनिकल
                                    ट्रायल</span>
                                <span
                                    class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded-full">आयुर्वेद</span>
                            </div>
                        </div>

                        <!-- Research Area 3 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal research-card">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-3">कृषी संशोधन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                जीवामृत, गोमूत्र आधारित कीटकनाशके आणि जैविक खतांच्या परिणामकारकतेवर
                                शेती प्रयोगशाळेतील संशोधन.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">जीवामृत</span>
                                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">सेंद्रिय
                                    शेती</span>
                            </div>
                        </div>

                        <!-- Research Area 4 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal research-card">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-3">A2 दूध संशोधन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                देशी गायींच्या A2 दुधाचे पौष्टिक मूल्य, पचनशक्ती आणि आरोग्यदायी
                                फायद्यांचे तुलनात्मक संशोधन.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full">A2
                                    प्रोटीन</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full">पोषण
                                    विज्ञान</span>
                            </div>
                        </div>

                        <!-- Research Area 5 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal research-card">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-3">जाती संवर्धन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                भारतीय देशी गायींच्या विविध जातींचे (गीर, साहिवाल, थारपारकर, खिल्लार)
                                अनुवंशिक अभ्यास आणि संवर्धन.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-teal-100 text-teal-700 px-2 py-1 rounded-full">जेनेटिक्स</span>
                                <span class="text-xs bg-teal-100 text-teal-700 px-2 py-1 rounded-full">ब्रीडिंग</span>
                            </div>
                        </div>

                        <!-- Research Area 6 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal research-card">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-3">पर्यावरण संशोधन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                गोपालनाचा पर्यावरणावर सकारात्मक परिणाम, कार्बन फूटप्रिंट कमी करणे
                                आणि शाश्वत विकासातील योगदान.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded-full">शाश्वतता</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded-full">कार्बन
                                    न्यूट्रल</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Research Publications -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">प्रकाशित संशोधन</h2>
                    <div class="space-y-6">
                        <!-- Publication 1 -->
                        <div class="border-l-4 border-green-500 pl-6 py-4 bg-gray-50 rounded-r-lg">
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">
                                पंचगव्य घृताचे औषधी गुणधर्म: एक वैज्ञानिक अभ्यास
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                पंचगव्य घृतामधील जैविक सक्रिय घटकांचे विश्लेषण आणि त्यांच्या आरोग्यदायी परिणामांचे
                                प्रयोगशाळेतील संशोधन.
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="text-green-600 font-medium">२०२३</span>
                                <span class="text-gray-400">|</span>
                                <span class="text-gray-500">आयुर्वेद संशोधन पत्रिका</span>
                            </div>
                        </div>

                        <!-- Publication 2 -->
                        <div class="border-l-4 border-orange-500 pl-6 py-4 bg-gray-50 rounded-r-lg">
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">
                                जीवामृताचा पीक उत्पादनावर परिणाम: क्षेत्रीय अभ्यास
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                महाराष्ट्रातील विविध शेतांवर जीवामृताच्या वापराने पीक उत्पादनात झालेल्या वाढीचे
                                तुलनात्मक संशोधन.
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="text-orange-600 font-medium">२०२२</span>
                                <span class="text-gray-400">|</span>
                                <span class="text-gray-500">कृषी संशोधन मासिक</span>
                            </div>
                        </div>

                        <!-- Publication 3 -->
                        <div class="border-l-4 border-blue-500 pl-6 py-4 bg-gray-50 rounded-r-lg">
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">
                                A2 दुधाचे पचनावर परिणाम: तुलनात्मक अभ्यास
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">
                                देशी गायींच्या A2 दूध आणि विदेशी गायींच्या A1 दूध यांच्या पचनशक्तीवरील
                                परिणामांचे क्लिनिकल संशोधन.
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="text-blue-600 font-medium">२०२१</span>
                                <span class="text-gray-400">|</span>
                                <span class="text-gray-500">पोषण विज्ञान जर्नल</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Research Collaborations -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">संशोधन सहकार्य</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-md text-center card-minimal">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full mx-auto flex items-center justify-center mb-3">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-sm font-bold marathi-heading text-gray-800">पुणे विद्यापीठ</h3>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-md text-center card-minimal">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full mx-auto flex items-center justify-center mb-3">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-sm font-bold marathi-heading text-gray-800">कृषी विद्यापीठ</h3>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-md text-center card-minimal">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full mx-auto flex items-center justify-center mb-3">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-sm font-bold marathi-heading text-gray-800">आयुर्वेद महाविद्यालय</h3>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-md text-center card-minimal">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full mx-auto flex items-center justify-center mb-3">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-sm font-bold marathi-heading text-gray-800">ICAR संस्था</h3>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संशोधनात सहभागी व्हा!</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        संस्थेच्या संशोधन प्रकल्पात सहभागी होण्यासाठी, संशोधन पेपर्स मिळविण्यासाठी किंवा
                        सहकार्यासाठी संस्थेशी  संपर्क साधा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/query') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            संपर्क साधा
                        </a>
                        <a href="{{ url('/') }}#contact"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            अधिक माहिती
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
