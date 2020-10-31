
<!-- /////////////// WORKS //////////////////// -->

<!-- j'ai wrapper chaques section de la home page dans un <article> qui est plus pertinent que la balise <section> qui elle est plus générique -->
<article>
        <section class="section is-medium home-works has-text-centered">
                <header>
                        <h2 class="title-category mb-6">Works</h2> 
                </header> 

        
                        <!-- is-variable is-0-mobile permettent d'enlever les gaps sur mobile -->
                        <div class="columns is-variable is-1-mobile is-multiline has-text-centered">
                                <?php
                                foreach($works as $key => $value): ?>

                                <div class="column is-full-mobile is-half-tablet is-one-half-desktop    is-one-third-widescreen is-one-third-fullhd">
                                        <a href="/grafiz-site/Works/show/<?= $value->getId(); ?>">
                                                <div class="card">
                                                        <div class="card-image">
                                                                <figure class="image is3by2">
                                                                        <img src="<?= $value->getImgShow(); ?>" 
                                                                             alt="<?= $value->getNom(); ?>"
                                                                        >

                                                                        <figcaption>
                                                                                <h3 class='categorie title is-3'><?= $value->getCategorie(); ?></h3>
                                                                                <p class='subtitle is-6'><?= $value->getNom(); ?></p>
                                                                                <!-- <a class='' href="">voir</a> -->
                                                                        </figcaption> 

                                                                </figure>




                                                        </div>

                                                </div>
                                        </a>
                                </div>
                                
                                <?php endforeach ?>
                        </div>
                        <div class="columns mt-2">
                                <div class="column mb-2">
                      
                                        <a class="button is-primary mt-2" href="/grafiz-site/works">
                                                <span>Voir tous les projets</span>
                                                <span class="icon is-small">
                                                        <i class="fas fa-angle-right"></i>
                                                </span>
                                        </a>
                                
                                </div>
                        </div>
                                
                                
                                
                                
                                
                                
        </section>
</article>    





<!-- /////////////// SERVICES //////////////////// -->


<article>
        <section class="section is-medium home-services has-text-centered">
                        <header>
                                <h2 class="title-category mb-6">Services</h2> 
                        </header>
                                   
           
                                        
                                        
                                        
                <div class="container">
                        <div class="columns is-variable is-1-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
                                <div class="column is-4 mb-5">
                                        <section>
                                                <header>
                                                        <!-- la div parent est en position relative afin de positionner         précisement l'icon-shadow -->
                                                        <figure class="is-relative mb-4">
                                                                <i class="fas fa-6x fa-bezier-curve"></i>
                                                                <i class="icon-shadow fas fa-6x fa-bezier-curve"></i>
                                                                <!-- <hr class="small"> -->
                                                                <figcaption>
                                                                        <h3 class="title is-4 is-spaced">Design graphique</h3>
                                                                </figcaption>
                                                        </figure>
                                                </header>
                                        
                                                <p class="">Identité visuelle, affiches, lettrage, packaging, édition, papeterie... </p>
                                       
                                        </section>
                                        
                                        
                                        
                                </div>
                                <div class="column is-4 mb-2">
                                        <section>
                                                <div class="box">
                                                        <!-- la div parent est en position relative afin de positionner         précisement l'icon-shadow -->
                                                        <header>
                                                                <figure class="is-relative mb-4">
                                                                        <i class="fas fa-6x fa-pencil-alt"></i>
                                                                        <i class="icon-shadow fas fa-6x fa-pencil-alt"></i>
                                                                        <!-- <hr class="small"> -->
                                                                        <figcaption>
                                                                                <h3 class="title is-4 is-spaced">Illustration</h3>
                                                                        </figcaption>
                                                                </figure>
                                                        </header>
        
        
                                                        <p class="">Croquis, story-board, illustration traditionnelle et digitale, bande dessinée, thème jeunesse...</p>
                                              
                                                </div>
                                        </section>
                                        
                                        
                                        
                                        
                                </div>
                                <div class="column is-4">
                                        
                                        <!-- la div parent est en position relative afin de positionner précisement     l'icon-shadow -->
                                        <figure class="is-relative mb-4">
                                                <i class="fas fa-6x fa-mobile-alt"></i>
                                                <i class="icon-shadow fas fa-6x fa-mobile-alt"></i>
                                                <!-- <hr class="small"> -->
                                                <figcaption>
                                                        <h3 class="title is-4 is-spaced">Web</h3>
                                                </figcaption>
                                        </figure>
                                        
                                        
                                        <p class="">prototypage de sites, bannière web, intégration Web, site vitrines...</p>
                                
                                        
                                        
                                </div>
                                <!-- <div class>
                                        
                                        <p class="is-size-5">Identité visuelle, affiches publicitaire, lettrage,        packaging, édition, papeterie...</p>
                                </div> -->
                                        
                                        
                                        
                                        
                        </div> 
                        <div class="columns has-text-centered">
                                <div class="column">
                                <a class="button is-primary" href="/grafiz-site/about#ancre-graphisme">
                                                        <span>Découvrir</span>
                                                        <span class="icon is-small">
                                                                <i class="fas fa-angle-right has-text-white"></i>
                                                        </span>
                                                </a>
                                </div>
                        </div>
                </div>
        </section>
</article>



<!-- /////////////// TUTOS //////////////////// -->

<article>
        <section class="section is-medium home-tutos has-text-centered"> 
          
                <header>
                        <h2 class="title-category mb-6">Tutos</h2>
                </header>

                <?php require VIEW. "commons/tutos.php"; ?>


  
        </section>
</article>    