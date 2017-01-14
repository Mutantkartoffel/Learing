<?php //phpinfo(); //INFO OM CONFIG FIL

//variabler teskt og tal

//	OPG 1 ------------------------------------
/*
$firstname = 'Christian';
$number = 19;
*/

//echo skrive alt ud og print skriver kun en value ud
/*
echo $firstname; 
print $number
*/

//en anden måde på echo er  putte 2 variabler i
/*
echo $firstname, ' ' , $number
*/

// OPG 1 END ------------------------------------

//OPG 2 -----------------------------------------

//man kan bryde ud af kode med \ 
/*
$hej = 'Jeg heder \'Christian';
echo $hej
*/ 

//men en bedre måde at gøre det på er
/*
$hej = "Jeg hedder 'Christian"
echo $hej
*/

//hvis Man vi bruge variable inde i " " så skal man break ud

//OPG 2 END ---------------------------------------

//OPG 3 -------------------------------------------
/*
$firstname = "Christian";
$middelname = "Hee";
$lastname = "Laursen";
$age = "19";
$color = "rød";
$newLines = "\r\n\r\n";


//--- metode 1
$fullname = $firstname . ' ' . $middelname . ' ' . $lastname;

//--- metode 2
$fullname = "$firstname $middelname $lastname";
$other_info = "$age $color";
//--- metode 1 og 2 END

echo $fullname;
echo $other_info;


$msg = "NAME: $fullname $newLines";
$msg .="OTHER INFO: $other_info";
echo "$msg";
*/

//OPG 4 ------------------------------------------
//dette er måde hvor man bruger heredoc som giver en fuck og gøre alt hvad man siger meget smart hvis man skal lave mange lange avancet string med text flere variabler og andet
/*
$firstname = "Christian";
$middelname = "Hee";
$lastname = "Laursen";
$age = "19";
$color = "rød";


$heredoc = <<< EOT
Jeg hedder $firstname $middelname $lastname og det her er "PHP kode '" men min alder er $age og jeg elsker faven $color''''
EOT;

echo "$heredoc";
*/

//OPG 5 -------------------------------------------

?>