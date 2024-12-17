<header class="header_section" style="font-size: 18px;">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="100px" height="100px" src="/images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" sytle="color: black;" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                        </li>
                        
                       <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">Products</a>
                        </li>
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li> -->

                        <!-- <li class="nav-item">
                           <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li> -->

                               
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li> -->
                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                           <a class="nav-link"  style="background-color: #ce8c7c; " href="{{url('show_cart')}}">Cart [ <span >{{App\Models\cart::where('user_id','=',Auth::user()->id)->count()}} ]</span></a>
                        </li>

                        @else

                         <li class="nav-item">
                           <a class="nav-link"  style="background-color: #ce8c7c; " href="{{url('show_cart')}}">Cart [ 0 ]</a>
                        </li>

                       
                        @endauth

                        @endif

                        <!-- <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">Order</a>
                        </li> -->
                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                           <a class="nav-link"  style="background-color: #ce8c7c; margin-left: 10px; " href="{{url('show_order')}}">Order [ <span >{{App\Models\order::where('user_id','=',Auth::user()->id)->count()}} ]</span></a>
                        </li>

                        @else

                         <li class="nav-item">
                           <a class="nav-link"  style="background-color: #ce8c7c; margin-left: 10px; margin-right:20px; " href="{{url('show_order')}}">Order [ 0 ]</a>
                        </li>

                       
                        @endauth

                        @endif

                        <!-- <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form> -->
                       
                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                        <x-app-layout>

                        </x-app-layout>
                        </li>
                        @else
                        <li class="nav-item ">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                        @endif 

                     </ul>
                  </div>
               </nav>
            </div>
         </header>