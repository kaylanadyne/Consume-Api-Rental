<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Rental - Dashboard</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">RENTAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

  <div class="container">
  @if(session()->has('hapus'))
    <div class="alert alert-danger mt-3">
        {{ session('hapus') }}
    </div>
 @endif
  
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Type</th>
      <th scope="col">Waktu jam</th>
      <th scope="col">Total harga</th>
      <th scope="col">Jam mulai</th>
      <th scope="col">Supir</th>
      <th scope="col">Jam selesai</th>
      <th scope="col">Tempat tujuan</th>
      <th scope="col">Riwayat perjalanan</th>
      <th scope="col">Status</th>
      <th scope="col">Dihapus pada</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @foreach ($rentals as $rental)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$rental['nama']}}</td>
      <td>{{$rental['alamat']}}</td>
      <td>{{$rental['type']}}</td>
      <td>{{$rental['waktu_jam']}}</td>
      <td>{{$rental['total_harga']}}</td>
      <td>{{$rental['jam_mulai']}}</td>
      <td>{{$rental['supir']}}</td>
      <td>{{$rental['jam_selesai']}}</td>
      <td>{{$rental['tempat_tujuan']}}</td>
      <td>{{$rental['riwayat_perjalanan']}}</td>
      <td>{{$rental['status']}}</td>
      <td>{{$rental['deleted_at']}}</td>
      <td>
      <a href="{{ route('restore', $rental['id'])}}" type="button" class="btn btn-primary bi-arrow-clockwise mb-3"></a>
        <form action="{{route('deleteTrash', $rental['id'])}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger bi bi-trash" onclick="return confirm('Yakin Menghapus data?');"></button>
        </form>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>