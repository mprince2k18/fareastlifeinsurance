<?php

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





// Dashboard Routes
// DashboardController->middleware ------------------------------------------------------------------------------
// dashboard
Route::get('/app/dashboard','DashboardController@index')->name('dashboard');
Route::get('/change/password/{user_id}','DashboardController@change_password')->middleware('password.confirm')->name('change_password');
Route::post('/change/password/update','DashboardController@change_password_update')->name('change_password_update');

// SuperAdminController->middleware------------------------------------------------------------------------------
// users
Route::get('/users','SuperAdminController@index')->name('users');
// add_new_users
Route::get('/add/new/users','SuperAdminController@add_new_users')->middleware('password.confirm')->name('add_new_users');
// users_create
Route::post('/users/create','SuperAdminController@users_create')->name('users_create');
// user_view
Route::get('/user/view/{user_id}','SuperAdminController@user_view')->middleware('password.confirm')->name('user_view');
// update_user
Route::post('/user/update/','SuperAdminController@update_user')->name('update_user');
// users END
//
// SuperAdminController->middleware end--------------------------------------------------------------------------

// AdminController->middleware
// role
Route::get('/role','AdminController@role')->name('role');
// role_create
Route::post('/role/create','AdminController@role_create')->name('role_create');
// role_edit
Route::get('/role/edit/{role_id}','AdminController@role_edit')->name('role_edit');
// role_update
Route::post('/role/update','AdminController@role_update')->name('role_update');
// soft_delete
Route::get('/role/delete/{role_id}','AdminController@soft_delete')->name('role_soft_delete');
// force_delete
Route::get('/role/force/delete/{role_id}','AdminController@force_delete')->name('role_force_delete');
// restore
Route::get('/role/restore/{role_id}','AdminController@re_store')->name('role_re_store');
// role END
//


// restore
Route::get('/logo/delete/{logo_id}','AdminController@logo_trash')->name('logo_trash');


// Activation
Route::get('/activation','AdminController@activation')->name('activation');
// activation_create
Route::post('/activation/create','AdminController@activation_create')->name('activation_create');
// activation_edit
Route::get('/activation/edit/{activation_id}','AdminController@activation_edit')->name('activation_edit');
// activation_update
Route::post('/activation/update','AdminController@activation_update')->name('activation_update');
// activation_soft_delete
Route::get('/activation/delete/{role_id}','AdminController@activation_soft_delete')->name('activation_soft_delete');
// activation_force_delete
Route::get('/activation/force/delete/{role_id}','AdminController@activation_force_delete')->name('activation_force_delete');
// activation_restore
Route::get('/activation/restore/{role_id}','AdminController@activation_restore')->name('activation_restore');
// Activation END

// AdminController->middleware END ------------------------------------------------------------------------------
// AppSettingsController->middleware ------------------------------------------------------------------------------

// LOGO
// logo_index
Route::get('/appsettings/logo/','AppSettingsController@logo_index')->name('logo_index');
// logo_create
Route::post('/appsettings/logo/create','AppSettingsController@logo_create')->name('logo_create');
// logo_status
Route::get('/appsettings/logo/{logo_id}/{logo_status}','AppSettingsController@logo_status')->name('logo_status');


// LOGO END


// Slider END
// slider_index
Route::get('/appsettings/slider/','AppSettingsController@slider_index')->name('slider_index');
// slider_create
Route::post('/appsettings/slider/create','AppSettingsController@slider_create')->name('slider_create');
// slider_trash
Route::get('/appsettings/slider/trash/{slider_id}','AppSettingsController@slider_trash')->name('slider_trash');
// slider_restore
Route::get('/appsettings/slider/restore/{slider_id}','AppSettingsController@slider_restore')->name('slider_restore');
// slider_restore
Route::get('/appsettings/slider/delete/{slider_id}','AppSettingsController@slider_delete')->name('slider_delete');
// slider_edit
Route::get('/appsettings/slider/edit/{slider_id}','AppSettingsController@slider_edit')->name('slider_edit');
// slider_update
Route::post('/appsettings/slider/update/','AppSettingsController@slider_update')->name('slider_update');


// Slider END

// Network Hospitality Start
Route::get('/dashboard/network/hospitality','HospitalityController@create')->name('nhospitality_index');
Route::post('/dashboard/network/hospitality','HospitalityController@store')->name('nhospitality_create');

Route::get('/dashboard/network/hospitality/edit/{id}',[
    'uses'=>'HospitalityController@edit',
    'as'  => 'editpage.hospitality'
]);
Route::put('/dashboard/network/hospitality/edit/{id}',[
    'uses'=>'HospitalityController@update',
    'as'  => 'editpage.hospitality'
]);
Route::delete('/dashboard/network/hospitality/delete/{id}',[
    'uses'=>'HospitalityController@destroy',
    'as'  => 'deletepage.hospitality'
]);

// Network Hospitality Start
Route::get('/dashboard/office/information','OfficeInformationController@create')->name('oin_index');
Route::post('/dashboard/office/information','OfficeInformationController@store')->name('oin_create');

Route::get('/dashboard/office/information/edit/{id}',[
    'uses'=>'OfficeInformationController@edit',
    'as'  => 'editpage.oin'
]);
Route::put('/dashboard/office/information/edit/{id}',[
    'uses'=>'OfficeInformationController@update',
    'as'  => 'editpage.oin'
]);
Route::delete('/dashboard/office/information/delete/{id}',[
    'uses'=>'OfficeInformationController@destroy',
    'as'  => 'deletepage.oin'
]);


// TOP HEADER
// top_header_index
Route::get('/appsettings/top_header/','AppSettingsController@index')->name('top_header_index');
// top_header_create
Route::post('/appsettings/top_header/create','AppSettingsController@top_header_create')->name('top_header_create');
// top_header_edit
Route::get('/appsettings/top_header/{top_header_id}','AppSettingsController@top_header_edit')->name('top_header_edit');
// top_header_update
Route::post('/appsettings/top_header/update','AppSettingsController@top_header_update')->name('top_header_update');
// top_header_update
Route::get('/appsettings/top_header/delete/{top_header_id}','AppSettingsController@top_header_delete')->name('top_header_delete');
// TOP HEADER END



// MENUS
// menu_index
Route::get('/appsettings/menu','AppSettingsController@menu_index')->name('menu_index');
// main_menu_create
Route::post('/appsettings/main/menu/create','AppSettingsController@main_menu_create')->name('main_menu_create');
// main_menu_trash
Route::get('/appsettings/main/menu/trash/{menu_id}','AppSettingsController@main_menu_trash')->name('main_menu_trash');
// sub_menu_create
Route::post('/appsettings/sub/menu/create','AppSettingsController@sub_menu_create')->name('sub_menu_create');
// sub_menu_trash
Route::get('/appsettings/sub/menu/trash/{submenu_id}','AppSettingsController@sub_menu_trash')->name('sub_menu_trash');

// FOOTER
// footer_index
Route::get('/appsettings/footer','AppSettingsController@footer_index')->name('footer_index');
// footer_wodgets
Route::post('/appsettings/footer/widgets','AppSettingsController@footer_widgets')->name('footer_widgets');
// footer_menu_create
Route::post('/appsettings/footer/menu/create','AppSettingsController@footer_menu_create')->name('footer_menu_create');
// footer_menu_delete
Route::get('/appsettings/footer/menu/delete/{footer_menu_id}','AppSettingsController@footer_menu_delete')->name('footer_menu_delete');


//CORPORATE
//corporate_index
Route::get('/appsettings/corporate','AppSettingsController@corporate_index')->name('corporate_index');
//corporate_create
Route::post('/appsettings/corporate/create','AppSettingsController@corporate_create')->name('corporate_create');
//corporate_delete
Route::get('/appsettings/corporate/delete/{corporate_id}','AppSettingsController@corporate_delete')->name('corporate_delete');


//ADDRESS
//address_index
Route::get('/appsettings/address','AppSettingsController@address_index')->name('address_index');
//address_create
Route::post('/appsettings/address/create','AppSettingsController@address_create')->name('address_create');
//address_edit
Route::get('/appsettings/address/{address_id}','AppSettingsController@address_edit')->name('address_edit');
//address_delete
Route::get('/appsettings/address/delete/{address_id}','AppSettingsController@address_delete')->name('address_delete');
//address_update
Route::post('/appsettings/address/update','AppSettingsController@address_update')->name('address_update');


// MAP
// map_index
Route::get('/appsettings/map','AppSettingsController@map_index')->name('map_index');
// map_create
Route::post('/appsettings/map','AppSettingsController@map_create')->name('map_create');
// map_trash
Route::get('/appsettings/map/trash/{map_id}','AppSettingsController@map_trash')->name('map_trash');
// map_update
Route::post('/appsettings/map/update','AppSettingsController@map_update')->name('map_update');


//QUICK SERVICE
//quick_service
Route::get('/appsettings/quick_service','AppSettingsController@quick_service')->name('quick_service');
//quick_service_create
Route::post('/appsettings/quick_service/create','AppSettingsController@quick_service_create')->name('quick_service_create');
//quick_service_trash
Route::get('/appsettings/quick_service/trash/{quick_service_id}','AppSettingsController@quick_service_trash')->name('quick_service_trash');

//SOCIAL
//social_index
Route::get('/appsettings/social','AppSettingsController@social_index')->name('social_index');
//social_create
Route::put('/appsettings/social/update/{id}','AppSettingsController@social_update')->name('social_update');
//social_delete
Route::get('/appsettings/social/delete/{social_id}','AppSettingsController@social_delete')->name('social_delete');


//PAGES
Route::get('/pages/add','PageController@index')->name('page_index');
Route::post('/pages/create','PageController@create')->name('page_create');
Route::get('/pages/all','PageController@all')->name('all_pages');
Route::get('/pages/edit/{page_id}/{slug}','PageController@edit')->name('edit');
Route::post('/pages/update','PageController@update')->name('update');
Route::get('/pages/delete/{page_id}','PageController@trash')->name('trash');


//PAGES
Route::get('/create/pages/add','PromotionController@index')->name('create_page_index');
Route::post('/create/pages/create','PromotionController@create')->name('create_page_create');
Route::get('/create/pages/all','PromotionController@all')->name('create_all_pages');
Route::get('/create/pages/edit/{page_id}/{slug}','PromotionController@edit')->name('create_edit');
Route::post('/create/pages/update','PromotionController@update')->name('create_update');
Route::get('/create/pages/delete/{page_id}','PromotionController@trash')->name('create_trash');

// AppSettingsController->middleware END ------------------------------------------------------------------------------

// ProductController->middleware ----------------------------------------------------------------------
//product_index
Route::get('/dashboard/products','ProductController@product_index')->name('product_index');
//introduction create
Route::post('/dashboard/introduction_create','ProductController@introduction_create')->name('introduction_create');

//profit create
Route::post('/dashboard/profit_create','ProductController@profit_create')->name('profit_create');

//product_index
Route::post('/dashboard/product/create','ProductController@product_create')->name('product_create');
//all_products
Route::get('/dashboard/total/products','ProductController@all_products')->name('all_products');
//delete_products
Route::get('/dashboard/product/delete/{product_id}','ProductController@delete_product')->name('delete_product');
//edit_products
Route::get('/dashboard/product/edit/{product_id}','ProductController@edit_products')->name('edit_products');
//update_product
Route::post('/dashboard/product/update','ProductController@update_product')->name('update_product');
//trashed_product
Route::get('/dashboard/product/trashed','ProductController@trashed_product')->name('trashed_product');
//restore_product
Route::get('/dashboard/product/force/delete/{product_id}','ProductController@force_delete')->name('force_delete');
// ProductController->middleware END ------------------------------------------------------------

// ManagementController->middleware ----------------------------------------------------------------------
//chairman
Route::get('/dashboard/chairman','ManagementController@chairman')->name('chairman');
//chairman_create
Route::post('/dashboard/chairman/create','ManagementController@chairman_create')->name('chairman_create');
// ceo
Route::get('/dashboard/ceo','ManagementController@ceo')->name('ceo');
//chairman_create
Route::post('/dashboard/ceo/create','ManagementController@ceo_create')->name('ceo_create');
//management_index
Route::get('/dashboard/management','ManagementController@management_index')->name('management_index');
//management_board_create
Route::post('/dashboard/management/board/create','ManagementController@management_board_create')->name('management_board_create');
//management_create
Route::post('/dashboard/management/create','ManagementController@management_create')->name('management_create');
//management_delete
Route::get('/dashboard/management/delete/{management_id}','ManagementController@management_delete')->name('management_delete');
//management_edit
Route::get('/dashboard/management/edit/{management_id}','ManagementController@management_edit')->name('management_edit');
//management_edit
Route::post('/dashboard/management/update','ManagementController@management_update')->name('management_update');

//boardofmanagement
Route::get('/dashboard/management/boardofmanagement','ManagementController@boardofmanagement')->name('boardofmanagement');
//managementcommitee
Route::get('/dashboard/management/managementcommitee','ManagementController@managementcommitee')->name('managementcommitee');
//boardofmanagement
Route::get('/dashboard/management/corporatemanagement','ManagementController@corporatemanagement')->name('corporatemanagement');

// ManagementController->middleware END ------------------------------------------------------------------

// FareastStarController->middleware -------------------------------------------------------------

// fareast_star_index
Route::get('/dashboard/fareast/star','FareastStarController@fareast_star_index')->name('fareast_star_index');
// fareast_star_create
Route::post('/dashboard/fareast/star/create','FareastStarController@fareast_star_create')->name('fareast_star_create');

Route::get('/dashboard/fareast/star/update/{id}','FareastStarController@fareast_star_edit')->name('fareast_star_upadate');
Route::put('/dashboard/fareast/star/update/{id}','FareastStarController@fareast_star_update')->name('fareast_star_upadate');
// fareast_star_delete
Route::get('/dashboard/fareast/star/delete/{fareaststar_id}','FareastStarController@fareast_star_delete')->name('fareast_star_delete');


// FareastStarController->middleware END --------------------------------------------------------

// FaqController->middleware --------------------------------------------------------------

// faq_index
Route::get('/dashboard/faq','FaqController@faq_index')->name('faq_index');
// faq_create
Route::post('/dashboard/faq/create','FaqController@faq_create')->name('faq_create');
// faq_delete
Route::get('/dashboard/faq/delete/{faq_id}','FaqController@faq_delete')->name('faq_delete');
// faq_edit
Route::get('/dashboard/faq/edit/{faq_id}','FaqController@faq_edit')->name('faq_edit');
// faq_update
Route::post('/dashboard/faq/update','FaqController@faq_update')->name('faq_update');
// getVideo
Route::post('/getVideo','FaqController@getVideo');

// FaqController->middleware END --------------------------------------------------------------

// VideoController->middleware --------------------------------------------------------------
// video_index
Route::get('/dashboard/video','VideoController@video_index')->name('video_index');
// video_create
Route::post('/dashboard/video/create','VideoController@video_create')->name('video_create');
// video_delete
Route::get('/dashboard/video/delete/{video_id}','VideoController@video_delete')->name('video_delete');

// VideoController->middleware END --------------------------------------------------------------

// EventController->middleware --------------------------------------------------------------

// event_index
Route::get('/dashboard/event','EventController@event_index')->name('event_index');
// event_create
Route::post('/dashboard/event/create','EventController@event_create')->name('event_create');
// all_events
Route::get('/dashboard/all/event','EventController@all_events')->name('all_events');
// event_delete
Route::get('/dashboard/event/delete/{event_id}','EventController@event_delete')->name('event_delete');
// event_edit
Route::get('/dashboard/event/edit/{event_id}','EventController@event_edit')->name('event_edit');
// event_update
Route::post('/dashboard/event/update','EventController@event_update')->name('event_update');
// event_trashed
Route::get('/dashboard/event/trashed','EventController@event_trashed')->name('event_trashed');
// event_force_delete
Route::get('/dashboard/event/force/delete/{event_id}','EventController@event_force_delete')->name('event_force_delete');
// event_restore
Route::get('/dashboard/event/restore/{event_id}','EventController@event_restore')->name('event_restore');

// EventController->middleware END --------------------------------------------------------------

// NoticeController->middleware --------------------------------------------------------------

// notice_index
Route::get('/dashboard/notice','NoticeController@notice_index')->name('notice_index');

Route::get('/show/notice/pdf/{id}/{pdf}','NoticeController@shownoticepdf')->name('shownoticepdf');
// notice_index
Route::post('/dashboard/notice/create','NoticeController@notice_create')->name('notice_create');
// all_notices
Route::get('/dashboard/all/notices','NoticeController@all_notices')->name('all_notices');
// notice_delete
Route::get('/dashboard/notice/delete/{notice_id}','NoticeController@notice_delete')->name('notice_delete');
// notice_trashed
Route::get('/dashboard/notice/trashed','NoticeController@notice_trashed')->name('notice_trashed');
// notice_restore
Route::get('/dashboard/notice/restore/{notice_id}','NoticeController@notice_restore')->name('notice_restore');
// notice_edit
Route::get('/dashboard/notice/edit/{notice_id}','NoticeController@notice_edit')->name('notice_edit');
// notice_update
Route::post('/dashboard/notice/update','NoticeController@notice_update')->name('notice_update');
// notice_force_delete
Route::get('/dashboard/notice/force/delete/{notice_id}','NoticeController@notice_force_delete')->name('notice_force_delete');

// NoticeController->middleware END --------------------------------------------------------------

// AnnualReportsController->middleware START ------------------------------------------------------------
Route::get('/dashboard/annual/report','AnnualReportsController@annual_report')->name('annual_report');
Route::post('/dashboard/annual/report/create','AnnualReportsController@annual_report_create')->name('annual_report_create');
Route::get('/dashboard/annual/report/delete/{id}','AnnualReportsController@annual_report_delete')->name('annual_report_delete');
Route::get('/dashboard/annual/report/edit/{id}','AnnualReportsController@annual_report_edit')->name('annual_report_edit');
Route::post('/dashboard/annual/report/update/{id}','AnnualReportsController@annual_report_update')->name('annual_report_update');
Route::get('/dashboard/annual/report/download/{id}','AnnualReportsController@download')->name('annual_report_download');

// AnnualReportsController->middleware END --------------------------------------------------------------

// AnnualReportsController->middleware START ------------------------------------------------------------
Route::get('/dashboard/complaince/certificate','CompalianceCertificateController@certificate_certificate')->name('dash_complaince_certificate');
Route::post('/dashboard/complaince/certificate/create','CompalianceCertificateController@certificate_certificate_create')->name('complaince_certificate_create');
Route::get('/dashboard/complaince/certificate/delete/{id}','CompalianceCertificateController@certificate_certificate_delete')->name('complaince_certificate_delete');
Route::get('/dashboard/complaince/certificate/edit/{id}','CompalianceCertificateController@certificate_certificate_edit')->name('complaince_certificate_edit');
Route::post('/dashboard/complaince/certificate/update/{id}','CompalianceCertificateController@certificate_certificate_update')->name('complaince_certificate_update');
Route::get('/dashboard/complaince/certificate/download/{id}','CompalianceCertificateController@download')->name('complaince_certificate_download');

// AnnualReportsController->middleware END --------------------------------------------------------------
// AnnualReportsController->middleware START ------------------------------------------------------------
Route::get('/dashboard/complaince/report','CompalianceReportController@certificate_report')->name('dash_complaince_report');
Route::post('/dashboard/complaince/report/create','CompalianceReportController@certificate_report_create')->name('complaince_report_create');
Route::get('/dashboard/complaince/report/delete/{id}','CompalianceReportController@certificate_report_delete')->name('complaince_report_delete');
Route::get('/dashboard/complaince/report/edit/{id}','CompalianceReportController@certificate_report_edit')->name('complaince_report_edit');
Route::post('/dashboard/complaince/report/update/{id}','CompalianceReportController@certificate_report_update')->name('complaince_report_update');
Route::get('/dashboard/complaince/report/download/{id}','CompalianceReportController@download')->name('complaince_report_download');

// AnnualReportsController->middleware END --------------------------------------------------------------

// ShareholdingController->middleware START ------------------------------------------------------------
Route::get('/dashboard/financial/statement','FinancialStatementController@index')->name('financial.index');
Route::post('/dashboard/financial/create','FinancialStatementController@create')->name('financial.create');
Route::post('/dashboard/financial/year/create','FinancialStatementController@year_create')->name('financial.year.create');
Route::put('/dashboard/financial/year/update/{id}','FinancialStatementController@year_update')->name('financial.year.update');
Route::get('/dashboard/financial/delete/{id}','FinancialStatementController@trash')->name('financial.trash');
Route::get('/dashboard/financial/edit/{id}','FinancialStatementController@edit')->name('financial.edit');
Route::post('/dashboard/financial/update/{id}','FinancialStatementController@update')->name('financial.update');
Route::get('/dashboard/financial/statement/download/{id}','FinancialStatementController@download')->name('financial_download');


// FinancialStatementController->middleware END --------------------------------------------------------------


// FinancialStatementController->middleware START ------------------------------------------------------------
Route::get('/dashboard/value/statement','ValueStatementController@index')->name('value.index');
Route::post('/dashboard/value/create','ValueStatementController@create')->name('value.create');
Route::get('/dashboard/value/delete/{id}','ValueStatementController@trash')->name('value.trash');
Route::get('/dashboard/value/edit/{id}','ValueStatementController@edit')->name('value.edit');
Route::post('/dashboard/value/update/{id}','ValueStatementController@update')->name('value.update');
// FinancialStatementController->middleware END --------------------------------------------------------------

// FinancialStatementController->middleware START ------------------------------------------------------------
Route::get('/dashboard/director/report','DirectorReportController@index')->name('director.index');
Route::post('/dashboard/director/create','DirectorReportController@create')->name('director.create');
Route::get('/dashboard/director/delete/{id}','DirectorReportController@trash')->name('director.trash');
Route::get('/dashboard/director/edit/{id}','DirectorReportController@edit')->name('director.edit');
Route::post('/dashboard/director/update/{id}','DirectorReportController@update')->name('director.update');
Route::get('/dashboard/director/report/download/{id}','DirectorReportController@download')->name('director_download');
// FinancialStatementController->middleware END --------------------------------------------------------------


Route::get('/dashboard/fareasestarvalues/index/{id}','FareastStarValueController@index')->name('fstarvalues.index');
Route::post('/dashboard/fareasestarvalues/create','FareastStarValueController@store')->name('fstarvalues.create');
Route::get('/dashboard/fareasestarvalues/edit/{id}','FareastStarValueController@edit')->name('fstarvalues.edit');
Route::put('/dashboard/fareasestarvalues/update/{id}','FareastStarValueController@update')->name('fstarvalues.update');
Route::get('/dashboard/fareasestarvalues/delete/{id}','FareastStarValueController@delete')->name('fstarvalues.delete');

// FinancialStatementController->middleware START ------------------------------------------------------------
Route::get('/dashboard/shareholding','ShareholdingController@index')->name('shareholding.index');
Route::post('/dashboard/shareholding/create','ShareholdingController@create')->name('shareholding.create');
Route::get('/dashboard/shareholding/delete/{id}','ShareholdingController@trash')->name('shareholding.trash');
Route::get('/dashboard/shareholding/edit/{id}','ShareholdingController@edit')->name('shareholding.edit');
Route::post('/dashboard/shareholding/update/{id}','ShareholdingController@update')->name('shareholding.update');

// ShareholdingController->middleware END --------------------------------------------------------------

// NewsController->middleware --------------------------------------------------------------

// news_index
Route::get('/dashboard/news','NewsController@news_index')->name('news_index');
// news_create
Route::post('/dashboard/news/create','NewsController@news_create')->name('news_create');
// all_news
Route::get('/dashboard/all/news','NewsController@all_news')->name('all_news');
// news_delete
Route::get('/dashboard/news/delete/{news_id}','NewsController@news_delete')->name('news_delete');
// news_trashed
Route::get('/dashboard/news/trashed','NewsController@news_trashed')->name('news_trashed');
// news_restore
Route::get('/dashboard/news/restore/{news_id}','NewsController@news_restore')->name('news_restore');
// news_edit
Route::get('/dashboard/news/edit/{news_id}','NewsController@news_edit')->name('news_edit');
// news_update
Route::post('/dashboard/news/update','NewsController@news_update')->name('news_update');
// news_force_delete
Route::get('/dashboard/news/force/delete/{news_id}','NewsController@news_force_delete')->name('news_force_delete');


// NewsController->middleware END --------------------------------------------------------------

// ClaimController->middleware --------------------------------------------------------------

// claim_index
Route::get('/dashboard/claim','ClaimController@claim_index')->name('claim_index');
// claim_create
Route::post('/dashboard/claim/create','ClaimController@claim_create')->name('claim_create');
// all_claims
Route::get('/dashboard/all/claims','ClaimController@all_claims')->name('all_claims');

Route::get('/dashboard/claim/edit/{id}','ClaimController@claim_edit')->name('claim_update');
Route::put('/dashboard/claim/edit/{id}','ClaimController@claim_update')->name('claim_update');

// claim_trash
Route::get('/dashboard/claim/trash/{claim_id}','ClaimController@claim_trash')->name('claim_trash');

// ClaimController->middleware END --------------------------------------------------------------

// AwardController->middleware ------------------------------------------------------------------

// award_index
Route::get('/dashboard/award','AwardController@award_index')->name('award_index');
// award_create
Route::post('/dashboard/award/create','AwardController@award_create')->name('award_create');
Route::get('/dashboard/award/update/{award_id}','AwardController@award_edit')->name('award_update');
Route::put('/dashboard/award/update/{award_id}','AwardController@award_update')->name('award_update');
// award_trash
Route::get('/dashboard/award/delete/{award_id}','AwardController@award_trash')->name('award_trash');


// AwardController->middleware END --------------------------------------------------------

// PrivacyController->middleware ----------------------------------------------------------------
//privacy_index
Route::get('/dashboard/privacy','PrivacyController@privacy_index')->name('privacy_index');
//privacy_create
Route::post('/dashboard/privacy/create','PrivacyController@privacy_create')->name('privacy_create');
//single_privacy
Route::get('/dashboard/privacy/{privacy_id}','PrivacyController@single_privacy')->name('single_privacy');
//privacy_update
Route::post('/dashboard/privacy/update','PrivacyController@privacy_update')->name('privacy_update');

// PrivacyController->middleware END -----------------------------------------------------------

// MessageController->middleware ----------------------------------------------------------------
//message_index
Route::get('/dashboard/message','MessageController@message_index')->name('message_index');
// message_create
Route::post('/dashboard/message/create','MessageController@message_create')->name('message_create');
// all_message
Route::get('/dashboard/all/message','MessageController@all_message')->name('all_message');
// single_message
Route::get('/dashboard/message/{message_id}','MessageController@single_message')->name('single_message');
// delete_message
Route::get('/dashboard/message/delete/{message_id}','MessageController@delete_message')->name('delete_message');
// update_message
Route::post('/dashboard/message/update/','MessageController@update_message')->name('update_message');
// MessageController->middleware END -----------------------------------------------------------

// NewsLetterController->middleware START ---------------------------------------------------------
Route::get('/dashboard/newsletter','NewsLetterController@index')->name('newsletter_index');
Route::get('/dashboard/newsletter/subscription','NewsLetterController@subscription')->name('subscription');
// NewsLetterController->middleware END -----------------------------------------------------------

// NewsLetterController->middleware START ---------------------------------------------------------
Route::get('/dashboard/corp/cronicle','CorpCronicleController@index')->name('cronicle_index');
Route::post('/dashboard/corp/cronicle/create','CorpCronicleController@create')->name('cronicle_create');
Route::get('/corp/cronicle/edit/{id}',[
    'uses'=>'CorpCronicleController@getCorpCronicleUpdatePage',
    'as'  => 'editpage.corp'
]);
Route::put('/corp/cronicle/edit/{id}',[
    'uses'=>'CorpCronicleController@putCorpCronicleUpdatePage',
    'as'  => 'editpage.corp'
]);
Route::delete('/corp/cronicle/delete/{id}',[
    'uses'=>'CorpCronicleController@CorpCronicleDeletePage',
    'as'  => 'deletepage.corp'
]);
// NewsLetterController->middleware END -----------------------------------------------------------


// GalleryController->middleware START ---------------------------------------------------------
Route::get('/dashboard/gallery','GalleryController@index')->name('gallery_index');

Route::get('/dashboard/all/gallery','GalleryController@all_gallery')->name('all_gallery');

Route::post('/dashboard/gallery/create','GalleryController@gallery_create')->name('gallery_create');

Route::get('/dashboard/gallery/{gallery_id}','GalleryController@gallery_delete')->name('gallery_delete');
// GalleryController->middleware END -----------------------------------------------------------

// PromotionController->middleware START ---------------------------------------------------------
Route::get('/dashboard/promotion','PromotionController@index')->name('promotion_index');
Route::post('/dashboard/promotion/create','PromotionController@create')->name('promotion_create');
// PromotionController->middleware END -----------------------------------------------------------

// CorpInfoController->middleware START ---------------------------------------------------------
Route::get('/dashboard/corp/info','CorpInfoController@index')->name('corp_index');
Route::post('/dashboard/corp/create','CorpInfoController@create')->name('corp_create');
// CorpInfoController->middleware END -----------------------------------------------------------

// CorpInfoController->middleware START ---------------------------------------------------------
Route::get('/dashboard/popup','PopupController@index')->name('popup_index');
Route::post('/dashboard/popup/create','PopupController@create')->name('popup_create');
Route::get('/dashboard/popup/{popup_id}','PopupController@popup_delete')->name('popup_delete');
// CorpInfoController->middleware END -----------------------------------------------------------

// Dashboard Routes End

// ---------------------------------------------------------------------------------------------

// FrontEnd Routes

//index
Route::any('/','FrontendController@index')->name('homepage');

// management_committee
Route::get('/management-committee','FrontendController@management_committee')->name('management_committee');
// Route::get('/management-committee/{committee_id}','FrontendController@single_committee')->name('single_committee');
Route::get('/chairman/message','FrontendController@chairman_message')->name('chairman_message');
Route::get('/ceo/message','FrontendController@ceo_message')->name('ceo_message');

// management_corporate
Route::get('/corporate-management','FrontendController@management_corporate')->name('management_corporate');
Route::get('/corporate-management/{management_id}','FrontendController@single_corporate')->name('single_corporate');

// board_of_directors
Route::get('/board-of-directors','FrontendController@board_of_directors')->name('board_of_directors');

// bimas
Route::get('/bima/{page_id}/{slug}','FrontendController@bima')->name('bima');
// pages
Route::get('/pages/{page_id}/{slug}','FrontendController@page')->name('page');

//premium_calculator
Route::get('/premium/calculator','FrontendController@premium_calculator')->name('premium_calculator');

//policy_statement
Route::get('/policy/statement','FrontendController@policy_statement')->name('policy_statement');
Route::post('/policy/statement','FrontendController@postPolicy_statement')->name('policy_statement');
//Route::get('/policy/statement/result','FrontendController@policy_statement_result')->name('policy_statement_result');

//pay_premium
Route::get('/pay/premium','FrontendController@pay_premium')->name('pay_premium');

//network_hospitality
Route::get('/network/hospitality','FrontendController@network_hospitality')->name('network_hospitality');

//products
Route::get('/products','FrontendController@products')->name('products');

//products
Route::get('/products/product-single/{product_id}','FrontendController@product_single')->name('product_single');

//faq
Route::get('/faq','FrontendController@faq')->name('faq');

//career
Route::get('/career','FrontendController@career')->name('career');

//career_single
Route::get('/career-single','FrontendController@career_single')->name('career_single');

//apply_career
Route::get('/apply-career','FrontendController@apply_career')->name('apply_career');

//office_information
Route::get('/office-information','FrontendController@office_information')->name('office_information');
Route::get('/office-information/sb','FrontendController@office_information_sb')->name('office_information_sb');


//corporate_information
Route::get('/corporate-information','FrontendController@corporate_information')->name('corporate_information');

//corporate_information
Route::get('/corporate-chronicle','FrontendController@corporate_chronicle')->name('corporate_chronicle');

//business_performance
Route::get('/business-performance','FrontendController@business_performance')->name('business_performance');

//All Employee
Route::get('/all/employee','FrontendController@all_employee')->name('all_employee');
//notices
Route::get('/notices','FrontendController@notices')->name('notices');
Route::get('/claims','FrontendController@claims')->name('fclaims');
Route::get('/news','FrontendController@news')->name('fnews');

//notice_single
Route::get('/notice-single/{notice_id}','FrontendController@notice_single')->name('notice_single');

//contacts
Route::get('/contacts','FrontendController@contacts')->name('contacts');

//about
Route::get('/about','FrontendController@about')->name('about');

//fareast_star_single
Route::get('/fareast/star/{star_id}','FrontendController@fareast_star_single')->name('fareast_star_single');

//financial_information
Route::get('/shareholding/structure','FrontendController@financial_information')->name('financial_information');

//valueAddStatement
Route::get('/value/add/statement','FrontendController@value_add_statement')->name('value_add_statement');

//valueAddStatement
Route::get('/digital/services/sms','FrontendController@digital_services_sms')->name('digital_services_sms');

//digital_activites
Route::get('/digital/activities','FrontendController@digital_activities')->name('digital_activities');

//annual_reports
Route::get('/annual/reports','FrontendController@annual_reports')->name('annual_reports');

//complaince_certificate
Route::get('/complaince/certificate','FrontendController@complaince_certificate')->name('complaince_certificate');

//complaince_report
Route::get('/complaince/report','FrontendController@complaince_report')->name('complaince_report');

//director_report
Route::get('/director/report','FrontendController@director_report')->name('director_report');

//financial_statement
Route::get('/financial/statement','FrontendController@financial_statement')->name('financial_statement');

//gallery
Route::get('/gallery','FrontendController@gallery')->name('gallery');


// FrontEnd Routes End

// OUTSIDERS

// non verified
Route::get('/non_verified','NonUserController@non_verified')->name('non_verified');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->middleware('outsiders')->name('home');

// About Section below
Route::get('/about','FrontendController@about')->name('about');

Route::get('/manageAbout','FrontendController@manageAbout')->name('manageAbout');
Route::post('/save-about','FrontendController@saveabout')->name('saveabout');

// Mission & Vision
Route::get('/manageMissionVision','FrontendController@manageMissionVision')->name('manageMissionVision');
Route::post('/saveMission','FrontendController@saveMission')->name('saveMission');
Route::post('/saveVision','FrontendController@saveVision')->name('saveVision');
Route::post('/saveHistory','FrontendController@saveHistory')->name('saveHistory');


// fareastStar
Route::get('/fareastStar','FrontendController@fareastStar')->name('fareastStar');
Route::post('/saveFareastStar','FrontendController@saveFareastStar')->name('saveFareastStar');
Route::get('/delete/career/{id}','FrontendController@deletecareer')->name('deletecareer');


// Career Section
Route::get('/manageCareer','FrontendController@manageCareer')->name('manageCareer');
Route::post('/saveCareer','FrontendController@saveCareer')->name('saveCareer');

//career_single
Route::get('/career-single/{id}','FrontendController@career_single')->name('career_single');

//apply_career
Route::get('/apply-career/{id}','FrontendController@apply_career')->name('apply_career');
Route::post('/get/state/name','FrontendController@getstatename')->name('getstatename');
Route::post('/saveCareerApplication','FrontendController@saveCareerApplication')->name('saveCareerApplication');

Route::get('/show/claim/pdf/{id}/{pdf}','ClaimController@showclaimpdf')->name('showclaimpdf');

// Applied Applications
Route::get('/manageApplication','FrontendController@manageApplication')->name('manageApplication');
