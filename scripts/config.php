<?php
/*
 *    Autor        : Dennis1993
 *    Copyright    : (c) 2011 by Dennis1993
 */
defined('SECURE') or die('Der direkte Zugriff auf diese Datei ist nicht erlaubt!');


/**
 *    DB-Zugangsdaten
 */
$config['sql_hostname'] = 'localhost';    //MySQL-Server
$config['sql_username'] = 'root';        //Benutzername
$config['sql_password'] = 'JoJo1601';        //Kennwort
$config['sql_database'] = 'poetry_slam';        //Datenbank


/**
 *    Fehlerbehandlung
 */
error_reporting(E_ALL);
ini_set('display_errors', false);


/**
 *    Verbindungsaufbau
 */
$SQL = new MySQLi($config['sql_hostname'], $config['sql_username'], $config['sql_password'], $config['sql_database']);

if(mysqli_connect_errno() != 0 || !$SQL->set_charset('utf8'))
{
    die('<strong>ERROR:</strong> Es konnte keine Verbindung mit dem Datenbank-Server hergestellt werden!');
}

?>