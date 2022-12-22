@extends('layouts.main')
{{-- @include('layouts.navbars.navbar') --}}
@section('container')

    @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
      <div class="card-body">
        <center><h4 class="card-title">Pendaftaran Pengepul</h4></center>
        <form method="post" action="/insertbiodata" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Hp/Whastapp</label>
            <input type="text" id="nohp" name="nohp" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Ktp</label>
            <input type="text" id="noktp" name="noktp" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kabupaten</label>
            <input type="text" id="kabupaten" name="kabupaten" class="form-control" required="">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    <!-- <a href="/home"><button type="button" class="btn btn-primary btn-lg">Kembali</button></a> -->
  </body>

  </html>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- script jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- script sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- script toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
