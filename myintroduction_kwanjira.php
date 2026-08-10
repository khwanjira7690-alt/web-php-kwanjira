<?php
$name = 'นางสาวขวัญจิรา อินทรพฤกษา';
$department = 'เทคโนโลยีสารสนเทศ';
$student_id = '69319010003';
$age = 21;
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>แนะนำตัว — <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></title>
	<style>
		body{font-family:Helvetica,Arial,sans-serif;background:#f4f6f8;color:#222;padding:2rem}
		.container{max-width:720px;margin:0 auto;background:#fff;padding:1.5rem;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.06)}
		h1{margin-top:0;color:#0b57a4}
		.field{margin:0.5rem 0}
		.label{font-weight:700;margin-right:0.5rem}
	</style>
</head>

<body>
	<div class="container">
		<h1>แนะนำตัว</h1>
		<p class="field"><span class="label">ชื่อ:</span> <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></p>
		<p class="field"><span class="label">แผนก:</span> <?= htmlspecialchars($department, ENT_QUOTES, 'UTF-8') ?></p>
		<p class="field"><span class="label">รหัสนักศึกษา:</span> <?= htmlspecialchars($student_id, ENT_QUOTES, 'UTF-8') ?></p>
		<p class="field"><span class="label">อายุ:</span> <?= (int)$age ?></p>
	</div>
</body>
</html>

