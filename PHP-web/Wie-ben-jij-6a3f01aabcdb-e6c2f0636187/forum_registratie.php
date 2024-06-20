<!DOCTYPE html>

<html>
    <head>
        <title>registratie forum</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <h1>
            Forum registratie
        </h1>
        <form action='registratie_handler.php'  method="post">
            <label> username </label>
            <input type="tekst" name="username" class="username"> </input>
            <label> email </label>
            <input type="tekst" name="email" class="email"> </input>
            <label> age </label>
            <input type="tekst" name="age" class="age"> </input>
            <input type="submit" name="submit" class="submit" method="post"></input>
        </form>

    </body>
    
</html>