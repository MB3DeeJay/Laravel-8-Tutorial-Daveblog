@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Laravel developer?
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read more
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="img/samsung-note-5-blue.jpg" width="400" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Master Laravel on mobile!
            </h2>

            <p class="py-8 text-gray-500 text-sm">
                The power of Laravel 8, now on mobile!
            </p>

            <p class="font-extrabold text-gray-600 text-sm pb-9">
                If you can dream it, you can code something great!  Mobile platforms showcase the power of Laravel in eCommerce, so you can take orders, track shipments, and keep customers connected in real time, from anywhere!
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl">
                FInd out more
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-lg">
            I'm currently learning:
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Mobile Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-sm text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            I think he's going to replace this with content from an actual post, so I'm going to fake it
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    php
                </span>
                <h3 class="text-xl font-bold py-10">
                    Dummy text that will also get replaced with post content
                </h3>
                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more
                </a>
            </div>
        </div>
        <div>
            <img src="img/samsung-note-5-blue.jpg" width="400" alt="">
        </div>
    </div>


@endsection
