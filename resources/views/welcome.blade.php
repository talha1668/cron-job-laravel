<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User and Post Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>User and Post Table</h1>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Post</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    @foreach ($user->posts as $post)
                        <td>{{ $post->post }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Post and Liked by current user</h1>

    <table>
        <thead>
            <tr>
                <th>Post</th>
                <th>liked</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postStatuses as $post)
                <tr>
                    <td>{{ $post->post }}</td>
                    <td>
                        liked
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
