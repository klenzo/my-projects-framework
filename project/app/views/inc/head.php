<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= $_PAGE->getPageCharset(); ?>">
    <title><?= $_PAGE->getPageTitle(); ?></title>
    <?= $_PAGE->getPageCss(); ?>
</head>
<body>

<?php if ($_PAGE->getPageShowHeader()) {
    include_once 'header.php';
} ?>