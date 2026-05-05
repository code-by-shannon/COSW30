<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Build Your Fender</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
    <h1>Build Your Fender Style Guitar</h1>

<!-- FORM -->
<form action="invoice.php" method="POST">

    <!-- User Info -->
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <!-- Model Select -->
    <h3>Select Model:</h3>
    <input type="radio" name="model" value="Strat" required> Stratocaster<br>
    <input type="radio" name="model" value="Tele"> Telecaster<br>
    <input type="radio" name="model" value="Mustang"> Mustang<br>
    <input type="radio" name="model" value="Jaguar"> Jaguar<br>
    <input type="radio" name="model" value="Esquire"> Esquire<br><br>

    <!-- Body Type -->
    <label>Body Type:</label>
    <select name="body" required>
        <option value="">Select</option>
        <option value="Alder">Alder</option>
        <option value="Ash">Ash</option>
    </select><br><br>

    <!-- Neck -->
    <label>Neck:</label>
    <select name="neck" required>
        <option value="">Select</option>
        <option value="Maple">Maple</option>
        <option value="Rosewood">Rosewood</option>
    </select><br><br>

    <!-- Pickups -->
    <label>Pickups:</label>
    <select name="pickups" required>
        <option value="">Select</option>
        <option value="Lace Sensor">Lace Sensor</option>
        <option value="Twisted Tele">Twisted Tele</option>
        <option value="Tex Mex">Tex Mex</option>
        <option value="Vintage">Vintage</option>
    </select><br><br>

    <!-- Color -->
    <label>Color:</label>
    <select name="color" required>
        <option value="">Select</option>
        <option value="Black">Black</option>
        <option value="Sunburst">Sunburst</option>
        <option value="Olympic White">Olympic White</option>
    </select><br><br>

    <!-- Optional Add-ons -->
    <h3>Optional Add-ons:</h3>

    <input type="checkbox" name="addons[]" value="Locking Tuners"> Locking Tuners<br>
    <input type="checkbox" name="addons[]" value="Premium Pickups"> Premium Pickups<br>
    <input type="checkbox" name="addons[]" value="Hard Case"> Hard Case<br>
    <input type="checkbox" name="addons[]" value="Strap"> Strap<br>
    <input type="checkbox" name="addons[]" value="Custom Finish"> Custom Finish<br>
    <input type="checkbox" name="addons[]" value="Relic Job"> Relic Job<br>
    <input type="checkbox" name="addons[]" value="Coil Split"> Coil Split<br>
    <input type="checkbox" name="addons[]" value="Tremolo Upgrade"> Tremolo Upgrade<br><br>

    <button type="submit">Build My Guitar</button>

</form>
</div>
    
</body>

</html>