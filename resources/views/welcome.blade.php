<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('layout/home.css') }}">

    <title>Aditya Roman Asyhari</title>

  </head>
  <body>

      <div class="card">
        <div class="banner">
          <img src="{{ url('img/profile.png') }}" alt="profile">
        </div>
        <div class="menu">
          <div class="opener"><span></span><span></span><span></span></div>
        </div>
        <h4 class="name">Aditya Roman Asyhari</h4>
        <h5 class="name">2E 361855401130</h5>
        <div class="title">Programmer</div>
        <div class="actions">
          <div class="project-btn">
              <a href="{{ url('todos') }}">Todos</a>
              <a href="{{ url('kendaraans') }}">Kendaraan</a>
              <a href="{{ url('laboratoriums') }}">UAS</a>
          </div>
        </div>
        <div class="desc">Ini merupakan project yang diberikan dalam Mata Kuliah Pemrograman Web yang diampu oleh Bpk. I Wayan Suardinata. Terdapat project yang sudah dikerjakan, yaitu <b>TODOS, KENDARAAN</b> dan <b>UAS</b>.</div>
      </div>

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>
