<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Lê Hồng Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 Lê Hồng Quang. All rights reserved
 * @Createdate Sat, 12 May 2018 19:03:53 GMT
 */

if ( ! defined( 'NV_IS_FILE_SITEINFO' ) ) die( 'Stop!!!' );


$lang_siteinfo = nv_get_lang_module( $mod );
/*
// Tong so bai viet
$number = $db->query( 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_rows where status= 1 AND publtime < ' . NV_CURRENTTIME . ' AND (exptime=0 OR exptime>' . NV_CURRENTTIME . ')' )->fetchColumn();
if ( $number > 0 )
{
    $siteinfo[] = array(
        'key' => $lang_siteinfo['siteinfo_publtime'], 'value' => $number
    );
}
*/