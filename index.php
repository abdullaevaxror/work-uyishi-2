<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ish Vaqti Hisoblash</title>
</head>
<body>
    <h2>Hodim Ish Vaqtini Hisoblash</h2>
    <form method="post" action="">
        <label for="start_datetime">Boshlanish vaqti (sana va vaqt):</label>
        <input type="datetime-local" id="start_datetime" name="start_datetime" required><br><br>

        <label for="end_datetime">Tugash vaqti (sana va vaqt):</label>
        <input type="datetime-local" id="end_datetime" name="end_datetime" required><br><br>

        <input type="submit" name="calculate" value="Hisoblash">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculate'])) {
        $boshlanish_vaqti = $_POST['start_datetime'];
        $tugash_vaqti = $_POST['end_datetime'];

        $boshlanish = new DateTime($boshlanish_vaqti);
        $tugash = new DateTime($tugash_vaqti);

        $interval = $boshlanish->diff($tugash);

        echo "<p>Hodim umumiy ishlagan vaqt: " . $interval->format('%d kun %h soat %i daqiqa') . "</p>";
    }
    ?>
</body>
</html>
