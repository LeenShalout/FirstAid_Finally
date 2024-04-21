@extends('layouts.master')

@section('title')
Blogs
@endsection

@section('css')
<link rel="stylesheet" href="css/blogs.css">
@endsection

@section('js')
@endsection

@section('content')
<div class="blogs-container container-xxl container-fluid mt-3">
    <div class="row">

        <div class="col-md-8 d-flex blog-1 p-3">
            <div class="blogs-img">
                <a href="/blogs"><img src="{{ asset('Images/pets.jpg') }}" class="" alt="..."></a>
            </div>
            <div class="ms-2">
                <p class="category-1"><a href="/blogs">Pets</a></p>
                <h6 class="blog-title"><a href="/blogs">What Every Pet Owner Should Know</a></h6>
                <p>As responsible pet owners, it's essential to be prepared for any unexpected emergencies that may arise. Just as we have first aid kits for ourselves, having one for our furry companions can be lifesaving. In this article, we'll cover some essential tips and techniques for providing first aid to pets in times of need.</p>
            </div>
        </div>

        <div class="col-md-4 blog-2 p-3">
            <div>
                <p class="category-2">Psychological</p>
                <h6 class="blog-title">Supporting Mental Well-being in Times of Crisis</h6>
                <p>In times of crisis or emergency, it's not just physical health that needs attention—mental well-being is equally important. Psychological first aid is a valuable tool for providing immediate support to individuals experiencing distress.</p>
            </div>
        </div>

        <div class="col-md-4 blog-3 p-3">
            <div class="blogs-img">
                <img src="{{ asset('Images/disability.jpg') }}" class="" alt="...">
            </div>
            <div>
                <p class="category-3 mt-2">People with Special Needs</p>
                <h6 class="blog-title">Supporting Individuals with Special Needs</h6>
                <p>It's essential to recognize that individuals with special needs may require unique considerations and accommodations. Whether it's physical, cognitive, or sensory challenges, being prepared to provide effective first aid to individuals with special needs is crucial.</p>
            </div>
        </div>

        <div class="col-md-4 blog-4 p-3">
            <div>
                <p class="category-4">Travel</p>
                <h6 class="blog-title">Be Prepared, Stay Safe, and Enjoy the Journey!</h6>
                <p>Embarking on an adventure, whether it's a weekend getaway or a globetrotting expedition, is an exciting experience. However, unforeseen mishaps can occur, and being prepared with a well-equipped travel first aid kit is essential for ensuring a smooth journey. </p>
            </div>
            <div class="blogs-img">
                <img src="{{ asset('Images/traveling.jpg') }}" class="" alt="...">
            </div>
        </div>

        <div class="col-md-4 blog-5 p-3">
            <div class="blogs-img">
                <img src="{{ asset('Images/fooding.jpg') }}" class="" alt="...">
            </div>
            <div>
                <p class="category-5 mt-2">Food</p>
                <h6 class="blog-title"> Essential Foods to Support Healing After First Aid</h6>
                <p>After experiencing an injury or illness, proper nutrition plays a crucial role in supporting the body's healing process. In this blog post, we'll explore the importance of nourishing foods after first aid interventions and discuss key nutrients that promote recovery.</p>
            </div>
        </div>

        <div class="col-md-4 blog-6 p-3">
            <div>
                <p class="category-6">Big Occasions</p>
                <h6 class="blog-title">Ensuring Safety and Well-being During Celebrations</h6>
                <p>Big occasions such as weddings, parties, and family gatherings are times of joy and celebration, but they can also bring unexpected emergencies. </p>
            </div>
        </div>

        <div class="col-md-8 d-flex blog-7 p-3">
            <div>
                <p class="category-7">Equipment</p>
                <h6 class="blog-title">The Most Important First Aid Equipment Every Individual Should Know</h6>
                <p>Whether at home, work, or in public spaces, having awareness of the most important first aid equipment is essential for anyone to provide timely assistance during emergencies.</p>
            </div>
            <div class="blogs-img">
                <img src="{{ asset('Images/kit.jpg') }}" class="" alt="...">
            </div>
        </div>

    </div>


</div>
@endsection
