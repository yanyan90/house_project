<!DOCTYPE html>
<html>

<head>
    <title>Titre du courriel</title>
</head>

<body>
    <h1>Message de {{ $formData['nom'] }}</h1>
    <p><strong>Nom:</strong> {{ $formData['nom'] }}</p>
    <p><strong>Courriel:</strong> {{ $formData['email'] }}</p>
    <p><strong>Message:</strong> {{ $formData['message'] }}</p>
</body>

</html>
