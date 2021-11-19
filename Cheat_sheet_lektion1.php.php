<?php
/* CHEAT SHEET lektion 1:

Hvis local host ikke viser noget:
Husk save og reload siden Windows(Ctrl+S - Ctrl+R), IOS(Cmd+S - Cmd+R)
-------------------------------------------------------------------------

ÅBEN FILEN I INTERNET EXPLOERER MED XAMPP/MAMP

SØRG FOR AT APACHE OG MYSQL ER STARTET

(localhost/fil_navn), (localhost:8888/fil_navn)
-------------------------------------------------------------------------

START I PHP:
<?php
-------------------------------------------------------------------------

SLUT PHP:
?>
-------------------------------------------------------------------------

SKRIV DATATYPER:

int(tal), string(tekst), boolean(true,false), float/double(flere decimaler)[Husk decimaler skrives med "."], Array(lister), Object(Opbevarer data og regler), Null(ingenting)

echo 
EKSEMPEL:
echo "Hello world!" outputter Hello world! i serveren 
-------------------------------------------------------------------------
VARIABLER

starter med $
eksempel $firstname = "navn";

send til navn til server

echo $firstname;

-------------------------------------------------------------------------

ASSIGNMENT
bruges =
-------------------------------------------------------------------------

EKSEMPEL MED VARIABLER, DATATYPER OG ASSIGNMENT

<hr> ----- "html" (horizontal ruler)
<?php
$firstname = "navn";
$lastname = "efternavn";
echo $firstname . " ". $lastname;
?>
-------------------------------------------------------------------------

FALDRGRUPPER

bool:
true= 1
false = 0(ingenting)

-------------------------------------------------------------------------
CONCATINATION EKSEMPEL:
?>
<hr>
<?php
$coolNumbers = [42, 313, 69, 420, 8008, 1337];
echo $coolNumbers[3]
?>

-------------------------------------------------------------------------

PRINT ARRAYS PÅ EN VISUEL MÅDE
?>
<hr>
<pre>
<?php
print_r($coolNumbers);
?>
</pre>
-------------------------------------------------------------------------

ASSOCIATED ARRAYS EKSEMPEL:
key = value
</pre>
<hr>
<?php
$user = [
    "username" => "kjcl",
    "email" => "kjcl@ucl.dk",
    "password" => "1234",
];
?>
<hr>
<pre>
<?php
print_r($coolNumbers);
?>
</pre>
<hr>
-------------------------------------------------------------------------
ARRAY WITHIN ARRAY EKSEMPEL:
<?php
$users =[
    [
        "username" => "kjcl",
        "password" => "hemmeligt",
    ],
    [
        "username" => "jane",
        "password" => "hemmeligt",
    ],
];
?>
<pre>
   <?php
   print_r($users[1]["password"]);
   ?> 
</pre>
-------------------------------------------------------------------------
HTML - HYPERTEXT MARKUP LANGUAGE
markup sprog - bliver brugt til at strukturere websider

skriv html og vælg html:5  =

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vandcykel</title>
</head>
<body>
    
</body>
</html>
-------------------------------------------------------------------------

IF/ELSE/ CONDITIONALS

If fanger conditionals der er sande
Else fanger conditionals der er falske

*/
?> 