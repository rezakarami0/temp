<?php
$errors = [];
$book_name = $_POST['book_name'] ?? '';
$author = $_POST['author'] ?? '';
$rating = $_POST['rating'] ?? '';
$comment = $_POST['comment'] ?? '';

if (empty($book_name)) {
    $errors[] = "نام کتاب نمی‌تواند خالی باشد.";
}

if (empty($author)) {
    $errors[] = "نام نویسنده نمی‌تواند خالی باشد.";
}

if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
    $errors[] = "امتیاز باید بین ۱ تا ۵ باشد.";
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<p class='error'>$error</p>";
    }
} else {
       echo "<h2>اطلاعات کتاب</h2>";
    echo "<table border='1'>";
    echo "<tr><th>نام کتاب</th><th>نویسنده</th><th>امتیاز</th><th>نظر کاربر</th></tr>";
    echo "<tr>";
    echo "<td>" . htmlspecialchars($book_name) . "</td>";
    echo "<td>" . htmlspecialchars($author) . "</td>";
    echo "<td>" . htmlspecialchars($rating) . "</td>";
    echo "<td>" . htmlspecialchars($comment) . "</td>";
    echo "</tr>";
    echo "</table>";
}
?>