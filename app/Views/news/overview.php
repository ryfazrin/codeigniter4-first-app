<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)) : ?>
    
    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div>
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug']) ?>">View aritcle</a></p>

    <?php endforeach; ?>

<?php else :  ?>

    <h3>No News</h3>

    <p>unable to find any news for you.</p>

<?php endif ?>