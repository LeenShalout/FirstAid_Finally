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
    <div class="container container-xxl mt-3">
        <div class="row">

            <div class="col-md-9">
                @foreach($blogs as $blog)
                <article>
                        <img src="{{ asset('Images/petsBlog.jpg') }}" alt="" class="img-fluid">
                        <div class="post-content mt-2">
                            <h3 class="blog-title">{{$blog->Title}}</h3>
                            <ul class="post-meta list-inline">
                                <li class="list-inline-item">
                                    <i class="fa fa-calendar-o"></i> <a href="#">{{ $blog->created_at->format('M d, Y') }}</a>
                                </li>
                            </ul>
                            <ul class="list-inline share-buttons">
                                <li class="list-inline-item">Share Blog:</li>
                                <li class="list-inline-item">
                                    <a href="#" class="">
                                        <img src="{{asset('Images/facebook.png')}}" class="social-media-img" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="">
                                        <img src="{{asset('Images/twitter.png')}}" class="social-media-img" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="">
                                        <img src="{{asset('Images/pinterest.png')}}" class="social-media-img" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="">
                                        <img src="{{asset('Images/whatsapp.png')}}" class="social-media-img" alt="">
                                    </a>
                                </li>
                            </ul>

                            <p class="blog-intro">{{$blog->Intro}}</p>

                            <div class="blog-steps">
{{--                                <ol class="m-0 p-0">--}}
{{--                                    @if ($data)--}}
{{--                                        @foreach ($data as $blogData)--}}
{{--                                            @foreach ($blogData['steps'] as $stepData)--}}
{{--                                                <li>--}}
{{--                                                    <h4>{{ $stepData['title'] }}</h4>--}}
{{--                                                    <p>{{ $stepData['description'] }}</p>--}}
{{--                                                </li>--}}
{{--                                            @endforeach--}}
                                        @endforeach
{{--                                    @endif--}}
{{--                                </ol>--}}

                                                                <ol class="m-0 p-0">
                                    <li>
                                        <h4>Know Your Pet's Normal Behavior:</h4>
                                        <p>Understanding your pet's normal behavior is crucial for recognizing when something is wrong. Pay attention to their eating habits, energy levels, and typical demeanor. Any sudden changes could indicate an underlying issue.</p>
                                    </li>

                                    <li>
                                        <h4>Create a Pet First Aid Kit:</h4>
                                        <p>Prepare a pet first aid kit and keep it easily accessible. Include items such as gauze pads, adhesive tape, antiseptic wipes, tweezers, scissors, a blanket, a muzzle (for dogs), and your veterinarian's contact information. Having these supplies on hand can make all the difference in an emergency.</p>
                                    </li>
                                    <li>
                                        <h4>Learn Basic First Aid Techniques:</h4>
                                        <p>Familiarize yourself with basic first aid techniques for pets. This includes how to perform CPR, control bleeding, and treat common injuries such as cuts, burns, and fractures. Taking a pet first aid class or consulting with your veterinarian can provide invaluable knowledge.</p>
                                    </li>
                                    <li>
                                        <h4>Handle with Care:</h4>
                                        <p>When providing first aid to your pet, remember to handle them gently and calmly. Even the most docile pet may become agitated or fearful when injured. Approach them slowly and speak to them in a soothing voice to help keep them calm.</p>
                                    </li>
                                    <li>
                                        <h4>Know When to Seek Professional Help:</h4>
                                        <p>While first aid can be crucial in many situations, it's essential to know when to seek professional veterinary care. If your pet is experiencing severe bleeding, difficulty breathing, loss of consciousness, or any other life-threatening symptoms, seek immediate veterinary attention.</p>
                                    </li>

                                </ol>
                            </div>

                            <div class="blog-conclusion">
                                <p>{{$blog->Conclusion}}</p>
                            </div>


                        </div>

                </article>
{{--                @endforeach--}}

                <!-- post article-->

            </div>


            <div class="col-md-3 mb40">
                <div class="mb-4">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
                <!--/col-->
                <div class="categories mb-4">
                    <h4 class="sidebar-title">Categories</h4>
                    <div class="categories-list">
                        <ul class="p-0 m-0">
                            <li class="active"><i class="fa-solid fa-angle-right"></i><a href="#">Pets</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Psychological</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">People with Special Needs</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Big Occasions</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Equipment</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Travel</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Food</a></li>
                        </ul>
                    </div>
                </div>
                <!--/col-->
                <div>
                    <h4 class="sidebar-title">Related Blogs</h4>
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64"
                            src="{{ asset('Images/vaccine.png') }}" alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="https://wwwnc.cdc.gov/travel/page/routine-vaccines">Routine Vaccines</a></h5>
                                January 31, 2022
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="d-flex mr-3 img-fluid" width="64"
                            src="{{ asset('Images/petstravel.jpg') }}" alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="https://www.cdc.gov/importation/traveling-with-pets.html">Traveling with Pets</a></h5>
                                May 26, 2022
                            </div>
                        </li>
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64"
                            src="{{ asset('Images/firework.jpg') }}" alt="" class="img-fluid">
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
