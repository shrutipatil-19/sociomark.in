<?php

use App\Http\Controllers\Admin\admincareerController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContatListController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\BlogWebController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\IndustryController;
use App\Http\Controllers\Website\WorkCultureController;
use App\Http\Controllers\Admin\AdminWorkCultureController;
use App\Http\Controllers\Admin\calenderController;
use App\Http\Controllers\admin\jobController;
use App\Http\Controllers\Admin\outboundLeadController;
use App\Http\Controllers\Admin\PRController;
use App\Http\Controllers\Website\CaseStudyController;
use App\Http\Controllers\Website\PortfolioController;
use App\Http\Controllers\Website\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactListController;
use App\Http\Controllers\Website\careerController;
use App\Http\Controllers\Website\LanguageController;
use App\Http\Controllers\Website\PRWebController;
use Illuminate\Support\Facades\Session;
// use App\Http\Middleware\SetLocale;


// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('Frontend/dashboard');
// });
// Route::get('/test', function () {
//     return view('Frontend/test');
// });
// Route::get('/home', [HomeController::class, 'HomeNew'])->name('homenew');
// Route::get('/home2', [HomeController::class, 'Home2'])->name('home2');
// Route::get('/myHome', [HomeController::class, 'myHome'])->name('myHome');


Route::fallback(function () {
    return view('errors.404');
});
// Localized routes group
// Route::middleware([SetLocale::class])->prefix('{locale}')->group(function () {
// Route::middleware([SetLocale::class])->group(function () {
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route::get('/our-team', [HomeController::class, 'About'])->name('team');

Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/service/seo-agency-dubai', [ServiceController::class, 'seo'])->name('seo');
Route::get('/service/website-development-agency', [ServiceController::class, 'website'])->name('website');
Route::get('/service/social-media-agency-dubai', [ServiceController::class, 'socialMedia'])->name('socialMedia');
Route::get('/service/digital-marketing-agency-dubai', [ServiceController::class, 'digitalMarketing'])->name('digitalMarketing');
Route::get('/service/content-marketing-agency-dubai', [ServiceController::class, 'contentMarketing'])->name('contentMarketing');
Route::get('/service/performance-marketing-agency', [ServiceController::class, 'sem'])->name('sem');
Route::get('/service/photography-videography', [ServiceController::class, 'photoVideography'])->name('photoVideography');

// Route::get('/portfolio-inside', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio', [PortfolioController::class, 'portfolioInside'])->name('portfolio');


Route::get('/portfolio/ayushakti/website-work', [PortfolioController::class, 'ayushaktiweb'])->name('ayushaktiweb');
Route::get('/portfolio/electrocare/website-work', [PortfolioController::class, 'electrocareweb'])->name('electrocareweb');
Route::get('/portfolio/offthehookgrabandgo/website-work', [PortfolioController::class, 'offthehookgrabandgo'])->name('offthehookgrabandgo');
Route::get('/portfolio/offthehooknanaimo/website-work', [PortfolioController::class, 'offthehooknanaimo'])->name('offthehooknanaimo');
Route::get('/portfolio/barebonesfishhouse/website-work', [PortfolioController::class, 'barebonesfishhouse'])->name('barebonesfishhouse');
Route::get('/portfolio/kinnaltoys/website-work', [PortfolioController::class, 'kinnaltoys'])->name('kinnaltoys');
Route::get('/portfolio/trollerfishandchips/website-work', [PortfolioController::class, 'trollerfishandchips'])->name('trollerfishandchips');
Route::get('/portfolio/lime/website-work', [PortfolioController::class, 'limeweb'])->name('limeweb');
Route::get('/portfolio/ayushakti-usa/website-work', [PortfolioController::class, 'ayushaktiusaweb'])->name('ayushaktiusaweb');
Route::get('/portfolio/dr-smita-naram/website-work', [PortfolioController::class, 'drsmitanaramweb'])->name('drsmitanaramweb');
Route::get('/portfolio/real-estate-awards/website-work', [PortfolioController::class, 'realEAweb'])->name('realEAweb');
Route::get('/portfolio/portraiture-by-pari/website-work', [PortfolioController::class, 'portraitureByPariWeb'])->name('portraitureByPariWeb');
Route::get('/portfolio/profinet/website-work', [PortfolioController::class, 'profinetWeb'])->name('profinetWeb');
Route::get('/portfolio/aainos/website-work', [PortfolioController::class, 'aainosWeb'])->name('aainosWeb');

// Route::get('/portfolio/{client}', [YourController::class, 'social_media'])->name('client.social_media');


Route::get('/portfolio/{client}/social-media-work', [PortfolioController::class, 'social_media'])->name('social_media');
Route::get('/portfolio/{client}/branding-work', [PortfolioController::class, 'branding_work'])->name('branding_work');
Route::get('/portfolio/{client}/website-work', [PortfolioController::class, 'website_work'])->name('website_work');

Route::get('/case-study', [CaseStudyController::class, 'index'])->name('case-study');
Route::get('/case-study/stemrxbio', [CaseStudyController::class, 'stemrxbio'])->name('stemrxbio');
Route::get('/case-study/expert4travel', [CaseStudyController::class, 'expert4travel'])->name('expert4travel');
Route::get('/case-study/the-professional-couriers', [CaseStudyController::class, 'theProfessionalCouriers'])->name('the-professional-couriers');
Route::get('/case-study/eduauraa', [CaseStudyController::class, 'eduauraa'])->name('eduauraa');
Route::get('/case-study/shahenaz', [CaseStudyController::class, 'shahenaz'])->name('shahenaz');
Route::get('/case-study/okinawascooters', [CaseStudyController::class, 'okinawascooters'])->name('okinawascooters');
Route::get('/case-study/ayushakti', [CaseStudyController::class, 'ayushaktiNew'])->name('ayushakti');
Route::get('/case-study/nodwin-gaming', [CaseStudyController::class, 'nodwinGaming'])->name('nodwinGaming');
Route::get('/case-study/lime', [CaseStudyController::class, 'lime'])->name('lime');
Route::get('/case-study/button-dabao-desh-banao', [CaseStudyController::class, 'buttondabaodeshbanao'])->name('buttondabaodeshbanao');
Route::get('/case-study/road-to-safety-initiative', [CaseStudyController::class, 'roadtosafetyinitiative'])->name('roadtosafetyinitiative');
Route::get('/case-study/acetattoz', [CaseStudyController::class, 'acetattoz'])->name('acetattoz');
Route::get('/case-study/smarter-india', [CaseStudyController::class, 'smarterIndia'])->name('smarterIndia');
Route::get('/case-study/real-estate-awards', [CaseStudyController::class, 'realestateawards'])->name('realestateawards');
Route::get('/case-study/nhs', [CaseStudyController::class, 'nhs'])->name('nhs');
Route::get('/case-study/off-the-hook', [CaseStudyController::class, 'getTheHook'])->name('getTheHook');
Route::get('/case-study/ayushakti-new', [CaseStudyController::class, 'ayushakti'])->name('ayushaktiNew');
Route::get('/case-study/cyber-power', [CaseStudyController::class, 'cyberPower'])->name('cyberPower');
Route::get('/case-study/build-track', [CaseStudyController::class, 'buildTrack'])->name('buildTrack');

Route::get('/work-culture', [WorkCultureController::class, 'index'])->name('workculture');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/careers/business-developmet', [careerController::class, 'innerCareer'])->name('business');
Route::post('/job/store', [careerController::class, 'store'])->name('jobStore');

Route::get('/blog', [BlogWebController::class, 'index'])->name('blog');
Route::get('/blog/page/{page?}', [BlogWebController::class, 'index'])->name('blog.page');

Route::get('/blog/{slug}', [BlogWebController::class, 'innerBlog'])->name('blog-inner');
Route::get('/blog/category/{slug}', [BlogWebController::class, 'categoryBlog'])->name('categoryBlog');
Route::get('/blog/tag/{slug}', [BlogWebController::class, 'tagBlog'])->name('tagBlog');

Route::get('/pr', [PRWebController::class, 'index'])->name('pr');

// Route::get('/industries', [IndustryController::class, 'home'])->name('industry_home');
Route::get('/industry/{segment}', [IndustryController::class, 'single'])->name('industry_single');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact/popUpStore', [ContactController::class, 'popUpStore'])->name('popUpContact.store');

Route::get('/privacy-and-policy', [HomeController::class, 'privacyAndPolicy'])->name('privacyAndPolicy');
Route::get('/terms-and-condition', [HomeController::class, 'termsAndcondition'])->name('termsAndcondition');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thankYou');
// });
// admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['auth', 'admin:admin'])->group(function () {
    Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/admin/register', [AuthController::class, 'register'])->name('storeregister');
// });

// Own Profile can Edit only || use middleware
Route::middleware('edit-profile')->group(function () {
    Route::get('/admin/edit-user/{id}', [AuthController::class, 'editRegisterForm'])->name('editUser');
    Route::get('/admin/update-user/{id}', [AuthController::class, 'update'])->name('updateUser');
});

// All role have access of this url || view can adjust by @can directory
Route::middleware(['canGate:all-access'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Only Seo user have access of this url
Route::middleware(['canGate:user-access'])->group(function () {
    Route::get('/admin/addservices', [ServicesController::class, 'addServices'])->name('addservices');
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/tags', TagController::class);
    Route::resource('/admin/blogs', BlogController::class);
    Route::resource('prs', PRController::class);
});

// Only Business user have access of this url
Route::middleware(['canGate:business-access'])->group(function () {
    Route::get('/admin/dashboard/leads/{type}/{id}/edit', [DashboardController::class, 'edit'])->name('leadsEdit');
    Route::get('/admin/dashboard/leads/{type}/{id}', [DashboardController::class, 'show'])->name('leads.show');
    Route::get('admin/outbound-lead', [outboundLeadController::class, 'addLead'])->name('addlead');
    Route::post('admin/outbound-lead', [outboundLeadController::class, 'StoreLead'])->name('storeLead');
    Route::get('admin/outbound-lead-list', [outboundLeadController::class, 'listLead'])->name('listLead');
    Route::get('admin/outbound-lead-second-followup-list', [outboundLeadController::class, 'seclistLead'])->name('seclistLead');
    Route::get('/admin/outbound-lead-chart', [outboundLeadController::class, 'getLeadsChartData'])->name('admin.outbound.lead.chart');
    Route::get('admin/outbound-lead-edit/{id}', [outboundLeadController::class, 'editLead'])->name('editLead');
    Route::put('admin/outbound-lead-update/{id}', [outboundLeadController::class, 'updateLead'])->name('updateLead');
    Route::post('admin/outbound-lead-delete/{id}', [outboundLeadController::class, 'deleteLead'])->name('deleteLead');
    Route::get('admin/Work-gallary/create', [AdminWorkCultureController::class, 'create']);
    // Route::get('admin/enquiryList', [ContatListController::class,'index'])->name('contactList');
    Route::get('admin/enquiryList', [ContatListController::class, 'popContact'])->name('popUpcontactList');
    Route::get('/admin/contact-graph', [ContatListController::class, 'graph'])->name('contactList');
    Route::get('admin/inbound-lead-edit/{id}', [ContatListController::class, 'editLead'])->name('ineditLead');
    Route::put('admin/inbound-lead-update/{id}', [ContatListController::class, 'updateLead'])->name('inupdateLead');
    Route::post('admin/inbound-lead-delete/{id}', [ContatListController::class, 'deleteLead'])->name('indeleteLead');

    Route::get('/admin/calender', [calenderController::class, 'calender'])->name('calender');
    Route::get('/admin/calendar/events', [CalenderController::class, 'index']); // for FullCalendar AJAX
    Route::post('/admin/calendar/events/store', [calenderController::class, 'store'])->name('eventsStore');
});

// Only Seo user have access of this url
Route::middleware(['canGate:hr-access'])->group(function () {
    Route::get('/admin/job-leads', [admincareerController::class, 'jobLeads'])->name('job');
    Route::get('/admin/job/create', [jobController::class, 'create'])->name('job.create');
    Route::post('/admin/job/store', [jobController::class, 'store'])->name('job.store');

});



// Route::get('/lang/{locale}', function ($locale) {
//     if (!in_array($locale, ['en', 'ar'])) {
//         abort(400); // Optional: invalid locale
//     }
//     Session::put('locale', $locale);
//     return redirect()->back();
// })->name('lang.switch');


// Route::get('/switch-locale/{locale}', [LanguageController::class, 'switchLocale'])->name('switch-language');

// Route::post('/lang/{locale}', function ($locale) {
//     if (!in_array($locale, ['en', 'ar'])) {
//         abort(400);
//     }
//     Session::put('locale', $locale);
//     return redirect()->back();
// })->name('lang.switch');