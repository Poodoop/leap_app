<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'jadwal', 'harga'];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
}
