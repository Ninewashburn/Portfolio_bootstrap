<?php ob_start();
require('../utile/formatage.php');
?>

    <div id="carouselExampleIndicators" class="carousel slide perso_bgBlueGradiant" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-dark"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../sources/images/NimesAlerie_description.png"
                     class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../sources/images/technologie_hb.png"
                     class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../sources/images/dashboard_nimesalerie.png"
                     class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="text-center mt-3 monBouton">
        <a class="btn rounded-pill perso_bgOrange text-white" href="../sources/pdf/cv.pdf" download="CV-Meynadier">Téléchargez
            mon CV !</a>
    </div>

    <div class="container text-center" id="presentation">
        <?php echo formatageTitre("Renaud : Développeur web & web mobile"); ?>
        <!--        <h2 class="m-5 perso_colorBlueLight">> Renaud : Développeur web & web mobile <</h2>-->
        <div class="ratio ratio-16x9">
            <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/ewZ_YWbIWXI" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>

    <div class="container text-center" id="competences">
        <?php echo formatageTitre("Mes compétences"); ?>
        <!--        <h2 class="m-5 perso_colorBlueLight">> Mes compétences <</h2>-->
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>HTML</h3>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">75%
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>CSS</h3>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">70%
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>JavaScript</h3>
                <div class="progress">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">65%
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>WordPress</h3>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">70%
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>Symfony / Php</h3>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">60%
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>Angular / TypeScript</h3>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">60%
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" id="portfolio">
        <?php echo formatageTitre("Mon Portfolio"); ?>
        <!--        <h2 class="m-5 perso_colorBlueLight">> Mon Portfolio <</h2>-->
        <div class="card-group">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Site e-commerce Symfony</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/NimesAlerie_description.png" class="d-block w-100" alt=""/>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemple1">En
                        savoir
                        plus
                    </button>
                </div>
            </div>
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Technologies utilisées</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/technologie_hb.png" class="d-block w-100" alt=""/>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemple2">En
                        savoir
                        plus
                    </button>
                </div>
            </div>
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">Tableau de bord Angular</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/dashboard_nimesalerie.png" class="d-block w-100" alt=""/>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemple3">En
                        savoir
                        plus
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exemple1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Site e-commerce Symfony</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../sources/images/NimesAlerie_description.png" class="d-block w-100" alt=""/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur blanditiis eligendi
                        pariatur vero. Saepe!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exemple2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Technologies utilisées</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../sources/images/technologie_hb.png" class="d-block w-100" alt=""/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur blanditiis eligendi
                        pariatur vero. Saepe!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exemple3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tableau de bord Angular</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../sources/images/dashboard_nimesalerie.png" class="d-block w-100" alt=""/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur blanditiis eligendi
                        pariatur vero. Saepe!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" id="temoignage">
        <?php echo formatageTitre("Mes expériences"); ?>
        <!--        <h2 class="m-5 perso_colorBlueLight">> Mes témoignages <</h2>-->
        <div class="row">
            <div class="col-12 col-lg-4 temoignage1">
                <img src="../sources/images/leclerc.png" class="rounded-circle" style="width: 140px; height: 140px"
                     alt=""/>
                <h3>Leclerc & Alternance Auvergne</h3>
                <p>Travail dans la vente, préparation de commandes et livraisons aux clients. Gestion des stocks et
                    inventaire, entretien du lieu de travail. Pendant le contrat avec Leclerc, passage d'un certificat
                    de qualification professionnelle (CQP).</p>
            </div>
            <div class="col-12 col-lg-4 temoignage2">
                <img src="../sources/images/cci.png" class="rounded-circle" style="width: 140px; height: 140px"
                     alt=""/>
                <h3>CCI de Clermont-Ferrand</h3>
                <p>Découverte des métiers informatique et multimédia (Community Manager, Développeur web, Designer
                    UX/UI). Début de reconversion professionnel vers le développement web et web mobile. Avec un stage
                    de trois semaines à Be-Ys Software.</p>
            </div>
            <div class="col-12 col-lg-4 temoignage3">
                <img src="../sources/images/human_booster_logo.png" class="rounded-circle"
                     style="width: 140px; height: 140px"
                     alt=""/>
                <h3>Human Booster Aubière</h3>
                <p>Formation diplômante réussie délivrant un Bac+2 dans le développement Web. Création d'un site
                    e-commerce sous Symfony avec un tableau de bord en Angular. Avec une participation sur un projet
                    front (Angular) en stage avec Be-Ys Software. CCP front et back validés.</p>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>

<?php
$content = ob_get_clean();
require "commons/template.php";
?>