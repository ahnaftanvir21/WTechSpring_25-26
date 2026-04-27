<?php
include "../Controller/Registrationvalidation.php";
?>
<!DOCTYPE html>
<head>
    <title>Registration</title>
</head>
<body>
    <form method = "post" action="", enctype="multipart/form-data">
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
                    <label>Username: </label>
                    
                </td>
                <td>
                    <input type="text">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Password</label>
                </td>
                <td>
                    <input type="password">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td><label>Add file:</label></td>
                <td>
                    <input type="file" name = "file">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Website: </label>
                </td>
                <td>
                    <textarea name="website" id="website"></textarea>
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Gender: </label>
                </td>
                <td>
                    <input type="radio" value="male" name="gender">
                    <label> Male</label>
                </td>
                <td>
                    <input type="radio" value="female" name="gender">
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