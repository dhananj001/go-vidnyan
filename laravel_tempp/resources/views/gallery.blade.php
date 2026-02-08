<!DOCTYPE html>
<html lang="mr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>गॅलरी | गो विज्ञान संशोधन संस्था</title>
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

        /* Tab styles - Subtle Green Glassmorphism */
        .tab-button {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            background-color: rgba(34, 197, 94, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(34, 197, 94, 0.2);
            border-radius: 12px;
            z-index: 1;
            box-shadow: 0 4px 16px rgba(34, 197, 94, 0.08);
            font-weight: 500;
            letter-spacing: 0.025em;
            color: rgba(22, 163, 74, 0.8);
        }

        .tab-button.active {
            background-color: rgba(34, 197, 94, 0.18);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: rgba(22, 163, 74, 0.9);
            box-shadow: 0 6px 20px rgba(34, 197, 94, 0.12);
        }

        .tab-button:hover {
            background-color: rgba(34, 197, 94, 0.12);
            backdrop-filter: blur(13px);
            -webkit-backdrop-filter: blur(13px);
            border: 1px solid rgba(34, 197, 94, 0.25);
            color: rgba(22, 163, 74, 0.85);
            box-shadow: 0 5px 18px rgba(34, 197, 94, 0.1);
            transform: translateY(-1px);
        }

        /* Tab container */
        .tab-container {
            position: relative;
        }

        /* Custom scrollbar for tab container */
        .tab-container::-webkit-scrollbar {
            height: 2px;
        }

        .tab-container::-webkit-scrollbar-track {
            background: rgba(34, 197, 94, 0.1);
            border-radius: 2px;
        }

        .tab-container::-webkit-scrollbar-thumb {
            background: linear-gradient(90deg, var(--primary-green), var(--accent-orange));
            border-radius: 2px;
            transition: all 0.2s ease;
        }

        .tab-container::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(90deg, var(--accent-orange), var(--primary-green));
        }

        /* Gallery specific styles */
        .gallery-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .gallery-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        /* Masonry layout */
        .masonry-grid {
            column-count: 3;
            column-gap: 0.5rem;
        }

        @media (min-width: 640px) {
            .masonry-grid {
                column-count: 2;
            }
        }

        @media (min-width: 1024px) {
            .masonry-grid {
                column-count: 3;
            }
        }

        @media (min-width: 1280px) {
            .masonry-grid {
                column-count: 4;
            }
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1rem;
        }

        /* Reduce gap between images on mobile */
        @media (max-width: 767px) {
            .masonry-item {
                margin-bottom: 0.25rem;
            }

            .masonry-grid {
                column-gap: 0.25rem !important;
            }
        }

        /* Lightbox styles */
        #lightbox-modal {
            backdrop-filter: blur(2px);
        }

        #lightbox-image {
            transition: transform 0.3s ease;
            user-select: none;
            max-width: 90vw;
            max-height: 90vh;
        }

        #lightbox-image.zoomed {
            cursor: zoom-out;
            max-width: none;
            max-height: none;
        }

        #lightbox-image:not(.zoomed) {
            cursor: zoom-in;
        }

        /* Mobile adjustments for lightbox */
        @media (max-width: 768px) {
            #lightbox-image {
                max-width: 95vw;
                max-height: 80vh;
            }

            #lightbox-prev,
            #lightbox-next {
                display: none;
            }
        }

        /* Hide scrollbars when modal is open */
        body.modal-open {
            overflow: hidden;
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
    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100 rounded-b-2xl">
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
                            class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200 flex items-center space-x-1">
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
                        class="nav-active text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Gallery</a>
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
                <a href="{{ url('/') }}#about"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">About</a>
                <a href="{{ url('/') }}#projects"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Work</a>
                <a href="{{ url('/') }}#awards"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Awards</a>
                <a href="#gallery"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Gallery</a>
                <a href="{{ url('/query') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Query</a>
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
                        class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded smooth-transition">♻️ निर्माल्य
                        प्रकल्प</a>
                </div>
                <a href="{{ url('/') }}#contact"
                    class="block py-2 primary-green-bg text-white text-center rounded-lg mt-3 smooth-transition">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Gallery Hero Section -->
        <section class="bg-gradient-to-br from-green-50 via-white to-green-100 py-8 rounded-t-2xl">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center max-w-4xl mx-auto">
                    <div class="inline-flex items-center bg-green-50 rounded-full px-4 py-2 mb-6">
                        <span class="text-green-700 font-semibold text-md uppercase tracking-wider">गॅलरी</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold marathi-heading primary-green mb-6 leading-tight">
                        संस्थेच्या कार्याचे दृश्य
                    </h1>
                    <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full mb-6"></div>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        गो विज्ञान संशोधन संस्थेच्या विविध प्रकल्पांचे, कार्यक्रमांचे आणि उपक्रमांचे छायाचित्र आणि
                        व्हिडिओ संग्रह
                    </p>
                </div>
            </div>
        </section>

        <!-- Gallery Tabs and Content -->
        <section id="gallery" class="py-16 lg:py-12 bg-white">
            <div class="container mx-auto px-4 sm:px-6 max-w-7xl">
                <!-- Tab Navigation -->
                <div class="flex justify-center mb-12">
                    <div class="bg-gradient-to-br from-emerald-50/80 via-white to-green-50/60 p-2 md:p-3 rounded-2xl shadow-sm border border-emerald-100/50 tab-container overflow-x-auto md:overflow-visible"
                        style="background-image: radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.03) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(234, 88, 12, 0.02) 0%, transparent 50%);">
                        <div
                            class="flex flex-wrap md:flex-nowrap whitespace-nowrap md:whitespace-normal justify-center min-w-max md:min-w-0">
                            <button
                                class="tab-button active px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('all')">
                                सर्व छायाचित्रे
                            </button>
                            <button
                                class="tab-button px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('projects')">
                                प्रकल्प
                            </button>
                            <button
                                class="tab-button px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('cows')">
                                गायींचे संवर्धन
                            </button>
                            <button
                                class="tab-button px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('certificates')">
                                प्रमाणपत्रे
                            </button>
                            <button
                                class="tab-button px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('agriculture')">
                                कृषी संबंधित
                            </button>
                            <button
                                class="tab-button px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('nirmalya')">
                                निर्माल्य प्रकल्प
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div class="masonry-grid gap-6" id="gallery-grid">
                    <!-- All Images (shown by default) -->
                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/2011photo.png') }}" alt="2011 संस्थेचे कार्य" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">२०११</h3>
                                    <p class="text-sm opacity-90">संस्थेचे प्रारंभिक कार्य</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/2012photo.png') }}" alt="2012 संस्थेचे कार्य" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">२०१२</h3>
                                    <p class="text-sm opacity-90">विकासाचे वर्ष</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/2019photo001.png') }}" alt="2019 प्रकल्प कार्य" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">२०१९ प्रकल्प</h3>
                                    <p class="text-sm opacity-90">शेती विकास कार्य</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/2019photo002.png') }}" alt="2019 संस्था कार्यक्रम" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">२०१९ कार्यक्रम</h3>
                                    <p class="text-sm opacity-90">संस्था उपक्रम</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/2019photo003.png') }}" alt="2019 शेती प्रकल्प" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">२०१९ शेती</h3>
                                    <p class="text-sm opacity-90">कृषी विकास</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/cbof001.png') }}" alt="CBOF प्रकल्प" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">CBOF प्रकल्प</h3>
                                    <p class="text-sm opacity-90">गो-आधारित शेती</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/cbof002.png') }}" alt="CBOF प्रकल्प कार्य" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">CBOF प्रकल्प</h3>
                                    <p class="text-sm opacity-90">कार्य प्रक्रिया</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all cows">
                        <div class="relative">
                            <img src="{{ asset('images/indiancow.png') }}" alt="भारतीय गाय" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">भारतीय गाय</h3>
                                    <p class="text-sm opacity-90">देशी गायींचे संवर्धन</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all cows">
                        <div class="relative">
                            <img src="{{ asset('images/indiancow002.png') }}" alt="भारतीय गाय" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">भारतीय गाय</h3>
                                    <p class="text-sm opacity-90">गोपालन</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all cows">
                        <div class="relative">
                            <img src="{{ asset('images/Indiancowlist.png') }}" alt="गायींची यादी" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">गायींची यादी</h3>
                                    <p class="text-sm opacity-90">गोदान कार्यक्रम</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/research.png') }}" alt="संशोधन कार्य" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">संशोधन</h3>
                                    <p class="text-sm opacity-90">पंचगव्य संशोधन</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all certificates">
                        <div class="relative">
                            <img src="{{ asset('images/Legalcertificate001.png') }}" alt="कायदेशीर प्रमाणपत्र"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">प्रमाणपत्र</h3>
                                    <p class="text-sm opacity-90">कायदेशीर मान्यता</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all certificates">
                        <div class="relative">
                            <img src="{{ asset('images/LegalCertifacate002.png') }}" alt="कायदेशीर प्रमाणपत्र"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">प्रमाणपत्र</h3>
                                    <p class="text-sm opacity-90">संस्था नोंदणी</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190708_182613220.jpg') }}" alt="कृषी प्रकल्प कार्य"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">कृषी प्रकल्प</h3>
                                    <p class="text-sm opacity-90">गोमूत्र आणि गोमय वापर</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190708_182640906_BURST000_COVER_TOP.jpg') }}"
                                alt="नैसर्गिक शेती" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">नैसर्गिक शेती</h3>
                                    <p class="text-sm opacity-90">गो-आधारित कृषी पद्धती</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190708_182653508.jpg') }}" alt="शेती उपक्रम"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">शेती उपक्रम</h3>
                                    <p class="text-sm opacity-90">गो विज्ञानाचे कृषी अनुप्रयोग</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190708_183938709_HDR.jpg') }}" alt="कृषी विकास"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">कृषी विकास</h3>
                                    <p class="text-sm opacity-90">नवीन कृषी तंत्रज्ञान</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190708_192025711.jpg') }}" alt="गोमूत्र खत"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">गोमूत्र खत</h3>
                                    <p class="text-sm opacity-90">गोमूत्र खत विषयी चर्चा</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190731_081702943.jpg') }}" alt="शेती प्रयोग"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">शेती प्रयोग</h3>
                                    <p class="text-sm opacity-90">गो विज्ञान प्रयोगशाळा</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all agriculture">
                        <div class="relative">
                            <img src="{{ asset('images/agriculturerelated/IMG_20190731_081823616_HDR.jpg') }}" alt="कृषी संशोधन"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">कृषी संशोधन</h3>
                                    <p class="text-sm opacity-90">विज्ञान आधारित कृषी</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all nirmalya">
                        <div class="relative">
                            <img src="{{ asset('images/nirmalyprojectrelated/IMG_20180912_111128196.jpg') }}"
                                alt="निर्माल्य प्रकल्प कार्य" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">निर्माल्य प्रकल्प</h3>
                                    <p class="text-sm opacity-90">समाजात जागरूकता कटआउट चिकटवणे</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all nirmalya">
                        <div class="relative">
                            <img src="{{ asset('images/nirmalyprojectrelated/IMG_20180912_112122499.jpg') }}" alt="निर्माल्य संवर्धन"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">निर्माल्य संवर्धन</h3>
                                    <p class="text-sm opacity-90">समाज भेट आणि जागरूकता प्रसार</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all nirmalya">
                        <div class="relative">
                            <img src="{{ asset('images/nirmalyprojectrelated/IMG_20180912_112740343.jpg') }}" alt="गणेशोत्सव निर्माल्य"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">गणेशोत्सव निर्माल्य</h3>
                                    <p class="text-sm opacity-90">कटआउटद्वारे जनजागृती</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all nirmalya">
                        <div class="relative">
                            <img src="{{ asset('images/nirmalyprojectrelated/IMG_20180912_113354474.jpg') }}" alt="निर्माल्य पुनर्वापर"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">निर्माल्य पुनर्वापर</h3>
                                    <p class="text-sm opacity-90">समाजात जागरूकता अभियान</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all nirmalya">
                        <div class="relative">
                            <img src="{{ asset('images/nirmalyprojectrelated/IMG_20180912_113406929.jpg') }}" alt="पर्यावरण प्रकल्प"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">पर्यावरण प्रकल्प</h3>
                                    <p class="text-sm opacity-90">निर्माल्य जागरूकता कटआउट</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all certificates">
                        <div class="relative">
                            <img src="{{ asset('images/jan 2026/Award.jpeg') }}" alt="  पुरस्कार" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1"> पुरस्कार</h3>
                                    <p class="text-sm opacity-90">पुरस्कार वितरण कार्यक्रम</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all nirmalya">
                        <div class="relative">
                            <img src="{{ asset('images/jan 2026/nirmalyatocompost.jpeg') }}" alt="निर्माल्य ते कंपोस्ट"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">निर्माल्य ते कंपोस्ट</h3>
                                    <p class="text-sm opacity-90">निर्माल्य प्रकल्प कार्य</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/jan 2026/peopleactivity.jpeg') }}" alt="सामाजिक उपक्रम"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">सामाजिक उपक्रम</h3>
                                    <p class="text-sm opacity-90">जनसहभाग आणि जागरूकता</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/jan 2026/pricedistribution002.jpeg') }}" alt="पुरस्कार वितरण"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">पुरस्कार वितरण</h3>
                                    <p class="text-sm opacity-90"> प्रकल्प वितरण</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all projects">
                        <div class="relative">
                            <img src="{{ asset('images/jan 2026/pricedistributionceremony.jpeg') }}" alt="पुरस्कार वितरण समारंभ"
                                class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">पुरस्कार वितरण समारंभ</h3>
                                    <p class="text-sm opacity-90">पुरस्कार वितरण</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lightbox Modal -->
                <div id="lightbox-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden">
                    <div id="lightbox-container" class="relative w-full h-full flex items-center justify-center">
                        <!-- Close Button -->
                        <button id="lightbox-close"
                            class="absolute top-4 right-4 z-60 bg-black/50 hover:bg-black/70 text-white hover:text-gray-300 transition-colors rounded-full p-2 shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <!-- Previous Button -->
                        <button id="lightbox-prev"
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 z-60 text-white hover:text-gray-300 transition-colors opacity-75 hover:opacity-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                        <!-- Next Button -->
                        <button id="lightbox-next"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 z-60 text-white hover:text-gray-300 transition-colors opacity-75 hover:opacity-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>

                        <!-- Image Container -->
                        <div class="relative max-w-4xl max-h-full p-4">
                            <img id="lightbox-image" src="" alt=""
                                class="max-w-full max-h-full object-contain cursor-zoom-in"
                                style="transform-origin: center;">
                        </div>

                        <!-- Image Info -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-center">
                            <div id="lightbox-caption" class="bg-black bg-opacity-50 px-4 py-2 rounded-lg text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Videos Section -->
                <div class="mt-16">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">व्हिडिओ संग्रह
                        </h2>
                        <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full"></div>
                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">व्हिडिओ सामग्री लवकरच उपलब्ध होणार आहे</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Video Placeholder 1 -->
                        <div class="bg-gradient-to-br from-emerald-50/80 via-white to-green-50/60 backdrop-blur-sm rounded-2xl p-6 text-center hover:shadow-xl transition-all duration-300 border border-emerald-100/50 hover:border-emerald-200/70"
                            style="background-image: radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.03) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(234, 88, 12, 0.02) 0%, transparent 50%);">
                            <div class="mb-4">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/PTvFbuL2yWw"
                                    title="पंचगव्य चिकित्सा प्रक्रिया" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen class="rounded-xl"></iframe>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">पंचगव्य चिकित्सा प्रक्रिया
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">पंचगव्य चिकित्सेच्या विविध पद्धती आणि
                                त्याचे आरोग्य फायदे</p>
                        </div>

                        <!-- Video Placeholder 2 -->
                        <div class="bg-gradient-to-br from-emerald-50/80 via-white to-green-50/60 backdrop-blur-sm rounded-2xl p-6 text-center hover:shadow-xl transition-all duration-300 border border-emerald-100/50 hover:border-emerald-200/70"
                            style="background-image: radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.03) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(234, 88, 12, 0.02) 0%, transparent 50%);">
                            <div class="mb-4">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/xWFvlfrrmro"
                                    title="गो-आधारित शेती तंत्र" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen class="rounded-xl"></iframe>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">गो-आधारित शेती तंत्र</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">गोमूत्र आणि गोमय वापरून नैसर्गिक शेती
                                करण्याचे मार्ग</p>
                        </div>

                        <!-- Video Placeholder 3 -->
                        <div class="bg-gradient-to-br from-emerald-50/80 via-white to-green-50/60 backdrop-blur-sm rounded-2xl p-6 text-center hover:shadow-xl transition-all duration-300 border border-emerald-100/50 hover:border-emerald-200/70"
                            style="background-image: radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.03) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(234, 88, 12, 0.02) 0%, transparent 50%);">
                            <div class="mb-4">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/3r8ul0PNWy4"
                                    title="संस्थेचे कार्य परिचय" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen class="rounded-xl"></iframe>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">संस्थेचे कार्य परिचय
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">गो विज्ञान संशोधन संस्थेच्या कार्याचे
                                संपूर्ण परिचय</p>
                        </div>
                    </div> <!-- Call to Action -->
                    <div
                        class="text-center mt-16 bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold marathi-heading mb-4">आमच्या कार्यात सहभागी व्हा</h3>
                        <p class="text-green-100 mb-6">गो विज्ञान संशोधन संस्थेच्या कार्याला पाठिंबा द्या आणि गोसेवेत
                            सहभागी व्हा</p>
                        <a href="{{ url('/') }}#contact"
                            class="inline-flex items-center bg-white text-green-700 font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-gray-50 shadow-lg">
                            <span>संपर्क करा</span>
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
        </section>


    </main>

    <!-- Footer -->
    <footer id="contact" class="min-h-[25vh] primary-green-bg text-white pt-4 pb-2">
        <div class="container mx-auto px-4 sm:px-6 w-full">
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

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.getElementById('mobile-menu-button');

            if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Gallery tab functionality
        function showTab(category) {
            // Update tab buttons
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');

            // Filter gallery items
            const items = document.querySelectorAll('.masonry-item');
            items.forEach(item => {
                if (category === 'all' || item.dataset.category.includes(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Lightbox functionality
        let currentImageIndex = 0;
        let galleryImages = [];
        let isZoomed = false;
        let scale = 1;
        let initialDistance = 0;
        let lastScale = 1;

        // Touch handling for mobile swipe
        let touchStartX = 0;
        let touchStartY = 0;
        let touchEndX = 0;
        let touchEndY = 0;
        const minSwipeDistance = 50;

        // Handle keyboard navigation
        function handleKeydown(event) {
            if (event.key === 'Escape') {
                closeLightbox();
            } else if (event.key === 'ArrowLeft') {
                showPrev();
            } else if (event.key === 'ArrowRight') {
                showNext();
            }
        }

        // Initialize lightbox
        function initLightbox() {
            galleryImages = Array.from(document.querySelectorAll('.gallery-item'));

            // Add click event to all gallery items
            galleryImages.forEach((item, index) => {
                item.style.cursor = 'pointer';
                item.addEventListener('click', () => openLightbox(index));
            });
        }

        // Open lightbox
        function openLightbox(index) {
            currentImageIndex = index;
            const modal = document.getElementById('lightbox-modal');
            const lightboxImage = document.getElementById('lightbox-image');
            const caption = document.getElementById('lightbox-caption');

            const currentItem = galleryImages[currentImageIndex];
            const currentImg = currentItem.querySelector('img');
            lightboxImage.src = currentImg.src;
            lightboxImage.alt = currentImg.alt;

            // Get caption from overlay
            const overlay = currentItem.querySelector('.gallery-overlay');
            if (overlay) {
                const title = overlay.querySelector('h3')?.textContent || '';
                const desc = overlay.querySelector('p')?.textContent || '';
                caption.textContent = title + (title && desc ? ' - ' : '') + desc;
            }

            modal.classList.remove('hidden');
            document.body.classList.add('modal-open');

            // Reset zoom
            resetZoom();

            // Add keyboard event listeners
            document.addEventListener('keydown', handleKeydown);

            // Add touch event listeners for mobile swipe
            const container = document.getElementById('lightbox-container');
            container.addEventListener('touchstart', handleTouchStart, { passive: true });
            container.addEventListener('touchend', handleTouchEnd, { passive: true });
        }

        // Close lightbox
        function closeLightbox() {
            const modal = document.getElementById('lightbox-modal');
            modal.classList.add('hidden');
            document.body.classList.remove('modal-open');
            document.removeEventListener('keydown', handleKeydown);

            // Remove touch event listeners
            const container = document.getElementById('lightbox-container');
            container.removeEventListener('touchstart', handleTouchStart);
            container.removeEventListener('touchend', handleTouchEnd);

            resetZoom();
        }

        // Reset zoom state
        function resetZoom() {
            const lightboxImage = document.getElementById('lightbox-image');
            isZoomed = false;
            scale = 1;
            lightboxImage.style.transform = 'scale(1)';
            lightboxImage.classList.remove('zoomed');
            lastScale = 1;
        }

        // Show next image
        function showNext() {
            currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
            updateLightboxImage();
        }

        // Show previous image
        function showPrev() {
            currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
            updateLightboxImage();
        }

        // Update lightbox image
        function updateLightboxImage() {
            const lightboxImage = document.getElementById('lightbox-image');
            const caption = document.getElementById('lightbox-caption');

            const currentItem = galleryImages[currentImageIndex];
            const currentImg = currentItem.querySelector('img');
            lightboxImage.src = currentImg.src;
            lightboxImage.alt = currentImg.alt;

            // Get caption from overlay
            const overlay = currentItem.querySelector('.gallery-overlay');
            if (overlay) {
                const title = overlay.querySelector('h3')?.textContent || '';
                const desc = overlay.querySelector('p')?.textContent || '';
                caption.textContent = title + (title && desc ? ' - ' : '') + desc;
            }

            resetZoom();
        }

        // Handle zoom
        function handleZoom(event) {
            const lightboxImage = document.getElementById('lightbox-image');

            if (event.type === 'click') {
                // Toggle zoom on click
                if (!isZoomed) {
                    scale = 2;
                    isZoomed = true;
                    lightboxImage.classList.add('zoomed');
                } else {
                    scale = 1;
                    isZoomed = false;
                    lightboxImage.classList.remove('zoomed');
                }
            } else if (event.type === 'wheel') {
                // Zoom with mouse wheel
                event.preventDefault();
                const delta = event.deltaY > 0 ? -0.1 : 0.1;
                scale = Math.max(0.5, Math.min(3, scale + delta));
                isZoomed = scale > 1;
                lightboxImage.classList.toggle('zoomed', isZoomed);
            }

            lightboxImage.style.transform = `scale(${scale})`;
        }

        // Handle touch start
        function handleTouchStart(event) {
            touchStartX = event.touches[0].clientX;
            touchStartY = event.touches[0].clientY;
        }

        // Handle touch end
        function handleTouchEnd(event) {
            touchEndX = event.changedTouches[0].clientX;
            touchEndY = event.changedTouches[0].clientY;
            handleSwipe();
        }

        // Handle swipe gesture
        function handleSwipe() {
            const deltaX = touchEndX - touchStartX;
            const deltaY = touchEndY - touchStartY;
            const absDeltaX = Math.abs(deltaX);
            const absDeltaY = Math.abs(deltaY);

            // Only handle horizontal swipes that are longer than vertical movement
            if (absDeltaX > absDeltaY && absDeltaX > minSwipeDistance) {
                if (deltaX > 0) {
                    // Swipe right - previous image
                    showPrev();
                } else {
                    // Swipe left - next image
                    showNext();
                }
            }
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', () => {
            initLightbox();
        });

        document.getElementById('lightbox-close').addEventListener('click', closeLightbox);
        document.getElementById('lightbox-prev').addEventListener('click', showPrev);
        document.getElementById('lightbox-next').addEventListener('click', showNext);

        // Click outside to close
        document.getElementById('lightbox-container').addEventListener('click', (e) => {
            if (e.target.id === 'lightbox-container') {
                closeLightbox();
            }
        });

        // Image zoom functionality
        document.getElementById('lightbox-image').addEventListener('click', handleZoom);
        document.getElementById('lightbox-image').addEventListener('wheel', handleZoom);
    </script>

</body>

</html>