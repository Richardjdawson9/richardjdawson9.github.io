<title>Let Me Be Bundt</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Homemade Bundt Cakes... All From Scratch!">
<meta name="keywords" content="BundtCake, Cake, Bundt">
<meta name="author" content="Lilly Dawson">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
textarea {
  width:210px;
  height:100px                                                                                                                                                                                                                               }
[type=submit] {
  width:210px;
  height:50px;
}
form {
  padding: 0.5rem;
}
form span {
  font-size: 200%;
}
</style>
<body>

<?php
// Check if the form was submitted
if(isset($_REQUEST['submit'])) {
  // Set $fullName to the contents of the fullName field
  $fullName = $_REQUEST['fullName'];
  // Set $email to the contents of the email field
  $email = $_REQUEST['email'];
  // Set $comments to the contents of the comments field
  $comments = $_REQUEST['comments'];

  // Print out the information to the screen (for testing)
  echo "<div style='width:500px; margin:auto; padding:0.5rem; border:1px solid #000000;'>";
  echo "Full Name: $fullName<br>";
  echo "Email Address: $email<br>";
  echo "Comments: $comments<br>";
  echo "</div><br>";

}
?>
  <div style='width:fit-content; width:--moz-fit-content; margin:auto; padding:0.5rem; border:1px solid #000000;'>
  <form action='<?php echo $_SERVER['PHP_SELF'];?>' method=POST>
    <span>Contact Us</span><br>
    <input type='text' name='fullName' placeholder='Full Name' required /><br>
    <input type='email' name='email' placeholder='Email Address' required /><br>
    <textarea name='comments' placeholder='Comments'></textarea><br>
    <input type='submit' name='submit' value='Submit' />
   </form>
  </div>
</body>
</html>
