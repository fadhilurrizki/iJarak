<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getAllLokasi() {
        
        return Api::select('longitude','latitude')->get();
    }

    public function getInfoDetail(){
        return Api::all();
    }

    public function getAllFilteredByLocation(){
        return Api::orderBy('alamat','asc')->get();
    }
    public function getAllFilteredByKeterangan(){
        return Api::orderBy('keterangan','asc')->get();
    }
     public function editLevelKerusakan(){
            Api::where('id_laporan', $id_laporan)->
            update(['level' => $level]);
    }
    public function editStatusLaporan(){
           Api::where('id', $id_laporan)->
           update(['status' => $status]);
    }
    public function postLaporan(){
            Api::insert(
            ['status' => $status, 
            'keterangan' => $keterangan,
            'alamat' => $alamat,
            'level' => $level,
            'foto1' => $foto1,
            'foto2' => $foto2,
            'foto3' => $foto3 ]
);
    }
    
}
