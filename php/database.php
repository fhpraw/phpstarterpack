<?php
// make connection
$connection = mysqli_connect(
    DBHOST,
    DBUSER,
    DBPASS,
    DBNAME
);

// Check connection
if ( !$connection ) {
    die("Connection failed: " . mysqli_connect_error());
    mysqli_close($connection);
}

// run query
function query(
    $sql
)
{
    global $connection;

    $query_result = mysqli_query($connection, $sql);
    
    if ( !$query_result ) {
        die("Error: " . $sql . "<br>" . mysqli_error($connection));
        mysqli_close($connection);
    }

    return $query_result;

}

// convert query result into array
function getArray2d (
    $query_result
)
{
    $array2d = array();

    if ( mysqli_num_rows ($query_result) > 0 ) {

        while ( $row = mysqli_fetch_assoc ( $query_result ) ) {
            array_push( $array2d, $row );
        }

    }

    return $array2d;
}
