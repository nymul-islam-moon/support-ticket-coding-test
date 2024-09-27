<!DOCTYPE html>
<html>
<head>
    <title>Ticket Created</title>
</head>
<body>
    <h1>Ticket Created</h1>

    <p><strong>Title:</strong> {{ $ticket->name }}</p>
    <p><strong>Description:</strong> {{ $ticket->description }}</p>

    <p>Thank you!</p>
</body>
</html>
