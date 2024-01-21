<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>

    <h2>User Details</h2>

    <?php if (isset($user)): ?>
        <table>
            <tr>
                <td>ID:</td>
                <td><?= $user['id'] ?></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?= $user['name'] ?></td>
            </tr>
            <tr>
                <td>College Name:</td>
                <td><?= $user['college_name'] ?></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><?= $user['phone_number'] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $user['email'] ?></td>
            </tr>
            <tr>
                <td>User Type:</td>
                <td><?= $user['user_type'] ?></td>
            </tr>
            <tr>
                <td>Created At:</td>
                <td><?= $user['created_at'] ?></td>
            </tr>
            <tr>
                <td>Updated At:</td>
                <td><?= $user['updated_at'] ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>User not found</p>
    <?php endif; ?>

</body>
</html>
