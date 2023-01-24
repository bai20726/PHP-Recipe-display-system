<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Infused Recipe</title>
</head>
<body>
<?php
class Recipe {
    private $name;
    private $ingredients;
    private $instructions;

    public function __construct($name, $ingredients, $instructions) {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
    }

    public function getName() {
        return $this->name;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function getInstructions() {
        return $this->instructions;
    }
}

$chickenMarsala = new Recipe("Chicken Marsala", 
                            ["1/2 c. all-purpose flour", "8 chicken cutlets or 4 chicken breasts, sliced in half (about 1.5 lbs)", "Kosher salt and freshly ground black pepper", "2 tbsp. canola oil", "2 tbsp. unsalted butter", "1 (8-ounce) package sliced mushrooms" , "1/3 c. chopped onion (about 1/2 small onion)", "2 cloves garlic, chopped", "1/2 c. dry Marsala wine" , "3/4 c. chicken stock" , "1/2 c. heavy cream
                            ", "1 tsp. fresh thyme, plus more for garnish"], 
                            ["Step 1,", 
                            "Place flour in a shallow bowl. Use a meat tenderizer or the bottom of a sturdy cup to pound chicken to about 1/4 inch thick. Season with salt and pepper. Dredge chicken in flour, turning to coat all sides. Heat oil in a medium skillet over medium-high heat. Cook chicken in batches, turning once, until golden brown, 3 to 4 minutes. Transfer to a plate and tent to keep warm. Reserve skillet.",
                            "Step 2, ",
                            "Pour off oil from skillet. Melt butter in skillet over medium heat. Add mushroom and onions. Season with salt and pepper. Cook, stirring occasionally, until tender, 5 to 7 minutes. Add garlic and cook, stirring, until fragrant, 2 to 3 minutes. Add wine, stock, cream, and thyme. Simmer, stirring occasionally, until thickened, 14 to 16 minutes. Season with salt and pepper. Return chicken to pan and toss to coat. Serve immediately garnished with  thyme."
                    ]);

$salisburySteak = new Recipe("Salisbury Steak",  
                            ["1 lb. 80% lean ground beef",
                            "1/2 medium onion, grated",
                            "1/2 c. unseasoned dried breadcrumbs",
                            "1 large egg",
                            "2 tbsp. ketchup",
                            "1 tbsp. country Dijon",
                            "1 tsp. Worcestershire sauce",
                            "Kosher salt and freshy grated black pepper",
                            "2 tbsp. canola oil",
                            "Mashed potatoes and peas, for serving",
                            "2 tbsp. unsalted butter",
                            "1/2 medium onion, thinly sliced",
                            "4 oz. mushrooms, sliced",
                            "3 tbsp. all-purpose flour",
                            "1 c. beef stock",
                            "1/2 c. heavy cream or whole milk",
                            "Kosher salt and freshly ground black pepper"],
                            [   "Step 1,",
                             "Make patties: Combine beef, onion, breadcrumbs, egg, ketchup, mustard, and Worcestershire in a bowl. Gently mix  with your hands, being careful not to overmix. Shape into 4 patties. Season with salt and pepper.",
                                "Step 2, ",
                                "Heat oil in a large skillet over medium-high heat. Add patties and cook, turning once, until brown and cooked through, 8 to 12 minutes. Transfer to a plate and tent with foil to keep warm; reserve skillet. ",
                                "Step 3,",
                                 "Make gravy: Reduce heat to medium-low. Add butter, onion, and mushrooms to reserved skillet. Cook, stirring occasionally, until soft, 5 to 6 minutes. Add flour and cook, stirring, until browned, 2 to 3 minutes. Gradually whisk in stock and milk. Simmer until thickened, 8 to 10 minutes. Season with salt and pepper",
                                "Step 4,",
                                " Serve steaks topped with gravy and potatoes and peas alongside."
                            ]);

$crispyGnocchi = new Recipe("Crispy Gnocchi with Sausage and Sage Brown Butter",
                            ["10 tbsp. (1 1/4 sticks) unsalted butter, divided",
                            "2 tbsp. chopped fresh sage",
                            "12 oz. sweet Italian sausage, casings removed",
                            "2 (9-ounce) packages store-bought gnocchi"],
                            [
                                "Step 1",
                                "Melt 8 tablespoons butter in a small saucepan over medium-low heat. Cook, swirling occasionally, until golden brown and nutty smelling, 8 to 10 minutes. Add sage and cook, until crisp, 5 to 10 seconds. ",
                                "Step 2",
                                "Melt remaining 2 tablespoons butter in a medium skillet over medium-high heat. Add sausage and cook, breaking it up with a spoon, until browned and cooked through, 10 to 12 minutes. Transfer to a plate. ",
                                "Step 3",
                                "Pour off all but 2 tablespoons fat from skillet; reduce heat to medium. Add gnocchi and spread into a single layer. Cook, without stirring, 2 minutes. Toss, and continue cooking, until golden brown and crispy, 3 to 4 minutes. Add sage butter and sausage, and cook until warmed through, 1 to 2 minutes."
                            ]);     
                            
$asparagusFrittata = new Recipe("Asparagus Frittata with Burrata and Herb Pesto",
                            ["10 tbsp. (1 1/4 sticks) unsalted butter, divided",
                            "2 tbsp. chopped fresh sage",
                            "12 oz. sweet Italian sausage, casings removed",
                            "2 (9-ounce) packages store-bought gnocchi"],
                            [
                                "Step 1",
                                "Melt 8 tablespoons butter in a small saucepan over medium-low heat. Cook, swirling occasionally, until golden brown and nutty smelling, 8 to 10 minutes. Add sage and cook, until crisp, 5 to 10 seconds. ",
                                "Step 2",
                                "Melt remaining 2 tablespoons butter in a medium skillet over medium-high heat. Add sausage and cook, breaking it up with a spoon, until browned and cooked through, 10 to 12 minutes. Transfer to a plate. ",
                                "Step 3",
                                "Pour off all but 2 tablespoons fat from skillet; reduce heat to medium. Add gnocchi and spread into a single layer. Cook, without stirring, 2 minutes. Toss, and continue cooking, until golden brown and crispy, 3 to 4 minutes. Add sage butter and sausage, and cook until warmed through, 1 to 2 minutes."
                            ]);

$grainSalad = new Recipe("Grain Salad with Trout, Almonds, and Herbs",
                            ["10 tbsp. (1 1/4 sticks) unsalted butter, divided",
                            "2 tbsp. chopped fresh sage",
                            "12 oz. sweet Italian sausage, casings removed",
                            "2 (9-ounce) packages store-bought gnocchi"],
                            [
                                "Step 1",
                                "Melt 8 tablespoons butter in a small saucepan over medium-low heat. Cook, swirling occasionally, until golden brown and nutty smelling, 8 to 10 minutes. Add sage and cook, until crisp, 5 to 10 seconds. ",
                                "Step 2",
                                "Melt remaining 2 tablespoons butter in a medium skillet over medium-high heat. Add sausage and cook, breaking it up with a spoon, until browned and cooked through, 10 to 12 minutes. Transfer to a plate. ",
                                "Step 3",
                                "Pour off all but 2 tablespoons fat from skillet; reduce heat to medium. Add gnocchi and spread into a single layer. Cook, without stirring, 2 minutes. Toss, and continue cooking, until golden brown and crispy, 3 to 4 minutes. Add sage butter and sausage, and cook until warmed through, 1 to 2 minutes."
                            ]);  
$salisburySteak = new Recipe("Chicken-and-Spinach Tortellini Soup",  
                            ["1 lb. 80% lean ground beef",
                            "1/2 medium onion, grated",
                            "1/2 c. unseasoned dried breadcrumbs",
                            "1 large egg",
                            "2 tbsp. ketchup",
                            "1 tbsp. country Dijon",
                            "1 tsp. Worcestershire sauce",
                            "Kosher salt and freshy grated black pepper",
                            "2 tbsp. canola oil",
                            "Mashed potatoes and peas, for serving",
                            "2 tbsp. unsalted butter",
                            "1/2 medium onion, thinly sliced",
                            "4 oz. mushrooms, sliced",
                            "3 tbsp. all-purpose flour",
                            "1 c. beef stock",
                            "1/2 c. heavy cream or whole milk",
                            "Kosher salt and freshly ground black pepper"],
                            [   "Step 1,",
                             "Make patties: Combine beef, onion, breadcrumbs, egg, ketchup, mustard, and Worcestershire in a bowl. Gently mix  with your hands, being careful not to overmix. Shape into 4 patties. Season with salt and pepper.",
                                "Step 2, ",
                                "Heat oil in a large skillet over medium-high heat. Add patties and cook, turning once, until brown and cooked through, 8 to 12 minutes. Transfer to a plate and tent with foil to keep warm; reserve skillet. ",
                                "Step 3,",
                                 "Make gravy: Reduce heat to medium-low. Add butter, onion, and mushrooms to reserved skillet. Cook, stirring occasionally, until soft, 5 to 6 minutes. Add flour and cook, stirring, until browned, 2 to 3 minutes. Gradually whisk in stock and milk. Simmer until thickened, 8 to 10 minutes. Season with salt and pepper",
                                "Step 4,",
                                " Serve steaks topped with gravy and potatoes and peas alongside."
                            ]);                                                      
?>
<div class="hero">
<nav>
    <h2 class = "logo">Infused<span>Recipes</span></h2>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Recipes</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    <a href="#" class="btn">Subscribe</a>
</nav>
<div class = "container">
<h1>Quick and Easy Dinner Ideas</h1>
<h3>for Time-Crunched Weeknights</h3>
<h4>These 30-minute dinners are just the thing when time is of the essence!</h4>
<div class ="newsletter">
    <form>
        <input type ="email" name="email" id="mail" placeholder="Search Your Favorite Meal">
        <input type ="submit" name="submit" placeholder="Subscribe">
    </form>
</div>
</div>
</div>
<div class ="bai">
    <h2>Featured Recipes</h2>
</div>

<div class="content">

<div class="recipe">
    <h2><?php echo $chickenMarsala->getName(); ?></h2>
    <img src="../images/chicken-marsala.jpg" alt="Chicken Marsala">
    <ul class="ingredients">
        <h3>Ingredients</h3>
        <?php
        foreach ($chickenMarsala->getIngredients() as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
    <div class="instructions">
        <h3>Instructions</h3>
        <?php
        foreach ($chickenMarsala->getInstructions() as $instruction) {
            echo "<p>$instruction</p>";
        }
        ?>
    </div>
</div>

<div class="recipe">
    <h2><?php echo $salisburySteak->getName(); ?></h2>
    <img src="../images/salisbury-steak.jpg" alt="salisburySteak">
    <ul class="ingredients">
        <h3>Ingredients</h3>
        <?php
        foreach ($salisburySteak->getIngredients() as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
    <div class="instructions">
        <h3>Instructions</h3>
        <?php
        foreach ($salisburySteak->getInstructions() as $instruction) {
            echo "<p>$instruction</p>";
        }
        ?>
    </div>
</div>

<div class="recipe">
    <h2><?php echo $crispyGnocchi->getName(); ?></h2>
    <img src="../images/crispy-gnocchi-with-sausage.jpg" alt="salisburySteak">
    <ul class="ingredients">
        <h3>Ingredients</h3>
        <?php
        foreach ($crispyGnocchi->getIngredients() as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
    <div class="instructions">
        <h3>Instructions</h3>
        <?php
        foreach ($crispyGnocchi->getInstructions() as $instruction) {
            echo "<p>$instruction</p>";
        }
        ?>
    </div>
</div>

<div class="recipe">
    <h2><?php echo $asparagusFrittata->getName(); ?></h2>
    <img src="../images/asparagus.jpg" alt="salisburySteak">
    <ul class="ingredients">
        <h3>Ingredients</h3>
        <?php
        foreach ($asparagusFrittata->getIngredients() as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
    <div class="instructions">
        <h3>Instructions</h3>
        <?php
        foreach ($asparagusFrittata->getInstructions() as $instruction) {
            echo "<p>$instruction</p>";
        }
        ?>
    </div>
</div>
<div class="recipe">
    <h2><?php echo $grainSalad->getName(); ?></h2>
    <img src="../images/grain-salad.jpg" alt="salisburySteak">
    <ul class="ingredients">
        <h3>Ingredients</h3>
        <?php
        foreach ($grainSalad->getIngredients() as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
    <div class="instructions">
        <h3>Instructions</h3>
        <?php
        foreach ($grainSalad->getInstructions() as $instruction) {
            echo "<p>$instruction</p>";
        }
        ?>
    </div>
</div>

<div class="recipe">
    <h2><?php echo $salisburySteak->getName(); ?></h2>
    <img src="../images/salisbury-steak.jpg" alt="salisburySteak">
    <ul class="ingredients">
        <h3>Ingredients</h3>
        <?php
        foreach ($salisburySteak->getIngredients() as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
    <div class="instructions">
        <h3>Instructions</h3>
        <?php
        foreach ($salisburySteak->getInstructions() as $instruction) {
            echo "<p>$instruction</p>";
        }
        ?>
    </div>
</div>

</div>


            
</body>
</html>