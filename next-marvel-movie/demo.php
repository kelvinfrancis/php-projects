<?php
$name = "Kelvin";
$age = 26;
$isDeveloper = true;
$isOld = $age > 40 && !$isDeveloper;

// TE indica el tipo de valor de la variable
var_dump($name);
var_dump($isDeveloper);
var_dump($age);

// define Constant
define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

$output = "Hello $name, with age of $age.";
$output .= " And I'm a developer.";

// MATCH es como el switch pero mas potente
$outputAge = match ($age) {
    $age < 2    => "Eres un bebe, $name",
    $age < 10   => "Eres un niño, $name",
    $age === 18 => 'Un adulto viejo',
    default     => "Hueles a guineo podrido mi loco."
};

/*Arrays */
$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[] = "Java"; // add one item
array_push($bestLanguages, "Ruby", "GO", "C#", "C++"); // add multiple items

// Array tipo Map
$personas = [
    "name" => "kelvin",
    "age" => 26,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "C#"]
]
?>

/**Iterate an Array */
<ul>
    <?php foreach ($bestLanguages as $language) {
        echo "<li>$language</li>";
    }
    ?>
</ul>



<?php
// constante
const LAST_NAME = 'James';
?>


<?php if ($isOld) : ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDeveloper) : ?>
    <h2>No eres viejo, pero eres Dev. Jodido.</h2>
<?php else : ?>
    <h2>Eres joven</h2>
<?php endif; ?>



<img src="LOGO_URL" alt="PHP logo" width="200">

<h1>
    <?= LAST_NAME ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;

    }
</style>