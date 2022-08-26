
{{ include ('header.php') }}
      
    <div class="container">
        
        {% for livre in livres %}
            <div class="item_container">
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

                {% if session.privilege_id == 1 %}
                <div class="item_option">
                    <button><a href="../livre/delete/{{ livre.idLivre }}">Supprimer</a></button>
                    <button><a href="../livre/edit/{{ livre.idLivre }}">Modifier</a></button>
                </div>
                {% endif %}
                <div class="item_image">
                        <img src="{{livre.image}}" alt="image">
                </div>
            </div>

        {% endfor %}
    </div>
    {{ include ('footer.php') }}
   
</body>
</html>
