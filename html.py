import json
import os

# Open the JSON file and read the contents
with open("recipes.json", "r") as f:
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
        f.write("<!DOCTYPE html>")
        f.write("<html>")
        f.write("<head>")
        f.write(f"<title>{name}</title>")
        f.write("</head>")
        f.write("<body>")
        f.write(f"<h1>{name}</h1>")
        f.write(f"<p>{description}</p>")
        f.write("<h2>Ingredients:</h2>")
        f.write("<ul>")
        for ingredient in ingredients:
            f.write(f"<li>{ingredient}</li>")
        f.write("</ul>")
        f.write("<h2>Instructions:</h2>")
        f.write("<ol>")
        for instruction in instructions:
            f.write(f"<li>{instruction}</li>")
        f.write("</ol>")
        f.write("</body>")
        f.write("</html>")

print("HTML files have been generated and saved to the html_files folder.")
