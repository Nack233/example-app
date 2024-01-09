<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Playfair+Display:ital,wght@1,400;1,600&family=Rubik+Bubbles&family=Sriracha&display=swap" rel="stylesheet">
    <title>หาสูตรคูณ</title>
</head>
    <table>
        <tbody>
            <body>
                <center>
                    <h1>ใส่แม่สูตรคูณที่ต้องการ</h1>

                    <form method="post" action="/my-route">
                        @csrf
                        <input type="text" name="myinput">
                        <button type="submit">Submit</button>
                    </form>
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
    </style>
</html>
