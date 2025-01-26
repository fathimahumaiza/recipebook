document.getElementById("search-btn").addEventListener("click", function() {
    let query = document.querySelector("input[type='text']").value;
    if (query.trim() !== "") {
        alert("You searched for: " + query);
    } else {
        alert("Please enter a search term.");
    }
});

function showCategory(category) {
    alert(`Showing recipes for: ${category}`);
}


document.getElementById('load-more-btn').addEventListener('click', function() {
    // Add new recipes dynamically (for demo purposes, you can load more or modify the content)
    const recipeCards = document.getElementById('recipe-cards');

    const newCard = document.createElement('div');
    newCard.classList.add('col-md-4');
    newCard.innerHTML = `
        <div class="card">
            <img src="images/recipe3.jpg" class="card-img-top" alt="Recipe 3">
            <div class="card-body">
                <h5 class="card-title">Recipe Title</h5>
                <p class="card-text">Short description...</p>
            </div>
        </div>
    `;
    
    recipeCards.appendChild(newCard);
});


document.addEventListener("DOMContentLoaded", () => {
    const removeButtons = document.querySelectorAll(".btn-danger");

    removeButtons.forEach(button => {
        button.addEventListener("click", event => {
            const card = event.target.closest(".col-md-4");
            card.remove();
        });
    });
});


// JavaScript for form submission handling
document.getElementById("recipeForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const recipeName = document.getElementById("recipeName").value;
    const ingredients = document.getElementById("ingredients").value;
    const instructions = document.getElementById("instructions").value;

    // Basic validation and feedback
    if (recipeName && ingredients && instructions) {
        alert("Recipe submitted successfully!");
        this.reset(); // Reset the form
    } else {
        alert("Please fill in all required fields.");
    }
});


function viewRecipe(recipeName) {
    alert(`Displaying details for: ${recipeName}`);
}
