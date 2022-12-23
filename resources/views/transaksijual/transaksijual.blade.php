@extends('layouts.main')

@section('container')
            {{-- <div class="main-panel"> --}}
                <div class="content-wrapper">
                    <!-- Transaksi Beli -->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="up"
                                    style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                    <h4 class="card-title">Transaksi Jual</h4>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modaltambah">
                                        <span>Tambah</span>
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Tanggal
                                                </th>
                                                <th>
                                                    Petani
                                                </th>
                                                <th>
                                                    Jumlah Panen
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <span>13/12/2022</span>
                                                </td>
                                                <td>
                                                    Wibby
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <button class="btn btn-sm btn-success">
                                                            <span>Verifikasi</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-warning"
                                                            data-bs-toggle="modal" data-bs-target="#modaledit">
                                                            <span>Edit</span>
                                                        </button>
                                        
                                                        <button class="btn btn-sm btn-danger">
                                                            <span>Sanggah</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <span>13/12/2022</span>
                                                </td>
                                                <td>
                                                    Wibby
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <button class="btn btn-sm btn-success">
                                                            <span>Verifikasi</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-warning">
                                                            <span>Edit</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger">
                                                            <span>Sanggah</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <span>13/12/2022</span>
                                                </td>
                                                <td>
                                                    Wibby
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <button class="btn btn-sm btn-success">
                                                            <span>Verifikasi</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-warning">
                                                            <span>Edit</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger">
                                                            <span>Sanggah</span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal tambah-->
                <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Tambah Data Petani</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="">
                                    <div class="form-group">
                                        <label for="nama_petani">Nama Petani</label>
                                        <input type="text" class="form-control" id="nama_petani"
                                            placeholder="Nama Petani">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Lokasi/Alamat</label>
                                        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten</label>
                                        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten">
                                    </div>
                                    <div class="form-group">
                                        <label for="taksiran_panen">Taksiran Panen</label>
                                        <input type="text" class="form-control" id="taksiran_panen"
                                            placeholder="Taksiran Panen">
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
                <!-- modal tambah ends-->

                <!-- modal edit -->
                <div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Edit Data Petani</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="">
                                    <div class="form-group">
                                        <label for="nama_petani">Nama Petani</label>
                                        <input type="text" class="form-control" id="nama_petani"
                                            placeholder="Nama Petani" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Lokasi/Alamat</label>
                                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten</label>
                                        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="taksiran_panen">Taksiran Panen</label>
                                        <input type="text" class="form-control" id="taksiran_panen"
                                            placeholder="Taksiran Panen">
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
