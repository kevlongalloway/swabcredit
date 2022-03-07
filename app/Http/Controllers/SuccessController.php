<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    /**
     * Display the success modal with a message.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        return view('customer.success', [
            'title' => __('messages.' . $type . '.title'),
            'message' => __('messages.' . $type . '.message')
        ]);
    }
}
