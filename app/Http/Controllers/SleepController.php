<?php

namespace App\Http\Controllers;

use App\Models\Sleep;
use App\Models\Spower;
use App\Models\Cpokemon;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SleepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newsleep');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newsleep= new Sleep;
        $newspower= new Spower;
        $cpokemon= Cpokemon::all();
        $collect=[];
        $newsleep->day=request('day');
        $newsleep->sleeptime=request('sleeptime');
        $newsleep->getuptime=request('getuptime');
        $newsleep->save();
        $sleeptime=Carbon::parse($newsleep->sleeptime);
        $getuptime=Carbon::parse($newsleep->getuptime);
        $time_diff=abs($sleeptime->diffInMinutes($getuptime));
        $sleepscore=min(($time_diff/510)*100,100);
        $sleeppower=$sleepscore*$time_diff;
        $newspower->sleeppower=$sleeppower;
        $newspower->day_id=$newsleep->id;
        $newspower->save();
        for($i=0;$i<5;$i++){
            $randnum=mt_rand(1,Cpokemon::count());
            array_push($collect,$randnum);
        }
        return view('sleepstore',['newsleep'=>$newsleep,'timediff'=>$time_diff,'sleepscore'=>$sleepscore,'sleeppower'=>$sleeppower,'collects'=>$collect]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sleep $sleep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sleep $sleep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sleep $sleep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sleep $sleep)
    {
        //
    }
}
