<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Lê Hồng Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 Lê Hồng Quang. All rights reserved
 * @Createdate Sat, 12 May 2018 19:03:53 GMT
 */

if ( ! defined( 'NV_IS_MOD_RSS' ) ) die( 'Stop!!!' );

$rssarray = array();

/*$result2 = $db->query( 'SELECT catid, parentid, title, alias, numsubcat, subcatid FROM ' . NV_PREFIXLANG . '_' . $module_data . '_cat ORDER BY weight' );
while ( list( $catid, $parentid, $title, $alias, $numsubcat, $subcatid ) = $result2->fetch( 3 ) )
{
    $rssarray[$catid] = array(
        'catid' => $catid, 'parentid' => $parentid, 'title' => $title, 'alias' => $alias, 'numsubcat' => $numsubcat, 'subcatid' => $subcatid, 'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_title . '&amp;' . NV_OP_VARIABLE . '=rss/' . $alias
    );
}*/
