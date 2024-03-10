@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1>
Fashion of 2024
                </h1>
                 <!-- <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>  -->
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="images\collage.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
</h2> 
            <img src="images\collage2.png" width="700" height="400" alt="">

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                View Trends
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
    My favourites this season from...         
    </h2>

        <span class="font-extrabold block text-4xl py-1">
Trends
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Shoes
        </span>
        <span class="font-extrabold block text-4xl py-1">
Coats        </span>
        <span class="font-extrabold block text-4xl py-1">
 to summer predictions        </span>
    </div>

    <div class="text-center py-15">
        <h2 class="text-4xl font-bold py-10">
            Recent Fashion News
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
        Women’s Resort 2024 Fashion Trend Report
    </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
News
            </span>

                <h3 class="text-xl font-bold py-10">
                    <p>
                As the fashion industry continues to evolve, Resort collections have become an important opportunity for  brands to showcase their creativity while setting the tone for the upcoming year.
</p>
<p>
                 Resort 2024 has emerged as a season celebrating boldness, strength, and a fearless embrace of shining individuality.
</p>
<p>
                 In this blog post, we’ll explore the trends spotted in the Resort 2024 collections, showcasing examples from our impressive roster of JOOR clients such as Victoria Beckham, Chloé, Gabriela Hearst, Khaite and Stella McCartney, and providing you with insights and inspiration as you build your assortments this season.              
</p>
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection