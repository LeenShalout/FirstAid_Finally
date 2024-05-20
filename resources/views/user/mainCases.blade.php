@extends('user.layouts.master')

@section('title')
    Cases
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mainCases.css') }}" >
@endsection

@section('js')
@endsection

@section('content')
    <section id="head" class="head pb-4">
        <div class="head-img d-sm-flex justify-content-sm-center align-items-sm-start">
            <img src="{{asset('Images/cases.png')}}" class="img-fluid" alt="">
        </div>

        <div class="head-content m-2">
            <div class="search-text text-center">
                <h3>How we can help you?</h3>
                <p>Search for specific first aid cases to find detailed information and step-by-step instructions</p>
            </div>

            <div class="search">
                <form class="d-flex justify-content-center" method="GET" action="{{ route('mainCases', ['category' => request()->category]) }}">

                <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                               aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
                </form>

            </div>
        </div>
    </section>

    <div class="cases-container">
        <section id="cases" class="container-xxl">
            <div class="cards d-flex justify-content-center align-items-center pt-5 flex-wrap">
                @foreach($cases as $case)


                    <div class="card" style="width: 23rem; height: 26rem">
                        <div class="card-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('storage/image/' . $case->MainPhoto) }}" class="mt-4 mx-3" alt="...">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{$case->Title}}</h3>
                            <hr>
                            <p class="card-text">{{$case->Description}}</p>
                            <div class="d-flex justify-content-center">
                                <a href="/case/{{$case->id}}"><button type="button" class="btn btn-primary my-1">Read More <i class="bi bi-arrow-down-right-circle"></i></button></a>
                            </div>                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
