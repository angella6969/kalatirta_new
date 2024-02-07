<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalatirta_permintaan_data extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $Filters)
    {
        $query->when($Filters['search'] ?? false, function ($query, $search) {
            return  $query->where('name', 'ilike', '%' . strtolower($search) . '%');
        });
        
        $query->when($Filters['nomor_registrasi'] ?? false, function ($query, $nomor_registrasi) {
            return $query->where('nomor_registrasi', '=', $nomor_registrasi);
        });
    }
    
}
