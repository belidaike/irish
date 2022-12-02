<!DOCTYPE html>
<html lang="en">
<head>
     
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('images/crown gold.svg')}}" type="">
      <title>Irish Gowns</title>
      

    </head>
    <body>
  {{-- @include('home.header') --}}
    @include('home.aboutus')
  <div class="oi">
    @include('home.profilecard')
  </div>
  @include('home.footer')
</body>
<style>
  .oi{
    padding-top: 80px;
    height: 650px;
    /* background: green; */
  }
</style>
</html>
