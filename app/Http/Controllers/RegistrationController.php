<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
   public function index()
   {
       $divisions = DB::table('tb1_divisions')->get();

       return view('welcome')->with('divisions',$divisions);

       //echo $divisions;
   }
   public function district( Request $r)
   {
       //return json_encode($r->id);
        if($r->has('id')){
           // return json_encode("hello");
            $district = DB::table('tb1_districs')->where('div_id', $r->id)->get();

            return  json_encode($district);
        }
   }

    public function thana( Request $r)
    {
        //return json_encode($r->id);
        if($r->has('id')){
            // return json_encode("hello");
            $district = DB::table('tb1_thana')->where('dis_id', $r->id)->get();

            return  json_encode($district);
        }

    }

    public function save(Request $request)
    {
        $store = new Registration;

        $store->name = $request->name;
        $store->dob = $request->date;
        $store->disease = $request->disease;
        $store->Location = $request->div_id;

        $store->save();
        return view('thanks');
    }
}
