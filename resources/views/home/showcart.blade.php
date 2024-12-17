<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
       
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Tiệm hoa Cosy Florist</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }
        table,th,td{
        border: 2px solid green;
        border-collapse: collapse;
        padding: 5px 20px;
        }
        .th_deg{
            background-color: #ce8c7c;
        }
        
        .a
        {
            padding-top: 5px;
            padding-bottom: 5px;
            font-size:20px;
        }
        .img_deg{
            width: 250px;
            height: 200px;
        }
        .total_deg{
            padding-top: 15px;
        }

      </style>
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header');
         <!-- end header section -->
         @if(session()->has('message_order_completed'))
         <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

             {{session()->get('message_order_completed')}}
         </div>
     @endif
     
    <div class="center">
        <table style="margin-left:80px;">
            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Product Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>

            <?php 
                $totalprice=0; 
            ?>

            @forelse($cart as $cart)
        
            <tr>
                {{-- @php
                    dd($cart);
                @endphp --}}
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
            
                <td><i class='fas fa-book-dead'></i>{{$cart->price}}</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product ?')" href="{{ url('/remove_cart', $cart->id) }}">Remove</a></td>
            </tr>

            <?php
                $totalprice = $totalprice + $cart->price; 
            ?>

                @empty
                <tr>
                    <td colspan="16">
                        No Data Found
                    </td>
                </tr>

            @endforelse
         
        </table>
        <div>
            <h1 class="a" >Total Price: ${{$totalprice}}</h1>
        </div>

        <div>
            <h1 class="a" >Proceed to Order</h1>
            <a href="{{ url('cash_order') }}" class="btn btn-danger">Cash On Delivery</a>
            <a href="{{url('stripe', $totalprice)}}" class="btn btn-danger">Pay Using Card</a>
        </div>
    </div>
  
     @include('home.footer');
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>