@extends('layouts.master')

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
                <h2 class="text-center"><span class="primary-color">Empower Yourself with Life-Saving Skills: </span>First Aid Workshops</h2>
                <p class="text-center">Welcome to our comprehensive guide on first aid workshop ideas designed to equip individuals and organizations with the essential knowledge and skills to respond effectively to emergencies. Whether you're a beginner seeking basic first aid techniques or an organization looking to enhance workplace safety protocols, our workshop suggestions cover a wide range of topics to meet your specific needs. Explore the following workshop ideas to promote safety, preparedness, and confidence in handling medical emergencies in various settings.</p>
                <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary"><a href="#workshop-form">Join</a> <i class="bi bi-arrow-down-circle"></i></button>
                </div>
            </div>

            <section id="workshop-types" class="workshop-types">
                <div class="grid">
                    <div class="py-5">
                        <div class="row row-gap-3">

                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="hover hover-2 text-white rounded">
                                    <img src="{{ asset('Images/basic.jpg') }}" class="img-fluid" alt="">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-2-content px-5 py-4">
                                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                class="font-weight-light">Basic First Aid Workshop for Beginners </span></h3>
                                        <p class="hover-2-description mb-0">Covering the fundamental concepts of first aid, and
                                            teaching how to respond to common emergencies such as wounds, fractures, burns, severe bleeding, and drownings</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="hover hover-2 text-white rounded">
                                    <img src="{{ asset('Images/advanced.jpg') }}" class="img-fluid" alt="">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-2-content px-5 py-4">
                                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                class="font-weight-light">Advanced First Aid Workshop</span></h3>
                                        <p class="hover-2-description mb-0">Training on cardiopulmonary resuscitation (CPR) procedures and the use of automated external defibrillators (AEDs), and
                                            practice using AED devices.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="hover hover-2 text-white rounded">
                                    <img src="{{ asset('Images/family.jpg') }}" class="img-fluid" alt="">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-2-content px-5 py-4">
                                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                class="font-weight-light">Family First Aid Workshop</span></h3>
                                        <p class="hover-2-description mb-0">Providing first aid training for families and how to handle household emergencies, and
                                            teaching children and teenagers basic first aid procedures.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="hover hover-2 text-white rounded">
                                    <img src="{{ asset('Images/institution.jpg') }}" class="img-fluid" alt="">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-2-content px-5 py-4">
                                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                class="font-weight-light">Corporate and Institutional Workshop</span></h3>
                                        <p class="hover-2-description mb-0">Training employees in workplace emergency first aid and first aid protocols, and
                                            teaching how to deal with common emergencies in the workplace such as traffic accidents, minor injuries, and others.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="hover hover-2 text-white rounded">
                                    <img src="{{ asset('Images/sport.jpg') }}" class="img-fluid" alt="">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-2-content px-5 py-4">
                                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                class="font-weight-light">Sports First Aid Workshop</span></h3>
                                        <p class="hover-2-description mb-0">Training on how to deal with common sports injuries such as muscle tears and ligament sprains, and
                                            providing tips for preventing sports injuries and how to recover from them.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="hover hover-2 text-white rounded">
                                    <img src="{{ asset('Images/adventures.jpg') }}" class="img-fluid" alt="">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-2-content px-5 py-4">
                                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                class="font-weight-light">Workshop on First Aid for Trips and Outdoor Adventures</span></h3>
                                        <p class="hover-2-description mb-0">    Training on how to handle common injuries during trips and hikes in nature, and
                                            providing information on first aid in remote environments away from medical services.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section id="workshop-form">
                <div class="workshop-form-container">
                    <h3><span class="primary-color">Register </span>for our upcoming First Aid Workshop!</h3>
                    <form action="" class="mt-4"> <!-- Provide proper route -->
                        @csrf <!-- Add CSRF token -->
                        <div class="row mb-3">
                            <div class="col">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="000-000-0000" pattern="[0-9]{10}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="type" class="form-label">Select type</label>
                            <select class="form-control" id="type" name="type">
                                <option>Online</option>
                                <option>On Site</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="workshop_date" class="form-label">Workshop date</label>
                            <select class="form-control" id="workshop_date" name="workshop_date">
                                <option>Apr 1, 2024</option>
                                <option>Feb 1, 2024</option>
                                <option>Mar 1, 2024</option>
                            </select>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>

                    </form>
                </div>
            </section>

    </div>
@endsection
