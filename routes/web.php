<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{myProfileController, AuthController, User\UserProfileController};
use App\Http\Controllers\Auth\adminLoginController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\User\UserContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MyCaseController;
use App\Http\Controllers\Admin\WorkshopController;
use App\Http\Controllers\Admin\RegisteredController;
use App\Http\Controllers\User\UserExperienceController;
use App\Http\Controllers\User\UserBlogController;
use App\Http\Controllers\User\UserCaseController;
use App\Http\Controllers\User\UserWorkshopController;




// Admin Routes
Route::get('/admin/dashboard', [AdminProfileController::class, "dashboard"])->name('dashboard');


Route::get('/admin/ca', function () {
    return view('admin/ca');
});

Route::get('/admin/profile', [myProfileController::class, "myProfile"])->name('myProfile');



Route::resource(name:'contacts', controller:ContactController::class);

Route::get('contacts/forcedelete/{id}',[ContactController::class,'forceDelete'])->name(name:'contacts.forcedelete');

Route::get('contacts/restore/{id}',[ContactController::class,'restore'])->name(name:'contacts.restore');

Route::resource(name:'users', controller:UserController::class);
Route::get('users/showDeletedUsers',[UserController::class,'showDeletedUsers'])->name(name:'users.showDeletedUsers');
Route::get('contacts/showDeletedContacts',[ContactController::class,'showDeletedContacts'])->name(name:'contacts.showDeletedContacts');
Route::get('experiences/showDeletedContacts',[ExperienceController::class,'showDeletedExperiences'])->name(name:'experiences.showDeletedExperiences');

Route::get('users/restore/{id}',[UserController::class,'restore'])->name(name:'users.restore');

Route::get('users/forcedelete/{id}',[UserController::class,'forceDelete'])->name(name:'users.forcedelete');

Route::resource(name:'admins', controller:AdminProfileController::class);

Route::resource(name:'experiences', controller:ExperienceController::class);

Route::get('experiences/forcedelete/{id}',[ExperienceController::class,'forceDelete'])->name(name:'experiences.forcedelete');

Route::get('experiences/restore/{id}',[ExperienceController::class,'restore'])->name(name:'experiences.restore');

Route::get('adminLogin', [adminLoginController::class, 'create'])
->name('adminLogin');
Route::post('adminLogin', [adminLoginController::class, 'store']);

//Route::middleware(['auth','is_admin'])->group(function(){

   // Route::get('/admin/dashboard', [AdminProfileController::class, "dashboard"])->name('dashboard');

//});

Route::middleware([])->group(function () {

Route::get('/admin/dashboard', [AdminDashboardController::class, "dashboard"])->name('dashboard');


});


// User Routes
Route::get('/', function () {
    return view('user/index');
})->name('indexUser');
// Cases
Route::get('/mainCases/{category}',[UserCaseController::class,'userIndex'])->name('mainCases');
Route::get('/cases/{id}',[UserCaseController::class,'userCase'])->name('cases');

//Blogs
Route::get('/blog/{id}', [UserBlogController::class, 'blogIndex'])->name('blog');
Route::get('/mainBlogs',[UserBlogController::class,'index'])->name('mainBlogs');
Route::get('/mainBlogs/{category}',[UserBlogController::class,'sort'])->name('mainBlogs');



Route::get('/signup', function () {
    return view('user/signup');
});
Route::get('/login', function () {
    return view('user/login');
});
Route::get('profile', function () {
    return view('user/profile');
});
Route::get('/forum', function () {
    return view('user/forum');
});

//Experience
Route::resource('experience',UserExperienceController::class);
Route::get('/experienceAllPosts',[UserExperienceController::class, 'index'] );
Route::get('/experienceLatest',[UserExperienceController::class, 'latestPosts'] );
Route::get('experienceMyPostsDelete/{id}',[UserExperienceController::class,'destroy'])->name('experience.delete');
Route::get('experienceMyPostsEdit/{id}',[UserExperienceController::class,'edit'])->name('experience.edit');
Route::get('experienceMyPosts',[UserExperienceController::class,'myPosts']);

//Profile
//Route::POST('profile/{id}', [UserProfileController::class, 'update'])->name('profile.update');
Route::patch('profile/{id}', [UserProfileController::class, 'update'])->name('profile.update');



Route::resource('experience',UserExperienceController::class);

Route::resource('contact',UserContactController::class);

Route::resource('workshop',UserWorkshopController::class);





// **************************************

// Admin Routes

////////////////

Route::resource('/AdminCase', MyCaseController::class);
Route::resource('/AdminBlog', BlogController::class);
Route::resource('/Registered', RegisteredController::class);
Route::resource('/AdminWorkshop', WorkshopController::class);


////////////


require __DIR__.'/auth.php';
