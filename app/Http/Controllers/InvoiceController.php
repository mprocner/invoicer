<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class InvoiceController
 * @package App\Http\Controllers
 */
class InvoiceController extends Controller
{
    /**
     *  Create invoice action
     */
    public function create()
    {
        return view('invoice.create');
    }
}
