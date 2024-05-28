<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionSuccessController extends Controller
{
    public function index() {
        return view('payment.transaction_success');
    }
}
