<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Information</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <div
        style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <h2 style="color: #333; text-align: center;">Contact Information</h2>

        <hr style="border-top: 1px solid #ddd;">

        <strong>User Details:</strong>
        <br>
        <br>
        <strong style="color: #555;">Name:</strong> {{ $data->name }} <br>
        <strong style="color: #555;">Email:</strong> {{ $data->email }} <br>
        <strong style="color: #555;">Message:</strong> {{ $data->message }} <br>
        <br>

        <p style="color: #777; text-align: center;">Thank you for reaching out!</p>

    </div>

</body>

</html>