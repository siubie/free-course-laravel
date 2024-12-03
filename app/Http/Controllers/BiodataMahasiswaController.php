<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBiodataMahasiswaRequest;
use App\Http\Requests\UpdateBiodataMahasiswaRequest;
use App\Models\BiodataMahasiswa;
use Illuminate\Support\Facades\DB;

class BiodataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dump the request
        dump(request()->search);
        // //ambil data biodata mahasiswa dari database dengan eloquent orm
        // $biodata_mahasiswa = BiodataMahasiswa::all();
        //get data from database with pagination
        // $biodata_mahasiswa = BiodataMahasiswa::paginate(10);
        //ambil biodata mahasiswa dengan query builder dan pagination
        //add where clause for searching
        $biodata_mahasiswa = DB::table('biodata_mahasiswas')
            ->when(
                request()->search,
                function ($query) {
                    $query->where('nama', 'like', '%' . request()->search . '%');
                }
            )
            ->when(
                request()->jurusan,
                function ($query) {
                    $query->where('jurusan', request()->jurusan);
                }
            )
            //add order by clause when sort is set
            ->when(
                request()->sort,
                function ($query) {
                    $query->orderBy('nama', request()->sort);
                }
            )
            ->paginate(10);

        // $biodata_mahasiswa = DB::table('biodata_mahasiswas')->paginate(10);
        //ambil data biodata mahasiswa dari database dengan query builder
        // $biodata_mahasiswa_query_builder = DB::table('biodata_mahasiswas')->get();
        // dump($biodata_mahasiswa);
        //ambil data biodata mahasiswa dari database dengan raw query
        // $biodata_mahasiswa_query_builder_raw = DB::select('SELECT * FROM biodata_mahasiswas');
        // dump($biodata_mahasiswa);
        //ini bener tapi ga enak karena udah ada helper namanya compact
        // return view('biodata_mahasiswa', [
        //     'name' => $name,
        //     'greetings' => $greetings
        // ],);
        //ini lebih enak
        return view(
            'biodata_mahasiswa',
            compact(
                'biodata_mahasiswa',
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBiodataMahasiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BiodataMahasiswa $biodataMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BiodataMahasiswa $biodataMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBiodataMahasiswaRequest $request, BiodataMahasiswa $biodataMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiodataMahasiswa $biodataMahasiswa)
    {
        //
    }
}
