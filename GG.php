<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game By Vimal Kumar Singh 4a836e9f</title>
</head>
<body>
    <h1>Guessing Game</h1>

    <?php
    // Check if a guess parameter is provided in the URL
    if (!isset($_GET['guess'])) {
        echo "<p>Missing guess parameter</p>";
    } else {
        // Get the user's guess from the URL parameter
        $userGuess = $_GET['guess'];

        // Check if the guess is empty
        if (empty($userGuess)) {
            echo "<p>Your guess is too short</p>";
        } elseif (!is_numeric($userGuess)) {
            echo "<p>Your guess is not a number</p>";
        } else {
            // Generate a random number between 1 and 100
            $randomNumber = rand(1, 100);

            // Check if the guess is valid (between 1 and 100)
            if ($userGuess >= 1 && $userGuess <= 100) {
                // Check if the guess matches the random number
                if ($userGuess == $randomNumber) {
                    echo "<p>Congratulations! You guessed the correct number: $randomNumber</p>";
                } elseif ($userGuess < $randomNumber) {
                    echo "<p>Your guess is too low</p>";
                } else {
                    echo "<p>Your guess is too high</p>";
                }
            } else {
                echo "<p>Please enter a valid guess between 1 and 100.</p>";
            }
        }
    }
    ?>

    <form method="GET" action="">
        <label for="guess">Enter your guess (1-100):</label>
        <input type="number" id="guess" name="guess" min="1" max="100" required>
        <button type="submit">Submit Guess</button>
    </form>
</body>
</html>
