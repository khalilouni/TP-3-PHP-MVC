<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav>
        
        {% if guest %}
        <a href="{{path}}login">connecter</a>
        <a href='{{path}}pdf.php'>Imprimer la liste</a> 
        {% else %}
        <a href="create">Ajouter un livre</a>
        <a href="{{path}}Login/logout">Se deconnecter</a>
        <a href="{{path}}user/create">Ajouter utilisateurs</a>
        <a href="{{path}}livre/list">Retour liste livres</a>
        {% endif %}
    </nav>

<div class="container">
        
        {% for user in users %}
            <div class="item_container">
                <div class="item_detail">
                    <ul>
                        <li>username : {{ user.username }}</li>
                        <li>email : {{ user.email }}</li>
                    </ul>
                </div>

                
                <div class="item_option">
                    <button><a href="../user/delete/{{ user.iduser }}">Supprimer</a></button>
                </div>

                
            </div>

        {% endfor %}
    </div>




</body>
</html>