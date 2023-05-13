@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to Learn Latest Technology from Industry experts?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/backend_dev.jpg') }}" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                What is back-end development?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Back-end development means working on server-side software, which focuses on everything you can't see on a website. Back-end developers ensure the website performs correctly, focusing on databases, back-end logic, application programming interface (APIs), architecture, and servers
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Technology Blogs and Artical on
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Full Stack Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Web Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Mobile App Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                What is Mobile App Development?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Mobile application development has been trending upward for years. This subcategory of software development specifically refers to applications that run on mobile devices.

                Mobile apps are built for different operating systems, like iOS and Android. By leveraging the built-in features of smartphones, apps offer an enhanced user experience compared to mobile web browsing.
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
        <div>
            <img src="{{ asset('images/mobile_app.jpg') }}" width="700" alt="">
        </div>
    </div>
@endsection