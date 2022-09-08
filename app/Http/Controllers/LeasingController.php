<?php

namespace App\Http\Controllers;

use App\Models\Leasing;
use Illuminate\Http\Request;

class LeasingController extends Controller
{
    //
    public function list()    
    {
        //puedo mandar 0 a n id de clientes. 
        $client_ids = request('client_ids');

        if(!empty($client_ids)){
            $leasings = Leasing::whereIn('cliente_id',explode(',',trim($client_ids)))->orderBy('cliente_id')->get();
        }
        else{
            $leasings = Leasing::orderBy('cliente_id')->get();
        }

        return response()->json($leasings);

    }
}
