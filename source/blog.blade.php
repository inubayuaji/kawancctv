---
pagination:
    collection: posts
    perPage: 6
---
@extends('_layouts.web')

@section('content')

@include('_components.header', [
    'title' => 'Blog',
    'subtitle' => 'Artikel terbaru dari kami',
])

<section class="container md:flex-row px-2 mx-auto py-5 md:py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        @foreach($pagination->items as $post)
        <div>
            <div class="overflow-hidden bg-white rounded-sm shadow-md">
                <img class="object-cover w-full h-64" src="{{ url($post->featuredImage) }}" alt="Article">

                <div class="p-6">
                    <div>
                        <span class="text-xs font-medium text-blue-600 uppercase">{{ $post->category }}</span>
                        <a href="{{ url('/blog/' . Illuminate\Support\Str::slug($post->getFilename())) }}" class="block mt-2 text-2xl font-semibold transition-colors duration-200 transform hover:text-blue-500">{{ $post->title }}</a>
                        <p class="mt-2 text-sm text-gray-600">{{ Illuminate\Support\Str::limit(strip_tags($post->getContent()), 165) }}</p>

                    </div>

                    <div class="mt-4">
                        <span class="mx-1 text-xs text-gray-600">{{ $post->date }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-10">
        <div class="flex justify-center gap-2">
            {{-- <a href="#" class="btn btn-primary btn-sm">
                Previous
            </a> --}}

            @foreach($pagination->pages as $pageNumber => $path)
            <a href="{{ $page->baseUrl }}{{ $path }}" class="btn btn-primary btn-sm">
                {{ $pageNumber }}
            </a>
            @endforeach

            {{-- <a href="#" class="btn btn-primary btn-sm">
                Next
            </a> --}}

        </div>

    </div>
</section>

@endsection
