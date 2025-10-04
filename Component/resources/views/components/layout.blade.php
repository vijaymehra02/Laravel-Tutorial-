<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tital }}</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    nav{
        margin: 0;
    }
    nav ul{
        margin: 0;
        background-color: gray;
        font-size: 30px;
        padding: 18px;
    }
    nav ul li{
        display: inline;
        margin-left: 20px;
    }
    main{
        background-color: silver;
        height: 500px;
        font-size: 40px;
        text-align: center;
    }
    footer{
        background-color: gray;
        height: 150px;
        font-size: 40px;
        text-align: center;
    }
</style>

<body>
    <div>
        <nav>
            <ul>
                <li>
                    <a href="home">Home</a>
                </li>
                <li>
                    <a href="about">Bout</a>
                </li>
                <li>
                    <a href="contect">Contect</a>
                </li>
            </ul>
        </nav>
        <main>
            {{ $main }}
        </main>
        <footer>
            {{ $footer }}
        </footer>
        
    </div>
</body>

</html>