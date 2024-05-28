<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionChoiceController extends Controller
{
    public function index() {
        return view('payment.transaction_choice');
    }
}
