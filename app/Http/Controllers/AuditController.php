<?php

namespace App\Http\Controllers;
use Auth;
use PDF;
use DB;
use Illuminate\Http\Request;
use App\init_po1;
use App\po1;
class AuditController extends Controller
{
    public function index(){
       
        return view('assesment.audit_view');
    }
    public function addFormData(request $request,$id){
      $po1 = new po1();
      $po1->initid = $id;
      $po1->question1 = $request->question1;
      $po1->rate1 = $request->rate1;
      $po1->question2a = $request->question2a;
      $po1->rate2a = $request->rate2a;
      $po1->question2b = $request->question2b;
      $po1->rate2b = $request->rate2b;
      $po1->question2c = $request->question2c;
      $po1->rate2c = $request->rate2c;
      $po1->question3 = $request->question3;
      $po1->rate3 = $request->rate3;
      $po1->question4 = $request->question4;
      $po1->rate4 = $request->rate4;
      $po1->question5 = $request->question5;
      $po1->rate5 = $request->rate5;
      $po1->question6 = $request->question6;
      $po1->rate6 = $request->rate6;
      $po1->question7 = $request->question7;
      $po1->rate7 = $request->rate7;
      $po1->question8 = $request->question8;
      $po1->rate8 = $request->rate8;
      $po1->question9 = $request->question9;
      $po1->rate9 = $request->rate9;
      $po1->question10 = $request->question10;
      $po1->rate10 = $request->rate10;
      $po1->question11 = $request->question11;
      $po1->rate11 = $request->rate11;
      $po1->question12 = $request->question12;
      $po1->rate12 = $request->rate12;
      $po1->save();

      $po1s = init_po1::join('po1s','po1s.initid','=','init_po1s.id')
        ->where('init_po1s.id','=',$id)
        ->select('init_po1s.id as id',DB::raw("CONCAT(init_po1s.firstName,' ',init_po1s.lastName) as full_name"),
        'init_po1s.companyName as name','init_po1s.companyAddress as address','init_po1s.email as email',
        'po1s.created_at as date','po1s.rate1 as rate1','po1s.rate2a as rate2a','po1s.rate2b as rate2b','po1s.rate2c as rate2c'
        ,'po1s.rate3 as rate3','po1s.rate4 as rate4','po1s.rate5 as rate5','po1s.rate6 as rate6','po1s.rate7 as rate7'
        ,'po1s.rate8 as rate8','po1s.rate9 as rate9','po1s.rate10 as rate10','po1s.rate11 as rate11','po1s.rate12 as rate12'
        ,'po1s.question1 as question1','po1s.question2a as question2a','po1s.question2b as question2b','po1s.question2c as question2c'
        ,'po1s.question3 as question3','po1s.question4 as question4','po1s.question5 as question5','po1s.question6 as question6'
        ,'po1s.question7 as question7','po1s.question8 as question8','po1s.question9 as question9','po1s.question10 as question10'
        ,'po1s.question11 as question11','po1s.question12 as question12')
        ->get();
      
        return view('assesment.cetak_p01',compact('po1','po1s'));

    }
    public function assesment(request $request){
        
        $init = new init_po1();
        $init->userid = Auth::user()->id;
        $init->firstName = $request->firstName;
        $init->lastName = $request->lastName;
        $init->companyName = $request->companyName;
        $init->companyAddress = $request->companyAddress;
        $init->email = $request->email;
        $init->save();
        $init1 = init_po1::all();
        return view('assesment.assesment_form',compact('init1'));
    }
    public function download(request $id){
        
 
  
  
        $po1s = init_po1::join('po1s','po1s.initid','=','init_po1s.id')
          ->where('init_po1s.id','=',$id)
          ->select('init_po1s.id as id',DB::raw("CONCAT(init_po1s.firstName,' ',init_po1s.lastName) as full_name"),
          'init_po1s.companyName as name','init_po1s.companyAddress as address','init_po1s.email as email',
          'po1s.created_at as date','po1s.rate1 as rate1','po1s.rate2a as rate2a','po1s.rate2b as rate2b','po1s.rate2c as rate2c'
          ,'po1s.rate3 as rate3','po1s.rate4 as rate4','po1s.rate5 as rate5','po1s.rate6 as rate6','po1s.rate7 as rate7'
          ,'po1s.rate8 as rate8','po1s.rate9 as rate9','po1s.rate10 as rate10','po1s.rate11 as rate11','po1s.rate12 as rate12'
          ,'po1s.question1 as question1','po1s.question2a as question2a','po1s.question2b as question2b','po1s.question2c as question2c'
          ,'po1s.question3 as question3','po1s.question4 as question4','po1s.question5 as question5','po1s.question6 as question6'
          ,'po1s.question7 as question7','po1s.question8 as question8','po1s.question9 as question9','po1s.question10 as question10'
          ,'po1s.question11 as question11','po1s.question12 as question12')
          ->get();
          
          $view = View('pdf.pdf', compact('po1s'));
          $pdf = \App::make('dompdf.wrapper');
          $pdf->loadHTML($view->render());
          return $pdf->stream();
       
          
  
      }
       
    }

