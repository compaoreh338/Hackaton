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

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">



</head>

<body class="app-Body jt-Body">
    <div class="app-Body__wrapper hp-Layout" data-testid="app-Body__wrapper">
        <header class="app-Header js-Header app-Header--sticky" role="banner">

            <div class="app-Header__wrapper js-Header-wrapper">
                <!-- logo oif -->


                <!-- premier navbar -->
                <div class="app-Header__topNav">
                    <div class="app-SubHeader">

                        <ul class="app-SubHeader__nav">


                            <li class="app-SubHeader__item app-SubHeader__item--active">
                                <a class="app-SubHeader__link app-SubHeader__link--active"
                                    href="{{ route('welcome') }}">
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
                                <a class="app-Nav__link " href="{{ route('entreprise') }}">Entreprises</a>
                            </li>


                            <li class="app-Nav__item app-Nav__item--offers">
                                <a class="app-Nav__link " href="{{ route('offre') }}">Offres</a>
                            </li>

                            <li class="app-Nav__item app-Nav__item--jobRoles">
                                <a class="app-Nav__link " href="{{ route('blog') }}">Blogs</a>
                            </li>

                            <li class="app-Nav__item app-Nav__item--advices">
                                <a class="app-Nav__link " href="{{ route('conseil') }}">Conseils</a>
                            </li>

                            <li class="app-Nav__item app-Nav__item--events">
                                <a class="app-Nav__link " href="{{ route('even') }}">Événements</a>
                            </li>

                            <li class="app-Nav__item app-Nav__item--events">
                                <a class="app-Nav__link " href="{{ route('propos') }}">A Propos</a>
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
                                            href="{{ route('login') }}">
                                            <div class="hdr-DropdownMenu-submenuLinkIcon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                    height="26">
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
                                        <a class="hdr-DropdownMenu-submenuLink signup"
                                            href="{{ route('register') }}">
                                            <div class="hdr-DropdownMenu-submenuLinkIcon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24">
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
                                    src="{{ URL::asset('front-hackathon/vue/assets/part-prog/auf.jpeg') }}"
                                    alt="Logo de l'application" class="app-Header__logo" />
                            </div>
                        </a>
                    </div>
                </nav>

                <!-- logo auf -->
                <div class="app-Header__logoWrapper">
                    <a aria-label="Accueil" data-testid="headerHomeLink" href="./index.html">
                        <div class="app-Brand app-Brand--header">
                            <img style="text-align: center;border:solid 1px transparent;border-radius:25px;padding:10px ;height:80px;width:150px"
                                src="{{ URL::asset('front-hackathon/vue/assets/part-prog/oif_logo.png') }}"
                                alt="Logo de l'application" class="app-Header__logo" />
                        </div>
                    </a>
                </div>

            </div>
        </header>


        <main>


            <!-- 1ere session -->
            <section class="hp-Layout__section hp-Hero">
                <div class="hp-Layout__sectionWrapper hp-Hero__section hp-Hero__section--leftText">
                    <div class="hp-Hero__content">
                        <div class="hp-Layout__titleWrapper">
                            <h1
                                class="jds-Text jds-Text--subhead jds-Text--weight-bold jds-Text--resetSpacing hp-Hero__subtitle">
                                D'CLICK_PRO, une nouvelle façon de trouver votre voie.
                            </h1>
                            <p class="jds-Text jds-Text--resetSpacing jds-Text--headingBig jds-Text--weight-extra-bold hp-Hero__title"
                                data-spacer="bottom-300">
                                Plus de 250 Jeunes Formées au Numérique, du stage au premier emploi
                            </p>
                        </div>
                        <div data-spacer="top-600">
                            <a href="./offres/offre.html" class="jds-Button">
                                <!-- Trouver un emploi -->Acceder au Offres
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hp-Layout__sectionWrapper hp-Layout__sectionWrapper--small hp-Hero__section hp-Hero__section--small hp-Hero__section--cover"
                    style="background-image: url('https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/hero-973739a23885ffa7f578b1e717c0fdedee6beb4d57dde969337864116d110328.jpg');">
                </div>
            </section>


            <div class="hp-Layout__groupSection">
                <style>
                    /* Images can't be used in SCSS files */
                    @media (min-width: 1440px) {
                        .hp-Explore__bgImage {
                            background-image: url('https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-extra@2x-7f16181a64daedaaeb9d4618d04f3af348f31b9196af946b41402a0b9610188b.jpg');
                        }
                    }
                </style>


                <!-- 2em session -->
                <section class="hp-Layout__section hp-Explore">
                    <div class="hp-Layout__sectionWrapper hp-Layout__sectionWrapper--withImage hp-Explore__bgImage">
                        <picture class="hp-Layout__image hp-Explore__imageWrapper">
                            <source media="(max-width: 479px)"
                                srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-small-c1a602083520c9a45f345f2734a97ba78f2d53af30eda3aa175cdd2efd50dfd2.jpg, 
            https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-small@2x-f372ffcd71b12c1c97f9511fd46436d408378216e234b34da9496ccf54b7b0a0.jpg 2x">
                            <source media="(max-width: 767px)"
                                srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-medium-342713c50459d4a1394e56e70d358af936775d6dd11423d5472402bcf149a90a.jpg, 
            https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-medium@2x-5dda5f3a6ea011264dc9ffcb0f713255fec081854670764d2cca2f20753c74e7.jpg 2x">
                            <source media="(max-width: 1024px)"
                                srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-large-58c74efb4be3eff6c3faa8a6e75f721afd4ab14d51b3a7bf0d9f135c53a08e44.jpg, 
            https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-large@2x-aab59105ddbc9c64d2b993b3dc7c5ab960d630bb770b933e8122a5edc5bddfa0.jpg 2x">
                            <img src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/explore-extra-e2a8b3a13a4ab981429666e41d1439bf785d8e43e7969f1f9fc4d76643419188.jpg"
                                alt="" class="hp-Explore__image" />
                        </picture>
                    </div>
                    <div
                        class="hp-Layout__sectionWrapper hp-Layout__sectionWrapper--small hp-Layout__sectionWrapper--right">
                        <div class="hp-Layout__textWrapper hp-Layout__textWrapper--right">
                            <header class="hp-Layout__titleWrapper">
                                <h2 class="jds-Text jds-Text--heading jds-Text--resetSpacing jds-Text--weight-bold jds-Text--white"
                                    data-spacer="bottom-400">
                                    Trouvez votre voie
                                </h2>
                                <p class="jds-Text jds-Text--resetSpacing jds-Text--label jds-Text--mainColor hp-Layout__subtitle"
                                    data-spacer="bottom-150">
                                    Explorer
                                </p>
                            </header>
                            <p class="jds-Text jds-Text--normal jds-Text--resetSpacing jds-Text--white">Votre parcours
                                est unique, comme vous. Que ce soit pour découvrir un métier auquel vous n’auriez jamais
                                pensé, ou trouver l’entreprise où vous épanouir, on vous accompagne. Notre objectif ?
                                Que vos choix professionnels soient en accord avec vos valeurs.</p>
                            <div class="" data-spacer="top-400">
                                <a href="blogs/blog.html" class="jds-Button jds-Button--minor" title="Métiers"
                                    data-spacer="right-200">
                                    Blogs
                                </a>
                                <a href="entreprises/entreprise.html" class="jds-Button jds-Button--minor"
                                    title="Entreprises">
                                    Entreprises
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 3eme session -->
                <section class="hp-Layout__section hp-Deepen">
                    <div class="hp-Layout__sectionWrapper hp-Layout__sectionWrapper--left">
                        <div class="hp-Layout__textWrapper">
                            <header class="hp-Layout__titleWrapper">
                                <h2 class="jds-Text jds-Text--heading jds-Text--resetSpacing jds-Text--weight-bold jds-Text--white"
                                    data-spacer="bottom-400">
                                    Préparez-vous
                                </h2>
                                <p class="jds-Text jds-Text--resetSpacing jds-Text--label jds-Text--mainColor hp-Layout__subtitle"
                                    data-spacer="bottom-150">
                                    approfondir
                                </p>
                            </header>
                            <p class="jds-Text jds-Text--normal jds-Text--resetSpacing jds-Text--white">Entrer sur le
                                marché du travail, c’est parfois un saut dans l’inconnu. Alors rien de mieux donc que
                                d’échanger avec des professionnels lors de nos évènements physiques et virtuels pour
                                élargir vos horizons et lever les doutes. Ajoutez-y nos conseils pratiques spécialement
                                conçus pour vous, et vous voilà prêts à vous lancer.</p>
                            <div data-spacer="top-400">
                                <a href="events/events.html" class="jds-Button jds-Button--minor" title="Événements"
                                    data-spacer="right-200">
                                    Événements
                                </a>
                                <a href="conseil/conseil.html" class="jds-Button jds-Button--minor" title="Conseils">
                                    Conseils
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hp-Layout__sectionWrapper hp-Layout__sectionWrapper--withImage">
                        <img class="hp-Layout__image hp-Deepen__image"
                            src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/deepen-562cdf902798680a102110ac041eacbe9e5783042d9eb78798cb8ed363459add.jpg"
                            srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/deepen@2x-80f4a5c53e3229f13e582e733e0e5acbadedaba32d4582554a4101ae5b015b67.jpg"
                            alt="" />
                    </div>
                </section>

                <!-- 4em session -->
                <section class="hp-Layout__section hp-Apply">
                    <div class="hp-Apply__wrapper">
                        <div
                            class="hp-Layout__sectionWrapper hp-Layout__sectionWrapper--withImage hp-Apply__sectionWithImage">
                            <picture>
                                <source media="(max-width: 480px)"
                                    srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-small-d4e9594d729a6c499640b801246e4ec57dd1cf65fcfa1727bf9581d4f65ef3eb.jpg, 
            https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-small@2x-3ac63da5ae768dcde80222d1669b3c62bb44fe0a2b7b5194b24507f1e2b58a50.jpg 2x">
                                <source media="(max-width: 768px)"
                                    srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-medium-dbf8a70b105119d216e1ab5df2a662f691b046469baab95fde43263b25a97514.jpg, 
            https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-medium@2x-590a6ae64ebf6cf515c1e99a1c05d4ca13e837f1ab405644de3f3e2f821b9bb7.jpg 2x">
                                <source media="(max-width: 1024px)"
                                    srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-large-e4036fc8e227baec43d6217872d820ed062f63c0b690805ebb4a1aec9f2e88ef.jpg, 
            https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-large@2x-3770e8e858ee74bb25ec7eb7bd1ab13ef7cb69dc6efce06e52cab9db2ff50395.jpg 2x">
                                <img class="hp-Layout__image hp-Apply__image"
                                    src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/apply-large-e4036fc8e227baec43d6217872d820ed062f63c0b690805ebb4a1aec9f2e88ef.jpg"
                                    alt="" />
                            </picture>
                        </div>
                        <div class="hp-Layout__sectionWrapper hp-Apply__section">
                            <div class="hp-Apply__sectionWrapper">
                                <div class="hp-Layout__textWrapper">
                                    <header class="hp-Layout__titleWrapper">
                                        <h2 class="jds-Text jds-Text--heading jds-Text--resetSpacing jds-Text--weight-bold"
                                            data-spacer="bottom-400">
                                            Lancez-vous
                                        </h2>
                                        <p class="jds-Text jds-Text--resetSpacing jds-Text--label jds-Text--mainColor"
                                            data-spacer="bottom-150">
                                            Postuler
                                        </p>
                                    </header>
                                    <p class="jds-Text jds-Text--normal jds-Text--resetSpacing">Un petit pas, puis un
                                        deuxième, puis vous voilà sur une voie, la vôtre. Ici, toutes les offres de
                                        stage et emploi sont adaptées aux profils étudiants et jeunes diplômés. Et comme
                                        il n’y pas qu’une seule façon de trouver sa voie, les recruteurs aussi peuvent
                                        vous contacter directement pour vous proposer des offres pertinentes. Vous avez
                                        du talent : faites-vous confiance.</p>
                                    <div data-spacer="top-400">
                                        <a href="offre/offre.html" class="jds-Button jds-Button--minor"
                                            title="Stages &amp; Emploi" data-spacer="right-200">
                                            Stages &amp; Emploi
                                        </a>
                                        <a href="entreprises/entreprise.html" class="jds-Button jds-Button--minor"
                                            title="Entreprises">
                                            Entreprises
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <!-- les partenaires de l'oif -->
            <section class="hp-Partners">
                <h2 class="jds-Text jds-Text--subhead jds-Text--weight-extra-bold" data-spacer="bottom-800">
                    Notre plateforme est la meilleurs ,avec un large reseau de partenaires</h2>
                <ul class="hp-Partners__list">
                    <li class="hp-Partners__item">
                        <a href="" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="LVMH" title="LVMH"
                                src="{{ URL::asset('front-hackathon/vue/assets/part-prog/anpe logo.jpg') }}" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/loreal" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="L&#39;Oréal" title="L&#39;Oréal"
                                src="{{ URL::asset('front-hackathon/vue/assets/part-prog/Wakatlab-True logo.jpeg ') }}" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/chanel" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="CHANEL" title="CHANEL"
                                src="/vue/assets/part-prog/Université Nazi Boni.jpeg" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/danone" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="DANONE" title="DANONE"
                                src="/vue/assets/part-prog/oif_logo.png" />
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/ubisoft" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="Ubisoft" title="Ubisoft"
                                src="/vue/assets/part-prog/NB-Z kdg.jpg" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/airbus" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="Airbus" title="Airbus"
                                src="/vue/assets/part-prog/auf.jpeg" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/disneyland-paris" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="Disneyland Paris" title="Disneyland Paris"
                                src="/vue/assets/prof/Jo'Fe digital.jpeg" />
                        </a>
                    </li>



                    <li class="hp-Partners__item">
                        <a href="/fr/companies/bnpparibas-international" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="BNP Paribas" title="BNP Paribas"
                                src="/vue/assets/part-prog/DIGITALES.jpeg" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/groupe-canal-plus" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="CANAL+ Group" title="CANAL+ Group"
                                src="/vue/assets/prof/Cidoc.png" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/kpmg" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="KPMG France" title="KPMG France"
                                src="/vue/assets/part-prog/incubuo.png" />
                        </a>
                    </li>

                    <li class="hp-Partners__item">
                        <a href="/fr/companies/publicis-groupe" class="hp-Partners__logoContainer">
                            <img class="hp-Partners__logo" alt="Publicis France" title="Publicis France"
                                src="/vue/assets/prof/Yulcom Technologies.jpeg" />
                        </a>
                    </li>

                </ul>
            </section>




            <!-- avant footer -->
            <div class="hp-Corporate">
                <div class="hp-Corporate__container">
                    <ul class="hp-Corporate__list">
                        <li class="hp-Corporate__item">
                            <a href="recruteur/recrut.html" class="hp-Corporate__link" title="Recruteur ?">
                                <article class="jds-Paper jds-Paper--noSpacing jds-Paper--radius hp-Corporate__card">
                                    <div class="hp-Corporate__cardShape">
                                        <img src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/corporate/company-90d0f1e5c758e22aa7c9fba0fe126c44957d001640bb535c9b827b9d62361446.jpg"
                                            srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/corporate/company@2x-f73622ba4932908290c44866cf76ef9c7b607113834bd370f787b5d55305c96b.jpg 2x"
                                            class="hp-Corporate__cardShapeChild" alt="" />
                                    </div>
                                    <div class="hp-Corporate__cardContent">
                                        <h2 class="hp-Corporate__cardTitle"> Recruteur ? </h2>
                                        <p class="jds-Text jds-Text--small jds-Text--resetSpacing jds-Text--grey">
                                            Recrutez dès maintenant les meilleurs jeunes talents!!!
                                        </p>
                                        <div data-spacer="top-300">
                                            <span class="jds-Link jds-Link--arrow hp-Corporate__cardLink">
                                                <span class="jds-Link__wrapper">
                                                    <span>En savoir plus</span>
                                                    <span class="jds-Link__hoverIcon">
                                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                            class="jds-Icon jds-Icon--small ">
                                                            <path
                                                                d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                                        </svg>

                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </li>
                        <li class="hp-Corporate__item">
                            <a href="apprenants/apprenant.html" class="hp-Corporate__link" title="Etablissement ?">
                                <article class="jds-Paper jds-Paper--noSpacing jds-Paper--radius hp-Corporate__card">
                                    <div class="hp-Corporate__cardShape">
                                        <img src="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/corporate/school-d68009b397def9c57a0ec5ac5aeb35a8567e64c53a84a6182dad52a9714e86a7.jpg"
                                            srcset="https://d2mp1cia79qmhd.cloudfront.net/prod/assets/homepage/corporate/school@2x-ec833ade001c943e78876de49a4eee1d53bfeb514af67d73d0cad8b49408a913.jpg 2x"
                                            class="hp-Corporate__cardShapeChild" alt="" />
                                    </div>
                                    <div class="hp-Corporate__cardContent">
                                        <h2 class="hp-Corporate__cardTitle"> Apprenants </h2>
                                        <p class="jds-Text jds-Text--small jds-Text--resetSpacing jds-Text--grey">
                                            Créez des relations privilégiées avec
                                            votre communauté d&#39;apprenants stagiaire au programme D'CLICK/OIF
                                        </p>
                                        <div data-spacer="top-300">
                                            <span class="jds-Link jds-Link--arrow hp-Corporate__cardLink">
                                                <span class="jds-Link__wrapper">
                                                    <span>En savoir plus</span>
                                                    <span class="jds-Link__hoverIcon">
                                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                            class="jds-Icon jds-Icon--small ">
                                                            <path
                                                                d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                                        </svg>

                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </main>


        <footer class="app-Footer">

            <div class="app-Footer__container">

                <div class="app-Footer__brand">
                    <!-- le logo partie footer -->
                    <!-- logo auf -->
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
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.facebook.com/jobteaser">
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
                                <a class="app-Footer__link" href="/fr/info/bts-bac2-bac3-alternance-emploi">Offres
                                    pour
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
                                <a class="app-Footer__link" href="/fr/companies/jobteaser/job-offers">Nous
                                    rejoindre</a>
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
                            <a class="app-Footer__link app-Footer__link--small"
                                href="/fr/about/privacy-policy">Politique de confidentialité</a>
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

    </div>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>




</body>

</html>
