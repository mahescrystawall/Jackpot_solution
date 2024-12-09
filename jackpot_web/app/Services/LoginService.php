<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class LoginService
{
    public function getloginData()
    {
        // $response = Http::get(url('api/login-data'));
        // $response = Http::timeout(60)->get('http://127.0.0.1:8082/api/login-data');
        $loginData = [
            "status" => true,
            "data" => [
                "access_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5kOTlodWIuY29tL2FwaS9hdXRoIiwiaWF0IjoxNzMyOTU2ODcyLCJleHAiOjE3MzI5NzQ4NzIsIm5iZiI6MTczMjk1Njg3MiwianRpIjoiYmFHYzlTSmptWHlYY3dDdSIsInN1YiI6IjE1MjIzMDkiLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.xJ2dNo9Pa6Fi33jCQq2PK3Y8RbDccRRpzU9C7ck9fPo",
                "user" => [
                    "id" => 1522309,
                    "name" => "Amrutha",
                    "username" => "Amrutha",
                    "balance" => 0,
                    "bonus_amount" => 0,
                    "balance_postfix" => "PTI",
                    "is_coins" => 1,
                    "expose" => "0.00",
                    "pl" => "677.10",
                    "branch_panel_active" => 0,
                    "wager_active" => 0,
                    "contact_info" => "",
                    "available_balance" => 677.1,
                ],
                "stakes"=> [
                    "stake_name_1"=> "100",
                    "stake_name_2"=> "200",
                    "stake_name_3"=> "500",
                    "stake_name_4"=> "1000",
                    "stake_name_5"=> "2000",
                    "stake_name_6"=> "5000",
                    "stake_name_7"=> "10000",
                    "stake_name_8"=> "25000",
                    "stake_amount_1"=> 100,
                    "stake_amount_2"=> 200,
                    "stake_amount_3"=> 500,
                    "stake_amount_4"=> 1000,
                    "stake_amount_5"=> 2000,
                    "stake_amount_6"=> 5000,
                    "stake_amount_7"=> 10000,
                    "stake_amount_8"=>25000
                ],
                "event_type_settings" => [
                    ["id" => 4, "name" => "Cricket"],
                    ["id" => 1, "name" => "Football"],
                    ["id" => 2, "name" => "Tennis"],
                    ["id" => 99995, "name" => "I Casino"],
                    ["id" => 99998, "name" => "Int Casino"],
                    ["id" => 99991, "name" => "Sports book"],
                    ["id" => 7, "name" => "Horse Racing"],
                    ["id" => 4339, "name" => "Greyhound Racing"],
                    ["id" => 99990, "name" => "Binary"],
                    ["id" => 99994, "name" => "Kabaddi"],
                    ["id" => 2378961, "name" => "Politics"],
                    ["id" => 7522, "name" => "Basketball"],
                    ["id" => 7511, "name" => "Baseball"],
                    ["id" => 20, "name" => "Table Tennis"],
                    ["id" => 998917, "name" => "Ice Hockey"],
                    ["id" => 7524, "name" => "Rugby"],
                    ["id" => 26420387, "name" => "Mixed Martial Arts"],
                    ["id" => 3503, "name" => "Darts"],
                    ["id" => 29, "name" => "Futsal"],
                    ["id" => 99997, "name" => "Casino Vivo"],

                    // Additional events...
                ],
                "message" => "🎾 𝐕𝐈𝐑𝐓𝐔𝐀𝐋 𝐓𝐄𝐍𝐍𝐈𝐒 𝐍𝐎𝐖 𝐀𝐕𝐀𝐈𝐋𝐀𝐁𝐋𝐄 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 🎾 🤼‍♂ 𝐏𝐑𝐎 𝐊𝐀𝐁𝐀𝐃𝐃𝐈 🤼‍♂ 𝐁𝐎𝐎𝐊𝐌𝐀𝐊𝐄𝐑 𝐀𝐍𝐃 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓𝐒 𝐀𝐕𝐀𝐈𝐋𝐀𝐁𝐋𝐄 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 🏏 𝐎𝐔𝐑 𝐄𝐗𝐂𝐋𝐔𝐒𝐈𝐕𝐄 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓 𝐅𝐎𝐑 (𝐒𝐑𝐋) 𝐈𝐒 𝐍𝐎𝐖 𝐒𝐓𝐀𝐑𝐓𝐄𝐃 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 , 𝐃𝐑𝐄𝐀𝐌 𝐁𝐈𝐆 𝐖𝐈𝐍 𝐁𝐈𝐆 💰",
            ],
        ];
        // if (!$response->successful()) {
        //     return response()->json(['error' => 'Unable to fetch data'], $response->status());
        // }

        return $loginData;


        // return response()->json($response, 200);
        // dd($response->json());
    }

}