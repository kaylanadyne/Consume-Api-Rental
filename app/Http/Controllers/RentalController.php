<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

$BaseApi = new BaseApi();

class rentalController extends Controller
{
    protected $baseApi;
    public function __construct()
    {
        $this->baseApi = new BaseApi();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $search = $request->query('search_supir');
        $limit = $request->query('limit');

        $data = $this->baseApi->index('/api/rental', ['search_supir' => $search]);
        $rentals = $data->json();
        return view('index')->with(['rentals' => $rentals['data']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rental = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'type' => $request->type,
            'waktu_jam' => $request->waktu_jam,
            'jam_mulai' => $request->jam_mulai,
            'supir' => $request->supir,
        ];
        // dd($rental);
        $proses = (new BaseApi)->store('/api/rental/create', $rental);
        if ($proses->failed()) {
            $errors = $proses->json('rental');
            return redirect()->back()->with(['errors' => $errors]);
        } else {
            return redirect('/rental')->with('success', 'Berhasil menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->baseApi->index('/api/rental');
        $rentals = $data->json();
        return view('show')->with(['rentals' => $rentals['data']]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rental = [
            'id' => $id
        ];
        $response = $this->baseApi->show('/api/rental/show/'.$id, $rental);


        return view('edit')->with('rentals', $rental);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = [
            'jam_selesai' => $request->jam_selesai,
            'tempat_tujuan' => $request->tempat_tujuan,
            'riwayat_perjalanan' => $request->riwayat_perjalanan,
        ];
        $proses = $this->baseApi->update('/api/rental/update/'.$id, $payload);
        if ($proses->failed()) {
            $errors = $proses->json('rental');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/rental')->with('success', 'Berhasil mengedit');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proses = $this->baseApi->delete('/api/rental/delete/'.$id);
        if ($proses->failed()) {
            $errors = $proses->json('data');
             return redirect()->back()->with(['errors' => $errors]);
         } else {
            return redirect('/rental')->with('deleted', 'Berhasil menghapus');
        }
    }

    public function getTrash ()
    {
        $data = (new BaseApi)->getTrash('/api/rental/trash/all');
        $rental = $data->json('data');
        return view('dihapus')->with('rentals', $rental);
    }

    public function restore($id)
    {
        $proses = (new BaseApi)->restore('/api/rental/trash/restore/' .$id);
        if($proses->failed()){
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('rental')->with('restored', 'Berhasil mengembalikan data dari sampah!');
        }
    }
    
    public function deleteTrash($id)
    {
        $proses = (new BaseApi)->deleteTrash('/api/rental/trash/permanent/' .$id);
        if($proses->failed()){
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect()->back()->with('hapus', 'Berhasil menghapus permanen!');
        }
    }

    public function lihat(){
        return view('welcome');
    }

    public function panduan(){
        return view('panduan');
    }
}
