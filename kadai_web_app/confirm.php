<?php
// セッションを開始
session_start();

// postリクエストから入力データを取得
$name = $_POST['user_name'];
$age = $_POST['user_age'];
$category = $_POST['category'];

// エラーメッセージを格納する配列
$errors = []; // 最初はエラーなし
?>

<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>社員情報</title>
</head>

<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題がなければ「確定」、修正がある場合は「キャンセル」をクリックしてください。</p>

  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>年齢</td>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <td>所属部署</td>
        <td><?php echo $category; ?></td>
    </tr>
    </table>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cansel-btn" onclick="history.back();">キャンセル</button>
  </p>
 

</body>

</html>