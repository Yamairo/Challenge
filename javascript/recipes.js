// Assign values to the variables
var recipeName = 'Chocolate Chip Cookies';
var recipeImageUrl = 'https://example.com/images/chocolate-chip-cookies.jpg';
var ingredients = ['flour', 'sugar', 'eggs', 'chocolate chips'];

// Update the page with the values
document.querySelector('h1').textContent = recipeName;
document.querySelector('img').src = recipeImageUrl;
var ingredientList = document.querySelector('ul');
for (var i = 0; i < ingredients.length; i++) {
  var li = document.createElement('li');
  li.textContent = ingredients[i];
  ingredientList.appendChild(li);
}