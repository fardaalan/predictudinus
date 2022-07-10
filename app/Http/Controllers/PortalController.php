<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function predict()
    {
        return view('predict');
    }

    public function postPredict(Request $request)
    {
        $req = $request->all();
        unset($req['_token']);
        // $data = json_encode($req);
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://prediksi-kelulusan-api.herokuapp.com/prediksi',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $req,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $res = json_decode(($response));
        if($res->data->result == 'LATE')
        {
            $msg = 'Kemungkinan Anda TIDAK LULUS TEPAT WAKTU';
        }

        if($res->data->result == 'ONTIME')
        {
            $msg = 'Kemungkinan Anda LULUS TEPAT WAKTU';
        }

        $request->session()->put('msg', $msg);

        return redirect()->back();

    }

}
