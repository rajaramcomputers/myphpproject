<ul>
<?php
 $db = new mysqli(
    'localhost',
    'root',
    '',
    'php');
$SQL = 'SELECT * from users';
$result = $db->query($SQL);

foreach ($result as $row){
    printf(
        '<li><span style="color: %s">%s (%s)</span>
        <a href="update.php?id=%s">update</a></li>',
        htmlspecialchars($row['color'], ENT_QUOTES),
        htmlspecialchars($row['name'], ENT_QUOTES),
        htmlspecialchars($row['gender'], ENT_QUOTES),
        htmlspecialchars($row['id'], ENT_QUOTES));
}
$db->close();
?>
</ul>