<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function add(Request $request)
    {
        $harga = $request->harga;
        $jarak = $request->jarak;
        $fasilitas = $request->fasilitas;
        $luas = $request->luas;
        $hasil = $harga+$jarak+$fasilitas+$luas;

        $w_harga = -($harga/$hasil);
        $w_jarak = -($jarak/$hasil);
        $w_fasilitas = $fasilitas/$hasil;
        $w_luas = $luas/$hasil;

        $list = DB::select("CALL fun_hasil(". $w_harga .", ". $w_jarak .", ". $w_fasilitas .", ". $w_luas .")");


        return view('hasil', [
            'tittle' => 'Hasil',
            'hasil' => $list
        ]);

    }

    public function index()
    {
        $product = Alternative::select("*")->get();
        return view('hasil', [
            'tittle' => 'Hasil',
            'product' => $product
        ]);
    }
}
