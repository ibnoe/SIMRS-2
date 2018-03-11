<?php

namespace Modules\Bangunan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Bangunan\Entities\Lantai;

class BangunanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('checkRole:1');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $lantai = Lantai::orderBy('lantai.id', 'desc')->get();

        $kamar = Lantai::join('kamar', 'kamar.nomor_lantai', '=', 'lantai.nomor_lantai')
            ->groupBy('lantai.nomor_lantai')
            ->orderByDesc('lantai.id')
            ->get(['lantai.nomor_lantai', DB::raw('count(kamar.id) as total_kamar')]);

        return view('bangunan::index')
            ->with('lantais', $lantai)
            ->with('kamars', $kamar);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('bangunan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return redirect()->route('bangunan.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('bangunan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
