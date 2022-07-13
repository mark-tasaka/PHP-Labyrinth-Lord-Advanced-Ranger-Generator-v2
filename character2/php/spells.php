<?php
//Paladin Spells

function spellsLevel1($level)
{
    if($level == 9)
    {
        return "1";
    }
    else if($level >= 10 && $level <= 14)
    {
        return "2";
    }
    else if($level >= 15)
    {
        return "3";
    }
    else
    {
        return "-";
    }

}


function spellsLevel2($level)
{
    if($level == 11)
    {
        return "1";
    }
    else if($level >= 12 && $level <= 15)
    {
        return "2";
    }
    else if($level >= 16)
    {
        return "3";
    }
    else
    {
        return "-";
    }

}


function spellsLevel3($level)
{
    
    if($level >= 13 && $level <= 16)
    {
        return "1";
    }
    else if($level == 17)
    {
        return "2";
    }
    else if($level >= 18)
    {
        return "3";
    }
    else
    {
        return "-";
    }

}



function spellsLevel4($level)
{
    
    if($level >= 15 && $level <= 18)
    {
        return "1";
    }
    else if($level == 19)
    {
        return "2";
    }
    else if($level >= 20)
    {
        return "3";
    }
    else
    {
        return "-";
    }

}


?>