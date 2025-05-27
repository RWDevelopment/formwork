<?= $this->layout('site') ?>
<main class="container">
    <article>
        <h1><a href="<?= $page->uri() ?>"><?= $this->escape($page->title()) ?></a></h1>
        <?= $this->insert('_tags', ['post' => $page, 'blog' => $page->parent()]) ?>
        <?= $page->content() ?>
    </article>
</main>
