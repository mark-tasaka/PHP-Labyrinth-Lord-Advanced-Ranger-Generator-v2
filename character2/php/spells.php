<?php
//Ranger Spells

function druidLevel1Spell ($level)
{
    $spell = "-";
    
    if($level <= 8 && $level >= 9)
    {
        $spell = "1";
    }
    else if($level >=10)
    {
        $spell = "2";
    }
    
    return $spell;
}


function druidLevel2Spell ($level)
{
    $spell = "-";
    
    if($level <= 10 && $level >= 11)
    {
        $spell = "1";
    }
    else if($level >=12)
    {
        $spell = "2";
    }
    
    return $spell;
}



function druidLevel3Spell ($level)
{
    $spell = "-";
    
    if($level == 16)
    {
        $spell = "1";
    }
    else if($level >=17)
    {
        $spell = "2";
    }
    
    return $spell;
}

function magicUserLevel1Spell ($level)
{
    $spell = "-";
    
    if($level <= 9 && $level >= 10)
    {
        $spell = "1";
    }
    else if($level >=11)
    {
        $spell = "2";
    }
    
    return $spell;
}


function magicUserLevel2Spell ($level)
{
    $spell = "-";
    
    if($level <= 13 && $level >= 14)
    {
        $spell = "1";
    }
    else if($level >=15)
    {
        $spell = "2";
    }
    
    return $spell;
}



?>