<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject }}</title>
</head>

<body>

    <p>Dear Support Team,</p>

    <p>I am writing to request assistance with the following issue:</p>

    <p><strong>Name:</strong> {{ $name }}<br>
        <strong>Phone Number:</strong> {{ $phone_number }}<br>
        <strong>Issue:</strong> {{ $mailmessage }}
    </p>

    <p>Please address this matter at your earliest convenience. Feel free to contact me if further details are needed.
    </p>

    <p>Thank you for your attention.</p>

    {{-- <p>Best regards,<br>
    {{ $name }}<br>
    {{ $company_name }}</p> --}}

</body>

</html>
