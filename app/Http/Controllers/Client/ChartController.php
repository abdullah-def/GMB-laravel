<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function get_chart_reviews(Request $request, )
    {
        $last_week = [];
        $data = [];

        for ($k = 0; $k < $request->input('value'); $k++) {
            $day = date('Y-m-d', strtotime('-' . $k . ' days'));
            array_push($last_week, $day);
            $response =$request->user()
            ->reviewResponse()
            ->whereDate('date_response', '=', $day)
            ->orderBy('date_response', 'desc')
            ->get();

            array_push($data, count($response));

        }

        return [array_reverse($last_week), array_reverse($data)];
    }

    public function get_chart_reviews_total(Request $request, )
    {

    }
}
