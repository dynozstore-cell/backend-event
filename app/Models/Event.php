<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $fillable = [
        'user_id',
        'nama_event',
        'event_type',
        'kategori_id',
        'deskripsi',
        'tanggal',
        'lokasi',
        'meeting_link',
        'harga',
        'foto_event',
        'custom_form_schema',
        'metode_pembayaran',
        'detail_pembayaran',
        'sertifikat_template',
        'sertifikat_config'
    ];
    
    protected $appends = ['foto_event_url'];

    public function getFotoEventUrlAttribute()
    {
        if (!$this->foto_event) return null;

        $url = $this->foto_event;

        // Auto-fix: Jika masih ada link localhost, arahkan ke URL backend yang benar
        if (str_contains($url, 'localhost:8000')) {
            $url = str_replace('http://localhost:8000', config('app.url'), $url);
        }

        if (filter_var($url, FILTER_VALIDATE_URL)) {
            // Optimasi Cloudinary: Tambahkan parameter f_auto (format otomatis) dan q_auto (kualitas otomatis)
            if (str_contains($url, 'res.cloudinary.com')) {
                return str_replace('/upload/', '/upload/f_auto,q_auto/', $url);
            }
            return $url;
        }

        return url('event/' . $url);
    }

    protected $casts = [
        'custom_form_schema' => 'array',
        'metode_pembayaran' => 'array',
        'sertifikat_config' => 'array',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function penyelenggara()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }

    public function pendaftaran()
    {
        return $this->hasMany(PendaftaranEvent::class, 'event_id');
    }
}
