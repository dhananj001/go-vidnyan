@extends('layouts.admin')

@section('title', 'छायाचित्रे व्यवस्थापन')
@section('page-title', 'छायाचित्रे व्यवस्थापन')

@section('content')
<style>
    /* Masonry / grid layout */
    .masonry-grid {
        column-count: 3;
        column-gap: 0.75rem;
    }
    @media (min-width: 640px) {
        .masonry-grid { column-count: 2; }
    }
    @media (min-width: 1024px) {
        .masonry-grid { column-count: 3; }
    }
    @media (min-width: 1280px) {
        .masonry-grid { column-count: 4; }
    }
    @media (max-width: 767px) {
        .masonry-grid {
            column-gap: 0.25rem;
        }
    }

    /* Card */
    .masonry-item {
        break-inside: avoid;
        margin-bottom: 0.75rem;
        position: relative;
        border-radius: 1rem;
        overflow: hidden;
        background: #f3f4f6;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .masonry-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }
    @media (max-width: 767px) {
        .masonry-item {
            margin-bottom: 0.25rem;
        }
    }

    /* Overlay – hidden by default on desktop, toggled on mobile */
    .masonry-item .card-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.35) 55%, rgba(0,0,0,0.08) 100%);
        display: flex; flex-direction: column; justify-content: flex-end;
        padding: 1rem;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    @media (hover: hover) {
        .masonry-item:hover .card-overlay { opacity: 1; }
    }
    /* Mobile: tap to toggle */
    .masonry-item.active-mobile .card-overlay { opacity: 1; }

    /* Info & actions slide up */
    .card-overlay .slide-up {
        transform: translateY(8px);
        opacity: 0;
        transition: all 0.3s ease 0.05s;
    }
    .masonry-item:hover .card-overlay .slide-up,
    .masonry-item.active-mobile .card-overlay .slide-up {
        transform: translateY(0);
        opacity: 1;
    }

    /* Drag handle visible on hover / active */
    .drag-handle {
        position: absolute; top: 0.5rem; right: 0.5rem;
        opacity: 0; transition: opacity 0.3s;
        cursor: grab; z-index: 10;
    }
    .masonry-item:hover .drag-handle,
    .masonry-item.active-mobile .drag-handle { opacity: 1; }

    /* Inactive */
    .masonry-item.inactive img { filter: grayscale(40%) brightness(0.85); }

    /* SortableJS ghost */
    .sortable-ghost { opacity: 0.35; }
    .sortable-chosen { box-shadow: 0 0 0 3px rgba(22,163,74,0.5); border-radius: 1rem; }

    /* Category filter tabs */
    .filter-tab {
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    .filter-tab:hover {
        background-color: rgba(22, 163, 74, 0.08);
        border-color: rgba(22, 163, 74, 0.15);
    }
    .filter-tab.active {
        background-color: rgba(22, 163, 74, 0.12);
        border-color: rgba(22, 163, 74, 0.25);
        color: #16a34a;
        font-weight: 600;
    }

    /* Toast notification */
    .toast {
        position: fixed; bottom: 1.5rem; right: 1.5rem; z-index: 100;
        padding: 0.75rem 1.25rem; border-radius: 0.75rem;
        font-size: 0.875rem; font-weight: 500;
        color: white; background: #16a34a;
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        transform: translateY(120%); opacity: 0;
        transition: all 0.4s ease;
    }
    .toast.show { transform: translateY(0); opacity: 1; }
</style>

<!-- Top Bar -->
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
    <div>
        <p class="text-gray-500 text-sm">गॅलरीच्या सर्व छायाचित्रे येथे व्यवस्थापित करा</p>
        <p class="text-xs text-gray-400 mt-1">एकूण {{ $images->count() }} छायाचित्रे · ड्रॅग करून क्रम बदला</p>
    </div>
    <a href="{{ route('admin.images.create') }}"
       class="inline-flex items-center px-5 py-2.5 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition-all shadow-sm hover:shadow-md">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        नवीन छायाचित्र
    </a>
</div>

<!-- Filters -->
<div class="mb-8">
    <!-- Search -->
    <div class="mb-4">
        <form method="GET" action="{{ route('admin.images.index') }}" class="flex gap-3">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="flex-1 relative">
                <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" name="search" value="{{ request('search') }}"
                       placeholder="शीर्षक किंवा वर्णन शोधा..."
                       class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm transition-all">
            </div>
            <button type="submit"
                    class="px-5 py-2.5 bg-gray-100 text-gray-600 text-sm font-medium rounded-xl hover:bg-gray-200 transition-colors">
                शोधा
            </button>
            @if(request('search'))
                <a href="{{ route('admin.images.index', request('category') ? ['category' => request('category')] : []) }}"
                   class="px-3 py-2.5 text-gray-400 hover:text-gray-600 rounded-xl hover:bg-gray-50 transition-colors flex items-center"
                   title="शोध साफ करा">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </a>
            @endif
        </form>
    </div>

    <!-- Category Tabs -->
    <div class="flex flex-wrap gap-2">
        <a href="{{ route('admin.images.index', request('search') ? ['search' => request('search')] : []) }}"
           class="filter-tab px-4 py-2 rounded-xl text-sm {{ !request('category') ? 'active' : 'text-gray-500' }}">
            सर्व
        </a>
        @foreach($categories as $cat)
            <a href="{{ route('admin.images.index', array_merge(request('search') ? ['search' => request('search')] : [], ['category' => $cat->id])) }}"
               class="filter-tab px-4 py-2 rounded-xl text-sm {{ request('category') == $cat->id ? 'active' : 'text-gray-500' }}">
                {{ $cat->name }}
            </a>
        @endforeach
    </div>
</div>

<!-- Image Grid -->
@if($images->count())
    <div class="masonry-grid" id="images-grid">
        @foreach($images as $image)
            <div class="masonry-item {{ !$image->is_active ? 'inactive' : '' }}" data-id="{{ $image->id }}">
                <img src="{{ $image->image_url }}" alt="{{ $image->alt_text }}" class="w-full object-cover" loading="lazy">

                <!-- Drag handle -->
                <div class="drag-handle p-1.5 rounded-lg bg-black/40 backdrop-blur-sm text-white" title="ड्रॅग करा">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </div>

                <!-- Inactive badge (always visible) -->
                @if(!$image->is_active)
                    <div class="absolute top-2 left-2 z-10">
                        <span class="px-2 py-0.5 bg-gray-800/75 text-white text-xs font-medium rounded-full backdrop-blur-sm">निष्क्रिय</span>
                    </div>
                @endif

                <!-- Overlay -->
                <div class="card-overlay">
                    <!-- Category badge -->
                    <div class="slide-up absolute top-3 left-3">
                        <span class="px-2.5 py-1 bg-white/20 text-white text-xs font-medium rounded-full backdrop-blur-sm">{{ $image->category->name }}</span>
                    </div>

                    <!-- Bottom info + actions -->
                    <div class="slide-up">
                        <h3 class="text-white font-semibold text-sm leading-snug mb-0.5">{{ $image->title }}</h3>
                        @if($image->description)
                            <p class="text-white/70 text-xs line-clamp-2 mb-3">{{ $image->description }}</p>
                        @else
                            <div class="mb-3"></div>
                        @endif

                        <div class="flex items-center gap-2">
                            <!-- Toggle -->
                            <form action="{{ route('admin.images.toggle', $image) }}" method="POST" class="inline">
                                @csrf @method('PATCH')
                                <button type="submit"
                                        class="p-2 rounded-xl {{ $image->is_active ? 'bg-green-500/80 hover:bg-green-500' : 'bg-gray-500/80 hover:bg-gray-500' }} text-white backdrop-blur-sm transition-colors"
                                        title="{{ $image->is_active ? 'निष्क्रिय करा' : 'सक्रिय करा' }}">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $image->is_active ? 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' : 'M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21' }}"></path></svg>
                                </button>
                            </form>
                            <!-- Edit -->
                            <a href="{{ route('admin.images.edit', $image) }}"
                               class="p-2 rounded-xl bg-white/20 hover:bg-white/30 text-white backdrop-blur-sm transition-colors"
                               title="संपादित करा">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </a>
                            <!-- Delete -->
                            <form action="{{ route('admin.images.destroy', $image) }}" method="POST" class="inline ml-auto"
                                  onsubmit="return confirm('हे छायाचित्र कायमचे हटवले जाईल. तुम्हाला खात्री आहे?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                        class="p-2 rounded-xl bg-red-500/70 hover:bg-red-500 text-white backdrop-blur-sm transition-colors"
                                        title="हटवा">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <!-- Empty State -->
    <div class="text-center py-20">
        <div class="w-20 h-20 bg-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-5">
            <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
        </div>
        <p class="text-gray-500 text-sm mb-1">
            @if(request('search') || request('category'))
                शोध निकाल सापडले नाहीत
            @else
                अजून कोणतेही छायाचित्र जोडलेले नाही
            @endif
        </p>
        <p class="text-gray-400 text-xs mb-5">
            @if(request('search') || request('category'))
                वेगळ्या शब्दांनी शोधा किंवा फिल्टर बदला
            @else
                नवीन छायाचित्र अपलोड करून सुरुवात करा
            @endif
        </p>
        @if(request('search') || request('category'))
            <a href="{{ route('admin.images.index') }}" class="text-green-600 hover:text-green-700 font-medium text-sm">सर्व छायाचित्रे पहा →</a>
        @else
            <a href="{{ route('admin.images.create') }}" class="inline-flex items-center px-5 py-2.5 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition-all shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                छायाचित्र जोडा
            </a>
        @endif
    </div>
@endif

<!-- Toast -->
<div id="toast" class="toast"></div>
@endsection

@section('scripts')
<!-- SortableJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.6/Sortable.min.js"></script>
<script>
(function() {
    const grid = document.getElementById('images-grid');
    if (!grid) return;

    // ── Drag & Drop ──
    const sortable = new Sortable(grid, {
        animation: 250,
        handle: '.drag-handle',
        ghostClass: 'sortable-ghost',
        chosenClass: 'sortable-chosen',
        onEnd: async function() {
            const order = Array.from(grid.children).map(el => parseInt(el.dataset.id));
            try {
                const res = await fetch("{{ route('admin.images.reorder') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ order })
                });
                if (res.ok) showToast('क्रम यशस्वीरित्या अपडेट झाला!');
                else showToast('क्रम अपडेट अयशस्वी', true);
            } catch(e) {
                showToast('क्रम अपडेट अयशस्वी', true);
            }
        }
    });

    // ── Mobile: tap to reveal overlay ──
    const isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);

    if (isTouchDevice) {
        let activeCard = null;

        grid.addEventListener('click', function(e) {
            const card = e.target.closest('.masonry-item');
            if (!card) return;

            // If tapping inside an action (button/link/form), let it through
            if (e.target.closest('a, button, form')) return;

            e.preventDefault();

            if (activeCard === card) {
                card.classList.remove('active-mobile');
                activeCard = null;
            } else {
                if (activeCard) activeCard.classList.remove('active-mobile');
                card.classList.add('active-mobile');
                activeCard = card;
            }
        });

        // Close on tap outside
        document.addEventListener('click', function(e) {
            if (activeCard && !activeCard.contains(e.target)) {
                activeCard.classList.remove('active-mobile');
                activeCard = null;
            }
        });
    }

    // ── Toast ──
    function showToast(msg, isError) {
        const t = document.getElementById('toast');
        t.textContent = msg;
        t.style.background = isError ? '#dc2626' : '#16a34a';
        t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2500);
    }
})();
</script>
@endsection
