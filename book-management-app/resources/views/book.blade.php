<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Book List - TEST MODE</h1>
        <div class="alert alert-info">
            Đang chạy ở chế độ test không cần database
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Book Code</th>
                    <th>Book Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\$books as \$book)
                <tr>
                    <td>{{ \$book->id }}</td>
                    <td>{{ \$book->bookName }}</td>
                    <td>{{ \$book->bookCode }}</td>
                    <td>{{ \$book->bookAuthor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>