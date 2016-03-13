//$(document).ready(function(){
    var menu = new Vue({
        el: '.ctn-menu-icon',
        methods: {
            launchMenu: function(){
                this.$el.classList.toggle('activ');
                document.getElementById('menu').classList.toggle('activ');
            }
        }
    });

    var arrow1 = new Vue({
        el: '.arrow.down',
        methods: {
            dropPage:function(){
                $('html,body').animate({scrollTop: $('.page-container.inspiration').offset().top},'slow');
            }
        }
    });

    var arrow2 = new Vue({
        el: '.arrow.up',
        methods:{
            upPage:function(){
                console.log('lol');
                $('html,body').animate({scrollTop: $('.page-container.intro').offset().top},'slow');
            }
        }
    });

    var musics = new Vue({
        el: '.musics',
        data: {
            musics: [
                {src : 'DIRE_STRAITS.jpg'},
                {src : 'JIM_GUTHRIE.jpg'},
                {src : 'OFFSPRING.jpg'},
                {src : 'RED_HOT_CHILLI_PEPPERS.jpg'},
                {src : 'SYSTEM_OF_A_DOWN.jpg'},
                {src : 'SHACKAPONK.jpg'}
            ]
        }
    });

    var films = new Vue({
        el: '.films',
        data: {
            films: [
                {
                    src : 'Django.jpg',
                    format : 'simple'
                },
                {
                    src : 'star-wars.png',
                    format : 'simple'
                },
                {
                    src : 'pulpfiction.jpg',
                    format : 'double'
                }
            ]
        }
    });

    var projects = new Vue({
        el: '.project',
        data: {
            projects: [
                {
                    activ: true,
                    id: '01',
                    title: 'Webimac : Site Web Corporate pour la formation IMAC',
                    description :
                        'small description of the project small description of the project small description of the project small description of the project small description of the project small description of the project '
                    ,
                    with : [
                        'Alexander Feller',
                        'Charlotte Nortier',
                        'Léa Rozen Sudry'
                    ],
                    hashtags : [
                        'PHP',
                        'JSON',
                        'Laravel',
                        'JavaScript',
                        'HTML',
                        'CSS'
                    ],
                    link : 'http://ingenieur-imac.fr/',
                    img : 'imac.png'
                },
                {
                    activ: false,
                    id: '02',
                    title: 'Here come the title of the newer projects projects',
                    description :
                        'small description of the project small description of the project small description of the project small description of the project small description of the project small description of the project '
                    ,
                    with : [
                        'Personne 1',
                        'Personne 2',
                        'Personne 3',
                        'Personne 4'
                    ],
                    hashtags : [
                        'PHP',
                        'JSON',
                        'Laravel',
                        'JavaScript',
                        'HTML',
                        'CSS'
                    ],
                    link : 'http://www.ma-bite.fr'
                },{
                    id: '03'
                },{
                    id: '04'
                }
            ]
        },
        methods: {
            changeProject: function(idProject){
                for (var i = 0; i < projects["projects"].length; i++) {
                    var project = projects["projects"][i];
                    if (project.activ === true) {
                        console.log('found');
                        project.activ = false;
                        projects["projects"][idProject].activ = true;
                        break;
                    }
                }
            }/*,
            timerProject: function(){
                console.log('ola');
                $('.proj-timer .runner').animate({
                    width : "110%"
                }, 15000, 'linear', function(){
                    var current;
                    console.log('ola');
                    for (var i = 0; i < projects["projects"].length; i++) {
                        var project = projects["projects"][i];
                        if (project.activ === true) {
                            current = i;
                            break;
                        }
                    }
                    if(current == (projects["projects"].length - 1)){projects.changeProject(0)}
                    else {projects.changeProject(i+1)}
                    $('.proj-timer .runner').css('width','0');
                    projects.timerProject();
                })
            }*/
        }
    })

    $(document).ready(function(){
        projects.timerProject();
    });

//});
