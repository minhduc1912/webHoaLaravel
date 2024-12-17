<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css')

    <style type="text/css">

        .div_center
        {
            text-align: center;
       
        }

        .h2font 
        {
            
            font-size:40px;
            padding-bottom: 30px;
        }

        .input_color 
        {
            color: black;
        }

        .center {
          margin: auto;
          width: 50%;
          text-align:center;
          margin-top: 30px;
          border: 3px solid white;
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                    {{session()->get('message')}}

                </div>
            @endif

        <div class="main-panel">
          <div class="content-wrapper">

            <div class="div_center">

                <h2 class="h2font">Category Management</h2>

                <form action="{{url('/add_catagory')}}" method="POST">

                    @csrf

        <input class="input_color" type="text" name="catagory" placeholder="Write category">

                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
            </div>

           <table class="center">

              <tr>
                <td>Category Name</td>
                <td>Edit</td>
              </tr>

              @foreach($data as $data)


              <tr>
                <td>{{$data->catagory_name}}</td>

                <td>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}">Delete</a>
                </td>

              </tr>

              @endforeach
           </table>

          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
     <!-- endinject -->
    <!-- Custom js for this page -->
        @include('admin/script')
     <!-- End custom js for this page -->
  </body>
</html>