<meta name="description" content="<?php echo $seo_description; ?>">
<?php
    switch ($seo_index) {
        case 'i':
            echo '<meta name="robots" content="all">';
            break;

        case 'ni':
            echo '<meta name="robots" content="noindex, follow">';
            break;

        case 'ninf':
            echo '<meta name="robots" content="noindex, nofollow">';
            break;
        
        default:
            echo '<!-- ERROR: WRONG VALUE OF $seo_index = ' . $seo_index . ' -->';
            break;
    }
?>