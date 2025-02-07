<?php

namespace App\Http\Controllers;

use App\Models\Nut;
use App\Models\Cavigon;
use Illuminate\Http\Request;

class NutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nuts=Nut::find(1);
        $cavigon=Cavigon::find(1);
        $cnut_num=min($nuts->num,$nuts->cooknum);
        if($cnut_num<=0){
            $alert="<script type='text/javascript'>alert('料理ができません');window.history.back();</script>";
            echo $alert;
            return;
        }
        $nuts->num-=$cnut_num;
        $cavigon_power=0;
        while($cnut_num>0){
            $randnutpower=mt_rand(65,135);
            $cavigon->power+=$randnutpower;
            $cnut_num-=1;
        }
        $nuts->save();
        $cavigon->save();
        return redirect(route('pokemonsleep.main'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nut $nut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nut $nut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nut $nut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nut $nut)
    {
        //
    }
}
