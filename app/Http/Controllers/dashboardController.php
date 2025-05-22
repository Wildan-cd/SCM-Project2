<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class dashboardController extends Controller
{
  public function dashboard()
  {
    return view('admin.dashboard');
  }

  public function produk_list()
  {
    $produk = produk::paginate(10);
    return view('admin.produk_list', compact('produk'));
  }




  public function input()
  {
    return view('admin.input_produk');
  }
  public function add_produk(Request $request)
  {

    $request->validate([
      'nama_produk' => 'required|string|max:255',
      'gambar' => 'required|image|mimes:jpg,jpeg,png,gif',
      'harga' => 'required|numeric'
    ]);

    $file = $request->file('gambar');

    $filename = time() . '_' . $file->getClientOriginalName();
    $path = $file->move(public_path('storage/produk'), $filename);

    // Simpan path relatif
    $gambarPath = 'produk/' . $filename;

    Produk::create([
      'nama_produk' => $request->nama_produk,
      'gambar' => $gambarPath,
      'kategori' => $request->kategori,
      'is_diskon' => $request->is_diskon,
      'harga' => $request->harga,
      'harga_diskon' => $request->harga_diskon
    ]);

    // Redirect balik dengan pesan sukses
    return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diproses');
  }

  public function delete($id)
  {
    $produk = produk::findOrFail($id);
    $produk->delete();

    return redirect()->route('admin.produk_list')->with('success', 'Produk berhasil dihapus.');
  }

  public function edit($id)
  {
    $produk = produk::findOrFail($id);

    return view('admin.update_produk', compact('produk'), [
      "produk" => $produk,
    ]);
  }

  public function update(Request $request, $id)
  {
    if ($request->isMethod('put')) {
      $produk = Produk::findOrFail($id);

      $data = [
        'nama_produk' => $request->input('nama_produk'),
        'harga' => $request->input('harga'),
        'harga_diskon' => $request->input('harga_diskon') ?? null,
        'kategori' => $request->input('kategori') ?? null,
        'is_diskon' => $request->input('is_diskon') ?? null,
      ];

      if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('storage/produk'), $filename);

        // Simpan path relatif
        $data['gambar'] = 'produk/' . $filename;
      } else {
        // Jika tidak ada gambar baru, gunakan gambar lama dari database
        $data['gambar'] = $produk->gambar;
      }

      produk::where('id', $id)->update($data);
    }

    return redirect()->route('admin.produk_list')->with('success', 'Produk berhasil diperbarui.');
  }

  public function review()
  {
    $ulasan = ulasan::get();
    return view('admin.review', ['ulasan' => $ulasan]);
  }

  public function reviewDel($id)
  {
    $ulasan = ulasan::findOrFail($id);
    $ulasan->delete();

    return redirect()->route('admin.review')->with('success', 'Ulasan berhasil dihapus.');
  }
}
