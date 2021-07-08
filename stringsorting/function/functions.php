<?php

function ConvertToString($wordarray)
{
        $wordarray = preg_replace("/[^a-zA-Z]/", " ", $wordarray);
        return $wordarray;
        
}

function wordArrayConvert($wordarray)
{
    $wordarray = explode(" ", $wordarray);
    return $wordarray;
}

function test($wordarray)
{
    foreach ($wordarray as $test) {
        if (ctype_alpha($test)) {
           echo "kelime harflerden oluşuyor \n";
        }else {
           echo "<font color = FF0000>Girilen metinin içinde [0-9] arası ifadeler var</font>";
           exit();
        }
     }
}

function replaceTr($text) 
{
    $replace = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
    $replace1 = array('c','c','g','g','i','i','o','o','s','s','u','u',' ');
    $new_text = str_replace($replace,$replace1,$text);
    return $new_text;
} 

function end_letter($x, $y)
{
        
    $x=substr($x , -1);
    $y=substr($y , -1);

    if ($x == $y)
    return 0;
    else if ($x > $y)
        return 1;
    else
        return -1;
}        

function result()
{
    if(isset($_POST['convert'])){
        $wordarray=$_POST['wordarray'];
        //$wordarray = test($wordarray);
        $wordarray = ConvertToString(replaceTr($wordarray)) ;
        $wordarray = wordArrayConvert($wordarray);
        $wordarray = array_filter($wordarray);        
        usort($wordarray, 'end_letter');
        foreach($wordarray as $key => $value)
        {
            echo "$key->$value</br>  ";   
        }
    }
}    
            
        
    