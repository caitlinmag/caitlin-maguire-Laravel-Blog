@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Comments
        </h1>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <h2 class="text-gray-700 font-bold pb-4">
       Add Your Own Comments
    </h2>

    <form>
        <span class="font-bold italic text-gray-800">Comment Title: </spa>
        <input type="text" name="comment-title" placeholder="Enter Comment Title"
            class="block border-b-2 w-full h-20 text-xl outline-none">
            <span class="font-bold italic text-gray-800" font-size: 1rem; font-family:>Comment Body:</span>
        <textarea name="py-14" placeholder="Comment Body"
            class="py-20 bg-white block border-b-2 w-full h-60 text-xl outline-none"></textarea>
        <button type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Comment
        </button>

        <h3 class="comment-date">
            Commented on: 14/03/2024
        </h3>
        <h3 class="user-name">
            By Caitlin
        </h3>

    </form>
    </form>
</div>
<a href="" class="btn btn-primary btn">Edit</a>
<a href="" class="btn btn-primary btn">Delete</a>

</div>

</div>
</div>

@endsection