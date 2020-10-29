<?php

namespace App\Libs\Traits;


trait SetSebutan
{
    protected function SetSebutan (int $skor) {
        $sebutan = "";

        // if ($skor == 50 ) {
        //     $sebutan = "Awesome";
        // } elseif ($skor >= 30 && $skor <= 40) {
        //     $sebutan = "Nice";
        // } elseif ($skor <= 30) {
        //     $sebutan = "Oops";
        // } else {
        //     $sebutan = "Fail";
        // }

        if ($skor >= 90 ) {
            $sebutan = "Awesome";
        } elseif ($skor >= 70 && $skor <= 80) {
            $sebutan = "Excellent";
        } elseif ($skor >= 50 && $skor <= 60) {
            $sebutan = "Nice";
        } elseif ($skor <= 40) {
            $sebutan = "Keep Hard Working";
        } else {
            $sebutan = "Oops";
        }

        return $sebutan;
    }
}