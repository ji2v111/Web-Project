<?php
// خريطة الصفحات المسموح بها: اسم في الرابط => ملف داخل pages/
// (حماية: لا نعرض أي ملف يكتبه المستخدم)
$pages = [
    'home'            => 'home',    // pages/home.php
    'roadmaps'        => 'page1',   // pages/page1.php  
    'roadmap-details' => 'page2',   // pages/page2.php  
    'courses'         => 'page3'    // pages/page3.php  
];
$page = $_GET['page'] ?? 'home';
if (!isset($pages[$page])) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roadmap to Success</title>
        <link rel="icon" type="image/x-icon" href="images/icon.svg">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="Page">
            <?php include 'includes/sidebar.php'; ?>

            <main id="content">
                <?php include 'pages/' . $pages[$page] . '.php'; ?>
            </main>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
