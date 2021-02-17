<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Profile</h3>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $loggedUserInfo->name }}</td>
                <td>{{ $loggedUserInfo->email }}</td>
                <td><a href="logaut">Lagaut</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>