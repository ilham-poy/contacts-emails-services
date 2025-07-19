<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <h2 style="color: #333333; border-bottom: 2px solid #f0f0f0; padding-bottom: 10px;">📨 New Contact Message</h2>
        <div style="font-family: Arial, sans-serif; max-width: 600px; color:black;">
            <p style="margin: 6px 0;">
                <span style="display: inline-block; font-weight: bold; width: 140px;">Name</span>
                <span>: {{ $name }}</span>
            </p>
            <p style="margin: 6px 0;">
                <span style="display: inline-block; font-weight: bold; width: 140px;">Email From</span>
                <span>: <a href="mailto:{{ $email }}" style="color: #1a0dab;">{{ $email }}</a></span>
            </p>
            <br>
            <p style="margin: 6px 0; vertical-align: top;">
                <span style="display: inline-block; font-weight: bold; width: 140px;">Message</span>
                <span>: </span>
            </p>
        </div>
        <div style="background-color: #f0f0f0; padding: 15px; border-radius: 5px; ">
            {{ $isi }}
        </div>

        <hr style="margin: 30px 0;">
        <p style="text-align: center; color: #999999;">This message was sent from the <span style="font-weight: bold;">portfolio photografer</span> contact form </p>
    </div>
</body>


</html>