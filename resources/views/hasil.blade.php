@extends('components/main')

@section('konten')
    <div class="container bg-light my-4 rounded" style="min-height: 80vh; padding: 30px">
        <h2>Hasil</h2>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ URL::asset('assets/img-kost1.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Kost Ceria</h5>
                              <p class="card-text">Rp. 500.000/bulan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputHargaSewa" class="form-label">Harga Sewa</label>
                      <input type="number" class="form-control" id="hargaSewa" name="hargaSewa">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputHargaSewa" class="form-label">Jarak</label>
                      <input type="number" class="form-control" id="jarak" name="jarak">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputHargaSewa" class="form-label">Fasilitas</label>
                      <input type="text" class="form-control" id="fasilitas" name="fasilitas">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputHargaSewa" class="form-label">Luas Kamar</label>
                      <input type="number" class="form-control" id="hargaSewa" name="hargaSewa">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection