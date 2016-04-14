<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>address book</title>
        <script language="javascript" type="text/javascript">


        </script>
    </head>
    <body>
        <br><br><br>
        <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
            <tr align="center">
                <td width="100">NAME</td>
                <td width="100">ADDRESS</td>
                <td width="200">PHONE</td>
                <td width="200">EMAIL</td>
                <td width="200">ACOUNT NO</td>
                <td width="200">ACOUNT TYPE</td>
                <td width="200">ACCOUNT BALANCE</td>
                <td width="200">FUNCTION</td>
            </tr>

            <tr align="center">
                <td>
                    <?php
                    session_start();
                    require_once 'dbConn.php';
                    if (empty($_SESSION["use"])) {
                        $_SESSION["use"] = $_GET['username'];
                    }
                    $username = $_SESSION["use"];
                    date_default_timezone_set("PRC");
                    $sql = "select * from ACCOUNT WHERE username =" . $_SESSION["use"];
                    $result = mysqli_query($con, $sql);
                    $userList = '';
                    while ($rs = mysqli_fetch_array($result)) {
                        $userList[] = $rs;
                    }
                    if (is_array($userList) && !empty($userList)) {
                        foreach ($userList as $user) {
                            echo "
             <tr>
              <td> " . $user['name'] . "</td>
              <td> " . $user['address'] . "</td>
              <td> " . $user['phone'] . "</td>
			   <td> " . $user['email'] . "</td>
			    <td> " . $user['acountno'] . "</td>
				 <td> " . $user['acounttype'] . "</td>
				 <td> " . $user['accoutcount'] . "</td>
                                  <td> <a href='edit_detail.php?id=" . $user['id'] . "');\">Edit Account Detail</a></td>
                                     
             </tr>
          ";
                        }
                    }
                    ?>

                </td>
            </tr>
        </table>
        <br><br>

        <form action="withdrawDo.php" method="post">
            <input type="hidden" name="username" value="<?php echo $username; ?>"/>
            <table width="300" border="1" align="center" cellspacing="0" cellpadding="0">
                <tr>
                    <td>withdraw </td>
                    <td> <input type="text" name="withdraw" size="100%" /></td>
                </tr>
                <tr>
                    <td>deposit</td>
                    <td> <input type="text" name="deposit" size="100%" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="submit" /> <button type="button" onclick="location.href = 'index.php'">exit</button></td>

                </tr>
                </tr>
            </table>
            <p> </p>
            <p> </p>
            <p> </p>
        </form>
    </body>
</html>
