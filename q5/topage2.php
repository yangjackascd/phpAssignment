<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>address book</title>
        <script language="javascript" type="text/javascript">


        </script>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
            <tr align="center">
                <td>id</td>
                <td>brandname</td>
                <td>descript</td>
                <td>function</td>
            </tr>
            <tr align="center">
                <td>
                    <?php
                    require_once 'dbConn.php';
                    date_default_timezone_set("PRC");
                    $sql = "select * from brands order by id asc";
                    $result = mysqli_query($con, $sql);
                    $userList = '';
                    while ($rs = mysqli_fetch_array($result)) {
                        $userList[] = $rs;
                    }
                    if (is_array($userList) && !empty($userList)) {
                        foreach ($userList as $user) {
                            echo "
             <tr>
              <td> " . $user['id'] . "</td>
              <td> " . $user['brandname'] . "</td>
              <td> " . $user['descript'] . "</td>
			  <td>
              <a href='searchProduct2.php?id=" . $user['id'] . "&name=" . $user['brandname'] . "');\">search</a>   
			  
              </td>
             </tr>
          ";
                        }
                    }
                    ?>
                </td>

            </tr>

        </table>
        <table border="0" cellspacing="0" cellpadding="0" id="userList" align="center">
            <tr align="center">
                <td>
                    <a href="index.php">Return</a>
            </tr>
        </table>
        <br><br>
    </body>
</html>
