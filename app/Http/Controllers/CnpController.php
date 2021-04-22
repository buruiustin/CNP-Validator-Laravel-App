<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckCNP;

class CnpController extends Controller
{
    public function index(Request $request)
    {
        $cnp = false;
        $infoCNP = false;

        if ($request->isMethod('post'))
        {
            $cnp = $request->post('cnp');

            $request->validate([
                'cnp' => [
                    'required', 
                    new CheckCNP()
                ]
            ]);
        }

        return view('index', ['cnp' => $cnp]);
    }
}
