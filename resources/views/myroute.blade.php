<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Playfair+Display:ital,wght@1,400;1,600&family=Rubik+Bubbles&family=Sriracha&display=swap" rel="stylesheet">
    <title>หาสูตรคูณ</title>
</head>
    <table>
        <tbody>
            <body>
                <center>
                    <h1>ตารางสูตรคูณแม่ {{ $myinput }}</h1>
                        <div>
                        <?php

                        for($i = 1 ; $i <= 24 ; $i++ ) {
                            echo "{$myinput} x {$i} = ".($myinput * $i)."<br/>";
                        }
                        ?>
                    </div>
                </center>
            </body>
        </tbody>
    </table>
    <style>
        h1{
        color: rgb(0, 0, 0);
        font-size: 50px;
        font-family: Sriracha;
        }
        body{
            /* background-image: url("https://i.pinimg.com/originals/8c/62/93/8c6293f2ccb3b36222301e5da06f6f60.gif"); */
            background-image: url("https://i.pinimg.com/736x/01/8a/ab/018aabb76e41b6b50c854c61005fbcff.jpg");
            background-size: cover;
        }
        div {
        font-size: 25px;
        background-color: rgb(42, 83, 44);
        width: 220px;
        height: 380px;
        border: 1px solid black;
        overflow-y: scroll;
        font-family: Sriracha;
        }
        div:hover {
        width: 240px;
        height: 400px;
        background-color: rgb(4, 53, 27);
        }
    </style>
</html>
