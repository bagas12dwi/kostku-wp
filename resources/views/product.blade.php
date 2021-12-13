@extends('components/main')

@section('konten')
    <div class="container bg-light my-4 rounded" style="min-height: 80vh; padding: 30px">
        <h2>List Kost</h2>
        <div class="d-flex justify-content-start my-3">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-filter"></i> Filter</button>
        </div>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Filter Berdasarkan Prioritas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/hasil" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="customRange2" class="form-label">Harga</label>
                <select class="form-select" aria-label="Default select example" name="harga[]">
                  <option selected>-- Pilih Prioritas --</option>
                  <option value="1">Sangat Penting</option>
                  <option value="2">Penting</option>
                  <option value="3">Kurang Penting</option>
                  <option value="4">Tidak Penting</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="customRange2" class="form-label">Jarak</label>
                <select class="form-select" aria-label="Default select example" name="jarak[]">
                  <option selected>-- Pilih Prioritas --</option>
                  <option value="1">Sangat Penting</option>
                  <option value="2">Penting</option>
                  <option value="3">Kurang Penting</option>
                  <option value="4">Tidak Penting</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="customRange2" class="form-label">Fasilitas</label>
                <select class="form-select" aria-label="Default select example" name="fasilitas[]">
                  <option selected>-- Pilih Prioritas --</option>
                  <option value="1">Sangat Penting</option>
                  <option value="2">Penting</option>
                  <option value="3">Kurang Penting</option>
                  <option value="4">Tidak Penting</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="customRange2" class="form-label">Luas</label>
                <select class="form-select" aria-label="Default select example" name="luas[]">
                  <option selected>-- Pilih Prioritas --</option>
                  <option value="1">Sangat Penting</option>
                  <option value="2">Penting</option>
                  <option value="3">Kurang Penting</option>
                  <option value="4">Tidak Penting</option>
                </select>
            </div>
          </div>
          <div class="container mb-3">
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>