<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('index.php/project/update') ?>" method="post">
        <input type="hidden" name="id_project" value="<?= $data[0]['id_project'] ?>">
        <input type="hidden" name="id_costumer" value="<?= $_SESSION['id_costumer'] ?>">
        <input type="text" name="nama_project" value="<?= $data[0]['nama_project'] ?>">
        <input type="text" name="deskripsi" value="<?= $data[0]['deskripsi'] ?>">
        <input type="text" name="batas_pengerjaan" value="<?= $data[0]['batas_pengerjaan'] ?>">
        <input type="text" name="budget" value="<?= $data[0]['budget'] ?>">
        <input type="text" name="id_status" value="<?= $data[0]['id_status'] ?>">
        <button type="submit">UPDATE</button>
    </form>
</body>
</html>