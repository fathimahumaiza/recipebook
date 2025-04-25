<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

 <!-- Navigation Header -->
 <header class="header"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="#">My Recipe Vault</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="Login_Register.html">Login / Register</a></li>
            <li class="nav-item"><a class="nav-link" href="Home_page.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="Explore_recipes.html">Explore Recipes</a></li>
            <li class="nav-item"><a class="nav-link" href="Submit_recipe.html">Submit Recipe</a></li>
            <li class="nav-item"><a class="nav-link" href="Favorite_section.html">Favourite Section</a></li>
        </ul>
    </nav>
</header>


  <div class="container" id="signup">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
            
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password"  name="password" placeholder="password" required>
            <label for="password">password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>

        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
</div> 

<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="">
       
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder="password" required>
            <label for="password">password</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a> 
        </p>

        <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>

        </div>
        <div class="links">
            <p>Don't Have Account Yet ?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
</div> 

<script>
    // Wait until DOM is fully loaded
    document.addEventListener("DOMContentLoaded", function () {
      const signUpButton = document.getElementById("signUpButton");
      const signInButton = document.getElementById("signInButton");
      const signUpForm = document.getElementById("signup");
      const signInForm = document.getElementById("signIn");
  
      // Hide Sign In form by default
      signInForm.style.display = "none";
  
      // Show Sign In, Hide Register
      signInButton.addEventListener("click", () => {
        signUpForm.style.display = "none";
        signInForm.style.display = "block";
      });
  
      // Show Register, Hide Sign In
      signUpButton.addEventListener("click", () => {
        signUpForm.style.display = "block";
        signInForm.style.display = "none";
      });
    });
  </script>
  


</body>
</html> 
