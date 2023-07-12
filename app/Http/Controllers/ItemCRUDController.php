<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Location;
use App\Models\Unit;
use App\Models\Type;
use Illuminate\Http\Request;

class ItemCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['items'] = Item::with(['jenis', 'kategori', 'satuan', 'merk', 'lokasi'])->orderBy('id', 'desc')->paginate(5);
        
        return view('items.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::get();
        $categories = Category::get();
        $locations = Location::get();
        $types = Type::get();
        $units = Unit::get();

        return view('items.create', compact(
            'brands',
            'categories',
            'locations',
            'types',
            'units'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_item' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'merk' => 'required',
            'nama_item' => 'required',
            'keterangan' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required',
            'harga_jual' => 'required',
            'waktu_update' => 'required',
            'upah_peracik' => 'required',
            'aturan_pakai' => 'required',
            'stok' => 'required'
        ]);
        $items = new Item();
        $items->kode_item = $request->kode_item;
        $items->jenis = $request->jenis;
        $items->kategori = $request->kategori;
        $items->satuan = $request->satuan;
        $items->merk = $request->merk;
        $items->nama_item = $request->nama_item;
        $items->keterangan = $request->keterangan;
        $items->lokasi = $request->lokasi;
        $items->gambar = $request->gambar;
        $items->harga_jual = $request->harga_jual;
        $items->waktu_update = $request->waktu_update;
        $items->upah_peracik = $request->upah_peracik;
        $items->aturan_pakai = $request->aturan_pakai;
        $items->stok = $request->stok;
        $items->save();
        return redirect()->route('items.index')
            ->with('sukses', 'Item has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact(
            'item'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $brands = Brand::get();
        $categories = Category::get();
        $locations = Location::get();
        $types = Type::get();
        $units = Unit::get();

        return view('items.edit', compact(
            'item',
            'brands',
            'categories',
            'locations',
            'types',
            'units'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_item' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'merk' => 'required',
            'nama_item' => 'required',
            'keterangan' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required',
            'harga_jual' => 'required',
            'waktu_update' => 'required',
            'upah_peracik' => 'required',
            'aturan_pakai' => 'required',
            'stok' => 'required'
        ]);
        $items = Item::find($id);
        $items->kode_item = $request->kode_item;
        $items->jenis = $request->jenis;
        $items->kategori = $request->kategori;
        $items->satuan = $request->satuan;
        $items->merk = $request->merk;
        $items->nama_item = $request->nama_item;
        $items->keterangan = $request->keterangan;
        $items->lokasi = $request->lokasi;
        $items->gambar = $request->gambar;
        $items->harga_jual = $request->harga_jual;
        $items->waktu_update = $request->waktu_update;
        $items->upah_peracik = $request->upah_peracik;
        $items->aturan_pakai = $request->aturan_pakai;
        $items->stok = $request->stok;
        $items->save();
        return redirect()->route('items.index')
            ->with('sukses', 'Item has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')
            ->with('sukses', 'Company has been deleted successfully');
    }
}
