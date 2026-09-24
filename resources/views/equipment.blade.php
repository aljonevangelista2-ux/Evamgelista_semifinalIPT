<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Equipment List</h1>
        
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Equipment Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipments as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->equipmentname }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>