<?php
include "../Controller/Registrationvalidation.php";
?>
<!DOCTYPE html>
<head>
    <title>Registration</title>
</head>
<body>
    <form method = "post" action="">
        <table>
            <tr>
                <td><p style = 'color: red'>* requird field</label></td>
            </tr>
            <tr>
                <td>
                    <label>Name: </label>
                </td>
                <td>
                    <input type="text" name="name">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label>
                </td>
                <td>
                    <input type="email" name = "email">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Address: </label>
                </td>
                <td>
                    <textarea name="Address" id="Address" name = "address"></textarea>
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Gender: </label>
                </td>
                <td>
                    <input type="radio" value="male" name="GMale">
                    <label> Male</label>
                </td>
                <td>
                    <input type="radio" value="female" name="GFemale">
                    <label> Female</label>
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>