@extends('layouts.admin')

@section('title', 'नवीन छायाचित्र')
@section('page-title', 'नवीन छायाचित्र अपलोड करा')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('admin.images.index') }}" class="text-sm text-gray-500 hover:text-green-600 inline-flex items-center transition-colors">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            छायाचित्रे व्यवस्थापन
        </a>
    </div>

    <form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
        @csrf

        <!-- Upload Area — prominent, first thing you see -->
        <div class="bg-white rounded-2xl border-2 border-dashed border-gray-200 hover:border-green-400 transition-colors mb-6 overflow-hidden"
             id="dropZone">
            <!-- Preview (hidden initially) -->
            <div id="previewArea" class="hidden relative">
                <img id="previewImg" src="" alt="Preview" class="w-full max-h-80 object-contain bg-gray-50">
                <button type="button" onclick="clearImage()" class="absolute top-3 right-3 p-2 bg-black/50 hover:bg-black/70 text-white rounded-xl backdrop-blur-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Upload prompt -->
            <div id="uploadPrompt" class="py-12 px-6 text-center cursor-pointer" onclick="document.getElementById('imageInput').click()">
                <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <p class="text-gray-700 font-medium text-sm mb-1">छायाचित्र निवडा किंवा येथे ड्रॅग करा</p>
                <p class="text-gray-400 text-xs">JPEG, PNG, JPG, GIF, WEBP · कमाल 10MB</p>
            </div>
            <input type="file" name="image" id="imageInput" required accept="image/*" class="hidden" onchange="handleFileSelect(event)">
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
                        <option value="">निवडा...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">शीर्षक <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                           placeholder="उदा: कृषी प्रकल्प">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">वर्णन <span class="text-gray-400 text-xs font-normal">(ऐच्छिक)</span></label>
                <textarea name="description" id="description" rows="2"
                          class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm resize-none"
                          placeholder="छायाचित्राबद्दल थोडक्यात लिहा">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="alt_text" class="block text-sm font-medium text-gray-700 mb-1.5">Alt Text <span class="text-gray-400 text-xs font-normal">(SEO साठी)</span></label>
                <input type="text" name="alt_text" id="alt_text" value="{{ old('alt_text') }}"
                       class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                       placeholder="छायाचित्राचे वर्णन">
            </div>

            <!-- Active toggle — clean switch style -->
            <div class="flex items-center justify-between py-3 px-4 bg-gray-50 rounded-xl">
                <div>
                    <p class="text-sm font-medium text-gray-700">गॅलरीमध्ये दाखवा</p>
                    <p class="text-xs text-gray-400">सक्रिय असल्यास गॅलरी पेजवर लगेच दिसेल</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" checked class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:ring-2 peer-focus:ring-green-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                </label>
            </div>

            <!-- Hidden sort_order -->
            <input type="hidden" name="sort_order" value="0">
        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end gap-3 mt-6">
            <a href="{{ route('admin.images.index') }}"
               class="px-5 py-2.5 text-sm text-gray-500 hover:text-gray-700 font-medium rounded-xl hover:bg-gray-100 transition-colors">
                रद्द करा
            </a>
            <button type="submit" id="submitBtn"
                    class="inline-flex items-center px-6 py-2.5 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition-all shadow-sm hover:shadow-md disabled:opacity-50 disabled:cursor-not-allowed">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                अपलोड करा
            </button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    const dropZone = document.getElementById('dropZone');
    const imageInput = document.getElementById('imageInput');
    const previewArea = document.getElementById('previewArea');
    const previewImg = document.getElementById('previewImg');
    const uploadPrompt = document.getElementById('uploadPrompt');

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
            previewImg.src = e.target.result;
            previewArea.classList.remove('hidden');
            uploadPrompt.classList.add('hidden');
            dropZone.classList.remove('border-dashed');
            dropZone.classList.add('border-solid', 'border-green-200');
        };
        reader.readAsDataURL(file);
    }

    function clearImage() {
        imageInput.value = '';
        previewArea.classList.add('hidden');
        uploadPrompt.classList.remove('hidden');
        dropZone.classList.add('border-dashed');
        dropZone.classList.remove('border-solid', 'border-green-200');
    }

    // Prevent double submit
    document.getElementById('uploadForm').addEventListener('submit', function() {
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<svg class="w-4 h-4 mr-2 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg> अपलोड होत आहे...';
    });
</script>
@endsection
