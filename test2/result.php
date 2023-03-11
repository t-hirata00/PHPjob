<?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $hidden_param = $_POST['hidden_param'];
    ?>
    <p>私の名前は<?php echo $my_name; ?>です。</p>
    <p>パスワードは<?php echo $password; ?>です。</p>
    <p>性別は<?php echo $sex; ?>です。</p>
    <p>性別は<?php echo $hidden_param; ?>です。</p>