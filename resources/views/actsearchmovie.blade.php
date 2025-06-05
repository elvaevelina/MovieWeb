<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>.:Hasil Pencarian:.</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-info py-4"></div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($data as $d)
                        <div class="col-md-3 mb-4">
                            <div class="card mb-4">
                                @if($d->poster)
                                    <img src="{{ asset('storage/' . $d->poster) }}" alt="{{$d->poster}}"
                                    class="card-img-top" height="200">
                                @else
                                    <img src="https://png.pngtree.com/png-clipart/20230917/original/pngtree-no-image-available-icon-flatvector-illustration-thumbnail-graphic-illustration-vector-png-image_12323920.png"
                                    alt="No Image" class="card-img-top" height="200">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $d->title }}</h5>
                                    <p class="card-text">Year: {{ $d->year }}</p>
                                    <p class="card-text">Genre: {{ $d->genre }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
