fetch("products.json")
                .then(response => response.json())
                .then(recipes => {
                    // Create a new div element with a class of "recipe-cards-container"
                    const container = document.createElement("div");
                    container.classList.add("recipe-cards-container");

                    // Iterate over the array of recipes
                    for (const recipe of recipes) {
                    // Extract the name, description, URL, and href of the recipe
                    const { name, experation_date, url, href , alert_threshold} = recipe;

                    // Create a new div element for the recipe card
                    const div = document.createElement("div");
                    div.classList.add("recipe-card");

                    // Add the name, description, and image to the recipe card
                    div.innerHTML = `
                        <h2>${name}</h2>
                        <a href="${href}"><img src="${url}" alt="${name}"></a>
                        <p>${experation_date} ${alert_threshold} days left</p>
                        
                    `;

                    // Append the recipe card to the container element
                    container.appendChild(div);
                    }
                    // Append the container element to the body of the document
                    document.body.appendChild(container);
                });