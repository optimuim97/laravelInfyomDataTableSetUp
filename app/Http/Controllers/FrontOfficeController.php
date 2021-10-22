<?php

namespace App\Http\Controllers;

use App\Models\Need;
use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    //
    public function getAllArticle()
    {
        // return view('front_office.article');
    }

    public function postNeed(Request $request)
    {
        Need::create($request->except('_token'));
        alert('Bien effectue','Votre demande a ete envoye avec succes', 'success');
        return back();
    }

    public function getNeedPage()
    {
        return view('front_office.post-needs');
    }
    
    
    public function getAllProduct()
    {
        // return view('front_office.article');
    }

    public function showProductDetails()
    {
        return view('front_office.details-product');
    }


}
