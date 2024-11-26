<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Content</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #e6f7ff;
            padding: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
            font-size: 16px;
        }

        .highlight {
            color: #ff4d4d;
            font-weight: bold;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff4d4d;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
        }

        .contact-info {
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>upskillhub.io.vn</h1>
        </div>

        <div class="content">
            <p>You have received a new message from {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $messages }}</p>
            <p>Vui lòng liên hệ Ms.Kiet - <strong>0768173369</strong> (Call, SMS, Zalo) để được tư vấn và hỗ trợ 24/7.</p>
            <p>Chúc Quý khách có một ngày làm việc thật là vui vẻ.</p>

            <p>Trân trọng,<br>upskillhub.io.vn</p>
        </div>

        <div class="footer">
            <p>{{ __('messages.Email') }}: tuankietity@gmail.com</p>
            <p>{{ __('messages.Address') }}: {{__('messages.Tan The Hoa, Tan Phu District, Ho Chi Minh City.')}}</p>
            <p>{{ __('messages.Phone') }}: (07) 68173369</p>
        </div>
    </div>
</body>

</html>