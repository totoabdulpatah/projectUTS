@extends('utama')

@section('form_inputan')
    {{-- ini menampilkan form inputan {{$isi_data}} --}}
    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="\store" method="post">
                   
                        @csrf
                    <div class="form-group">
                      <label for="kode_barang">Kode Barang</label>
                      <input type="number" class="form-control" id="exampleInputKodeBarang" placeholder="KodeBarang" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputNamaBarang" placeholder="NamaBarang" name="nama_barang">
                      </div>
                      <div class="form-group">
                        <label for="jenis_varian">Jenis Varian</label>
                        <input type="text" class="form-control" id="exampleInputJenisVarian" placeholder="JenisVarian" name="jenis_varian">
                      </div>
                      <div class="form-group">
                        <label for="qty">QTY</label>
                        <input type="number" class="form-control" id="exampleInputQty" placeholder="Qty" name="qty">
                      </div>
                      <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control" id="exampleInputHargaJual" placeholder="HargaJual" name="harga_jual">
                      </div>
                    
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-form-card">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Formulir Barang</h2>
                        <form action="\store" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="kode_barang">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang">
                            </div>
                            <div class="form-group">
                                <label for="jenis_varian">Jenis Varian</label>
                                <input type="text" name="jenis_varian" class="form-control" id="jenis_varian" aria-describedby="jenis_varian">
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="qty" class="form-control" id="qty" aria-describedby="qty">
                            </div>
                            <div class="form-group">
                                <label for="harga_jual">Harga Jual</label>
                                <input type="number" name="harga_jual" class="form-control" id="harga_jual" aria-describedby="harga_jual">
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" aria-describedby="proses">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

