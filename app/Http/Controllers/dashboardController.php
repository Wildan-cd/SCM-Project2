<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class dashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function produk_list() {
        $produk=produk::paginate(10);
        return view('admin.produk_list', compact('produk'));
    }
   

    

    public function input() {
        return view('admin.input_produk');
    }
    public function add_produk(Request $request)
    {

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi'=>'required|string|max:1000',
            'gambar'=>'required|image|mimes:jpg,jpeg,png,gif',
            'harga' => 'required|numeric'
        ]);

        $file = $request->file('gambar');

        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->move(public_path('storage/produk'), $filename);

        // Simpan path relatif (untuk nanti diakses lewat `asset('storage/produk/...')`)
        $gambarPath = 'produk/' . $filename;

        Produk::create([
            'nama_produk'=>$request->nama_produk,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$gambarPath,
            'kategori'=>$request->kategori,
            'is_diskon'=>$request->is_diskon,
            'harga'=>$request->harga
        ]);

        // Redirect balik dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diproses');
    }

    protected function create(Request $request) {

        $gambarPath = $request->file('gambar')->store('produk', 'public');


        $data = [
            'nama_produk' => $request->input('nama_produk'),
            'harga' => $request->input('harga'),
            'kategori' => $request->input('kategori'),
            'diskon' => $request->input('diskon'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $gambarPath,
            
        ];

        produk::create($data);
        return redirect()->route('admin.dashboard')->with('success','Produk berhasil ditambahakan.');
    }

    public function delete($id) {
        $produk=produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk_list')->with('success','Produk berhasil dihapus.');
    }

    public function edit($id) {
        $produk = produk::findOrFail($id);

        return view('admin.update_produk', compact('produk'), [
            "produk" => $produk,
        ]);
    }

    public function update(Request $request, $id) {
        if ($request->isMethod('put')) {

            $data = [
                'nama_produk' => $request->input('nama_produk'),
                'harga' => $request->input('harga'),
                'kategori' => $request->input('kategori'),
                'is_diskon' => $request->input('is_diskon'),
                'deskripsi' => $request->input('deskripsi'),
                'gambar' => $request->input('gambar'),
                
            ];
    
            produk::where('id', $id)->update($data);
        }

        return redirect()->route('admin.dashboard')->with('success','Produk berhasil diperbarui.');
    }
}
