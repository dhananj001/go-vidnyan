@extends('layouts.public')

@section('title', 'प्रकल्प | गो विज्ञान संशोधन संस्था')

@section('content')
    <!-- Page Hero -->
        <section class="page-hero text-white py-20">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-white/90 text-md font-medium">गोविद्यान प्रकल्प</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6">संस्थेचे  प्रकल्प</h1>
                    <p class="text-xl text-gray-100 max-w-2xl mx-auto">
                        भारतीय गायींच्या संवर्धनासाठी आणि शाश्वत विकासासाठी संस्थेने राबिलेले विविध महत्वाचे प्रकल्प
                    </p>
                </div>
            </div>
        </section>

        <!-- Featured Project Pages -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">विशेष प्रकल्प</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-6xl mx-auto">
                    <!-- Lectures Page Link -->
                    <a href="{{ url('/lectures') }}"
                        class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-8 shadow-md border border-green-200 hover:shadow-xl hover:border-green-400 transition-all duration-300 group block">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold marathi-heading primary-green mb-3">साप्ताहिक व्याख्याने</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                देशी गायींवरील साप्ताहिक व्याख्याने व परिसंवाद - पंचगव्य, आरोग्य आणि शेती विषयक
                                ज्ञानप्रसार
                            </p>
                            <span
                                class="inline-flex items-center text-green-600 font-semibold group-hover:text-green-700">
                                अधिक माहिती
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </a>

                    <!-- Research Page Link -->
                    <a href="{{ url('/research') }}"
                        class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-8 shadow-md border border-orange-200 hover:shadow-xl hover:border-orange-400 transition-all duration-300 group block">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full mx-auto flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold marathi-heading accent-orange mb-3">संशोधन कार्य</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                पंचगव्य, A2 दूध, गो-आधारित शेती आणि आरोग्य यावर वैज्ञानिक संशोधन
                            </p>
                            <span
                                class="inline-flex items-center text-orange-600 font-semibold group-hover:text-orange-700">
                                अधिक माहिती
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </a>

                    <!-- Nirmalya Page Link -->
                    <a href="{{ url('/nirmalya') }}"
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 shadow-md border border-blue-200 hover:shadow-xl hover:border-blue-400 transition-all duration-300 group block">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full mx-auto flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold marathi-heading text-blue-600 mb-3">निर्माल्य प्रकल्प</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                गणेशोत्सव निर्माल्य कंपोस्टिंग प्रकल्प - ३५० टन निर्माल्यावर प्रक्रिया
                            </p>
                            <span
                                class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700">
                                अधिक माहिती
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Ongoing Projects -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-green-50 rounded-full px-4 py-2 mb-4">
                        <span class="text-green-700 font-semibold text-sm uppercase tracking-wider">सध्या सुरू
                            असलेले</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">चालू प्रकल्प</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 max-w-7xl mx-auto">
                    <!-- Ongoing Project 1 -->
                    <div
                        class="bg-white rounded-xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">1</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">डिजिटल गाय आरोग्य
                                    निगराणी प्रणाली</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    आधुनिक तंत्रज्ञानाचा वापर करून भारतीय गायींच्या आरोग्यावर रिअल-टाइम निगराणी
                                    ठेवण्यासाठी डिजिटल प्लॅटफॉर्म विकसित करणे. IoT सेंसर आणि मोबाइल ऍपचा वापर.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-red-50 to-red-100 rounded-lg p-4 border-l-4 border-red-500">
                                    <p class="text-red-700 font-medium"><strong>प्रभाव:</strong> रिअल-टाइम हेल्थ
                                        मॉनिटरिंग, लवकर आजार निदान आणि गायींच्या उत्पादनात वाढ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ongoing Project 2 -->
                    <div
                        class="bg-white rounded-xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">2</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">प्रगत पंचगव्य संशोधन
                                    आणि विकास</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    पंचगव्याच्या नवीन फॉर्म्युलेशन्स, संरक्षक आणि त्यांच्या आरोग्य फायद्यांवर वैज्ञानिक
                                    संशोधन. आधुनिक प्रयोगशाळा सुविधांचा वापर.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-pink-50 to-pink-100 rounded-lg p-4 border-l-4 border-pink-500">
                                    <p class="text-pink-700 font-medium"><strong>प्रभाव:</strong> नवीन उत्पादने, प्रभावी
                                        उपचार पद्धती आणि वैज्ञानिक प्रमाणीकरण</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ongoing Project 3 -->
                    <div
                        class="bg-white rounded-xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">3</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">शाश्वत शेती प्रशिक्षण
                                    कार्यक्रम</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    शेतकऱ्यांना गो-आधारित शाश्वत शेती तंत्रे, जैविक खते आणि पर्यावरण अनुकूल पद्धती
                                    शिकवण्यासाठी ऑनलाइन आणि ऑफलाइन प्रशिक्षण कार्यक्रम.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-cyan-50 to-cyan-100 rounded-lg p-4 border-l-4 border-cyan-500">
                                    <p class="text-cyan-700 font-medium"><strong>प्रभाव:</strong> 1000+ शेतकरी
                                        प्रशिक्षित, उत्पादनात 40% वाढ आणि पर्यावरण संरक्षण</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ongoing Project 4 -->
                    <div
                        class="bg-white rounded-xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">4</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">पंचगव्य उत्पाद विकास
                                </h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    पंचगव्याच्या आधारावर आरोग्यदायी आणि पर्यावरण अनुकूल उत्पादने विकसित करणे, जसे की
                                    सौंदर्य प्रसाधने, आरोग्य पूरक आणि घरगुती वापराची उत्पादने.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-lg p-4 border-l-4 border-yellow-500">
                                    <p class="text-yellow-700 font-medium"><strong>प्रभाव:</strong> नवीन उत्पाद लाइन,
                                        रोजगार निर्मिती आणि शाश्वत जीवनशैली प्रोत्साहन</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Past Projects -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-gray-100 rounded-full px-4 py-2 mb-4">
                        <span class="text-gray-700 font-semibold text-sm uppercase tracking-wider">2024 च्या आधी</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">राबवलेले प्रकल्प</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 max-w-7xl mx-auto">
                    <!-- Past Project 1: CBOF -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">1</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">भारतीय गायींच्या
                                    आधारावर शेती (CBOF)</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    देशी गायीच्या पंचगव्यावर व प्रामुख्याने गोमय-गोमुत्राचा उपयोग करून कमी खर्चात (80-90
                                    टक्के बचत) चांगले उत्पन्न मिळवून देणारा शेती प्रयोग.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-green-50 to-green-100 rounded-lg p-4 border-l-4 border-green-500">
                                    <p class="text-green-700 font-medium"><strong>प्रभाव:</strong> अहिल्यानगर
                                        जिल्ह्यातील मांजरसुंभा, देवगाव, पाणोली, दैठणेगुंजाळ आणि फलटण जवळ नांदल परिसरातील
                                        16 गावात 400 शेतकऱ्यांना मार्गदर्शन</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Project 2: Panchgavya Treatment -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">2</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">पंचगव्य चिकित्सा केंद्र
                                </h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    2006 पासून पुण्यात चालवलेला उपक्रम - कॅन्सर-कवरोग, मधुमेह, त्वचा व मूत्र विकार यावर
                                    यशस्वी उपचार.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-lg p-4 border-l-4 border-orange-500">
                                    <div class="space-y-1">
                                        <p class="text-orange-700 font-medium"><strong>एकूण रुग्णसंख्या:</strong> 500
                                        </p>
                                        <p class="text-gray-600"><strong>वैद्य:</strong> सौ. ज्योती मुंदगी, श्री.
                                            सतीश पारखी</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Project 3: Ganesh Nirmalya -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">3</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">गणेशोत्सव निर्माल्य
                                    कंपोस्टिंग प्रकल्प</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    पुणे महानगरपालिका व वुमन्स इंडिया च्या सहाय्याने 2016 ते 2023 या कालावधीत 350 टन
                                    निर्माल्यावर प्रक्रिया करून सेंद्रिय खत निर्मिती.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4 border-l-4 border-blue-500">
                                    <p class="text-blue-700 font-medium"><strong>उद्दिष्ट:</strong> गरजू शेतकऱ्यांना
                                        सेंद्रिय खत पुरवठा</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Project 4: Cow Distribution -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">4</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">भारतीय गायींचे वितरण
                                    (गोदान)</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    अहिल्यानगर जिल्ह्यातील मांजरसुंभा व देवगाव येथे 87 ग्रामस्थांना भावड देशी गायी
                                    देण्यात आल्या.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-green-50 to-green-100 rounded-lg p-4 border-l-4 border-green-500">
                                    <p class="text-green-700 font-medium"><strong>परिणाम:</strong> गायी व घरातील
                                        वातावरणात चांगला बदल दिसू लागला</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Project 5: Panchgavya Products -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">5</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-3">पंचगव्य उत्पादनांचे
                                    प्रशिक्षण व विक्री</h3>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    2003 पासून विविध माध्यमातून विविध ठिकाणी चालविलेला उपक्रम. पुण्यात अनेक विक्री
                                    केंद्रे उभी राहिली.
                                </p>
                                <div
                                    class="bg-gradient-to-r from-teal-50 to-teal-100 rounded-lg p-4 border-l-4 border-teal-500">
                                    <p class="text-teal-700 font-medium"><strong>उद्दिष्ट:</strong> पंचगव्य उत्पादनांचा
                                        व्यापक प्रसार</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Project 6: Additional Projects -->
                    <div
                        class="bg-gray-50 rounded-xl p-8 border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl shadow-sm flex items-center justify-center">
                                    <span class="text-white font-bold text-xl">6</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold marathi-heading primary-green mb-4">इतर महत्वाचे उपक्रम
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 flex-shrink-0"></div>
                                        <p class="text-gray-600"><strong class="text-gray-800">पौर्णिमा
                                                कार्यक्रम:</strong> 2013 पासून भोसरी येथील पंजरापोळ-गोशाळेत मासिक
                                            कार्यक्रम</p>
                                    </div>
                                    <div class="flex items-start space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 flex-shrink-0"></div>
                                        <p class="text-gray-600"><strong class="text-gray-800">शाळा, घरासाठी किचन गार्डन
                                                प्रकल्प:</strong> स्वयंपूर्णतेसाठी</p>
                                    </div>
                                    <div class="flex items-start space-x-2">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full mt-2 flex-shrink-0"></div>
                                        <p class="text-gray-600"><strong class="text-gray-800">निर्माल्य ते अगरबत्ती
                                                प्रकल्प:</strong> महिला सक्षमीकरणासाठी</p>
                                    </div>
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
                    संस्थेच्या प्रकल्पांमध्ये सहभागी व्हा
                </h2>
                <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto">
                    स्वयंसेवक, दाता किंवा भागीदार म्हणून संस्थेसोबत या आणि गोसेवेचे महत्वाचे कार्य पुढे न्या
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
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेचे  प्रकल्प पहा</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        गो विज्ञान संशोधन संस्थेच्या विविध प्रकल्पांबद्दल अधिक माहिती मिळवा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/lectures') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            साप्ताहिक व्याख्याने
                        </a>
                        <a href="{{ url('/research') }}"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            संशोधन कार्य
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
