<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Item extends Model
{
    use HasFactory;

    public function jenis ()
    {
        return $this->belongsTo('App\Models\Type','jenis');
    }

    public function kategori ()
    {
        return $this->belongsTo('App\Models\Category', 'kategori');
    }

    public function satuan ()
    {
        return $this->belongsTo('App\Models\Unit', 'satuan');
    }

    public function merk ()
    {
        return $this->belongsTo('App\Models\Brand', 'merk');
    }

    public function lokasi ()
    {
        return $this->belongsTo('App\Models\Location', 'lokasi');
    }
}
