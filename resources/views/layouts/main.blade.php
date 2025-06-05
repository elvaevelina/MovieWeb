<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">

    <title>Web Movies - @yield('title')</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Baris 1 -->
      <div class="row">
        <div class="col-md-12 py-3 bg-info">
            <div class="dropdown float-right">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-circle"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">
                    <div class="media">
                        <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/08/15/dor2jpg-20220815092143.jpg" height="50" width="40" class="align-self-center mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="mt-0">{{Auth::user()->nama ?? "No User"}}</h5>
                          <p class="mb-0"><small><i class="bi bi-clock"></i> Pkl 13.00</small></p>
                        </div>
                      </div>
                  </a>
                  <a class="dropdown-item" href="/edituser"><i class="bi bi-gear"></i> Change Password</a>
                  <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
              </div>
        </div>
      </div>
      <!-- Konten baris 1 -->

      <!-- Baris 2 -->
      <div class="row">
        <div class="col-md-3 vh-100 border">
          <div class="nav flex-column nav-pills pt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link {{($key=='home')? 'active':''}}" href="/home" role="tab">Home</a>
            <a class="nav-link {{($key=='movie')? 'active':''}}" href="/movie" role="tab">Data movie</a>
            <a class="nav-link {{($key=='kategori')? 'active':''}}" href="/kategori" role="tab">Data Kategori</a>
            <a class="nav-link {{($key=='genre')? 'active':''}}" href="/genre" role="tab">Data Genre</a>
          </div>
        </div>
        <div class="col-md-9 vh-100 border">
            @yield('content')
        </div>
      </div>

    <!-- Footer
    <footer class="row">
    <div class="col-md-12 py-4 bg-primary text-center text-white">
        &copy; {{ date('Y') }} MovieWeb. All rights reserved.
    </div>
    </footer> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
  </body>
</html>
