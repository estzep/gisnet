<?php
$icons = [
    ['src' => 'src/assets/img/hero/custom/square-2.svg', 'alt' => 'Square'],
    ['src' => 'src/assets/img/hero/custom/arrows.svg', 'alt' => 'Arrows'],
    ['src' => 'src/assets/img/hero/custom/square-1.svg', 'alt' => 'Square'],
];
?>
<div class="custom-icons">
    <div class="container">
        <div class="content">
            <?php foreach ($icons as $icon): ?>
                <div class="icon">
                    <img src="<?php echo $icon['src']; ?>" alt="<?php echo $icon['alt']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
