<?PHP 
    if( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'  && $_SERVER['HTTP_X_REQUESTED_WITH'] )
    {
        echo "ajax";
    } else {
        echo "nao ajax";
    } 
?>