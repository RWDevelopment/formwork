<!DOCTYPE html>
<html lang="<?= $site->languages()->current() ?>">
<head>
    <title><?= $this->escape($page->title()) ?> | <?= $this->escape($site->title()) ?></title>
    <?= $this->insert('_meta') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<?= $this->insert('_menu') ?>
<?= $this->content() ?>
<?= $this->insert('_footer') ?>
</body>
</html>
