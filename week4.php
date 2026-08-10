<?php
$tableResult = "";
$sumResult = "";

if (isset($_POST['show_table'])) {
    $number = (int)$_POST['number'];

    $tableResult .= "<div class='table-title'>✨ สูตรคูณแม่ $number</div>";
    $tableResult .= "<div class='result-box'>";

    for ($i = 1; $i <= 12; $i++) {
        $result = $number * $i;
        $tableResult .= "<div class='table-item'><span>$number × $i</span> <strong>$result</strong></div>";
    }

    $tableResult .= "</div>";
}

if (isset($_POST['sum_numbers'])) {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $sum = $num1 + $num2;

    $sumResult = "<div class='result-box sum-result'><span>ผลลัพธ์การบวก:</span> <strong>$num1 + $num2 = $sum</strong></div>";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neumorphism PHP Workshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Prompt', sans-serif;
        }

        body {
            background: #e4ebf5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
        }

        .container {
            width: 100%;
            max-width: 850px;
        }

        .title {
            text-align: center;
            color: #334e68;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 35px;
            letter-spacing: 1px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .card {
            background: #e4ebf5;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 9px 9px 16px rgb(163, 177, 198, 0.6), 
                       -9px -9px 16px rgba(255, 255, 255, 0.5);
        }

        h2 {
            color: #334e68;
            font-size: 1.15rem;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .input-box {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 14px 18px;
            background: #e4ebf5;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            color: #334e68;
            box-shadow: inset 4px 4px 8px rgb(163, 177, 198, 0.5), 
                        inset -4px -4px 8px rgba(255, 255, 255, 0.8);
            outline: none;
            transition: all 0.2s ease;
        }

        input:focus {
            box-shadow: inset 6px 6px 10px rgb(163, 177, 198, 0.7), 
                        inset -6px -6px 10px rgba(255, 255, 255, 0.9);
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #4f46e5;
            color: white;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            box-shadow: 4px 4px 10px rgba(79, 70, 229, 0.3), 
                       -2px -2px 6px rgba(255, 255, 255, 0.5);
            transition: all 0.2s ease;
        }

        button:hover {
            background: #4338ca;
            box-shadow: 2px 2px 5px rgba(79, 70, 229, 0.3);
        }

        button:active {
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .result-box {
            margin-top: 20px;
            padding: 15px;
            background: #e4ebf5;
            border-radius: 15px;
            box-shadow: inset 3px 3px 6px rgb(163, 177, 198, 0.5), 
                        inset -3px -3px 6px rgba(255, 255, 255, 0.8);
            max-height: 250px;
            overflow-y: auto;
        }

        .table-title {
            color: #4f46e5;
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .table-item {
            display: flex;
            justify-content: space-between;
            padding: 6px 10px;
            font-size: 14px;
            color: #486581;
            border-bottom: 1px solid rgba(163, 177, 198, 0.2);
        }

        .table-item:last-child {
            border-bottom: none;
        }

        .table-item strong {
            color: #4f46e5;
        }

        .sum-result {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #486581;
            font-size: 15px;
        }

        .sum-result strong {
            color: #059669;
        }

        @media (max-width: 768px) {
            .wrapper {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">✨ Soft UI Workshop</h1>

    <div class="wrapper">
        <!-- การ์ดที่ 1: สูตรคูณ -->
        <div class="card">
            <h2>📌 โปรแกรมสูตรคูณ</h2>
            <form method="post">
                <div class="input-box">
                    <input type="number" name="number" placeholder="กรอกแม่สูตรคูณ (เช่น 2)" required>
                </div>
                <button type="submit" name="show_table">แสดงสูตรคูณ</button>
            </form>
            <?php echo $tableResult; ?>
        </div>

        <!-- การ์ดที่ 2: บวกเลข -->
        <div class="card">
            <h2>➕ โปรแกรมบวกเลข</h2>
            <form method="post">
                <div class="input-box">
                    <input type="number" name="num1" placeholder="ตัวเลขที่ 1" required>
                </div>
                <div class="input-box">
                    <input type="number" name="num2" placeholder="ตัวเลขที่ 2" required>
                </div>
                <button type="submit" name="sum_numbers">คำนวณผลบวก</button>
            </form>
            <?php echo $sumResult; ?>
        </div>
    </div>
</div>

</body>
</html>
