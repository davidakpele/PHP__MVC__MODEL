<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
</head>
<body>
    <h2>Welcome to MVC Pattern</h2>
    <ol>
        <li>If you have a document like (AboutUs.php) just inside the views Folder.. Your controller must be place direct inside the controller folder.. <b>Dont create the method controller inside the PageController.</b></li>
        <li>Dan first thing you must Know is.. The (PageController) is set to control all documents that are inside or subFolders/ like Folder(/Admin/Parent/). the parent Folder is admin and then Parent.php as a document so the method controller of this document must inside PageController</li>
        <li>Example of Direct Controller <a href="<?=ROOT?>About">Click About</a></li>
        <li>Example of Subdocument Controller <a href="<?=ROOT?>Wallet/Page2">Click About</a></li>
    </ol>
</body>
</html>