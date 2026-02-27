@extends('layouts.public')

@section('title', 'संस्थेची टीम | गो विज्ञान संशोधन संस्था')

@section('content')
    <!-- Page Hero -->
        <section class="page-hero text-white py-20">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="text-white/90 text-md font-medium">विश्वस्त व कार्यकारी टीम</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold marathi-heading mb-6">संस्थेची टीम</h1>
                    <p class="text-xl text-gray-100 max-w-2xl mx-auto">
                        अनुभवी विश्वस्त आणि कुशल कार्यकारी टीम - एकत्रित प्रयत्नांनी गोसेवा आणि संशोधनाचे कार्य
                    </p>
                </div>
            </div>
        </section>

        <!-- Trustees Section -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-green-50 rounded-full px-4 py-2 mb-4">
                        <span class="text-green-700 font-semibold text-sm uppercase tracking-wider">मार्गदर्शक
                            मंडळ</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">संस्थेचे विश्वस्त</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                        संस्थेचे मार्गदर्शन आणि निर्णयक्षमता यांचे नेतृत्व करणारे अनुभवी विश्वस्त
                    </p>
                </div>

                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Trustee 1 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. राजेंद्र लुंकड</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>

                        <!-- Trustee 2 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. बापूराव कुलकर्णी</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>

                        <!-- Trustee 3 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. अनिल व्यास</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>

                        <!-- Trustee 4 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. चिंतामणी चितळे</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>

                        <!-- Trustee 5 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. प्रमोद कुलकर्णी</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>

                        <!-- Trustee 6 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. हेमंत दांडेगावकर</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>

                        <!-- Trustee 7 -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300 text-center sm:col-span-2 lg:col-span-1 lg:col-start-2">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-900 mb-1">श्री. सतीश पारखी</h3>
                            <p class="text-green-600 font-medium text-sm">विश्वस्त</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Executive Team Section -->
        <section class="py-16 lg:py-20 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-orange-50 rounded-full px-4 py-2 mb-4">
                        <span class="text-orange-700 font-semibold text-sm uppercase tracking-wider">कार्यकारी
                            मंडळ</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">कार्यकारी टीम</h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto rounded-full"></div>
                </div>

                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Task Force Team -->
                        <div class="bg-white rounded-xl p-8 shadow-md border border-gray-100">
                            <div class="flex items-center space-x-4 mb-6">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold marathi-heading text-gray-900">टास्क फोर्स टीम</h3>
                                    <p class="text-orange-600 font-medium">100 स्वयंसेवक</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div
                                    class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-lg p-4 border-l-4 border-orange-500">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-10 h-10 bg-orange-200 rounded-full flex items-center justify-center flex-shrink-0">
                                            <span class="text-orange-700 font-bold">प्र</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900">डॉ. प्रसाद खंडागळे</h4>
                                            <p class="text-gray-600 text-sm mt-1">देशी गाय व देशी गायीच्या पंचगव्य
                                                आधारित संशोधन</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                            <span class="text-gray-700 font-medium">श्री. कल्याण कुलकर्णी</span>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                            <span class="text-gray-700 font-medium">श्री. प्रशांत करमरकर</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Research Team -->
                        <div class="bg-white rounded-xl p-8 shadow-md border border-gray-100">
                            <div class="flex items-center space-x-4 mb-6">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold marathi-heading text-gray-900">संशोधक टीम</h3>
                                    <p class="text-blue-600 font-medium">8 डॉक्टर + 10 विद्यार्थी</p>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4 border-l-4 border-blue-500 mb-4">
                                <p class="text-blue-700 font-medium">नेतृत्व: डॉ. प्रसाद खंडागळे</p>
                            </div>

                            <div class="space-y-3">
                                <div
                                    class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg border border-gray-200">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">8</span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">डॉक्टर</p>
                                        <p class="text-gray-500 text-sm">तज्ञ संशोधक</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg border border-gray-200">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">10</span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">विद्यार्थी</p>
                                        <p class="text-gray-500 text-sm">संशोधन सहाय्यक</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Stats -->
        <section class="py-16 bg-gradient-to-r from-green-600 to-green-700">
            <div class="container mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading text-white mb-4">टीम आकडेवारी</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <p class="text-4xl font-bold text-amber-200 mb-2">7</p>
                        <p class="text-green-100 font-medium marathi-heading">विश्वस्त</p>
                    </div>
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <p class="text-4xl font-bold text-amber-200 mb-2">100+</p>
                        <p class="text-green-100 font-medium marathi-heading">स्वयंसेवक</p>
                    </div>
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <p class="text-4xl font-bold text-amber-200 mb-2">8</p>
                        <p class="text-green-100 font-medium marathi-heading">डॉक्टर</p>
                    </div>
                    <div class="text-center bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                        <p class="text-4xl font-bold text-amber-200 mb-2">10</p>
                        <p class="text-green-100 font-medium marathi-heading">संशोधन विद्यार्थी</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Join Team CTA -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 max-w-4xl">
                <div
                    class="bg-gradient-to-br from-green-50 to-orange-50 rounded-2xl p-8 lg:p-12 border border-green-100 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold marathi-heading primary-green mb-4">
                        संस्थेच्या टीममध्ये सहभागी व्हा
                    </h2>
                    <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
                        गोसेवा आणि राष्ट्ररक्षणाच्या या महत्वाच्या कार्यात स्वयंसेवक म्हणून सहभागी होण्यासाठी संस्थेशी 
                        संपर्क साधा
                    </p>
                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center justify-center bg-green-600 text-white font-semibold py-3 px-8 rounded-lg smooth-transition hover:bg-green-700 shadow-lg">
                        संपर्क करा
                    </a>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <!-- <section class="py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेची टीम भेटा</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        गो विज्ञान संशोधन संस्थेच्या कार्यकर्ते आणि संशोधकांबद्दल अधिक माहिती मिळवा.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="awards.html"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            पुरस्कार पहा
                        </a>
                        <a href="contact.html"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            संपर्क करा
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
@endsection
