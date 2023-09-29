<?php

namespace App\Http\Controllers;

use App\Models\Kantor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KantorController extends Controller
{
    public function index()
    {
        $kantors = Kantor::all();
        $data = [
            'kantors' => $kantors
        ];
        return view('kantors.index', $data);
    }

    public function create()
    {
        return view('kantors.create');
    }

    public function store(Request $request, Kantor $kantor)
    {
        // dd($request->all());
        $data = $kantor;
        $data->nama = $request->nama;
        $data->nip = $request->nip;
        $data->save();
        return redirect('/');
    }

    public function edit(Kantor $kantor, $id)
    {
        $kantor = $kantor->where('id', $id)->first();
        $migration = DB::table('migrations')->first();
        // dd($kantor);

        return view('kantors.edit',
        [
            'data' => $kantor,
            'ambil_id' => $id,
            'contoh' => $kantor,
            'datamigration' => $migration

        ]);
    }

    public function updateData(Request $request, Kantor $kantor, $id)
    {
        // dd($request->all());
        $data = Kantor::where('id', $id)->first();
        $data->nama = $request->ambilnama;
        $data->nip = $request->ambilnip;
        $data->save();

        return redirect('/');
    }

    public function deleteData(Kantor $kantor, $id) //ini parameter yaa
    {
        // $kantor = Kantor::where('id', $id)->first();
        $delete = Kantor::where('id', $id)->delete();
        // dd($delete);

        return redirect('/');
    }

}
