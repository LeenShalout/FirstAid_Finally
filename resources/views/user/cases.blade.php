@extends('user.layouts.master')

@section('title')
    Bleeding
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cases.css') }}" >

@endsection

@section('js')
@endsection



@section('content')
    <div class="cases-container container-xxl mt-3">
        <div class="row">

            @foreach($cases as $case)
            <div class="col-md-9">
                <article>
                    <img src="{{ asset('Images/' . $case->Photo) }}" alt="" class="img-fluid"
                        style="width: 100%; height:40vh;">
                    <div class="post-content mt-2">
                        <h3 class="blog-title">{{$case->Title}}</h3>


                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro"
                                        aria-selected="true">Introduction</button>

                                @if($case->Category == "Natural_Disasters")
                                    <button class="nav-link" id="nav-before-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-before" type="button" role="tab" aria-controls="nav-before"
                                            aria-selected="false">Before a {{ $case->Title }}</button>

                                    <button class="nav-link" id="nav-during-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-during" type="button" role="tab" aria-controls="nav-during"
                                            aria-selected="false">During a {{ $case->Title }}</button>

                                    <button class="nav-link" id="nav-after-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-after" type="button" role="tab" aria-controls="nav-after"
                                            aria-selected="false">After a {{ $case->Title }}</button>

                                    <button class="nav-link" id="nav-tips-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-tips" type="button" role="tab" aria-controls="nav-tips"
                                            aria-selected="false">Prevention Tips</button>
                                @else
                                    <button class="nav-link" id="nav-sign-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-sign" type="button" role="tab" aria-controls="nav-sign"
                                            aria-selected="false">Symptoms and Signs</button>

                                    <button class="nav-link" id="nav-procedures-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-procedures" type="button" role="tab"
                                            aria-controls="nav-procedures" aria-selected="false">Treatment Procedures</button>

                                    <button class="nav-link" id="nav-tips-tab" data-bs-toggle="tab" data-bs-target="#nav-tips"
                                            type="button" role="tab" aria-controls="nav-tips" aria-selected="false">Prevention
                                        Tips</button>
                                @endif
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-intro" role="tabpanel"
                                aria-labelledby="nav-intro-tab">
                                <div class="case-intro p-2">
                                    <p>{{$case->Intro}}</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">
                                <div class="case-sign p-2">
                                    <ol>
                                        @php
                                            $signs = explode('/', $case->Signs);
                                        @endphp
                                        @foreach ($signs as $sign)
                                            <li>{{ $sign }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-procedures" role="tabpanel"
                                aria-labelledby="nav-procedures-tab">
                                <div class="case-procedures p-2">
                                    <ol>
                                        @php
                                            $procedures = explode('/', $case->Treatment_Procedures);
                                        @endphp
                                        @foreach ($procedures as $procedure)
                                            <li>{{ $procedure }}</li>
                                        @endforeach

                                    </ol>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-tips" role="tabpanel" aria-labelledby="nav-tips-tab">
                                <div class="case-tips p-2">
                                    <ol>
                                        @php
                                            $tips = explode('/', $case->Prevention_Tips);
                                        @endphp
                                        @foreach ($tips as $tip)
                                            <li>{{ $tip }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-before" role="tabpanel" aria-labelledby="nav-before-tab">
                                <div class="case-tips p-2">
                                    <ol>
                                        @php
                                            $tips = explode('/', $case->Before);
                                        @endphp
                                        @foreach ($tips as $tip)
                                            <li>{{ $tip }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-during" role="tabpanel" aria-labelledby="nav-during-tab">
                                <div class="case-tips p-2">
                                    <ol>
                                        @php
                                            $tips = explode('/', $case->During);
                                        @endphp
                                        @foreach ($tips as $tip)
                                            <li>{{ $tip }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-after" role="tabpanel" aria-labelledby="nav-after-tab">
                                <div class="case-tips p-2">
                                    <ol>
                                        @php
                                            $tips = explode('/', $case->After);
                                        @endphp
                                        @foreach ($tips as $tip)
                                            <li>{{ $tip }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="case-video mt-5">
                            <iframe width="100%" height="400vh" src="{{$case->Video}}">
                        </iframe>
                        </div>

                    </div>
                </article>

            </div>
            @endforeach


            <div class="col-md-3 mb40">
                <div class="mb-4">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
                <!--/col-->
                <div class="categories mb-4">
                    <h4 class="sidebar-title">Cases</h4>
                    <div class="categories-list">
                        <ul class="p-0 m-0">
                            <li class="active"><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Bleeding</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Burns</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Heat Stroke</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Shock</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Heart Attack</a></li>
{{--                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Meningitis</a></li>--}}
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Strains and Sprains</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="{{ request()->is( route('mainCases', $case->id) ) ? 'active' : '' }}">Unconscious and Breathing </a></li>
                        </ul>
                    </div>
                </div>
                <!--/col-->
                <div>
                    <div class="remember p-2 mt-5">
                        <h4>Remember</h4>
                        <p>The Emergency number is <b><u>911</u></b>. It's important to call for help as soon as possible, provide clear information about the situation, and follow the dispatcher's instructions while waiting for help to arrive</p>
                    </div>
                </div>

                {{-- <div>
                    <h4 class="sidebar-title">Related Blogs</h4>
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64" src="{{ asset('Images/vaccine.png') }}"
                                alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="https://wwwnc.cdc.gov/travel/page/routine-vaccines">Routine
                                        Vaccines</a></h5>
                                January 31, 2022
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="d-flex mr-3 img-fluid" width="64" src="{{ asset('Images/petstravel.jpg') }}"
                                alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a
                                        href="https://www.cdc.gov/importation/traveling-with-pets.html">Traveling with
                                        Pets</a></h5>
                                May 26, 2022
                            </div>
                        </li>
                        <li class="media">
                            <img class="d-flex mr-3 img-fluid" width="64" src="{{ asset('Images/firework.jpg') }}"
                                alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a
                                        href="https://onlinefirstaid.com/firework-injuries-first-aid-tips/">Firework
                                        Injuries</a></h5>
                                March 15, 2017
                            </div>
                        </li>
                    </ul>
                </div> --}}

            </div>

        </div>
    </div>
@endsection
