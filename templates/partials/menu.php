<nav class="container">
    <ul>
        <li>
            <a href="<?= $site->uri() ?>"><?= $this->escape($site->title()) ?></a>
        </li>
    </ul>
    <ul>
        <?php foreach ($site->children()->filter('visible') as $item) : ?>
            <li>
                <a class="<?php if ($item->isCurrent()) : ?>active<?php endif; ?>" href="<?= $item->uri() ?>"><?= $this->escape($item->get('menu', $item->title())) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>