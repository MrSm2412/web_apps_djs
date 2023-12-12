<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Country:</strong> {{ $user->country }}</p>
    <p><strong>State:</strong> {{ $user->state }}</p>
    <p><strong>City:</strong> {{ $user->city }}</p>
    <p><strong>Gender:</strong> {{ $user->gender }}</p>
    <img src="{{ asset($user->profile_image) }}" alt="Profile Photo">
</body>
</html>
