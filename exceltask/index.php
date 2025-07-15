<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<div class="container mt-2">

    <form action="index.php" method="post">
        <input type="file" name="file" placeholder="Добавьте файл" class="form-control mb-2">
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>
