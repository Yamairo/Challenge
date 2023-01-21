import json
import os

# Open the JSON file and read the contents
with open("json/recipes.json", "r") as f:
    recipes = json.load(f)

# Iterate through each recipe in the JSON file
for recipe in recipes:
    # Get the recipe name, description, ingredients, instructions, and href
    name = recipe["name"]
    description = recipe["description"]
    ingredients = recipe["ingredients"]
    instructions = recipe["instructions"]
    href = recipe["href"]

    # Create a new HTML file with the recipe name and href
    with open(f"{href}", "w") as f:
        f.write("<!DOCTYPE html>\n")
        f.write("<html>\n")
        f.write("\t<head>\n")
        f.write("\t\t<link rel='stylesheet' href='css/recipe_page.css'>\n")
        f.write("\t\t<title>" + name + "</title>\n")
        f.write("\t</head>\n")
        f.write("\t<body>\n")
        f.write("\t\t<div id='linkContainer'>\n")
        f.write("\t\t\t<a href='recipes.html'>Terug naar recepten</a>\n")
        f.write("\t\t</div>\n")
        f.write("\t\t<div id='container'>\n")
        f.write("\t\t\t<img id='img' src='img/background.jpg' alt=''>\n")
        f.write("\t\t\t<div id='div1'>\n")
        f.write(
            "\t\t\t\t<!-- De naam van het gerecht word met js code geinjecteerd-->\n")
        f.write("\t\t\t</div>\n")
        f.write("\t\t</div>\n")
        f.write("\t\t\t<div id='div2'>\n")
        f.write("\t\t\t\t<h2>Ingredienten:</h2>\n")
        f.write("\t\t\t\t<!-- Ingredienten worden geinjecteerd met js code -->\n")
        f.write("\t\t\t</div>\n")
        f.write("\t\t\t<div id='div3'>\n")
        f.write("\t\t\t\t<h2 id='instructies'>Instructies:</h2>\n")
        f.write("\t\t\t\t<ul id='instructies'></ul>\n")
        f.write("\t\t\t</div>\n")
        f.write("\t</body>\n")
        f.write("\t<script src='javascript/liveserver.js'>\n")
        f.write("\t</script>\n")
        f.write("\t\t<div id='linkContainer'>\n")
        f.write("\t\t\t<a href='recipes.html'>Terug naar recepten</a>\n")
        f.write("\t\t</div>\n")
        f.write("\t\t<div id='container'>\n")
        f.write("\t\t\t<img id='img' src='img/background.jpg' alt=''>\n")
        f.write("\t\t\t<div id='div1'>\n")
        f.write(
            "\t\t\t\t<!-- De naam van het gerecht word met js code geinjecteerd-->\n")
        f.write("\t\t\t</div>\n")
        f.write("\t\t</div>\n")
        f.write("\t\t<div id='div2'>\n")
        f.write("\t\t\t<h2>Ingredienten:</h2>\n")
        f.write("\t\t\t<!-- Ingredienten worden geinjecteerd met js code -->\n")
        f.write("\t\t</div>\n")
        f.write("\t\t<div id='div3'>\n")
        f.write("\t\t\t<h2 id='instructies'>Instructies:</h2>\n")
        f.write("\t\t\t<ul id='instructies'></ul>\n")
        f.write("\t\t</div>\n")
        f.write("\t</body>\n")
        f.write("\t<script src='javascript/liveserver.js'></script>\n")
        f.write("\t<script src='javascript/recipes.js'></script>\n")
        f.write("</html>\n")
