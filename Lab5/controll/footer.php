<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>

        
        <?php
        while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="../Model/view.php?edit=<?php echo $row['id']; ?>">Edit</a>
                    <a href="../Model/view.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>
</div>

<div class="updateData">
    <form method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <h4>Updating <?php echo $username; ?> ... ...</h4>

        <table>
            <tr>
                <!-- <th>Name</th> -->
                <td>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </td>
            </tr>
            <tr>
                <!-- <th>Password</th> -->
                <td>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </td>
        </table><br>
        <p><input type="submit" value="Update" name="update"></p>
    </form>
</div>

</body>

</html>