<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QrCode</title>
</head>
<body>

  <div style="text-align: center;" class="visible-print text-center">
    {!! QrCode::size(300)->generate($uri); !!}
    <p>{{ $uri }}</p>
  </div>


</body>
</html>
