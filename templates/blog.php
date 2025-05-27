<?= $this->layout('site') ?>
<?php if ($page->content()) : ?>
    <aside class="container">
         <?= $page->content() ?>
    </aside>
<?php endif; ?>
<main class="container">
    <?php foreach ($posts as $post) : ?>
         <article>
            <h1><a href="<?= $post->uri() ?>"><?= $this->escape($post->title()) ?></a></h1>
            <?= $this->insert('_tags', ['post' => $post, 'blog' => $page]) ?>
            <?php if ($post->summary()) : ?>
                <?= $post->summary() ?>
                <a href="<?= $post->uri() ?>" rel="bookmark">Read more &rarr;</a>
            <?php else : ?>
                <?= $post->content() ?>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</main>
<?= $this->insert('_pagination') ?>
