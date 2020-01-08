<?php
$a = readline ("Enter votre Age ");

if(($a>=3) and ($a<=12))
{
    echo(" a $a ans : vous êtes un Enfants");
}
elseif(($a>=13) and ($a<=17))
{
    echo(" a $a ans : vous êtes Mineur");
}
elseif(($a>=18) and ($a<=54))
{
    echo(" a $a ans : vous êtes Majeur");
}
elseif(($a>=55))
{
    echo(" a $a ans : vous êtes Agée");
}
else 
{
    echo(" a $a ans : vous êtes un Bébé");
}