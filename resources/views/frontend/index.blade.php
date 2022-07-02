@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    More news is waiting for you
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Discover now
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/08/18/27/startup-593341_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Moving offices: How do you capture a company’s culture in a physical space?

            </h2>

            <p class="py-8 text-gray-500 text-s">
                Quartz is moving—and documenting the process here on Medium

            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
               Like so many growing startups, Quartz has a space problem — specifically, that we keep running out of it. When we launched the business news organization in 2012, about 20 New York-based employees squeezed into a small office in SoHo. We outgrew it by the end of 2013 and moved to a much bigger headquarters near Union Square ...
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
            Blog Post Topics For You ...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Social media
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>


    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    What to call the conference rooms
                </span>

                <h3 class="text-xl font-bold py-10">
                    When we moved to our second office, which had five rooms, everyone was very excited to name them. Opinions were solicited, debates were had, votes were held. It proved to be the most controversial question about the office, more contentious even than the temperature.
                </h3>

                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/09/11/08/startup-594090_960_720.jpg" alt="">
        </div>
    </div>
@endsection
