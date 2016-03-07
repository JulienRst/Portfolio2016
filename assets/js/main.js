$(document).ready(function(){
    new Vue({
        el: '.ctn-menu-icon',
        methods: {
            launchMenu: function(){
                this.$el.classList.toggle('activ');
                document.getElementById('menu').classList.toggle('activ');
            }
        }
    })
});
