<?php
if (!session_start()) {
    echo 'Cannot start the session.';
    return;
}

$sessionName = session_name(); //Name will be PHPSESSID by default, where PHPSESSIS is 'PHP session id'

if (array_key_exists($sessionName, $_COOKIE)) {
    echo sprintf('<p>The cookie with session name [%s] and value [%s]' .
        ' is set in browser, and sent to the script.</p>', $sessionName, $_COOKIE[$sessionName]);
    echo sprintf('<p>The current session has the following data: <pre>%s</p>', var_export($_SESSION, true));
} else {
    echo sprintf('<p>The cookie with session name [%s] does not exists.</p>', $sessionName);

    echo sprintf(
        '<p> A new cookie will be set for session name [%s], with value [%s] </p>',
        $sessionName,
        session_id() // returns the current session ID that belongs to the user that is accessing the page only.
        // session_is its generated each time session_start() is invoked and at the same time no cookie with 
        // sesssion ID is found in the HTTP request.
    );

    $names = [
        "A-Bomb (HAS)",
        "Captain America",
        "Black Panther",
    ];
    $chosen = $names[rand(0, 2)];
    $_SESSION['name'] = $chosen;

    echo sprintf('<p>The name [%s] was picked and stored in the current session. </p>', $chosen);
    echo sprintf('List of headers to send in response: <pre>%s</pre>', implode("\n", headers_list()));
}
