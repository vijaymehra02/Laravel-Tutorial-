<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Mail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mail-form {
            background: #ffffff;
            padding: 25px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .mail-form h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .mail-form label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        .mail-form input,
        .mail-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .mail-form textarea {
            resize: none;
            height: 100px;
        }

        .mail-form button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .mail-form button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <form class="mail-form" action="send-mail" method="POST">
        <h1>Add details to send mail</h1>

        <label>Email To</label>
        <input type="email" name="to" placeholder="Enter email address" required>

        <label>Subject</label>
        <input type="text" name="subject" placeholder="Enter subject" required>

        <label>Message</label>
        <textarea name="message" placeholder="Enter your message" required></textarea>

        <button type="submit">SEND</button>
    </form>
</div>

</body>
</html>