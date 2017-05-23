<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">        

        <meta property="og:url" content="http://temerjarenunciou.com.br" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Temer Já Renunciou? NÃO" />
        <meta property="og:description" content="Saiba se Michel Temer ainda é o presidente da República Federativa do Brasil" />
        <meta property="og:image" content="http://temerjarenunciou.com.br/img/michel_temer.jpg" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@temerrenunciou" />
        <meta name="twitter:title" content="Temer Já Renunciou? NÃO" />
        <meta name="twitter:description" content="Saiba se Michel Temer ainda é o presidente da República Federativa do Brasil" />
        <meta name="twitter:image" content="http://temerjarenunciou.com.br/img/michel_temer.jpg" />

        <title>Temer Já Renunciou?</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-99746301-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mar-top-60">
                        <h1 class="text-center">NÃO!</h1>
                        <p class="text-center mar-top-30">Michel Temer segue como 37º presidente da República Federativa do Brasil, desde 31 de agosto de 2016.</p>
                        <p class="text-center mar-top-30">
                            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Temer%20J%C3%A1%20Renunciou%3F%20N%C3%83O%20" data-size="large">
                                Tweet
                            </a>&nbsp;
                            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ftemerjarenunciou.com.br%2F&layout=button&size=large&mobile_iframe=true&appId=135052763576848&width=119&height=28" width="119" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </p>

                    </div>
                    <img src="img/michel_temer.jpg" class="img-rounded img-responsive col-sm-4">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" style="margin-bottom: 60px">
                <div class="col-sm-8">    
                    <u><h2 class="text-center">ÚLTIMAS NOTÍCIAS</h2></u>
                    <ul style="margin-top: 15px;">
                        <?php
                            $feed = file_get_contents('https://www.google.com/alerts/feeds/09593057662365589691/2369996158509438002');
                            $feed = str_replace('<media:', '<', $feed);
                            $xml = simplexml_load_string($feed);
                            foreach ($xml->children() as $item) {
                                echo "<li><a target='_blank' href='{$item->link[href]}'>{$item->title}</a></li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <a class="twitter-timeline" href="https://twitter.com/temerrenunciou">Tweets by Temer Já Renunciou</a>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-muted text-center">Todo o conteúdo aqui exposto pertence aos seus respectivos criadores e autores. Site melhor visualizado com o monitor ligado.</p>
                <p class="text-muted text-center" style="margin-top: -20px;">Powered by <a target="_blank" href="http://temerjarenunciou.com.br">Temer Já Renunciou?</a></p>
            </div>
        </footer>
    </body>
    <script src="js/widgets.js" charset="utf-8"></script>
</html>
