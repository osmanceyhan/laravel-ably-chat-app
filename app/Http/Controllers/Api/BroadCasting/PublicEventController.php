<?php

namespace App\Http\Controllers\Api\BroadCasting;

use App\Events\PublicMessageEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicEventController extends Controller
{

    /**
     * @param Request $request
     * @return void
     */
    public function send(Request $request){
        try{
            $validatedData = $request->validate([
                'channelName' => 'required|string',
                'message' => 'required|string|max:4096', // Maksimum 4096 karakter
            ]);

            $channelName = $validatedData['channelName'];
            $message = $validatedData['message'];

            broadcast(new PublicMessageEvent( $channelName, $message ));
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Doğrulama hatası oluştuğunda buraya düşer
            $errors = $e->validator->errors()->all();
            return response()->json(['error' => $errors], 422);
        }

    }
}
