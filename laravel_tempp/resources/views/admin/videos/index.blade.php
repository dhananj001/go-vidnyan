@extends('layouts.admin')

@section('title', 'व्हिडिओ व्यवस्थापन')
@section('page-title', 'व्हिडिओ व्यवस्थापन')

@section('content')
<div class="flex items-center justify-between mb-6">
    <p class="text-gray-500 text-sm">YouTube व्हिडिओ व्यवस्थापित करा</p>
    <a href="{{ route('admin.videos.create') }}"
       class="inline-flex items-center px-4 py-2.5 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition-colors shadow-sm">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        नवीन व्हिडिओ
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($videos as $video)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition-shadow">
            <div class="aspect-video">
                <iframe width="100%" height="100%"
                        src="{{ $video->embed_url }}"
                        title="{{ $video->title }}"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        class="w-full h-full"></iframe>
            </div>
            <div class="p-4">
                <h3 class="text-sm font-semibold text-gray-800 marathi-heading">{{ $video->title }}</h3>
                @if($video->description)
                    <p class="text-xs text-gray-500 mt-1">{{ $video->description }}</p>
                @endif
                <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ $video->is_active ? 'bg-green-50 text-green-700' : 'bg-gray-100 text-gray-500' }}">
                        {{ $video->is_active ? '✓ सक्रिय' : '✗ निष्क्रिय' }}
                    </span>
                    <div class="flex items-center space-x-1">
                        <a href="{{ route('admin.videos.edit', $video) }}"
                           class="p-1.5 text-gray-400 hover:text-green-600 rounded-lg hover:bg-green-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <form action="{{ route('admin.videos.destroy', $video) }}" method="POST" class="inline"
                              onsubmit="return confirm('हा व्हिडिओ हटवायचा आहे?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-1.5 text-gray-400 hover:text-red-600 rounded-lg hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            <p class="text-gray-500 text-sm">अजून कोणताही व्हिडिओ जोडलेला नाही</p>
            <a href="{{ route('admin.videos.create') }}" class="inline-block mt-3 text-green-600 hover:text-green-700 font-medium text-sm">पहिला व्हिडिओ जोडा →</a>
        </div>
    @endforelse
</div>

@if($videos->hasPages())
    <div class="mt-6">{{ $videos->links() }}</div>
@endif
@endsection
