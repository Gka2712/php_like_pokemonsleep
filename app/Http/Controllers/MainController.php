<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use App\Models\Pokemon;
use App\Models\Cavigon;
use App\Models\Nut;
use App\Models\Rank;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $pokemons=Pokemon::all();
        $cavigon=Cavigon::find(1);
        $nut=Nut::find(1);
        $rank=Rank::find($cavigon->rankid);
        return view('main',['pokemons'=>$pokemons,'cavigon'=>$cavigon,'nut'=>$nut,'rank'=>$rank]);
    }
    public function collect($id){
        $cavigon=Cavigon::find(1);
        $rank=Rank::find($cavigon->rankid);
        $upokemon=Pokemon::find($id);
        $nut=Nut::find(1);
        if ($upokemon->lasttime!=NULL){
            $time1=$upokemon->lasttime;
            $time2=Carbon::now();
            $time_diff=$time2->diffInSeconds($time1);
            if($time_diff<=500){
                $upokemon->flg=false;
                $alert="<script type='text/javascript'>alert('まだ木の実がないようです');window.history.back();</script>";
                echo $alert;
                return;
            }
            else{
                $upokemon->flg=True;
            }
            
        }
        else{
            $upokemon->flg=true;
        }
        if($upokemon->flg==true){
            $sumpower=0;
            $randcollectnum=mt_rand(1,10);
            for($i=0;$i<$randcollectnum;$i++){
                $randpower=mt_rand(35,105);
                $sumpower+=$randpower;
            }
            $cavigon->power+=$sumpower;
            $upokemon->lasttime=Carbon::now();
            $upokemon->flg=false;
            $randnutnum=mt_rand(1,15);
            $nut->num+=$randnutnum;
            echo $nut->num;
            $nut->num=min($nut->num,$nut->limitnum);
            echo $nut->limit_num;
            echo $nut->num;
            while($rank->minpower<$cavigon->power){
                $rank+=1;
            }
            $cavigon->save();
            $rank->save();
            $upokemon->save();
            $nut->save();
        }
        return redirect(route('pokemonsleep.main'));
    }
    public function reset(){
        $rcavigon=Cavigon::find(1);
        $rcavigon->power=0;
        $rcavigon->rankid=1;
        $rnut=Nut::find(1);
        $rnut->num=0;
        $rnut->limitnum=80;
        for($i=0;$i<5;$i++){
            $rpokemon=Pokemon::find($i+1);
            $rpokemon->lasttime=NULL;
            $rpokemon->flg=false;
            $rpokemon->save();
        }
        $rcavigon->save();
        $rnut->save();
        return redirect(route('pokemonsleep.main'));
    }
    public function cookquantity(){
        $cquantity=Nut::find(1);
        $cquantity->limitnum+=5;
        $cquantity->save();
        return redirect(route('pokemonsleep.main'));
    }
}
