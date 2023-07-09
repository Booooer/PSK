<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferItem;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    protected function generateKey(){
        $key = "";
        $symbols = "ETAOINSHRDLCUMWFGYPBVKXJQZetaoinshrdlcumwfgypbvkxjqz1234567890-_";
        for ($i=0; $i < rand(7,12); $i++) {
            $key .= $symbols[rand(0, strlen($symbols))];
        }

        return $key;
    }

    public function offer($key){
        $offer = Offer::where('url_key',$key)->firstOrFail();

        return view('offer',compact('offer'));
    }

    public function createOffer(Request $request){
        Offer::create([
            "b24_contact_id" => $request->b24_contact_id,
            "b24_deal_id" => $request->b24_deal_id,
            "b24_manager_id" => $request->b24_manager_id,
            "manager" => $request->manager,
            "position" => $request->position,
            "phone" => $request->phone,
            "avatar" => $request->avatar,
            "status" => $request->status,
            "date_end" => $request->date_end,
            "createAt" => $request->createAt,
            "url_key" => $this->generateKey()
        ]);

        return "200: подборка успешно создана";
    }

    public function updateOffer(Request $request){
        $offer = Offer::findOrFail($request->id);

        $offer->update([
            "b24_manager_id" => $request->b24_manager_id,
            "manager" => $request->manager,
            "position" => $request->position,
            "avatar" => $request->avatar,
            "status" => $request->status,
            "date_end" => $request->date_end,
        ]);

        return response("200: подборка обновлена",200);
    }

    public function createItem(Request $request){
        $offer = Offer::findOrFail($request->offer_id);

        if ($offer->status != "Новая") {
            return response('500: Статус подборки не позволяет добавлять новые элементы',500);
        }

        OfferItem::create([
            "offer_id" => $request->offer_id,
            "cid" => $request->cid,
            "type" => $request->type,
            "square" => $request->square,
            "complex" => $request->complex,
            "house" => $request->house,
            "description" => $request->description,
            "images" => json_encode($request->images),
            "like" => $request->like,
        ]);

        return response("200: Новый элемент был создан",200);
    }

    public function deleteItem(Request $request){
        $item = OfferItem::find($request->id);

        if (!$item) {
            return response("404: Элемент подборки с id $request->id не был найден", 404);
        }

        $item->delete();

        return response("200: Элемент подборки с id $request->id был успешно удален", 200);
    }
}
