<?php
$reviews = file("reviews.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$reviews = array_slice(array_reverse($reviews), 0, 50); // Показываем последние 50

foreach ($reviews as $review) {
    $data = json_decode($review, true);
    echo "<div style='border-bottom: 1px solid white; padding: 5px;'>
            <small style='color: gray;'>{$data['date']} | <strong>{$data['name']}</strong> ({$data['car']})</small>
            <p>{$data['text']}</p>
          </div>";
}
?>
