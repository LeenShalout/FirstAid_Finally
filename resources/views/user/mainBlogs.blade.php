@extends('user.layouts.master')

@section('title')
    Blogs
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/blogs.css') }}" >
@endsection

@section('js')
@endsection

@section('content')
    <div class="blogs-container container-xxl container-fluid mt-4">

        <div class="category-list">
            <ul class="mt-3 d-flex justify-content-center">
                <li class="category-1"><a class="{{ request()->is( 'mainBlogs/Pets' ) ? 'category-1 category-select-padding' : 'category-1 category-padding' }}" href="{{ route('mainBlogs', 'Pets') }}"> Pets </a> </li>
                <li class="category-2"><a class="{{ request()->is( 'mainBlogs/Psychological' ) ? 'category-2 category-select-padding' : 'category-2 category-padding' }}" href="{{ route('mainBlogs', 'Psychological') }}"> Psychological</a></li>
                <li class="category-3"><a class="{{ request()->is( 'mainBlogs/People with Special Needs' ) ? 'category-3 category-select-padding' : 'category-3 category-padding' }}" href="{{ route('mainBlogs', 'People with Special Needs') }}"> People with Special Needs</a></li>
                <li class="category-4"><a class="{{ request()->is( 'mainBlogs/Travel' ) ? 'category-4 category-select-padding' : 'category-4 category-padding' }}" href="{{ route('mainBlogs', 'Travel') }}"> Travel</a></li>
                <li class="category-5"><a class="{{ request()->is( 'mainBlogs/Food' ) ? 'category-5 category-select-padding' : 'category-5 category-padding' }}" href="{{ route('mainBlogs', 'Food') }}"> Food</a></li>
                <li class="category-6"><a class="{{ request()->is( 'mainBlogs/Big Occasions' ) ? 'category-6 category-select-padding' : 'category-6 category-padding' }}" href="{{ route('mainBlogs', 'Big Occasions') }}"> Big Occasions</a></li>
                <li class="category-7"><a class="{{ request()->is( 'mainBlogs/Equipment' ) ? 'category-7 category-select-padding' : 'category-7 category-padding' }}" href="{{ route('mainBlogs', 'Equipment') }}"> Equipment</a></li>

            </ul>
        </div>

        {{-- @foreach ($blogs as $blog) --}}
        {{-- $x=["col-md-4 blog-2 p-3","col-md-4 blog-4 p-3","col-md-4 blog-5 p-3"]; --}}


        <div class="row">

            @php
    $col_size = [8, 4, 4, 4, 4, 4, 8];
    $col_size_length = count($col_size);
@endphp

@foreach ($blogs as $i => $blog)
    <div class="blog-card col-md-{{ $col_size[$i % $col_size_length] }} {{ $col_size[$i % $col_size_length] == 8 ? 'd-flex' : '' }} {{ $i == $col_size_length - 1 ? 'd-flex flex-row-reverse' : '' }} {{ 'blog-' . ($i + 1) }} p-3">
        <div class="blogs-img">
            @if ($blog->Photo)
                <img src="{{ asset("storage/image/$blog->Photo") }}" class="img-fluid" alt="">
            @endif
        </div>
        <div class="ms-3">
            <p class="category-{{ $i + 1 }}"><a href="{{ route('blog',$blog->id) }}">{{ $blog->Category }}</a></p>
            <h6 class="blog-title"><a href="">{{ $blog->Title }}</a></h6>
            <p>{{ $blog->Summary }}</p>
        </div>
    </div>
@endforeach


        </div>


    </div>
@endsection

