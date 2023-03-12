<form action="result.php" method="post">
    お名前：<input type="text" name="my_name" />
    <br>
    ご希望商品：
      <input type="radio" name="radio1" value="A賞" />A賞
      <input type="radio" name="radio1" value="B賞" />B賞
      <input type="radio" name="radio1" value="C賞" />C賞
    <br>
    個数:
      <select name ="many" >
        <?php for($i=1;$i <= 10; $i++ ){ ?>
          <option value = <?php echo $i; ?>>
            <?php echo $i ?>
          </option>
        <?php } ?>
      </select>
      <br>
    <input type="submit" value="申し込み" />
    </form>