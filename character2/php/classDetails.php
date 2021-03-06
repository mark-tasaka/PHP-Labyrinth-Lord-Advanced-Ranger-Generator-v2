<?php

/*Ranger */

function getHitPoints($level, $conMod)
{
    $hitPoints = 0;

    if($level < 10)
    {
        for($i = 0; $i <= $level; ++$i)
        {
            $levelHP = rand(3, 6);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }
    }
    else
    {
        for($i = 0; $i <= 10; ++$i)
        {
            $levelHP = rand(3, 6);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }

        $levelTenPlusHP = ($level - 9) * 2;

        $hitPoints += $levelTenPlusHP;

    }


    return $hitPoints;

}

function getAdvancedHitPoints($level, $conMod)
{
    $hitPoints = 0;

    if($level < 10)
    {
        for($i = 0; $i <= $level; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }
    }
    else
    {
        for($i = 0; $i <= 10; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }

        $levelTenPlusHP = ($level - 9) * 2;

        $hitPoints += $levelTenPlusHP;

    }


    return $hitPoints;

}

function getHD($level)
{
    if($level < 10)
    {
        $hd = $level + 1;
        return $hd;
    }
    else
    {
        return 10;
    }
}

function getHDPlus($level)
{
    if($level < 10)
    {
        return "";
    }
    else
    {
        $plus = ($level - 9) * 2;
        $plusString = strval($plus);
        return "+" . $plusString;
    }
}


function saveBreathAttack($level)
{
    if($level <= 3)
    {
        return 15;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 13;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 9;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 7;
    }
    else if($level >= 13 && $level <= 15)
    {
        return 5;
    }
    else
    {
        return 4;
    }

}


function savePoisonDeath($level)
{
    if($level <= 3)
    {
        return 12;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 10;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 8;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 6;
    }
    else if($level >= 13 && $level <= 18)
    {
        return 4;
    }
    else
    {
        return 3;
    }

}


function savePetrify($level)
{
    if($level <= 3)
    {
        return 14;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 12;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 10;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 8;
    }
    else if($level >= 13 && $level <= 15)
    {
        return 6;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 5;
    }
    else
    {
        return 4;
    }

}


function saveWands($level)
{
    if($level <= 3)
    {
        return 13;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 11;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 9;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 7;
    }
    else if($level >= 13 && $level <= 15)
    {
        return 5;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 4;
    }
    else
    {
        return 3;
    }

}


function saveSpells($level)
{
    if($level <= 3)
    {
        return 16;
    }
    else if($level >= 4 && $level <= 6)
    {
        return 14;
    }
    else if($level >= 7 && $level <= 9)
    {
        return 12;
    }
    else if($level >= 10 && $level <= 12)
    {
        return 10;
    }
    else if($level >= 13 && $level <= 15)
    {
        return 8;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 7;
    }
    else
    {
        return 6;
    }

}

function secondAttack($level)
{
    if($level >= 15 && $level <= 18)
    {
        return "Fighter has 2 attacks per round.";
    }
    else if($level > 18)
    {
        return "Fighter has 3 attacks per round.";
    }
    else
    {
        return "";
    }

}


function strengthModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 to hit, damage & forcing doors";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 to hit, damage & forcing doors";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 to hit, damage & forcing doors";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 to hit, damage & forcing doors";
        }
    else if($abilityScore === 19)
        {
            $desc = "+3 to hit (+4 damage), damage & forcing doors";
        }
    
    return $desc;
}


function dexterityModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "+3 AC; -3 Missile Attack; -2 Optional Initiative";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+2 AC; -2 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 AC; -1 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 AC; +1 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-2 AC; +2 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore === 18)
        {
            $desc = "-3 AC; +3 Missile Attack; +2 Optional Initiative";
        }   
    else if($abilityScore === 19)
        {
            $desc = "-4 AC; +3 Missile Attack; +2 Optional Initiative";
        }
    
    return $desc;
}

function constitutionModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Hit Points per Hit Die; -2 Poison Save adj";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Hit Points per Hit Die; -1 Poison Save adj";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Hit Points per Hit Die";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Hit Points per Hit Die";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Hit Points per Hit Die";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Hit Points per Hit Die";
        }   
    else if($abilityScore === 19)
        {
            $desc = "+4 Hit Points per Hit Die; +1 Poison Save adj";
        }
    
    return $desc;
}


function intelligenceModifierDescription($abilityScore)
{
    $desc = "Able to read and write";
    
    if($abilityScore === 3)
        {
            $desc = "Unable to read or write; broken speech";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "Unable to read or write";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "Partial ability to write";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Languages; Able to read and write";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Languages; Able to read and write";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Languages; Able to read and write";
        }
    
    return $desc;
}


function wisdomModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Saving Throw against all magical effects";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Saving Throw against all magical effects";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Saving Throw against all magical effects";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Saving Throw against all magical effects";
        }   
    else if($abilityScore === 19)
    {
        $desc = "+4 Saving Throw against all magical effects";
    }
    
    return $desc;
}



function charismaModifierDescription($abilityScore)
{
    $desc = "+0 Reaction Ajustment; Max Retainers 4; Retainer Morale 7";
    
    if($abilityScore === 3)
        {
            $desc = "+2 Reaction Ajustment; Max Retainers 1; Retainer Morale 4";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 2; Retainer Morale 5";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 3; Retainer Morale 6";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 5; Retainer Morale 8";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 6; Retainer Morale 9";
        }
    else if($abilityScore === 18)
        {
            $desc = "-2 Reaction Ajustment; Max Retainers 7; Retainer Morale 10";
        }
    
    return $desc;
}


function getThaco($level, $abiltyMod)
{
    if($level == 1 || $level == 2)
    {
        $thaco = 19;
    }
    else if($level == 3)    
    {
        $thaco = 18;
    }
    else if($level == 4)    
    {
        $thaco = 17;
    }
    else if($level == 5)    
    {
        $thaco = 16;
    }
    else if($level == 6)    
    {
        $thaco = 15;
    }
    else if($level == 7 || $level == 8)    
    {
        $thaco = 14;
    }
    else if($level == 9)    
    {
        $thaco = 13;
    }
    else if($level == 10 || $level == 11)    
    {
        $thaco = 12;
    }
    else if($level == 12)    
    {
        $thaco = 11;
    }
    else if($level == 13)    
    {
        $thaco = 10;
    }
    else if($level == 14)    
    {
        $thaco = 9;
    }
    else if($level == 15)    
    {
        $thaco = 8;
    }
    else if($level == 16)    
    {
        $thaco = 7;
    }
    else if($level == 17)    
    {
        $thaco = 6;
    }
    else if($level == 18)    
    {
        $thaco = 5;
    }
    else
    {
        $thaco = 4;
    }

    $thaco -= $abiltyMod;

    return $thaco;
}

function getThacoCheck($score)
{
    if($score <= 2)
    {
        $score = 2;
    }

    return $score;
}

function startingAge($species)
{
    $age = 0;

    if($species == "Human")
    {
        $age += 16;
        $dieRoll = rand(1, 4);
        $age += $dieRoll;
    }

    if($species == "Dwarf")
    {
        $age += 40;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $dieRoll3 = rand(1, 6);
        $dieRoll4 = rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
    }

    if($species == "Elf")
    {
        $age += 125;
        $dieRoll = rand(1, 8);
        $dieRoll2= rand(1, 8);
        $dieRoll3 = rand(1, 8);
        $dieRoll4 = rand(1, 8);
        $dieRoll5 = rand(1, 8);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
        $age += $dieRoll5;
    }

    if($species == "Gnome")
    {
        $age += 60;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $dieRoll3 = rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Halfling")
    {
        $age += 20;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
    }

    if($species == "Half-Elf")
    {
        $age += 20;
        $dieRoll = rand(1, 4);
        $dieRoll2= rand(1, 4);
        $dieRoll3 = rand(1, 4);
        $dieRoll4= rand(1, 4);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
    }

    if($species == "Half-Orc")
    {
        $age += 14;
        $dieRoll = rand(1, 4);
        $age += $dieRoll;
    }

    return $age;

}

function rangerMessage ($level)
{
    $message = "";
    
    if($level >= 1 && $level <= 7)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        ";   
    }
    else if($level == 8)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        *Able to cast Druid Spells.<br/>
        ";   
    }
    else if($level == 9)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        *Able to cast Druid and Magic-User Spells.<br/>
        ";   
    }
    else if($level >= 10)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        *Able to cast Druid and Magic-User Spells.<br/>
        *Able to employ any magical item, excluding scrolls, which confers the
         ability to employ clairaudience, clairvoyance, ESP or telepathy.<br/>
         *Attains 3d6 1st and 2nd level followers from the ranger, cleric, fighter or
         magic-user classes (determined randomly; no more than 2 ranger followers).
        ";   
    }
    
    return $message;
}

function rangerIntelligenceMin($intelligence)
{
    if($intelligence < 12)
    {
        return 12;
    }
    else
    {
        return $intelligence;
    }
}

function rangerWisdomMin($wisdom)
{
    if($wisdom < 12)
    {
        return 12;
    }
    else
    {
        return $wisdom;
    }
}

function rangerConstitutionMin($constitution)
{
    if($constitution < 15)
    {
        return 15;
    }
    else
    {
        return $constitution;
    }
}


function primeReq($strength, $intelligence, $wisdom)
{
    if($strength > 12 && $intelligence > 12 && $wisdom > 12)
    {
        if($strength > 15 && $intelligence > 15 && $wisdom > 15)
        {
            return "+10% Experience Point Adjustment (Prime Requisite)<br/>";
        }
        else
        {
            return "+5% Experience Point Adjustment (Prime Requisite)<br/>";

        }
    }
    else
    {
        return "";
    }
    
}


?>