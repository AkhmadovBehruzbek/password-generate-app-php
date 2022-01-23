<?php

require_once 'pass-generate.php';
$result = 'Bu yerda parol bor';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $setLength = $_POST['passLength'];

    $result = randomPassword($setLength);
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Generate Password</title>
</head>
<body>
<div class="modal modal-sheet position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSheet">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-6 shadow">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title">Parol generatsiya qilish</h5>
            </div>
            <div class="modal-body py-0">
                <p>Ushbu loyihada siz mukammal parol generatsiya qilishni o'rganishingiz mumkin.</p>
            </div>

            <div class="container">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" style="font-size: 20px" aria-label="Recipient's username" aria-describedby="button-addon2" id="clipboardExample1" value="<?= $result ?>" readonly>
                    <button class="btn btn-info btn-clipboard" type="button" id="button-addon2" data-clipboard-action="copy" data-clipboard-target="#clipboardExample1">Copy</button>
                </div>
            </div>

            <div class="modal-footer flex-column border-top-0">
                <form action="index.php" method="post">
                    <label for="num">Parol necha xonalik bo'lsin</label>
                    <select name="passLength" id="num" class="form-select mt-3">
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="16">16</option>
                        <option value="20">20</option>
                    </select>
                    <button type="submit" class="btn btn-lg btn-primary w-100 mt-3 mb-2">Generatsiya qilish</button>
                </form>


            </div>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script src="main.js"></script>

</body>
</html>