<?php if ($post->has('tags')) : ?>
    <div>
        <?php foreach ($post->tags() as $tag) : ?>
            <a rel="tag" href="<?= $blog->uri('/tag/' . $this->slug($tag) . '/') ?>"><?= $this->escape($tag) ?></a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>