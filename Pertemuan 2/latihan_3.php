<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }

        .container {
            display: inline-block;
        }

        .title {
            margin-bottom: 20px;
        }

        .label {
            color: red;
            font-weight: bold;
            margin: 0 60px;
        }

        input, select {
            padding: 5px;
            margin: 5px;
        }

        button {
            padding: 5px 10px;
        }

        .hasil {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="title">Buatlah tampilan dibawah ini</div>

    <form method="POST">
        <div>
            <span class="label">Nilai I</span>
            <span class="label">Nilai II</span>
        </div>

        <div>
            <input type="number" name="nilai1" required>

            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <input type="number" name="nilai2" required>

            <button type="submit" name="hitung">submit</button>
        </div>
    </form>

<?php
if (isset($_POST['hitung'])) {
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];
    $hasil = 0;

    switch ($operator) {
        case '+':
            $hasil = $nilai1 + $nilai2;
            break;
        case '-':
            $hasil = $nilai1 - $nilai2;
            break;
        case '*':
            $hasil = $nilai1 * $nilai2;
            break;
        case '/':
            if ($nilai2 != 0) {
                $hasil = $nilai1 / $nilai2;
            } else {
                echo "<div class='hasil'>Tidak bisa dibagi 0</div>";
                exit;
            }
            break;
    }

    echo "<div class='hasil'>Hasil: $hasil</div>";
}
?>

</div>

</body>
</html>
