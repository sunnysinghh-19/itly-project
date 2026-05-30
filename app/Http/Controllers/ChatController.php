<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{

    public function index()
    {
        return view('chat');
    }

    public function ask(Request $request)
    {

        $message = $request->message;

        $apiKey = env('GEMINI_API_KEY');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post(
            "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}",
            [
                "contents" => [
                    [
                        "parts" => [
                            [
                                "text" => "
                                You are ITLY AI Assistant.

                                Company Name: ITLY

                                Business:
                                - Laptops
                                - Desktops
                                - Servers
                                - AI Workstations
                                - Printers
                                - IT Hardware
                                - Networking
                                - Enterprise Solutions

                                Rules:
                                - Reply professionally
                                - Help users choose products
                                - Speak naturally
                                - Reply in simple English/Hinglish
                                - Keep answers useful

                                User Message:
                                {$message}
                                "
                            ]
                        ]
                    ]
                ]
            ]
        );

        if ($response->successful()) {

            $reply =
            $response['candidates'][0]['content']['parts'][0]['text']
            ?? 'No reply';

            return response()->json([
                'reply' => $reply
            ]);
        }

        return response()->json([
            'reply' => 'AI Error: API not working'
        ]);

    }

}
