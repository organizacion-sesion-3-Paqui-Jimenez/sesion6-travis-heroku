{ "collection" :
    {
        "title" : "Serie Database",
            "type" : "serie",
            "version" : "1.0",
            "href" : "{{ path_for('movies')}}",

            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/Serie","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
				{"rel" : "collection", "href" : "{{ path_for('series') }}","prompt":"Series"}
            ],
      
            "items" : [
                {% for item in items %}
	  
                {
                    "href" : "{{ path_for('series') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la serie"}
                        ]
                        } {% if not loop.last %},{% endif %}
	  
                {% endfor %}
	  
            ],
      
            "template" : {
            "data" : [
                        {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la serie"},
                        {"name" : "description", "value" : "{{ item.description }}", "prompt" : "Descripción de la serie"},
						{"name" : "director", "value" : "{{ item.director }}", "prompt" : "Director de la series"},
                        {"name" : "datePublished", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de lanzamiento"}        
            ]
                }
    } 
}




