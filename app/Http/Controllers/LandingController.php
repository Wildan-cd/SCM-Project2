<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\ulasan;
use Carbon\Carbon;
//use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use function Laravel\Prompts\search;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.index');
    }

    /* public function produk()
    {
        return view('landing.produk');
    } */

    public function produk(Request $request)
    {
        $kategori = $request->query('kategori');
        $query = produk::query();

        if ($kategori) {
            if ($kategori === 'Diskon') {
                $query->where('is_diskon', true);
            } else {
                $query->where('kategori', $kategori);
            }
        }

        $produk = $query->paginate(8);
        return view('landing.produk', compact('produk', 'kategori'));
    }

    public function detail($id)
    {
        $produk = produk::findOrFail($id);
        $pesan = "Halo, saya ingin membeli " . $produk->nama_produk . ", apakah tersedia?";
        $link = "https://wa.me/6282293831726?text=" . urlencode($pesan);

        return view('landing.detail', compact('produk','link'));
    }

    public function tentang()
    {
        return view('landing.tentang');
    }

    public function layanan()
    {
        return view('landing.layanan');
    }

    public function ulasan()
    {
        $data = ulasan::get();
        return view('landing.ulasan', ['data'=>$data]);
    }
    
    public function form_ulasan()
    {
        return view('landing.form_ulasan');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ],[
            'email.email' => 'Harap masukan Email yang valid'
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'rating' => $request->input('rating'),
            'pesan' => $request->input('pesan'),
            'tanggal' => carbon::now(),
        ];

        ulasan::create($data);
        return redirect()->route('landing.ulasan')->with('success','Terimakasih atas ulasan yang anda berikan.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
