<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\po1;
use PDF;
class preview extends Controller
{
    public function index()
    {
    	$cetakpo1 = po1::all();
    	return view('assesment.cetak_po1', compact('po1'));
    }
}
