<h1>Edit User</h1>
<form action="update.php?id=<?php echo $user['id']; ?>" method="POST">
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <button type="submit">Update</button>
</form>
