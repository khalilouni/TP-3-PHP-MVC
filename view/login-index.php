<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Modifier Client</title>
</head>
<body>
    <header>    
        <h1>Se connecter</h1>
        <div>
            <button><a href="livre/list">Retour a la liste</a></button>
        </div>
        
    </header>
    <main>

        
        {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
        {% endif %}
        <div class="ajout">

            <div class="form_ajout">

                <form action="login/authentication" method="POST">

                    <label for="username">Username</label>
                    <input type="email" id="username" name="username" maxlenght="30">

                    <label for="Password">Password</label>
                    <input type="password"  id="password" name="password" maxlenght="45">

                    <input type="submit" value="Connecter">

                </form>
            </div>
            
        </div>
        
    </main>
    {{ include ('footer.php') }}
</body>
</html>