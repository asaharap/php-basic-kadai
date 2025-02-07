<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
         if ($order === 'syoujunn'){
          echo '昇順にソートします。<br>';
          sort($array);
        }
          elseif($order === 'koujunn'){
            echo '降順にソートします。<br>';
            rsort($array);
          }

         foreach ($array as $val) {
          echo "$val <br>";
        }
      }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];


        sort_2way($nums, 'syoujunn');

        sort_2way($nums, 'koujunn');
        ?>
    </p>
</body>

</html>