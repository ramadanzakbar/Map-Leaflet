<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class TitikModel extends Model
{
    public function alldata(){
        $result = DB::table('titik')
        ->select("nama", "latitude", "longitude")
        ->get();
        return $result;
    }
}
