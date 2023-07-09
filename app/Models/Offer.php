<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "b24_contact_id",
        "b24_deal_id",
        "b24_manager_id",
        "manager",
        "position",
        "phone",
        "avatar",
        "status",
        "date_end",
        "createAt",
        'url_key',
    ];

    public function offerItems(){
        return $this->hasMany(OfferItem::class);
    }
}
