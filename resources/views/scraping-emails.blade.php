<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails Coletados</title>
</head>
<body>
    <h1>Emails Coletados</h1>
    @if(count($emails) > 0)
        <ul>
            @foreach($emails as $email)
                <li>{{ $email }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum email encontrado.</p>
    @endif
</body>
</html>
