@extends('layouts.mother')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title">Halaman Pemrosesan</h4>
                @foreach ($data as $item)
                <form method="post" action="/kirim/upproses/{{$item['id']}}">
                    @endforeach
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penen Kualitas A (Bagus)</label>
                        <input type="number" id="panen_kualitas_a" name="panen_kualitas_a" class="form-control" 
                        placeholder="{{$item['panen_kualitas_a']}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penen Kualitas B (Sedang)</label>
                        <input type="number" id="panen_kualitas_a" name="panen_kualitas_b" class="form-control"
                        placeholder="{{$item['panen_kualitas_b']}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penen Kualitas C (Biasa)</label>
                        <input type="number" id="panen_kualitas_a" name="panen_kualitas_c" class="form-control"
                        placeholder="{{$item['panen_kualitas_c']}}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
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
