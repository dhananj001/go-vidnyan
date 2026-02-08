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
                                <a href="{{ url('/projects') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-150 flex items-center space-x-3">
                                    <span class="text-gray-500">📋</span>
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

                    <a href="{{ url('/awards') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Awards</a>
                    <a href="{{ url('/team') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Team</a>
                    <a href="{{ url('/gallery') }}"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Gallery</a>
                    <!-- <a href="query.html"
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Query</a> -->
                    <a href="{{ url('/contact') }}"
                        class="primary-green-bg text-white px-6 py-2 rounded-lg smooth-transition hover:opacity-90 hover:shadow-md font-medium text-sm uppercase tracking-wider transform hover:scale-105 transition-all duration-200">Contact</a>
                </div>

                <button id="mobile-menu-button" class="md:hidden p-2 hover:bg-gray-100 rounded-lg smooth-transition">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-gray-100 space-y-2">
                <a href="{{ url('/') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Home</a>
                <a href="{{ url('/about') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">About</a>
                <a href="{{ url('/projects') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Projects</a>
                <a href="{{ url('/awards') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Awards</a>
                <a href="{{ url('/team') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Team</a>
                <a href="{{ url('/gallery') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Gallery</a>
                <a href="{{ url('/query') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Query</a>
                <a href="{{ url('/contact') }}"
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
                        पुणे महानगरपालिका व वुमन्स इंडिया यांच्या सहकार्याने. सध्या हा प्रकल्प फक्त तज्ञ सल्ला स्वरूपात
                        चालवला जात आहे.
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
                                सेंद्रिय खत तयार करण्याचा उपक्रम सुरू केला. सध्या हा प्रकल्प फक्त तज्ञ सल्ला स्वरूपात
                                चालवला जात आहे.
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
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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

                        <div class="text-center p-6 bg-gray-50 rounded-xl">
                            <div
                                class="w-20 h-20 bg-blue-100 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">कमिन्स इंडिया कंपनी</h3>
                            <p class="text-gray-600 text-sm">तांत्रिक सहकार्य आणि सल्ला</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">निर्माल्य प्रकल्पाबद्दल जाणून घ्या!</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        आमच्या इतर प्रकल्पांबद्दल माहिती घ्या आणि संपर्क साधा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/projects') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            प्रकल्प पाहा
                        </a>
                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            संपर्क साधा
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="primary-green-bg text-white pt-4 pb-2">
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