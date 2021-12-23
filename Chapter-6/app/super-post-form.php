<?php
// define the data
$heroes = [
    "a-bomb" => [
        "id" => 1017100,
        "name" => "A-bomb (HAS)",
    ],
    "captain-america" => [
        "id" => 1009220,
        "name" => "Captain America",
    ],
    "black-panther" => [
        "id" => 1009187,
        "name" => "Black Panther",
    ]
];

$selectedHero = [];

//process the post request, if any
if (array_key_exists('hero', $_POST)) {
    if (array_key_exists($_POST['hero'], $heroes)) {
        $heroId = $_POST['hero'];
        $selectedHero = $heroes[$heroId];
    }
}

// continue with the template
?>
<form action="./super-post-form.php" method="post" enctype="application/x-www-formurlencoded">
    <label for="hero_select">
        Select your hero:
    </label>
    <select name="hero" id="hero_select">
        <?php foreach ($heroes as $heroId => $heroData) { ?>
            <option value="<?= $heroId ?>"> <?= $heroData['name'] ?> </option>
        <?php } ?>
    </select>
    <input type="submit" value="Show">
</form>

<div style="background: #eee">
    <p>Selected Hero: </p>
    <?php if ($selectedHero) { ?>
        <h3><?= $selectedHero['name'] ?></h3>
        <h4><?= $selectedHeor['id'] ?></h4>
    <?php } else { ?>
        <p>None. </p>
    <?php } ?>
</div>

<p>The value of $_POST is: </p>
<pre><?= var_export($_POST, true); ?></pre>