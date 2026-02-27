@extends('layouts.public')

@section('title', 'गॅलरी | गो विज्ञान संशोधन संस्था')

@push('styles')
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

    .tab-container {
            position: relative;
        }

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

    .masonry-grid {
            column-count: 3;
            column-gap: 0.5rem;
        }

    .masonry-grid {
                column-count: 2;
            }

    .masonry-grid {
                column-count: 3;
            }

    .masonry-grid {
                column-count: 4;
            }

    .masonry-grid {
                column-gap: 0.25rem !important;
            }

    .masonry-item {
            break-inside: avoid;
            margin-bottom: 1rem;
        }

    .masonry-item {
                margin-bottom: 0.25rem;
            }

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

    #lightbox-image {
                max-width: 95vw;
                max-height: 80vh;
            }

    body.modal-open {
            overflow: hidden;
        }

    .dropdown-btn-active {
            background-color: rgba(22, 163, 74, 0.08);
            color: var(--primary-green) !important;
            font-weight: 600;
        }

    .dropdown-btn-active:hover {
            background-color: rgba(22, 163, 74, 0.12);
            color: var(--primary-green) !important;
        }

    .dropdown-active {
            background-color: var(--primary-green);
            color: white !important;
        }

    .dropdown-active:hover {
            background-color: var(--primary-green);
            color: white !important;
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

    @media (max-width: 767px) {
            .masonry-item {
                margin-bottom: 0.25rem;
            }

            .masonry-grid {
                column-gap: 0.25rem !important;
            }

            .masonry-grid {
                column-count: 3 !important;
            }
        }

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

    @media (max-width: 639px) {
        .gallery-overlay {
            display: none;
        }
    }

@endpush

@section('content')
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
                            @foreach($categories as $category)
                            <button
                                class="tab-button px-3 md:px-8 py-2 mx-1 rounded-xl font-medium text-gray-700 text-sm md:text-base"
                                onclick="showTab('{{ $category->slug }}')">
                                {{ $category->name }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div class="masonry-grid gap-6" id="gallery-grid">
                    @foreach($images as $image)
                    <div class="masonry-item gallery-item bg-white rounded-lg overflow-hidden shadow-md border border-gray-100"
                        data-category="all {{ $image->category->slug }}">
                        <div class="relative">
                            <img src="{{ $image->image_url }}" alt="{{ $image->alt_text }}" class="w-full object-cover">
                            <div class="gallery-overlay absolute inset-0 flex items-end p-4">
                                <div class="text-white">
                                    <h3 class="text-lg font-bold marathi-heading mb-1">{{ $image->title }}</h3>
                                    <p class="text-sm opacity-90">{{ $image->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                        @forelse($videos as $video)
                        <div class="bg-gradient-to-br from-emerald-50/80 via-white to-green-50/60 backdrop-blur-sm rounded-2xl p-6 text-center hover:shadow-xl transition-all duration-300 border border-emerald-100/50 hover:border-emerald-200/70"
                            style="background-image: radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.03) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(234, 88, 12, 0.02) 0%, transparent 50%);">
                            <div class="mb-4">
                                <iframe width="100%" height="200" src="{{ $video->embed_url }}"
                                    title="{{ $video->title }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen class="rounded-xl"></iframe>
                            </div>
                            <h3 class="text-lg font-bold marathi-heading text-gray-800 mb-2">{{ $video->title }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $video->description }}</p>
                        </div>
                        @empty
                        <div class="col-span-3 text-center py-12">
                            <p class="text-gray-500 text-lg">व्हिडिओ सामग्री लवकरच उपलब्ध होणार आहे</p>
                        </div>
                        @endforelse
                    </div> <!-- Call to Action -->
                    <div
                        class="text-center mt-16 bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold marathi-heading mb-4">संस्थेच्या कार्यात सहभागी व्हा</h3>
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
@endsection

@push('scripts')
<script>
    // Mobile menu toggle


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
@endpush
