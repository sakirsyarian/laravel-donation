<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\KontenBlog;
use App\Program;


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

// Homepage (non-login)
Route::get('/', 'HomeController@home')->name('home');
Route::get('/donasi/{id}', 'HomeController@show')->name('detail_donasi');
// Route::post('/donasi/kirim/{id}', 'HomeController@kirimDonasi')->name('kirim_donasi');
Route::get('/donasi/{id}/berita', 'HomeController@daftarBerita')->name('daftar_berita');
Route::get('/donasi/{id}/berita/{berita}', 'HomeController@detailBerita')->name('detail_berita');
Route::get('/blog/{id}', 'HomeController@detailBlog')->name('detail_blog');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/contact', 'HomeController@contact')->name('contact');

// alternative pages
Route::get('/layanan-badan-wakaf-alquran-terbaik-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-badan-wakaf-alquran-terbaik-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-dompet-dhuafa-zakat-online-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-dompet-dhuafa-zakat-online-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-donasi-dompet-dhuafa-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-donasi-dompet-dhuafa-amanah', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-donasi-yatim-piatu-dhuafa-terpercaya-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-donasi-yatim-piatu-dhuafa-terpercaya-amanah', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-jasa-wakaf-dompet-dhuafa-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-jasa-wakaf-dompet-dhuafa-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-program-wakaf-alquran-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-program-wakaf-alquran-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-sedekah-online-terpercaya-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-sedekah-online-terpercaya-amanah', compact('title', 'programs', 'blogs'));
});
Route::get('/layanan-sedekah-yatim-piatu-amanah-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.layanan-sedekah-yatim-piatu-amanah-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-panti-asuhan-pontianak-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-panti-asuhan-pontianak-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-panti-asuhan-terdekat-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-panti-asuhan-terdekat-amanah', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-pondok-yatim-dan-dhuafa-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-pondok-yatim-dan-dhuafa-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-dompet-dhuafa-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-dompet-dhuafa-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-dompet-yatim-indonesia-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-dompet-yatim-indonesia-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-panti-asuhan-terdekat-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-panti-asuhan-terdekat-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-panti-asuhan-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-panti-asuhan-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-yatim-dhuafa-terpercaya-transparan', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-yatim-dhuafa-terpercaya-transparan', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-yatim-piatu-terdekat-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-yatim-piatu-terdekat-amanah', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-yatim-piatu-terpercaya-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-yatim-piatu-terpercaya-amanah', compact('title', 'programs', 'blogs'));
});
Route::get('/rumah-yayasan-yatim-ziswaf-amanah-terbaik', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.rumah-yayasan-yatim-ziswaf-amanah-terbaik', compact('title', 'programs', 'blogs'));
});
Route::get('/yayasan-panti-asuhan-samarinda-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.yayasan-panti-asuhan-samarinda-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/yayasan-rumah-yatim-dhuafa-tahfidz-terpercaya', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.yayasan-rumah-yatim-dhuafa-tahfidz-terpercaya', compact('title', 'programs', 'blogs'));
});
Route::get('/yayasan-rumah-yatim-piatu-terpercaya-amanah', function () {
    $programs = Program::orderBy('batas_akhir', 'ASC')->take(3)->get();
    $blogs = KontenBlog::orderBy('inserted_at', 'DESC')->take(10)->get();
    $title = 'Yayasan Generasi Yatim Tahfidz';
    return view('alternative.yayasan-rumah-yatim-piatu-terpercaya-amanah', compact('title', 'programs', 'blogs'));
});

// Route auth
Auth::routes();

//Rote verifikasi email
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser')->name('verifiy_user');

// Route kirim saran
Route::get('/reload-captcha', 'SaranController@reloadCaptcha');
Route::get('/saran', 'SaranController@create')->name('create_saran_umum');
Route::post('/saran-post', 'SaranController@store')->name('store_saran_umum');

// Route untuk admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin-users', 'can:verified-users')->group(function () {
    Route::resource('/users', 'UserController');
    Route::resource('/profesis', 'RefProfesiController');
    Route::resource('/agamas', 'RefAgamaController');
    Route::resource('/vendors', 'RefVendorSavingController');
    Route::resource('/rekenings', 'RekeningController');
    Route::resource('/konten-blogs', 'KontenBlogController');
    Route::resource('/saran', 'SaranController');
});

// Route untuk relawan
Route::namespace('Relawan')->prefix('relawan')->name('relawan.')->middleware('can:relawan-users', 'can:verified-users')->group(function () {
    Route::resource('/programs', 'ProgramController');
    Route::resource('/program-donaturs', 'ProgramDonaturController');
    Route::resource('/program-fundraisers', 'ProgramFundraiserController');
    Route::get('/program/{id}/program-beritas', ['as' => 'program-beritas.index', 'uses' => 'ProgramBeritaController@index']);
    Route::get('/program/{id}/program-beritas/create', ['as' => 'program-beritas.create', 'uses' => 'ProgramBeritaController@create']);
    Route::resource('/program-beritas', 'ProgramBeritaController', ['except' => ['index', 'create']]);
});

// Route untuk fundraiser
Route::namespace('Fundraiser')->prefix('fundraiser')->name('fundraiser.')->middleware('can:fundraiser-users', 'can:verified-users')->group(function () {
    Route::get('/', 'FundraiserDashboardController@index')->name('index');
});

// Route Logout
Route::get('/logout', function () {
    // logout user
    Auth::logout();
    // redirect to homepage
    return redirect('/');
});

// Route Donation
// Route::get('/', 'DonationController@index')->name('donation.index');
Route::get('/donation', 'DonationController@create')->name('donation.create');