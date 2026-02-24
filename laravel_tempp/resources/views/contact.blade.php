<!DOCTYPE html>
<html lang="mr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>संपर्क | गो विज्ञान संशोधन संस्था</title>
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
                        class="text-gray-700 hover:text-green-600 smooth-transition font-medium text-sm uppercase tracking-wider px-3 py-2 rounded-md hover:bg-green-50 transition-all duration-200">Gallery</a>
                    <a href="{{ url('/contact') }}"
                        class="nav-active primary-green-bg text-white px-6 py-2 rounded-lg smooth-transition hover:opacity-90 hover:shadow-md font-medium text-sm uppercase tracking-wider transform hover:scale-105 transition-all duration-200">Contact</a>
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
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Projects</a>
                <a href="{{ url('/awards') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Awards</a>
                <a href="{{ url('/team') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Team</a>
                <a href="{{ url('/gallery') }}"
                    class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded smooth-transition">Gallery</a>
                <a href="{{ url('/contact') }}"
                    class="block py-2 primary-green-bg text-white text-center rounded-lg mt-3 smooth-transition font-medium">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Page Hero -->
        <section class="page-hero text-white py-20">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-white/90 text-md font-medium">संपर्क साधा</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6">संस्थेशी संपर्क करा</h1>
                    <p class="text-xl text-gray-100 max-w-2xl mx-auto">
                        गोसेवा, संशोधन, प्रकल्प किंवा कोणत्याही प्रश्नासाठी संस्थेशी  संपर्क साधा
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Information -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Address Card -->
                        <div
                            class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 border border-orange-200 hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-900 mb-4">मुख्यालय</h3>
                            <div class="space-y-2 text-gray-700">
                                <p class="font-medium">अ/३, विष्णुकृपा सोसायटी</p>
                                <p>नवा विष्णू चौक, बाजीराव रोड</p>
                                <p class="text-orange-600 font-semibold">पुणे - ४११००२, महाराष्ट्र</p>
                                <div class="pt-3 border-t border-orange-200 mt-3">
                                    <p class="text-sm text-gray-600">कार्यालयाचे नाव:</p>
                                    <p class="font-medium">श्री. अनिल व्यास</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 border border-green-200 hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-900 mb-4">संपर्क व्यक्ती</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="text-sm text-gray-600 mb-1">प्राथमिक संपर्क:</p>
                                    <p class="font-medium text-gray-900">श्री सतीश पारखी</p>
                                </div>
                                <a href="tel:+918888871310"
                                    class="inline-flex items-center bg-green-600 text-white px-5 py-3 rounded-xl font-medium hover:bg-green-700 transition-colors duration-200 shadow-md">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    +91 88888 71310
                                </a>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div
                            class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200 hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold marathi-heading text-gray-900 mb-4">ईमेल संपर्क</h3>
                            <div class="space-y-4">
                                <p class="text-gray-600">व्यावसायिक संपर्कासाठी</p>
                                <a href="mailto:govidnyan.ss@gmail.com"
                                    class="inline-flex items-center bg-blue-600 text-white px-5 py-3 rounded-xl font-medium hover:bg-blue-700 transition-colors duration-200 shadow-md">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    govidnyan.ss@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">संदेश पाठवा</h2>
                        <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                        <p class="text-gray-600 mt-4">
                            आपल्या प्रश्नांसाठी किंवा सूचनांसाठी खालील फॉर्म भरा
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-md border border-gray-100">
                        <form action="https://formspree.io/f/your-form-id" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">नाव *</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200"
                                        placeholder="आपले पूर्ण नाव">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">मोबाइल
                                        नंबर</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200"
                                        placeholder="आपला मोबाइल नंबर">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">ईमेल *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200"
                                    placeholder="आपला ईमेल पत्ता">
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">विषय *</label>
                                <select id="subject" name="subject" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200">
                                    <option value="">विषय निवडा</option>
                                    <option value="general">सामान्य चौकशी</option>
                                    <option value="volunteer">स्वयंसेवक बनणे</option>
                                    <option value="donation">देणगी</option>
                                    <option value="research">संशोधन सहकार्य</option>
                                    <option value="training">प्रशिक्षण कार्यक्रम</option>
                                    <option value="products">पंचगव्य उत्पादने</option>
                                    <option value="other">इतर</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">संदेश
                                    *</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors duration-200"
                                    placeholder="आपला संदेश येथे लिहा..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-green-600 text-white font-semibold py-4 px-8 rounded-xl hover:bg-green-700 transition-colors duration-200 shadow-md flex items-center justify-center space-x-2">
                                <span>संदेश पाठवा</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Links Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">त्वरित लिंक्स</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                    <a href="{{ url('/about') }}"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:bg-green-50 hover:border-green-200 border border-gray-200 transition-all duration-200">
                        <div class="w-12 h-12 bg-green-100 rounded-full mx-auto flex items-center justify-center mb-3">
                            <span class="text-2xl">ℹ️</span>
                        </div>
                        <p class="font-medium text-gray-700">संस्थेबद्दल</p>
                    </a>
                    <a href="{{ url('/projects') }}"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:bg-orange-50 hover:border-orange-200 border border-gray-200 transition-all duration-200">
                        <div class="w-12 h-12 bg-orange-100 rounded-full mx-auto flex items-center justify-center mb-3">
                            <span class="text-2xl">📋</span>
                        </div>
                        <p class="font-medium text-gray-700">प्रकल्प</p>
                    </a>
                    <a href="{{ url('/awards') }}"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:bg-blue-50 hover:border-blue-200 border border-gray-200 transition-all duration-200">
                        <div class="w-12 h-12 bg-blue-100 rounded-full mx-auto flex items-center justify-center mb-3">
                            <span class="text-2xl">🏆</span>
                        </div>
                        <p class="font-medium text-gray-700">पुरस्कार</p>
                    </a>
                    <a href="{{ url('/team') }}"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:bg-purple-50 hover:border-purple-200 border border-gray-200 transition-all duration-200">
                        <div class="w-12 h-12 bg-purple-100 rounded-full mx-auto flex items-center justify-center mb-3">
                            <span class="text-2xl">👥</span>
                        </div>
                        <p class="font-medium text-gray-700">टीम</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Working Hours -->
        <section class="py-16 bg-gradient-to-r from-green-600 to-green-700">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center text-white">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading mb-6">कार्यालयीन वेळ</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                            <h3 class="font-bold text-lg mb-3">सोमवार - शनिवार</h3>
                            <p class="text-green-100">सकाळी १०:०० ते संध्याकाळी ६:००</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                            <h3 class="font-bold text-lg mb-3">रविवार</h3>
                            <p class="text-green-100">बंद (विशेष कार्यक्रम वगळता)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेशी संपर्क साधा</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        प्रश्न किंवा सहकार्याबद्दल संस्थेशी संपर्क साधा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/gallery') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            गॅलरी पहा
                        </a>
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            मुख्यपृष्ठ
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
                                    class="text-green-200 hover:text-white transition-colors text-sm">संस्थेबद्दल</a>
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
                        <p class="text-green-100 text-sm">संस्थेशी जोडले रहा</p>
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
