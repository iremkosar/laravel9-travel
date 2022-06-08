<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('assets') }}/admin/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{ asset('assets') }}/admin/images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                      @include('home.messages')
                     <form action="{{route('loginadmincheck')}}" method="post">
                         @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">I forgot my password</a>
                              <a class="forgot" href="/registeruser">Register a new membership</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sign In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('assets') }}/admin/js/jquery.min.js"></script>
      <script src="{{ asset('assets') }}/admin/js/popper.min.js"></script>
      <script src="{{ asset('assets') }}/admin/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{ asset('assets') }}/admin/js/animate.js"></script>
      <!-- select country -->
      <script src="{{ asset('assets') }}/admin/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('assets') }}/admin/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('assets') }}/admin/js/custom.js"></script>
   </body>
</html>