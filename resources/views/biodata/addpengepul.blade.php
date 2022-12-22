@extends('layouts.main')

@section('container')
      
                <div class="content-wrapper">
                    <!-- crud pengepul -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pendaftaran Pengepul</h4>
                                    <form class="forms-sample" action="/insertbiodata" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputnama">Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                placeholder="Masukan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputalamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat"
                                                placeholder="Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtelepon">Telepon</label>
                                            <input type="number" class="form-control" name="telepon"
                                                placeholder="Masukan No Telepon">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnoktp">No KTP</label>
                                            <input type="number" class="form-control" name="noktp"
                                                placeholder="Masukan No KTP">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputkabupaten">Kabupaten</label>
                                            <input type="text" class="form-control" name="kabupaten"
                                                placeholder="Kabupaten">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- crudpengepul  -->
                </div>
                <!-- modal tambah-->
                <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Tambah Data Pemprosesan</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

@endsection