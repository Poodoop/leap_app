<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::with(['user', 'kelas'])->get();
        return view('admin.pembelian.index', compact('pembelian'));
    }

    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();

        return redirect()->route('admin.pembelian.index')->with('success', 'Pembelian berhasil dihapus.');
    }
}
