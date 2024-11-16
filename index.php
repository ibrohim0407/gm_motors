<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Top Bar</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<nav>
    <ul>
        <brend class="brend">brend.uz</brend>
        <input type="search" class="qidiruv" placeholder="qidiring">
        <li class="news"><a href="#home">Yangiliklar</a></li>
        <li><a href="#about">Ma'lumot</a></li>
        <li><a href="#services">o'quvchilar</a></li>
        <li><a href="#contact">Jadvali</a></li>
    </ul>
</nav>

<main class="loginback">
    <div class="backimg">
        <form class="login" method="POST">
            <h2 class="logintext">
                Shaxsiy kabinetga kirish
            </h2>
            <p class="uchun">
                O'quvchilar, o'qituvchilar va ota-onalar uchun 
            </p>
            <input id="username" name="username" placeholder="Foydalanuvchi nomi" class="username"><br>
            <input id="password" placeholder="parol" class="password"><br> <br>
            <button id="logintap" class="login_button" name="submit" type="submit">Kirish</button><br>    
            <p id="erruser" class="erruser"></p>
            <a class="forgotpassword" href="forgotpassword.php">ro'yhatdan o'tish</a>
            <br><br><br>
        </form>
        <h1 id="h1tagi"></h1>
        

    </div>
    
</main>
<main class="video-darslik">
    <h1>Video Darsliklar To'plami</h1>
    <h4 class="yoz">elektron video darsliklar</h4>
    <button><h1>1</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>2</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>3</h1><h5 class="sinf">sinf</h5></button><br>
    <button><h1>4</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>5</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>6</h1><h5 class="sinf">sinf</h5></button><br>
    <button><h1>7</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>8</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>9</h1><h5 class="sinf">sinf</h5></button><br>
    <button><h1>10</h1><h5 class="sinf">sinf</h5></button>
    <button><h1>11</h1><h5 class="sinf">sinf</h5></button>
</main>

<main>
    <h1>brend.uz nima</h1>
</main>

</body>
</html>
<?php
if(isset($_GET['name'])){
    $name = htmlspecialchars($_GET['username']);
    $contents = file_get_contents("username.txt");
    $x = explode("\n", $contents);
    array_push($x,"yunubek");
    file_put_contents("username.txt",$x);
}
?>


