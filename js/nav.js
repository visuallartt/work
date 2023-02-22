        //récupère les éléments
        let mainNav = document.getElementById('js-menu');
        let navBarToggle = document.getElementById('js-navbar-toggle');
        let accueilLink = document.getElementById('accueil-link');
        let projetsLink = document.getElementById('projets-link');
        let contactsLink = document.getElementById('contacts-link');
        /*let navLinks = document.getElementsByClassName('nav-links');*/
        //on ajoute la classe "active" à mon js-menu
        navBarToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');
        });
        //classe active présente, lorsqu'on clique sur un élément le toggle retire la classe
        accueilLink.addEventListener('click', function (){
            mainNav.classList.toggle('active');
        })
        projetsLink.addEventListener('click', function (){
            mainNav.classList.toggle('active');
        })
        contactsLink.addEventListener('click', function (){
            mainNav.classList.toggle('active');
        })
        /*$('#js-navbar-toggle').on('click', toggleOnClass);

        function toggleOnClass(event) {
            var toggleElementId = '#' + $(this).data('toggle'),
            element = $(toggleElementId);

            element.toggleClass('js-menu');
            
            //ici à changer ?
        }*/

        /*$('.main-nav li a').on('click', function(){
        $('#js-navbar-toggle').click();
            $('.js-menu').removeClass('active');
        });*/
