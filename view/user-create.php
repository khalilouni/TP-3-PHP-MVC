<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <header>    
        <h1>Ajouter un utilisateur</h1>
        <div>
            <button><a href="{{path}}livre/list">Retour a la liste</a></button>
        </div>
        
    </header>
    <main>
        
        
        <div class="ajout">

            <div class="form_ajout">    
                <form action="{{path}}user/store" method="post">
                        <label for="nom">Username</label>
                        <input type="email" name="username" value="{{ user.username }}">
                
                        <label for="nom">Password</label>
                        <input type="password" name="password" value="{{ user.password }}">
                
                    Privilege
                        <select type="text" name="privilege_id">
                        {% for privilege in privileges %}
                            <option value='{{privilege.id}}'>{{privilege.privilege}}</option>
                        {% endfor %}
                        </select>
                    </label>
                    <input type="submit">
                </form>

            </div>
                
        </div>
    </main>
    {{ include ('footer.php') }}
</body>
</html>