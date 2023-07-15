<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'nama_pemesan', 'alamat_pemesan', 'no_hp', 'email', 'jumlah_pesanan', 'deskripsi', 'product_id',];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
