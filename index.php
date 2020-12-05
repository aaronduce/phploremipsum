<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$lorem = $faker->paragraphs($nb = (rand(6, 16)), $asText = false);

$loremipsum = '';

foreach ($lorem as &$ipsum) {
    $loremipsum = $loremipsum . '<p>' . $ipsum . '</p>';
}

unset($ipsum);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phploremipsum</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>lorem ipsum</h1>

    <!-- don't need paragraphs as added by PHP -->
    <?php echo $loremipsum; ?>

    <?php require 'footer.php'; ?>
</body>
</html>