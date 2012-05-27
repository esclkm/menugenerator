<?php
/* 
 * [BEGIN_COT_EXT]
 * Hooks=rc
 * [END_COT_EXT]
 */

/**
 * Menu Generator for Cotonti CMF
 *
 * @version 2.1
 * @author esclkm, http://www.littledev.ru
 * @copyright (c) 2008-2011 esclkm, http://www.littledev.ru
 */

defined('COT_CODE') or die('Wrong URL');
if($cfg['plugin']['menugenerator']['css'])
{
	cot_rc_add_file($cfg['plugins_dir'] . '/menugenerator/tpl/menugenerator.css');
}

?>