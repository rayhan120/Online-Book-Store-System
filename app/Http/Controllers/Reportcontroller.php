<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Order;
use App\Models\payments;
use App\Models\orderdetails;
class Reportcontroller extends Controller
{

    public function bookreport()
    {
        $fromdate='';
        $todate='';
        $report=[];
   
        if(isset($_GET['from_date']) && isset($_GET['to_date']))
         

         {

            $fromdate=date('Y-m-d',strtotime($_GET['from_date']));
            //dd($fromdate);
            
            $todate=date('Y-m-d',strtotime($_GET['to_date']));
            
        //$orderreport=Order::whereBetween('created_at',[$fromdate,$todate])->get();
        $report=Order::whereBetween('created_at',[$fromdate,$todate])->get();
        //dd($report);

         }

        return view('backend.layouts.reports.book_report',compact('report','fromdate','todate'));
    }


    public function reportdetails($id)
    {
        

        $report_orders=Order::with(['details','payment'])->find($id);
        //dd($report_orders);
        //$payment=payments::find($id);
        //$orderdetail=orderdetails::find($id);
      


//dd($report_orders);
return view('backend.layouts.reports.report_details',compact('report_orders'));

    }
}
