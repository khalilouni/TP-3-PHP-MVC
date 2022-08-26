<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
{% for livre in livres %}

<div class="item_detail">
    <ul>
        <li>Titre : {{ livre.Titre }}</li>
        <li>Nombre de Page : {{ livre.nbPages }}</li>
        <li>Langue : {{ livre.langueLivre }}</li>
        <li>Parution : {{ livre.anneeParution }}</li>
        <li>Auteur : {{ livre.auteur_idAuteur }}</li>
        <li>Categorie : {{ livre.categorie_idCategorie }}</li>
    </ul>
</div>

{% endfor %}
</main>    

{{ include ('footer.php') }}

</body>
</html>