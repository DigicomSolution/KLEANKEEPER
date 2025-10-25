<?php



use Illuminate\Support\Facades\Route;



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



Auth::routes();


Route::get('/', 'PageController@home')->name('home');
Route::get('/landing', 'PageController@landing')->name('landing');
Route::post('/landing', 'PageController@landingPost')->name('landingPost');
Route::post('/landing-thank-you', 'PageController@landingThankyou')->name('landingThankyou');

Route::get('/home-new', 'PageController@home_new')->name('home_new');

Route::get('services', 'PageController@services')->name('services');


Route::get('sitemap/', 'SitemapController@index')->name('sitemap.index');
Route::get('/sitemap/blogs', 'SitemapController@blogs')->name('sitemap.blogs');
Route::get('/sitemap/services', 'SitemapController@services')->name('sitemap.services');
Route::get('/sitemap/static_pages', 'SitemapController@static_pages')->name('sitemap.static_pages');


Route::get('services/domestic-cleaning', 'PageController@commercial_cleaning')->name('service.commercial_cleaning');

Route::get('services/commercial-cleaning/{slug}', 'PageController@commercial_cleaning_child')->name('service.commercial_cleaning_child');


Route::get('services/{slug}', 'PageController@service_detail')->name('service.detail');

Route::get('company', 'PageController@company')->name('company');

Route::get('contact', 'PageController@contact')->name('contact');

Route::get('pricing', 'PageController@pricing')->name('pricing');

Route::get('partner', 'PageController@partner')->name('partner');

//Route::get('commercial_cleaning', 'PageController@commercial_cleaning')->name('commercial_cleaning');

Route::get('about', 'PageController@about')->name('about');



Route::post('contact', 'LeadController@contact');



Route::get('contact-modal', function () {

    return view('client.modal.contact');
});

Route::get('thank-you', function () {

    return view('client.pages.thank_you');
});

Route::get('error', function () {

    return view('client.pages.error');
});



Route::get('blog', 'BlogController@index')->name('blog.index');

Route::get('blog/{slug}', 'BlogController@blog_detail')->name('blog.detail');









Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'AdminController@login');

    Route::group(['middleware' => ['isAdmin']], function () {

        Route::get('/dashboard', ['as' => 'admin.dashboard.index', 'uses' => 'AdminController@index']);



        Route::get('change-password', array('as' => 'admin.change-password', function () {

            return View::make('admin.change_password');
        }));

        Route::post('summernote/image/{name?}', 'PluginController@summernote_image_upload')->name('admin.summernote.image');



        Route::get('manage/home', 'HomeController@home');
        Route::get('manage/blogs', 'HomeController@blogs');

        Route::get('manage/app', 'HomeController@app');

        Route::get('manage/about', 'HomeController@about');

        Route::get('manage/about-us', 'HomeController@about_us');

        Route::get('manage/contact-us', 'HomeController@contact_us');

        Route::get('manage/hdiwork', 'HomeController@hdiwork');

        Route::get('manage/brands', 'HomeController@brands');

        Route::get('manage/settings', 'HomeController@settings');

        Route::get('manage/seo', 'HomeController@seo');

        Route::get('manage/service', 'HomeController@service');

        Route::get('manage/partner', 'HomeController@partner');

        Route::post('keys/save', 'HomeController@keys_save');

        Route::post('key/remove', 'HomeController@key_remove')->name('remove.key');



        Route::post('/changePassword', 'AdminController@changePassword')->name('admin.update-password');



        Route::get('/widgets', ['as' => 'admin.widgets.index', 'uses' => 'AdminController@widgets']);

        Route::post('/widgets/save', 'AdminController@save_widget')->name('admin.widgets.save');



        //slider

        Route::get('/sliders/edit/{id}/{type?}', 'SliderController@edit')->name('admin.sliders.edit');



        Route::get('/sliders/destroy/{id}', 'SliderController@destroy')->name('admin.sliders.destroy');



        Route::get('/sliders/create', 'SliderController@create')->name('admin.sliders.create');



        Route::post('/sliders/update/{id}', 'SliderController@update')->name('admin.sliders.update');



        Route::post('/sliders/update-photo/{id}', 'SliderController@updatePhoto')->name('admin.sliders.update-photo');



        Route::post('/sliders/store', 'SliderController@store')->name('admin.sliders.store');



        Route::get('/sliders/photo-edit/{id}/{slider_id}/{type}', 'SliderController@photo_edit')->name('admin.sliders.photo_edit');



        Route::get('/sliders/photo-delete/{slider_id}/{id}/{type}', 'SliderController@photo_delete')->name('admin.sliders.photo_delete');



        Route::get('/sliders', 'SliderController@index')->name('admin.sliders.index');





        //clients

        Route::get('clients', 'ClientController@index')->name('admin.clients.index');

        Route::get('clients/create', 'ClientController@create')->name('admin.clients.create');

        Route::get('clients/edit/{id}/{tab?}', 'ClientController@edit')->name('admin.clients.edit');

        Route::get('clients/destroy/{id}', 'ClientController@destroy')->name('admin.clients.destroy');

        Route::get('clients/change-status/{id}', 'ClientController@changeStatus')->name('admin.clients.change-status');

        Route::post('clients/store', 'ClientController@store')->name('admin.clients.store');

        Route::post('clients/update', 'ClientController@update')->name('admin.clients.update');



        //services

        Route::get('services', 'ServiceController@index')->name('admin.services.index');

        Route::get('services/create', 'ServiceController@create')->name('admin.services.create');

        Route::get('services/edit/{id}/{tab?}', 'ServiceController@edit')->name('admin.services.edit');

        Route::get('services/destroy/{id}', 'ServiceController@destroy')->name('admin.services.destroy');

        Route::get('services/change-status/{id}', 'ServiceController@changeStatus')->name('admin.services.change-status');

        Route::post('services/store', 'ServiceController@store')->name('admin.services.store');

        Route::post('services/update', 'ServiceController@update')->name('admin.services.update');



        //blogs

        Route::get('blogs', 'BlogController@index')->name('admin.blogs.index');

        Route::get('blogs/create', 'BlogController@create')->name('admin.blogs.create');

        Route::get('blogs/edit/{id}', 'BlogController@edit')->name('admin.blogs.edit');

        Route::get('blogs/destroy/{id}', 'BlogController@destroy')->name('admin.blogs.destroy');

        Route::get('blogs/change-status/{id}', 'BlogController@changeStatus')->name('admin.blogs.change-status');

        Route::post('blogs/store', 'BlogController@store')->name('admin.blogs.store');

        Route::post('blogs/update', 'BlogController@update')->name('admin.blogs.update');



        //departments

        Route::get('departments', 'DepartmentController@index')->name('admin.departments.index');

        Route::get('departments/create', 'DepartmentController@create')->name('admin.departments.create');

        Route::get('departments/edit/{id}/{tab?}', 'DepartmentController@edit')->name('admin.departments.edit');

        Route::get('departments/destroy/{id}', 'DepartmentController@destroy')->name('admin.departments.destroy');

        Route::get('departments/change-status/{id}', 'DepartmentController@changeStatus')->name('admin.departments.change-status');

        Route::post('departments/store', 'DepartmentController@store')->name('admin.departments.store');

        Route::post('departments/update', 'DepartmentController@update')->name('admin.departments.update');



        //users

        Route::get('users', 'UserController@index')->name('admin.users.index');

        Route::get('users/create', 'UserController@create')->name('admin.users.create');

        Route::get('users/edit/{id}', 'UserController@edit')->name('admin.users.edit');

        Route::get('users/destroy/{id}', 'UserController@destroy')->name('admin.users.destroy');

        Route::get('users/change-status/{id}', 'UserController@changeStatus')->name('admin.users.change-status');

        Route::post('users/store', 'UserController@store')->name('admin.users.store');

        Route::post('users/update', 'UserController@update')->name('admin.users.update');



        //testimonials

        Route::get('testimonials', 'TestimonialController@index')->name('admin.testimonials.index');

        Route::get('testimonials/create', 'TestimonialController@create')->name('admin.testimonials.create');

        Route::get('testimonials/edit/{id}', 'TestimonialController@edit')->name('admin.testimonials.edit');

        Route::get('testimonials/destroy/{id}', 'TestimonialController@destroy')->name('admin.testimonials.destroy');

        Route::post('testimonials/store', 'TestimonialController@store')->name('admin.testimonials.store');

        Route::post('testimonials/update', 'TestimonialController@update')->name('admin.testimonials.update');



        //leads

        Route::get('leads', 'LeadsController@index')->name('admin.leads.index');

        Route::get('leads/create', 'LeadsController@create')->name('admin.leads.create');

        Route::get('leads/edit/{id}', 'LeadsController@edit')->name('admin.leads.edit');

        Route::get('leads/destroy/{id}', 'LeadsController@destroy')->name('admin.leads.destroy');

        Route::post('leads/store', 'LeadsController@store')->name('admin.leads.store');

        Route::post('leads/update', 'LeadsController@update')->name('admin.leads.update');



        //case studies

        Route::get('case-studies', 'CaseStudyController@index')->name('admin.case-studies.index');

        Route::get('case-studies/create', 'CaseStudyController@create')->name('admin.case-studies.create');

        Route::get('case-studies/edit/{id}/{tab?}', 'CaseStudyController@edit')->name('admin.case-studies.edit');

        Route::get('case-studies/destroy/{id}', 'CaseStudyController@destroy')->name('admin.case-studies.destroy');

        Route::get('case-studies/change-status/{id}', 'CaseStudyController@changeStatus')->name('admin.case-studies.change-status');

        Route::post('case-studies/store', 'CaseStudyController@store')->name('admin.case-studies.store');

        Route::post('case-studies/update', 'CaseStudyController@update')->name('admin.case-studies.update');



        //team

        Route::get('team', 'TeamController@index')->name('admin.team.index');

        Route::get('team/create', 'TeamController@create')->name('admin.team.create');

        Route::get('team/edit/{id}/{tab?}', 'TeamController@edit')->name('admin.team.edit');

        Route::get('team/destroy/{id}', 'TeamController@destroy')->name('admin.team.destroy');

        Route::get('team/change-status/{id}', 'TeamController@changeStatus')->name('admin.team.change-status');

        Route::post('team/store', 'TeamController@store')->name('admin.team.store');

        Route::post('team/update', 'TeamController@update')->name('admin.team.update');



        //frontend page

        Route::get('frontend-pages', 'FrontendPageController@index')->name('spiderworks.miniweb.frontend-pages.index');

        Route::get('frontend-pages/destroy/{id}', function () {

            echo "Not possible";
        })->name('spiderworks.miniweb.frontend-pages.destroy');

        Route::get('frontend-pages/edit/{id}', 'FrontendPageController@edit')->name('spiderworks.miniweb.frontend-pages.edit');

        Route::post('frontend-pages/update', 'FrontendPageController@update')->name('spiderworks.miniweb.frontend-pages.update');



        //faq

        Route::get('/faq', 'FaqController@index')->name('admin.faq.index');

        Route::get('/faq/edit/{id}', 'FaqController@edit')->name('admin.faq.edit');

        Route::get('/faq/destroy/{id}', 'FaqController@destroy')->name('admin.faq.destroy');

        Route::get('/faq/create', 'FaqController@create')->name('admin.faq.create');

        Route::post('/faq/update/{id}', 'FaqController@update')->name('admin.faq.update');

        Route::post('/faq/store', 'FaqController@store')->name('admin.faq.store');

        Route::get('/faq/ajax', 'FaqController@selectAjax')->name('admin.faq.ajax');

        Route::get('/faq/change-status/{id}', 'FaqController@changeStatus')->name('admin.faq.change-status');



        //listings

        Route::get('/listings', 'ListingController@index')->name('admin.listings.index');

        Route::get('/listings/edit/{id}', 'ListingController@edit')->name('admin.listings.edit');

        Route::get('/listings/destroy/{id}', 'ListingController@destroy')->name('admin.listings.destroy');

        Route::get('/listings/create', 'ListingController@create')->name('admin.listings.create');

        Route::post('/listings/update/{id}', 'ListingController@update')->name('admin.listings.update');

        Route::post('/listings/store', 'ListingController@store')->name('admin.listings.store');

        Route::get('/listings/ajax', 'ListingController@selectAjax')->name('admin.listings.ajax');

        Route::get('/listings/change-status/{id}', 'ListingController@changeStatus')->name('admin.listings.change-status');



        //our homies

        Route::get('homies', 'HomiesController@index')->name('admin.homies.index');

        Route::get('homies/create', 'HomiesController@create')->name('admin.homies.create');

        Route::get('homies/edit/{id}/{tab?}', 'HomiesController@edit')->name('admin.homies.edit');

        Route::get('homies/destroy/{id}', 'HomiesController@destroy')->name('admin.homies.destroy');

        Route::get('homies/change-status/{id}', 'HomiesController@changeStatus')->name('admin.homies.change-status');

        Route::post('homies/store', 'HomiesController@store')->name('admin.homies.store');

        Route::post('homies/update', 'HomiesController@update')->name('admin.homies.update');
    });
});





Route::get('validation/user', 'PluginController@unique_user')->name('validate.unique_user');

Route::get('validation/unique-slug', 'PluginController@unique_slug')->name('validate.unique_slug');



Route::get('select2/clients', 'PluginController@select2_clients')->name('select2.clients');

Route::get('select2/departments', 'PluginController@select2_departments')->name('select2.departments');

Route::get('select2/listings', 'PluginController@select2_listings')->name('select2.listings');

Route::get('select2/team', 'PluginController@select2_team')->name('select2.team');

Route::get('select2/services', 'PluginController@select2_services')->name('select2.services');

Route::get('select2/widgets', 'PluginController@select2_widgets')->name('select2.widgets');





Route::get('{slug}', 'BlogController@page_details');
