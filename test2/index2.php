<form action="result.php" method="post">
      お名前：<input type="text" name="my_name" /><br>
      ご希望商品：<input type="radio" name="radio" /><br>
      個数:
      <select name ="kosuu" >
        <?php for($i=1;$i <= 10; $i++ ){ ?>
            <option value = <?php echo $i; ?>>
            <?php echo $i ?>
        </option>
        <?php > }?>
</select>
      <?php ?>
      <input type="radio" name="sex" value="男性">男性
      <input type="radio" name="sex" value="女性">女性
    <br>
      <input type="hidden" name="hidden_param" value="隠しパラメータから" />

      年齢：
    <select name="age">
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
    </select>
      <input type="submit" value="送信するよ！" />
    </form>