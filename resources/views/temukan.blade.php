@extends('components.main')

@section('konten')
    <div class="container bg-light my-4 rounded" style="min-height: 80vh; padding: 30px">
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
            <button type="submit" class="btn btn-primary" style="padding: 5px 50px">Cari</button>
        </form>
    </div>
@endsection