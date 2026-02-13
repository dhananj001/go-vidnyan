<!DOCTYPE html>
<html lang="mr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>प्रकल्प | गो विज्ञान संशोधन संस्था</title>
    <link rel="icon" type="image/png" href="images/go-vidnyan-favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tiro+Devanagari+Marathi:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-green: #16a34a;
            --accent-orange: #ea580c;
            --text-dark: #1f2937;
            --text-gray: #6b7280;
            --background: #ffffff;
            --light-gray: #f9fafb;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .marathi-heading {
            font-family: 'Tiro Devanagari Marathi', serif;
        }

        .primary-green {
            color: var(--primary-green);
        }

        .primary-green-bg {
            background-color: var(--primary-green);
        }

        .accent-orange {
            color: var(--accent-orange);
        }

        .smooth-transition {
            transition: all 0.2s ease;
        }

        .nav-active {
            background-color: rgba(22, 163, 74, 0.1);
            color: var(--primary-green) !important;
            font-weight: 600;
        }

        .page-hero {
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.95), rgba(20, 83, 45, 0.85)), url('images/homebg.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <nav class="container mx-auto px-4 sm:px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 hover:opacity-80 smooth-transition">
                    <img src="{{ asset('images/go-vidnyan-logo.png') }}" alt="Go Vidnyan Logo" class="h-12">
                    <div>
                        <h1 class="text-lg font-bold marathi-heading primary-green">गो विज्ञान संशोधन संस्था</h1>
                        <p class="text-sm text-gray-500 font-medium">Go Vidnyan Sanshodhan Sanstha</p>
                    </div>
                </a>

                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ url('/') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Home</a>
                    <a href="{{ url('/about') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">About</a>

                    <!-- Projects Dropdown -->
                    <div class="relative group">
                        <button
                            class="nav-active text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200 flex items-center space-x-1">
                            <span>Projects</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div
                            class="absolute top-full left-0 mt-1 w-56 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-2">
                                <a href="{{ url('/projects') }}"
                                    class="block px-4 py-3 text-sm text-green-700 bg-green-50 transition-colors duration-150 flex items-center space-x-3">
                                    <span class="text-green-500">📋</span>
                                    <div>
                                        <div class="font-medium">All Projects</div>
                                        <div class="text-xs text-gray-500">सर्व प्रकल्प</div>
                                    </div>
                                </a>
                                <a href="{{ url('/lectures') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-150 flex items-center space-x-3">
                                    <span class="text-green-500">📅</span>
                                    <div>
                                        <div class="font-medium">Weekly Lectures</div>
                                        <div class="text-xs text-gray-500">साप्ताहिक व्याख्याने</div>
                                    </div>
                                </a>
                                <a href="{{ url('/research') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-700 transition-colors duration-150 flex items-center space-x-3">
                                    <span class="text-orange-500">🔬</span>
                                    <div>
                                        <div class="font-medium">Research Work</div>
                                        <div class="text-xs text-gray-500">संशोधन कार्य</div>
                                    </div>
                                </a>
                                <a href="{{ url('/nirmalya') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-150 flex items-center space-x-3">
                                    <span class="text-blue-500">♻️</span>
                                    <div>
                                        <div class="font-medium">Nirmalya Project</div>
                                        <div class="text-xs text-gray-500">निर्माल्य प्रकल्प</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/awards') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Awards</a>
                    <a href="{{ url('/team') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Team</a>
                    <a href="{{ url('/gallery') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Gallery</a>
                    <a href="{{ url('/contact') }}"
                        class="primary-green-bg text-white px-6 py-2 rounded-lg smooth-transition hover:opacity-90 hover:shadow-md font-medium text-sm uppercase tracking-wider transform hover:scale-105 transition-all duration-200">Contact</a>
                </div>

                <button id="mobile-menu-button" class="md:hidden p-2 hover:bg-gray-100 rounded-lg smooth-transition">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-gray-100 space-y-2">
                <a href="{{ url('/') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Home</a>
                <a href="{{ url('/about') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">About</a>
                <a href="{{ url('/projects') }}"
                    class="block py-2 px-3 text-green-700 bg-green-50 rounded smooth-transition font-medium">Projects</a>
                <a href="{{ url('/awards') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Awards</a>
                <a href="{{ url('/team') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Team</a>
                <a href="{{ url('/gallery') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Gallery</a>
                <a href="{{ url('/contact') }}"
                    class="block py-2 primary-green-bg text-white text-center rounded-lg mt-3 smooth-transition">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Page Hero -->
        <section class="page-hero text-white py-20">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-white/90 text-md font-medium">गोविद्यान प्रकल्प</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6">आमचे प्रकल्प</h1>
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
                                            ज्ञानेश्वर साठे</p>
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
                    आमच्या प्रकल्पांमध्ये सहभागी व्हा
                </h2>
                <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto">
                    स्वयंसेवक, दाता किंवा भागीदार म्हणून आमच्यासोबत या आणि गोसेवेचे महत्वाचे कार्य पुढे न्या
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
                    <h2 class="text-2xl font-bold marathi-heading mb-4">आमचे प्रकल्प पहा</h2>
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
    </main>

    <!-- Footer -->
    <footer class="primary-green-bg text-white pt-6 pb-2">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-4">
                <!-- Logo & About -->
                <div class="md:col-span-1">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('images/go-vidnyan-logo.png') }}" alt="Go Vidnyan Logo" class="h-10">
                        <div>
                            <span class="text-lg font-bold marathi-heading block">गो विज्ञान संशोधन संस्था</span>
                            <span class="text-green-200 text-sm">Go Vidnyan Sanshodhan Sanstha</span>
                        </div>
                    </div>
                    <p class="text-green-100 text-sm max-w-xs">
                        भारतीय गाय-आधारित जीवनशैली पुनर्स्थापित करण्यासाठी समर्पित संस्था. २००२ पासून निरंतर सेवारत.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-4 marathi-heading">त्वरित लिंक्स</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <ul class="space-y-2">
                            <li><a href="{{ url('/') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">मुख्यपृष्ठ</a>
                            </li>
                            <li><a href="{{ url('/about') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">आमच्याबद्दल</a>
                            </li>
                            <li><a href="{{ url('/projects') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">प्रकल्प</a></li>
                            <li><a href="{{ url('/research') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">संशोधन</a></li>
                        </ul>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/awards') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">पुरस्कार</a></li>
                            <li><a href="{{ url('/team') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">टीम</a></li>
                            <li><a href="{{ url('/gallery') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">गॅलरी</a></li>
                            <li><a href="{{ url('/contact') }}"
                                    class="text-green-200 hover:text-white transition-colors text-sm">संपर्क</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Information -->
                <div>
                    <h3 class="font-bold text-lg mb-4 marathi-heading">संपर्क माहिती</h3>
                    <div class="space-y-3">
                        <!-- Address -->
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-orange-400/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-orange-400/30 flex-shrink-0">
                                <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="text-green-100 text-sm">
                                <p class="font-medium">अ/३, विष्णुकृपा सोसायटी</p>
                                <p>नवा विष्णू चौक, बाजीराव रोड</p>
                                <p class="text-orange-200 font-semibold">पुणे - ४११००२, महाराष्ट्र</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-green-400/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-green-400/30 flex-shrink-0">
                                <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-green-100 text-sm">
                                <p class="font-medium">श्री. ज्ञानेश्वर साठे</p>
                                <a href="tel:+918888871310"
                                    class="text-orange-200 hover:text-white transition-colors">+91 8888871310</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-400/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-blue-400/30 flex-shrink-0">
                                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-green-100 text-sm">
                                <a href="mailto:govidnyan.ss@gmail.com"
                                    class="text-orange-200 hover:text-white transition-colors">govidnyan.ss@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media & Newsletter -->
                <div>
                    <h3 class="font-bold text-lg mb-4 marathi-heading">सामाजिक माध्यमे</h3>
                    <div class="space-y-3">
                        <p class="text-green-100 text-sm">आमच्याशी जोडले रहा</p>
                        <div class="flex space-x-3">
                            <!-- Facebook -->
                            <a href="#"
                                class="w-10 h-10 bg-blue-600/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-blue-600/30 hover:bg-blue-600/30 transition-colors">
                                <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <!-- Twitter -->
                            <a href="#"
                                class="w-10 h-10 bg-sky-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-sky-500/30 hover:bg-sky-500/30 transition-colors">
                                <svg class="w-5 h-5 text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a href="#"
                                class="w-10 h-10 bg-red-600/20 backdrop-blur-sm rounded-lg flex items-center justify-center border border-red-600/30 hover:bg-red-600/30 transition-colors">
                                <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        </div>
                        <!-- Newsletter -->
                        <div class="mt-4">
                            <p class="text-green-100 text-sm mb-2">न्यूजलेटरसाठी साइन अप करा</p>
                            <div class="flex">
                                <input type="email" placeholder="तुमचा ईमेल"
                                    class="flex-1 px-3 py-2 bg-white/10 border border-white/20 rounded-l-lg text-white placeholder-green-200 text-sm focus:outline-none focus:border-orange-400">
                                <button
                                    class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white rounded-r-lg transition-colors text-sm font-medium">सबमिट</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

</body>

</html>
