<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>{page_title}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
    html,body{margin:0;padding:0}
    body{font: 76% arial,sans-serif;text-align:center}
    p{margin:0 10px 10px}
    a{display:block;color: #981793;padding:10px}
    div#header h1{height:80px;line-height:80px;margin:0;padding-left:10px;background: #EEE;color: #79B30B}
    div#container{text-align:left}
    div#content p{line-height:1.4}
    div#block-left{background:#B9CAFF}
    div#block-right{background:#FF8539}
    div#footer{background: #333;color: #FFF}
    div#footer p{margin:0;padding:5px 10px}
    div#container{width:700px;margin:0 auto}
    div#wrapper{float:left;width:100%}
    div#content{margin: 0 150px}
    div#block-left{float:left;width:150px;margin-left:-700px}
    div#block-right{float:left;width:150px;margin-left:-150px}
    div#footer{clear:left;width:100%}
</style>
</head>
<body>
<div id="container">

<div id="header"><h1>Header</h1></div>

<div id="wrapper">
<div id="content">
    <?php $this->load->view($content_view); ?>
</div>
</div>
<div id="block-left">
    <div id="menu">
        <?php $this->load->view($menu_view); ?>
    </div>
</div>

<div id="block-right">
    <ul>
        <li><a href='/catalog/categories/'>Категории товаров</a></li>
        <li><a href='/catalog/'>Каталог</a></li>
    </ul>
</div>

<div id="footer"><p>Here it goes the footer</p></div>

</div>
</body>
</html>