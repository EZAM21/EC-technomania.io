        // Gestion affichage des images miniatures en grand
        // Manage display of large thumbnail pictures
        let imageBig = document.querySelector('#big img');
        let imageThumb = document.querySelectorAll('.thumb img');

        //Affiche l'image en grand au clic sur les miniatures
        // Displays the picture in large at the click on the thumbnails
        imageThumb.forEach(thumb => {
            thumb.addEventListener('click', () => {
                imageBig.src = thumb.src;
            });
        });