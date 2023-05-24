<?php
/* Cookies */

setcookie('name', 'Umayr', time() +86400 * 30);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
};

//unset the cookie
// setcookie('name', '', time() -86400 * 30);

/*
In the code snippet provided, 
the time() function is used to generate a timestamp that represents the current time. This timestamp is then used in conjunction with some arithmetic to calculate a future timestamp, which is used as the expiration time for the cookie.

The time() function returns the current Unix timestamp, 
which is the number of seconds that have elapsed since the Unix epoch (January 1, 1970, at 00:00:00 UTC). In this case, the time() function is being used to get the current time, and the result is added to the number of seconds in 30 days (86400 seconds per day) to calculate a timestamp that represents 30 days in the future.

This future timestamp is then passed as the third argument to the setcookie() function, 
which sets a cookie named 'name' with the value 'Umayr' and an expiration time of 30 days in the future. The isset() function is then used to check if the cookie exists, and if it does, the value of the cookie is printed using echo.
*/