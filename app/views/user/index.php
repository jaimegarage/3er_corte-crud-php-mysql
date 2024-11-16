<h1>All Users</h1>
<a href="create.php">Create New User</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
