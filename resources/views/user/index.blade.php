@extends('user.layouts.master')


@section('title')
    Welcome
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection

@section('js')
<script>



</script>
    <script src="{{ asset('nav.js') }}"></script>

@endsection

@section('content')
    <div class="body-container">

        {{-- Home Section --}}
        <section id="home">
            <div class="container text-center pt-3 col-md-12">
                <div class="d-md-flex justify-content-md-between align-items-md-center row">
                    <div class="col-md-6">
                        <h1 id="heading-1"> Your Guide to Emergency Preparedness</h1>
                        <p>Protect those around you with our step-by-step first aid instructions and expert tips</p>
                        <button class="btn btn-primary"><a href="#about">Read More </a><i
                                class="bi bi-arrow-down-right-circle"></i></button>
                    </div>
                    <div class="main-img col-md-6">
                        <img src="{{ asset('Images/main.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        {{-- About Section --}}
        <section id="about">
            <div class="main-container">
                <div class="about-container p-5">
                    <div class="d-md-flex legal text-center">
                        <div>
                            <i class="fa-sharp fa-solid fa-lightbulb fa-2x"></i>
                            <div>
                                <h3>Our Mission</h3>
                                <p>Our mission is to provide accessible and reliable first aid information to individuals
                                    and families, empowering them to respond effectively to emergencies and save lives</p>
                            </div>
                        </div>

                        <div>
                            <i class="fa-solid fa-people-group fa-2x"></i>
                            <div>
                                <h3>Target audience</h3>
                                <p>Our website is designed for individuals and families who want to be prepared for
                                    emergencies, as well as educators, caregivers, and businesses who want to promote safety
                                    and well-being in their communities</p>
                            </div>
                        </div>

                        <div>
                            <i class="fa-sharp fa-solid fa-shield-halved fa-2x"></i>
                            <div>
                                <h3>Privacy policy</h3>
                                <p>We take the privacy and security of our users very seriously. Read our privacy policy to
                                    learn how we collect, use, and protect your personal information when you use our
                                    website</p>
                            </div>
                        </div>
                    </div>

                    <div class="about-info d-md-flex justify-content-md-center">
                        <div class="left text-center">
                            <h4>What you are looking for</h4>
                            <h2>We provide Step-by-Step Instructions for First Aid</h2>
                            <p>Our site provides detailed information on a variety of first aid topics, including CPR,
                                choking, burns, cuts and wounds, fractures and dislocations, sprains and strains, allergic
                                reactions, poisoning, and heat stroke. Each topic includes step-by-step instructions for
                                administering first aid, as well as signs and symptoms to look for and when to seek medical
                                help.</p>
                            <button class="btn btn-outline-primary"><a href="#cases">Read More </a><i
                                    class="bi bi-arrow-down-right-circle"></i></button>
                        </div>
                        <div class="right col-4">
                            <img src="{{ asset('Images/about.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Cases Section --}}
        <section id="cases">
            <div class="main-container">
                <div class="cases-section-container text-center">
                    <header class="section-header">
                        <h4>This is what we bring up</h4>
                        <h2>First Aid Cases to Know</h2>
                        <p>Our website offers tips on how to create a first aid plan for your home, workplace, or community
                        </p>
                    </header>

                    <div class="cards d-flex justify-content-evenly row m-auto flex-wrap">

                        <div class="card corners col-sm-6 g-0">
                            <img src="{{ asset('Images/HumanBody.jpg') }}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Human Body</h5>
                                <p class="card-text">Explore essential first aid procedures for various human body
                                    emergencies and injuries.</p>
                                <a href="{{ route('mainCases', 'Human_Body') }}" class="btn btn-primary">Read More <i
                                        class="bi bi-arrow-down-right-circle"></i></a>
                            </div>
                        </div>

                        <div class="card corners col-sm-6 g-0">
                            <img src="{{ asset('Images/NaturalDisasters.jpg') }}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Natural Disasters</h5>
                                <p class="card-text">Explore first aid procedures and safety protocols for natural disasters to ensure emergency preparedness.</p>
                                <a href="{{ route('mainCases', 'Natural_Disasters') }}" class="btn btn-primary">Read More <i
                                        class="bi bi-arrow-down-right-circle"></i></a>
                            </div>
                        </div>

                        <div class="card corners col-sm-6 g-0">
                            <img src="{{ asset('Images/animalInjuries.jpg') }}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Animal-Related Injuries</h5>
                                <p class="card-text">Explore essential first aid procedures and safety protocols for
                                    different incidents involving animals. </p>
                                <a href="{{ route('mainCases', 'Animal_Related_Injuries') }}" class="btn btn-primary">Read More <i
                                        class="bi bi-arrow-down-right-circle"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- Blog section --}}
        <section id="blogs" class="frame-corners">
            <div class="main-container">
                <div class="blogs-container p-5 text-center">
                    <header>
                        <h3>Check Out Our Blog Posts</h3>
                        <p>Take a deep dive into the world of first aid with our engaging blog content, designed to educate,
                            inspire, and empower you to make a difference.</p>

                    </header>

                    <div class="blogs-body p-3">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'Pets') }}"><img src="{{ asset('Images/animal.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">Pets</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'Psychological') }}"><img src="{{ asset('Images/Psycho.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">Psychological</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'People with Special Needs') }}"><img src="{{ asset('Images/specialNeeds.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">People with Special Needs</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card circle">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'Big Occasions') }}"><img src="{{ asset('Images/BigOccasions.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">Big Occasions</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'Equipment') }}"><img src="{{ asset('Images/equipment.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">Equipment</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'Travel') }}"><img src="{{ asset('Images/travel.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">Travel</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('mainBlogs', 'Food') }}"><img src="{{ asset('Images/food.png') }}" class="card-img-top" alt=""></a>
                                        <h5 class="card-title">Food</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary"><a href="/mainBlogs">Read Our Blogs </a><i
                            class="bi bi-arrow-down-right-circle"></i></button>
                </div>
            </div>
        </section>

        {{-- Workshop --}}
        <section id="workshop">
            <div class="main-container">

                <header class="workshop-header text-center">
                    <h3><i class="fa-solid fa-hand-holding-medical fa-2x" style="font-size: 1em"></i> Workshops</h3>
                    <h6>Empowerment Through Education: Enroll in Our First Aid Workshops Today</h6>
                </header>


                <div class="workshop-container container-xxl">
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <div class="workshop-plan d-flex justify-content-center align-items-center text-center mt-4 m-auto col-lg-5 gap-2">
                            <div class="col">
                                <i class="fa-regular fa-calendar-days"></i>
                                <h6>Workshop Schedule</h6>
                                {{-- <p>Stay updated on upcoming workshop dates, times, and locations.</p> --}}
                            </div>

                            <div class="col d-flex flex-column align-items-center">
                                <div class="mb-2">
                                    <i class="bi bi-file-text"></i>
                                    <h6>Workshop Overview</h6>
                                    {{-- <p>Get an insight into the topics covered in our workshops.</p> --}}
                                </div>

                                <div class="mt-2">
                                    <i class="fa-solid fa-person-chalkboard"></i>
                                    <h6>Trained Instructors</h6>
                                    {{-- <p>Learn from experienced and certified instructors who are passionate about empowering individuals with life-saving skills.</p> --}}
                                </div>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-certificate"></i>
                                <h6>Certification Opportunities</h6>
                                {{-- <p>Discover how you can earn certification upon completion of our workshops.</p> --}}
                            </div>

                        </div>

                        <div class="workshop-text p-4 col-lg-6">
                            <p class="">Prepare to empower yourself with life-saving skills! Our first aid workshop
                                is
                                designed to equip you with the knowledge and techniques necessary to respond effectively to
                                emergencies. Whether you're a complete beginner or looking to refresh your skills, our
                                workshops
                                cater to all levels of experience.</p>
                            <button class="btn btn-primary"><a href="{{route('workshop.index')}}">Join Us</a></button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Contact section --}}
        <section id="contact">
            <div class="main-container">
                <div class="contact-container d-flex">
                    <div class="contact-left">
                        <header>
                            <h6 class="contact-us"><i class="bi bi-chat-dots-fill fa-2x" style="font-size: 1.5em;"></i>
                                Contact Us</h6>
                            <h3>Looking forward to hear from you</h3>
                        </header>

                        <form class="row g-3 d-flex justify-content-start" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="col-6">
                                <label for="name" class="form-label"></label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label"></label>
                                <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
                            </div>


                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label"></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="message"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="contact-right d-md-flex align-items-md-end d-none d-md-block">
                        <img src="{{ asset('Images/contact.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
