<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="main">
<h1>Register</h1>
<i> It very easy </i>
<br>
<form action="register.post.php" method="post">
    <input type="text" name="username" id="username" placeholder="username"><br>
    <input type="email" name="email" id="email" placeholder="mobile number or email"><br>
    <input type="password" name="password" id="password" placeholder="new password"><br>
    <select name="gender"title="gender choose male or female">
        <option disabled selected >choose</option>
        <option >male</option>
        <option >female</option>
    </select>

<br>
    <input type="submit" name="submit" id="submit" value="Register"><br>
    </form>
<h3>Or</h3>
<a id="login" href="index.php">Log in </a>

</div>

</body>
</html>