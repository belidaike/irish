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
      <link rel="shortcut icon" href="images/crown gold.svg" type="">
      <title>Irish Gowns</title>
      <!-- bootstrap core css -->
      {{-- <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" /> --}}
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      {{-- <link href="{{asset('home/css/modal.scss')}}" rel="stylesheet" /> --}}
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite(['resources/scss/app.scss'])
      <style type="text/css">

        .cartbody{
            display: flex;
            justify-content: center;
            /* align-items: center; */
        }
        table,th,td
        {
            border: 1px solid grey;
            text-align: center;
            padding: 10px;
        }
        .img_des
        {
            background-size: cover;
            height: 50px;
            width: 100px;
        }

        .total_des
        {
            font-size: 20px;
            padding: 40px;
            text-align: center;
        }
        
      </style>

   </head>
   @include('home.header')
   <body>
    <div class="cartbody">
   @include('sweetalert::alert')
      <div class="herow_area">

        @if(session()->has('message'))
        
            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>
        
        @endif

      
        <table class="table table-hover table-striped">
            <tr>
                <th>Product title</th>
                <th>product quantity</th>
                <th>price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php $totalprice=0; ?>

            @foreach($cart as $cart)

            <tr>

                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>₱{{$cart->price}}</td>
                <td><img class="img_des" id="cart-imgd" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('remove_cart',$cart->id)}}">Remove Product</a></td>

            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

            
        </table>

        <div>
            <h1 class="total_des">Total Price : ₱{{$totalprice}}</h1>
        </div>

        <div>

            <h1 style="font-size: 25px; padding-bottom: 15px; text-align:center;">Confirm Reservation</h1>

            <a href="{{url('cash_order')}}" class="btn btn-danger">Reserve Now</a>
            <br>
        </div>
        <br>
        {{-- brrr......... --}}
        {{-- <div class="container">
            <div class="interior">
              <a class="btn" href="#open-modal">Confirm Reservation</a>
            </div>
          </div>
          <div id="open-modal" class="modal-window">
            <div>
              <a href="#" title="Close" class="modal-close">Close</a>
              <div class="col">
                @include('home.modal') --}}
                  {{-- <h1>Voilà!</h1>
                  <div>A CSS-only modal based on the :target pseudo-class. Hope you find it helpful.</div>
                  <br> --}}
                

              </div>
            </div>
          </div>
          </div>
        {{-- @include('home.modal') --}}

      <!-- footer start -->
      <!-- footer end -->

      <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title: "Are you sure you want to cancel this product",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }

      </script>
      <!-- jQery -->
      {{-- <script src="home/js/jquery-3.4.1.min.js"></script> --}}
      <!-- popper js -->
      {{-- <script src="home/js/popper.min.js"></script> --}}
      <!-- bootstrap js -->
      {{-- <script src="home/js/bootstrap.js"></script> --}}
      <!-- custom js -->
      {{-- <script src="home/js/custom.js"></script> --}}
      {{-- <script src="home/js/modal.js"></script> --}}
    </div>
   </body>
</html>