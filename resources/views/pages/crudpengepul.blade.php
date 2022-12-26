@extends('layouts.mother')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Pendaftaran Pengepul</h4>
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('/kirim/daftarpengepul') }}">
                    @csrf
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">id</label>
                      <input type="id" id="id" name="id" class="form-control" required="">
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kabupaten</label>
                        <input type="text" id="kabupaten" name="kabupaten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Hp/Whastapp</label>
                        <input type="text" id="nohp" name="nohp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Ktp</label>
                        <input type="text" id="noktp" name="noktp" class="form-control">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- crudpengepul  -->
    </div>
    <!-- modal tambah-->
    {{-- <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Tambah Data Pemprosesan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="">
                    <div class="form-group">
                        <label for="vp_id">vp id</label>
                        <input type="text" class="form-control" id="vp_id" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="gradea">Grade A</label>
                        <input type="text" class="form-control" id="gradea" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="gradeb">Grade B</label>
                        <input type="text" class="form-control" id="gradeb" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="gradec">Grade C</label>
                        <input type="text" class="form-control" id="gradec" placeholder="">
                    </div>
                    <div class="modal-footer" style="border:none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection
