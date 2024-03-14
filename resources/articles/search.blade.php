@extends('layouts.app')

@section('content')
<form action="{{ url('search'}}" method="GET">
                    <input type="text" name="search" placeholder="Find Articles">
                    <button type="submit">Search</button>    
                </form>
                <h2>Search Results</h2>
                <ul>
                    @foreach($articles as $article)
                            <li><a href="{{ url('/article/' . $article->id) }}">{{ $article->title }}</a></li>
                    @endforeach
                </ul>
            @else
            <p>No article exists with that name.</p>
            @endif
                </body>
            </section>
        </div>
    </div>
</main>a
@endsection
