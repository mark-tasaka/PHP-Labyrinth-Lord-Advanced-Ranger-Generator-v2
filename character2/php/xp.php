<?php

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,235";
          break;

        case "2":
            $xpNext = "4,465";
        break;
        
        case "3":
            $xpNext = "8,925";
        break;
        
        case "4":
            $xpNext = "17,851";
        break;
        
        case "5":
            $xpNext = "35,701";
        break;
        
        case "6":
            $xpNext = "71,401";
        break;        

        case "7":
            $xpNext = "135,001";
        break;
                
        case "8":
            $xpNext = "255,001";
        break;
                
        case "9":
            $xpNext = "375,001";
        break;
                
        case "10":
            $xpNext = "495,001";
        break;
                
        case "11":
            $xpNext = "615,001";
        break;
                
        case "12":
            $xpNext = "735,001";
        break;
                
        case "13":
            $xpNext = "855,001";
        break;
                
        case "14":
            $xpNext = "975,001";
        break;
                
        case "15":
            $xpNext = "1,095,001";
        break;
                
        case "16":
            $xpNext = "1,215,001";
        break;
                
        case "17":
            $xpNext = "1,335,001";
        break;
                
        case "18":
            $xpNext = "1,455,001";
        break;
                
        case "19":
            $xpNext = "1,575,001";
        break;
                
        case "20":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>