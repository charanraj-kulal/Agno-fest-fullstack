<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>

    <h2>User List</h2>

    <?php if (!empty($users)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>College Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['college_name'] ?></td>
                        <td><?= $user['phone_number'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['user_type'] ?></td>
                        <td><?= $user['created_at'] ?></td>
                        <td><?= $user['updated_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

</body>
</html>
