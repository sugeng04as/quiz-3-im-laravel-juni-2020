<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;


class ArtikelModel{
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function insert($data){
        $data = DB::table('artikel')->insert($data);
        return $data;
    }
    
    public static function find_id($id){
        $data = DB::table('artikel')
                ->where('id', $id)
                ->first();
        return $data;
    }

    public static function update($data, $id){
        $data = DB::table('artikel')
                            ->where('id', $id)
                            ->update([
                                'judul' => $data["judul"],
                                'slug' => $data["slug"],
                                'isi' => $data["isi"],
                                'tag' => $data["tag"],
                                ]
                            );
        return $data;
    }

    public static function delete($id){
        $data = DB::table('artikel')
                ->where('id', '=', $id)
                ->delete();
        return $data;
    }

}
?>