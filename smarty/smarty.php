<?php
    function smarty($tpl){
        if(file_exists($tpl)){
           $content = file_get_contents($tpl);
           $content = preg_replace('/{loop\s+(\S+)\s+(\S+)}/','<?php if(is_array($1)) { foreach($1 as $2) { ?>',$content);
           $content = preg_replace('/{loop\s+(\S+)\s+(\S+)\s+(\S+)}/','<?php if(is_array($1)) { foreach($1 as $2 => $3) { ?>',$content);
           $content = preg_replace('/{\/loop}/','<?php } } ?>',$content);
           $content = preg_replace('/{(\$[a-zA-Z_\x7f-\xff][a-z0-9A-Z_\x7f-\xff]*)}/','<?php echo $1; ?>',$content);
           $content = preg_replace('/{(\$[a-zA-Z_\x7f-\xff][a-z0-9A-Z_\x7f-\xff\[\]\'\"\$]*)}/','<?php echo $1 ; ?>',$content);

           file_put_contents('template/'.$tpl.'.php',$content);
           return 'F:/projects/javascript/smarty/template/'.$tpl.'.php';
        }
    }