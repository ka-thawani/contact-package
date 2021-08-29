<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Contact Us Page</h1>
    <form action="contact" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" id="">
        <input type="email" name="email" placeholder="Enter your Email" id="">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>
        <input type="submit" value=""> 
    </form>
</body>
</html>