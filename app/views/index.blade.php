
	
@extends('_master')

@section ('generator')


<h3>Get dummy text</h3>

    <form method='GET' action='/lorem'>
    Number of dummy paragraphs &lt; 21: <input type='text' name='num' id='num'>
    <input type='submit' value = ' Get  text '>
    </form>

<h3>Get some users</h3>

    <form method='GET' action='/users'>
    Enter number of random users &lt; 51: <input type='text' name='numusers' id='numusers'>
    <input type='submit' value = 'Get  Users'>
    </form>

    <h3>Get CSV of users</h3>

    <form method='GET' action='/csv'>
    Enter number of random users &lt; 51: <input type='text' name='numusers' id='numusers2'>
    <input type='submit' value = ' Get  CSV '>
    </form>

<h3>Get xkcd password</h3>

    <form method='GET' action='/password'>
    Number of words for password &lt; 10: <input type='text' name='numofwords' id='numofwords'>
    <input type='submit' value = 'Get pword'>
    </form>

<?php 
/*
echo '<br>';
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);
*/
?>






@stop

