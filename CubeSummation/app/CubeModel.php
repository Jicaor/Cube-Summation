<?php

namespace CubeSummation;

use Illuminate\Database\Eloquent\Model;

class CubeModel
{
    private $cube;

    function __construct($n)
    {
        $this->setCube($n);
    }

    private function setCube($n)
    {
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $n; $j++) {
                for ($k = 0; $k <= $n; $k++) {
                    $this->cube[$i][$j][$k] = 0;
                }
            }
        }
    }

    public function getCube()
    {
        return $this->cube;
    }

    public function updateCube($x, $y, $z, $W)
    {
        $this->cube[$x][$y][$z] = $W;
    }

    public function queryCube($x1, $y1, $z1, $x2, $y2, $z2)
    {
        $sum = 0;
        for ($i = $x1; $i <= $x2; $i++) {
            for ($j = $y1; $j <= $y2; $j++) {
                for ($k = $z1; $k <= $z2; $k++) {
                    $sum += $this->cube[$i][$j][$k];
                }
            }
        }
        return $sum;
    }
}
