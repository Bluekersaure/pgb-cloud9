<?php
    // Connect to the database
    $myHost = "127.0.0.1";                         // Sets localhost
    $myUser = getenv('C9_USER');                   // Your Cloud 9 username
    $myPass = "";                                  // Remember, there is NO password!
    $myDatabase = "cp12";                          // Your database name you want to connect to
    $myTable = "cp12Data";                         // Your database table
    $myPort = 3306;                                // The port #. It is always 3306
    $myConnection = mysqli_connect($myHost, $myUser, $myPass, $myDatabase, $myPort)or die(mysql_error());
    // And now to perform a simple query to make sure it's working
    $myQuery = "SELECT * FROM $myTable";
    $myResult = mysqli_query($myConnection, $myQuery);
    while ($myRow = mysqli_fetch_assoc($myResult)) {
        echo "The ID is: " . $myRow['myID'] . " and the Username is: " . $myRow['myName']. "<br>";
    }
?>
