<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2b</title>
</head>
<body>
    <?php for ($i = 1; $i <= 10 ; $i++) : ?>
        <?php for ($r = 1; $r <= $i ; $r++) : ?>
        <?= $r?>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>