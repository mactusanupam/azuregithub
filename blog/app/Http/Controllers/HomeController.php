<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App;
use PDF;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\projectdetails;
//use App\service_logs;
use App\leaveinfos;
use App\leavetype;
use App\enabledisable;
use App\user;
use App\statusapprove;
use App\mastercustomertable;
use App\project;
use Response;
use DateTime;
use Carbon\Carbon;
use App\sitename;
use App\service_logs;
use App\SubmitServiceLog;
use Session;
use Alert;

//use Vinkla\Alert\Alert;
//use Vinkla\Alert\Facades\Alert;
class HomeController extends Controller
{

    protected $titles = null;
    protected $project_name = null;
    protected $project_list = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   

   public function store()
    {
        Flash::message('Welcome Aboard!');

        return Redirect::home();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
       // $username = auth::user()->name;
        $user_id = auth::user()->id;
       
       $db1= DB::table('information')->orderBy('id', 'desc')->take(5)->get();
       $db2= DB::table('empdetails')->where('user_id', $user_id)->get();
       $db=[$db1, $db2];
       return view('home')->with('db',$db);
 
    }


    public function inventory()
    {
     // $data= DB::table('projectdetails')->where('status', 'enable')->get();
      //$data1 = Auth::user()->Company_id;
        $projectdetails = DB::table('projectdetails')->select('id', 'projec_name')->get();
         //$data = DB::table('inventoryproject')->select("project_name")->get();
      return view('inventorycall')->with('projectdetails',$projectdetails);
    }
}

    //select * from information order by id desc limit 5;
//select * from empdetails where user_id = 1;(user_id);