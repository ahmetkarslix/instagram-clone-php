@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3" style="padding-right: 50px" >
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pb-4 pt-2">
                <div class="col-6 offset-3">
                    <div>
                        <p>
                        <span style="font-weight: bold">
                            <a href="/profile/{{ $post->user->id }}" style="color: #18181b; text-decoration:none">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span>  {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div >
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
