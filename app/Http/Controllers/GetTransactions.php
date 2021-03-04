<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class GetTransactions extends Controller
{
    public function getTransactions(){
        $data = Transaction::with('individual.sacco')->orderBy('id','desc')->paginate(10);
        return response()->json($data,200);
    }
    public function fizzBuzz(Request $request){
        $data = $request->max;
        $newArray = array();
        for ($i=0; $i <= $data; $i++) { 
            if($i%3 == 0 && $i%5 == 0){
                $newArray[$i]= "FizzBuzz";
            }
            elseif ($i%5 == 0) {
                $newArray[$i]= "Buzz";
            }
            elseif ($i%3 == 0) {
                $newArray[$i]= "Fizz";
            }
        }

        return response()->json($newArray);

    }
}
