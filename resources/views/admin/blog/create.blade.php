@extends('layouts.admin.app')

@section('title', 'Tulis Artikel Baru')

@section('content')
<div class="max-w-5xl">
    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" id="blog-form">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100">
                    <div class="mb-6">
                        <label for="title" class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Judul Artikel</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Masukkan judul yang menarik..." class="w-full px-6 py-4 rounded-2xl border-slate-100 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-bold text-slate-900" required>
                        @error('title') <p class="mt-2 text-xs text-rose-500 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="slug" class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Slug (URL)</label>
                        <div class="relative">
                            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" placeholder="slug-artikel-anda" class="w-full px-6 py-4 rounded-2xl border-slate-100 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-bold text-slate-900 pr-12">
                            <div class="absolute right-4 top-1/2 -translate-y-1/2">
                                <div id="slug-status-loading" class="hidden">
                                    <svg class="animate-spin h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                </div>
                                <div id="slug-status-success" class="hidden text-emerald-500">
                                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                                </div>
                                <div id="slug-status-error" class="hidden text-rose-500">
                                    <i data-lucide="x-circle" class="w-5 h-5"></i>
                                </div>
                            </div>
                        </div>
                        <p id="slug-preview" class="mt-2 text-[10px] text-slate-400 font-medium italic">Preview: {{ url('/blog/') }}/<span id="slug-text">...</span></p>
                        @error('slug') <p class="mt-2 text-xs text-rose-500 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Konten</label>
                        <div id="editor-container" class="h-96 rounded-2xl border-slate-100 bg-slate-50 overflow-hidden">{!! old('content') !!}</div>
                        <input type="hidden" name="content" id="content" value="{{ old('content') }}">
                        @error('content') <p class="mt-2 text-xs text-rose-500 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="bg-slate-900 rounded-[2rem] p-8 shadow-xl border border-slate-800 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-10 opacity-5 pointer-events-none">
                        <i data-lucide="search" class="w-40 h-40"></i>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-black mb-6 uppercase tracking-tighter italic">Optimasi SEO</h3>
                        
                        <div class="space-y-6">
                            <div>
                                <label for="meta_title" class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-2">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}" class="w-full px-6 py-4 rounded-2xl border-slate-800 bg-slate-800/50 focus:bg-slate-800 focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all font-bold text-white placeholder-slate-600">
                                <p class="mt-2 text-[10px] text-slate-500 font-medium italic">Saran: Gunakan judul artikel untuk hasil terbaik.</p>
                            </div>
                            <div>
                                <label for="meta_description" class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-2">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" rows="3" class="w-full px-6 py-4 rounded-2xl border-slate-800 bg-slate-800/50 focus:bg-slate-800 focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all font-bold text-white placeholder-slate-600">{{ old('meta_description') }}</textarea>
                                <p class="mt-2 text-[10px] text-slate-500 font-medium italic">Saran: Masukkan ringkasan artikel (max 160 karakter).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="space-y-8">
                <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100">
                    <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-6">Publikasi</h3>
                    
                    <div class="mb-8">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <div class="relative">
                                <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published') ? 'checked' : '' }} class="sr-only peer">
                                <div class="w-12 h-6 bg-slate-100 rounded-full peer peer-checked:bg-emerald-500 transition-all"></div>
                                <div class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full peer-checked:translate-x-6 transition-all"></div>
                            </div>
                            <span class="text-sm font-bold text-slate-600 group-hover:text-slate-900 transition-colors">Publish Langsung</span>
                        </label>
                    </div>

                    <div class="space-y-4">
                        <button type="submit" class="w-full bg-indigo-600 text-white px-6 py-4 rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-600/20">
                            Simpan Artikel
                        </button>
                        <a href="{{ route('admin.blog.index') }}" class="block w-full text-center px-6 py-4 rounded-2xl border border-slate-100 text-slate-400 font-black text-sm uppercase tracking-widest hover:bg-slate-50 transition-all">
                            Batal
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100">
                    <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-6">Gambar Utama</h3>
                    
                    <div class="relative group cursor-pointer" onclick="document.getElementById('featured_image').click()">
                        <div class="w-full aspect-video rounded-2xl bg-slate-50 border-2 border-dashed border-slate-100 flex flex-col items-center justify-center p-4 group-hover:bg-slate-100/50 group-hover:border-indigo-200 transition-all overflow-hidden">
                            <img id="preview-image" class="hidden w-full h-full object-cover">
                            <div id="upload-placeholder" class="text-center">
                                <i data-lucide="cloud-upload" class="w-8 h-8 text-slate-300 mx-auto mb-2 group-hover:text-indigo-400 transition-all"></i>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Klik untuk Upload</p>
                            </div>
                        </div>
                        <input type="file" name="featured_image" id="featured_image" class="hidden" accept="image/*" onchange="previewImage(this)">
                    </div>
                    @error('featured_image') <p class="mt-2 text-xs text-rose-500 font-bold">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    .ql-toolbar.ql-snow { border: none; background: #f8fafc; padding: 1rem; border-bottom: 1px solid #f1f5f9; }
    .ql-container.ql-snow { border: none; font-family: inherit; font-size: 1rem; }
    .ql-editor { padding: 2rem; min-height: 20rem; color: #475569; }
    .ql-editor.ql-blank::before { color: #cbd5e1; font-style: italic; left: 2rem; }
</style>
@endpush

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [2, 3, 4, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['link', 'blockquote', 'code-block', 'image'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['clean']
            ]
        },
        placeholder: 'Tuliskan isi artikel Anda di sini...'
    });

    // Handle Title to Slug & SEO
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const metaTitleInput = document.getElementById('meta_title');
    const metaDescInput = document.getElementById('meta_description');
    const slugText = document.getElementById('slug-text');
    
    const slugStatusLoading = document.getElementById('slug-status-loading');
    const slugStatusSuccess = document.getElementById('slug-status-success');
    const slugStatusError = document.getElementById('slug-status-error');

    let isManualSlug = false;
    let slugTimeout = null;

    titleInput.addEventListener('input', function() {
        if (!isManualSlug) {
            const slug = generateSlug(this.value);
            slugInput.value = slug;
            slugText.textContent = slug || '...';
            checkSlugAvailability(slug);
        }
        
        // Auto SEO Title
        if (!metaTitleInput.value || metaTitleInput.value === titleInput.getAttribute('data-prev')) {
            metaTitleInput.value = this.value;
        }
        titleInput.setAttribute('data-prev', this.value);
    });

    slugInput.addEventListener('input', function() {
        isManualSlug = true;
        const slug = generateSlug(this.value);
        this.value = slug;
        slugText.textContent = slug || '...';
        checkSlugAvailability(slug);
        
        if (this.value === '') isManualSlug = false;
    });

    function generateSlug(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }

    function checkSlugAvailability(slug) {
        if (!slug) {
            hideSlugStatus();
            return;
        }

        clearTimeout(slugTimeout);
        showSlugStatus('loading');

        slugTimeout = setTimeout(() => {
            fetch(`{{ route('admin.blog.checkSlug') }}?slug=${slug}`)
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        showSlugStatus('error');
                    } else {
                        showSlugStatus('success');
                    }
                })
                .catch(() => hideSlugStatus());
        }, 500);
    }

    function showSlugStatus(status) {
        hideSlugStatus();
        if (status === 'loading') slugStatusLoading.classList.remove('hidden');
        if (status === 'success') slugStatusSuccess.classList.remove('hidden');
        if (status === 'error') slugStatusError.classList.remove('hidden');
        lucide.createIcons();
    }

    function hideSlugStatus() {
        slugStatusLoading.classList.add('hidden');
        slugStatusSuccess.classList.add('hidden');
        slugStatusError.classList.add('hidden');
    }

    // Auto SEO Description from Content
    quill.on('text-change', function() {
        const text = quill.getText(0, 160).trim();
        if (!metaDescInput.value || metaDescInput.value === metaDescInput.getAttribute('data-prev')) {
            metaDescInput.value = text;
        }
        metaDescInput.setAttribute('data-prev', text);
        
        // Also sync content to hidden input on change
        document.getElementById('content').value = quill.root.innerHTML;
    });

    const blogForm = document.getElementById('blog-form');
    blogForm.addEventListener('submit', function(e) {
        const contentInput = document.getElementById('content');
        const html = quill.root.innerHTML;
        
        // Check if content is empty (Quill empty state is often <p><br></p>)
        if (quill.getText().trim().length === 0 && !html.includes('<img')) {
            alert('Konten artikel tidak boleh kosong!');
            e.preventDefault();
            return false;
        }
        
        contentInput.value = html;
        return true;
    });

    function previewImage(input) {
        const preview = document.getElementById('preview-image');
        const placeholder = document.getElementById('upload-placeholder');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
