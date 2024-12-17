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
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      
      <style>
        .img-box{
            margin-left: 150px;
            width: 200px;
            padding-top: 30px;
            
        }
        blockquote, dl, dd, h1, h2, h3, h4, h5, h6, hr, figure, p, pre{
            padding-left: 150px;
        }
        .col-lg-8 h1{
            font-size: 35px;
            font-weight: bold;
            margin: 0px 0px 30px 0px;
            font-family: sans-serif;
            background-color: #ce8c7c;
        }
        .des_product{
            padding: 0px 0px 17px 151px;
            font-size: 17px;
            font-family: unset; 
        }
        #input_number{
            width: 212px;
            margin: 20px 0 30px 160px;
        }
      #input_add{
            width: 212px;
            margin-left: 160px;
        }
        form input[type="submit"]{
         padding: 15px 57px;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header');
         <!-- end header section -->
      
   
      
      <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-4">
        
            <div class="img-box">
               <img style="width: 200px" src="/product/{{$product->image}}" alt="">
            </div>
            <div class="detail-box">
               <h5>
                  {{$product->title}}
               </h5>
 
               @if ($product->discount_price!=null)
               <h6 style="color: red; font-weight: bold">
                Price: ${{$product->discount_price}}
              </h6>
 
              <h6 style="text-decoration: line-through">
                 ${{$product->price}}
              </h6>
              @else
              <h6>
                 ${{$product->price}}
              </h6>
 
               @endif
               
                 
 
               <form action="{{url('add_cart', $product->id)}}" method="POST">
                @csrf
                <div class="row">
                   <div>
                      <input id="input_number" type="number" value="1" name="quantity" min="1">
                   </div>
                   <div>
                     <input id="input_add" type="submit" value="Add to Cart">
                   </div>
                </div>
           
              </form>
             
           
            </div>
         </div>
         <div class="col-sm-6 col-md-4 col-lg-8 ">
            <h1>INFORMATION PRODUCT</h1>
               <h5 class="des_product"><b>- Title product: </b> {{$product->title}}</h5>
               <h5 class="des_product"><b>- Describe product: </b> {{$product->description}}</h5>
               <h5 class="des_product"><b>- Category product: </b> {{$product->catagory}}</h5>
               <h5 class="des_product"><b>- Quantity product: </b> {{$product->quantity}}</h5>
            
         </div>
      </div>
     </div>
    
      <!-- footer start -->
      @include('home.footer');
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
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
