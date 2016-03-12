<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Julien Rousset | About me</title>
        <link rel="stylesheet" href="../assets/css/master.css" media="screen" title="Master" charset="utf-8">
    </head>
    <body>
        <?php include('nav.php'); ?>
        <div class="page-container intro">
            <div class="wrapper">
                <div class="flex-container">
                    <div class="align-middle-block">
                        <img class="image-me" src="../assets/images/me.png" />
                    </div>
                    <div class="align-middle-block text aboutme">
                        <h1>It's me Julien</h1>
                        <p>
                            You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got
                            a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other,
                            but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now.
                            We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.
                        </p>
                        <div class="ctn-aboutme-icon">
                            <img class="aboutme-icon" src="../assets/images/icons-me/racket.png" title="About me : Racket" />
                            <img class="aboutme-icon" src="../assets/images/icons-me/pizza.png" title="About me : Pizza" />
                            <img class="aboutme-icon" src="../assets/images/icons-me/guitar.png" title="About me : Guitar" />
                            <img class="aboutme-icon" src="../assets/images/icons-me/gameboy.png" title="About me : Gameboy" />
                        </div>
                    </div>
                </div>
            </div>
            <img class="arrow down" v-on:click="dropPage" src="../assets/images/arrow.png" title="About me | Arrow down">
        </div>
        <div class="page-container inspiration">
            <img class="arrow up" v-on:click="upPage" src="../assets/images/arrow.png" title="About me | Arrow up">
            <div class="wrapper">
                <div class="flex-container">
                    <div class="align-middle-block music">
                        <h1>Musics I Love</h1>
                        <div class="img-container musics">
                            <img class="image-musics" v-for="music in musics" src="../assets/images/musics/{{music.src}}">
                        </div>
                    </div>
                    <div class="align-middle-block films">
                        <h1>Films I watch</h1>
                        <div class="img-container films">
                            <img class="image-films {{film.format}}" v-for="film in films" src="../assets/images/films/{{film.src}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
        <script src="../bower_components/vue/dist/vue.min.js" charset="utf-8"></script>
        <script src="../assets/js/main.js" charset="utf-8"></script>
    </body>
</html>
