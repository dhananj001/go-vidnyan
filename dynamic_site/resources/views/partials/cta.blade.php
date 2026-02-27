{{-- Reusable Call-to-Action Section --}}
<section class="py-16 px-4 sm:px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
            <h2 class="text-2xl font-bold marathi-heading mb-4">{{ $heading ?? 'संस्थेच्या मिशनमध्ये सामील व्हा' }}</h2>
            <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                {{ $description ?? 'गोसेवा आणि पंचगव्य आधारित जीवनशैलीच्या प्रसारात संस्थेसोबत हात मिळवा.' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url($primaryLink ?? '/contact') }}"
                    class="inline-flex items-center justify-center px-8 py-3 bg-white text-green-700 font-semibold rounded-lg hover:bg-gray-100 smooth-transition">
                    {{ $primaryText ?? 'संपर्क करा' }}
                </a>
                @if(isset($secondaryLink))
                <a href="{{ url($secondaryLink) }}"
                    class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-green-700 smooth-transition">
                    {{ $secondaryText ?? 'अधिक जाणून घ्या' }}
                </a>
                @endif
            </div>
        </div>
    </div>
</section>
