<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/recipes.css">
    <title>Recipes</title>
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
                            ["1/2 c. all-purpose flour", 
                            "8 chicken cutlets or 4 chicken breasts, sliced in half (about 1.5 lbs)",
                             "Kosher salt and freshly ground black pepper", "2 tbsp. canola oil",
                              "2 tbsp. unsalted butter",
                               "1 (8-ounce) package sliced mushrooms" ,
                                "1/3 c. chopped onion (about 1/2 small onion)", 
                                "2 cloves garlic, chopped", 
                                "1/2 c. dry Marsala wine" , 
                                "3/4 c. chicken stock" ,
                                 "1/2 c. heavy cream
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
$chickenTortellini = new Recipe("Chicken-and-Spinach Tortellini Soup",  
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
$cobbSalad = new Recipe( "Basic Cobb Salad",
                                [ "1/4 c. red wine vinegar",
                                   "1 tbsp. Dijon mustard",
                                    "1/2 c. olive oil",
                                    "1 1/2 tsp. sugar ",
                                    "2 cloves garlic, minced",
                                    "1 tsp. fresh oregano, minced",
                                    "1 head romaine, chopped",
                                    "Kosher salt and freshy grated black pepper",
                                    "2 1/2 c. cubed rotisserie chicken breast (about 10 oz.)",
                                    "1/2 medium cucumber, halved and sliced",
                                    "4 hard-cooked eggs, quartered",
                                    "5 to 6 ounces cherry tomatoes, halved",
                                    "1 medium avocado, peeled and cubed",
                                    "2 to 3 ounces blue cheese, crumbled",
                                    "6 to 8 slices bacon, cooked",
                                ],
                                    [
                                        "Step 1,",
                                        "Make dressing: Whisk together vinegar and mustard in a bowl. Gradually whisk in in oil until blended. Stir in sugar, garlic, and oregano. Season with salt and pepper.",
                                        "Step 2, ",
                                        "Make salad: Arrange lettuce on a large platter. Top with rows of chicken, cucumber, eggs, tomatoes, avocado, cheese, and bacon. Drizzle with dressing and serve immediately.",
                                    ]
                                );


$friedRice = new Recipe("Fried Rice",  
                            ["1 tbsp. minced fresh ginger",
                            "1/2 c. frozen peas, defrosted",
                            "4 c. cooked rice",
                            "3 tbsp. soy sauce ",
                            "1 tbsp. sesame oil, plus more to taste",
                            "3 garlic cloves, minced",
                            "2 medium or 3 small carrots, diced",
                            "3 scallions, chopped, whites and green separated",
                            "1/2 red bell pepper, diced",
                            "3 slices bacon, diced",
                            "2 large eggs, beaten",
                            "2 tbsp. canola oil",
                            ],
                            [   "Step 1,",
                             "Heat canola oil in a large skillet over medium heat. Add eggs and cook, stirring, until curds are light and fluffy, 2 to 3 minutes, transfer to a plate. Add bacon to skillet and cook until crisp, 5 to 6 minutes. ",
                                "Step 2, ",
                                "Add pepper, scallion whites, and carrots, and cook, stirring occasionally, until soft, 5 to 6 minutes. Add garlic and ginger and cook until fragrant, 1 to 2 minutes. ",
                                "Step 3,",
                                 "Reduce heat to medium-low and add peas and rice. Cook, stirring occasionally, until warmed through, 4 to 5 minutes. Fold in eggs and season with soy sauce and sesame oil. Serve immediately topped with scallion greens and more sesame oil alongside",
                            ]);   
                            
$beefBroccoli = new Recipe("Beef and Broccoli Stir-Fry",  
                            ["1/3 c. chicken stock",
                            "1/4 c. soy sauce",
                            "1 tbsp. plus 1 teaspoon pure honey",
                            "1 tsp. toasted sesame oil ",
                            "1 tbsp. plus 1 teaspoon cornstarch",
                            "12 oz. flank steak, thinly sliced",
                            "2 tbsp. canola oil",
                            "Kosher salt and freshy grated black pepper",
                            "12 oz. broccoli florets, halved if large",
                            "1 one-inch pieces fresh ginger, peeled and minced",
                            "3 cloves garlic, minced",
                            "Hot cooked rice, toasted sesame seeds, sliced scallions, and lime wedges, for serving",
                            ],
                            [   "Step 1,",
                             "Whisk together stock, soy sauce, honey, sesame oil, and cornstarch in a bowl until cornstarch is dissolved.",
                                "Step 2, ",
                                "Season steak with salt and pepper. Heat oil in a large skillet over high heat. Add steak and cook, stirring occasionally, until almost cooked through, 2 to 3 minutes; transfer to a plate using tongs. Reduce heat to medium-high. Add broccoli and season with salt. Cook, stirring often, until broccoli is crisp-tender, 2 to 3 minutes (you can add a few tablespoons of water if pan starts to get too dark). Add ginger and garlic. Cook, stirring, until fragrant, 30 seconds to 1 minute.  ",
                                "Step 3,",
                                 "Whisk sauce and add to pan with steak and any accumulated juices. Cook, stirring, until sauce is thickened and steak is warm, about 1 minute.",
                                "Step 4,",
                                " Serve over rice topped with sesame seeds and scallions with lime wedges alongside."
                            ]);
$pastaSalad = new Recipe(
                                "Caprese Pasta Salad",
                                [
                                    "1 lb. short pasta, such as penne rigate",
                                    "1/2 c. white balsamic vinegar",
                                    "1/4 c. olive oil",
                                    "1 1/2 tsp. sugar ",
                                    "2 tbsp. pure honey",
                                    "1 lb. grape or cherry tomatoes, halved",
                                    "8 oz. perline (pearl-size) mozzarella balls, drained, or 8 ounces fresh mozzarella, torn",
                                    "Kosher salt and freshy grated black pepper",
                                    "1/2 c. loosely packed fresh basil, torn into large pieces",
                                ],
                                    [
                                        "Step 1,",
                                        "Bring a large pot of salted water to a boil over high heat. Cook pasta according to package directions; drain. ",
                                        "Step 2, ",
                                        "Meanwhile, whisk together vinegar, oil, and honey in a bowl. Season with salt and pepper. Add hot pasta, tomatoes, and mozzarella balls; toss gently to coat. Add basil and toss to combine. Serve chilled or at room temperature.",
                                    ]
                                );
$crispyChicken = new Recipe( "Crispy Chicken Thighs with Garlic and Rosemary",
                                    [
                                        "1/3 c. chicken stock",
                                        "2 tbsp. fresh lemon juice",
                                        "1 tbsp. Dijon mustard",
                                        "1 tbsp. fresh rosemary ",
                                        "1/4 tsp. red pepper flakes",
                                        "Kosher salt and freshly-ground black pepper",
                                        "8 small bone-in, skin-on chicken thighs (about 2 1/4 pounds total)",
                                        "8 cloves garlic, smashes and skins removed",
                                    ],
                                        [
                                            "Step 1,",
                                            "Whisk together stock, lemon juice, mustard, rosemary, and pepper flakes in a bowl. Season with salt.  ",
                                            "Step 2, ",
                                            "Heat a 12-inch cast-iron skillet over medium heat until hot, 1 to 2 minutes. Season chicken with salt and pepper. Place, skin sides down, in the skillet. Place a second smaller skillet on top of chicken and weigh it down with soup cans. Cook until the skins are golden brown and crisp, 7 to 9 minutes. ",
                                            "Step 3,",
                                            "Remove cans and top skillet. Flip chicken and reduce heat to medium-low. Add garlic and cook until the chicken is cooked through, 2 to 3 minutes. Transfer chicken to a platter; reserve skillet. Add stock mixture to reserved skillet. Cook, scraping up any brown bits, until slightly thickened, 1 to 2 minutes. Spoon over chicken."
                                        ]
                                    );
?>
<div class="hero">
<nav>
    <h2 class = "logo">Infused<span>Recipes</span></h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="recipes.php">Recipes</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
    <a href="#" class="btn">Subscribe</a>
</nav>
<div class = "container">
<h1>Quick and Easy Dinner Ideas</h1>
<h3>for Time-Crunched Weeknights</h3>
<h4>Search your Favorite Recipe below</h4>
</div>
</div>

</body>
</html>