<?php

session_start();

require_once 'lib/db_connect.php';

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<? if (!empty($_SESSION['message'])) echo $_SESSION['message'];?>

<table class='table'>
    <thead>
    <th>ID</th>
    <th>Заголовок</th>
    <th>ОПИСАНИЕ</th>
    <th>Ссылка</th>
    <th>удалить</th>
    <th>Редактировать</th>
    </thead>
    <tbody>
    <?php
        $query = mysqli_query($connect, "SELECT * FROM posts");
        while ($post = mysqli_fetch_object($query)) {
//          echo '-----------------.<br>';
          echo '<tr>';
//          var_dump($post);
            echo '<td>', $post->id, '</td>';
            echo '<td>', $post->title, '</td>';
            echo '<td>', $post->description, '</td>';
            echo '<td>', "<a href='/show.php?id'=$post->id'>Читать...</a>",'</td>';
            echo '<td>', "<a href='/delete.php?id'=$post->id'>Удалить...</a>",'</td>';
            echo '<td>', "<a href='/edit_post.php?id'=$post->id'>Редактировать... </a>",'</td>';

            echo '</tr>';
        }
    ?>

    </tbody>

</table>
<a class="btn btn-primary" href="/new_post_old.php">Новый пост</a>
</body>
</html>







