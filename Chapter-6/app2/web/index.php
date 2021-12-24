<?php
require_once __DIR__ . '/../src/components/Template.php';
$mainTemplate = new \Components\Template('main');

$templateData = [
    'title' => 'My main template',
];

echo $mainTemplate->render($templateData);
