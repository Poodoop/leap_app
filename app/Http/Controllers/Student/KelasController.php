<?php
namespace App\Http\Controllers\Student;

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

        return view('student.kelas.index', [
            'classes' => $classes,
            'search' => $search,
        ]);
    }

    public function show(Kelas $kelas)
    {
        return view('student.kelas.show', compact('kelas'));
    }
}

