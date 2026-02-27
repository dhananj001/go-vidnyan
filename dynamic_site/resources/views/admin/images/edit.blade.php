@extends('layouts.admin')

@section('title', 'छायाचित्र संपादित करा')
@section('page-title', 'छायाचित्र संपादित करा')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('admin.images.index') }}" class="text-sm text-gray-500 hover:text-green-600 inline-flex items-center transition-colors">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            छायाचित्रे व्यवस्थापन
        </a>
    </div>

    <form action="{{ route('admin.images.update', $image) }}" method="POST" enctype="multipart/form-data" id="editForm">
        @csrf
        @method('PUT')

        <!-- Image Area — shows current, allows replacement -->
        <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-green-400 transition-colors mb-6 overflow-hidden"
             id="dropZone"
             :class="{ 'border-dashed': !hasNewImage, 'border-solid border-green-200': hasNewImage }">
            <!-- Current / Preview image -->
            <div id="imageDisplay" class="relative">
                <img id="displayImg" src="{{ $image->image_url }}" alt="{{ $image->alt_text }}" class="w-full max-h-80 object-contain bg-gray-50">
                <!-- Overlay to change image -->
                <div class="absolute inset-0 bg-black/0 hover:bg-black/30 transition-colors flex items-center justify-center group cursor-pointer"
                     onclick="document.getElementById('imageInput').click()">
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity text-center">
                        <div class="w-12 h-12 bg-white/90 rounded-xl flex items-center justify-center mx-auto mb-2">
                            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <p class="text-white text-sm font-medium">छायाचित्र बदला</p>
                    </div>
                </div>
                <!-- Revert button (shown only after new file chosen) -->
                <button type="button" id="revertBtn" onclick="revertImage()" class="hidden absolute top-3 right-3 p-2 bg-black/50 hover:bg-black/70 text-white rounded-xl backdrop-blur-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a5 5 0 015 5v2M3 10l4 4M3 10l4-4"></path></svg>
                </button>
            </div>
            <div class="text-center py-2 bg-gray-50 border-t border-gray-100">
                <p class="text-xs text-gray-400">छायाचित्रावर क्लिक करून बदला · ड्रॅग & ड्रॉप देखील चालेल</p>
            </div>
            <input type="file" name="image" id="imageInput" accept="image/*" class="hidden" onchange="handleFileSelect(event)">
        </div>

        @error('image')
            <p class="text-red-500 text-xs mb-4 -mt-4">{{ $message }}</p>
        @enderror

        <!-- Details -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 sm:p-6 space-y-5">
            <!-- Category + Title side by side on desktop -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1.5">वर्गवारी <span class="text-red-500">*</span></label>
                    <select name="category_id" id="category_id" required
                            class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm bg-white">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $image->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">शीर्षक <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $image->title) }}" required
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">वर्णन <span class="text-gray-400 text-xs font-normal">(ऐच्छिक)</span></label>
                <textarea name="description" id="description" rows="2"
                          class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm resize-none"
                          placeholder="छायाचित्राबद्दल थोडक्यात लिहा">{{ old('description', $image->description) }}</textarea>
            </div>

            <div>
                <label for="alt_text" class="block text-sm font-medium text-gray-700 mb-1.5">Alt Text <span class="text-gray-400 text-xs font-normal">(SEO साठी)</span></label>
                <input type="text" name="alt_text" id="alt_text" value="{{ old('alt_text', $image->alt_text) }}"
                       class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                       placeholder="छायाचित्राचे वर्णन">
            </div>

            <!-- Active toggle — clean switch style -->
            <div class="flex items-center justify-between py-3 px-4 bg-gray-50 rounded-xl">
                <div>
                    <p class="text-sm font-medium text-gray-700">गॅलरीमध्ये दाखवा</p>
                    <p class="text-xs text-gray-400">सक्रिय असल्यास गॅलरी पेजवर दिसेल</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" {{ $image->is_active ? 'checked' : '' }} class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-2 peer-focus:ring-green-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                </label>
            </div>

            <!-- Hidden sort_order (preserved, ordering via drag-drop on index) -->
            <input type="hidden" name="sort_order" value="{{ $image->sort_order }}">
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-between mt-6">
            <div class="text-xs text-gray-400">
                अपलोड: {{ $image->created_at->format('d M Y, h:i A') }}
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.images.index') }}"
                   class="px-5 py-2.5 text-sm text-gray-500 hover:text-gray-700 font-medium rounded-xl hover:bg-gray-100 transition-colors">
                    रद्द करा
                </a>
                <button type="submit" id="submitBtn"
                        class="inline-flex items-center px-6 py-2.5 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition-all shadow-sm hover:shadow-md disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    अपडेट करा
                </button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    const dropZone = document.getElementById('dropZone');
    const imageInput = document.getElementById('imageInput');
    const displayImg = document.getElementById('displayImg');
    const revertBtn = document.getElementById('revertBtn');
    const originalSrc = '{{ $image->image_url }}';

    // Drag & drop
    ['dragenter', 'dragover'].forEach(e => {
        dropZone.addEventListener(e, (ev) => {
            ev.preventDefault();
            dropZone.classList.add('border-green-400', 'bg-green-50/30');
        });
    });
    ['dragleave', 'drop'].forEach(e => {
        dropZone.addEventListener(e, (ev) => {
            ev.preventDefault();
            dropZone.classList.remove('border-green-400', 'bg-green-50/30');
        });
    });
    dropZone.addEventListener('drop', (ev) => {
        ev.preventDefault();
        const files = ev.dataTransfer.files;
        if (files.length && files[0].type.startsWith('image/')) {
            imageInput.files = files;
            showPreview(files[0]);
        }
    });

    function handleFileSelect(e) {
        const file = e.target.files[0];
        if (file) showPreview(file);
    }

    function showPreview(file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            displayImg.src = e.target.result;
            revertBtn.classList.remove('hidden');
            dropZone.classList.add('border-green-200');
        };
        reader.readAsDataURL(file);
    }

    function revertImage() {
        displayImg.src = originalSrc;
        imageInput.value = '';
        revertBtn.classList.add('hidden');
        dropZone.classList.remove('border-green-200');
    }

    // Prevent double submit
    document.getElementById('editForm').addEventListener('submit', function() {
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<svg class="w-4 h-4 mr-2 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg> अपडेट होत आहे...';
    });

    // Mobile: make overlay work on tap too
    if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
        const overlay = dropZone.querySelector('.group');
        const overlayContent = overlay.querySelector('div');
        overlay.addEventListener('click', (e) => {
            e.stopPropagation();
            document.getElementById('imageInput').click();
        });
    }
</script>
@endsection
