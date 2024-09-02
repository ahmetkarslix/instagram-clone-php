@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <div class="col-8" style="padding-right: 50px">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div style="padding-right: 15px">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>
                        <div style="font-weight: bold">
                            <a href="/profile/{{ $post->user->id }}" style="color: #18181b; text-decoration:none">{{ $post->user->username }} •
                            </a>
                            <a href="#" class="pl-3" style="text-decoration:none">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span style="font-weight: bold">
                        <a href="/profile/{{ $post->user->id }}" style="color: #18181b; text-decoration:none">{{ $post->user->username }}
                        </a>
                    </span>  {{ $post->caption }}
                </p>

            </div>
        </div>
    </div>
@endsection
