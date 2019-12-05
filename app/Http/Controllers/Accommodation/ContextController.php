<?php

namespace App\Http\Controllers\Accommodation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ContextController extends Controller
{
    /*
     * Change gender to male
     */
    public function maleGender($id){
        DB::table('participants')->whereId($id)->update(['gender'=>'male']);
        return "success";
    }
    /*
     * Change gender to female
     */
    public function femaleGender($id){
        DB::table('participants')->whereId($id)->update(['gender'=>'female']);
        return "success";
    }
    /**
     * remove accommodation
     */
    public function removeAccommodation($id){
        DB::table('participants')->whereId($id)->update(['accomodation'=>null]);
        return $this->removeAllocation($id);
    }
    /**
     * give accommodation
     */
    public function giveAccommodation($id){
        DB::table('participants')->whereId($id)->update(['accomodation'=>1]);
        return 'success';
    }
    /*
     * remove Allocation
     */
    public function removeAllocation($id){
        DB::table('participants')->whereId($id)->update(['allocated'=>null]);
        $row = DB::table('rooms')->where('current','LIKE',"%,$id,%")->first();
        if($row===null) return "No such room";
        $current = str_replace(",%id,",',',$row->current);
        $count = $row->count-1;
        DB::table('rooms')->whereId($row->id)->update(["count"=>$count,"current"=>$current]);
        return "success";
    }
    /*
     * Update the allocation
     */
    public function accommodate($id){
        DB::table('participants')->whereId($id)->update(['accomodation'=>1]);
        return "success";
    }
}
