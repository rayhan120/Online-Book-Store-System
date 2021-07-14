@extends('frontend.master')
@section('content')

@if(session()->has('success'))
      <div clss='alert alert-success'>  {{session()->get('success')}}  </div>
    @endif
    
<div class="container mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
        
            <div class="product-details mr-2">
            
                <div class="d-flex flex-row align-items-center">
                <i class="fa fa-long-arrow-left"></i>
                <a href="{{route('website')}}"   class="navbar-brand d-flex align-items-center text-info ">
                <span class="ml-2 "> <h6>Continue Shopping </h6></span></div>
                </a>
                <hr>
                <h4 class="mb-3 text-warning">My Cart</h4>
                <div class="d-flex justify-content-between text-danger"><span>You have  {{count($cart)}} items in your cart</span>
                    <div class="d-flex flex-row align-items-center"><span class="text-black-50"></span>
                        <div class="price ml-2"><span class="mr-1"></span><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>

                @if($cart)
                
                @foreach($cart as $key=>$data)
                <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex flex-row">
                    <img class="rounded" src="{{'/uploads/product/'.$data->options->image}}" width="100">
                        <div class="ml-2"><span class="font-weight-bold d-block">{{$data->name}}</span>   <span class="spec"> </span></div>
                    </div>

                    <form action="{{ route('cart.update', $key)}}" method="post">
                               @csrf
                   <tr>
                   <div class="input-append ">
                   <input class="spnal" name="queantity" style="max-width:39px" value="{{$data->qty}}" placholder="{{$data->qty}}"
                   id="appendedInputButtons" size="16" type="text"> 
                   </input>

                    <button class="btn btn-success" type="submit"> update</button>
                    </div>


                     </tr>
                  </form>

                <span>{{$data->qty}} x {{$data->price}}</span>
                    <div class="d-flex flex-row align-items-center">
                    <span class="d-block">    </span>
                    <span class="d-block ml-5 font-weight-bold">{{$data->subtotal()}} BDT</span>
                    <i class="fa fa-trash-o ml-3 text-black-50"></i></div>


                    <tr>
                    <td>
<a href="{{route('cart.remove',$data->rowId)}}" > <button class="btn btn-danger"> remove</button>
 </a>
                    
                    </td>
                      
                    </tr>
                </div>

                @endforeach
                @else

                <p>Cart is empty</p>


            @endif

               
            </div>
        </div>
        <div class="col-md-4">
        <h3 class="mx-2"> Checkout Summary </h3>
            <div class="payment-info">
                @php 
                $total=(float) str_replace(',','',Cart::subtotal());
                @endphp
                
                <hr class="line">
                <div class="d-flex justify-content-between information"><span>Subtotal</span><span>{{Cart::subtotal()}}</span></div>
                <div class="d-flex justify-content-between information"><span>Shipping</span><span>50.00</span></div>
                <div class="d-flex justify-content-between information"><span>Total(Incl. Shipping)</span>
                <span>{{$total+50}}</span>
                </div>
                <button class="btn btn-danger btn-block d-flex justify-content-between mt-3" type="button">
               <a  class=" btn btn-danger" href="{{route('Order.list')}}"> <span >Go to Shipping Page<i class="fa fa-long-arrow-right ml-1"></i></span> </a></button> 
            </div>
            
        </div>
        
    </div>
</div>


<style type="text/css">
.payment-info {
    background: blue;
    padding: 10px;
    border-radius: 6px;
    color: #fff;
    font-weight: bold
}

.product-details {
    padding: 10px
}

body {
    background: #eee
}

.cart {
    background: #fff
}

.p-about {
    font-size: 12px
}

.table-shadow {
    -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42)
}

.type {
    font-weight: 400;
    font-size: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 1px 12px;
    border: 2px solid #ada9a9;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 300
}

label.radio input:checked+span {
    border-color: #fff;
    background-color: blue;
    color: #fff
}

.credit-inputs {
    background: rgb(102, 102, 221);
    color: #fff !important;
    border-color: rgb(102, 102, 221)
}

.credit-inputs::placeholder {
    color: #fff;
    font-size: 13px
}

.credit-card-label {
    font-size: 9px;
    font-weight: 300
}

.form-control.credit-inputs:focus {
    background: rgb(102, 102, 221);
    border: rgb(102, 102, 221)
}

.line {
    border-bottom: 1px solid rgb(102, 102, 221)
}

.information span {
    font-size: 12px;
    font-weight: 500
}

.information {
    margin-bottom: 5px
}

.items {
    -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
    box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08)
}

.spec {
    font-size: 11px
}
</style>


@endsection