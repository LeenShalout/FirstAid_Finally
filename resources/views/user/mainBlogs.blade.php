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
                $images = ['pets.jpg', '', 'disability.jpg', 'traveling.jpg', 'fooding.jpg', '', 'kit.jpg'];
            @endphp

            @foreach ($blogs as $i => $blog)
                <div class="blog-card col-md-{{ $col_size[$i % $col_size_length] }} {{ $col_size[$i % $col_size_length] == 8 ? 'd-flex' : '' }} {{ $i == $col_size_length - 1 ? 'd-flex flex-row-reverse' : '' }} {{ 'blog-' . ($i + 1) }} p-3">
                    <div class="blogs-img">
                        @if ($images[$i % $col_size_length])
                            <img src="{{ asset('Images/' . $images[$i % $col_size_length]) }}" class="img-fluid" alt="">
                        @endif
                    </div>
                    <div class="ms-3">
                        <p class="category-{{ $i + 1 }}"><a href="blogs/{{$blog->id}}">{{ $blog->Category }}</a></p>
                        <h6 class="blog-title"><a href="">{{ $blog->Title }}</a></h6>
                        <p>{{ $blog->Summary }}</p>
                    </div>
                </div>
            @endforeach






            {{--            <div class="col-md-8 d-flex blog-1 p-3">--}}
{{--                <div class="blogs-img">--}}
{{--                    <a href="/blogs"><img src="{{ asset('Images/pets.jpg') }}" class="" alt=""></a>--}}
{{--                </div>--}}
{{--                <div class="ms-2">--}}
{{--                    <p class="category-1"><a href="/blogs">Pets</a></p>--}}
{{--                    <h6 class="blog-title"><a href="/blogs">What Every Pet Owner Should Know</a></h6>--}}
{{--                    <p>As responsible pet owners, it's essential to be prepared for any unexpected emergencies that may--}}
{{--                        arise. Just as we have first aid kits for ourselves, having one for our furry companions can be--}}
{{--                        lifesaving. In this article, we'll cover some essential tips and techniques for providing first aid--}}
{{--                        to pets in times of need.</p>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="col-md-4 blog-2 p-3">--}}
{{--                <div>--}}
{{--                    <p class="category-2">Psychological</p>--}}
{{--                    <h6 class="blog-title">Supporting Mental Well-being in Times of Crisis</h6>--}}
{{--                    <p>In times of crisis or emergency, it's not just physical health that needs attention—mental well-being--}}
{{--                        is equally important. Psychological first aid is a valuable tool for providing immediate support to--}}
{{--                        individuals experiencing distress.</p>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="col-md-4 blog-3 p-3">--}}
{{--                <div class="blogs-img">--}}
{{--                    <img src="{{ asset('Images/disability.jpg') }}" class="" alt="a">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <p class="category-3 mt-2">People with Special Needs</p>--}}
{{--                    <h6 class="blog-title">Supporting Individuals with Special Needs</h6>--}}
{{--                    <p>It's essential to recognize that individuals with special needs may require unique considerations and--}}
{{--                        accommodations. Whether it's physical, cognitive, or sensory challenges, being prepared to provide--}}
{{--                        effective first aid to individuals with special needs is crucial.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 blog-4 p-3">--}}
{{--                <div>--}}
{{--                    <p class="category-4">Travel</p>--}}
{{--                    <h6 class="blog-title">Be Prepared, Stay Safe, and Enjoy the Journey!</h6>--}}
{{--                    <p>Embarking on an adventure, whether it's a weekend getaway or a globetrotting expedition, is an--}}
{{--                        exciting experience. However, unforeseen mishaps can occur, and being prepared with a well-equipped--}}
{{--                        travel first aid kit is essential for ensuring a smooth journey. </p>--}}
{{--                </div>--}}
{{--                <div class="blogs-img">--}}
{{--                    <img src="{{ asset('Images/traveling.jpg') }}" class="" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 blog-5 p-3">--}}
{{--                <div class="blogs-img">--}}
{{--                    <img src="{{ asset('Images/fooding.jpg') }}" class="" alt="">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <p class="category-5 mt-2">Food</p>--}}
{{--                    <h6 class="blog-title"> Essential Foods to Support Healing After First Aid</h6>--}}
{{--                    <p>After experiencing an injury or illness, proper nutrition plays a crucial role in supporting the--}}
{{--                        body's healing process. In this blog post, we'll explore the importance of nourishing foods after--}}
{{--                        first aid interventions and discuss key nutrients that promote recovery.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 blog-6 p-3">--}}
{{--                <div>--}}
{{--                    <p class="category-6">Big Occasions</p>--}}
{{--                    <h6 class="blog-title">Ensuring Safety and Well-being During Celebrations</h6>--}}
{{--                    <p>Big occasions such as weddings, parties, and family gatherings are times of joy and celebration, but--}}
{{--                        they can also bring unexpected emergencies. </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-8 d-flex blog-7 p-3">--}}
{{--                <div>--}}
{{--                    <p class="category-7">Equipment</p>--}}
{{--                    <h6 class="blog-title">The Most Important First Aid Equipment Every Individual Should Know</h6>--}}
{{--                    <p>Whether at home, work, or in public spaces, having awareness of the most important first aid--}}
{{--                        equipment is essential for anyone to provide timely assistance during emergencies.</p>--}}
{{--                </div>--}}
{{--                <div class="blogs-img">--}}
{{--                    <img src="{{ asset('Images/kit.jpg') }}" class="" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>


    </div>
    {{-- @endforeach --}}
@endsection
