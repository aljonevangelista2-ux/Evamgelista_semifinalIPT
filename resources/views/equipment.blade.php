<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment page</title>
</head>
<body>
    <h1>Equipments (Total: {{ $equipments->count() }})</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipment Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipments as $equipment)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->equipmentname }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>