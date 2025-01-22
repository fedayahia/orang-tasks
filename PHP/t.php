<?php 
function renderStars($rating) {
    $starsHTML = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $starsHTML .= '<i class="fa fa-star text-warning"></i>'; // Full star
        } else {
            $starsHTML .= '<i class="fa fa-star text-muted"></i>'; // Empty star
        }
    }
    return $starsHTML;
}
?>

<div class="card-body" style="display: grid; grid-template-rows: repeat(2, 1fr); grid-template-columns: repeat(3, 1fr); gap: 16px; margin: 10px;">
    <?php foreach ($phones as $item): ?>
        <div class="card" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 16px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <img src="<?= htmlspecialchars($item['img_url']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" style="width: 200px; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 8px;">
            <h3 style="font-size: 18px; margin-bottom: 4px;"><?= htmlspecialchars($item['name']); ?></h3>
            <h4 style="font-size: 16px; color: #555;"><?= htmlspecialchars($item['brand']); ?></h4>
            <h3 style="font-size: 18px; color: #007bff;"><?= htmlspecialchars($item['price']); ?></h3>
            <div class="stars" style="margin: 8px 0;">
                <?= renderStars($item['rate']); ?>
            </div>
            <a href="#" class="btn btn-primary" style="width: 100%; max-width: 200px;">Go somewhere</a>
        </div>
    <?php endforeach; ?>
</div>
