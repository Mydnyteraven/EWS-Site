<html>
<body>
<?php get_post_permalink( $id); ?>
Your title is: <?php echo $_POST["storytitle"]; ?><br>
It is a <?php echo $_POST["worktype"]; ?> in the <?php echo $_POST["genre"]; ?> genre.


<div id="storyname"> Sample Title for Repl <?php echo $_POST["storytitle"]; ?> </div>
<div id="storychapter"> This is the box full of the story content. </div>
<button> New Chapter? </button>

</body>

<p> This Repl.it does not have php integreation, but this code does work. (it's super simple) Now to get this to post to some sort of link. Privacy and drafts, complete the form. So many variables.</p>

    The goal is to create a kind of double form. GET (which posts to a url) can be bookmarked and I want to use this for the Title, worktype, etc, but for the content and author's name, I want to use the more secure POST method.
</html>