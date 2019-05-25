<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Admin - Nha dat A chau</title>

  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">
  @yield('css')
</head>
<body>
    <?php
        $user = $_COOKIE['user'];
        $user = json_decode($user);
    ?>
  <div id="app">
       <div class="main-wrapper">

        @include('blocks.header')
        @include('blocks.left')
           <div class="main-content">
              @yield('content')
            </div>
      </div>
  </div>
  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  @yield('js')
</body>
</html>