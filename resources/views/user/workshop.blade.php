@extends('user.layouts.master')

@section('title')
    workshop
@endsection

@section('css')
    <link rel="stylesheet" href="css/workshop.css">
    <link rel="stylesheet" href="css/utilites.css">
@endsection

@section('content')
    <div class="container container-xxl">
        <div class="workshop-container">
            <div class="intro mt-4 ">
                <h2 class="text-center"><span class="primary-color">Empower Yourself with Life-Saving Skills:</span> First Aid Workshops</h2>
                <p class="text-center">Welcome to our comprehensive guide on first aid workshop ideas designed to equip individuals and organizations with the essential knowledge and skills to respond effectively to emergencies. Whether you're a beginner seeking basic first aid techniques or an organization looking to enhance workplace safety protocols, our workshop suggestions cover a wide range of topics to meet your specific needs. Explore the following workshop ideas to promote safety, preparedness, and confidence in handling medical emergencies in various settings.</p>
            </div>
            <section id="workshop-types" class="workshop-types">
                <div class="grid">
                    <div class="py-5">
                        <div class="row row-gap-3">
                            @foreach($workshops as $workshop)
                                <div class="col-lg-4 mb-3 mb-lg-0 workshop-card">
                                    <p class="workshop-type">{{$workshop->workshop_type}}</p>
                                    <div class="hover hover-2 text-white rounded">
                                        <a href="{{ route('workshop.show', $workshop->id) }}">
                                            <img src="{{ asset("storage/image/$workshop->photo") }}" alt="{{ $workshop->photo }}" class="img-fluid">
                                            <div class="hover-overlay"></div>
                                            <div class="hover-2-content px-5 py-4">
                                                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0">
                                                    <span class="font-weight-light">{{ $workshop->title }}</span>
                                                </h3>
                                                <p class="hover-2-description mb-0">{{ $workshop->description }}</p>
                                                <p class="hover-2-date mb-0 text-center">{{ $workshop->workshop_date }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div> <!-- /.row -->
                    </div> <!-- /.py-5 -->
                </div> <!-- /.grid -->
            </section> <!-- /#workshop-types -->
        </div> <!-- /.workshop-container -->
    </div> <!-- /.container-xxl -->
@endsection
