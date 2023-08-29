<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
        media="print" onload="this.media='all'">

    <link rel="stylesheet" media="screen"
        href="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/common/ui_kit-1cda4ddd63b6ab783c6d8e70a628149c57218af2494083a374f00238a3ef02d4.css" />

    <link rel="stylesheet" media="screen"
        href="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/frontoffice/index-00690d1adc208aeb3afa0175f021e92bced60a43f63cfc14703a88c0f81cad3c.css" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <!-- Libraries Stylesheet -->
    <link href="/vue/src/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/vue/src/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="/vue/src/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/vue/src/css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- header -->
    <header class="app-Header js-Header app-Header--sticky" role="banner">

        <div class="app-Header__wrapper js-Header-wrapper">
            <!-- logo oif -->


            <!-- premier navbar -->
            <div class="app-Header__topNav">
                <div class="app-SubHeader">
                    <ul class="app-SubHeader__nav">


                        <li class="app-SubHeader__item ">
                            <a class="app-SubHeader__link " href="{{ route('welcome') }}">
                                Acceuil
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>

                        <li class="app-SubHeader__item app-SubHeader__item--active">
                            <a class="app-SubHeader__link app-SubHeader__link--active" href="{{ route('apprenant') }}">
                                Apprenants
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>

                        <li class="app-SubHeader__item ">
                            <a class="app-SubHeader__link" href="{{ route('recruteur') }}">
                                Recruteurs
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>
                        <li class="app-SubHeader__item ">
                            <a class="app-SubHeader__link " href="{{ route('service') }}">
                                Services Carrières
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>

                    </ul>
                </div>

            </div>

            <!-- deuxieme navbar avec logo et onglet -->
            <!-- <div class="app-Header__primaryNav">
                <div class="app-Header__navigation">
                    <ul class="app-Nav">


                        <li class="app-Nav__item app-Nav__item--companies">
                            <a class="app-Nav__link " href="entreprises/entreprise.html">Entreprises</a>
                        </li>


                        <li class="app-Nav__item app-Nav__item--offers">
                            <a class="app-Nav__link " href="offres/offre.html">Offres</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--jobRoles">
                            <a class="app-Nav__link " href="blogs/blog.html">Blogs</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--advices">
                            <a class="app-Nav__link " href="conseil/conseil.html">Conseils</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--events">
                            <a class="app-Nav__link " href="events/events.html">Événements</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--events">
                            <a class="app-Nav__link " href="about/about.html">A Propos</a>
                        </li>



                    </ul>
                </div>

            </div> -->

            <!-- deuxieme navbar avec onglet connection -->
            <nav class="app-Header__dropdownMenu">
                <button class="hdr-DropdownMenu-link" aria-label="Mon compte">
                    <span
                        style="border: solid 1px transparent; border-radius:5px; background-color:green;padding:20px;color:white;font-weight:bold;font-size:15px;margin-top:15px;">
                        <a href="../contact.html">CONTACTEZ NOUS!!</a>
                    </span>
                </button>

                <div class="app-Header__logoWrapper">
                    <a aria-label="Accueil" data-testid="headerHomeLink" href="../index.html">
                        <div class="app-Brand app-Brand--header">
                            <img style="text-align: center;border:solid 1px transparent;border-radius:25px;padding:5px ;height:80px;width:150px;margin-top:25px;"
                                src="/vue/assets/part-prog/auf.jpeg" alt="Logo de l'application"
                                class="app-Header__logo" />
                        </div>
                    </a>
                </div>
            </nav>

            <!-- logo auf -->
            <div class="app-Header__logoWrapper">
                <a aria-label="Accueil" data-testid="headerHomeLink" href="../index.html">
                    <div class="app-Brand app-Brand--header">
                        <img style="text-align: center;border:solid 1px transparent;border-radius:10px;padding:5px ;height:80px;width:150px;margin-top:25px;"
                            src="/vue/assets/part-prog/oif_logo.png" alt="Logo de l'application"
                            class="app-Header__logo" />
                    </div>
                </a>
            </div>
        </div>
    </header>
    <!-- fin header -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/vue/src/img/cover oif.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">D'CLIC-PRO BF</h5>
                                <h1 class="display-3 text-white animated slideInDown">La Meilleurs Plateforme
                                    D'Integration</h1>
                                <p class="fs-5 text-white mb-4 pb-2">BIENVENUE SUR D'CLICK-PRO .</p>
                                <a href="dev.html"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir Plus</a>
                                <a href="../contact.html"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Adherer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="/vue/src/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">D'CLIC-PRO BF</h5>
                                <h1 class="display-3 text-white animated slideInDown">La Meilleurs Plateforme
                                    D'Integration</h1>
                                <p class="fs-5 text-white mb-4 pb-2">D'CLIC/AUF Meilleur Intégrateur Des Jeunes dans le
                                    Sociale et le Proféssionnelle.</p>
                                <a href="dev.html"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Voir Plus</a>
                                <a href="../contact.html"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Adherer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Formation</h6>
                <h1 class="mb-5">Parcours Apprenants</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="dev.html">
                                <img class="img-fluid" src="/vue/src/img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0"> DEV WEB/MOBILE</h5>
                                    <small class="text-primary">3 Mois</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="dev.html">
                                <img class="img-fluid" src="/vue/src/img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">CLOUD COMPUTER</h5>
                                    <small class="text-primary">7 Mois</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="/vue/src/img/cat-3.jpg" alt="dev.html">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin: 1px;">
                                    <h5 class="m-0">ELECTRONIQUE EMBARQUEE</h5>
                                    <small class="text-primary">6 Mois</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="/vue/src/img/cat-4.jpg"
                            alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin:  1px;">
                            <h5 class="m-0">MARKETING DIGITALE</h5>
                            <small class="text-primary">3 Mois</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->







    <!-- footer -->
    <footer class="app-Footer">

        <div class="app-Footer__container">

            <div class="app-Footer__brand">
                <div class="app-Header__logoWrapper">
                    <a aria-label="Accueil" data-testid="headerHomeLink" href="../index.html">
                        <div class="app-Brand app-Brand--header">
                            <img style="text-align: center;border:solid 1px transparent;border-radius:25px;padding:12px ;height:100px;width:250px"
                                src="/vue/assets/part-prog/oif_logo.png" alt="Logo de l'application"
                                class="app-Header__logo" />
                        </div>
                    </a>
                </div>

                <!-- les reseau sociale partie footer -->
                <div class="app-Footer__brandContainer">
                    <ul class="app-Footer__social">
                        <li class="app-Footer__socialItem">
                            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/jobteaser">
                                <img alt="Facebook" class="app-Footer__socialIcon"
                                    src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/logos/facebook-white-644d0a8502d6a5ee7e1e98ad605eb536a001a464c32a415d3d4e140bb494eda1.svg" />
                            </a>
                        </li>
                        <li class="app-Footer__socialItem">
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.linkedin.com/company/jobteaser/">
                                <img alt="LinkedIn" class="app-Footer__socialIcon"
                                    src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/logos/linkedin-white-ec8b1d9b43013a9fa945712e5566e87f34547a467da2c796f561ab801871e66e.svg" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 2eme partie footer -->
            <div class="app-Footer__menu">

                <div class="app-Footer__menuItem" data-show="desktop-block">
                    <p class="app-Footer__title">
                        Étudiants
                    </p>
                    <ul class="app-Footer__menuList">
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/profiles/new">S&#39;inscrire</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/job-offers">Chercher une offre</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/companies">Découvrir les entreprises</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/events">Evénements recrutement</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/advices">Conseils recrutement</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/info/alternance">Offres</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/info/bts-bac2-bac3-alternance-emploi">Offres pour
                                Bac+2, Bac+3, BTS</a>
                        </li>
                    </ul>
                </div>

                <div class="app-Footer__menuItem" data-show="desktop-block">
                    <p class="app-Footer__title">
                        Écoles &amp; Universités
                    </p>
                    <ul class="app-Footer__menuList">
                        <li class="app-Footer__menuListItem">
                            <a target="_blank" class="app-Footer__link"
                                href="https://www.jobteaser.com/fr/corporate/services-carrieres">Notre offre Career
                                Center</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a target="_blank" class="app-Footer__link"
                                href="https://www.jobteaser.com/fr/corporate/notre-reseau-d-ecoles-et-d-universites">Nos
                                établissements partenaires</a>
                        </li>
                    </ul>
                </div>


                <div class="app-Footer__menuItem" data-show="desktop-block">
                    <p class="app-Footer__title">
                        Entreprises
                    </p>
                    <ul class="app-Footer__menuList">
                        <li class="app-Footer__menuListItem">
                            <a target="_blank" class="app-Footer__link"
                                href="https://www.jobteaser.com/fr/corporate/recruteurs">Notre offre Entreprise</a>
                        </li>
                    </ul>
                </div>

                <div class="app-Footer__menuItem">
                    <p class="app-Footer__title">D'CLICK_PRO</p>
                    <ul class="app-Footer__menuList">
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/companies/jobteaser/job-offers">Nous rejoindre</a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a href="https://www.jobteaser.com/fr/corporate/a-propos" class="app-Footer__link"
                                title="À propos">
                                À propos
                            </a>
                        </li>
                        <li class="app-Footer__menuListItem">
                            <a class="app-Footer__link" href="/fr/companies/jobteaser/teams">Rencontrer notre
                                équipe</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- bas du footer les CGV -->
            <div class="app-Footer__legal">

                <ul class="app-Footer__legalLinks">

                    <li class="app-Footer__legalItem">
                        <a class="app-Footer__link app-Footer__link--small" href="/fr/about/legal-notice">Mentions
                            légales</a>
                    </li>

                    <li class="app-Footer__legalItem">
                        <a class="app-Footer__link app-Footer__link--small" href="#open-cookie-banner">Cookies</a>
                    </li>

                    <li class="app-Footer__legalItem">
                        <a class="app-Footer__link app-Footer__link--small" href="/fr/about/privacy-policy">Politique
                            de confidentialité</a>
                    </li>

                    <li class="app-Footer__legalItem">
                        <a class="app-Footer__link app-Footer__link--small" target="_blank"
                            href="https://security.jobteaser.com">Sécurité</a>
                    </li>

                </ul>

                <div class="app-Footer__copyright">
                    Copyright &copy; D'CLICK_PRO 20023-2024 From DevStudios - Site d'orientation professionnelle
                </div>

            </div>

        </div>
    </footer>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/vue/src/lib/wow/wow.min.js"></script>
    <script src="/vue/src/lib/easing/easing.min.js"></script>
    <script src="/vue/src/lib/waypoints/waypoints.min.js"></script>
    <script src="/vue/src/lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <script src="/vue/src/js/main.js"></script>
</body>

</html>
