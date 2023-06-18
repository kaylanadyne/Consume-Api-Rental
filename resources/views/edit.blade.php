<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>Edit Data</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background-color:#EFF5F5;">
        <div class="container">
            <a class="navbar-brand" href="#">RENTAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container mt-4">
  
  @if (Session::get('errors'))
    <p style="color: red">{{Session::get('errors')}}</p>
  @endif
  
  <form action="{{ route('update', $rentals['id']) }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="jam_selesai">jam selesai</label>
        <input type="text" class="form-control" id="jam_selesai" name="jam_selesai" placeholder="Masukkan Jam">
      </div>
      <div class="form-group">
        <label for="tempat_tujuan">tempat tujuan</label>
        <input type="text" class="form-control" id="tempat_tujuan" name="tempat_tujuan" placeholder="Masukkan Tempat">
      </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
  </tbody>
  </table>