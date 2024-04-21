@extends('layouts.master')

@section('title')
    Bleeding
@endsection

@section('css')
    <link rel="stylesheet" href="css/cases.css">

@endsection

@section('js')
@endsection



@section('content')
    <div class="cases-container container-xxl mt-3">
        <div class="row">

            <div class="col-md-9">
                <article>
                    <img src="{{ asset('Images/bleedingCase.jpg') }}" alt="" class="img-fluid"
                        style="width: 100%; height:40vh;">
                    <div class="post-content mt-2">
                        <h3 class="blog-title">Bleeding</h3>

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro"
                                    aria-selected="true">Introduction</button>

                                <button class="nav-link" id="nav-sign-tab" data-bs-toggle="tab" data-bs-target="#nav-sign"
                                    type="button" role="tab" aria-controls="nav-sign" aria-selected="false">Symptoms
                                    and
                                    Signs</button>

                                <button class="nav-link" id="nav-procedures-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-procedures" type="button" role="tab"
                                    aria-controls="nav-procedures" aria-selected="false">Treatment Procedures</button>

                                <button class="nav-link" id="nav-tips-tab" data-bs-toggle="tab" data-bs-target="#nav-tips"
                                    type="button" role="tab" aria-controls="nav-tips" aria-selected="false">Prevention
                                    Tips</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-intro" role="tabpanel"
                                aria-labelledby="nav-intro-tab">
                                <div class="case-intro p-2">
                                    <p>Bleeding, whether from a minor cut or a more serious injury, requires prompt
                                        attention to minimize blood loss and prevent complications. Knowing how to respond
                                        effectively to bleeding can make a significant difference in the outcome of an
                                        emergency situation.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">
                                <div class="case-sign p-2">
                                    <ol>
                                        <li>Visible blood at the site of the injury or on clothing.</li>
                                        <li>Pain or discomfort at the wound site.</li>
                                        <li>Weakness, dizziness, or fainting due to blood loss.</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-procedures" role="tabpanel"
                                aria-labelledby="nav-procedures-tab">
                                <div class="case-procedures p-2">
                                    <ol>
                                        <li>Use a clean cloth or sterile dressing to apply firm pressure directly to the wound.
                                            This helps to stem the flow of blood and promote clotting.</li>
                                        <li>If possible, elevate the wound above the level of the heart to help reduce blood
                                            flow.</li>
                                        <li>Continue applying pressure until the bleeding stops. If blood soaks through the
                                            cloth, add more layers without removing the original dressing.</li>
                                        <li>Once bleeding has stopped, secure the dressing in place with a bandage or tape.
                                            Ensure it's not too tight to impede circulation.</li>
                                        <li>Keep a close eye on the individual's condition. If bleeding resumes or signs of
                                            shock develop, seek medical help immediately.</li>
                                    </ol>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-tips" role="tabpanel" aria-labelledby="nav-tips-tab">
                                <div class="case-tips p-2">
                                    <ol>
                                        <li>Handle sharp objects carefully to avoid accidental cuts.</li>
                                        <li>Wear protective gear such as gloves when engaging in activities prone to injury.
                                        </li>
                                        <li>Keep a first aid kit stocked with supplies for treating minor cuts and wounds.
                                        </li>
                                        <li>Maintain up-to-date tetanus vaccination to reduce the risk of infection from
                                            dirty or rusty wounds.</li>
                                        <li>Educate yourself and others on basic first aid techniques to respond effectively
                                            in emergencies.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="case-video mt-5">
                            <iframe width="100%" height="400vh"
                        src="https://www.youtube.com/embed/8sEijZkfUHI?si=6koRBLnhWOy9YAVH">
                        </iframe>
                        </div>





                    </div>
                </article>
                <!-- post article-->

            </div>

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
                            <li class="active"><i class="fa-solid fa-angle-right"></i><a href="#">Bleeding</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Burns</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Heat Stroke</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Shock</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Heart Attack</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Meningitis</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Strains and Sprains</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="#">Unconscious and Breathing </a></li>
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
