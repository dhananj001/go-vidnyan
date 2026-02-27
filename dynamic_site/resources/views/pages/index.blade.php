@extends('layouts.public')

@section('title', 'गो विज्ञान संशोधन संस्था | Go Vidnyan Sanshodhan Sanstha')

@push('styles')
    .hero-bg {
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.95), rgba(20, 83, 45, 0.7)), url('images/homebg.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 90vh;
            display: flex;
            align-items: center;
        }
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
    <!-- Hero Section -->
        <section class="hero-bg text-white relative">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="container mx-auto px-4 sm:px-6 relative z-10">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Left Content -->
                        <div class="text-left lg:pr-8">
                            <div
                                class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                                <img src="{{ asset('images/go-vidnyan-logo.png') }}" alt="Go Vidnyan Logo" class="h-8 mr-3">
                                <span class="text-white/90 text-md font-medium">Est. 2002 | पुणे</span>
                            </div>

                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6 leading-tight">
                                गो विज्ञान संशोधन संस्था
                            </h1>

                            <h2 class="text-2xl md:text-3xl font-semibold text-amber-100 mb-6 marathi-heading">
                                गोसेवा, राष्ट्ररक्षा
                            </h2>

                            <p class="text-lg md:text-xl text-gray-100 mb-8 leading-relaxed max-w-2xl">
                                वैज्ञानिक दृष्टीकोनातून पंचगव्य-आधारित जीवनशैली पुनर्स्थापित करून भारतीय गायींचे संगोपन,
                                संवर्धन आणि संरक्षण करणे
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ url('/about') }}"
                                    class="inline-flex items-center justify-center bg-white text-green-700 font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-gray-50 shadow-lg">
                                    <span>संस्थेबद्दल जाणून घ्या</span>
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="{{ url('/contact') }}"
                                    class="inline-flex items-center justify-center border-2 border-white text-white font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-white hover:text-green-700">
                                    संपर्क करा
                                </a>
                            </div>
                        </div>

                        <!-- Right Content - Key Stats -->
                        <div class="lg:pl-8">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20">
                                <h3 class="text-xl font-semibold mb-6 text-center marathi-heading">संस्थेचा प्रभाव</h3>
                                <div class="grid grid-cols-2 gap-6 text-center">
                                    <div class="border-b border-white/20 pb-4">
                                        <div class="text-3xl font-bold text-amber-200">1000+</div>
                                        <div class="text-md text-gray-200 mt-1">शेतकरी मार्गदर्शन</div>
                                    </div>
                                    <div class="border-b border-white/20 pb-4">
                                        <div class="text-3xl font-bold text-amber-200">350</div>
                                        <div class="text-md text-gray-200 mt-1">टन निर्माल्य प्रक्रिया</div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-3xl font-bold text-amber-200">87</div>
                                        <div class="text-md text-gray-200 mt-1">गायींचे वितरण</div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-3xl font-bold text-amber-200">500+</div>
                                        <div class="text-md text-gray-200 mt-1">रुग्ण उपचार</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Preview Section -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 max-w-7xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-green-400 to-orange-400 rounded-2xl transform rotate-3">
                        </div>
                        <div class="relative bg-white p-2 rounded-2xl shadow-xl">
                            <img src="{{ asset('images/research.png') }}" alt="Research and Development"
                                class="rounded-xl w-full h-auto object-cover">
                        </div>
                    </div>
                    <div>
                        <div class="inline-flex items-center bg-green-50 rounded-full px-4 py-2 mb-4">
                            <span
                                class="text-green-700 font-semibold text-sm uppercase tracking-wider">संस्थेबद्दल</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-6">
                            परंपरेशी जोडलेले, विज्ञानाने प्रेरित
                        </h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            गो-विज्ञान संशोधन संस्थेची स्थापना श्रद्धेय मोरोपंत पिंगळे यांच्या प्रेरणेने पुण्यात २००२
                            साली झाली.
                            भारतीय गाय-आधारित जीवनशैली पुनर्स्थापित करण्यासाठी संस्था समर्पित आहोत.
                        </p>
                        <div class="grid grid-cols-3 gap-4 mb-8">
                            <div class="text-center p-4 bg-green-50 rounded-lg">
                                <span class="text-green-600 font-semibold marathi-heading">कृषी</span>
                            </div>
                            <div class="text-center p-4 bg-orange-50 rounded-lg">
                                <span class="text-orange-600 font-semibold marathi-heading">आरोग्य</span>
                            </div>
                            <div class="text-center p-4 bg-blue-50 rounded-lg">
                                <span class="text-blue-600 font-semibold marathi-heading">पर्यावरण</span>
                            </div>
                        </div>
                        <a href="{{ url('/about') }}"
                            class="inline-flex items-center bg-green-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-green-700 transition-colors duration-200">
                            <span>अधिक जाणून घ्या</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Projects Section -->
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-orange-50 rounded-full px-4 py-2 mb-4">
                        <span class="text-orange-700 font-semibold text-sm uppercase tracking-wider">संस्थेचे  प्रकल्प</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">
                        विशेष प्रकल्प
                    </h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Lectures -->
                    <a href="{{ url('/lectures') }}" class="group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-green-200 transition-all duration-300 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-3xl">📅</span>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-900 mb-3">साप्ताहिक व्याख्याने</h3>
                            <p class="text-gray-600 mb-4">दर मंगळवारी गोविज्ञान विषयावर मार्गदर्शक व्याख्याने</p>
                            <span class="text-green-600 font-medium inline-flex items-center">
                                अधिक पहा
                                <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </div>
                    </a>

                    <!-- Research -->
                    <a href="{{ url('/research') }}" class="group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-orange-200 transition-all duration-300 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-3xl">🔬</span>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-900 mb-3">संशोधन कार्य</h3>
                            <p class="text-gray-600 mb-4">पंचगव्य आधारित संशोधन आणि वैज्ञानिक अभ्यास</p>
                            <span class="text-orange-600 font-medium inline-flex items-center">
                                अधिक पहा
                                <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </div>
                    </a>

                    <!-- Nirmalya -->
                    <a href="{{ url('/nirmalya') }}" class="group">
                        <div
                            class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <span class="text-3xl">♻️</span>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-900 mb-3">निर्माल्य प्रकल्प</h3>
                            <p class="text-gray-600 mb-4">गणपती उत्सवातील निर्माल्याची पर्यावरणपूरक विल्हेवाट</p>
                            <span class="text-blue-600 font-medium inline-flex items-center">
                                अधिक पहा
                                <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="text-center mt-10">
                    <a href="{{ url('/projects') }}"
                        class="inline-flex items-center border-2 border-green-600 text-green-600 font-semibold py-3 px-8 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-200">
                        <span>सर्व प्रकल्प पहा</span>
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Awards Preview Section -->
        <section class="py-16 lg:py-20 bg-gradient-to-br from-orange-50 to-amber-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-orange-100 rounded-full px-4 py-2 mb-4">
                        <span class="text-orange-700 font-semibold text-sm uppercase tracking-wider">पुरस्कार</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-6">
                        कै. श्री. मोरोपंत पिंगळे वार्षिक पुरस्कार
                    </h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
                        २०१० पासून दरवर्षी गोसंगोपन, गोसंवर्धन, गोआधारित शेती आणि पंचगव्य संशोधन क्षेत्रात उल्लेखनीय
                        कार्य करणाऱ्यांना सन्मानित करण्यात येते.
                    </p>
                    <div class="flex flex-wrap justify-center gap-8 mb-10">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-600">14+</div>
                            <div class="text-gray-600 mt-1">वर्षे पुरस्कार वितरण</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-green-600">50+</div>
                            <div class="text-gray-600 mt-1">पुरस्कार विजेते</div>
                        </div>
                    </div>
                    <a href="{{ url('/awards') }}"
                        class="inline-flex items-center bg-orange-500 text-white font-semibold py-3 px-8 rounded-lg hover:bg-orange-600 transition-colors duration-200">
                        <span>पुरस्कारांची माहिती पहा</span>
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Team Preview Section -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-green-50 rounded-full px-4 py-2 mb-4">
                        <span class="text-green-700 font-semibold text-sm uppercase tracking-wider">संस्थेची टीम</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">
                        समर्पित कार्यकर्ते
                    </h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-10">
                    <div class="text-center p-6 bg-gray-50 rounded-2xl">
                        <div class="w-16 h-16 bg-green-100 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-green-600 mb-2">7</div>
                        <div class="text-gray-700 font-medium">विश्वस्त</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-2xl">
                        <div class="w-16 h-16 bg-orange-100 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-orange-600 mb-2">100+</div>
                        <div class="text-gray-700 font-medium">कार्यकर्ते</div>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-2xl">
                        <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-blue-600 mb-2">8+</div>
                        <div class="text-gray-700 font-medium">डॉक्टर संशोधक</div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ url('/team') }}"
                        class="inline-flex items-center border-2 border-green-600 text-green-600 font-semibold py-3 px-8 rounded-lg hover:bg-green-600 hover:text-white transition-all duration-200">
                        <span>टीम पहा</span>
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेच्या मिशनमध्ये सामील व्हा</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        गोसेवा आणि पंचगव्य आधारित जीवनशैलीच्या प्रसारात संस्थेसोबत हात मिळवा. स्वयंसेवक म्हणून सामील
                        व्हा किंवा संपर्क साधा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            संपर्क करा
                        </a>
                        <a href="{{ url('/gallery') }}"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            गॅलरी पहा
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
