@extends('layouts.public')

@section('title', 'साप्ताहिक व्याख्याने | गो विज्ञान संशोधन संस्था')

@push('styles')
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
    <!-- Main Content -->
    <main class="min-h-screen bg-gradient-to-br from-green-50 to-white">
        <!-- Hero Section -->
        <section class="relative py-16 px-4 sm:px-6">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center bg-green-100 text-green-800 rounded-full px-4 py-1.5 mb-4">
                        <span class="font-semibold text-sm uppercase tracking-wider">साप्ताहिक व्याख्याने</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold marathi-heading primary-green mb-4 leading-tight">
                        देशी गायींवरील साप्ताहिक व्याख्याने व परिसंवाद
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        भारतीय देशी गायींच्या महत्त्वावर, पंचगव्याचे फायदे, गो-आधारित शेती आणि आरोग्य यावर
                        नियमित ज्ञानप्रसार कार्यक्रम
                    </p>
                    <div class="w-16 h-0.5 bg-orange-400 mx-auto rounded-full mt-6"></div>
                </div>

                <!-- Program Overview -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-2xl font-bold marathi-heading primary-green mb-4">कार्यक्रमाची माहिती</h2>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                गो विज्ञान संशोधन संस्था दर आठवड्याला देशी गायी व पंचगव्य संबंधित विविध विषयांवर
                                व्याख्याने व परिसंवाद आयोजित करते. या कार्यक्रमात तज्ञ वक्ते, शेतकरी, वैद्य आणि
                                संशोधक आपले अनुभव व ज्ञान श्रोत्यांसोबत शेअर करतात.
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">दर मंगळवारी रात्री ८ ते ९ वाजता</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">आभासी पध्दतीतून</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700">सर्वांसाठी विनामूल्य प्रवेश</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-green-100 to-orange-50 rounded-xl p-6">
                            <div class="text-center">
                                <div
                                    class="w-20 h-20 bg-white rounded-full mx-auto flex items-center justify-center mb-4 shadow-md">
                                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold marathi-heading text-gray-800 mb-2">पुढील व्याख्यान</h3>
                                <p class="text-3xl font-bold text-green-600 mb-1">मंगळवार</p>
                                <p class="text-gray-600">रात्री ८:०० ते ९:०० वाजता</p>
                                <a href="{{ url('/query') }}"
                                    class="inline-block mt-4 px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 smooth-transition font-medium">
                                    नोंदणी करा
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topics Covered -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">व्याख्यानांचे विषय
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Topic 1 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal schedule-card">
                            <div class="pl-4">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">देशी गायींचे महत्त्व
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    भारतीय देशी गायींच्या विविध जाती, त्यांचे वैशिष्ट्ये आणि संवर्धनाची गरज
                                </p>
                            </div>
                        </div>

                        <!-- Topic 2 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal schedule-card">
                            <div class="pl-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">पंचगव्य चिकित्सा</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    पंचगव्य आधारित आयुर्वेदिक उपचार पद्धती आणि आरोग्य लाभ
                                </p>
                            </div>
                        </div>

                        <!-- Topic 3 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal schedule-card">
                            <div class="pl-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">गो-आधारित शेती</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    सेंद्रिय शेतीमध्ये गोमूत्र, शेणखत आणि जीवामृताचा वापर
                                </p>
                            </div>
                        </div>

                        <!-- Topic 4 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal schedule-card">
                            <div class="pl-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">वैदिक गोपालन</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    प्राचीन भारतीय ग्रंथातील गोपालन पद्धती आणि त्यांचे आधुनिक संदर्भ
                                </p>
                            </div>
                        </div>

                        <!-- Topic 5 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal schedule-card">
                            <div class="pl-4">
                                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">A2 दूध आणि आरोग्य</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    देशी गायींच्या A2 दुधाचे आरोग्यदायी फायदे आणि वैज्ञानिक संशोधन
                                </p>
                            </div>
                        </div>

                        <!-- Topic 6 -->
                        <div class="bg-white rounded-xl p-6 shadow-md card-minimal schedule-card">
                            <div class="pl-4">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">पर्यावरण संरक्षण</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    गोपालनाचा पर्यावरणावर सकारात्मक परिणाम आणि शाश्वत विकास
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Past Lectures Highlights -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 card-minimal mb-12">
                    <h2 class="text-3xl font-bold marathi-heading primary-green mb-8 text-center">मागील व्याख्यानांचे
                        ठळक
                        मुद्दे</h2>
                    <div class="space-y-6">
                        <!-- Lecture 1 -->
                        <div
                            class="flex flex-col md:flex-row items-start md:items-center space-y-4 md:space-y-0 md:space-x-6 p-4 bg-gray-50 rounded-xl">
                            <div
                                class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-lg">१</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-1">देशी गायींच्या जातींचे
                                    संवर्धन</h3>
                                <p class="text-gray-600 text-sm">वक्ते: डॉ. श्रीधर केतकर | श्रोते: १५०+</p>
                            </div>
                            <div class="text-green-600 font-semibold text-sm">डिसेंबर २०२४</div>
                        </div>

                        <!-- Lecture 2 -->
                        <div
                            class="flex flex-col md:flex-row items-start md:items-center space-y-4 md:space-y-0 md:space-x-6 p-4 bg-gray-50 rounded-xl">
                            <div
                                class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-lg">२</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-1">पंचगव्य चिकित्सेचे
                                    वैज्ञानिक आधार</h3>
                                <p class="text-gray-600 text-sm">वक्ते: वैद्य अनिल पाटील | श्रोते: १२०+</p>
                            </div>
                            <div class="text-orange-600 font-semibold text-sm">नोव्हेंबर २०२४</div>
                        </div>

                        <!-- Lecture 3 -->
                        <div
                            class="flex flex-col md:flex-row items-start md:items-center space-y-4 md:space-y-0 md:space-x-6 p-4 bg-gray-50 rounded-xl">
                            <div
                                class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-lg">३</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-1">जीवामृत शेतीचे फायदे
                                </h3>
                                <p class="text-gray-600 text-sm">वक्ते: श्री. सुभाष पाळेकर | श्रोते: २००+</p>
                            </div>
                            <div class="text-blue-600 font-semibold text-sm">ऑक्टोबर २०२४</div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl font-bold marathi-heading mb-4">व्याख्यानात सहभागी व्हा!</h2>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        संस्थेच्या साप्ताहिक व्याख्यानात सहभागी होण्यासाठी आजच नोंदणी करा. ज्ञान मिळवा, प्रश्न विचारा
                        आणि देशी गायींच्या संवर्धनात योगदान द्या.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url('/query') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            नोंदणी करा
                        </a>
                        <a href="{{ url('/') }}#contact"
                            class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                            अधिक माहिती
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
