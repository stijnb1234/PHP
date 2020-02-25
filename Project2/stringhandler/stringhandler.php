<?php
//String1 & string2 zijn de inputs
$string1 = "";
$string2 = "";
//String3 = string1 + string2
$string3 = "";

$string1SpacePos = 0;
$string1Apen = 0;
$string1Punt = 0;
$string2Trimmed = "";
$string3Lenght = "";
$string3HoofdLetter = "";
$isMail = false;

if (isset($_POST['submit'])) {
    $string1 = $_POST['input1'];
    $string2 = $_POST['input2'];

    $isMail = filter_var($string1, FILTER_VALIDATE_EMAIL);

    if (strpos($string1, 'PHP') !== false) {
        $string1 = str_replace('PHP', 'NodeJS', $string1);
    }

    if (strpos($string2, 'PHP') !== false) {
        $string2 = str_replace('PHP', 'NodeJS', $string2);
    }

    $string3 = $string1 . " " . $string2;
    $string3Lenght = strlen($string3);

    if (strpos($string1, " ") == false) {
        $string1SpacePos = "Niet gevonden.";
    } else {
        $string1SpacePos = strpos($string1, " ") + 1;
    }

    if (strpos($string1, "@") == false) {
        $string1Apen = "Niet gevonden.";
    } else {
        $string1Apen = strpos($string1, "@") + 1;
    }

    if (strpos($string1, ".") == false) {
        $string1Punt = "Niet gevonden.";
    } else {
        $string1Punt = strpos($string1, ".") + 1;
    }

    $string3HoofdLetter = ucfirst($string3);
    $string3ALLES = strtoupper($string3);
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Scripting MD1A MD1B">
    <meta name="author" content="Ma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>PHP String handler opdracht</title>
</head>

<body>
<img src="https://www.ma-web.nl/static/vector/Logo_blok.svg" alt="logo" width="30">
<div class="wrapper">
    <form method="post" action="./stringhandler.php">
        <fieldset>
            <legend>Stringhandler basis</legend>
            <input type="text" name="input1" placeholder="string 1" value="<?php echo $string1; ?>">
            <br/>
            <input type="text" name="input2" placeholder="string 2" value="<?php echo $string2; ?>">
            <input type="submit" id="submit" name="submit" value="submit">
        </fieldset>
        <hr/>
        <ul>
            <li>String 1 getrimd trim():
                <?php echo trim($string1, ""); ?>
            </li>
            <li>String 2 getrimd trim():
                <?php echo trim($string2, ""); ?>
            </li>
            <li>String 3 is de concatenation van string 1 en string 2:
                <?php echo $string3; ?>
            </li>
            <li>De lengte van string 3 is:
                <?php echo $string3Lenght; ?> characters
            </li>
            <li>Zoeken naar spaties. Er zit een spatie op positie
                <?php echo $string1SpacePos; ?>
            </li>
            <li>Zoeken naar @. Er zit een @ op positie
                <?php echo $string1Apen; ?>
            </li>
            <li>Zoeken naar "." . Er zit een "." op positie
                <?php echo $string1Punt; ?>
            </li>
            <li>Zoek naar substring <strong>"PHP"</strong> vervang dit door <strong>"NodeJS"</strong></li>
            <li>Wijzig de eerste letter van string 3 naar hoofdletter:
                <?php echo $string3HoofdLetter; ?>
            </li>
            <li>Alles in hoofdletters:
                <?php echo $string3ALLES; ?>
            </li>
            <li> string 1 is mail?
                <?php echo $isMail; ?>
            </li>
        </ul>
        <hr/>
        <ul>
            <li>Opdracht:<br/>
                Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander</a></li>
            <li>Hoe moet jij inleveren?:
                <br/> 1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud
                <br/> 2) Link naar jouw code bij GITHUB</li>
            <li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
            <li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
        </ul>
    </form>
</div>
</body>