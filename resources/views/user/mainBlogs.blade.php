@extends('user.layouts.master')

@section('title')
    Blogs
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
@endsection

@section('js')
@endsection

@section('content')
    <div class="blogs-container container-xxl container-fluid mt-4">

        <div class="category-list">
            <ul class="mt-3 d-flex justify-content-center">
                <li class="category-1"><a class="{{ request()->is('mainBlogs/Pets') ? 'category-pet category-select-padding' : 'category-pet category-padding' }}" href="{{ route('mainBlogs', 'Pets') }}"> Pets </a> </li>
                <li class="category-2"><a class="{{ request()->is('mainBlogs/Psychological') ? 'category-psychological category-select-padding' : 'category-psychological category-padding' }}" href="{{ route('mainBlogs', 'Psychological') }}"> Psychological</a></li>
                <li class="category-3"><a class="{{ request()->is('mainBlogs/People with Special Needs') ? 'category-special-needs category-select-padding' : 'category-special-needs category-padding' }}" href="{{ route('mainBlogs', 'People with Special Needs') }}"> People with Special Needs</a></li>
                <li class="category-4"><a class="{{ request()->is('mainBlogs/Travel') ? 'category-travel category-select-padding' : 'category-travel category-padding' }}" href="{{ route('mainBlogs', 'Travel') }}"> Travel</a></li>
                <li class="category-5"><a class="{{ request()->is('mainBlogs/Food') ? 'category-food category-select-padding' : 'category-food category-padding' }}" href="{{ route('mainBlogs', 'Food') }}"> Food</a></li>
                <li class="category-6"><a class="{{ request()->is('mainBlogs/Big Occasions') ? 'category-big-occasions category-select-padding' : 'category-big-occasions category-padding' }}" href="{{ route('mainBlogs', 'Big Occasions') }}"> Big Occasions</a></li>
                <li class="category-7"><a class="{{ request()->is('mainBlogs/Equipment') ? 'category-equipment category-select-padding' : 'category-equipment category-padding' }}" href="{{ route('mainBlogs', 'Equipment') }}"> Equipment</a></li>
            </ul>
        </div>

        <div class="row">

            @php
                $col_size = [8, 4, 4, 4, 4, 4, 8];
                $col_size_length = count($col_size);
            @endphp

            @foreach ($blogs as $i => $blog)
                @php
                    $categoryClass = '';
                    $imageClass = '';
                    switch ($blog->Category) {
                        case 'Pets':
                            $categoryClass = 'category-pet';
                            break;
                        case 'Psychological':
                            $categoryClass = 'category-psychological';
                            break;
                        case 'People with Special Needs':
                            $categoryClass = 'category-special-needs';
                            break;
                        case 'Travel':
                            $categoryClass = 'category-travel';
                            break;
                        case 'Food':
                            $categoryClass = 'category-food';
                            break;
                        case 'Big Occasions':
                            $categoryClass = 'category-big-occasions';
                            break;
                        case 'Equipment':
                            $categoryClass = 'category-equipment';
                            break;
                    }
                    if ($col_size[$i % $col_size_length] == 8) {
                        $imageClass = 'image-height';
                    }
                @endphp
                <div class="blog-card col-md-{{ $col_size[$i % $col_size_length] }} {{ $col_size[$i % $col_size_length] == 8 ? 'd-flex' : '' }} {{ $i == $col_size_length - 1 ? 'd-flex flex-row-reverse' : '' }} {{ 'blog-' . ($i + 1) }} p-3">
                    <div class="blogs-img">
                        @if ($blog->Photo)
                            <img src="{{ asset("storage/image/$blog->Photo") }}" class="img-fluid {{ $imageClass }}" alt="">
                        @endif
                    </div>
                    <div class="ms-3">
                        <p class="{{ $categoryClass }}"><a href="{{ route('blog', $blog->id) }}">{{ $blog->Category }}</a></p>
                        <h6 class="blog-title"><a href="{{ route('blog', $blog->id) }}">{{ $blog->Title }}</a></h6>
                        <p>{{ $blog->Summary }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
