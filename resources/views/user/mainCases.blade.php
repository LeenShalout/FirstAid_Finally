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

                <div class="search d-flex justify-content-center">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <div class="cases-container">
        <section id="cases" class="container-xxl">
                <div class="cards d-flex justify-content-center align-items-center pt-5 flex-wrap">

                    @foreach($cases as $case)
                        <div class="card" style="width: 23rem; background-image: url('{{ asset('storage/image/' . $case->MainPhoto) }}'); background-repeat: no-repeat; background-position: top center; background-size: cover;">
                            <div class="card-body">
                                <h3 class="card-title text-center">{{$case->Title}}</h3>
                                <p class="card-text text-center">{{$case->Description}}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="/cases/{{$case->id}}"><button type="button" class="btn btn-primary">Read More <i class="bi bi-arrow-down-right-circle"></i></button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    {{--                    <div class="card" style="width:23rem;">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="card-title text-center">Bleeding</h3>--}}
{{--                            <p class="card-text text-center">Bleeding is the escape of blood from a damaged blood vessel, and it--}}
{{--                                can occur--}}
{{--                                for various reasons.</p>--}}
{{--                            --}}{{-- <ul class="card-list d-flex p-0">--}}
{{--                                <li>Blood flow</li>--}}
{{--                                <li>Swelling</li>--}}
{{--                            </ul> --}}
{{--                            <div class="d-flex justify-content-center">--}}
{{--                                <button type="button" class="btn btn-primary">Read More <i--}}
{{--                                        class="bi bi-arrow-down-right-circle"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card" style="width:23rem;">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="card-title text-center">Bleeding</h3>--}}
{{--                            <p class="card-text text-center">Bleeding is the escape of blood from a damaged blood vessel, and it--}}
{{--                                can occur--}}
{{--                                for various reasons.</p>--}}
{{--                            --}}{{-- <ul class="card-list d-flex p-0">--}}
{{--                                <li>Blood flow</li>--}}
{{--                                <li>Swelling</li>--}}
{{--                            </ul> --}}
{{--                            <div class="d-flex justify-content-center">--}}
{{--                                <button type="button" class="btn btn-primary">Read More <i--}}
{{--                                        class="bi bi-arrow-down-right-circle"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

        </section>

    </div>
@endsection



