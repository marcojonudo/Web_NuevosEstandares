<nav>
<?php
foreach ($menu_items as $name => $config) :
?>
    <a class="menu-item <?= $config['current']; ?>" href='<?= $config['url']; ?>'>
        <?= $name; ?>
    </a>
<?php
endforeach;
?>
</nav>
