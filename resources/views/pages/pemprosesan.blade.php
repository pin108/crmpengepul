@extends('layouts.mother')

@section('container')
    <!-- Transaksi Beli -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="up"
                    style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                    <h4 class="card-title">Pemprosesan</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">
                        <span>Tambah</span>
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    {{-- {{ $item['tanggal'] }} --}}
                                    Tanggal
                                    {{-- @endforeach --}}
                                </th>
                                <th>
                                    Taksir Petani
                                </th>
                                <th>
                                    Taksir Pengepul
                                </th>
                                <th>
                                    Grade A
                                </th>
                                <th>
                                    Grade B
                                </th>
                                <th>
                                    Grade C
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
                                        <span>13/12/2022</span>
                                    </td>
                                    <td>
                                        5 Ton
                                    </td>
                                    <td>
                                        {{ $item['panen_harga'] }}
                                    </td>
                                    <td>
                                        {{ $item['panen_kualitas_a'] }}
                                    </td>
                                    <td>
                                        {{ $item['panen_kualitas_b'] }}
                                    </td>
                                    <td>
                                        {{ $item['panen_kualitas_c'] }}
                                    </td>
                                    <td>
                                        <div class="action">
                                            {{-- <button class="btn btn-sm btn-warning">
                                                <span>Proses</span> --}}
                                            </button><form action="/proses/updatedata/{{ $item['id'] }}" method="post">
                                                @csrf
                                            <button type="submit" class="btn btn-sm btn-success" id="statusverifikasi" name="statusverifikasi" type="submit" value="1">
                                                <span>Process</span>
                                                {{-- <a href=''> --}}
                                            </button>
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
    <!-- modal tambah-->
    <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection
