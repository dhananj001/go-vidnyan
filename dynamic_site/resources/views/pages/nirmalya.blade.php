@extends('layouts.public')

@section('title', 'निर्माल्य प्रकल्प | गो विज्ञान संशोधन संस्था')

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
                        संस्थेच्या इतर प्रकल्पांबद्दल माहिती घ्या आणि संपर्क साधा.
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

@endsection
