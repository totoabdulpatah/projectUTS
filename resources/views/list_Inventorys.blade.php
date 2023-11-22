@extends('utama')

@section('hasil_inputan')
kkkk
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-10">
          <div class="card custom-card">
              <div class="card-body">
                  <h2 class="mb-4 text-center">LIST INVENTORYS</h2>
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th scope="col">ID Barang</th>
                              <th scope="col">Kode Barang</th>
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Jenis Varian</th>
                              <th scope="col">Qty</th>
                              <th scope="col">Harga Jual</th>
                              <th scope="col">Total Harga</th>
                              <th scope="col">Diskon</th>
                              <th scope="col">Total Bayar</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($data_inventory as $inventory)
                          <tr>
                              <th scope="row">{{$inventory -> barang_id}}</th>
                              <td>{{$inventory -> kode_barang}}</td>
                              <td>{{$inventory -> nama_barang}}</td>
                              <td>{{$inventory -> jenis_varian}}</td>
                              <td>{{$inventory -> qty}}</td>
                              <td>{{$inventory -> harga_jual}}</td>
                              <td>{{$inventory -> total_harga}}</td>
                              <td>{{$inventory -> diskon}}%</td>
                              <td>{{$inventory -> harga_setelah_diskon}}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection