@extends('layouts.mother')

@section('container')

<!-- Transaksi Beli -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="up" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                <h4 class="card-title">Transaksi Beli</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">
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
                                Jumlah Panen dari petani
                            </th>
                            <th>
                                Tafsiran Harga dari petani
                            </th>
                            <th>
                                Status Verifikasi
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="py-1">
                                <span>{{ $item['panen_tanggal'] }}</span>
                            </td>
                            <td>
                                {{ $item['namapetani'] }}
                            </td>
                            <td>
                                {{ $item['panen_jumlah'] }}
                            </td>
                            <td>
                                {{ $item['panen_harga'] }}
                            </td>
                            <td>
                                <?php
                                if ($item['statusdaripengepul'] == 0) {
                                    echo 'belum terverifikasi';
                                } else {
                                    echo 'Telah Terverifikasi';
                                }
                                ?>
                            </td>
                            <td>
                                <div class="action">
                                    <form action="/kirim/updateverifikasi/{{ $item['id'] }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success" id="statusverifikasi" name="statusverifikasi" type="submit" value="1">
                                            <span>Verifikasi</span>
                                            {{-- <a href=''> --}}
                                        </button>

                                        <!-- <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modaledit">
                                                    <span>Edit</span>
                                                </button> -->
                                        <?php
                                        echo "<td>" .
                                            "<button class='btn btn-primary'><a href='/formtambahdatapanen/$row->id'}}' style='color:black'>Hasil Panen</a></button>" .
                                            "</td>";
                                        ?>

                                        <button class="btn btn-sm btn-danger">
                                            <span>Sanggah</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

    <!-- Transaksi Beli -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="up"
                    style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                    <h4 class="card-title">Transaksi Beli</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">
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
                                    Jumlah Panen dari petani
                                </th>
                                <th>
                                    Tafsiran Harga dari petani
                                </th>
                                <th>
                                    Status Verifikasi
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="py-1">
                                        <span>{{ $item['panen_tanggal'] }}</span>
                                    </td>
                                    <td>
                                        {{ $item['namapetani'] }}
                                    </td>
                                    <td>
                                        {{ $item['panen_jumlah'] }}
                                    </td>
                                    <td>
                                        {{ $item['panen_harga'] }}
                                    </td>
                                    <td>
                                        <?php
                                        if ($item['statusdaripengepul'] == 0) {
                                            echo 'belum terverifikasi';
                                        } else {
                                            echo 'Telah Terverifikasi';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <form action="/kirim/updateverifikasi/{{ $item['id'] }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success" id="statusverifikasi"
                                                    name="statusverifikasi" type="submit" value="1">
                                                    <span>Verifikasi</span>
                                                    {{-- <a href=''> --}}
                                                </button>
                                            </form>

                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modaledit">
                                                <span>Edit</span>
                                            </button>
                                            <form action="/hapus/transaksibeli/{{ $item['id'] }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <span>Sanggah</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- modal tambah-->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Tambah Data Petani</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('/kirim/tambahtransaksibeli') }}">
                    @csrf
                    <div class="form-group">
                        <label for="namapetani">Nama Petani:</label>
                        <input type="text" class="form-control" id="namapetani" name="namapetani" placeholder="Enter Nama Petani">
                    </div>
                    <div class="form-group">
                        <label for="id_lokasisawah">Ketik Kabupaten Sawah:</label>
                        <input type="text" class="form-control" id="id_lokasisawah" name="id_lokasisawah" placeholder="Enter Kabupaten Sawah">
                    </div>
                    {{-- <div class="form-group">
                            <label for="ks_waktu_tanam">Waktu Tanam:</label>
                            <input type="text" class="form-control" id="ks_waktu_tanam" name="ks_waktu_tanam"
                                placeholder="Enter Waktu Tanam">
                        </div> --}}
                    <div class="form-group">
                        <label for="panen_tanggal">Tanggal Panen:</label>
                        <input type="date" class="form-control" id="panen_tanggal" name="panen_tanggal" placeholder="Enter Tanggal Panen">
                    </div>
                    <div class="form-group">
                        <label for="panen_jumlah">Jumlah Panen:</label>
                        <input type="text" class="form-control" id="panen_jumlah" name="panen_jumlah" placeholder="Enter Jumlah Panen">
                    </div>
                    {{-- <div class="form-group">
                            <label for="id_penebas">ID Penebas:</label>
                            <input type="text" class="form-control" id="id_penebas" name="id_penebas"
                                placeholder="Enter ID Penebas">
                        </div> --}}
                    <div class="form-group">
                        <label for="harga_sepakat">Harga Yang Disepakati:</label>
                        <input type="text" class="form-control" id="harga_sepakat" name="harga_sepakat" placeholder="Enter Harga Yang Disepakati">
                    </div>
                    {{-- <div class="form-group">
                            <label for="statusdaripengepul">Status Pengepul:</label>
                            <input type="text" class="form-control" id="statusdaripengepul" name="statusdaripengepul"
                                placeholder="Enter Status Pengepul">
                        </div> --}}
                    <div class="modal-footer" style="border:none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal tambah ends-->

<!-- modal edit -->
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Edit Data Petani</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="">
                    <div class="form-group">
                        <label for="nama_petani">Nama Petani</label>
                        <input type="text" class="form-control" id="nama_petani" placeholder="Nama Petani" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Lokasi/Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" readonly>
                    </div>
                    <input type="hidden" id="statusverifikasi" name="statusverifikasi" value="0">
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" readonly>
                    </div>
                    <div class="form-group">
                        <label for="taksiran_panen">Taksiran Panen</label>
                        <input type="text" class="form-control" id="taksiran_panen" placeholder="Taksiran Panen">
                    </div>
                    <div class="modal-footer" style="border:none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<!-- partial -->
</div>
<!-- main-panel ends -->
@endsection