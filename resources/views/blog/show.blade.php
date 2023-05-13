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

    <br/><br/>
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
    
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

<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 w-1/2">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-8 px-12 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Post Comment') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('comment') }}">
                    @csrf

                    <input type="hidden" name="blog_id" value="{{$post->id}}"/>

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <textarea
                    name="comment_text"
                    placeholder="Comment..."
                    class="py-20 bg-transparent block border-2 w-full h-40 text-xl outline-none"></textarea>


                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Submit') }}
                        </button>

                    </div>
                </form>

            </section>
        </div>
    </div>
</main>


@endsection 