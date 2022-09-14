<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todolist;
use Twilio\Rest\Client;


class ListsController extends Controller
{
    //

    public function landing()
    {
        $lists = DB::table('Todolists')-> get();
        $totalLists = $lists->count();

        $completedLists = DB::table('Todolists')->where('status','Completed')->get()->count();

        $unCompletedLists = DB::table('Todolists')->where('status','In Progress')->get()->count();
        return view('landing',['lists'=>$lists, 'totalLists'=>$totalLists, 'completedLists'=>$completedLists, 'unCompletedLists'=>$unCompletedLists]);
    }

    public function viewAllList()
    {
        $lists = DB::table('Todolists')-> get();
        $totalLists = $lists->count();

        $completedLists = DB::table('Todolists')->where('status','Completed')->get()->count();

        $unCompletedLists = DB::table('Todolists')->where('status','In Progress')->get()->count();

        return view('viewAllList',['lists'=>$lists, 'totalLists'=>$totalLists, 'completedLists'=>$completedLists, 'unCompletedLists'=>$unCompletedLists]);
    }
 
    public function insert_New_Item()
    {        
        return view('insertNewItem');
    }

    public function insertItem(Request $request)
    {        

        $title =       $request->input('title');
        $description = $request->input('description');
        //$completndate = $request->input('completndate');
        $responsibility = $request->input('responsibility');
        $status =      $request->input('status');
        $phoneNo =    $request->input('phoneNo');

        DB::table('todolists')->insert([
                'title'=>$title,
                'description'=>$description,
                'responsibility'=>$responsibility,
                'status'=>$status,
                'phoneNo'=>$phoneNo
        ]);
        
        //SendSMS();
    /*
        $account_sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
        $auth_token = 'your_auth_token';

        $twilio_number = "+15017122661";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
                '+15558675310',
        array(
            'from' => $twilio_number,
            'body' => 'I sent this message in under 10 minutes!'
        )
        
    );  */


        return \redirect('/');
        
    }

   

    public function editTaskForm(Request $request, $id)
    {
       // $value = "Completed";
        $completedLists = DB::table('todolists')->where('status', $id)->get();

        return view('editTaskForm', ['task'=>$completedLists]);
    }


    public function vwCompletedItems()
    {
        $value = "Completed";

        $completedLists = DB::table('Todolists')->where('status', $value)->get();

        return view('completedItems', ['completedLists'=>$completedLists]);
    }


   /* $lists = DB::table('Todolists')-> get();

    return view('viewAllList',['lists'=>$lists]);*/


    public function vwUnCompletedItems()
    {
        $value = "UnCompleted";

        $completedLists = DB::table('todolists')->where('status', $value)->get();

        return view('viewAllList', ['lists'=>$completedLists]);
    }
    
}
