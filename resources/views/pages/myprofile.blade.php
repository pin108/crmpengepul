@extends('layouts.mother')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body">
                <h4 class="card-title">Akun Anda</h4>
                @foreach ($data as $item )
                    
                
                <div class="form-group">
                    <label for="exampleInputnama">Nama</label>
                    <p>{{ $item['nama'] }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputalamat">Alamat</label>
                    <p>{{ $item['alamat'] }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputkabupaten">Kabupaten</label>
                    <p>{{ $item['kabupaten'] }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputtelepon">Telepon</label>
                    <p>{{ $item['nohp'] }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputnoktp">No KTP</label>
                    <p>{{ $item['noktp'] }}</p>
                </div>
                @endforeach
                <body>
                    <input class="btn btn-primary" type="button" onclick="location.href='{{ url('pages/crudpengepul') }}';"
                        value="Daftar Akun" />

                    {{-- <button class="btn btn-light">kembali</button> --}}
                    <button class="btn btn-success" onclick="javascript:window.history.back();">Go Back</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
