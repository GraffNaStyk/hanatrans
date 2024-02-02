<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderMail;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function send(OrderRequest $orderRequest): JsonResponse
    {
        Mail::send(new OrderMail($orderRequest));

        return response()->json([], 201);
    }
}
