@extends('frontend.master')
@section('content')




<div class="row ">


<div class="col-md-1">

</div>
<div class="col-md-10  bg-light mt-3 mb-4 text-danger p-2" > 
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  

  <title>Book Ordering System</title>


  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
  <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- custom css -->
  <link href="css/theme.css" rel="stylesheet">

</head>

<body>


  <div id="wrapper">

      <div class="wrapper wrapper-content animated fadeInRight "  style="margin-left:10%" >

        <div class="row" style="margin-top:10%" >
          <div class="col-lg-12 "    >
            <div class="ibox">

              <div class="ibox-content">
                                <div class="row" id="printArea">
                  <div class="col-6" >
                 
            



                    <p style="font-size:16px; color:red; text-align: center"> </p>
                    <table border="1" class="table table-bordered mg-b-0  ">
                      <tr align="center">
                        <td colspan="2" style="font-size:20px;color:black">
                          User Details</td>
                      </tr>

                      <tr>
                        <th>Order Number</th>
                        <td>{{$report_orders->id}}</td>
                      </tr>
                      <tr>
                        <th>Name</th>
                        <td>{{$report_orders->name}}</td>
                      </tr>
                      
                      
                        <th>Mobile Number</th>
                        <td>{{$report_orders->phone}}</td>
                    
                      

                      <tr>
                        <th>Address</th>
                        <td>{{$report_orders->address}}</td>
                      </tr>
                      <tr>
                        <th>City</th>
                        <td>{{$report_orders->city}}</td>
                      </tr>
                      <tr>
                        <th>Order Date</th>
                        <td>{{$report_orders->created_at}}</td>
                      </tr>
                      <tr>
                        <th style="text-align: center" colspan="2">Payment Details <span style="color: blue"></span></th>
                      </tr>
                      <th>Payment Mathod</th>
                        <td>{{$report_orders->payment->pmathod}}</td>
                      </tr>
                      
                      
                      <tr>
                        
                      
                                       <tr>
                                       <th>Order Final Status</th>
                                      
                                       <td> {{$report_orders->status}} </td>

                                      
       
                        
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-6" style="margin-top:5% ">
                      <table border="1" class="table table-bordered mg-b-0 ">
                      <tr align="center">
                        <td colspan="5" style="font-size:20px;color:blue">
                          </td>

                      </tr>
                  
                        <th>Order ID</th>
                        <th>Book Name</th>
                        <th>Book </th>
                        <th>Quantity</th>
                        <th>Price</th>
                      </tr>

                     
                      @foreach($report_orders->details as $data)
                      
                                            <tr>
                    
                    
                        <td>{{$data->order_id}}</td>
                        <td>{{$data->book_name}}</td>
                        <td><img style="width:50px;height:50px" src="{{url('/uploads/product/'.$data->image)}}" alt=""></td>
                        <td>{{$data->book_qty}}</td>
                        <td>{{$data->book_price}}</td>

                      </tr>

                    @endforeach
                                            <tr>
                        <th colspan="4" style="text-align:center">Grand Total </th>
                        <td>{{$report_orders->price}}</td>

                      </tr>

                    </table>
                    
                      <tr>                 
                      </tr>
                  </div>

                    </table>
                    

                  </div>


                </div>

                <table class="table mb-0">  

            </div>
            
            </div>
          </div>

        </div>
        
      </div>

      <div style="text-align:center" class="mt-3 mb-2 "   >  


      @if($report_orders->status=='Ordered')     

                           <a   class="btn btn-sm  text-danger"  href="{{route('statuss.update',['stauts'=>'Order Alreday Cancelled','id'=>$report_orders->id])}}"> <h6>Cancel this order</h6></a>

                        
                        @else
                        {{$report_orders->status}} 
                        @endif

</div>

      <div style="text-align:center" class="mt-1 mb-5"   >  

      
      
        <button type="button"  onclick="printDiv()" class="btn btn-success">Invoice</button></div>  
      
      <div class="footer">
            
            
        </div>
    </div>
  </div>

  </div>
  <div class="col-md-1 bg-secondary">

</div>
</div>

  <!-- Mainly scripts -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="js/inspinia.js"></script>
  <script src="js/plugins/pace/pace.min.js"></script>

  <!-- Steps -->
  <script src="js/plugins/steps/jquery.steps.min.js"></script>

  <!-- Jquery Validate -->
  <script src="js/plugins/validate/jquery.validate.min.js"></script>


  <script>
    $(document).ready(function () {
      $("#wizard").steps();
      $("#form").steps({
        bodyTag: "fieldset",
        onStepChanging: function (event, currentIndex, newIndex) {
          // Always allow going backward even if the current step contains invalid fields!
          if (currentIndex > newIndex) {
            return true;
          }

          // Forbid suppressing "Warning" step if the user is to young
          if (newIndex === 3 && Number($("#age").val()) < 18) {
            return false;
          }

          var form = $(this);

          // Clean up if user went backward before
          if (currentIndex < newIndex) {
            // To remove error styles
            $(".body:eq(" + newIndex + ") label.error", form).remove();
            $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
          }

          // Disable validation on fields that are disabled or hidden.
          form.validate().settings.ignore = ":disabled,:hidden";

          // Start validation; Prevent going forward if false
          return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
          // Suppress (skip) "Warning" step if the user is old enough.
          if (currentIndex === 2 && Number($("#age").val()) >= 18) {
            $(this).steps("next");
          }

          // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
          if (currentIndex === 2 && priorIndex === 3) {
            $(this).steps("previous");
          }
        },
        onFinishing: function (event, currentIndex) {
          var form = $(this);

          // Disable validation on fields that are disabled.
          // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
          form.validate().settings.ignore = ":disabled";

          // Start validation; Prevent form submission if false
          return form.valid();
        },
        onFinished: function (event, currentIndex) {
          var form = $(this);

          // Submit form input
          form.submit();
        }
      }).validate({
        errorPlacement: function (error, element) {
          element.before(error);
        },
        rules: {
          confirm: {
            equalTo: "#password"
          }
        }
      });
    });
  </script>

</body>

</html>






<script type="text/javascript">


		function printDiv(){
			var printContents = document.getElementById("printArea").innerHTML;
		var	originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	

    </script>




@endsection