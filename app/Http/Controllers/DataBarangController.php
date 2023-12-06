<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Inventorys;
use Laracast\Flash\Flash;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $data_inventory = Inventorys::all();
    return view('list_Inventorys', compact('data_inventory'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataBarang');
    }

    public function hapus_get($id){
        $proses = Inventorys::where('barang_id',$id)->delete();
        if($proses){
            echo 'data berhasil di hapus';
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'jenis_varian'=>$request->jenis_varian,
            'qty'=>$request->qty,
            'harga_jual'=>$request->harga_jual,
         ];
         $total_harga = $data['harga_jual'] * $data['qty'];
        $diskon = 0;
        if ($total_harga >= 500000) {
            $diskon = 50;
        } elseif ($total_harga >= 200000) {
            $diskon = 20;
        } elseif ($total_harga >= 100000) {
            $diskon = 10;
        }
        $harga_setelah_diskon = $total_harga - ($total_harga * ($diskon / 100));

        $data['total_harga'] = $total_harga;
        $data['diskon'] = $diskon ;
        $data['harga_setelah_diskon'] = $harga_setelah_diskon;

        $proses = Inventorys::create($data);
        return redirect('/hasil');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_inventory = Inventorys::where('barang_id', $id)->get();
        return view('edit_data_barang', compact('data_inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'jenis_varian'=>$request->jenis_varian,
            'qty'=>$request->qty,
            'harga_jual'=>$request->harga_jual,
         ];
         $total_harga = $data['harga_jual'] * $data['qty'];
        $diskon = 0;
        if ($total_harga >= 500000) {
            $diskon = 50;
        } elseif ($total_harga >= 200000) {
            $diskon = 20;
        } elseif ($total_harga >= 100000) {
            $diskon = 10;
        }
        $harga_setelah_diskon = $total_harga - ($total_harga * ($diskon / 100));

        $data['total_harga'] = $total_harga;
        $data['diskon'] = $diskon ;
        $data['harga_setelah_diskon'] = $harga_setelah_diskon;
        $data_inventory = Inventorys::where('barang_id',$id)->update($data);
        // Tambahkan atribut lainnya sesuai kebutuhan
    
        // Redirect ke halaman hasil atau halaman lain yang diinginkan
        return redirect('/hasil')->with('success', 'Data berhasil diperbarui');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proses = Inventorys::where('barang_id', $id)->delete();
        if($proses) flash('Data Berhasil di Hapus')->success();
        if(!$proses) flash('Data gagal di hapus')->error();
        return redirect('/hasil');
    }
}
