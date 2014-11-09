<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Developer's best friend</title>
	<link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/default.min.css">
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <link rel="stylesheet" href="/resources/demos/style.css">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/AntColorPicker.css" rel="stylesheet">
<style type="text/css">
p
{

  margin-top: 7px;
  margin-botton: 7px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
}
a {
  color: white;
  text-decoration: none;
}
h2.a:hover {
  color: blue;
}

body {
background-color: white:;

}


</style>


    <script type="text/javascript" src="js/libs/external-libs/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/libs/external-libs/jquery-ui-1.10.4.min.js"></script>
    <script type="text/javascript" src="js/libs/external-libs/google-analytics.js"></script>
    <script type="text/javascript" src="js/libs/AntColorPicker.js"></script>
    <script type="text/javascript">

        //Sources code hightLight syntaxe
        hljs.initHighlightingOnLoad();

        $(document).ready(function() {
            //initialisation of AntColorPicker with customisation of labels
            $("#colorPicker").AntColorPicker(
                    {//Custom parameters
                        "labelClose":"Close color picker",
                        "labelRAZColor":"Clear field"
                    }
            );
        });
    </script>
<script>

  $(function() {

    var availableTags = [

     "add - Add file contents to the index", 
	 "bisect - Find by binary search the change that introduced a bug", 
	 "branch - List; create; or delete branches", 
	 "checkout - Checkout a branch or paths to the working tree", 
	 "clone - Clone a repository into a new directory", "commit - Record changes to the repository", 
	 "diff - Show changes between commits; commit and working tree; etc", 
	 "fetch - Download objects and refs from another repository", 
	 "grep - Print lines matching a pattern", 
	 "init - Create an empty Git repository or reinitialize an existing one", 
	 "log - Show commit logs", 
	 "merge - Join two or more development histories together", 
	 "mv - Move or rename a file; a directory; or a symlink", 
	 "pull - Fetch from and integrate with another repository or a local branch", 
	 "push - Update remote refs along with associated objects", 
	 "rebase - Forward-port local commits to the updated upstream head", 
	 "reset - Reset current HEAD to the specified state", 
	 "rm - Remove files from the working tree and from the index", 
	 "show - Show various types of objects", 
	 "status - Show the working tree status", 
	 "tag - Create; list; delete or verify a tag object signed with GPG"

    ];

    $( "#tags" ).autocomplete({

      source: availableTags

    });

  });

  </script>

</head>

<body>



<div style="font-family:'Arial',sans-Serif; width:800px; margin-left: 300px;  border: 1px solid gray;">	
<div style="width:830px;">	
<img src="logo.jpg" alt="logo">

<div style="width:790px;  margin-top: -5px; margin-bottom: 10px; padding-top: 5px; padding-left: 10px; background-color: #395fa8; height: 40px;">	
<span style="color: white;"><a href="/">Home</a> &nbsp;&nbsp;&nbsp; <a href="/">Text Gen</a>&nbsp;&nbsp;&nbsp; 
	<a href="/">Fake Users</a>&nbsp;&nbsp;&nbsp;
	<a href="/">Users CSV</a>&nbsp;&nbsp;&nbsp; <a href="/">Color Picker</a>&nbsp;&nbsp;&nbsp; <a href="/">Git Commands</a>
	&nbsp;&nbsp;&nbsp; <a href="/">Random Passwords</a>
</span>
</div>
<div style="width:780px;  margin: 10px;">	
	<p>Welcome to your new Best Friend. Below are some automated helpers for some common web development needs. </p>
  <p>For example, if you are setting up a database and need to test with some user data, you can generate users below as either text on the page
  or in a csv file for downloading. </p>
  <p>How often do you need a quick color value? Just click in the text field in the color picker and choose a color and you will see its
  hex value.</p>
  <p>Forget those pesky git commands? Just start typing something you remember doing and the command and description will appear.</p>
  <p>Need some dummy, or greeking text to fill in your pages? just enter the number of paragraphs you would like generated!</p>
  <p>Need a complex password or passphrase? Just tell the xkcd password generator how namy words your passphrase should contain, and it will be
    generated for you.</p>
  <p> Enjoy!</p>
	<div class="ui-widget">

  <!--<label for="tags">Git Commands: </label>-->

  <h3>Git Commands</h3>
  Start typing a git command or action <input id="tags">

<!--/////////////////</div>-->
	<h3>Color Picker</h3>
	Choose colors to get their hex values <input id="colorPicker" />
@yield ('generator') 
<!--<div id="stuff" style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-bottom: 20px; padding-right: 20px;">	
<h3>Output:</h3>
<br>-->
@yield ('generator2')

@yield ('users')

@yield ('csv')

@yield ('password')
<p>&nbsp;</p>

<script type="text/javascript">
//initialisation of AntColorPicker with customisation of labels
$("#colorPicker").AntColorPicker(
    //Custom parameters
    {
        "labelClose":"Close color picker",
        "labelRAZColor":"Clear field"
    }
);
</script>
       
</div>
</div>


</div>
<!--<input id="colorPicker" />-->
</div>

<!--/////////////////-->
</body>
</html>

