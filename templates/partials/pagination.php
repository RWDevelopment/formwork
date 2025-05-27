<?php if ($pagination->hasPages()): ?>
<nav class="pagination">
    <?php if ($pagination->hasPreviousPage()): ?>
    <a href="<?= $pagination->previousPageUri() ?>" rel="prev">&larr; Previous</a>
    <?php else: ?>
    <a>&larr; Previous</a>
    <?php endif; ?>
    <?php if ($pagination->hasNextPage()): ?>
    <a href="<?= $pagination->nextPageUri() ?>" rel="next">Next &rarr;</a>
    <?php else: ?>
    <a>Next &rarr;</a>
    <?php endif; ?>
</nav>
<?php endif; ?>
