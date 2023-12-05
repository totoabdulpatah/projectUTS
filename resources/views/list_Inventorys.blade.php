@extends('utama')

@section('hasil_inputan')
<!-- partial -->
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table with contextual classes</h4>
        <p class="card-description">
          Add class <code>.table-{color}</code>
        </p>
        <div class="table-responsive pt-3">
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
                @php
    $rowClasses = ["table-warning", "table-primary", "table-secondary", "table-success", "table-danger", "table-info", "table-light", "table-dark"];
@endphp

@foreach($data_inventory as $index => $inventory)
@php
    // Menggunakan modulus untuk mengambil indeks kelas warna dari array secara bergantian
    $rowClass = $rowClasses[$index % count($rowClasses)];
@endphp

<tr class="{{ $rowClass }}">
    <th scope="row">{{ $inventory->barang_id }}</th>
    <td>{{ $inventory->kode_barang }}</td>
    <td>{{ $inventory->nama_barang }}</td>
    <td>{{ $inventory->jenis_varian }}</td>
    <td>{{ $inventory->qty }}</td>
    <td>{{ $inventory->harga_jual }}</td>
    <td>{{ $inventory->total_harga }}</td>
    <td>{{ $inventory->diskon }}%</td>
    <td>{{ $inventory->harga_setelah_diskon }}</td>
    <td><button type="button" onclick="window.location.href='{{url('delete/'.$inventory->barang_id)}}';" class="btn btn-danger">Hapus</button><br>
        <button type="button" onclick="window.location.href='{{url('edit/'.$inventory->barang_id)}}';" class="btn btn-warning">Edit</button>
    </td>
</tr>
@endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<br>
<br>


@endsection