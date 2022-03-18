<?php
    if(isset($_POST['submit']) && !empty($_POST['uuid']) && !empty($_POST['username'])){
        $data = file_get_contents('whitelist.json');
        $json_arr = json_decode($data, true);
        $json_arr[] = array('uuid' => $_POST['uuid'], 'name' => $_POST['username']);
        file_put_contents('whitelist.json', json_encode($json_arr));
    }
?>

<html>
<head>
    <title>Seed SMP Whitelister</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h2>Enter Your Username and UUID<small>UUID: <a target="_blank" href="https://namemc.com">namemc.com</a></small></h2>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="group">
            <input type="text" name="username" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Username</label>
        </div>

        <div class="group">
            <input type="text" name="uuid" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>UUID</label>
        </div>

        <input type="submit" name="submit" value="Submit">

        </form>
      </div>

</body>

</html>
