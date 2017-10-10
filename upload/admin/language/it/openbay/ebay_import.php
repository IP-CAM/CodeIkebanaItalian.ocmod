<?php
// Heading
$_['heading_title']                     = 'Importa Oggetti';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Attenzione!</strong> Questo Importer&agrave Tutti i vostri prodotti da ebay e costruir&agrave tutte le relative Categorie nel vostro negozio, Si consiglia di eliminare tutte le categorie e prodotti prima di eseguire questa opzione. <br /> La struttura delle categorie &egrave tra le categorie normali di eBay, non le categorie del negozio (se si dispone di un negozio eBay). &Egrave possibile rinominare, eliminare e modificare le categorie importati senza influenzare i vostri prodotti su eBay .';
$_['text_sync_import_line3']            = 'You need to ensure your server can accept and process large POST data sizes. 1000 eBay items is about 40Mb in size, you will need to calculate what you require. If your call fails then it is likely your setting is too small. Your PHP memory limit needs to be about 128Mb.';
$_['text_sync_server_size']             = 'Attualmente il server lo pu&ograve accettare: ';
$_['text_sync_memory_size']             = 'Your PHP memory limit: ';
$_['text_import_confirm']				= 'Questo importerà tutti i tuoi oggetti eBay come nuovi prodotti, sei sicuro? Questa azione  non pu&ograve essere annullata! Verificare di disporre di una copia di backup prima!';
$_['text_import_notify']				= 'La tua richiesta di importazione &egrave stata inviata per l\'elaborazione. L\'importazione durer&agrave circa 1 ora per 1000 pezzi.';
$_['text_import_images_msg1']           = 'images are pending import/copy from eBay. Refresh this page, if the number does not decrease then';
$_['text_import_images_msg2']           = 'Clicca Quì';
$_['text_import_images_msg3']           = 'and wait. More information about why this happened can be found <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">here</a>';

// Entry
$_['entry_import_item_advanced']        = 'Get advanced data';
$_['entry_import_categories']         	= 'Import categories';
$_['entry_import_description']			= 'Import item descriptions';
$_['entry_import']						= 'Import eBay items';

// Buttons
$_['button_import']						= 'Import';

// Help
$_['help_import_item_advanced']        	= 'Will take up to 10 times longer to import items. Imports weights, sizes, ISBN and more if available';
$_['help_import_categories']         	= 'Builds a category structure in your store from the eBay categories';
$_['help_import_description']         	= 'This will import everything including HTML, visit counters etc';

// Error
$_['error_import']                   	= 'Failed to load';
$_['error_maintenance']					= 'Your store is in maintenance mode. Importing will fail!';
$_['error_ajax_load']					= 'Failed to connect to server';
$_['error_validation']					= 'You need to register for your API token and enable the module.';