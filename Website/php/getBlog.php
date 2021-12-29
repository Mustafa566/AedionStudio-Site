<?php
include('connection.php');

$sql = $conn->prepare("SELECT * FROM blogs ORDER BY id ASC");
$sql->execute();

echo '
    <div class="blogDiv transparant">
        <div class="blogHeader boxShadow transparant">
            <p class="blogTitle transparant">{{ text.blogTxt }}</p>
        </div>
        <div class="blogItems transparant w100">
    ';

while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo '
        <a href="./pages/blog.php?id='. $result['id'] .'">
            <div class="blogItem transparant boxShadow">
                <p class="blogItemHeaderText transparant">'. $result['blogTitle'] .'</p>
            </div>
        </a>
    ';
}

echo '</div>';
echo '</div>';
?>