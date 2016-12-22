<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(Request $request)
    {
        libxml_use_internal_errors(true);

        if (($xml = simplexml_load_string($request->get('xml'))) === false){
            $request->session()->flash('error', 'XML Inválido!');
            return redirect('/');
        }

        foreach ($xml->Clients->client as $value){
            if (((string) $value->user) !== 'N/A')
            $conexoes[(string) $value->user][] = [
                'oui_mac' => (string) $value->oui_mac,
                'mac_addr' => (string) $value->mac_addr,
                'ap_serial' => (string) $value->ap_serial,
                'ssid' => (string) $value->ssid,
                'time_connected' => (string) $value->time_connected,
                'user' => (string) $value->user
            ];
        }

        arsort($conexoes);

        return view('table', ['conexoes' => $conexoes]);
    }
}
