@extends('layouts.public')

@section('title', 'प्रश्न पाठवा | गो विज्ञान संशोधन संस्था')

@push('styles')
    <style>
        .card-minimal {
            border: 1px solid #e5e7eb;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .card-minimal:hover {
            border-color: var(--primary-green);
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.1);
        }
    </style>
@endpush

@section('content')
    <!-- Main Content -->
    <main class="min-h-screen bg-gradient-to-br from-green-50 to-white">
        <!-- Hero Section -->
        <section class="relative py-20 px-4 sm:px-6">
            <div class="container mx-auto max-w-4xl">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-green-100 text-green-800 rounded-full px-4 py-1.5 mb-4">
                        <span class="font-semibold text-sm uppercase tracking-wider">प्रश्न पाठवा</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold marathi-heading primary-green mb-4 leading-tight">
                        आपली प्रश्न संस्थेकडे पाठवा
                    </h1>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        गो विज्ञान संशोधन संस्थेशी संबंधित कोणतीही शंका किंवा माहिती मिळविण्यासाठी संस्थेशी संपर्क साधा.
                        संस्था आपल्या सर्व प्रश्नांची उत्तरे देण्यासाठी सदैव तयार आहोत.
                    </p>
                    <div class="w-16 h-0.5 bg-orange-400 mx-auto rounded-full mt-6"></div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal">
                    <form id="queryForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    नाव <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" required
                                    class="form-input w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500"
                                    placeholder="आपले पूर्ण नाव">
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    ईमेल <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="form-input w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500"
                                    placeholder="your.email@example.com">
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                दूरध्वनी क्रमांक
                            </label>
                            <input type="tel" id="phone" name="phone"
                                class="form-input w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500"
                                placeholder="+91 XXXXX XXXXX">
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                विषय <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="subject" name="subject" required
                                class="form-input w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500"
                                placeholder="आपल्या प्रश्नचा विषय">
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                प्रश्न/संदेश <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                class="form-textarea w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500"
                                placeholder="आपली प्रश्न किंवा संदेश येथे लिहा..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-4">
                            <button type="submit"
                                class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-lg shadow-lg hover:from-green-700 hover:to-green-800 smooth-transition transform hover:scale-105">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                पाठवा
                            </button>
                        </div>
                    </form>

                    <!-- Success Message (Hidden by default) -->
                    <div id="successMessage" class="hidden mt-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-green-800">प्रश्न यशस्वीरित्या पाठवली!</h3>
                                <p class="text-sm text-green-700 mt-1">संस्था लवकरच आपल्याशी संपर्क करेल.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="mt-12 text-center">
                    <h3 class="text-2xl font-bold marathi-heading primary-green mb-6">किंवा थेट संपर्क साधा</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Phone -->
                        <div class="bg-white rounded-lg p-6 shadow-md card-minimal">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-xl mx-auto flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">दूरध्वनी</h4>
                            <a href="tel:+919860150440" class="text-green-600 hover:text-green-700 font-medium">
                                +91 9860150440
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="bg-white rounded-lg p-6 shadow-md card-minimal">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl mx-auto flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">ईमेल</h4>
                            <a href="mailto:govidnyan.ss@gmail.com"
                                class="text-blue-600 hover:text-blue-700 font-medium">
                                govidnyan.ss@gmail.com
                            </a>
                        </div>

                        <!-- Address -->
                        <div class="bg-white rounded-lg p-6 shadow-md card-minimal">
                            <div
                                class="w-12 h-12 bg-orange-100 rounded-xl mx-auto flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">पत्ता</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                अ/३, विष्णुकृपा सोसायटी<br>
                                नवा विष्णू चौक, बाजीराव रोड<br>
                                पुणे - ४११००२, महाराष्ट्र
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
            <h2 class="text-2xl font-bold marathi-heading mb-4">संस्थेला प्रश्न पाठवा!</h2>
            <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                तुमच्या प्रश्नांची उत्तरे मिळवा आणि संस्थेच्या कार्यात सहभागी व्हा. आजच संपर्क साधा.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/contact') }}"
                    class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    संपर्क साधा
                </a>
                <a href="{{ url('/') }}"
                    class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                    मुख्य पृष्ठ
                </a>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <!-- // EmailJS Integration -->
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script>
        (function () {
            emailjs.init("Z7iP__VVKGg31MfC5");
        })();
    </script>
    <script>
        // Form submission
        document.getElementById('queryForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Send form data using EmailJS
            emailjs.sendForm('service_qumsgsg', 'template_vu0u4yo', this)
                .then(() => {
                    // Show success message
                    const successMessage = document.getElementById('successMessage');
                    successMessage.classList.remove('hidden');

                    this.reset(); // reset form

                    setTimeout(() => {
                        successMessage.classList.add('hidden');
                    }, 5000);
                }, (error) => {
                    console.error('EmailJS error:', error);
                    alert('⚠️ Something went wrong. Please try again later.');
                });
        });
    </script>
@endpush
