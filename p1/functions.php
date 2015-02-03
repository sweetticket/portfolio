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
                    );

                    
    function generateResult($keys, $pairs) {
        $index = rand(0, count($keys)-1);
        $k = $keys[$index];
        $v = $pairs[$k];
        return "<div class='result'><h1>$v</h1>
        <a href='img/art/$k-full.jpg' title='Click to see full size'><img src='img/art/$k-full.jpg' alt='result' class='result'></a></div>";  
    };
?>