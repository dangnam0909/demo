<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <header>
        <div class="header_menu">
        </div>
        <nav>
            <ul>
                <li><a href="./#">Title</a></li>
                <li><a href="./#">Title</a></li>
                <li><a href="./#">Title</a></li>
                <li><a href="./#">Title</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="section__title">
            <div class="container">

            </div>
        </section>
        <section id="section__about"> 
            <div class="container">
                <h2 class="about_title">STUDIO</h2>
                <ul id="scroller">
                    <li><a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro1.jpeg" width="290" height="200" alt=""></a></li>
                    <li><a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro2.jpeg" width="290" height="200" alt=""></a></li>
                    <li><a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro3.jpeg" width="290" height="200" alt=""></a></li>
                    <li><a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro4.jpeg" width="290" height="200" alt=""></a></li>
                    <li><a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/img_101.jpg" width="290" height="200" alt=""></a></li>
                    <li><a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/img_102.jpg" width="290" height="200" alt=""></a></li>
                </ul>
                <a href="#" class="btn btn_readmore readmore_v1"><span>READMORE</span></a>
            </div>
        </section>
        <section id="section__outservice">
            <div class="container">
                
            </div>
        </section>
        <section id="section__content">
            <div class="container">

            </div>
        </section>
        <section id="section__contact">
            <div class="container">

            </div>
        </section>
        <section id="section__googlemap">

        </section>
    </main>
    <footer></footer>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jquery.simplyscroll.js"></script>
    <link rel="stylesheet" href="assets/jquery/jquery.simplyscroll.css" media="all" type="text/css">
    <script type="text/javascript">
    (function($) {
        $(function() {
            $("#scroller").simplyScroll({
                pauseOnTouch: true,
                pauseOnHover: true
            });
        });
    })(jQuery);
    </script>
</body>

</html>