@extends('layouts.public')

@section('title', 'संस्थेबद्दल | गो विज्ञान संशोधन संस्था')

@section('content')
    <!-- Page Hero -->
        <section class="page-hero text-white py-20">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-white/90 text-md font-medium">Est. 2002 | पुणे</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6">संस्थेबद्दल</h1>
                    <p class="text-xl text-gray-100 max-w-2xl mx-auto">
                        गो विज्ञान संशोधन संस्थेची स्थापना, ध्येय, कार्यक्षेत्रे आणि संस्थेची दृष्टी
                    </p>
                </div>
            </div>
        </section>

        <!-- About Content -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 max-w-7xl">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold marathi-heading primary-green mb-4 leading-tight">
                        परंपरेशी जोडलेले, विज्ञानाने प्रेरित
                    </h2>
                    <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Content -->
                    <div>
                        <!-- Establishment Info -->
                        <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 mb-8">
                            <div class="flex items-start space-x-4 mb-6">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-2xl marathi-heading mb-3">संस्थेची स्थापना
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed text-lg">
                                        गो-विज्ञान संशोधन संस्थेची स्थापना श्रद्धेय <span
                                            class="font-semibold text-green-700">मोरोपंत पिंगळे</span> यांच्या प्रेरणेने
                                        पुण्यात <span class="font-semibold text-green-700">२००२</span> साली झाली.
                                    </p>
                                    <p class="text-gray-600 leading-relaxed mt-3">
                                        संस्था <span class="font-semibold text-green-700">"पब्लिक चॅरिटेबल
                                            ट्रस्ट"</span> म्हणून नोंदणीकृत आहे आणि गेल्या २० वर्षांहून अधिक काळ गोसेवा
                                        आणि संशोधन क्षेत्रात कार्यरत आहे.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Mission -->
                        <div
                            class="bg-gradient-to-r from-green-50 to-orange-50 rounded-2xl p-8 border border-green-100 mb-8">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center">
                                        <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-2xl marathi-heading mb-3">संस्थेचे  ध्येय</h3>
                                    <p class="text-gray-700 leading-relaxed text-lg">
                                        भारतीय गाय-आधारित जीवनशैली पुनर्स्थापित करण्यासाठी समर्पित आहे, वैज्ञानिक
                                        दृष्टीकोनातून पंचगव्याच्या महत्त्वाला चालना देणे.
                                    </p>
                                    <div class="mt-4 p-4 bg-white rounded-xl border border-green-200">
                                        <p class="text-green-700 font-semibold text-lg marathi-heading">"गोसेवा,
                                            राष्ट्ररक्षा"</p>
                                        <p class="text-gray-600 text-sm mt-1">- संस्थेचे ब्रीदवाक्य</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vision -->
                        <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-sm">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 text-2xl marathi-heading mb-3">संस्थेची दृष्टी</h3>
                                    <p class="text-gray-600 leading-relaxed text-lg">
                                        शाश्वत निरामय समाज निर्मितीसाठी वैज्ञानिक दृष्ट्या सिद्ध झालेल्या पंचगव्य
                                        वापराला प्रोत्साहन देणे आणि भारतीय गायींचे संगोपन, संवर्धन व संरक्षण करणे.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Image & Stats -->
                    <div>
                        <div class="relative mb-2">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-green-400 to-orange-400 rounded-2xl transform rotate-3">
                            </div>
                            <div class="relative bg-white p-1 rounded-2xl shadow-xl">
                                <img src="{{ asset('images/research.png') }}" alt="Research and Development"
                                    class="rounded-xl w-full h-auto object-cover">
                            </div>
                            <div class="absolute -top-4 -right-4 w-6 h-6 bg-yellow-400 rounded-full"></div>
                            <div class="absolute -bottom-4 -left-4 w-4 h-4 bg-green-400 rounded-full"></div>
                        </div>

                        <!-- Focus Areas -->
                        <div class="bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-4 text-white">
                            <h3 class="font-bold text-lg marathi-heading mb-2 text-center">कार्यक्षेत्रे</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-2 border border-white/20">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                            <span class="text-xl">🌾</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm">कृषी</h4>
                                            <p class="text-green-100 text-xs">गो-आधारित सेंद्रिय शेती पद्धती</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-2 border border-white/20">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                            <span class="text-xl">💊</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm">आरोग्य</h4>
                                            <p class="text-green-100 text-xs">पंचगव्य चिकित्सा आणि उपचार</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-2 border border-white/20">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                            <span class="text-xl">🌿</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm">पर्यावरण</h4>
                                            <p class="text-green-100 text-xs">शाश्वत आणि पर्यावरण अनुकूल उपक्रम</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-2 border border-white/20">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                            <span class="text-xl">🔬</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-sm">संशोधन</h4>
                                            <p class="text-green-100 text-xs">वैज्ञानिक अभ्यास आणि प्रमाणीकरण</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Stats -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">संस्थेचा प्रभाव</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8 max-w-5xl mx-auto">
                    <div class="text-center bg-white rounded-xl p-6 shadow-md border border-gray-100">
                        <p class="text-4xl md:text-5xl font-bold accent-orange mb-2">1000+</p>
                        <p class="text-gray-600 marathi-heading">शेतकऱ्यांना मार्गदर्शन</p>
                    </div>
                    <div class="text-center bg-white rounded-xl p-6 shadow-md border border-gray-100">
                        <p class="text-4xl md:text-5xl font-bold accent-orange mb-2">350</p>
                        <p class="text-gray-600 marathi-heading">टन निर्माल्य प्रक्रिया</p>
                    </div>
                    <div class="text-center bg-white rounded-xl p-6 shadow-md border border-gray-100">
                        <p class="text-4xl md:text-5xl font-bold accent-orange mb-2">87</p>
                        <p class="text-gray-600 marathi-heading">गायींचे वितरण</p>
                    </div>
                    <div class="text-center bg-white rounded-xl p-6 shadow-md border border-gray-100">
                        <p class="text-4xl md:text-5xl font-bold accent-orange mb-2">500+</p>
                        <p class="text-gray-600 marathi-heading">रुग्णांवर उपचार</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Founder Info -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
                <div
                    class="bg-gradient-to-br from-green-50 to-orange-50 rounded-2xl p-8 lg:p-12 border border-green-100">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">प्रेरणास्त्रोत
                        </h2>
                        <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                    </div>
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-shrink-0">
                            <div
                                class="w-32 h-32 bg-gradient-to-br from-green-400 to-orange-400 rounded-full flex items-center justify-center">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center">
                                    <span class="text-5xl">🙏</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold marathi-heading text-gray-900 mb-3">श्रद्धेय मोरोपंत पिंगळे
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-lg">
                                संस्थेची स्थापना श्रद्धेय मोरोपंत पिंगळे यांच्या प्रेरणेने झाली. त्यांच्या दूरदृष्टीने
                                आणि मार्गदर्शनाने संस्थेला गोसेवा आणि संशोधन क्षेत्रात एक विशेष स्थान मिळवून दिले आहे.
                            </p>
                            <p class="text-gray-600 leading-relaxed mt-3">
                                त्यांच्या स्मरणार्थ दरवर्षी <span class="font-semibold text-green-700">कै.श्री. मोरोपंत
                                    पिंगळे वार्षिक पुरस्कार</span> देण्यात येतो.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <!-- <section class="py-16 bg-gradient-to-r from-green-600 to-green-700">
            <div class="container mx-auto px-4 sm:px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold marathi-heading text-white mb-6">
                    संस्थेसोबत जोडले जा
                </h2>
                <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto">
                    गोसेवा आणि राष्ट्ररक्षणाच्या या महत्वाच्या कार्यात सहभागी व्हा
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="contact.html"
                        class="inline-flex items-center justify-center bg-white text-green-700 font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-gray-50 shadow-lg">
                        संपर्क करा
                    </a>
                    <a href="projects.html"
                        class="inline-flex items-center justify-center border-2 border-white text-white font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-white hover:text-green-700">
                        प्रकल्प पहा
                    </a>
                </div>
            </div>
        </section> -->

        <!-- Call to Action -->
        <section class="py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेच्या कार्याबद्दल अधिक जाणून घ्या</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        गो विज्ञान संशोधन संस्थेच्या इतिहास, मिशन आणि कार्याबद्दल अधिक माहिती मिळवा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/projects') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            प्रकल्प पहा
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
