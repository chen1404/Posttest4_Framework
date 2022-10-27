<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Models\Saham;
use Illuminate\Http\Request;

class SahamController extends Controller
{
    public function create()
    {
        return view('create', ["brokers" => Broker::all()]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Kode_Saham' => 'required|string|max:100',
            'Nama' => 'required|string|max:100',
            'Saham' => 'required|string|max:100',
            'Papan_Pencatatan' => 'required|string|max:100',
            'Broker_Id' => 'required'

        ]);

        Saham::create($validateData);

        return redirect('/')->with('success', 'Data Saham berhasil ditambah');
    }

    public function show(Saham $id)
    {
        return view('show', [
            'title' => 'Saham',
            'saham' => $id
        ]);
    }
}
