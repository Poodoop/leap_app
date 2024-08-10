<?php
namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Kelas;

class PurchaseController extends Controller
{
    public function store(Request $request, Kelas $kelas)
    {
        $request->user()->pembelians()->create([
            'kelas_id' => $kelas->id,
            'tanggal_pembelian' => now(),
        ]);

        return redirect()->route('student.kelas.index')->with('success', 'Kelas berhasil dibeli.');
    }
}
