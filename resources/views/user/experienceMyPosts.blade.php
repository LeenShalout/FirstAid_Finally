@extends('user.sub_layouts.master')

@section('title')
    Experience | My Posts
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <section id="posts">

        @foreach ($experiences as $experience)
            <div class="card mb-2">
                <div class="card-body p-2 p-sm-3">
                    <div class="media forum-item">
                        <div class="d-flex justify-content-between">
                            @auth
                                <div class="d-flex align-items-center">
                                    <img src="{{ Auth::user()->img ? asset('storage/image/'.Auth::user()->img) : asset('image/profile.jpg') }}"
                                         class="mr-3 rounded-circle" width="50" alt="User" />
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                           class="text-body ms-3">{{Auth::user()->name}}</a></h6>
                                </div>

                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('experience.edit',$experience->id)}}">Edit</a></li>
                                        <li><a class="dropdown-item" href="{{route('experience.delete',$experience->id)}}">Delete</a></li>
                                    </ul>
                                </div>
                            @endauth
                        </div>

                        <div class="media-body">
                            <p class="text-secondary">{{ $experience->Post }}</p>
                            <img src="{{ URL::asset("storage/image/".$experience->Img) }}" alt="" style="height:15rem; width:30rem;">
                            <p class="text-muted mt-2">Posted at <span class="text-secondary font-weight-bold">{{ $experience->created_at->format('M d, Y') }}</span></p>

                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </section>
@endsection
