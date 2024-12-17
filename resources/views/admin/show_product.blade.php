<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css')

    <style>

        .center
        {
            margin:auto;
            width: 100%;
            border: 2px solid white;
            margin-top: 20px;
            padding-top: 20px;
        }

        .font_size
        {
            text-align: center;
            font-size: 40px;
        }

        .img_size
        {
          width: 300px;
          height: 150px;
        }

        .th_color
        {
          background: #ce8c7c;
        }
        
        .th_deg
        {
          padding: 30px;
          text-align: center;
        }

        .tr_deg
        {

          text-align: center;
        }
    </style>
     <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin/header')

        <div class="main-panel">
          <div class="content-wrapper">

              @if(session()->has('message'))
                  <div class="alert alert-success">
                      
                      <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                      {{session()->get('message')}}

                  </div>
              @endif
            <h2 class="font_size">All Products</h2>
            
            <table class="center">

                <tr class="th_color">
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Product Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Edit</th>
                    <th class="th_deg">Remove</th>

                </tr>

                @foreach($product as $product)

                <tr >
                    <td class="tr_deg">{{$product->title}}</td>
                    <td class="tr_deg">{{$product->description}}</td>
                    <td class="tr_deg">{{$product->quantity}}</td>
                    <td class="tr_deg">{{$product->catagory}}</td>
                    <td class="tr_deg">{{$product->price}}</td>
                    <td class="tr_deg">{{$product->discount_price}}</td>
                    
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}" >
                    </td>

                    <td> <a class="btn btn-success" style="margin: 15px;" href="{{url('update_product',$product->id)}}">Edit</a></td>

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure deleted?')" href="{{url('delete_product',$product->id)}}">Remove</a>
                    </td>


                </tr>
                
                @endforeach

            </table>


      </div>
      <!-- page-body-wrapper ends -->
    </div>
     <!-- endinject -->
    <!-- Custom js for this page -->
      @include('admin/script')
     <!-- End custom js for this page -->
  </body>
</html>