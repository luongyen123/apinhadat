<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Nhà đất Á Châu - Admin</title>

  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">
 <?php  echo header('Access-Control-Allow-Origin: *'); ?>
  @yield('css')
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                @yield('content')
            </div>
        </section>
    </div>
    <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  @yield('js')
</body>
</html>
