@extends('layouts.admin')

@section('title', 'व्हिडिओ संपादित करा')
@section('page-title', 'व्हिडिओ संपादित करा')

@section('content')
<div class="max-w-2xl">
    <div class="mb-6">
        <a href="{{ route('admin.videos.index') }}" class="text-sm text-gray-500 hover:text-green-600 inline-flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            मागे जा
        </a>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
        <!-- Current Video Preview -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">सध्याचा व्हिडिओ</label>
            <div class="aspect-video max-w-md rounded-xl overflow-hidden">
                <iframe width="100%" height="100%" src="{{ $video->embed_url }}"
                        title="{{ $video->title }}" frameborder="0" allowfullscreen class="rounded-xl"></iframe>
            </div>
        </div>

        <form action="{{ route('admin.videos.update', $video) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-5">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">शीर्षक <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $video->title) }}" required
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">वर्णन</label>
                    <textarea name="description" id="description" rows="3"
                              class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">{{ old('description', $video->description) }}</textarea>
                </div>

                <div>
                    <label for="youtube_url" class="block text-sm font-medium text-gray-700 mb-1.5">YouTube URL <span class="text-red-500">*</span></label>
                    <input type="url" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', $video->youtube_url) }}" required
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">
                </div>

                <div>
                    <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1.5">क्रमांक</label>
                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $video->sort_order) }}"
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                           min="0">
                </div>

                <div class="flex items-center space-x-3">
                    <input type="checkbox" name="is_active" id="is_active" value="1"
                           {{ $video->is_active ? 'checked' : '' }}
                           class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                    <label for="is_active" class="text-sm text-gray-700">सक्रिय</label>
                </div>
            </div>

            <div class="flex items-center justify-end space-x-3 mt-8 pt-6 border-t border-gray-100">
                <a href="{{ route('admin.videos.index') }}"
                   class="px-5 py-2.5 text-sm text-gray-600 hover:text-gray-800 font-medium rounded-xl hover:bg-gray-50 transition-colors">
                    रद्द करा
                </a>
                <button type="submit"
                        class="px-6 py-2.5 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition-colors shadow-sm">
                    अपडेट करा
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
