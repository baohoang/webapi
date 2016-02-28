<?php

namespace App\Http\Controllers;

use App\ArtOfClickModel;
use App\Country;
use App\Offer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class OfferController extends Controller
{
    //

    public function index()
    {

    }

    public function store()
    {
    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function listAll(Request $request)
    {
        $params = $request->all();
        $funcName = $params['function'];
        if ($funcName !== null) {
            if ($funcName === 'artofclick') {
                return ArtOfClickModel::all();
            }
        }
        return null;
    }
}
