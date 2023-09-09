
<div class="full_article">
    <h2 class="full-article__title">
        Starfield. Todd Howard i Bethesda dziękują fanom: stworzyliśmy coś, co wydawało się niewykonalne.
    </h2>
    
    <img src="./img/1.png" class="full-article__img" alt="">

    <div class="full-article__details">
        <div class="full-article__details__author">Admin Kowalski</div>
        <div class="full-article__details__time">Wczoraj, 18:36</div>
    </div>


    <div class="full-article__content">
        Fusce lacinia sem sed sem vestibulum tincidunt. 
        Ut varius nunc metus, eu mattis eros rutrum feugiat. 
        Ut hendrerit mi libero, id porttitor ex elementum vitae. 
        Cras nec rutrum nisi. Suspendisse eu volutpat nulla. 
        Phasellus ex ligula, sodales ac varius eget, cursus in est.
        Mauris id accumsan lectus, molestie mollis velit. Morbi 
        dapibus, diam non elementum suscipit, ex nisi ornare felis,
        et aliquam velit justo egestas arcu. Ut vel tristique ante,
        quis aliquam lectus. Etiam bibendum egestas ligula, vel 
        posuere nisl maximus eu. 
        <br>
        <br>
        Morbi vitae ligula finibus, 
        vehicula arcu eget, semper purus. Mauris ut tempor odio, 
        in vestibulum quam. In mauris lacus, tincidunt non lobortis 
        vel, iaculis in ipsum. Fusce placerat tempor est, a tristique 
        odio suscipit at. Pellentesque sit amet sagittis orci, a 
        vehicula arcu. Phasellus consequat eros enim, quis congue 
        orci hendrerit id. Duis eu eleifend quam, auctor feugiat 
        massa. Donec viverra nulla sed lectus dictum dignissim. 
        Proin ac est vitae tellus elementum laoreet. 
        <br>
        <br>
        Duis arcu dui, 
        tempor nec efficitur volutpat, egestas sit amet urna. 
        Suspendisse porta suscipit fringilla. Etiam non finibus nibh. 
        Duis malesuada feugiat purus ac efficitur. Nulla tincidunt 
        interdum nulla ut vehicula. Morbi eros libero, pulvinar et 
        vulputate rhoncus, fringilla consectetur mi. In 
        sollicitudin orci purus, ac dignissim magna malesuada 
        nec. Aliquam ultrices quam id enim euismod gravida.
    </div>
</div>  


<!-- Coments -->

<div class="comment-box comment-create">
    <h3>Dodaj komentarz</h3>

    <textarea name="" id="" cols="30" rows="10"></textarea>
    <!-- <div class=""> -->
        <button class="btn">Dodaj</button>
    <!-- </div> -->
   
</div>


<div class="comment-box comments-read">
    <h3>Komentarze: 15</h3>
    <button class="btn btn-big">Wczytaj komentarze</button>
</div>

<div class="comment-box comments-readed">
    <h3>Komentarze: 15</h3>
    

    <div class="comment-box__read-comments">
        
        <?php for ($i=0; $i < 10; $i++) { ?>
            <div class="comment-box__read-comments__comment">
                <div class="comment-box__read-comments__comment__top">
                    <span class="comment-box__read-comments__comment__top__author">PiotrGie</span>
                    <span class="comment-box__read-comments__comment__top__time">Wczoraj, 8:36</span>
                </div>

                <div class="comment-box__read-comments__comment__mid">
                    <p>Zajebista gra ale mogła by jepiej wyglądać!</p>
                </div>

                <div class="comment-box__read-comments__comment__bottom">
                    <div class="add-comment-answer">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>