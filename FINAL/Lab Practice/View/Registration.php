<?php
##include = "";
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
                    <input type="text">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label>
                </td>
                <td>
                    <input type="email">
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Address: </label>
                </td>
                <td>
                    <textarea name="Address" id="Address"></textarea>
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
            <tr>
                <td>
                    <label>Gender: </label>
                </td>
                <td>
                    <input type="radio" value="male">
                    <label> Male</label>
                </td>
                <td>
                    <input type="radio" value="female">
                    <label> Female</label>
                </td>
                <td><p style = 'color:red'>*</p></td>
            </tr>
        </table>
    </form>
</body>
</html>