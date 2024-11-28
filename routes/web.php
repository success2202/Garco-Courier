<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ManageBlogsController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\AdminShippingController;
use App\Http\Controllers\AdminDashboardController;

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

Route::get('/',[AppController::class,'index'])->name('app.index');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'manage', 'as' => 'admin.'], function(){ 
    Route::middleware(['auth'])->group(function(){
    Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
    Route::get('/index', [AdminDashboardController::class, 'Index'])->name('home');

    Route::controller(ManagePagesController::class)->group(function(){
        Route::get('/pages', 'Index')->name('manage.pages');
        Route::get('/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        // Route::get('/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        // Route::get('/pages/disable/{id}',  'PagesDisable')->name( 'PagesDisable');
        // Route::get('/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(ManageBlogsController::class)->group(function(){
        Route::get('/blog', 'Index')->name('blogs.index');
        Route::get('/blog/create', 'BlogsCreate')->name('BlogsCreate');
        Route::post('/blog/store', 'BlogsStore')->name('BlogsStore');
        Route::get('/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
        Route::post('/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
        Route::get('/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
        Route::get('/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
        Route::get('/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
    });

    Route::controller(SettingsController::class)->group(function(){
        Route::get('/settings/index', 'Index')->name('settings.index');
        Route::get('/settings/testimonials', 'Testimonials')->name('settings.testimonials');
        Route::get('/settings/socials', 'Socials')->name('settings.socials');
        // Route::get('/settings/about', 'Abouts')->name('settings.abouts');
        Route::get('/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
        Route::post('/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
        Route::get('/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
        Route::post('/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
        Route::get('/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
        Route::post('/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
        Route::post('/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
        Route::get('/admin/user', 'UserAccount')->name('userAccount');
        Route::post('/admin/uuser/account', 'UpdateAccount')->name('UpdateAccount');
       
    });

    Route::controller(AdminShippingController::class)->group(function () {

        // Route::get('/courier/index', 'CourierIndex')->name('courier.index');
        Route::get('/courier/create', 'CreateShippingInfo')->name('courier.create');
         Route::post('courier/store', 'ShipmentStore')->name('courier.store');
        // Route::get('/courier/createReciept', 'createCourierReciept')->name('courier.createReciept');
        // Route::post('/courier/reciept', 'GenerateReciept')->name('courier.reciept');
        // Route::get('/courier/delete/{id}', 'DeleteCourier')->name('courier.delete');
       
        Route::get('courier/edit/{id}', 'ShipmentEdit')->name('courier.edit');
        Route::post('courier/update/{id}', 'ShipmentUpdate')->name('courier.update');
        Route::get('/tracking/create/{id}', 'Tracking')->name('courier.tracking');
        Route::post('/tracking/store', 'TrackingStore')->name('tracking.store');
        Route::get('/courier/index', 'Index')->name('courier.index');
        Route::get('/courier/tracking/details/{id}', 'TrackingDetails')->name('courier.tracking.details');
        // Route::get('/courier/tracking/edit/{id}', 'TrackingEdit')->name('courier.tracking.edit');
        Route::post('/courier/tracking/update/{id}', 'UpdateTracking')->name('tracking.update');

         //seaching shipment information
         Route::get('/search', 'Search')->name('SearchShipment');
    
        
    
        });
});
});
Route::controller(HomepageController::class)->group(function ()
{
    Route::get('/', 'Index')->name('users.index');
    Route::get('/about-us', 'AboutUs')->name('users.about');
    Route::get('/contact-us', 'ContactUs')->name('users.contact');
    Route::get('/services', 'Services')->name('users.services');
    Route::get('/services-details/{id}', 'ServiceDetails')->name('users.service.details');
    Route::get('/blogs', 'Blogs')->name('users.blogs');
    Route::get('/blog-details/{id}', 'BlogDetails')->name('users.blog.details');
    Route::post('/contact/form', 'ContactForm')->name('contact-us');
    Route::get('/fleet', 'Fleet')->name('users.fleet');
    Route::get('/testimonials', 'Testimonials')->name('users.testimonials');
    Route::get('/quick-quote', 'QuickQuote')->name('users.quote');
    Route::get('/tracking', 'Track')->name('users.track');
});

Route::controller(ShipmentController::class)->group(function() 
{
    Route::get('/courier/tracking/index', 'Tracking')->name('users.courier.tracks');
    Route::post('/courier/tracking', 'Index')->name('users.courier.index');
});

