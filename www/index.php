<?php
if (!empty($_POST)) {
    $data = $_POST['img'];
    list($type, $data) = explode(';', $data);
    list(, $data) = explode(',', $data);
    $data = base64_decode($data);
    $file_name = 'uploads/'.$_POST['filename'].'.png';
    file_put_contents($file_name, $data);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ß, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <croppa-component></croppa-component>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>