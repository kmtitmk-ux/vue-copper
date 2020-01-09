<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['imgUrl'];
    list($type, $data) = explode(';', $data);
    list(, $data) = explode(',', $data);
    $name = substr(str_shuffle($data), 0, 8);
    file_put_contents('uplodas/' . $name . '.png', base64_decode($data));
    print 1;
} else {
    header('Location: /');
    exit;
}
