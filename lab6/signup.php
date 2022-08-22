<head>
<title>Lab Task 5</title>
<link rel="stylesheet" href="lab6.css">
    
</head>
<body>
<?php include('partials/header.php');?>

    <h2 >Sign Up</h2>
    
    <form action="database/insert.php" method="post">
        <div >
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
                    <td>
                        <input type="text" name="password">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <button>
                <input type="submit" value="Save">
            </button>

            <button>
                <input type="reset" value="Reset">
            </button>
        </div>
    </form>

    <?php include('partials/footer.php');?>
</body>