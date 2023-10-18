<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <head>Welcome to the Home Page</head>
<body>

<?php
echo "<form action='http://127.0.0.1:8000/subscriptions'>";
echo "<input type='submit' value='Subscriptions' />";
echo "</form>";

echo "<form action='http://127.0.0.1:8000/activity'>";
echo "<input type='submit' value='Activity' />";
echo "</form>";

echo "<form action='http://127.0.0.1:8000/accounts'>";
echo "<input type='submit' value='Accounts' />";
echo "</form>";

echo "<form action='http://127.0.0.1:8000/about'>";
echo "<input type='submit' value='About Us' />";
echo "</form>";
?>

</body>
</html>


