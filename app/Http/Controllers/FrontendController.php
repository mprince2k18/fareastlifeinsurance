<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Award;
use App\About;
use App\Claim;
use App\Gallery;
use App\Promotion;
use App\Corporate;
use App\Ceo;
use App\CorpCronicle;
use App\Event;
use App\Faq;
use App\FareastStar;
use App\FooterMenu;
use App\Popup;
use App\FooterWidgets;
use App\Logo;
use App\MainMenu;
use App\Management;
use App\ManagementBoard;
use App\News;
use App\Message;
use App\Slider;
use App\Notice;
use App\Privacy;
use App\Product;
use App\Social;
use App\SubMenu;
use App\Topheader;
use App\Video;
use App\Map;
use App\QuickService;
use App\VisitorsCount;
use App\page;
use App\Chairman;
use App\BenifitProduct;
use App\IntroductionProduct;
use App\Mission;
use App\Vision;
use App\History;
use App\Star;
use App\Career;
use App\Country;
use App\State;
use App\CareerApplication;
use App\CorpInfo;
use Alert;
use Carbon\Carbon;
use Image;
use App\AnnualReports;
use App\Shareholding;
use App\FinancialStatement;
use App\Year;
use App\CompalianceCertificate;
use App\CompalianceReport;
use App\Hospitality;
use App\OfficeInformation;
use App\ValueStatement;
use App\DirectorReport;
use App\FareastStarValue;
use GuzzleHttp\Client;

class FrontendController extends Controller
{
// index
    function index(Request $request)
    {

      $ip = VisitorsCount::insert([
        'visitor' => $_SERVER['REMOTE_ADDR'],
        'created_at'=>Carbon::now(),
      ]);



      $maps = Map::take(1)->get();
      $popups = Popup::take(1)->latest()->get();


      $top_header           = Topheader::latest()->paginate(1);
      $products             = Product::all();
      $bimas                = page::all();
      $fareast_stars        = FareastStar::all();
      $faqs                 = Faq::all();
      $events               = Event::all();
      $notices              = Notice::latest()->paginate(3);
      $newses               = News::latest()->paginate(4);
      $awards               = Award::all();
      $corporates           = Corporate::all();
      $sliders              = Slider::all();
      $quick_services       = QuickService::all();
      $claims               = Claim::latest()->paginate(4);
      $galleries            = Gallery::latest()->paginate(16);
      $promotions           = Promotion::latest()->get();

      // echo $popups[0]->toDate->format('M');
      // $toDate = Carbon::createFromFormat('Y-m-d', $popups->toDate)->format('M d, Y');
      // echo Carbon::createFromFormat('m', $popups[0]->toDate)->format('M');;
      // echo $popups;
      return view('frontend.homepage.index',compact('top_header','popups','galleries','promotions','claims','products','fareast_stars','faqs','events','notices','newses','awards','corporates','sliders','maps','quick_services','bimas'));
    }

    // messages
    //
    // function messages()
    // {
    //   return view('frontend.messages.index');
    //   $x  = VisitorsCount::whereDate('created_at',Carbon::yesterday())->count(); //yesterday =2
    //   $z  = VisitorsCount::whereDate('created_at',Carbon::now())->count(); // today = 5
    //   $y = $z/$x*100/10;
    //   echo $y;
    // }


    // page
    function bima($page_id)
    {
      $page = page::findOrFail($page_id);
      return view('frontend.bimas.page',compact('page'));
    }

    // page
    function page($page_id)
    {
      $page = Promotion::findOrFail($page_id);
      return view('frontend.pages.page',compact('page'));
    }

    // management_committee
    function management_committee()
    {
      $management_commitees = Management::where('menagaement_board_id',2)->get();
      return view('frontend.management_committee.index',compact('management_commitees'));
    }

    // management_corporate
    function management_corporate()
    {
      $corporate_managements = Management::where('menagaement_board_id',3)->get();
      return view('frontend.corporate_management.index',compact('corporate_managements'));
    }

    // // single_committee
    // function single_committee()
    // {
    //   $single_message = Chairman::latest()->paginate(1);
    //   // $single_message = Message::all();
    //   return view('frontend.messages.index',compact('single_message'));
    // }
    // single_committee
    function chairman_message()
    {
      $single_message = Chairman::all();
      // $single_message = Message::all();
      return view('frontend.messages.index',compact('single_message'));
    }
    // ceo_message
    function ceo_message()
    {
      $single_message = Ceo::all();
      // $single_message = Message::all();
      return view('frontend.messages.ceo',compact('single_message'));
    }

    // board_of_directors
    function board_of_directors()
    {
      $chairmans = Chairman::latest()->paginate(1);
      $board_of_directors = Management::where('menagaement_board_id',1)->get();
      return view('frontend.board_of_directors.index',compact('chairmans','board_of_directors'));
    }



    // premium_calculator
    function premium_calculator()
    {
      return view('frontend.premium_calculator.premium_cal');
    }

    // policy_statement
    function policy_statement()
    {
      return view('frontend.policy_statement.policy_statement');
    }

     function postPolicy_statement(Request $request)
    {
        $po_n = $request->po_n;
        $pdate = $request->pdate;
        $pphone = $request->pphone;
        $client = new Client();
        $res = $client->request('POST', 'http://202.164.213.67/android/statement.php', [
            'form_params' => [
                'pol_no' => $po_n,
            ]
       ]);
        //$res = $client->get('http://202.164.213.67/android/statement.php');
        //050000366
        $results= $res->getBody()->getContents();
        //echo '<pre>';
       // print_r($result);
        return view('frontend.policy_statement.policy_statement_result')->with('results', json_decode($results, true));
    }

    // pay_premium
    function pay_premium()
    {
      return view('frontend.pay_premium.pay_premium');
    }

    // network_hospitality
    function network_hospitality()
    {
      $nhs = Hospitality::orderBy('id','asc')->get();
      return view('frontend.network_hospitality.network_hospitality')->withNhs($nhs);
    }

    // products
    function products()
    {
      $products     = Product::all();
      return view('frontend.products.products',compact('products'));
    }

    // product_single
     function product_single($id)
     {
       $productInfo = Product::findOrFail($id);
       $BenifitProduct = BenifitProduct::where('product_id',$id)->get();
       $IntroductionProduct = IntroductionProduct::where('product_id',$id)->get();
       return view('frontend.products.product_single',compact('BenifitProduct','IntroductionProduct','productInfo'));
     }

    // faq
    function faq()
    {
      $faqs = Faq::all();
      return view('frontend.faq.faq',compact('faqs'));
    }

    // career
    function career()
    {
      return view('frontend.career.career');
    }

    // career_single
    function career_single()
    {
      return view('frontend.career.career_single');
    }

    // apply_career
    function apply_career()
    {
      return view('frontend.career.apply_career');
    }

     function all_employee()
    {
       $client = new Client();
       $res = $client->request('GET', 'http://202.164.213.67/android/hrd_emp_info.php');
      
      $results= $res->getBody()->getContents();
     // print_r($results);
      return view('frontend.all_employee.all_employee_result')->with('results', json_decode($results, true));
    }

    // office_information
    function office_information()
    {
      //$doins = OfficeInformation::where('catoption','=','Divisional')->get();
      //$soins = OfficeInformation::where('catoption','=','Service Center')->get();
      //$zoins = OfficeInformation::where('catoption','=','Zonal Office')->get();
      //$boins = OfficeInformation::where('catoption','=','Branch Office')->get();

      $client = new Client();
      $res = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=EKOK&&OFF_TYPE=4', [
            'form_params' => [
                'PRJ' => 'EKOK',
                'OFF_TYPE' => 1,
            ]
       ]);
      
      $results= $res->getBody()->getContents();

      $res_soins = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=EKOK&&OFF_TYPE=3', [
            'form_params' => [
                'PRJ' => 'EKOK',
                'OFF_TYPE' => 2,
            ]
       ]);
      
      $soin_results= $res_soins->getBody()->getContents();

      $res_zoins = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=EKOK&&OFF_TYPE=2', [
            'form_params' => [
                'PRJ' => 'EKOK',
                'OFF_TYPE' => 3,
            ]
       ]);
      
      $zoin_results= $res_zoins->getBody()->getContents();


      $res_boins = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=EKOK&&OFF_TYPE=1', [
            'form_params' => [
                'PRJ' => 'EKOK',
                'OFF_TYPE' => 4,
            ]
       ]);
      
      $boin_results= $res_boins->getBody()->getContents();
      
      return view('frontend.office_information.office_information')->with('doins', json_decode($results, true))->with('soins', json_decode($soin_results, true))->with('zoins', json_decode($zoin_results, true))->with('boins', json_decode($boin_results, true));
    }


     function office_information_sb()
    {
      //$doins = OfficeInformation::where('catoption','=','Divisional')->get();
      //$soins = OfficeInformation::where('catoption','=','Service Center')->get();
      //$zoins = OfficeInformation::where('catoption','=','Zonal Office')->get();
      //$boins = OfficeInformation::where('catoption','=','Branch Office')->get();

      $client = new Client();
      $res = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=SB&&OFF_TYPE=4', [
            'form_params' => [
                'PRJ' => 'SB',
                'OFF_TYPE' => 1,
            ]
       ]);
      
      $results= $res->getBody()->getContents();

      $res_soins = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=SB&&OFF_TYPE=3', [
            'form_params' => [
                'PRJ' => 'SB',
                'OFF_TYPE' => 2,
            ]
       ]);
      
      $soin_results= $res_soins->getBody()->getContents();

      $res_zoins = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=SB&&OFF_TYPE=2', [
            'form_params' => [
                'PRJ' => 'SB',
                'OFF_TYPE' => 3,
            ]
       ]);
      
      $zoin_results= $res_zoins->getBody()->getContents();


      $res_boins = $client->request('GET', 'http://202.164.213.67/android/office_info.php?PRJ=SB&&OFF_TYPE=1', [
            'form_params' => [
                'PRJ' => 'SB',
                'OFF_TYPE' => 4,
            ]
       ]);
      
      $boin_results= $res_boins->getBody()->getContents();
      
      return view('frontend.office_information.office_information_sb')->with('doins', json_decode($results, true))->with('soins', json_decode($soin_results, true))->with('zoins', json_decode($zoin_results, true))->with('boins', json_decode($boin_results, true));
    }

    // corporate_information
    function corporate_information()
    {
      $corpInfos = CorpInfo::all();
      return view('frontend.corporate_information.corporate_information',compact('corpInfos'));
    }

    // corporate_chronicle
    function corporate_chronicle()
    {
      $cronicles = CorpCronicle::all();
      return view('frontend.corporate_information.corporate_chronicle',compact('cronicles'));
    }

    // corporate_chronicle
    function business_performance()
    {
      // $cronicles = CorpCronicle::all();
      return view('frontend.corporate_information.business_performance');
    }

    // fareast_star_single
    function fareast_star_single($star_id)
    {
      $fareast_star_single  =   FareastStar::findOrFail($star_id);
      $fvalues = FareastStarValue::where('fareast_star_id',$star_id)->get();
      return view('frontend.fareast_star_single.fareast_star_single',compact('fareast_star_single','fvalues'));
    }

    // notices
    function notices()
    {
      $notices = Notice::latest()->paginate(5);
      return view('frontend.notices.notices',compact('notices'));
    }

     function claims()
    {
      $claims = Claim::latest()->paginate(4);
      return view('frontend.claims.claims',compact('claims'));
    } 

    function news()
    {
      $news = News::latest()->paginate(4);
      return view('frontend.news.news',compact('news'));
    }

    // notice_single
    function notice_single($notice_id)
    {
      $single_notice = News::findOrFail($notice_id);
      return view('frontend.notices.notice_single',compact('single_notice'));
    }

    // contacts
    function contacts()
    {
      return view('frontend.contacts.contacts');
    }



    // financial_information
    function financial_information()
    {
      $shares = Shareholding::latest()->get();
      return view('frontend.financial_information.index',compact('shares'));
    }

    // value_add_statement
    function value_add_statement()
    {
      
      $year = Year::first();
      $y1 = $year->year;
      $y2 = $year->year2;
      $values = ValueStatement::where('year1','=',$y1)->where('year2','=',$y2)->get();
      return view('frontend.value_add_statement.index')->withValues($values)->withYear($year);
    }

    // digital_services_sms
    function digital_services_sms()
    {
      return view('frontend.digital_services_sms.index');
    }

    // digital_activities
    function digital_activities()
    {
      return view('frontend.digital_activities.index');
    }

    // // annual_reports
    // function annual_reports()
    // {
    //   return view('frontend.annual_reports.index');
    // }

    // // complaince_certificate
    // function complaince_certificate()
    // {
    //   return view('frontend.complaince_certificate.index');
    // }
    
    // // complaince_report
    // function complaince_report()
    // {
    //   return view('frontend.complaince_report.index');
    // }

    // // director_report
    // function director_report()
    // {
    //   return view('frontend.director_report.index');
    // }

    // // financial_statement
    // function financial_statement()
    // {
    //   return view('frontend.financial_statement.index');
    // }

    // gallery
    function gallery()
    {
      $galleries = Gallery::latest()->get();
      return view('frontend.gallery.index',compact('galleries'));
    }




    // about
    function about()
    {
      $About = About::all();
      $Mission = Mission::all();
      $Vision = Vision::all();
      $History = History::all();
      // print_r($Mission->all());
      // echo $Mission->details;
      return view('frontend.about.about',compact('About','Mission','Vision','History'));
    }

    function manageAbout(){
      return view('dashboard.about.index');
    }
    function saveabout(Request $request){
      $request->validate([
        'title' => 'required',
        'details' => 'required',
        'photo' => 'required',
        'videoUrl' => 'required'
      ]);
      $allAbout = About::all();
      foreach($allAbout as $item){
        $item->delete();
      }
      $last_inserted_id = About::insertGetId([
        'title' => $request->title,
        'details' => $request->details,
        'photo' => 'default.jpg',
        'videoUrl' => $request->videoUrl
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(540,220)->save(base_path('public/uploads/about/'.$photo_name),100);
           About::find($last_inserted_id)->update([
           'photo'   => $photo_name,
          ]);
      }

      Alert::toast($request->product_title . '' . 'About Saved','success');
      return back();
      // save end
    }
    function manageMissionVision(){
      return view('dashboard.MissionVision.index');
    }
    function saveMission(Request $request){
      $request->validate([
        'details' => 'required',
        // 'one' => 'required',
        // 'two' => 'required',
        // 'three' => 'required',
        // 'four' => 'required',
        // 'five' => 'required',
        // 'six' => 'required',
        // 'seven' => 'required',
        // 'eight' => 'required',
        // 'nine' => 'required',
        // 'ten' => 'required'
      ]);
      $allAbout = Mission::all();
      foreach($allAbout as $item){
        $item->delete();
      }
      Mission::insert([
        'details' => $request->details,
        'one' => $request->one,
        'two' => $request->two,
        'three' => $request->three,
        'four' => $request->four,
        'five' => $request->five,
        'six' => $request->six,
        'seven' => $request->seven,
        'eight' => $request->eight,
        'nine' => $request->nine,
        'ten' => $request->ten
      ]);
      Alert::toast($request->product_title . '' . 'Mission Saved','success');
      return back();
    }
    function saveVision(Request $request){
      $request->validate([
        'details' => 'required',
        // 'one' => 'required',
        // 'two' => 'required',
        // 'three' => 'required',
        // 'four' => 'required',
        // 'five' => 'required',
        // 'six' => 'required',
        // 'seven' => 'required',
        // 'eight' => 'required',
        // 'nine' => 'required',
        // 'ten' => 'required'
      ]);
      $allAbout = Vision::all();
      foreach($allAbout as $item){
        $item->delete();
      }
      Vision::insert([
        'details' => $request->details,
        'one' => $request->one,
        'two' => $request->two,
        'three' => $request->three,
        'four' => $request->four,
        'five' => $request->five,
        'six' => $request->six,
        'seven' => $request->seven,
        'eight' => $request->eight,
        'nine' => $request->nine,
        'ten' => $request->ten
      ]);
      Alert::toast($request->product_title . '' . 'Mission Saved','success');
      return back();
    }
    function saveHistory(Request $request){
      $request->validate([
        'one' => 'required',
        'two' => 'required'
      ]);
      $allAbout = History::all();
      foreach($allAbout as $item){
        $item->delete();
      }
      History::insert([
        'one' => $request->one,
        'two' => $request->two
      ]);
      Alert::toast($request->product_title . '' . 'History Saved','success');
      return back();
    }

    function fareastStar(){
      return view('dashboard.star.index');
    }
    function saveFareastStar(Request $request){
      $request->validate([
        'title' => 'required',
        'dis' => 'required',
        'photo' => 'required'
      ]);

      $last_inserted_id = Star::insertGetId([
        'title' => $request->title,
        'dis' => $request->dis,
        'photo' => 'default.jpg'
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(90,90)->save(base_path('public/uploads/star/'.$photo_name),100);
           Star::find($last_inserted_id)->update([
           'photo'   => $photo_name,
          ]);
      }

      Alert::toast($request->product_title . '' . ' Saved','success');
      return back();
    }


    function manageCareer(){
      $Career = Career::all();
      return view('dashboard.Career.index',compact('Career'));
    }
    function saveCareer(Request $request){
      $request->validate([
        'title' => 'required',
        'location' => 'required',
        'position' => 'required',
        'deadline' => 'required',
        'salary' => 'required',
        'schedule' => 'required',
        'status' => 'required',
        'details' => 'required'
      ]);

      Career::insert([
        'title' => $request->title,
        'location' => $request->location,
        'position' => $request->position,
        'deadline' => $request->deadline,
        'salary' => $request->salary,
        'schedule' => $request->schedule,
        'status' => $request->status,
        'details' => $request->details,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);
      Alert::toast($request->product_title . '' . ' Saved','success');
      return back();
    }
    function deletecareer($id){
      Career::findOrFail($id)->delete();
      Alert::toast(' Removed','success');
      return back();
    }
    function getstatename(Request $request){

      $data="";
      $allData=State::where('country_id',$request->cuontryId)->get();
      foreach ($allData as $value) {
          $data.="<option value=".$value->id.">".$value->name."</option>";
      }
      echo $data;
    }
    function saveCareerApplication(Request $request){
      // print_r($request->all());
      $request->validate([
      'careerId' => 'required',
      'fName' => 'required',
      'lName' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'address' => 'required',
      'city' => 'required',
      'countryId' => 'required',
      'stateId' => 'required',
      'companyName' => 'required',
      'pTitle' => 'required',
      'skills' => 'required',
      'university' => 'required',
      'resume' => 'required|mimes:pdf,docx|max:6000',
      'photo' => 'required',
      'degree' => 'required',
      'grade' => 'required'
      ]);

      $lastId = CareerApplication::insertGetId([
        'careerId' => $request->careerId,
        'fName' => $request->fName,
        'lName' => $request->lName,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'city' => $request->city,
        'countryId' => $request->countryId,
        'stateId' => $request->stateId,
        'companyName' => $request->companyName,
        'pTitle' => $request->pTitle,
        'skills' => $request->skills,
        'university' => $request->university,
        'degree' => $request->degree,
        'grade' => $request->grade,
        'resume' => $request->resume,
        'photo' => "default.jpg"
      ]);

      if ($request->hasFile('photo')) {
      $photo = $request->photo;
      $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
      Image::make($photo)->resize(200, 200)->save(base_path("public/frontend/career_img/" . $photoName), 100);
      CareerApplication::findOrFail($lastId)->update([
          'photo' => $photoName,
      ]);
      // echo $photoName;
      }

      if ($request->file('resume')) {
      $photo = $request->resume;
      $photoName = $lastId . '.' . $photo->extension();
      $photo->move(base_path("public/frontend/career_file/"),$photoName);
      CareerApplication::findOrFail($lastId)->update([
          'resume' => $photoName,
      ]);
      // echo $photoName;
      }


      Alert::toast($request->product_title . '' . ' Saved','success');
      return back();

    }
    function manageApplication(){
      $CareerApplication = CareerApplication::all();
      return view('dashboard.CareerApplication.index',compact('CareerApplication'));
    }


  // annual_reports
    function annual_reports()
    {
      $reports = AnnualReports::get();
      return view('frontend.annual_reports.index',compact('reports'));
    }

    // complaince_certificate
    function complaince_certificate()
    {
      $reports = CompalianceCertificate::latest()->get();
      return view('frontend.complaince_certificate.index',compact('reports'));
    }

    // complaince_report
    function complaince_report()
    {
      $reports = CompalianceReport::latest()->get();
      return view('frontend.complaince_report.index',compact('reports'));
    }

    // director_report
    function director_report()
    {
      $drs = DirectorReport::get();
      return view('frontend.director_report.index')->withDrs($drs);
    }

    // financial_statement
    function financial_statement()
    {
      $statements = Year::with('years')->get();
      return view('frontend.financial_statement.index',compact('statements'));
      // return $statements;
    }

    // END

}
