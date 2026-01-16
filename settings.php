<?php
/*
TinyIB - Configurado para Jorgechan
*/

// Internationalization
define('TINYIB_LOCALE', '');            
define('TINYIB_TIMEZONE', 'America/Sao_Paulo'); 
define('TINYIB_DATEFMT', '%d/%m/%y(%a)%H:%M:%S'); 

// Board description and behavior
define('TINYIB_BOARD', 'b');          
define('TINYIB_BOARDDESC', 'Jorgechan'); 
define('TINYIB_BOARDTITLE', 'Jorgechan - A desunião perfeita');      
define('TINYIB_ALWAYSNOKO', true);   
define('TINYIB_CAPTCHA', '');         
define('TINYIB_REPLYCAPTCHA', '');    
define('TINYIB_REPORTCAPTCHA', '');   
define('TINYIB_MANAGECAPTCHA', '');   
define('TINYIB_REPORT', true);       
define('TINYIB_AUTOHIDE', 5);         
define('TINYIB_REQMOD', '');          
define('TINYIB_BANMESSAGE', true);    
define('TINYIB_UPDATEBUMPED', true);  
define('TINYIB_SPOILERTEXT', true);  
define('TINYIB_SPOILERIMAGE', true); 
define('TINYIB_AUTOREFRESH', 30);     
define('TINYIB_CLOUDFLARE', false);   
define('TINYIB_DISALLOWTHREADS', ''); 
define('TINYIB_DISALLOWREPLIES', ''); 

// Board appearance
define('TINYIB_INDEX', 'index.html'); 
// CONFIGURAÇÃO DO JORGITO.GIF ABAIXO:
define('TINYIB_LOGO', '<img src="/jorgito.gif" alt="Jorgito" style="width:120px; image-rendering:pixelated; margin-bottom:10px;">'); 
define('TINYIB_THREADSPERPAGE', 10);  
define('TINYIB_PREVIEWREPLIES', 3);   
define('TINYIB_TRUNCATE', 15);        
define('TINYIB_WORDBREAK', 80);       
define('TINYIB_EXPANDWIDTH', 85);     
define('TINYIB_BACKLINKS', true);     
define('TINYIB_CATALOG', true);       
define('TINYIB_JSON', true);          
define('TINYIB_DEFAULTSTYLE', 'futaba'); 

$tinyib_hidefieldsop = array();       
$tinyib_hidefields = array();         
$tinyib_anonymous = array('Anônimo'); 
$tinyib_capcodes = array(array('Admin', 'red'), array('Mod', 'purple')); 

$tinyib_stylesheets = array(
	'futaba' => 'Jorgechan Verde',
	'burichan' => 'Burichan'
);

// Post control
define('TINYIB_DELAY', 10);           
define('TINYIB_MAXTHREADS', 100);     
define('TINYIB_MAXREPLIES', 0);       
define('TINYIB_MAXNAME', 75);         
define('TINYIB_MAXEMAIL', 320);       
define('TINYIB_MAXSUBJECT', 75);      
define('TINYIB_MAXMESSAGE', 8000);    

// Upload types
$tinyib_uploads = array('image/jpeg' => array('jpg'),
                        'image/pjpeg' => array('jpg'),
                        'image/png' => array('png'),
                        'image/gif' => array('gif'));

// oEmbed APIs
$tinyib_embeds = array('YouTube' => 'https://www.youtube.com/oembed?url=TINYIBEMBED&format=json');

// File control
define('TINYIB_MAXKB', 5120);         // Aumentado para 5MB
define('TINYIB_MAXKBDESC', '5 MB');   
define('TINYIB_THUMBNAIL', 'gd');     
define('TINYIB_UPLOADVIAURL', false); 
define('TINYIB_STRIPMETADATA', false);
define('TINYIB_NOFILEOK', false);     

// Thumbnail size
define('TINYIB_MAXWOP', 250); define('TINYIB_MAXHOP', 250);
define('TINYIB_MAXW', 250); define('TINYIB_MAXH', 250);

// Tripcode seed - MUDE ISSO PARA QUALQUER TEXTO ALEATÓRIO
define('TINYIB_TRIPSEED', 'linkpark_jorge_chan_seed_123'); 

// Management panel
define('TINYIB_ADMINPASS', 'linkpark1'); // Sua senha
define('TINYIB_MODPASS', '');          

// Database - CONFIGURADO PARA MYSQLI (INFINITYFREE)
define('TINYIB_DBMODE', 'mysqli');     
define('TINYIB_DBACCOUNTS', 'accounts'); 
define('TINYIB_DBBANS', 'bans');         
define('TINYIB_DBKEYWORDS', 'keywords'); 
define('TINYIB_DBLOGS', 'logs');         
define('TINYIB_DBPOSTS', TINYIB_BOARD . '_posts');     
define('TINYIB_DBREPORTS', TINYIB_BOARD . '_reports'); 
define('TINYIB_DBMIGRATE', false);       

// Database configuration - PREENCHA COM OS DADOS DO PAINEL DA INFINITYFREE
define('TINYIB_DBHOST', 'sqlXXX.infinityfree.com'); // Substitua pelo seu Host
define('TINYIB_DBPORT', 3306);        
define('TINYIB_DBUSERNAME', 'if0_XXXXXXXX');       // Substitua pelo seu Usuário
define('TINYIB_DBPASSWORD', 'sua_senha_aqui');     // Senha do painel
define('TINYIB_DBNAME', 'if0_XXXXXXXX_jorgechan'); // Nome do banco criado
