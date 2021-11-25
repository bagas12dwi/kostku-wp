@extends('components.main')

@section('konten')
    <div class="container bg-light my-4 rounded" style="min-height: 80vh; padding: 30px">
        <form>
            <div class="mb-3">
              <label for="exampleInputHargaSewa" class="form-label">Harga</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>-- Pilih Range Harga --</option>
                <option value="1">< Rp. 500.000</option>
                <option value="2">Rp. 500.000 - Rp. 1.000.000</option>
                <option value="3">Rp. 1.000.000 - Rp. 1.500.000</option>
                <option value="4">> Rp. 2.000.000</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputHargaSewa" class="form-label">Jarak</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>-- Pilih Range Jarak --</option>
                <option value="1">0.5 km - 1 km</option>
                <option value="2">1 km - 1.5 km</option>
                <option value="3">> 2 km</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputHargaSewa" class="form-label">Fasilitas</label>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kasur" checked disabled>
                    <label class="form-check-label" for="flexCheckDefault">
                      Kasur
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="lemari" checked disabled>
                    <label class="form-check-label" for="flexCheckDefault">
                      Lemari
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="wifi" checked disabled>
                    <label class="form-check-label" for="flexCheckDefault">
                      Wifi
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="meja">
                    <label class="form-check-label" for="flexCheckDefault">
                      Meja
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kipas">
                    <label class="form-check-label" for="flexCheckDefault">
                      Kipas Angin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ac">
                    <label class="form-check-label" for="flexCheckDefault">
                      AC
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input tv" type="checkbox" value="" id="tv">
                    <label class="form-check-label" for="flexCheckDefault">
                      Tv
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputHargaSewa" class="form-label">Luas Kamar</label>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      2 x 3 m2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      3 x 3 m2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      3 x 4 m2
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      4 x 4 m2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      4 x 5 m2
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" style="padding: 5px 50px">Cari</button>
        </form>
    </div>
@endsection
