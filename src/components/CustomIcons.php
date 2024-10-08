<?php
$icons = [
    ['src' => 'src/assets/img/hero/custom/square-2.svg', 'alt' => 'Square'],
    ['src' => 'src/assets/img/hero/custom/arrows.svg', 'alt' => 'Arrows'],
    ['src' => 'src/assets/img/hero/custom/square-1.svg', 'alt' => 'Square'],
    ['src' => 'src/assets/img/hero/custom/database.svg', 'alt' => 'Database'],
    ['src' => 'src/assets/img/hero/custom/gear.svg', 'alt' => 'Gear'],
    ['src' => 'src/assets/img/hero/custom/interface.svg', 'alt' => 'Interface'],
    ['src' => 'src/assets/img/hero/custom/circle.svg', 'alt' => 'Circle'],
    ['src' => 'src/assets/img/hero/custom/user.svg', 'alt' => 'User'],
];
?>
<div class="custom-icons">
    <div class="container">
        <div class="grid">
            <?php foreach ($icons as $icon): ?>
                <div class="icon">
                    <img src="<?php echo $icon['src']; ?>" alt="<?php echo $icon['alt']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
