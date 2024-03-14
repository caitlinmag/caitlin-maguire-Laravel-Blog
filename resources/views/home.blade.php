
@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>

            <h2>Comment Section</h2>
            <div class="comment-area">
        <h3 class="comment"> Leave a comment </h3>
        <form action="{{url('comments')}}" method="POST">
            <textarea name="comment_body" class="form-control" rows="3" required></textarea>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form> 
</div>
        <div class="user-area">
        <h3 class="user-name">User One
        <small class="ms-3 text">Commented on: 3-8-2022</small>
        </h3>
</div>
<a href="" class="btn btn-primary btn">Edit</button>
        <a href="" class="btn btn-primary btn">Delete</button>
</div>
    
        </section>
    </div>
</main>
@endsection
