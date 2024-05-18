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
            <div class="col-md-9">
                @if($case)
                    <article>
                        <img src="{{ asset("storage/image/$case->Photo") }}" alt="" class="img-fluid"
                             style="width: 100%; height:40vh;">
                        <div class="post-content mt-2">
                            <h3 class="blog-title">{{$case->Title}}</h3>

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-intro" type="button" role="tab"
                                            aria-controls="nav-intro" aria-selected="true">Introduction
                                    </button>

                                    @if($case->Category == "Natural_Disasters")
                                        <button class="nav-link" id="nav-before-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-before" type="button" role="tab"
                                                aria-controls="nav-before" aria-selected="false">Before a {{ $case->Title }}
                                        </button>

                                        <button class="nav-link" id="nav-during-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-during" type="button" role="tab"
                                                aria-controls="nav-during" aria-selected="false">During a {{ $case->Title }}
                                        </button>

                                        <button class="nav-link" id="nav-after-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-after" type="button" role="tab"
                                                aria-controls="nav-after" aria-selected="false">After a {{ $case->Title }}
                                        </button>

                                        <button class="nav-link" id="nav-tips-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-tips" type="button" role="tab"
                                                aria-controls="nav-tips" aria-selected="false">Prevention Tips
                                        </button>
                                    @else
                                        <button class="nav-link" id="nav-sign-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-sign" type="button" role="tab"
                                                aria-controls="nav-sign" aria-selected="false">Symptoms and Signs
                                        </button>

                                        <button class="nav-link" id="nav-procedures-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-procedures" type="button" role="tab"
                                                aria-controls="nav-procedures" aria-selected="false">Treatment Procedures
                                        </button>

                                        <button class="nav-link" id="nav-tips-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-tips" type="button" role="tab"
                                                aria-controls="nav-tips" aria-selected="false">Prevention
                                            Tips
                                        </button>
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

                                <div class="tab-pane fade" id="nav-sign" role="tabpanel"
                                     aria-labelledby="nav-sign-tab">
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

                                <div class="tab-pane fade" id="nav-tips" role="tabpanel"
                                     aria-labelledby="nav-tips-tab">
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

                                <div class="tab-pane fade" id="nav-before" role="tabpanel"
                                     aria-labelledby="nav-before-tab">
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

                                <div class="tab-pane fade" id="nav-during" role="tabpanel"
                                     aria-labelledby="nav-during-tab">
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

                                <div class="tab-pane fade" id="nav-after" role="tabpanel"
                                     aria-labelledby="nav-after-tab">
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
                @else
                    <p>Case not found!</p>
                @endif
            </div>

            <div class="col-md-3 mb40">
                <!--/col-->
                <div class="categories mb-4">
                    <h4 class="sidebar-title">Cases</h4>
                    <div class="categories-list">
                        <ul class="p-0 m-0">
                            @foreach($cases as $relatedCase)
                                <li class="{{ request()->route('id') == $relatedCase->id ? 'active' : '' }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <a href="{{ route('case', $relatedCase->id) }}">
                                        {{ $relatedCase->Title }}
                                    </a>
                                </li>
                            @endforeach
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
            </div>
        </div>
    </div>
@endsection
