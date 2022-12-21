@extends('layouts.main')
{{-- @include('layouts.navbars.navbar') --}}
@section('container')



    @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
      <div class="card-header text-center font-weight-bold">
      </div>
      <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
          @csrf
          {{-- <div class="form-group">
                <label for="exampleInputEmail1">id</label>
                <input type="id" id="id" name="id" class="form-control" required="">
              </div> --}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" id="id_iot" name="id_iot" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="kabupaten" id="kabupaten" name="kabupaten" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kabupaten</label>
            <input type="lokasi_latitude" id="lokasi_latitude" name="lokasi_latitude" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Telephone</label>
            <input type="lokasi_longitude" id="lokasi_longitude" name="lokasi_longitude" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Ktp</label>
            <input type="lokasi_longitude" id="lokasi_longitude" name="lokasi_longitude" class="form-control">
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    <a href="/home"><button type="button" class="btn btn-primary btn-lg">Kembali</button></a>
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
