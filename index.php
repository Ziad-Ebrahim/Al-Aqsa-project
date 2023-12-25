<?php 

/* Creating Variables*/

$firstname = $_REQUEST['firstname']; /* variable that you create to store the name of inputs in HTML */
$secondname = $_REQUEST['secondname']; /* variable that you create to store the name of inputs in HTML */
$address = $_REQUEST['address'];    /* variable that you create to store the name of inputs in HTML */

/* ================================================== if condition for sending button =============================================== */

if(isset($_POST['btntest'])){ /* We use 'btntest' as the name of button in html with using if statement when condition is true*/

   /* you need to create variables of you database */
    $host = "localhost"; /*the host name of your localdatabase but if you have online host you can use it*/
    $user = "root"; /* The default name of each user table is root you can find it in PHP My Admin*/
    $password =""; /* let the value of password variable as null if u get password for your database no problem*/
    $db = "bis_program"; /* when you create a new database in your localhost then you must write the name of it here*/


    /* Now we need to make connection between php and our database then we will use mysqli_connect which is already syntax
    in php and the pramaters of it which variables: $host,$user,$password,$db*/
    @$conn= mysqli_connect($host,$user,$password,$db);
    /* Note: I used the sign of @ because I want to hide the statement of warning in the case of error like usign post
    in HTML to hide secrect info from users*/

    /* Now we need to insert values to DB after creating table but I want users who insert not me then i use $insert with
    this value and parameters are variable which created in the line 5 */
    $insert= "insert into studentsbis values('$firstname','$secondname','$address')";
    /* NOTE: not forget values after table name in this case I used studentsbis as table name in PHP My Admin then don’t forget to 
    write values word after it. Because withou it wll not provide you any udpdates inside your DB.
   
    /* Now we need to make query about our tables and insert also data then we will use mysqli_query not mysquli_connect */
    mysqli_query($conn,$insert);

    /* ============================================== if condition for making sure abour the registration done or not ===================== */

    /* NOTE: you can add html, CSS and JS inside your PHP file*/

    if($conn){
        /* you should know that echo is used to print any thing you wanna*/
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
    }
   
}
/* ============================================================ Thanks ❤ =================================================================*/
?>

