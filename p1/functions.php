<?php

    $allkeys = array('oncanvas1',
                    'oncanvas2',
                    'oncanvas3',
                    'oncanvas4',
                    'oncanvas5',
                    'oncanvas6',
                    'oncanvas7',
                    'oncanvas8',
                    'oncanvas9',
                    'oncanvas10',
                    'oncanvas11',
                    'oncanvas12',
                    'oncanvas13',
                    'draw1',
                    'draw2',
                    'draw3',
                    'draw4',
                    'draw5',
                    'draw6',
                    'draw7',
                    'draw8',
                    'draw9',
                    'contra1',
                    'contra2',
                    'contra3',
                    'contra4',
                    'contra5',
                    'contra6',
                    'contra7',
                    'contra8',
                    'contra9',
                    'contra10',
                    'contra11',
                    'contra12',
                    'sketch1',
                    'sketch2',
                    'sketch3',
                    'sketch4',
                    'sketch5',
                    'other1',
                    'other2',
                    'other3',
                    'other4',
                    'other5',
                    'other6',
                    );
    
    $allpairs = array('oncanvas1'=>'Pulse',
                    'oncanvas2' => 'Fruit of the Universe',
                    'oncanvas3'=>'Scarlet',
                    'oncanvas4'=>'Shoes',
                    'oncanvas5'=>'Fear',
                    'oncanvas6'=>'Happiness',
                    'oncanvas7'=>'Geo',
                    'oncanvas8'=>'Home',
                    'oncanvas9'=>'Mother',
                    'oncanvas10'=>'Still Life',
                    'oncanvas11'=>'Spoon',
                    'oncanvas12'=>'Pierrot',
                    'oncanvas13'=>'Behemoth',
                    'draw1'=>'Nap',
                    'draw2'=>'Organic',
                    'draw3'=>'Crash',
                    'draw4'=>'Father Cooking',
                    'draw5'=>'Feet',
                    'draw6'=>'Flower Girl',
                    'draw7'=>'Father',
                    'draw8'=>'Mannequins',
                    'draw9'=>'Watcher',
                    'contra1'=>'Tree House',
                    'contra2'=>'Psychedelia',
                    'contra3'=>'Hive',
                    'contra4'=>'Snails',
                    'contra5'=>'Intertwined',
                    'contra6'=>'Mountains',
                    'contra7'=>'Little Hands',
                    'contra8'=>'Reef',
                    'contra9'=>'Growth',
                    'contra10'=>'Ram Pond',
                    'contra11'=>'Eyes',
                    'contra12'=>'Building Blocks',
                    'sketch1'=>'Twins',
                    'sketch2'=>'Lungs',
                    'sketch3'=>'Hanbok',
                    'sketch4'=>'Offering',
                    'sketch5'=>'Tal',
                    'other1'=>'Friends',
                    'other2'=>'Bear 1',
                    'other3'=>'Bear2',
                    'other4'=>'Apocalypse1',
                    'other5'=>'Apocalypse2',
                    'other6'=>'Apocalypse3',
                    );
    
                    
    function generateResult($keys, $pairs) {
        $index = rand(0, count($keys)-1);
        $k = $keys[$index];
        $v = $pairs[$k];
        return "<div class='result'><h1>$v</h1>
        <a href='img/art/$k-full.jpg' title='Click to see full size'><img src='img/art/$k-full.jpg' alt='result' class='result'></a></div>";  
    };
    
    function generateSamples($arr){
            $oncanvasKeys = array('oncanvas1',
                    'oncanvas2',
                    'oncanvas3',
                    'oncanvas4',
                    'oncanvas5',
                    'oncanvas6',
                    'oncanvas7',
                    'oncanvas8',
                    'oncanvas9',
                    'oncanvas10',
                    'oncanvas11',
                    'oncanvas12',
                    'oncanvas13');
    
    $oncanvasPairs = array('oncanvas1'=>'Pulse',
                    'oncanvas2' => 'Fruit of the Universe',
                    'oncanvas3'=>'Scarlet',
                    'oncanvas4'=>'Shoes',
                    'oncanvas5'=>'Fear',
                    'oncanvas6'=>'Happiness',
                    'oncanvas7'=>'Geo',
                    'oncanvas8'=>'Home',
                    'oncanvas9'=>'Mother',
                    'oncanvas10'=>'Still Life',
                    'oncanvas11'=>'Spoon',
                    'oncanvas12'=>'Pierrot',
                    'oncanvas13'=>'Behemoth',);
    
    $drawKeys = array('draw1',
                    'draw2',
                    'draw3',
                    'draw4',
                    'draw5',
                    'draw6',
                    'draw7',
                    'draw8',
                    'draw9',);
    
    $drawPairs = array('draw1'=>'Nap',
                    'draw2'=>'Organic',
                    'draw3'=>'Crash',
                    'draw4'=>'Father Cooking',
                    'draw5'=>'Feet',
                    'draw6'=>'Flower Girl',
                    'draw7'=>'Father',
                    'draw8'=>'Mannequins',
                    'draw9'=>'Watcher',);
    
    $contraKeys = array('contra1',
                    'contra2',
                    'contra3',
                    'contra4',
                    'contra5',
                    'contra6',
                    'contra7',
                    'contra8',
                    'contra9',
                    'contra10',
                    'contra11',
                    'contra12',);
    
    $contraPairs = array('contra1'=>'Tree House',
                    'contra2'=>'Psychedelia',
                    'contra3'=>'Hive',
                    'contra4'=>'Snails',
                    'contra5'=>'Intertwined',
                    'contra6'=>'Mountains',
                    'contra7'=>'Little Hands',
                    'contra8'=>'Reef',
                    'contra9'=>'Growth',
                    'contra10'=>'Ram Pond',
                    'contra11'=>'Eyes',
                    'contra12'=>'Building Blocks',);
    
    $sketchKeys = array(
                    'sketch1',
                    'sketch2',
                    'sketch3',
                    'sketch4',
                    'sketch5',);
    
    $sketchPairs = array(
                    'sketch1'=>'Twins',
                    'sketch2'=>'Lungs',
                    'sketch3'=>'Hanbok',
                    'sketch4'=>'Offering',
                    'sketch5'=>'Tal',
                    );
    
    $otherKeys = array('other1',
                    'other2',
                    'other3',
                    'other4',
                    'other5',
                    'other6',);
    
    $otherPairs  = array('other1'=>'Friends',
                    'other2'=>'Bear 1',
                    'other3'=>'Bear2',
                    'other4'=>'Apocalypse1',
                    'other5'=>'Apocalypse2',
                    'other6'=>'Apocalypse3',);
        
        $str = "";
        foreach ($arr as $cat_item){
            switch($cat_item){
                case 'on canvas':
                    $str .= "<div id=\"single-sample\">" . generateResult($oncanvasKeys, $oncanvasPairs) . "</div>";
                    break;
                case 'drawings':
                    $str .= "<div id=\"single-sample\">" . generateResult($drawKeys, $drawPairs) . "</div>";
                    break;
                case 'contra naturam':
                    $str .= "<div id=\"single-sample\">" . generateResult($contraKeys, $contraPairs) . "</div>";
                    break;
                case 'sketch book':
                    $str .= "<div id=\"single-sample\">" . generateResult($sketchKeys, $sketchPairs) . "</div>";
                    break;
                case 'other projects':
                    $str .= "<div id=\"single-sample\">" . generateResult($otherKeys, $otherPairs) . "</div>";
                    break;
            };
        };
        return $str;
    };
    
    
    
?>