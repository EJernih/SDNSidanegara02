<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Detail</title>
</head>
<body>
    <h1>{{ $contact->name }}</h1>
    <p>Phone: {{ $contact->phone }}</p>
    <p>Address: {{ $contact->address }}</p>
    <p>Email: {{ $contact->email }}</p>

    <!-- Embed Google Maps -->
    <iframe
        width="600"
        height="450"
        style="border:0"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q={{ urlencode($contact->address) }}">
    </iframe>

    <br>
    <a href="{{ route('contacts.index') }}">Back</a>
</body>
</html>
