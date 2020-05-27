<!DOCTYPE html>
<html>
<head>
    <title>Info Form</title>
</head>
<body>
    <form method="post" action="<?php echo site_url('form/savingdata'); ?>">
      
        <table>
            <tr>
                <td>Name:</td>
                <td>:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>:</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td>:</td>
                <td><input type="text" name="contact" required></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>:</td>
                <td><input type="text" name="dob" required></td>
            </tr>
            <tr>
                <td>Pin:</td>
                <td>:</td>
                <td><input type="text" name="pin" required></td>
            </tr><br><br>
            <tr>
                <input type="submit" name="submit" value="Save">
            </tr>
        </table>
    </form>
</body>
</html>
