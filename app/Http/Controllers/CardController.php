<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function getData() {
        return Card::all();
    }
    public function addData(Request $request) {

        $card = new Card();
        $card->title = $request->title;
        $card->container = $request->container;
        $card->created_at = now();
        $card->updated_at = now();
        $result = $card->save();

        if($result) {
            return ['Status'=>'Success'];
        }
        return ['Status'=>'Error'];
    }

    public function updateData(Request $request) {
        $card = Card::find($request->id);
        $card->title = $request->title;
        $card->container = $request->container;
        $result = $card->save();
        if($result) {
            return ['Status'=>'Success'];
        }
        return ['Status'=>'Error'];
    }

    public function deleteData($id) {
        $card = Card::find($id);
        $result = $card->delete();
        if($result) {
            return ['Status'=>'Success'];
        }
        return ['Status'=>'Error'];
    }
}
