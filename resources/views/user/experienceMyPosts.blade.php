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
                        <a href="#" data-toggle="collapse" data-target=".forum-content">

                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle"
                                width="50" alt="User" /></a>

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
                    </div>


                    <div class="media-body">
                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                class="text-body">All Posts</a></h6>
                        <p class="text-secondary">{{ $experience->Post }}</p>
                        <p class="text-muted"><span class="text-secondary font-weight-bold"></span></p>
                        <img src="{{ URL::asset("storage/image/".$experience->Img) }}" alt="" style="height:15rem; width:30rem;">
                    </div>


                </div>
            </div>
        </div>

        @endforeach
    </section>
@endsection
