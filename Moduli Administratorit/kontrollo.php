<?php
/* Kontrollon sesionin */
include('konfig.php');
session_start();
$kontrollo_prd=$_SESSION['nr_identifikues'];
$ses_sql = mysqli_query($kon_b,"CALL selektKontrollo('$kontrollo_prd')");
$rresht=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$perdoruesi_kyces=$rresht['emri'];
if(!isset($kontrollo_prd))
{
header("Location: index.php");
} ?>