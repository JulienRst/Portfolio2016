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
                    title: 'Here come the title of the projects',
                    description : 'non',
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
                        'JavaScript'
                    ],
                    link : 'http://www.ma-bite.fr'
                },
                {
                    id: '02'
                },{
                    id: '03'
                },{
                    id: '04'
                }
            ]
        }
    })

//});
