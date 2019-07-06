<?php
    define("DB_HOST","localhost");
    define("DB_PORT",5432);
    define("DB_USER","root");
    define("DB_PASS","XXmxcatXX");
    define("DB_NAMEDB","dbsistema_red_social_musica");
    define("DB_CHARTSET","utf8");
    define("DB_TYPE","mysql");
    define("DB_DSN",DB_TYPE.":dbname=".DB_NAMEDB.";host=".DB_HOST);
//    define("DB_DSN",DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAMEDB);