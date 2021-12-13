@extends('components/main')

@section('konten')
    <div class="container bg-light my-4 rounded" style="min-height: 80vh; padding: 30px">
        <h2>Hasil</h2>
        <div class="row">
          @foreach ($product as $alternative)
            <div class="col-md-3 mb-3">
                <div class="card" >
                    <img src="{{ URL::asset('assets/'. $alternative->image) }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $alternative->alternatif }} ({{ $alternative->luas }})</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <p class="card-text">@currency($alternative->harga)</p>
                        </div>
                        <div class="col-md-6">
                          <p class="card-text text-end">{{ $alternative->jarak }}</p>
                        </div>
                        <p class="card-text">{{ $alternative->fasilitas }}</p>
                      </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection