<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\StaticTextController;
use App\Http\Controllers\StaticImagesController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HierarchyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\SubjectContentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\PolicyController;





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

/**
 * Home Routes
 */
Route::get('/Dashboard', [HomeController::class, 'index'])->name('home.index');
Route::put('/images/{identifier}', [StaticImagesController::class, 'update'])->name('update.image');
Route::put('/update-text/{identifier}', [StaticTextController::class, 'updateText'])->name('updateText');

Route::get('/', [HomeController::class, 'frontend'])->name('home.frontend');
Route::get('/news', [HomeController::class, 'allNews'])->name('news.index');
Route::get('/news/{slug}', [HomeController::class, 'singleNews'])->name('news.single');
Route::get('/news/archive/{link}', [HomeController::class, 'newsArchive'])->name('news.archive');

Route::get('/{slug}/event', [HomeController::class, 'singleEvents'])->name('frontEvent.show');
Route::get('/all-events', [HomeController::class, 'allEvents'])->name('all.events');

/**
 * Register Routes
 */
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

/**
 * Login Routes
 */
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

/**
 * Pages Routes
 */
Route::get('/vision', [PagesController::class, 'vision'])->name('pages.vision');
Route::get('/governance', [PagesController::class, 'governance'])->name('pages.governance');
Route::get('/community', [PagesController::class, 'community'])->name('pages.community');
Route::get('/student-council', [PagesController::class, 'council'])->name('pages.council');
Route::get('/career', [PagesController::class, 'career'])->name('pages.career');
Route::get('/facilities', [PagesController::class, 'facilities'])->name('pages.facilities');
Route::get('/scholarship', [PagesController::class, 'scholarship'])->name('pages.scholarship');
Route::get('/subjects', [PagesController::class, 'subjects'])->name('pages.subjects');
Route::get('/staffs', [PagesController::class, 'staff'])->name('pages.staff');
Route::get('/support', [PagesController::class, 'support'])->name('pages.support');
Route::get('/leaders', [PagesController::class, 'leadership'])->name('pages.leadership');
Route::get('/calendar', [PagesController::class, 'calendar'])->name('pages.calendar');
Route::get('/history', [PagesController::class, 'history'])->name('pages.history');
Route::get('/pastoral', [PagesController::class, 'pastoral'])->name('pages.pastoral');
Route::get('/chapel', [PagesController::class, 'chapel'])->name('pages.chapel');
Route::get('/curriculum', [PagesController::class, 'curriculum'])->name('pages.curriculum');
Route::get('/form6', [PagesController::class, 'form6'])->name('pages.form6');
Route::get('/primary', [PagesController::class, 'primary'])->name('pages.primary');
Route::get('/policy', [PagesController::class, 'policy'])->name('pages.policy');
Route::get('/lower', [PagesController::class, 'lower'])->name('pages.lower');
Route::get('/upper', [PagesController::class, 'upper'])->name('pages.upper');
Route::get('/activities', [PagesController::class, 'activities'])->name('pages.activities');
Route::get('/extra-curricular', [PagesController::class, 'extra'])->name('pages.extra');
Route::get('/sports', [PagesController::class, 'sports'])->name('pages.sports');
Route::get('/classics', [PagesController::class, 'classics'])->name('pages.classics');
Route::get('/boarding-life', [PagesController::class, 'boarding'])->name('pages.boarding');
Route::get('/accommodation', [PagesController::class, 'accommodation'])->name('pages.accommodation');
Route::get('/admissions', [PagesController::class, 'admission'])->name('pages.admissions');
Route::get('/vacancy', [PagesController::class, 'vacancies'])->name('pages.vacancy');
Route::get('/alumni', [PagesController::class, 'alumni'])->name('pages.alumni');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/exams-results', [PagesController::class, 'results'])->name('pages.exams');
Route::get('/child-protection', [PagesController::class, 'childProtection'])->name('pages.child.protection');

/**
 * Contact Routes
 */
Route::post('/contact-submit', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('send-php-mailer', [SendMailController::class, 'index'])->name('send.php.mailer');
Route::post('send-php-mailer-submit', [SendMailController::class, 'store'])->name('send.php.mailer.submit');

Route::group(['middleware' => ['auth']], function() {

    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    /**
     * User Profile Routes
     */
    Route::get('/users/editProfile', [UsersController::class, 'editProfile'])->name('users.editProfile');
    Route::put('/users/updateProfile', [UsersController::class, 'updateProfile'])->name('users.updateProfile');

    /**
     * User Management Routes
     */
    Route::group(['prefix' => 'users'], function() {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');
        Route::get('/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/create', [UsersController::class, 'store'])->name('users.store');
        Route::get('/{user}/show', [UsersController::class, 'show'])->name('users.show');
        Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
        Route::patch('/{user}/update', [UsersController::class, 'update'])->name('users.update');
        Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
    });

    /**
     * Events Routes
     */
    Route::group(['prefix' => 'events'], function() {
        Route::get('/', [EventsController::class, 'index'])->name('events.index');
        Route::get('/create', [EventsController::class, 'create'])->name('events.create');
        Route::post('/store', [EventsController::class, 'store'])->name('events.store');
        Route::get('/{id}/show', [EventsController::class, 'show'])->name('events.show');
        Route::get('/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');
        Route::patch('/{id}', [EventsController::class, 'update'])->name('events.update');
        Route::delete('/{id}', [EventsController::class, 'destroy'])->name('events.destroy');
    });

    /**
     * Posts Routes
     */
    Route::group(['prefix' => 'posts'], function() {
        Route::get('/', [PostsController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
        Route::post('/store', [PostsController::class, 'store'])->name('posts.store');
        Route::get('/{post}/show', [PostsController::class, 'show'])->name('posts.show');
        Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
        Route::patch('/{post}/update', [PostsController::class, 'update'])->name('posts.update');
        Route::delete('/{post}/delete', [PostsController::class, 'destroy'])->name('posts.destroy');
    });

    /**
     * Hierarchy Routes
     */
    Route::group(['prefix' => 'hierarchy'], function() {
        Route::get('/', [HierarchyController::class, 'index'])->name('hierarchy.index');
        Route::get('/create', [HierarchyController::class, 'create'])->name('hierarchy.create');
        Route::post('/store', [HierarchyController::class, 'store'])->name('hierarchy.store');
        Route::get('/{id}/edit', [HierarchyController::class, 'edit'])->name('hierarchy.edit');
        Route::patch('/{id}', [HierarchyController::class, 'update'])->name('hierarchy.update');
        Route::delete('/{id}', [HierarchyController::class, 'destroy'])->name('hierarchy.destroy');
    });

    /**
 * Document Routes
 */
Route::group(['prefix' => 'documents'], function() {
    Route::get('/', [DocumentController::class, 'index'])->name('documents.index');
    Route::get('/create', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('/store', [DocumentController::class, 'store'])->name('documents.store');
    Route::get('/{document}/show', [DocumentController::class, 'show'])->name('documents.show');
    Route::get('/{document}/edit', [DocumentController::class, 'edit'])->name('documents.edit');
    Route::put('/{document}', [DocumentController::class, 'update'])->name('documents.update');
    Route::delete('/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');
});


    /**
     * Roles and Permissions Routes
     */
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
        Route::resource('pictures', PictureController::class);
        Route::delete('/delete-multiple', [PictureController::class, 'deleteMultiple'])->name('pictures.deleteMultiple');
        Route::resource('results', ResultController::class);
        Route::resource('subjectscontent', SubjectContentController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('leadership', LeadershipController::class);
        Route::resource('policies', PolicyController::class);



});
