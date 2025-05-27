<!DOCTYPE html>
<html lang="<?= $site->languages()->current() ?>">
<head>
    <title><?= $this->escape($page->title()) ?> | <?= $this->escape($site->title()) ?></title>
    <?= $this->insert('_meta') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <script src="<?= $this->assets()->uri('js/script.min.js') ?>"></script>
</head>
<body>
<?= $this->insert('_menu') ?>
<?= $this->content() ?>
    <footer>
        <div class="container small">
            &copy; 2017-2020 &mdash; Made with <a href="https://github.com/getformwork/formwork">Formwork</a>
        </div>
    </footer>
</body>
</html>
