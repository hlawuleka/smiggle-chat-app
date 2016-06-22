<?php
if(!mysql_connect("localhost","root","root"))
{
     die('Can not connect the database, look at: '.mysql_error());
}
if(!mysql_select_db("smiggle"))
{
     die('Can not find the database, look at:  '.mysql_error());
}
?>