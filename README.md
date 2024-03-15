Database name: laravelblog

Commands:
php artisan serve
npm run watch

My Blog theme:
Fashion\clothing
I took this opportunity to create a blog on a topic that I have a great interest in, I like keeping up to date
with what is trending in the fashion world and I love the design aspect of software development. 
I have went for what I consider a minimal, clean and aesthetically pleasing design with my colour scheme.

CSS:
For my css I have used a combination of my own css in the mainStyles file, and tailwind css throughout. 


My changes to the README file:
Fashion blog websites I have taken inspiration from: 
https://www.joor.com/insights/on-trend-womens-resort-2024-fashion-trend-report
https://glamazondiaries.com/ 

Favicon Image: 
https://www.vectorstock.com/royalty-free-vector/clothes-hanger-icon-vector-7701085

Heart Icon:
If I had more time and more knowledge on php I would like to create a page for "liked posts" which would allow users
to click the heart icon to add to their liked posts.
https://uiverse.io/barisdogansutcu/tender-dingo-64

Tutorial I used to create the comments, however this code did not work properly:
https://www.youtube.com/watch?v=rsND5Z4Edw0&t=1375s

Code from my comments.index.blade:  I took it out of the file as even when it is commented out I am still getting an error

<!-- @foreach ($comments as $comment)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <h2 class="text-gray-700 font-bold text-5xl pb-4">
        {{ $comment->title }}
    </h2>
    <div class="w-4/5 m-auto py-10">
        <form action="comments" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title..."
                class="text-red block border-b-2 w-full h-20 text-xl outline-none">

            <textarea name="comment_body" placeholder="Comment Body..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <button type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Comment
            </button>
        </form>
    </div>
    <h3 class="user-name">
        @if($comment->user)
        {{ $comment->user->name}}
        @endif
        <small class="ms-3 text">Commented on: {{$comment->created_at->format('d-m-Y')}}</small>
    </h3>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! $comment->comment_body !!}
    </p>
</div>
<a href="" class="btn btn-primary btn">Edit</a>
<a href="" class="btn btn-primary btn">Delete</a>
@endforeach

<div class="card body">
    <h3 class="card-title"> Leave a comment </h3> 
    <form action="/comments" method="POST">
        <textarea name="comment_body" class="form-control" rows="3" required></textarea>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div> 

<div class="card-card-body">
    <div class="detail-area">
        <div class="user-area">
            <h3 class="user-name">
             @if($comments->user)
                {{ $Comment->user->name}}
            @endif 
                <small class="ms-3 text">Commented on: {{$comment->created_at->format('d-m-Y')}}</small>
            </h3>
            <p class="user-comment">
                {!! $comment->comment_body !!}
            </p>-->