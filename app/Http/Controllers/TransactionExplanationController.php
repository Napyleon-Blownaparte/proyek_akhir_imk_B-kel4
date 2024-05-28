<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionExplanationController extends Controller
{
    public function index() {
        return view('payment.transaction_explanation');
    }
}

