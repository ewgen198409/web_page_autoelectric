<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $car = trim($_POST["car"]);
    $review = trim($_POST["review"]);

    if (!empty($name) && !empty($car) && !empty($review)) {
        $date = date("Y-m-d H:i:s");
        $entry = json_encode(["date" => $date, "name" => $name, "car" => $car, "text" => $review]) . "\n";

        file_put_contents("reviews.txt", $entry, FILE_APPEND);
    }
}
?>
