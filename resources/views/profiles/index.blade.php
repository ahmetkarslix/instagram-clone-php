@extends('layouts.app')

@section('content')
<div class="container" style="padding-left: 200px; padding-right: 150px">
   <div class="row">
       <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" >
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4" style="padding-top: 8px">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" style="text-decoration:none">Add New Post</a>
                @endcan

            </div>

           @can('update', $user->profile)
               <a href="/profile/{{ $user->id }}/edit" style="text-decoration:none">Edit Profile</a>
           @endcan

           <div class="d-flex">
                <div style="padding-right: 25px;"><strong>{{ $postCount }}</strong> gönderi</div>
               <div style="padding-right: 25px;"><strong>{{ $followersCount }}</strong> takipçi</div>
               <div style="padding-right: 25px;"><strong>{{ $followingCount }}</strong> takip</div>
           </div>
           <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div><a href="#" style="text-decoration:none; color:#385898">{{ $user->profile->url }}</a> </div>
       </div>
   </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
