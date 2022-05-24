<?php
    /* --- CSP --- */

    $csp_nonce = base64_encode(random_bytes(24));
    
    $csp_header = "Content-Security-Policy-Report-Only:";
    // $csp_header = "Content-Security-Policy:";
    $csp_header .= " default-src 'self';";
    $csp_header .= " form-action 'self';";
    $csp_header .= " style-src 'nonce-$csp_nonce' 'self' fonts.googleapis.com;";
    $csp_header .= " script-src 'nonce-$csp_nonce' 'strict-dynamic' 'self';";
    $csp_header .= " img-src 'self';";
    $csp_header .= " font-src 'self' fonts.gstatic.com https://unpkg.com/boxicons@2.1.2/fonts/;";
    $csp_header .= " frame-src 'none';";
    $csp_header .= " frame-ancestors 'none';";
    $csp_header .= " object-src 'none';";
    $csp_header .= " base-uri 'none';";

    // set headers
    header('X-Content-Type-Options: nosniff');
    header($csp_header);
    header('Strict-Transport-Security: max-age=31536000'); // 365 jours


    /* --- TOKEN FOR AJAX --- */
    $ajaxToken = base64_encode(random_bytes(24));
?>