<?php
/**
 * The $_COOKIE superglobal contains all the cokie data stored in the browser
 * (when the browser is the http client), stored by the same host, through the 
 * response headers or JavaScript
 * 
 * The $_GET superglobal will be explained in their file, but now we are using
 * to access to the value of the input component of name='refcode'
 */
if (array_key_exists('refcode', $_GET)) {
    // store for 30 days
    setcookie('ref', $_GET['refcode'], time() + 60 * 60 * 24 * 30);
    echo sprintf('<p>The referal code [%s] was stored in a cookie. ' .
        'Reload the page to see the cookie value above. ' .
        '<a href="super-cookie.php">Clear the query string</a>.</p>', $_GET['refcode']);
} else {
    echo sprintf('<p>No referal code was set in query string</p>');
}

echo sprintf(
    '<p>Referral code (sent by browser as cookie): [%s]</P',
    array_key_exists('ref', $_COOKIE) ? $_COOKIE['ref'] : '-None-'
);
?>
<br>
<form action="super-cookie.php" method="get">
    <input type="text" name="refcode" placeholder="EVENT19" value="EVENT19">
    <input type="submit" value="Apply referral code">
</form>