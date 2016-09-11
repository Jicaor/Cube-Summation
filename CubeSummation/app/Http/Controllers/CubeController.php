<?php

namespace CubeSummation\Http\Controllers;

use CubeSummation\CubeModel;
use Illuminate\Http\Request;

use CubeSummation\Http\Requests;

class CubeController extends Controller
{
    public function home()
    {
        return view('cube.home');
    }

    public function about()
    {
        return view('cube.about');
    }

    public function run(Request $request)
    {
        $lines = explode("\n", $request->input('input'));
        $lineIndicator = 1;
        $outputTextarea = "";

        for ($i = 1; $i <= $lines[0]; $i++) {

            $lineTmp = explode(" ", $lines[$lineIndicator]);
            $cube = new CubeModel($lineTmp[0]);
            $lineIndicator++;
            for ($j = 0; $j < $lineTmp[1]; $j++) {
                $comand = explode(" ", $lines[$lineIndicator]);
                if (strtoupper($comand[0]) == "UPDATE") {
                    //Run Update
                    $cube->updateCube($comand[1], $comand[2], $comand[3], $comand[4]);
                } else if (strtoupper($comand[0]) == "QUERY") {
                    //Run Query
                    $outputTextarea = $outputTextarea . $cube->queryCube($comand[1], $comand[2], $comand[3], $comand[4], $comand[5], $comand[6]) . "\n";
                }
                $lineIndicator++;
            }
        }
        return response()->json(['output' => $outputTextarea]);
    }
}
