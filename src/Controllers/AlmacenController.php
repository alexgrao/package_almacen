<?php

namespace Alexgrao\PackageAlmacen;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AlmacenController extends Controller
{
    public function vista(){
		return view('calculator::vista');
	}
}
