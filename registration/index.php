<?php include 'vendor/include.php'; ?>
<!DOCUMENT html>
<html>
<head>
    <title>This is the login</title>
    <?php
    foreach (scandir(dirname(__FILE__).'/assets/css/') as $filename) {
            $except = array( "css");
            $imp = implode('|', $except);
            if (preg_match('/^.*\.(' . $imp . ')$/i', $filename)) {
                $file = '<link rel="stylesheet" href="assets/css/' . $filename.'">';
                echo $file;
    //        echo $file;
    //        echo '<br>';
            }
        }
        $link = new Connect();

    ?>
<!--    <link rel="stylesheet" href="assets/css/main.css">-->
</head>
<body>
    <div id="form">
        <h2>Register Form
            <?php
                if(isset($_GET['success'])){
                echo $_GET['success'];
                }
            ?>
        </h2>
        <form action="process.php" method="POST" >
            <label for="username">User Name</label>
            <input type="text" name="username" id="username" required="required">
            <label for="email">User Email</label>
            <input type="email" name="email" id="email" required="required">
            <label for="pass">User Password</label>
            <input type="password" name="pass" id="pass" required="required">
            <input type="submit" name="register" value="Sign Up">
        </form>
    </div>
</body>
</html>
<?php
$new = new Connect();
?>