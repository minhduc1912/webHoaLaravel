<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    @include('admin/css')

    <style type="text/css">

        .div_center
        {
            text-align:center;
            padding-top: 40px;
        } 

        .font_size
        {
            font-size:40px;
            padding-bottom: 40px;
        }

        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;

        }

        .div_design
        {
            padding-bottom: 15px;
        }


    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin/header')

        <!-- product -->
        <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                    {{session()->get('message')}}

                </div>
            @endif


            <div class="div_center">

                <h1 class="font_size">Update Products</h1>

                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_design">
                    <label>Product Title:</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                </div>

                <div class="div_design">
                    <label>Product description:</label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
                </div>

                <div class="div_design">
                    <label>Price:</label>
                    <input class="text_color" type="number" name="price"  placeholder="Write a price" required="" value="{{$product->price}}">
                </div>

                <div class="div_design">
                    <label>Discount:</label>
                    <input class="text_color" type="number" name="dis_price" placeholder="Write a discount"  value="{{$product->discount_price}}">
                </div>

                <div class="div_design">
                    <label>Quantity:</label>
                    <input class="text_color" type="number" min="0" name="quantity"  placeholder="Write a quantity" required="" value="{{$product->quantity}}">
                </div>

                <div class="div_design">
                   <label>Category:</label>
                    <select class="text_color" name="catagory" required="">

                        <option value="{{$product->catagory}}" value="" selected="">{{$product->catagory}}</option> 

                         @foreach($catagory as $catagory)

                            <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

                        @endforeach

                </select>   
                </div>

                <div class="div_design">
                    <label>Current product images:</label>
                    <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
                </div>


                <div class="div_design">
                    <label>Change product images:</label>
                    <input type="file" name="image" >
                </div>

                <div class="div_design" >
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
                </from> 
            </div>
      
      <!-- page-body-wrapper ends -->
    </div>
     <!-- endinject -->
    <!-- Custom js for this page -->
      @include('admin/script')
     <!-- End custom js for this page -->
  </body>
</html>
