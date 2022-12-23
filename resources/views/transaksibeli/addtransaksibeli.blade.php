@extends('layouts.main')

@section('container')
      
                <div class="content-wrapper">
                    <!-- crud pengepul -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah data Transaksi beli</h4>
                                    <form class="forms-sample" action="/inserttransaksibeli" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputnama">Tanggal Transaksi beli</label>
                                            <input type="date" class="form-control" name="transaksibeli_tanggal"
                                                placeholder="Masuk">
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
                </div>
@endsection