<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class BetHistoryService
{
    public function getbetHistoryData()
    {
    
        // $response = Http::timeout(60)->get('http://127.0.0.1:8000/api/bet-history');
        // $response = Http::get('http://127.0.0.1:8000/api/bet-history', [
        //     'start_date' => $defaultFilterData['start_date'],
        //     'end_date' => $defaultFilterData['end_date'],
        //     'event_type_id' => $defaultFilterData['event_type_id'],
        //     'type' => $defaultFilterData['type'],
        //     'is_matched' => $defaultFilterData['is_matched'],
        // ]);
        // Log::info('API Response=> ', ['status' => $response->status(), 'body' => $response->body()]);
        $response = [
            'data' => [
                'orders' => [
                    'current_page' => 1,
                    'data' => [
                        [
                            "event_id"=> 33837618,
                    "event_type_id"=> 4,
                    "event_name"=> "Australia Women v India Women",
                    "market_name"=> "10 Over Runs AUS W (N)",
                    "bet_type"=> 0,
                    "selection_id"=> "141182533837619",
                    "selection_name"=> "10 Over Runs AUS W (N)",
                    "market_type_id"=> "FANCY",
                    "rate"=> "54.00",
                    "average_rate_matched"=> "54.00",
                    "price"=> "100.00",
                    "stake"=> "100.00",
                    "stake_matched"=> "100.00",
                    "stake_cancelled"=> "0.00",
                    "win"=> "100.00",
                    "lose"=> "100.00",
                    "result"=> "100.00",
                    "commission_in_amount"=> "0.00",
                    "commission_out_amount"=> "0.00",
                    "status"=> 1,
                    "is_matched"=> 0,
                    "client_ip"=> "94.207.88.171",
                    "client_browser"=> "Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/131.0.0.0 Safari\/537.36",
                    "requested_at"=> "2024-12-05 07:30:50",
                    "matched_at"=> "2024-12-05 07:30:50",
                    "matched_at_format"=> "2024-12-05T07:30:50.000000Z",
                    "requested_at_format"=> "2024-12-05T07:30:50.000000Z"
                           
                        ]
                    ],
                    'first_page_url' => 'https://api.d99hub.com/api/client/orders?page=1',
                    'from' => 1,
                    'last_page' => 1,
                    'last_page_url' => 'https://api.d99hub.com/api/client/orders?page=1',
                    'links' => [
                        ['url' => null, 'label' => '&laquo; Previous', 'active' => false],
                        ['url' => 'https://api.d99hub.com/api/client/orders?page=1', 'label' => '1', 'active' => true],
                        ['url' => null, 'label' => 'Next &raquo;', 'active' => false]
                    ],
                    'next_page_url' => null,
                    'path' => 'https://api.d99hub.com/api/client/orders',
                    'per_page' => 100,
                    'prev_page_url' => null,
                    'to' => 1,
                    'total' => 1
                ],
                "links"=> [
                [
                    "url"=> null,
                    "label"=> "&laquo; Previous",
                    "active"=> false
                ],
                [
                    "url"=> "https:\/\/api.d99hub.com\/api\/client\/report\/order_history?page=1",
                    "label"=> "1",
                    "active"=> true
                ],
                [
                    "url"=> null,
                    "label"=> "Next &raquo;",
                    "active"=> false
                ]
            ],
            ],
            'status' => true,
            'error' => ['message' => '', 'code' => 0]
        ];

        // if (!$response->successful()) {
        //     return response()->json(['error' => 'Unable to fetch data'], $response->status());
        // }

        // return $response->json();
        return $response;
    }
}
?>