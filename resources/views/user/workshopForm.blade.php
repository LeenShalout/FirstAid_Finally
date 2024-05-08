@extends('user.layouts.master')

@section('title')
    Workshop Form
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/workshop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/utilites.css') }}">
@endsection

@section('js')
@endsection

@section('content')
    <div class="container-xxl">
        <div class="workshop-container">
            <section id="workshop-form">
                <h3><span class="primary-color">Participant </span>Information</h3>                <br> <br>
                
                <p><strong>Workshop Title:</strong>{{$data->title}} </p>
                <p><strong>Workshop Description:</strong>{{$data->description}}</p>
                <p><strong>Workshop Date:</strong>{{$data->workshop_date}}</p>
                <p><strong>Workshop Type:</strong>{{$data->workshop_type}}</p>
                <br> <br>

                <div class="workshop-form-container mt-4">
                    <h3><span class="primary-color">Register </span>for our upcoming First Aid Workshop!</h3>
                    <form action="{{ route('workshop.store') }}" method="POST" class="mt-4">
    @csrf
    <input type="hidden" name="workshop_id" value="{{ $data->id }}">
                        @csrf <!-- Add CSRF token -->
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name"
                                       placeholder="First Name" required>
                            </div>
                            <div class="col">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name"
                                       placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   placeholder="name@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="tel" name="phone" class="form-control" id="phone"
                                   placeholder="000-000-0000" pattern="[0-9]{10}" required>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Last Inserted Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Last inserted data will be populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
@endsection
