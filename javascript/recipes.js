fetch("recipes.json")
  .then(response => response.json())
  .then(recipes => {
  for(const recipe of recipes) {
    const { name, ingredients, instructions, url, href } = recipe;
    if(href==window.location.pathname.split("/")[1]){
      const img = document.getElementById("img")
      img.src = url
      // Create a H1 for the name of the meal
      const gerecht = document.createElement("H1")
      const gerchtNaam = document.createTextNode(name)
      gerecht.appendChild(gerchtNaam)
      // Get container div for better placement of children
      const container = document.getElementById("container")
      // Get a div to put the name in
      const element = document.getElementById("div1")
      element.appendChild(gerecht)
      // Get a div for the list of ingridients
      var cont = document.getElementById('div2');
      // Make a <ul>
      var ul = document.createElement('ul');
      for (i = 0; i <= ingredients.length - 1; i++) {
        var li = document.createElement('li');     // create li element.
        li.innerHTML = ingredients[i];      // assigning text to li using array value.
        ul.appendChild(li);     // append li to ul.
    }
    cont.appendChild(ul);
    }
  }
});