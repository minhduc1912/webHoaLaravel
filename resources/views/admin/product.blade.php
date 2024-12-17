<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            margin: 0px 200px 0 200px;
            
        }

        .font_size{
            font-size: 40px;
            padding-bottom:  30px;
            font-weight: bold;
            color: aliceblue;
        }

        .text_color{
            color: black;
            padding-bottom: 20px;
          
        }

        label{
            display: block;
            width: 200px;
        }

        .div_design{
            /* padding-bottom: 10px; */
          justify-content: center;
          padding: 8px 0 8px 0;
            border: 1px solid white;
        }

        input.btn.btn-primary{
          background-color: white;
        }

        input.btn.btn-primary:hover{
          background-color: rgb(19, 123, 192);
        }

       
        
    </style>

    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            

               @if(session()->has('message'))
                      <div class="alert alert-success">
                          
                          <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                          {{session()->get('message')}}

                      </div>
                  @endif
            <div class="div_center">
                <h1 class="font_size">Add Product</h1>
            
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                  @csrf

             <div class="div_design">
                <label>Product Title: </label>
                <input class="text_color" type="text" name="title" placeholder="Write a product title" required="">
             </div>

             <div class="div_design">
                <label>Product Description: </label>
                <input class="text_color" type="text" name="description" placeholder="Write a product description" >
             </div>
             
             <div class="div_design">
                <label>Product Price: </label>
                <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
             </div>

             <div class="div_design">
                <label>Discount Price: </label>
                <input class="text_color" type="text" name="dis_price" placeholder="Write a Discount" >
             </div>

             <div class="div_design">
                <label>Product Quantity: </label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a product quantity" required="">
             </div>

             

             <div class="div_design">
                <label>Product Category: </label>
                <select class="text_color" name="catagory" required="">
                    <option value="" placeholder="">Add a category here</option>

                      @foreach ($catagory as $catagory)
                      <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                      @endforeach
                    
                </select>
             </div>

             <div class="div_design">
                <label>Product Images here: </label>
                <input type="file" name="image" required=""> 
             </div>

             <div class="div_design" id="submit_add_product">
               
                <input type="submit" value="Add Product" class="btn btn-success"> 
             </div>

                </form>
            </div>
        </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
    <!-- End custom js for this page -->
  </body>
</html>