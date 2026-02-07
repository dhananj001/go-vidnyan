<!DOCTYPE html>
<html lang="mr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>निर्माल्य प्रकल्प | गो विज्ञान संशोधन संस्था</title>
    <link rel="icon" type="image/png" href="images/go-vidnyan-favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tiro+Devanagari+Marathi:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        /* Minimalist UI/UX styles */
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

        .accent-orange-bg {
            background-color: var(--accent-orange);
        }

        /* Minimal transitions */
        .smooth-transition {
            transition: all 0.2s ease;
        }

        .card-minimal {
            border: 1px solid #e5e7eb;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .card-minimal:hover {
            border-color: var(--primary-green);
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.1);
        }

        /* Timeline styles */
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #16a34a, #ea580c);
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: -6px;
            top: 8px;
            width: 14px;
            height: 14px;
            background: #16a34a;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 2px #16a34a;
        }

        /* Active navigation styles */
        .nav-active {
            background-color: rgba(22, 163, 74, 0.1);
            color: var(--primary-green) !important;
            font-weight: 600;
        }

        .nav-active:hover {
            background-color: rgba(22, 163, 74, 0.15);
            color: var(--primary-green) !important;
        }

        /* Active dropdown button styles (for Projects when on project pages) */
        .dropdown-btn-active {
            background-color: rgba(22, 163, 74, 0.08);
            color: var(--primary-green) !important;
            font-weight: 600;
        }

        .dropdown-btn-active:hover {
            background-color: rgba(22, 163, 74, 0.12);
            color: var(--primary-green) !important;
        }

        /* Active dropdown item styles */
        .dropdown-active {
            background-color: var(--primary-green);
            color: white !important;
        }

        .dropdown-active:hover {
            background-color: var(--primary-green);
            color: white !important;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <nav class="container mx-auto px-4 sm:px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 hover:opacity-80 smooth-transition">
                    <img src="images/go-vidnyan-logo.png" alt="Go Vidnyan Logo" class="h-12">
                    <div>
                        <h1 class="text-lg font-bold marathi-heading primary-green">गो विज्ञान संशोधन संस्था</h1>
                        <p class="text-sm text-gray-500 font-medium">Go Vidnyan Sanshodhan Sanstha</p>
                    </div>
                </a>

                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ url('/') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Home</a>
                    <a href="{{ url('/') }}#about"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">About</a>

                    <!-- Projects Dropdown -->
                    <div class="relative group">
                        <button
                            class="dropdown-btn-active text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200 flex items-center space-x-1">
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
                                    class="dropdown-active block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-colors duration-150 flex items-center space-x-3">
                                    <span class="text-blue-500">♻️</span>
                                    <div>
                                        <div class="font-medium">Nirmalya Project</div>
                                        <div class="text-xs text-gray-500">निर्माल्य प्रकल्प</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/') }}#awards"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Awards</a>
                    <a href="{{ url('/gallery') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Gallery</a>
                    <a href="{{ url('/query') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Query</a>
                    <a href="{{ url('/') }}#contact"
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
                <a href="{{ url('/') }}#about"
                    class="block py-2 text-gray-700 hover:text-green-600 smooth-transition font-medium">About</a>
                <a href="{{ url('/') }}#projects"
                    class="block py-2 text-gray-700 hover:text-green-600 smooth-transition font-medium">Work</a>
                <a href="{{ url('/') }}#awards"
                    class="block py-2 text-gray-700 hover:text-green-600 smooth-transition font-medium">Awards</a>
                <a href="{{ url('/gallery') }}"
                    class="block py-2 text-gray-700 hover:text-green-600 smooth-transition font-medium">Gallery</a>
                <a href="{{ url('/query') }}"
                    class="block py-2 text-gray-700 hover:text-green-600 smooth-transition font-medium">Query</a>
                <!-- Project Pages -->
                <div class="border-t border-gray-200 mt-2 pt-2">
                    <p class="px-3 py-1 text-xs font-semibold text-gray-500 uppercase tracking-wider">विशेष प्रकल्प</p>
                    <a href="{{ url('/lectures') }}"
                        class="block py-2 px-3 text-gray-700 hover:bg-green-50 rounded smooth-transition">📅 साप्ताहिक
                        व्याख्याने</a>
                    <a href="{{ url('/research') }}"
                        class="block py-2 px-3 text-gray-700 hover:bg-orange-50 rounded smooth-transition">🔬 संशोधन
                        कार्य</a>
                    <a href="{{ url('/nirmalya') }}"
                        class="block py-2 px-3 text-blue-700 bg-blue-50 rounded smooth-transition font-medium">♻️
                        निर्माल्य प्रकल्प</a>
                </div>
                <a href="{{ url('/') }}#contact"
                    class="block py-2 primary-green-bg text-white text-center rounded-lg mt-3 smooth-transition">Contact</a>
            </div>
        </nav>
    </header> 

    <!-- Main Content -->
    <main class="min-h-screen bg-gradient-to-br from-green-50 to-white">
        <!-- Hero Section -->
        <section class="relative py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-blue-100 text-blue-800 rounded-full px-4 py-1.5 mb-4">
                        <span class="font-semibold text-sm uppercase tracking-wider">निर्माल्य प्रकल्प</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold marathi-heading primary-green mb-4 leading-tight">
                        गणेशोत्सव निर्माल्य कंपोस्टिंग प्रकल्प
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        पर्यावरण संरक्षण आणि सेंद्रिय खत निर्मितीसाठी निर्माल्याचे शास्त्रीय व्यवस्थापन -
                        पुणे महानगरपालिका व वुमन्स इंडिया यांच्या सहकार्याने
                    </p>
                    <div class="w-16 h-0.5 bg-orange-400 mx-auto rounded-full mt-6"></div>
                </div>

                <!-- Project Overview -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-2xl font-bold marathi-heading primary-green mb-4">प्रकल्पाची माहिती</h2>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                गणेशोत्सवाच्या काळात मोठ्या प्रमाणात निर्माल्य (फुले, पाने, हार) निर्माण होते.
                                हे निर्माल्य नद्यांमध्ये टाकल्याने पाणी प्रदूषण होते. गो विज्ञान संशोधन संस्थेने
                                या निर्माल्याचे गोमूत्र आणि शेणाच्या सहाय्याने कंपोस्टिंग करून उत्तम दर्जाचे
                                सेंद्रिय खत तयार करण्याचा उपक्रम सुरू केला.
                            </p>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-blue-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-blue-600 mb-1">350</div>
                                    <div class="text-sm text-gray-600">टन निर्माल्य प्रक्रिया</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-green-600 mb-1">8</div>
                                    <div class="text-sm text-gray-600">वर्षांचा अनुभव</div>
                                </div>
                                <div class="bg-orange-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-orange-600 mb-1">100+</div>
                                    <div class="text-sm text-gray-600">शेतकऱ्यांना खत</div>
                                </div>
                                <div class="bg-purple-50 rounded-lg p-4 text-center">
                                    <div class="text-3xl font-bold text-purple-600 mb-1">Zero</div>
                                    <div class="text-sm text-gray-600">नदी प्रदूषण</div>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-blue-400 to-green-400 rounded-2xl transform rotate-3">
                            </div>
                            <div class="relative bg-white p-2 rounded-2xl shadow-xl">
                                <div
                                    class="bg-gradient-to-br from-blue-100 to-green-100 rounded-xl w-full h-64 flex items-center justify-center">
                                    <div class="text-center">
                                        <svg class="w-24 h-24 text-green-600 mx-auto mb-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                        </svg>
                                        <p class="text-gray-600 font-medium marathi-heading">निर्माल्य ते खत</p>
                                        <p class="text-sm text-gray-500">पर्यावरण पूरक प्रक्रिया</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process Section -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">कंपोस्टिंग प्रक्रिया
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Step 1 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl">१</span>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">निर्माल्य संकलन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                गणेशोत्सवाच्या काळात विविध ठिकाणांहून निर्माल्याचे संकलन
                            </p>
                        </div>

                        <!-- Step 2 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl">२</span>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">वर्गीकरण</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                निर्माल्यातील प्लॅस्टिक व इतर कचरा वेगळा करणे
                            </p>
                        </div>

                        <!-- Step 3 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl">३</span>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">कंपोस्टिंग</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                गोमूत्र व शेणाच्या सहाय्याने वैज्ञानिक कंपोस्टिंग प्रक्रिया
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl">४</span>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">खत वितरण</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                तयार झालेले सेंद्रिय खत शेतकऱ्यांना वितरण
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Project Timeline -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">प्रकल्प कालरेषा</h2>
                    <div class="space-y-8">
                        <!-- Year 2016 -->
                        <div class="timeline-item">
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                    <h3 class="text-xl font-bold marathi-heading text-green-600">२०१६</h3>
                                    <span
                                        class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full font-medium">प्रारंभ</span>
                                </div>
                                <p class="text-gray-600 leading-relaxed">
                                    पुणे महानगरपालिका व वुमन्स इंडिया यांच्या सहकार्याने निर्माल्य कंपोस्टिंग प्रकल्पाचा
                                    प्रारंभ. पहिल्या वर्षी ३० टन निर्माल्यावर यशस्वी प्रक्रिया.
                                </p>
                            </div>
                        </div>

                        <!-- Year 2017-2019 -->
                        <div class="timeline-item">
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                    <h3 class="text-xl font-bold marathi-heading text-blue-600">२०१७ - २०१९</h3>
                                    <span
                                        class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-medium">विस्तार</span>
                                </div>
                                <p class="text-gray-600 leading-relaxed">
                                    प्रकल्पाचा विस्तार. वार्षिक ५० टन पेक्षा जास्त निर्माल्यावर प्रक्रिया.
                                    नवीन संकलन केंद्रे स्थापन. स्वयंसेवकांची संख्या वाढली.
                                </p>
                            </div>
                        </div>

                        <!-- Year 2020-2021 -->
                        <div class="timeline-item">
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                    <h3 class="text-xl font-bold marathi-heading text-orange-600">२०२० - २०२१</h3>
                                    <span
                                        class="text-sm bg-orange-100 text-orange-700 px-3 py-1 rounded-full font-medium">आव्हाने</span>
                                </div>
                                <p class="text-gray-600 leading-relaxed">
                                    कोविड-१९ काळातही मर्यादित स्वरूपात प्रकल्प सुरू. ऑनलाइन जनजागृती कार्यक्रम.
                                    सामाजिक अंतर राखून कंपोस्टिंग कार्य.
                                </p>
                            </div>
                        </div>

                        <!-- Year 2022-2023 -->
                        <div class="timeline-item">
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                    <h3 class="text-xl font-bold marathi-heading text-purple-600">२०२२ - २०२३</h3>
                                    <span
                                        class="text-sm bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-medium">यश</span>
                                </div>
                                <p class="text-gray-600 leading-relaxed">
                                    प्रकल्पाला व्यापक मान्यता. एकूण ३५० टन निर्माल्यावर प्रक्रिया पूर्ण.
                                    शेकडो शेतकऱ्यांना सेंद्रिय खत वितरण. पर्यावरण पुरस्कार प्राप्त.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Benefits Section -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">प्रकल्पाचे फायदे</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Benefit 1 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">पर्यावरण संरक्षण</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                नद्यांमध्ये निर्माल्य टाकण्यापासून रोखून जलप्रदूषण कमी करणे.
                                पाणवठे आणि नद्यांचे संरक्षण.
                            </p>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">सेंद्रिय खत निर्मिती</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                उत्कृष्ट दर्जाचे सेंद्रिय खत तयार होते जे शेतीसाठी अत्यंत उपयुक्त आहे.
                            </p>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">शेतकरी सहाय्य</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                गरजू शेतकऱ्यांना मोफत किंवा अल्प दरात सेंद्रिय खत पुरवठा.
                            </p>
                        </div>

                        <!-- Benefit 4 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">जनजागृती</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                पर्यावरण संरक्षण आणि कचरा व्यवस्थापनाबद्दल समाजात जागरूकता निर्माण.
                            </p>
                        </div>

                        <!-- Benefit 5 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">चक्राकार अर्थव्यवस्था</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                कचऱ्याचे मूल्यवान उत्पादनात रूपांतर - शाश्वत विकासाचे उदाहरण.
                            </p>
                        </div>

                        <!-- Benefit 6 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">सांस्कृतिक जतन</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                धार्मिक परंपरा जपत पर्यावरणाचे संरक्षण - दोन्हींचा समतोल.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Partners Section -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">सहकारी संस्था</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center p-6 bg-gray-50 rounded-xl">
                            <div
                                class="w-20 h-20 bg-blue-100 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">पुणे महानगरपालिका</h3>
                            <p class="text-gray-600 text-sm">निर्माल्य संकलन व प्रक्रियेसाठी सहकार्य</p>
                        </div>

                        <div class="text-center p-6 bg-gray-50 rounded-xl">
                            <div
                                class="w-20 h-20 bg-pink-100 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-pink-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">वुमन्स इंडिया</h3>
                            <p class="text-gray-600 text-sm">महिला स्वयंसेविकांचे नेटवर्क व समन्वय</p>
                        </div>

                        <div class="text-center p-6 bg-gray-50 rounded-xl">
                            <div
                                class="w-20 h-20 bg-green-100 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">स्वयंसेवक</h3>
                            <p class="text-gray-600 text-sm">१००+ समर्पित स्वयंसेवकांचे योगदान</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center bg-gradient-to-r from-blue-600 to-green-600 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">या उपक्रमात सहभागी व्हा!</h2>
                    <p class="text-blue-100 mb-6 max-w-2xl mx-auto">
                        गणेशोत्सवाच्या काळात स्वयंसेवक म्हणून सहभागी व्हा, निर्माल्य संकलनात मदत करा किंवा
                        सेंद्रिय खतासाठी संपर्क साधा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/query') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            स्वयंसेवक व्हा
                        </a>
                        <a href="{{ url('/') }}#contact"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-blue-700 smooth-transition">
                            संपर्क साधा
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="primary-green-bg text-white py-6">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-3">
                <div class="flex items-center space-x-3">
                    <img src="images/go-vidnyan-logo.png" alt="Go Vidnyan Logo" class="h-8">
                    <div class="text-left">
                        <span class="text-md font-bold marathi-heading text-white block leading-tight">गो
                            विज्ञान संशोधन संस्था</span>
                        <span class="text-sm text-green-200 font-medium">Go Vidnyan Sanshodhan Sanstha</span>
                    </div>
                </div>
                <div class="text-center md:text-right">
                    <p class="text-green-200 text-sm font-medium">&copy; २०२५ गो विज्ञान संशोधन संस्था. सर्व
                        हक्क राखीव.</p>
                    <p class="text-orange-200 text-sm font-semibold mt-1">२००२ पासून निरंतर सेवारत •</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.getElementById('mobile-menu-button');

            if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>

</body>

</html>