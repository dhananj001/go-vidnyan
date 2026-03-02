@extends('layouts.public')

@section('title', 'संपर्क | गो विज्ञान संशोधन संस्था')

@section('content')
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
                                <a href="tel:+919860150440"
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
@endsection
