<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 5</title>
    <link rel="stylesheet" href="lab5.css">
</head>
<body>
    <h2>Database Connection</h2>
    <form action="Model/insert.php" method="post">
        <div>
            <table>
                <tr>
                    <th>
                        Username
                    </th>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <th>
                        Password
                    </th>
                    <td >
                        <input type="text" name="password">
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <button>
                <input type="submit" value="Save">
            </button>

            <button>
                <input type="reset" value="Reset">
            </button>

            <a href="Model/view.php">Show Data</a>
        </div>
    </form>
</body>