<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\cek_id;
use App\usr_image_db;

class dataMember extends Controller
{
    public function showMember(){
    	$users = DB::table('tb_anggotas')->count();
    	//$data = DB::table('tb_anggotas')->get();
    	$data = DB::table('tb_anggotas')
    		->join('cek_ids', 'cek_ids.kode_member', '=', 'tb_anggotas.kode_member')
            ->join('usr_image_dbs', 'usr_image_dbs.kode_member', '=', 'tb_anggotas.kode_member')
    		->get();
    	$kode="";
        $cek = null;
    	//echo $users;
    	//if($users == 0){
            $statement = DB::select("SHOW TABLE STATUS LIKE 'cek_ids'");
            $cek = $statement[0]->Auto_increment;
            //$cek = DB::table('cek_ids')->max('id') + 1;
    	//	$kode = "USR".date("Ymd")."-1";
    	//} else{
    		//$cek = DB::table('cek_ids')->where(max('id'))->get();
    	//	$cek = cek_id::max('id')+1;
    		//$add = $users+1;
    	//}
        $kode= "USR".date("Ymd")."-".$cek;
    	return view('index',['kode' => $kode, 'data' => $data]);
    }
}
