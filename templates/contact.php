<?= $this->layout('site') ?>
<main class="container">
    <article>
        <?= $page->content() ?>
        <?= $this->insert('_contact-form') ?>
    </article>
</main>