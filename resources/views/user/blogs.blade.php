@extends('user.layouts.master')

@section('title', 'Blogs')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
@endsection

@section('js')
    <!-- Any JavaScript scripts you want to include -->
@endsection

@section('content')
    <div class="container container-xxl mt-3">
        <div class="row">

            <div class="col-md-9">
                @foreach($blogs as $blog)
                    <article>
                        <img src="{{ asset("storage/image/$blog->MainImg") }}" alt="" class="img-fluid" style="width: 100%; height:23rem;">
                        <div class="post-content mt-3">
                            <h3 class="blog-title">{{ $blog->Title }}</h3>
                            <ul class="post-meta list-inline">
                                <li class="list-inline-item">
                                    <i class="fa fa-calendar-o"></i> <a href="#">{{ $blog->created_at->format('M d, Y') }}</a>
                                </li>
                            </ul>
                            <ul class="list-inline share-buttons">
                                <li class="list-inline-item">Share Blog:</li>
                                <li class="list-inline-item">
                                    <a href="{{ \App\Http\Controllers\User\UserBlogController::facebookShare(url()->current()) }}" target="_blank">
                                        <img src="{{ asset('Images/facebook.png') }}" class="social-media-img" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ \App\Http\Controllers\User\UserBlogController::twitterShare(url()->current(), $blog->title) }}" target="_blank">
                                        <img src="{{ asset('Images/twitter.png') }}" class="social-media-img" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ \App\Http\Controllers\User\UserBlogController::pinterestShare(url()->current(), $blog->image, $blog->description) }}" target="_blank">
                                        <img src="{{ asset('Images/pinterest.png') }}" class="social-media-img" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ \App\Http\Controllers\User\UserBlogController::whatsappShare($blog->title . ' - ' . url()->current()) }}">
                                        <img src="{{ asset('Images/whatsapp.png') }}" class="social-media-img" alt="">
                                    </a>
                                </li>
                            </ul>

                            <p class="blog-intro">{{ $blog->Intro }}</p>
                                <?php   $a=json_decode($blog->Steps) ?>
                            <div class="blog-steps">
                                <ol class="m-0 p-0">
                                    @foreach( $a as $step)
                                        <li>
                                            <h4> {{ $step->step}}</h4>
                                            <p>{{ $step->description}}</p>
                                        </li>
                                    @endforeach

                                </ol>


                            </div>

                            <div class="blog-conclusion">
                                <p>{{ $blog->Conclusion }}</p>
                            </div>

                        </div>
                    </article>
                @endforeach
            </div>

            <div class="col-md-3 mb40">
{{--                <div class="mb-4">--}}
{{--                    <form>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">--}}
{{--                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <!--/col-->
                <div class="categories mb-4">
                    <h4 class="sidebar-title">Categories</h4>
                    <div class="categories-list">
                        <ul class="p-0 m-0">
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'Pets') }}">Pets</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'Psychological') }}">Psychological</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'People with Special Needs') }}">People with Special Needs</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'Travel') }}">Travel</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'Food') }}">Food</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'Big Occasions') }}">Big Occasions</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('mainBlogs', 'Equipment') }}">Equipment</a></li>
                        </ul>
                    </div>
                </div>
                <!--/col-->
                <div>
                    <h4 class="sidebar-title">Related Blogs</h4>
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64" src="{{ asset('Images/vaccine.png') }}" alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="https://wwwnc.cdc.gov/travel/page/routine-vaccines">Routine Vaccines</a></h5>
                                January 31, 2022
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="d-flex mr-3 img-fluid" width="64" src="{{ asset('Images/petstravel.jpg') }}" alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="https://www.cdc.gov/importation/traveling-with-pets.html">Traveling with Pets</a></h5>
                                May 26, 2022
                            </div>
                        </li>
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64" src="{{ asset('Images/firework.jpg') }}" alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="https://onlinefirstaid.com/firework-injuries-first-aid-tips/">Firework Injuries</a></h5>
                                March 15, 2017
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
