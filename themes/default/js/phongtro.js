/**
 * @Project NUKEVIET 4.x
 * @Author Lê Hồng Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 Lê Hồng Quang. All rights reserved
 * @Createdate Sat, 12 May 2018 19:03:53 GMT
 */

$(document).ready(function() {    
    $('#upload_fileupload').change(function(){
        $('#file_name').val($(this).val().match(/[-_\w]+[.][\w]+$/i)[0]);
    });
});