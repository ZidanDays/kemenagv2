<?php
@$page = $_GET['q'];
if (!empty($page)) {
    switch ($page) {

        case 'beranda':
            include './pages/beranda/beranda.php';
            break;


        case 'view_details':
            include './pages/view_details/view_details.php';
            break;
            
        case 'list_surat_requests':
            include './pages/list_surat_requests/list_surat_requests.php';
            break;

        case 'add_message':
            include './pages/contact/add_pesan.php';
            break;

        case '404':
            include './pages/404/404.php';
            break;


    }
} else {
    include './pages/beranda/beranda.php';
}