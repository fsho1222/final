<!-- 241 -->

<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1517444-final';
    const USER = 'LAA1517444';
    const PASS = 'Pass1222';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<table>
<tr><th>ブランドID</th><th>ブランド名</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
	foreach ($pdo->query('select * from bland') as $row) {
        echo '<tr>';
		echo '<form action="update-output.php" method="post">';
		echo '<td>','<input type = "hidden" name = "id" value = "', $row['bland_id'], '">','</td>';
		echo '<td>','<div class="td0">', $row['bland_id'], '</div>','</td>';
		echo '<div class="td1">';
		echo '<td>','<input type = "text" name = "name" value = "', $row['bland_name'], '">','</td>';
		echo '</div>';
		echo '<div class="td1">';
		echo '</div>';
		echo '<td>','<div class="td2"><input type = "submit" value = "更新"></div>','</td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<button onclick="location.href='index.html'">戻る</button>