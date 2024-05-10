@extends('user.sub_layouts.master')

@section('title')
    Experience | Latest Posts
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')

    <section id="posts">

        @foreach ($latestPosts as $latestPost)
            <div class="card mb-2">

                <div class="card-body p-2 p-sm-3">
                    <div class="media forum-item">
                        <div class="media-body">
                            <div class="d-flex align-items-center">
                                @auth
                                    <img src="{{ Auth::user()->img ? asset('storage/image/'.Auth::user()->img) : asset('image/profile.jpg') }}"
                                         class="mr-3 rounded-circle" width="50" alt="User" />
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                           class="text-body ms-3">{{Auth::user()->name}}</a></h6>
                                @endauth
                            </div>
                            <p class="text-secondary">{{ $latestPost->Post }}</p>
                            <img src="{{ URL::asset("storage/image/".$latestPost->Img) }}" alt="" style="height:15rem; width:30rem;">
                            <p class="text-muted mt-2">Posted at <span class="text-secondary font-weight-bold">{{ $latestPost->created_at->format('M d, Y') }}</span></p>

                        </div>
                    </div>
                </div>

            </div>
        @endforeach

    </section>
@endsection
