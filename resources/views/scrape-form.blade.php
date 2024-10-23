
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scraping de Emails</title>
</head>
<body>
    <h1>Insira a URL para fazer o scraping</h1>
    <form method="POST" action="{{ route('scrape-emails') }}">
        @csrf
        <label for="url">URL:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">Iniciar Scraping</button>
    </form>
</body>
</html>
