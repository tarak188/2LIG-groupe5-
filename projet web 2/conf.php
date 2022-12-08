<?php
require('login.php');
session_start();
$m=$_post['m'];
$p=$_post['p'];
$req="select * form inscrit where $m=email and $p=mdp"
$res=mysqli_query($conn,$req)
if($res){
    header('Untitled-1.html');
}else { "<div> <h3>compte n'est valider</h3> </div>"; }

<?
