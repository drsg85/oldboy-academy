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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K439Z9X');</script>
<!-- End Google Tag Manager -->