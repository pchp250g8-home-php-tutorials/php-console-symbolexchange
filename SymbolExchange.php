<?php
    system("chcp 866 >nul");
    system("cls");
    echo("Input a string\r\n");
    $strLine1 = chop(fgets(STDIN));
    $nLen = strlen($strLine1);
    $strLine2 =  $strLine1[$nLen - 1] . substr($strLine1, 1, $nLen - 2) . $strLine1[0];
    echo("Exchange the first and the last symbol in the string\r\n");
    echo("Source string: " . $strLine1 . "\r\n");
    echo("Destination string: ". $strLine2 . "\r\n");
    fgetc(STDIN);
?>
