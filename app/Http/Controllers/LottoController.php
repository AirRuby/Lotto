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

    public function LottoTrekking(Request $request)
    {
        $ar_validatie = array
        (
            'getal0' => 'required|integer|numeric|max:45|min:1',
            'getal1' => 'required|integer|numeric|max:45|min:1',
            'getal2' => 'required|integer|numeric|max:45|min:1',
            'getal3' => 'required|integer|numeric|max:45|min:1',
            'getal4' => 'required|integer|numeric|max:45|min:1',
            'getal5' => 'required|integer|numeric|max:45|min:1'
        );
        $this->validate($request, $ar_validatie);

        $this->Lotto();

    }

    private function Lotto()
    {
        $IngegevenGetal = array();

        echo'<h4>Onderstaand zijn de door u ingevulde getallen</h4>';

        for($i = 0; $i <= 5; $i++)
        {
            $IngegevenGetal[$i] = $_POST['getal'.$i];
            echo '<img src="/images/'.$IngegevenGetal[$i].'.png">';
        }

        echo '<br>';

        echo'<h4>Onderstaand zijn de winnende lotto getallen</h4>';

        $randomgetal = array();
        $array = array();
        for ($i = 1; $i <= 45; $i++)
        {
            array_push($array, $i);
        }

        $rand_keys = array_rand($array, 6);

        for($j = 0; $j <= 5; $j++)
        {
            $randomgetal[$j] = $array[$rand_keys[$j]];
            echo '<img src="/images/'.$randomgetal[$j].'.png">';
        }

        echo '<br>';

        echo'<h4>Onderstaand zijn de overeenkomende lotto getallen</h4>';

        $x = 0;

        foreach ($IngegevenGetal as $ingegeven)
        {
            foreach ($randomgetal as $random)
            {

                if($random == $ingegeven)
                {
                    $x = 1;
                    //$ar_Correct[] = $ingegeven;
                    echo'<h4> Proficiat Getal '.'<img src="/images/'.$ingegeven.'.png">'.' was juist</h4>';
                }
            }
        }

        if($x == 0)
        {
            echo'<h4>Geen overeenkomende lotto cijfers</h4>';
        }


    }
}
