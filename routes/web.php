<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{myProfileController,AuthController};
use App\Http\Controllers\Auth\adminLoginController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\ExperienceController;

Route::get('/', function () {
    return view('index');
})->name('indexUser');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// User Routes
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/cases', function () {
//     return view('layouts.cases');
// });
// Route::get('/mainCases', function () {
//     return view('layouts.mainCases');
// });
// Route::get('/blogs', function () {
//     return view('layouts.blogs');
// });
// Route::get('/mainBlogs', function () {
//     return view('mainBlogs');
// });
// Route::get('/workshop', function () {
//     return view('workshop');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('/forum', function () {
//     return view('forum');
// });



// Route::get('/workshop', function () {
//     return view('workshop');
// });



// Admin Routes
Route::get('/admin/dashboard', [AdminProfileController::class, "dashboard"])->name('dashboard');


Route::get('/admin/ca', function () {
    return view('admin/ca');
});

Route::get('/admin/profile', [myProfileController::class, "myProfile"])->name('myProfile');

//Route::get('/admin/login', [AuthController::class, "getLogin"])->name('getLogin');
//Route::post('/admin/login', [AuthController::class, "postLogin"])->name('postLogin');



Route::get('/admin/case', function () {
    return view('admin/case/case_view');
});
Route::get('/admin/blog', function () {
    return view('admin/blog/blog_view');
});
//Route::get('/admin/message', function () {
   // return view('admin/message/message_view');
//});
Route::get('/admin/workshop', function () {
    return view('admin/workshop/workshop_view');
});
//Route::get('/admin/users', function () {
    //return view('admin/users/users_view');
//});
//Route::get('/admin/feedback', function () {
  //  return view('admin/feedback/feedback_view');
//});
Route::get('/admin/blogform', function () {
    return view('admin/blog/blog_create');
});
Route::get('/admin/caseform', function () {
    return view('admin/case/case_create');
});
//Route::get('/admin/usersform', function () {
    //return view('admin/users/users_create');
//});

Route::resource(name:'contacts', controller:ContactController::class);

Route::get('contacts/forcedelete/{id}',[ContactController::class,'forceDelete'])->name(name:'contacts.forcedelete');

Route::get('contacts/restore/{id}',[ContactController::class,'restore'])->name(name:'contacts.restore');

Route::resource(name:'users', controller:MyUserController::class);
Route::get('users/showDeletedUsers',[MyUserController::class,'showDeletedUsers'])->name(name:'users.showDeletedUsers');
Route::get('contacts/showDeletedContacts',[ContactController::class,'showDeletedContacts'])->name(name:'contacts.showDeletedContacts');
Route::get('experiences/showDeletedContacts',[ExperienceController::class,'showDeletedExperiences'])->name(name:'experiences.showDeletedExperiences');

Route::get('users/restore/{id}',[MyUserController::class,'restore'])->name(name:'users.restore');

Route::get('users/forcedelete/{id}',[MyUserController::class,'forceDelete'])->name(name:'users.forcedelete');

Route::resource(name:'experiences', controller:ExperienceController::class);

Route::get('experiences/forcedelete/{id}',[ExperienceController::class,'forceDelete'])->name(name:'experiences.forcedelete');

Route::get('experiences/restore/{id}',[ExperienceController::class,'restore'])->name(name:'experiences.restore');

Route::get('adminLogin', [adminLoginController::class, 'create'])
->name('adminLogin');
Route::post('adminLogin', [adminLoginController::class, 'store']);
Route::middleware(['auth','verified','admin'])->group(function () {

Route::get('/admin/dashboard', [AdminProfileController::class, "dashboard"])->name('dashboard');


});



require __DIR__.'/auth.php';
