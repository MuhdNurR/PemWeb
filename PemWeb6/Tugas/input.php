<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body style="margin: 200px;">
    <form method="POST" action="check.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td style="padding-top:15px" colspan="2" align="center">
                    <input type="submit" name="btnLogin" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>