<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $classes = Kelas::whereDate('jadwal', $search)->get();
        } else {
            $classes = Kelas::all();
        }

        return view('admin.kelas.index', [
            'classes' => $classes,
            'search' => $search, 
        ]);
    }


    public function create()
    {
        return view('admin.kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jadwal' => 'required|date',
            'harga' => 'required|integer',
        ]);

        Kelas::create($request->all());

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil dibuat.');
    }

    public function edit(Kelas $kelas)
    {
        return view('admin.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jadwal' => 'required|date',
            'harga' => 'required|integer',
        ]);

        $kelas->update($request->all());

        return redirect()->route()->with('success', 'Kelas berhasil diperbarui.');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();

        return redirect()->route()->with('success', 'Kelas berhasil dihapus.');
    }
}
