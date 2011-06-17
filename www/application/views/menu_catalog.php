<ul class="menu-ul">
    <?php foreach ($menu as $entry): ?>
    <li class="menu-li">
        <a href="<?=$entry['href'];?>"><?=$entry['category'];?></a>
    </li>
    <?php endforeach; ?>
</ul>