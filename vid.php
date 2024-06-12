<html>
    <body style="margin: 1px">
    <?php
// index.php

// Check if the 'test' GET parameter is set
if (isset($_GET['vidid'])) {
    // Retrieve the value of the 'test' parameter
    $vidid = $_GET['vidid'];

    // Sanitize the input to prevent XSS
    $vidid = htmlspecialchars($vidid, ENT_QUOTES, 'UTF-8');

    // Display the value
//    echo "<h1>The value of the 'test' parameter is: $vidid</h1>";
} else {
    echo "<h1>No 'test' parameter provided!</h1>";
}

if (isset($_GET['username'])) {
    // Retrieve the value of the 'test' parameter
    $username = $_GET['username'];

    // Sanitize the input to prevent XSS
    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

    // Display the value
//    echo "<h1>The value of the 'userid' parameter is: $username</h1>";
} else {
    echo "<h1>No 'userid' parameter provided!</h1>";
}

?>

	

<!--    testTikTok2.html
    This is test tiktok 2-->
    

        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@<?php echo $username; ?>/video/<?php echo $vidid; ?>" data-video-id="<?php echo $vidid; ?>" style="max-width: 605px;min-width: 325px; margin: 0px auto" > 
        
        	<section> 
        		<a target="_blank" title="@shortfilm.mp4" href="https://www.tiktok.com/@<?php echo $username; ?>?refer=embed">@<?php echo $username; ?></a> Video Title
        		
        	</section> 
        
        </blockquote> 
        <script  src="https://www.tiktok.com/embed.js"></script>

    </body>
</html>