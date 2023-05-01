# PHP-assessment
This a pseudo code representing a login process and it's implementation using session.
It also contains a logout page too.
In the above implementation, we start the session on both pages and check if the username key is set in the session array to determine if the user is logged in. 
If the user is not logged in, they are redirected to the login page. 
When the user logs in, we set the username key in the session array and redirect them to the log out page. 
On the log out page, we provide a logout button that destroys the session when clicked and redirects the user to the login page.
