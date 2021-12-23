<?php
$stars = filter_input(INPUT_POST, 'stars', FILTER_SANITIZE_NUMBER_INT);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if (null === $stars) {
    // treat the case when does not exist
    echo '<p>Stars input is not set.</p>';
} else if (false === $stars) {
    // treat the case when the filter fails
    echo '<p>Stars failed to pass the sanitization filter.</p>';
} else {
    if ($stars < 1 || $stars > 5) {
        echo '<p>Stars can have values between 1 and 5.</p>';
    }
    if (0 === $stars) {
        echo '<p>Stars can have values between 1 and 5.</p>';
    }
}



if (null === $message) {
    // treat the case when input does not exist
    echo '<p>Message input is not set.</p>';
} else if (false === $message) {
    // treat the case when the filter fails
    echo '<p>Message failed to pass the sanitization filter.</p>';
}

echo sprintf("<p>Stars: %s</p> <p>Message %s</p>", var_export($stars, true), var_export($message, true));
?>

<form method="post">
    <label for="stars">Stars:</label><br>
    <input type="text" name="stars" id="stars"><br>
    <label for="message">Message:</label><br>
    <textarea name="message" id="message" rows="10" cols="40"></textarea><br>
    <input type="submit" value="Send">
</form>