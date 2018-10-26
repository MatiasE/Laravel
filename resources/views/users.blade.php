<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1><?php echo e($title); ?> - Vista en Cache</h1>
    <hr>
    <p>Forma 1</p>
        @if (!empty($users))
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user }}</li>
                @endforeach
            </ul>
        @else 
            <p>No hay usuarios registrados</p>
        @endif 
    
    <p>Forma 2</p>
        <ul>
            <?php foreach ($users as $user): ?>
                <li><?php echo e($user); ?></li>
            <?php endforeach; ?>
        </ul>
</body>
</html>