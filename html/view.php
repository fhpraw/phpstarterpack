<?php

function html_header (
    $page_title,
    $vendor_header
)
{
    include HTML.'/header.html.php';
}

function html_footer (
    $vendor_footer
)
{
    include HTML.'/footer.html.php';
}

function custom_page (
    $body,
    $page_title,
    $vendor_header,
    $vendor_footer
)
{
    html_header (
        $page_title,
        $vendor_header
    );

    include BODY.'/'.$body;

    html_footer (
        $vendor_footer
    );
}

function page (
    $body,
    $page_title
)
{
    custom_page (
        $body,
        $page_title,
        'default.vendor.header.html.php',
        'default.vendor.footer.html.php'
    );

}
