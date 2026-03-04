<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Martian Volunteers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class ="index">

<h1>Mars Human Colony Volunteer Registration</h1>

<form action="process_registration.php" method="POST">

    <!-- First Name -->
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name" required><br><br>

    <!-- Last Name -->
    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name" required><br><br>

    <!-- Email -->
    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <!-- Phone -->
    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>

    <!-- Age Range -->
    <label for="age_range">Age Range:</label><br>
    <select id="age_range" name="age_range" required>
        <option value="">-- Select Age Range --</option>
        <option value="18-21">18 - 21</option>
        <option value="21-29">21 - 29</option>
        <option value="30-39">30 - 39</option>
        <option value="40-49">40 - 49</option>
        <option value="50-59">50 - 59</option>
        <option value="60+">60 and over</option>
    </select><br><br>

    <!-- Family Status -->
    <label for="family_status">Family Status:</label><br>
    <select id="family_status" name="family_status" required>
        <option value="">-- Select Family Status --</option>
        <option value="1 Occupant">Singe Occupant</option>
        <option value="2 Occupants">Two Occupants</option>
        <option value="3 Occupants">Three Occupants</option>
        <option value="4 Occupants">4 Occupants</option>
    </select><br><br>

    <!-- Textarea -->
    <label for="reason">Describe why you should be picked for the Mars Human Colony:</label><br>
    <textarea id="reason" name="reason" rows="5" cols="40"></textarea><br><br>

    <!-- Terms Checkbox -->
    <input type="checkbox" id="terms" name="terms" value="Yes">
    <label for="terms">Accept terms of Volunteer Human Trial?</label><br><br>

    <!-- Submit -->
    <input type="submit" value="Submit Application">

</form>

</body>
</html>