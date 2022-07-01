<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftCardController extends Controller

{
    public function show()
    {
        return view('home');
    }

    public function recup(Request $request)
    {
        $price = htmlspecialchars($request->price);
        $lastnameB = htmlspecialchars($request->bLastname);
        $firstnameB = htmlspecialchars($request->bFirstname);
        $lastnameO = htmlspecialchars($request->oLastname);
        $firstnameO = htmlspecialchars($request->oFirstname);
        $date = date('m-Y');
        $numero = rand(00, 99);
        $dateNumero = $date . '-' . $numero;

        return view(
            'gift-card',
            [
                'price' => $price,
                'bLastname' => $lastnameB,
                'bFirstname' => $firstnameB,
                'oLastname' => $lastnameO,
                'oFirstname' => $firstnameO,
                'dateNumero' => $dateNumero
            ]
        );
    }
}
