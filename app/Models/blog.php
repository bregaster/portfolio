<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $fillable = ['judul','image','slug', 'isi', 'meta'];
    protected $appends = ['tanggal'];
    public function getTanggalAttribute()
    {
        if ($this->attributes['created_at']) {
            return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, jS \of F Y h:i A');
        } else {
            return 'present';
        }
    }
}
