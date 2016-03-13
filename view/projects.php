<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Julien Rousset | Projects</title>
        <link rel="stylesheet" href="../assets/css/master.css" media="screen" title="Master" charset="utf-8">
    </head>
    <body>
        <?php include('nav.php'); ?>
        <div class="wrapper project">
            <h1>What am I doing ?!</h1>
            <div class="proj-left">
                <ul>
                    <li v-on:click="changeProject($index)" class="link-for-project" v-bind:class="{'activ' : project.activ}" v-for="project in projects" >{{project.id}}</li>
                </ul>
                <div class="border-right"></div>
            </div>
            <div v-for="project in projects" v-show="project.activ" class="proj-center">
                <div class="ctn-img-project"><img src="../assets/images/projects/{{project.img}}"/></div>
                <h2>{{project.title}}</h2>
                <p>
                    {{project.description}}
                </p>
                <div class="bottom-part">
                    <div class="big-number">{{project.id}}</div>
                    <div class="colleague">
                        <div class="with">With</div>
                        <ul>
                            <li v-for="people in project.with">{{people}}</li>
                        </ul>
                    </div>
                    <div class="hashtags">
                        <div class="ctn-hashtags">
                            <div v-for="hashtag in project.hashtags" class="hashtag">{{hashtag}}</div>
                        </div>
                    </div>
                    <a href="{{project.link}}" target="_blank"><img class="go-to-site" src="../assets/images/go-to-site.png"/></a>
                </div>
            </div>
            <div class="proj-timer"><div class="runner"></div></div>
        </div>
        <script src="../bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
        <script src="../bower_components/vue/dist/vue.min.js" charset="utf-8"></script>
        <script src="../assets/js/main.js" charset="utf-8"></script>
    </body>
</html>
