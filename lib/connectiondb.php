<?php

$db_path = $_SERVER['DOCUMENT_ROOT'] . '/sqlite.db';

$pdo = new PDO('sqlite:'.$db_path);

$query =    "
                CREATE TABLE IF NOT EXISTS audit_posts(
                                                        id integer primary key,
                                                        name text,
                                                        url text,
                                                        date date);
                CREATE TABLE IF NOT EXISTS buh_posts(
                                                    id integer primary key,
                                                    name text,
                                                    url text,
                                                    date date);
                CREATE TABLE IF NOT EXISTS info_posts(
                                                    id integer primary key,
                                                    name text,
                                                    url text,
                                                    date date);
                CREATE TABLE IF NOT EXISTS price_posts(
                                                    id integer primary key,
                                                    name text,
                                                    url text,
                                                    date date);
                CREATE TABLE IF NOT EXISTS spend_posts(
                                                    id integer primary key,
                                                    name text,
                                                    url text,
                                                    date date);
            ";

$pdo->exec($query);

?>