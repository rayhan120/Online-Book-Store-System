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
        //$stop_date='';
        $report=[];
   
        if(isset($_GET['from_date']) && isset($_GET['to_date']))
         

         {
           
            
            $fromdate=date('Y-m-d',strtotime($_GET['from_date']));
           
            
            $todate=date('Y-m-d ',strtotime($_GET['to_date']));


           
        
       // $report=Order::whereBetween('created_at',[$fromdate,$todate])->get();
      

        $report=Order::whereBetween('created_at', [$fromdate." 00:00:00",$todate." 23:59:59"])->get();


         }

        return view('backend.layouts.reports.book_report',compact('report','fromdate','todate'));
    }


    public function reportdetails($id)
    {
        

        $report_orders=Order::with(['details','payment'])->find($id);
        //dd($report_orders);
//dd($report_orders);
return view('backend.layouts.reports.report_details',compact('report_orders'));

    }
}
