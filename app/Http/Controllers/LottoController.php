<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LottoController extends Controller
{
    //

    public function Home()
    {
        return view('LottoHome');
    }

    public function Trekking()
    {
        return view('LottoTrekking');
    }

    public function LottoTrekking()
    {
        $this->Ingave();
        echo '<br>';
        $this->Lotto();
    }

    Private function Ingave()
    {
        $getal1 = $_POST['getal1'];
        $getal2 = $_POST['getal2'];
        $getal3 = $_POST['getal3'];
        $getal4 = $_POST['getal4'];
        $getal5 = $_POST['getal5'];
        $getal6 = $_POST['getal6'];

        echo '<img src="/images/'.$getal1.'.png">';
        echo '<img src="/images/'.$getal2.'.png">';
        echo '<img src="/images/'.$getal3.'.png">';
        echo '<img src="/images/'.$getal4.'.png">';
        echo '<img src="/images/'.$getal5.'.png">';
        echo '<img src="/images/'.$getal6.'.png">';
    }

    private function Lotto()
    {
        $array = array();
        $arrayAantal = 45;

        for ($i = 1; $i <= $arrayAantal; $i++)
        {
            array_push($array, $i);
        }

        $rand_keys = array_rand($array, 6);
        $nr1 = $array[$rand_keys[0]] . "\n";
        $nr2 = $array[$rand_keys[1]] . "\n";
        $nr3 = $array[$rand_keys[2]] . "\n";
        $nr4 = $array[$rand_keys[3]] . "\n";
        $nr5 = $array[$rand_keys[4]] . "\n";
        $nr6 = $array[$rand_keys[5]] . "\n";

        echo '<img src="/images/'.$nr1.'.png">';
        echo '<img src="/images/'.$nr2.'.png">';
        echo '<img src="/images/'.$nr3.'.png">';
        echo '<img src="/images/'.$nr4.'.png">';
        echo '<img src="/images/'.$nr5.'.png">';
        echo '<img src="/images/'.$nr6.'.png">';
    }
}
