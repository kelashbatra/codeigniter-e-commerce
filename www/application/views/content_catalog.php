
<?php foreach ($content as $entry): ?>
<div class="category">
    <div class="category-img">
        <a href="<?=$entry['href'];?>" title="<?=$entry['category'];?>">
        <img src="<?=$entry['img_src'];?>"/>
        </a>
    </div>
    <div class="category-desc">
        <a href="<?=$entry['href'];?>" title="<?=$entry['category'];?>">
        <p><?=$entry['category'];?></p>
        </a>
    </div>
</div>
<?php endforeach; ?>
