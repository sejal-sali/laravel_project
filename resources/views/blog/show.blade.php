@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@if($post->comment!=null)
@foreach ($post->comment as $comment)


<div class="sm:grid grid-cols-1 gap-10 w-4/5 mx-auto py-15 border-b border-gray-200 bg-white pl-5">
    <div class="flex items-center space-x-4">
        <img class="w-10 h-10 rounded-full" src="{{ asset('images/user.png') }}" alt="">
        <div class="font-medium dark:text-white">
            <div> {{ $comment->name }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Comment on {{ date('jS M Y', strtotime($comment->updated_at)) }}</div>
        </div>
    </div>

    <p class="text-xl text-gray-700 pt-1 pb-1 leading-8 font-light">
        {{ $comment->comment_text }}
    </p>


</div>
@endforeach
@endif




@endsection 