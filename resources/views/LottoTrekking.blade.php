@extends('layouts.app')

@section('content')
<h1>Trekking</h1>

    <div class="midden">
        <form action="Trekking" method="GET">
            {{ csrf_field() }}
        <div>
            <h4 for="">Getal 1</h4>
            <input name="getal1" type="number" min="1" max="45">
        </div>
            <br>
        <div>
            <h4 for="">Getal 2</h4>
            <input name="getal2" type="number" maxlength="2">
        </div>
            <br>
        <div>
            <h4 for="">Getal 3</h4>
            <input name="getal3" type="number" maxlength="2">
        </div>
            <br>
        <div>
            <h4 for="">Getal 4</h4>
            <input name="getal4" type="number" maxlength="2">
        </div>
            <br>
        <div>
            <h4 for="">Getal 5</h4>
            <input name="getal5" type="number" maxlength="2">
        </div>
            <br>
        <div>
            <h4 for="">Getal 6</h4>
            <input name="getal6" type="number" maxlength="2">
        </div>
            <br><br>
            <input type="submit" value="Nieuwe trekking" onclick="window.location.reload()">
        </form>

        <div>
            <?php
                //Check if the form is submitted
                if (isset( $_GET['submit'] ))
                { // retrieve the form data by using the element's name attributes value as key
                $getal1 = $_GET['getal1'];
                $getal2 = $_GET['getal2'];
                $getal3 = $_GET['getal3'];
                $getal4 = $_GET['getal4'];
                $getal5 = $_GET['getal5'];
                $getal6 = $_GET['getal6'];

                echo '<img src="/images/'.$getal1.'.png">';
                echo '<img src="/images/'.$getal2.'.png">';
                echo '<img src="/images/'.$getal3.'.png">';
                echo '<img src="/images/'.$getal4.'.png">';
                echo '<img src="/images/'.$getal5.'.png">';
                echo '<img src="/images/'.$getal6.'.png">';

                    if ($getal1 == $nr1 || $getal1 == $nr2 || $getal1 == $nr3 || $getal1 == $nr4 || $getal1 == $nr5 || $getal1 == $nr6)
                    {
                        echo '<p>Goed gedaan Getal'.$getal1.'was juist</p>';
                    }
                    else
                    {
                        echo '<p>Volgende keer beter</p>';
                    }
                }

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
            ?>
        </div>
    </div>
@endsection
