## Laravel 8 Complete Blog

This repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```
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

The website I used to help me add in a functioning search bar:
https://www.educative.io/answers/how-to-implement-search-in-laravel

put this code back in for the search bar
<!-- List items for the search bar -->
 <ul class="list-group mt-3">
@forelse($users as $user)
    <li class="list-group-item">{{ $user->name }}</li>
@empty
    <li class="list-group-item list-group-item-danger">User Not Found</li>
@endforelse
</ul> 

currently not working

and this in the routes 


Route::get('/', function(){

    //checking for user input
    if(request('search')){
        $users = User::where('name', 'like', '%' .request('search') . '%')->get();
    }else{
        $users = User:: all();
    }
    
    return view('home')->with('users', $users);
});