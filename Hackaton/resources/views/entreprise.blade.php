<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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

    <header class="app-Header js-Header app-Header--sticky" role="banner">

        <div class="app-Header__wrapper js-Header-wrapper">
            <!-- logo oif -->


            <!-- premier navbar -->
            <div class="app-Header__topNav">
                <div class="app-SubHeader">

                    <ul class="app-SubHeader__nav">


                        <li class="app-SubHeader__item app-SubHeader__item--active">
                            <a class="app-SubHeader__link app-SubHeader__link--active" href="../index.html">
                                Acceuil
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>

                        <li class="app-SubHeader__item">
                            <a class="app-SubHeader__link" href="{{ route('apprenant') }}">
                                Apprenants
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>

                        <li class="app-SubHeader__item">
                            <a class="app-SubHeader__link" href="{{ route('recruteur') }}">
                                Recruteurs
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                    <path
                                        d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                </svg>

                            </a>
                        </li>
                        <li class="app-SubHeader__item">
                            <a class="app-SubHeader__link" href="{{ route('service') }}">
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
            <div class="app-Header__primaryNav">
                <div class="app-Header__navigation">
                    <ul class="app-Nav" style="text-align: center;margin-top:6px;">


                        <li class="app-Nav__item ">
                            <a class="app-Nav__link " href=" {{ route('entreprise') }}">Entreprises</a>
                        </li>


                        <li class="app-Nav__item app-Nav__item--offers">
                            <a class="app-Nav__link" href="{{ route('offre') }}">Offres</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--jobRoles">
                            <a class="app-Nav__link" href="{{ route('blog') }}">Blogs</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--advices">
                            <a class="app-Nav__link " href="{{ route('conseil') }}">Conseils</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--events">
                            <a class="app-Nav__link" href="{{ route('even') }}">Événements</a>
                        </li>

                        <li class="app-Nav__item app-Nav__item--events">
                            <a class="app-Nav__link" href=" {{ route('propos') }}">A Propos</a>
                        </li>




                    </ul>
                </div>

            </div>

            <!-- deuxieme navbar avec onglet connection -->
            <nav class="app-Header__dropdownMenu">
                <div class="app-Header__dropdownMenuWrapper">
                    <ul class="hdr-DropdownMenu">
                        <li class="hdr-DropdownMenu-item hdr-DropdownMenu-item--user " tabindex="0">
                            <button class="hdr-DropdownMenu-link" aria-label="Mon compte"
                                data-icon="expandMore|right">
                                <span class="hdr-DropdownMenu-linkIcon"><svg viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="jds-Icon jds-Icon--medium">
                                        <path
                                            d="M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18ZM1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12Z" />
                                        <path
                                            d="M12 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-4 2a4 4 0 1 1 8 0 4 4 0 0 1-8 0ZM5.898 18.615A8.965 8.965 0 0 0 12 21a8.965 8.965 0 0 0 6.102-2.385c-.443-.34-1.05-.667-1.817-.939C15.1 17.256 13.62 17 12 17s-3.1.256-4.285.676c-.767.272-1.374.599-1.817.94Zm1.15-2.824C8.47 15.287 10.178 15 12 15c1.82 0 3.528.287 4.953.79 1.403.498 2.625 1.241 3.354 2.225a1 1 0 0 1-.053 1.256A10.976 10.976 0 0 1 12 23c-3.288 0-6.24-1.444-8.254-3.729a1 1 0 0 1-.053-1.256c.729-.984 1.951-1.727 3.354-2.224Z" />
                                    </svg>
                                </span>
                                <span class="hdr-DropdownMenu-linkLabel hdr-DropdownMenu-linkLabel--hidden">Mon
                                    compte</span>
                            </button>
                            <ul class="hdr-DropdownMenu-submenu">
                                <li class="hdr-DropdownMenu-submenuItem">
                                    <a class="hdr-DropdownMenu-submenuLink button-connexion signin"
                                        href="/fr/users/sign_in">
                                        <div class="hdr-DropdownMenu-submenuLinkIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                                                <g fill="none" fill-rule="evenodd" class="u-stroke-color"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M14.752 16.252l3.576-3.564-.42-2.928h3.336l-.42-2.916 2.928.42L25 6.004l-.42-4.584L19.996 1 9.748 11.248l-3.324-.852L1 15.82l1.872 7.296L10.18 25l5.424-5.424zM23.105 1l-12 12" />
                                                    <path
                                                        d="M8.158 21.211l-2.532-.837-.837-2.532 1.685-1.684 3.368 3.368z" />
                                                </g>
                                            </svg>

                                        </div>
                                        <dl class="hdr-DropdownMenu-linkTextWrapper">
                                            <dt class="hdr-DropdownMenu-linkTitle">
                                                Connexion
                                            </dt>
                                            <dd class="hdr-DropdownMenu-linkText">
                                                Découvrez les nouveaux contenus publiés depuis votre dernière
                                                connexion.
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="hdr-DropdownMenu-submenuItem">
                                    <a class="hdr-DropdownMenu-submenuLink signup" href="/fr/profiles/new">
                                        <div class="hdr-DropdownMenu-submenuLinkIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                                <g fill="none" fill-rule="evenodd" class="u-stroke-color"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M23.5 20.75l-4 2.25-4-2.25v-4.5l4-2.25 4 2.25zM19.5 16.5v4M21.5 18.5h-4M5.63 1.81L9 3.5h4.5" />
                                                    <path
                                                        d="M13.5 8.25L9 10 4.5 8.25v-6L9 .5l4.5 1.75zM7.5 6v-.5M10.5 6v-.5M15.79 13.52l-.29-1.02L9 11l-6.5 1.5-2 7h13" />
                                                    <path d="M11.45 11.57L9 15.5l-2.45-3.93" />
                                                </g>
                                            </svg>

                                        </div>
                                        <dl class="hdr-DropdownMenu-linkTextWrapper">
                                            <dt class="hdr-DropdownMenu-linkTitle">
                                                Inscription
                                            </dt>
                                            <dd class="hdr-DropdownMenu-linkText">
                                                Postulez aux offres et participez aux événements.
                                            </dd>
                                        </dl>
                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>

                </div>

                <div class="app-Header__logoWrapper">
                    <a aria-label="Accueil" data-testid="headerHomeLink" href="./index.html">
                        <div class="app-Brand app-Brand--header">
                            <img style="text-align: center;border:solid 1px transparent;border-radius:25px;padding:8px ;height:80px;width:150px;margin-right:-20px"
                                src="/vue/assets/part-prog/auf.jpeg" alt="Logo de l'application"
                                class="app-Header__logo" />
                        </div>
                    </a>
                </div>
            </nav>

            <!-- logo auf -->
            <div class="app-Header__logoWrapper">
                <a aria-label="Accueil" data-testid="headerHomeLink" href="./index.html">
                    <div class="app-Brand app-Brand--header">
                        <img style="text-align: center;border:solid 1px transparent;border-radius:25px;padding:10px ;height:80px;width:150px"
                            src="/vue/assets/part-prog/oif_logo.png" alt="Logo de l'application"
                            class="app-Header__logo" />
                    </div>
                </a>
            </div>

        </div>
    </header>

    <main>


        <div class="d-flex border box" style="border-radius:5px;box-shadow: 0px 0px 10px rgba(0, 0, 90, 0.6)">
            <small class="flex-fill  border-end py-2"><i class="fa fa-search text-primary me-2 items-start"
                    aria-hidden="true"></i><input type="search" style="outline:none;border:none;"
                    placeholder="search Que chercher vous ?"> </small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-check text-primary me-2"
                    aria-hidden="true"></i>SECTEUR</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-check text-primary me-2"
                    aria-hidden="true"></i>TYPE D'ENTREPRISE</small>
        </div>


        <div class="row g-4 justify-content-center">

            <div class="card  col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/incubuo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>INCUB@UO</strong><br>
                        <p>Ouagadougou,un incubateur qui specialiser dans la realisation de solution digitale</p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>


            <div class="card  col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/oif_logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>OIF</strong><br>
                        <p>Principale Acteur dans l'Integration de la jeunesse dans le metier du numerique </p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/anpe logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>ANPE</strong><br>
                        <p>Ouagadougou,Agence National Promotion de Emploie ,Integration de la jeunesse </p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>


        </div>


        <div class="row g-4 justify-content-center">

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/auf.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>AUF</strong><br>
                        <p>Ouagadougou,Agence Universitaire Francophonie participer a l'intergration solciale des jeunes
                        </p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/NB-Z kdg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>Universiter Nobert-Zongo</strong><br>
                        <p>Koudougou,Participe a faciliter la formation Dev-Web du programme D'CLIC/OIF au sein de ces
                            locaux</p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/prof/Cidoc.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>CIDOC Entrepise</strong><br>
                        <p>Ouagadougou,Offre des stages de Qualiter au apprenant issus de la formation D-CLIC/OIF</p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

        </div>



        <div class="row g-4 justify-content-center">
            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/prof/Jo'Fe Digital.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>JO'Fe Digitale</strong><br>
                        <p>Ouagadougou,Offre des stages de Qualiter au apprenant issus de la formation D-CLIC/OIF</p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>


            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/prof/pubbix tech.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>PUBBLIX Technologies</strong><br>
                        <p>Ouagadougou,Offre des stages de Qualiter au apprenant issus de la formation D-CLIC/OIF</p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>


            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/Université Nazi boni.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>Ubiversité Nazi-Boni</strong><br>
                        <p>Bobodioulasso , accompagne et facile le deroulement du programme D-CLIC/OIF dans ces locaux
                        </p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

        </div>

        <div class="row g-4 justify-content-center">

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/prof/Yulcom Technologies.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>YULCOM</strong><br>
                        <p>Ouagadougou,Offre des stages de Qualiter au apprenant issus de la formation D-CLIC/OIF</p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/prof/faso.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>FASO DIGITALE</strong><br>
                        <p>Ouagadougou , Entreprise dans le monde du diev web et mobile </p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

            <div class="card col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                style="width: 20rem; border-radius:5px;margin: 25px;box-shadow: 0px 0px 10px rgba(38, 38, 163, 0.6);">
                <img src="/vue/assets/part-prog/incubuo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                    <h6><strong>D-CLIC</strong><br>
                        <p>Sponsore officiel et acteur principale dans la formation de la jeune dans les metiers du TICs
                        </p>
                    </h6>

                    </p>

                </div>
                <div class="card-footer text-success">
                    <i class="fa fa-gift" aria-hidden="true"></i> <a href="../offres/offre.html"
                        target="_blank">Voir Nos Offres</a>
                </div>
            </div>

        </div>



    </main>




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
