<!DOCTYPE html> 

<html>
    <head>
        <title>Signup Now</title>
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <div class="image">
        <nav>
            <ul>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Tutorials</a></li>
                <li><a href="#">Services</a></li>
                <li class="active"><a href="core/view/login.php">Login Now</a></li>
            </ul>
        </nav>
        <img src="public/background.jpg">
        <div class="display-text">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</p>
        </div>
    </div>
    <div class="container">
        <form method="POST">
            <h2>CREATE AN ACCOUNT</h2>
            <label>Name</label><br>
            <input type="text" name="name"><br><br>
            <label>Username</label><br>
            <input type="text" name="username"><br><br>
            <label>Email Address</label><br>
            <input type="email" name="email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit">Signup</button>
        </form>
    </div>
    </body>
</html>