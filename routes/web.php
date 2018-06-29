<?php
use App\Post;
use App\User;
use App\Country;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('/', function () {
    return view('welcome');
});
Route::get('/learning', function () {
    return view('learning');
});

Route::get('/learning2', function () {
    return view('learning2');
});
//
//
//
//Route::get('/about', function () {
//  return view('contact');
//});
////
//
//
//
//
//Route::get('/contact', function () {
//    return "hi im a contact";
//});
//
//
//
//
//Route::get('/post/{id}/{name}', function ($id,$name) {
//    return "this is post number". $id." ". $name;
//
//
//});
//
//Route::get('admin/posts/example',array('as'=>'admin.home', function() {
//    $url=route('admin.home');
//    return "this url is ".$url;

//    Route::get('/posts', 'PostController@index');



//Route::resource('posts', 'PostController');


//Route::get('/contact', 'PostController@contact');
//
////
//Route::get('post/{id}/{name}/{password}', 'PostController@show_post');


//----------------------------------------
//INSERTING DATA INTO THE DATABASE
//----------------------------------------
//
//use Illuminate\Support\Facades\DB;

//Route::get('/insert', function() {
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP is awesome with Edwin','Laravel is number one, Period']);
//
//});


//----------------------------------------
//COLLECTING DATA FROM THE DATABASE
//----------------------------------------


//Route::get('/read', function() {
//
//$results = DB::select('select * from posts where id=?', [1]);
//
//foreach($results as $post){
//
//    return $post->content;
//}
//
//
//});




//----------------------------------------
//UPDATE DATA FROM THE DATABASE
//----------------------------------------

//Route::get('/update',function() {
//
//    $updated = DB::update('update posts set title = "Danster" where id =?', [1]);
//
//    return $updated;
//
//
//});





//----------------------------------------
//DELETE DATA FROM THE DATABASE
//----------------------------------------
//
//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from posts where id =?', [1]);
//
//    return $deleted;
//
//});





//----------------------------------------
//ELOQUENT
//----------------------------------------

//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//    foreach($posts as $post) {
//        return $post->title;
//    }
//
//});




//Route::get('/find', function(){
//
//    $post = Post::find(3);
//
//    return $post->title;

//    foreach($posts as $post) {
//        return @post->title;


//});
//


//----------------------------------------
//FIND BY ORDER WHICH ID FROM DATABASE
//----------------------------------------


//Route::get('/findwhere',function(){
//
//    $posts = Post::where('id', 7)->orderBy('id','desc')->take(1)->get();
//
//    return  $posts;
//
//
//});



//Route::get('/findmore', function(){
//
//
////    $posts = Post::findOrFail(1);
////
////    return $posts;
//
//    $posts = Post::where('users_count','<', 50)->firstOrFail();
//
//    return $posts;
//
//
//});


//----------------------------------------
//Eloquent INSERT WITH MULTIPLE ENTRIES
//----------------------------------------

//Route::get('/basicinsert', function(){
//
//    $post = new Post;
//
//    $post->title = 'New Eloquent title insert';
//    $post->content = 'Wow Eloquent is realy cool, look at this content';
//
//    $post-> save();
//
//});


//----------------------------------------
//Eloquent ADDING DATA BUT WONT WORK AS ITS NOT SAFE 2 BELOW IS CORRECT
//----------------------------------------

//Route::get('/create', function() {
//
//    Post::create(['title' => 'the create method', 'content' => 'Wow i am learning alot with Edwin']);
//
//});





//Route::get('/create', function(){
//
//
//
//    Post::create(['title'=>'the create method', 'content'=>'Wow iam learning alot with Edwin']);
//
//
//
//
//});


//----------------------------------------
//Eloquent UPDATE DATA
//----------------------------------------

//Route::get('/update', function(){
//
//    Post::where('id',7)->where('is_admin', 0)->update(['title'=>'New PHP Title', 'content'=>'I love my instructor']);
//
//});

//----------------------------------------
//Eloquent DELETE DATA
//----------------------------------------

//Route::get('/delete',function(){
//
//    $post = Post::find(3);
//    $post->delete();
//
//
////});
//
//Route::get('/delete2',function(){
//
//    Post::destroy([4,5]);
//    Post::where('is_admin', 0)->delete();
//
//
//
//});


//----------------------------------------
//Eloquent SOFT DELETE DATA
//----------------------------------------
//
//Route::get('/softdelete', function(){
//
//
//
//});




//////----------------------------------------
//////Eloquent RELATIONSHIPS (view everything) ONE 2 ONE
//////----------------------------------------
////
//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post;
//
//});

////----------------------------------------
////Eloquent RELATIONSHIPS (view only specific column) 1/2
////----------------------------------------

//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post->title;
//
//});
//
//


////----------------------------------------
////Eloquent RELATIONSHIPS (view only specific column) 2/2
////----------------------------------------
//Route::get('/post/{id}/user', function($id){
//
//    return Post::find($id)->user->name;
//
//});




//////----------------------------------------
//////Eloquent RELATIONSHIPS (view everything) ONE 2 MANY
//////----------------------------------------
//Route::get('/posts', function(){
//
//    $user = User::find(1);
//
//    foreach($user->posts as $post){
//
//       echo $post->title. "<br>";
//    }
//});




//MANY TO MANY RELATIONSHIP

//Route::get('/user/{name}/role', function($id){
//
//    $user = User::find($id);
//
//    foreach($user->roles as $role){
//
//        return $role->name;
//    }
//
//});

 // Accessing the intermediate table / pivot;

//Route::get('user/pivot', function(){
//
//    $user = User::find(1);
//
//    foreach($user->roles as $role){
//
//        return $role->pivot;
//    }
//
//});
//
//Route::get('/user/country',function(){
//
//    $country = Country::find(2);
//
//    foreach($country->posts as $post) {
//
//        return $post->title;
//    }
//
//});

