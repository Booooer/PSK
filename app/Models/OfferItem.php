<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "offer_id",
        "cid",
        "type",
        "square",
        "complex",
        "house",
        "description",
        "images",
        "like",
    ];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
