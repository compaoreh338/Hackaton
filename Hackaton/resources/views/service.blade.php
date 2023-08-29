<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />


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

<body>

    <div id="__next">
        <div class="jsx-2806217201">
            <div class="Layout_container__vfesy">






                <!-- header -->
                <header class="app-Header js-Header app-Header--sticky" role="banner">

                    <div class="app-Header__wrapper js-Header-wrapper ">
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

                                    <li class="app-SubHeader__item ">
                                        <a class="app-SubHeader__link " href="{{ route('recruteur') }}">
                                            Recruteurs
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                class="jds-Icon jds-Icon--medium app-SubHeader__linkIcon">
                                                <path
                                                    d="M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z" />
                                            </svg>

                                        </a>
                                    </li>
                                    <li class="app-SubHeader__item app-SubHeader__item--active">
                                        <a class="app-SubHeader__link app-SubHeader__link--active"
                                            href="{{ route('service') }}">
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



                <main class="Layout_mainContent__Ny0av">
                    <div class="Hero_main__FflWW" data-theme="light">
                        <div class="layout_jds-Layout__hFF0F Hero_layout__Az4eS">
                            <div class="layouColumn_jds-LayoutColumn__QufQy Hero_layoutColum__sLupw">
                                <div class="Hero_gridWrapper__H_lwl Hero_gridWrapper--withTwoWorld__5QLeJ"
                                    data-highlighted-word-one="Plateforme" data-highlighted-word-two="Carrière">
                                    <div class="Hero_layoutTextBlock__4IdZG"
                                        style="
                        --backgroundImage: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTEiIGhlaWdodD0iMTc1IiBmaWxsPSJub25lIj48cGF0aCBzdHJva2U9InVybCgjYSkiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0ibTguMTMgMS41MDIgMTc0LjczOC0uMDM0YzUuNzU2LS4wMDIgOS40ODMgNi40NjMgNi42ODIgMTEuODEybC04Mi4xOCAxNTYuOTAyYy0yLjgwOSA1LjM2My0xMC4wOTUgNS41NTYtMTMuMTYyLjM1N0wxLjY1IDEzLjY3MUMtMS41MDUgOC4zMjUgMi4yIDEuNTAzIDguMTMgMS41MDJaIi8+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJhIiB4MT0iMTQ2LjE3NCIgeDI9Ii0xMC4zNjEiIHkxPSIyMTQuOTQ1IiB5Mj0iNDEuODU5IiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agb2Zmc2V0PSIuMTM1IiBzdG9wLWNvbG9yPSIjOUQyQ0ZGIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDBEMjAwIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PC9zdmc+);
                      ">
                                        <div
                                            class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--left__IicTW text_jds-Text--resetSpacing__gNair Hero_title__Jl_mH">
                                            <p>
                                                Révélez tout le potentiel de vos étudiants avec la
                                                plateforme carrière sur D-CLIC-Pro
                                            </p>
                                        </div>
                                        <div
                                            class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair Hero_subtitle__71ass">
                                        </div>
                                        <a tabindex="0"
                                            class="button_jds-Button__Cbo3A button_jds-Button--naked__wn4BF Hero_button__C13y5"
                                            title="Services carrières nous contacter" href="./contact.html">Demander
                                            une démo</a>
                                    </div>
                                    <div class="Hero_imagesWrapper__XM_Tq">
                                        <figure class="Hero_figureImagePrimary__zAAoL"
                                            style="
                          --backgroundImage: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTEiIGhlaWdodD0iMTc1IiBmaWxsPSJub25lIj48cGF0aCBzdHJva2U9InVybCgjYSkiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0ibTguMTMgMS41MDIgMTc0LjczOC0uMDM0YzUuNzU2LS4wMDIgOS40ODMgNi40NjMgNi42ODIgMTEuODEybC04Mi4xOCAxNTYuOTAyYy0yLjgwOSA1LjM2My0xMC4wOTUgNS41NTYtMTMuMTYyLjM1N0wxLjY1IDEzLjY3MUMtMS41MDUgOC4zMjUgMi4yIDEuNTAzIDguMTMgMS41MDJaIi8+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJhIiB4MT0iMTQ2LjE3NCIgeDI9Ii0xMC4zNjEiIHkxPSIyMTQuOTQ1IiB5Mj0iNDEuODU5IiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agb2Zmc2V0PSIuMTM1IiBzdG9wLWNvbG9yPSIjOUQyQ0ZGIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDBEMjAwIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PC9zdmc+);
                          --height: 1112px;
                        ">
                                            <img alt="Plateforme carrière de JobTeaser" fetchpriority="high"
                                                width="720" height="1112" decoding="async" data-nimg="1"
                                                class="Hero_imagePrimary__yQOGf"
                                                style="color: transparent; --widthImage: 720px" sizes="54vw"
                                                srcset="
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=384&amp;q=75   384w,
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=480&amp;q=75   480w,
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=768&amp;q=75   768w,
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=1024&amp;q=75 1024w,
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=1280&amp;q=75 1280w,
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=1440&amp;q=75 1440w,
                            /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F8fff632f-ebd5-4bd4-92b6-9f2858183d35%2FHero%2520Uni.png&amp;w=1920&amp;q=75 1920w
                          "
                                                src="/vue/src/img/bg2.png" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="layout_jds-Layout__hFF0F layout_jds-Layout--topPadding__vMye5 layout_jds-Layout--bottomPadding__sa1oV RichText_layout__xnQ4w RichText_layout--withImage__OzBFF">
                        <div class="layouColumn_jds-LayoutColumn__QufQy RichText_content__UotOt">
                            <div>
                                <div class="RichText_textContent__KRrzf">
                                    <p class="text_jds-Text__15y8h text_jds-Text--heading-small__0_01a text_jds-Text--resetSpacing__gNair text_jds-Text--weight-black__AYmOH RichText_title__ENy1t"
                                        data-spacer="bottom-400">
                                        Une plateforme tout-en-un pour les services carrières
                                    </p>
                                    <div
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ RichText_text__gtkCZ">
                                        <p>
                                            Passez au niveau supérieur avec une plateforme carrière
                                            qui offre une solution complète pour gérer vos
                                            communications, engager vos étudiants et augmenter leur
                                            employabilité
                                        </p>
                                        <ol>
                                            <li>
                                                100% gratuite et personnalisable selon vos besoins
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ RichText_text__gtkCZ">
                                </div>
                                <a data-spacer="top-400" tabindex="0"
                                    class="button_jds-Button__Cbo3A RichText_button__FArBS"
                                    title="Services carrières nous contacter"
                                    href="/fr/corporate/services-carrieres-nous-contacter">Essayer maintenant</a>
                            </div>
                        </div>
                        <div class="layouColumn_jds-LayoutColumn__QufQy layouColumn_jds-LayoutColumn--fixedWidth__JCI_8 RichText_columnImages__gcb2k"
                            style="--layout-column-number: 5">
                            <picture class="RichText_imageWrapper__PDUgz"
                                style="--heightImage: 1552px; --widthImage: 1878px"><img
                                    alt="Une plateforme tout-en-un pour les services carrières" loading="lazy"
                                    width="1878" height="1552" decoding="async" data-nimg="1"
                                    class="RichText_image__1OU18" style="color: transparent"
                                    sizes="(min-width: 48rem) 100vw, 75vw"
                                    srcset="
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=384&amp;q=75   384w,
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=480&amp;q=75   480w,
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=768&amp;q=75   768w,
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=1024&amp;q=75 1024w,
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=1280&amp;q=75 1280w,
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=1440&amp;q=75 1440w,
                      /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=1920&amp;q=75 1920w
                    "
                                    src="/_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2%2FUni%25201.jpeg&amp;w=1920&amp;q=75" />
                            </picture>
                        </div>
                    </div>
                    <div
                        class="layout_jds-Layout__hFF0F layout_jds-Layout--topPadding__vMye5 layout_jds-Layout--bottomPadding__sa1oV layout_jds-Layout--isFullWidth__Lkbb3 Partners_main__ItI1h">
                        <div class="layouColumn_jds-LayoutColumn__QufQy Partners_wrapper__L0BMH">
                            <h2
                                class="text_jds-Text__15y8h text_jds-Text--heading-small__0_01a text_jds-Text--center__d0pko text_jds-Text--resetSpacing__gNair text_jds-Text--weight-black__AYmOH Title_title__AcGZQ Partners_title__fj_VT">
                                Ils font déjà partie du réseau JobTeaser :
                            </h2>
                            <a tabindex="0"
                                class="button_jds-Button__Cbo3A button_jds-Button--ghost__lXkuc Partners_button__1bKeO"
                                title="Notre réseau d&#x27;écoles et d&#x27;universités"
                                href="/fr/corporate/notre-reseau-d-ecoles-et-d-universites">Notre réseau d&#x27;écoles
                                et universités</a>
                        </div>
                    </div>
                    <div class="layout_jds-Layout__hFF0F">
                        <div class="layouColumn_jds-LayoutColumn__QufQy VerticalSlider_section__fOGLu">
                            <p
                                class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair text_jds-Text--weight-bold__KNxoa VerticalSlider_title__g6TjO">
                            </p>
                            <article id="VerticalSliderSection_1"
                                class="VerticalSlider_article__4TMFh VerticalSlider_current__E2VQm">
                                <div class="VerticalSlider_medias__y1k5n">
                                    <img alt="Boostez l&#x27;engagement de vos étudiants" loading="lazy"
                                        width="1878" height="1552" decoding="async" data-nimg="1"
                                        class="VerticalSlider_image__XDsr4" style="color: transparent"
                                        sizes="(min-width: 48rem) 75vw, 100vw"
                                        srcset="
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=384&amp;q=75   384w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=480&amp;q=75   480w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=768&amp;q=75   768w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=1024&amp;q=75 1024w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=1280&amp;q=75 1280w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=1440&amp;q=75 1440w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=1920&amp;q=75 1920w
                      "
                                        src="/_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F0d76cb11-31d2-4af2-9130-35096fd5e38d%2FUni%25202.jpeg&amp;w=1920&amp;q=75" />
                                </div>
                                <div class="VerticalSlider_content__RkCu3">
                                    <p
                                        class="text_jds-Text__15y8h text_jds-Text--heading-small__0_01a text_jds-Text--resetSpacing__gNair text_jds-Text--weight-black__AYmOH VerticalSlider_articleTitle__uBtCk">
                                        Boostez l&#x27;engagement de vos étudiants
                                    </p>
                                    <div
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair VerticalSlider_text__p4z_i">
                                        <ul>
                                            <li>
                                                Engagez vos étudiants grâce à une plateforme intuitive
                                                et une application mobile spécialement conçues pour
                                                leur offrir une expérience optimale
                                            </li>
                                            <li>
                                                Offrez un parcours d&#x27;orientation complet, des
                                                milliers d&#x27;opportunités professionnelles, ainsi
                                                que du contenu et des outils de découverte du marché
                                                du travail
                                            </li>
                                            <li>
                                                Informez vos étudiants sur les événements que vous
                                                organisez
                                            </li>
                                        </ul>
                                    </div>
                                    <p
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair text_jds-Text--weight-bold__KNxoa VerticalSlider_ctaTitle__og_ox">
                                    </p>
                                </div>
                            </article>
                            <article id="VerticalSliderSection_2" class="VerticalSlider_article__4TMFh">
                                <div class="VerticalSlider_medias__y1k5n">
                                    <img alt="Renforcez votre service carrières" loading="lazy" width="1878"
                                        height="1552" decoding="async" data-nimg="1"
                                        class="VerticalSlider_image__XDsr4" style="color: transparent"
                                        sizes="(min-width: 48rem) 75vw, 100vw"
                                        srcset="
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=384&amp;q=75   384w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=480&amp;q=75   480w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=768&amp;q=75   768w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=1024&amp;q=75 1024w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=1280&amp;q=75 1280w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=1440&amp;q=75 1440w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=1920&amp;q=75 1920w
                      "
                                        src="/_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2Fd81081db-f7d1-46e8-90d4-3d399c312fb4%2FUni%25204.jpeg&amp;w=1920&amp;q=75" />
                                </div>
                                <div class="VerticalSlider_content__RkCu3">
                                    <p
                                        class="text_jds-Text__15y8h text_jds-Text--heading-small__0_01a text_jds-Text--resetSpacing__gNair text_jds-Text--weight-black__AYmOH VerticalSlider_articleTitle__uBtCk">
                                        Renforcez votre service carrière
                                    </p>
                                    <div
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair VerticalSlider_text__p4z_i">
                                        <ul>
                                            <li>
                                                Gérez tous les modules de votre plateforme carrière au
                                                même endroit
                                            </li>
                                            <li>Valorisez vos partenariats avec les entreprises</li>
                                            <li>
                                                Gagnez du temps sur les tâches administratives et
                                                concentrez vous sur votre mission au près des
                                                étudiants
                                            </li>
                                            <li>
                                                Bénéficiez d&#x27;un accompagnement personnalisé pour
                                                exploiter tout le potentiel de la plateforme
                                            </li>
                                        </ul>
                                    </div>
                                    <p
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair text_jds-Text--weight-bold__KNxoa VerticalSlider_ctaTitle__og_ox">
                                    </p>
                                </div>
                            </article>
                            <article id="VerticalSliderSection_3" class="VerticalSlider_article__4TMFh">
                                <div class="VerticalSlider_medias__y1k5n">
                                    <img alt="Boostez l&#x27;engagement de vos étudiants" loading="lazy"
                                        width="1878" height="1552" decoding="async" data-nimg="1"
                                        class="VerticalSlider_image__XDsr4" style="color: transparent"
                                        sizes="(min-width: 48rem) 75vw, 100vw"
                                        srcset="
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=384&amp;q=75   384w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=480&amp;q=75   480w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=768&amp;q=75   768w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=1024&amp;q=75 1024w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=1280&amp;q=75 1280w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=1440&amp;q=75 1440w,
                        /_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=1920&amp;q=75 1920w
                      "
                                        src="/_next/image/img.jpg?url=https%3A%2F%2Fassets-eu-01.kc-usercontent.com%3A443%2Fd0ab3c4d-3ec6-0150-71bd-939f3db14bb9%2F07304e26-b261-4490-a2fb-c7a58c0c8133%2FUni%25205.jpeg&amp;w=1920&amp;q=75" />
                                </div>
                                <div class="VerticalSlider_content__RkCu3">
                                    <p
                                        class="text_jds-Text__15y8h text_jds-Text--heading-small__0_01a text_jds-Text--resetSpacing__gNair text_jds-Text--weight-black__AYmOH VerticalSlider_articleTitle__uBtCk">
                                        Profitez de notre réseau unique
                                    </p>
                                    <div
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair VerticalSlider_text__p4z_i">
                                        <ul>
                                            <li>Échangez avec plus de 750 écoles et universités</li>
                                            <li>
                                                Bénéficiez de partages d&#x27;expériences et bonnes
                                                pratiques
                                            </li>
                                            <li>Assistez aux événements exclusifs du réseau</li>
                                        </ul>
                                    </div>
                                    <p
                                        class="text_jds-Text__15y8h text_jds-Text--normal__VuON_ text_jds-Text--resetSpacing__gNair text_jds-Text--weight-bold__KNxoa VerticalSlider_ctaTitle__og_ox">
                                    </p>
                                </div>
                            </article>

                        </div>
                    </div>






                    <div class="card" style="margin: 20px;border-radius:25px;">

                        <div class="card-body bg-primary d-flex" style=" padding:20px;">
                            <h5 class="card-title">
                                <h1 class="card-text text-light">Aidez vos étudiants à atteindre <br>leurs objectifs
                                    professionnels
                                    <a href="#" class="btn btn-light text-black btn-center"
                                        style="margin-left: 500px;">COMMENCER</a>
                                </h1>

                            </h5>


                        </div>
                    </div>
                </main>




            </div>
            <div class="NotificationsPanel_NotificationsPanel___FduS" data-testid="notification-panel" role="status"
                aria-live="polite" aria-atomic="true">




                <script id="__NEXT_DATA__" type="application/json">
            {
              "props": {
                "pageProps": {
                  "dehydratedState": {
                    "mutations": [],
                    "queries": [
                      {
                        "state": {
                          "data": {
                            "idOld": "0",
                            "id": "00000000-0000-0000-0000-000000000000",
                            "mainCareerCenterId": "",
                            "name": "JobTeaser",
                            "logo": "",
                            "secondaryLogo": "",
                            "careerCenterConf": {
                              "careerCenterNameLocalized": "",
                              "customResourceLocale": "Ressources",
                              "theme": {
                                "mainColor": "",
                                "mainDarkenColor": "",
                                "mainTextColor": "",
                                "buttonTextColor": "",
                                "headerColor": "",
                                "headerTextColor": "",
                                "boxTitleColor": ""
                              },
                              "locales": [
                                "ca",
                                "cs",
                                "da",
                                "de",
                                "en",
                                "es",
                                "fi",
                                "fr",
                                "gl",
                                "it",
                                "no",
                                "nl",
                                "pl",
                                "pt",
                                "sv"
                              ],
                              "modules": {
                                "hasJobOffers": true,
                                "hasAdvices": true,
                                "hasAppointments": false,
                                "hasArticles": true,
                                "hasEvents": true,
                                "hasAppointmentsLaunchedInFo": true,
                                "hasGenericPositions": true,
                                "hasEnrolment": false,
                                "hasHighlightPartners": false
                              },
                              "timeZoneIdentifier": ""
                            },
                            "mainCareerCenterConf": null,
                            "intranet": false,
                            "shortName": "Jobteaser"
                          },
                          "dataUpdateCount": 1,
                          "dataUpdatedAt": 1693194938336,
                          "error": null,
                          "errorUpdateCount": 0,
                          "errorUpdatedAt": 0,
                          "fetchFailureCount": 0,
                          "fetchFailureReason": null,
                          "fetchMeta": null,
                          "isInvalidated": false,
                          "status": "success",
                          "fetchStatus": "idle"
                        },
                        "queryKey": ["career-center", "www"],
                        "queryHash": "[\"career-center\",\"www\"]"
                      },
                      {
                        "state": {
                          "data": [
                            {
                              "id": "f3c6f811-8865-4c86-b9c9-ff50a26bd21e",
                              "slug": "alternance",
                              "mainTitle": "Trouvez votre alternance avec JobTeaser",
                              "subtitle": "",
                              "footerTitle": "Offres en alternance",
                              "language": "fr",
                              "lastModified": "2023-06-02T08:42:55.106132100Z"
                            },
                            {
                              "id": "adb3b571-394c-4352-9f53-c7a6d1321bae",
                              "slug": "bts-bac2-bac3-alternance-emploi",
                              "mainTitle": "Bac+2, Bac+3, BTS :  trouvez votre alternance et emploi (CDI, CDD)",
                              "subtitle": "",
                              "footerTitle": "Offres pour Bac+2, Bac+3, BTS",
                              "language": "fr",
                              "lastModified": "2023-06-02T07:20:08.433184600Z"
                            }
                          ],
                          "dataUpdateCount": 1,
                          "dataUpdatedAt": 1693194938346,
                          "error": null,
                          "errorUpdateCount": 0,
                          "errorUpdatedAt": 0,
                          "fetchFailureCount": 0,
                          "fetchFailureReason": null,
                          "fetchMeta": null,
                          "isInvalidated": false,
                          "status": "success",
                          "fetchStatus": "idle"
                        },
                        "queryKey": ["footer::links"],
                        "queryHash": "[\"footer::links\"]"
                      }
                    ]
                  },
                  "translations": {
                    "module_footer_fo.about": "A propos",
                    "module_footer_fo.about_us": "À propos",
                    "module_footer_fo.career_center_by_jobteaser": "Le Career Center par JobTeaser",
                    "module_footer_fo.companies": "Entreprises",
                    "module_footer_fo.cookies": "Cookies",
                    "module_footer_fo.corporate_website": "Notre offre Entreprise",
                    "module_footer_fo.discover_companies": "Découvrir les entreprises",
                    "module_footer_fo.jobteaser_facebook_url": "https://www.facebook.com/jobteaser",
                    "module_footer_fo.jobteaser_for_companies": "JobTeaser pour les entreprises",
                    "module_footer_fo.jobteaser_instagram_url": "https://www.instagram.com/jobteaser_fr/",
                    "module_footer_fo.jobteaser_tiktok_url": "https://www.tiktok.com/@jobteaser_fr?",
                    "module_footer_fo.jobteaser_youtube_url": "https://www.youtube.com/user/jobteaser",
                    "module_footer_fo.join_us": "Nous rejoindre",
                    "module_footer_fo.legal": "Mentions légales",
                    "module_footer_fo.meet_the_team": "Rencontrer notre équipe",
                    "module_footer_fo.our_career_center_product": "Notre offre Career Center",
                    "module_footer_fo.our_network": "Nos établissements partenaires",
                    "module_footer_fo.our_partner_institutions": "Nos établissements partenaires",
                    "module_footer_fo.our_solutions": "Nos solutions",
                    "module_footer_fo.presskit": "Presse et médias kit",
                    "module_footer_fo.privacy_policy": "Politique de confidentialité",
                    "module_footer_fo.recruiting_advice": "Conseils recrutement",
                    "module_footer_fo.recruiting_events": "Evénements recrutement",
                    "module_footer_fo.schools_universities": "Écoles \u0026 Universités",
                    "module_footer_fo.search_jobs": "Chercher une offre",
                    "module_footer_fo.security.page_label": "Sécurité",
                    "module_footer_fo.sign_up": "S'inscrire",
                    "module_footer_fo.status_page": "Statut",
                    "module_footer_fo.students": "Étudiants",
                    "module_footer_fo.website_goal": "Site d'orientation professionnelle",
                    "shared_languages.aa": "Afar",
                    "shared_languages.ab": "Abkhaze",
                    "shared_languages.ae": "Avestique",
                    "shared_languages.af": "Afrikaans",
                    "shared_languages.ak": "Akan",
                    "shared_languages.am": "Amharique",
                    "shared_languages.an": "Aragonais",
                    "shared_languages.ar": "Arabe",
                    "shared_languages.as": "Assamais",
                    "shared_languages.av": "Avar",
                    "shared_languages.ay": "Aymara",
                    "shared_languages.az": "Azéri",
                    "shared_languages.ba": "Bachkir",
                    "shared_languages.be": "Biélorusse",
                    "shared_languages.bg": "Bulgare",
                    "shared_languages.bh": "Langues biharis",
                    "shared_languages.bi": "Bichlamar",
                    "shared_languages.bm": "Bambara",
                    "shared_languages.bn": "Bengali",
                    "shared_languages.bo": "Tibétain",
                    "shared_languages.br": "Breton",
                    "shared_languages.bs": "Bosniaque",
                    "shared_languages.ca": "Catalan",
                    "shared_languages.ce": "Tchétchène",
                    "shared_languages.ch": "Chamorro",
                    "shared_languages.co": "Corse",
                    "shared_languages.cr": "Cree",
                    "shared_languages.cs": "Tchèque",
                    "shared_languages.cu": "Slavon d'église; vieux slave; slavon liturgique; vieux bulgare",
                    "shared_languages.cv": "Tchouvache",
                    "shared_languages.cy": "Gallois",
                    "shared_languages.da": "Danois",
                    "shared_languages.de": "Allemand",
                    "shared_languages.dv": "Maldivien",
                    "shared_languages.dz": "Dzongkha",
                    "shared_languages.ee": "Ewé",
                    "shared_languages.el": "Grec",
                    "shared_languages.en": "Anglais",
                    "shared_languages.eo": "Espéranto",
                    "shared_languages.es": "Espagnol",
                    "shared_languages.et": "Estonien",
                    "shared_languages.eu": "Basque",
                    "shared_languages.fa": "Persan",
                    "shared_languages.ff": "Peul",
                    "shared_languages.fi": "Finnois",
                    "shared_languages.fj": "Fidjien",
                    "shared_languages.fo": "Féroïen",
                    "shared_languages.fr": "Français",
                    "shared_languages.fy": "Frison occidental",
                    "shared_languages.ga": "Irlandais",
                    "shared_languages.gd": "Gaélique; gaélique écossais",
                    "shared_languages.gl": "Galicien",
                    "shared_languages.gn": "Guarani",
                    "shared_languages.gu": "Goudjrati",
                    "shared_languages.gv": "Manx; mannois",
                    "shared_languages.ha": "Haoussa",
                    "shared_languages.he": "Hébreu",
                    "shared_languages.hi": "Hindi",
                    "shared_languages.ho": "Hiri motu",
                    "shared_languages.hr": "Croate",
                    "shared_languages.ht": "Haïtien; créole haïtien",
                    "shared_languages.hu": "Hongrois",
                    "shared_languages.hy": "Arménien",
                    "shared_languages.hz": "Herero",
                    "shared_languages.ia": "Interlingua (langue auxiliaire internationale)",
                    "shared_languages.id": "Indonésien",
                    "shared_languages.ie": "Interlingue",
                    "shared_languages.ig": "Igbo",
                    "shared_languages.ii": "Yi de sichuan",
                    "shared_languages.ik": "Inupiaq",
                    "shared_languages.io": "Ido",
                    "shared_languages.is": "Islandais",
                    "shared_languages.it": "Italien",
                    "shared_languages.iu": "Inuktitut",
                    "shared_languages.ja": "Japonais",
                    "shared_languages.jv": "Javanais",
                    "shared_languages.ka": "Géorgien",
                    "shared_languages.kg": "Kongo",
                    "shared_languages.ki": "Kikuyu",
                    "shared_languages.kj": "Kuanyama; kwanyama",
                    "shared_languages.kk": "Kazakh",
                    "shared_languages.kl": "Groenlandais",
                    "shared_languages.km": "Khmer central",
                    "shared_languages.kn": "Kannada",
                    "shared_languages.ko": "Coréen",
                    "shared_languages.kr": "Kanouri",
                    "shared_languages.ks": "Kashmiri",
                    "shared_languages.ku": "Kurde",
                    "shared_languages.kv": "Kom",
                    "shared_languages.kw": "Cornique",
                    "shared_languages.ky": "Kirghiz",
                    "shared_languages.la": "Latin",
                    "shared_languages.lb": "Luxembourgeois",
                    "shared_languages.lg": "Ganda",
                    "shared_languages.li": "Limbourgeois",
                    "shared_languages.ln": "Lingala",
                    "shared_languages.lo": "Lao",
                    "shared_languages.lt": "Lituanien",
                    "shared_languages.lu": "Luba-katanga",
                    "shared_languages.lv": "Letton",
                    "shared_languages.mg": "Malgache",
                    "shared_languages.mh": "Marshall",
                    "shared_languages.mi": "Maori",
                    "shared_languages.mk": "Macédonien",
                    "shared_languages.ml": "Malayalam",
                    "shared_languages.mn": "Mongol",
                    "shared_languages.mr": "Marathe",
                    "shared_languages.ms": "Malais",
                    "shared_languages.mt": "Maltais",
                    "shared_languages.my": "Birman",
                    "shared_languages.na": "Nauruan",
                    "shared_languages.nb": "Norvégien bokmål",
                    "shared_languages.nd": "Ndébélé du nord",
                    "shared_languages.ne": "Népalais",
                    "shared_languages.ng": "Ndonga",
                    "shared_languages.nl": "Néerlandais",
                    "shared_languages.nn": "Norvégien nynorsk; nynorsk, norvégien",
                    "shared_languages.no": "Norvégien",
                    "shared_languages.nr": "Ndébélé du sud",
                    "shared_languages.nv": "Navaho",
                    "shared_languages.ny": "Chichewa; chewa; nyanja",
                    "shared_languages.oc": "Occitan (après 1500); provençal",
                    "shared_languages.oj": "Ojibwa",
                    "shared_languages.om": "Galla",
                    "shared_languages.or": "Oriya",
                    "shared_languages.os": "Ossète",
                    "shared_languages.pa": "Pendjabi",
                    "shared_languages.pi": "Pali",
                    "shared_languages.pl": "Polonais",
                    "shared_languages.ps": "Pachto",
                    "shared_languages.pt": "Portugais",
                    "shared_languages.qu": "Quechua",
                    "shared_languages.rm": "Romanche",
                    "shared_languages.rn": "Rundi",
                    "shared_languages.ro": "Roumain",
                    "shared_languages.ru": "Russe",
                    "shared_languages.rw": "Rwanda",
                    "shared_languages.sa": "Sanskrit",
                    "shared_languages.sc": "Sarde",
                    "shared_languages.sd": "Sindhi",
                    "shared_languages.se": "Sami du nord",
                    "shared_languages.sg": "Sango",
                    "shared_languages.si": "Singhalais",
                    "shared_languages.sk": "Slovaque",
                    "shared_languages.sl": "Slovène",
                    "shared_languages.sm": "Samoan",
                    "shared_languages.sn": "Shona",
                    "shared_languages.so": "Somali",
                    "shared_languages.sq": "Albanais",
                    "shared_languages.sr": "Serbe",
                    "shared_languages.ss": "Swati",
                    "shared_languages.st": "Sotho du sud",
                    "shared_languages.su": "Soundanais",
                    "shared_languages.sv": "Suédois",
                    "shared_languages.sw": "Swahili",
                    "shared_languages.ta": "Tamoul",
                    "shared_languages.te": "Télougou",
                    "shared_languages.tg": "Tadjik",
                    "shared_languages.th": "Thaï",
                    "shared_languages.ti": "Tigrigna",
                    "shared_languages.tk": "Turkmène",
                    "shared_languages.tl": "Tagalog",
                    "shared_languages.tn": "Tswana",
                    "shared_languages.to": "Tongan (Îles tonga)",
                    "shared_languages.tr": "Turc",
                    "shared_languages.ts": "Tsonga",
                    "shared_languages.tt": "Tatar",
                    "shared_languages.tw": "Twi",
                    "shared_languages.ty": "Tahitien",
                    "shared_languages.ug": "Ouïgour",
                    "shared_languages.uk": "Ukrainien",
                    "shared_languages.ur": "Ourdou",
                    "shared_languages.uz": "Ouszbek",
                    "shared_languages.ve": "Venda",
                    "shared_languages.vi": "Vietnamien",
                    "shared_languages.vo": "Volapük",
                    "shared_languages.wa": "Wallon",
                    "shared_languages.wo": "Wolof",
                    "shared_languages.xh": "Xhosa",
                    "shared_languages.yi": "Yiddish",
                    "shared_languages.yo": "Yoruba",
                    "shared_languages.za": "Zhuang; chuang",
                    "shared_languages.zh": "Chinois",
                    "shared_languages.zu": "Zoulou",
                    "shared_select_input.apply": "Appliquer",
                    "shared_select_input.clear": "Effacer",
                    "shared_select_input.close": "Fermer",
                    "shared_select_input.items_selected_one": "%{number} élément sélectionné",
                    "shared_select_input.items_selected_other": "%{number} éléments sélectionnés",
                    "shared_select_input.items_selected_zero": "%{number} élément sélectionné",
                    "shared_select_input.select_all": "Tout sélectionner",
                    "shared_select_input.select_results": "Sélectionner ces résultats",
                    "shared_select_input.type_to_search": "Tapez pour chercher",
                    "shared_select_input.unselect_all": "Tout désélectionner",
                    "shared_select_input.unselect_results": "Désélectionner ces résultats",
                    "module_header_fo.dropdown_my_account": "Mon compte",
                    "module_header_fo.dropdown_signin_description": "Découvrez les nouveaux contenus publiés depuis votre dernière connexion.",
                    "module_header_fo.dropdown_signin_title": "Connexion",
                    "module_header_fo.dropdown_signup_description": "Postulez aux offres et participez aux événements.",
                    "module_header_fo.dropdown_signup_title": "Inscription",
                    "module_header_fo.home": "Accueil",
                    "module_header_fo.icon_menu": "Menu",
                    "module_header_fo.language": "Langue",
                    "module_header_fo.nav_account_settings": "Paramètres",
                    "module_header_fo.nav_admin_space": "Admin",
                    "module_header_fo.nav_advices": "Conseils",
                    "module_header_fo.nav_appointments": "Rendez-vous",
                    "module_header_fo.nav_community_discussions": "Discussions",
                    "module_header_fo.nav_community_insights": "Expériences",
                    "module_header_fo.nav_community_v2": "Communauté",
                    "module_header_fo.nav_companies": "Entreprises",
                    "module_header_fo.nav_companies_short": "Entreprises",
                    "module_header_fo.nav_consent_section_link_title": "Confidentialité",
                    "module_header_fo.nav_dashboard": "Espace perso",
                    "module_header_fo.nav_dashboard_short": "Espace perso",
                    "module_header_fo.nav_disconnect": "Déconnexion",
                    "module_header_fo.nav_events": "Événements",
                    "module_header_fo.nav_jobs": "Métiers",
                    "module_header_fo.nav_jobs_roles": "Métiers",
                    "module_header_fo.nav_manage_my_space": "Administration",
                    "module_header_fo.nav_my_account": "Reprendre mon compte",
                    "module_header_fo.nav_my_profile": "Mon profil",
                    "module_header_fo.nav_my_space": "Mon espace",
                    "module_header_fo.nav_offers": "Offres",
                    "module_header_fo.nav_offers_short": "Offres",
                    "module_header_fo.nav_resources": "Ressources"
                  },
                  "page": {
                    "title": "Services Carrières",
                    "slug": "services-carrieres",
                    "menuTitle": "",
                    "persona": ["university"],
                    "isPersonaRoot": ["true"],
                    "image": [],
                    "sections": [
                      {
                        "title": [
                          {
                            "tagName": "p",
                            "children": [
                              {
                                "content": "Révélez tout le potentiel de vos étudiants avec la plateforme carrière de JobTeaser",
                                "type": "text"
                              }
                            ],
                            "type": "tag"
                          }
                        ],
                        "description": [],
                        "ctaLink": [
                          {
                            "title": "Services carrières nous contacter",
                            "slug": "services-carrieres-nous-contacter",
                            "menuTitle": "Nous contacter",
                            "persona": ["university"],
                            "isPersonaRoot": ["false"],
                            "image": [],
                            "subtitle": "",
                            "shortDescription": "",
                            "childrenPagesTitle": "",
                            "redirection": "",
                            "metaDescription": "Contact us",
                            "metaImage": [],
                            "metaRobots": [],
                            "type": "growth___corporate_page"
                          }
                        ],
                        "ctaTitle": "Demander une démo",
                        "mainImage": [
                          {
                            "name": "Hero Uni.png",
                            "description": "Plateforme carrière de JobTeaser",
                            "type": "image/png",
                            "size": 1580755,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/8fff632f-ebd5-4bd4-92b6-9f2858183d35/Hero%20Uni.png",
                            "width": 720,
                            "height": 1112,
                            "renditions": {}
                          }
                        ],
                        "secondaryImage": [],
                        "highlightedWords": "Plateforme Carrière",
                        "theme": ["light"],
                        "type": "growth___corporate_page_section___hero"
                      },
                      {
                        "title": "Une plateforme tout-en-un pour les services carrières",
                        "text1": [
                          {
                            "tagName": "p",
                            "children": [
                              {
                                "content": "Passez au niveau supérieur avec une plateforme carrière qui offre une solution complète pour gérer vos communications, engager vos étudiants et augmenter leur employabilité",
                                "type": "text"
                              }
                            ],
                            "type": "tag"
                          },
                          {
                            "tagName": "ol",
                            "children": [
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "100% gratuite et personnalisable selon vos besoins",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "type": "tag"
                          }
                        ],
                        "text2": [],
                        "images": [
                          {
                            "name": "Uni 1.jpeg",
                            "description": "Une plateforme tout-en-un pour les services carrières",
                            "type": "image/jpeg",
                            "size": 130010,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/769f8113-8ae3-4c0c-9fc7-a0d9c1f891f2/Uni%201.jpeg",
                            "width": 1878,
                            "height": 1552,
                            "renditions": {}
                          }
                        ],
                        "testimonies": [],
                        "stepNumber": "",
                        "ctaLink": [
                          {
                            "title": "Services carrières nous contacter",
                            "slug": "services-carrieres-nous-contacter",
                            "menuTitle": "Nous contacter",
                            "persona": ["university"],
                            "isPersonaRoot": ["false"],
                            "image": [],
                            "subtitle": "",
                            "shortDescription": "",
                            "childrenPagesTitle": "",
                            "redirection": "",
                            "metaDescription": "Contact us",
                            "metaImage": [],
                            "metaRobots": [],
                            "type": "growth___corporate_page"
                          }
                        ],
                        "ctaTitle": "Essayer maintenant",
                        "type": "growth___corporate_page_section___rich_text"
                      },
                      {
                        "title": "Ils font déjà partie du réseau JobTeaser :",
                        "ctaLink": [
                          {
                            "title": "Notre réseau d'écoles et d'universités",
                            "slug": "notre-reseau-d-ecoles-et-d-universites",
                            "menuTitle": "",
                            "persona": [],
                            "isPersonaRoot": ["false"],
                            "image": [],
                            "subtitle": "",
                            "shortDescription": "",
                            "childrenPagesTitle": "",
                            "redirection": "",
                            "metaDescription": "Discover our exclusive partnership with more than 750 schools and universities across Europe. ",
                            "metaImage": [],
                            "metaRobots": [],
                            "type": "growth___corporate_page"
                          }
                        ],
                        "ctaTitle": "Notre réseau d'écoles et universités",
                        "logos": [
                          {
                            "name": "Kedgebs-logo.png",
                            "description": null,
                            "type": "image/png",
                            "size": 48264,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/90cc9cf6-5cad-4831-a3d7-043ae9042ee1/Kedgebs-logo.png",
                            "width": 512,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Universität_Stuttgart_Logo.png",
                            "description": null,
                            "type": "image/png",
                            "size": 33948,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/f6fc474c-c4a8-4c50-85d6-661ab89b4150/Universita%CC%88t_Stuttgart_Logo.png",
                            "width": 1138,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Tampere_University_logo.png",
                            "description": null,
                            "type": "image/png",
                            "size": 32651,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/d93e44ba-39aa-405d-a996-ed994a59919f/Tampere_University_logo.png",
                            "width": 656,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Uniroma1.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 100665,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/5c9a306e-735b-4d18-83c9-c156ed83d492/Uniroma1.svg.png",
                            "width": 854,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "1200px-Logo_ISCTE_Instituto_Universitário_de_Lisboa.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 40383,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/2a222bad-80e7-4b9e-b441-fd78206391d2/1200px-Logo_ISCTE_Instituto_Universita%CC%81rio_de_Lisboa.svg.png",
                            "width": 1617,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "2560px-Logo_Université_Paris-Nanterre.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 45688,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/98ada5b2-65ad-45c4-8bf1-9f90bf34fe9b/2560px-Logo_Universite%CC%81_Paris-Nanterre.svg.png",
                            "width": 1008,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "1200px-Modul-logo.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 70416,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/1077d0c2-bebb-4f2b-aa07-0c0dcc13eea1/1200px-Modul-logo.svg.png",
                            "width": 683,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "1280px-Technische_Universität_Dortmund_Logo.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 55288,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/949a11e0-3930-45b4-9cce-dc12ede6d111/1280px-Technische_Universita%CC%88t_Dortmund_Logo.svg.png",
                            "width": 1285,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "2560px-King's_College_London_logo.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 29220,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/86c53851-53e2-429b-abe8-9c41b60657eb/2560px-King%27s_College_London_logo.svg.png",
                            "width": 336,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Aix-Marseille_université_(logo).png",
                            "description": null,
                            "type": "image/png",
                            "size": 36480,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/53177325-9d79-4822-9693-7d667306ccac/Aix-Marseille_universite%CC%81_%28logo%29.png",
                            "width": 747,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Eindhoven_University_of_Technology_logo_new.png",
                            "description": null,
                            "type": "image/png",
                            "size": 31443,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/459504f9-dc31-4e71-a475-969973b78ae7/Eindhoven_University_of_Technology_logo_new.png",
                            "width": 938,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "essec.png",
                            "description": null,
                            "type": "image/png",
                            "size": 10804,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/81a38b38-3c84-4f59-8deb-190f0ff6f1bd/essec.png",
                            "width": 274,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Logoemlyon.png",
                            "description": null,
                            "type": "image/png",
                            "size": 18361,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/e9991956-e17a-4cea-a963-2a05d6ab4348/Logoemlyon.png",
                            "width": 256,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Stockholm_School_Of_Economics_Logo.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 48618,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/18604e2d-8a07-45d5-bb29-e6ecbba2863d/Stockholm_School_Of_Economics_Logo.svg.png",
                            "width": 253,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "swansea-university-logo-vector.png",
                            "description": null,
                            "type": "image/png",
                            "size": 70630,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/5e350478-716b-4e06-99e0-bd342535a7ce/swansea-university-logo-vector.png",
                            "width": 461,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "warsaw.jpg",
                            "description": null,
                            "type": "image/jpeg",
                            "size": 71140,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/1c7f171b-ac6a-4313-a404-062aff50a89c/warsaw.jpg",
                            "width": 498,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "frankfurt-school-of-finance-and-management-ggmbh-vector-logo.png",
                            "description": null,
                            "type": "image/png",
                            "size": 35037,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/01cf6711-0438-4c3a-8404-4870db486c61/frankfurt-school-of-finance-and-management-ggmbh-vector-logo.png",
                            "width": 461,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "HKA_Logo_Logoleiste_RGB.png",
                            "description": null,
                            "type": "image/png",
                            "size": 55907,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/c1df287c-23f1-4ba1-8c0a-95c58a17f333/HKA_Logo_Logoleiste_RGB.png",
                            "width": 1109,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "2560px-Logo_RheinischeFhKoeln.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 93393,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/8a0e5ef3-b0bc-4ff6-87ac-ead14b5b75e3/2560px-Logo_RheinischeFhKoeln.svg.png",
                            "width": 1422,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Logo_Sorbonne_Université.png",
                            "description": null,
                            "type": "image/png",
                            "size": 23896,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/6a450460-cfd3-4dab-bb5d-39360a2a2027/Logo_Sorbonne_Universite%CC%81.png",
                            "width": 628,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "2560px-Logo_Sciences_Po.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 71457,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/71eb0132-60f5-4e30-b49e-133bcdb4a0ee/2560px-Logo_Sciences_Po.svg.png",
                            "width": 1643,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Copenhagen Business School.png",
                            "description": null,
                            "type": "image/png",
                            "size": 41035,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/25dbccd3-8670-4ddb-84a4-5518d1f4fa69/Copenhagen%20Business%20School.png",
                            "width": 1074,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "polytechnique.jpg",
                            "description": null,
                            "type": "image/jpeg",
                            "size": 11500,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/6c9764b9-6f9f-4506-a812-ded81c130dd1/polytechnique.jpg",
                            "width": 488,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "1024px-Johannes_Gutenberg-Universität_Mainz_logo.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 15257,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/9904435f-ccc3-477e-8da8-1917344434ce/1024px-Johannes_Gutenberg-Universita%CC%88t_Mainz_logo.svg.png",
                            "width": 356,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "Esade_logoAlt-white-11-min_23.png",
                            "description": null,
                            "type": "image/png",
                            "size": 24850,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/48d684de-9e80-4363-a1ab-b0fd76506aba/Esade_logoAlt-white-11-min_23.png",
                            "width": 511,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "2560px-KU_Leuven_logo.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 12344,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/d337dbe0-6190-4718-b049-658ff18f9448/2560px-KU_Leuven_logo.svg.png",
                            "width": 709,
                            "height": 256,
                            "renditions": {}
                          },
                          {
                            "name": "2560px-Logo_Reseau_Polytech.svg.png",
                            "description": null,
                            "type": "image/png",
                            "size": 13183,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/c48e4000-3cc7-4b38-bda6-ffe2b3203ad8/2560px-Logo_Reseau_Polytech.svg.png",
                            "width": 402,
                            "height": 256,
                            "renditions": {}
                          }
                        ],
                        "type": "growth___corporate_page_section___partners"
                      },
                      {
                        "title": "",
                        "description": [
                          {
                            "tagName": "p",
                            "children": [
                              {
                                "tagName": "strong",
                                "children": [
                                  {
                                    "content": "Le respect de la vie privée est notre priorité",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "type": "tag"
                          },
                          {
                            "tagName": "p",
                            "children": [
                              {
                                "content": "Notre plateforme est entièrement conforme à la réglementation RGPD.",
                                "type": "text"
                              }
                            ],
                            "type": "tag"
                          }
                        ],
                        "ctaLink": [
                          {
                            "title": "Protection des données",
                            "slug": "protection-des-donnees",
                            "menuTitle": "Protection des données",
                            "persona": ["university"],
                            "isPersonaRoot": ["false"],
                            "image": [],
                            "subtitle": "",
                            "shortDescription": "",
                            "childrenPagesTitle": "",
                            "redirection": "",
                            "metaDescription": "JobTeaser : le partenaire de référence pour la protection de vos données. Plus de 750 services carrière nous font confiance pour garantir la souveraineté des données personnelles de leurs étudiants. ",
                            "metaImage": [],
                            "metaRobots": ["index, follow"],
                            "type": "growth___corporate_page"
                          }
                        ],
                        "ctaTitle": "En savoir plus",
                        "slide1Title": "Boostez l'engagement de vos étudiants",
                        "slide1Description": [
                          {
                            "tagName": "ul",
                            "children": [
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Engagez vos étudiants grâce à une plateforme intuitive et une application mobile spécialement conçues pour leur offrir une expérience optimale",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Offrez un parcours d'orientation complet, des milliers d'opportunités professionnelles, ainsi que du contenu et des outils de découverte du marché du travail",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Informez vos étudiants sur les événements que vous organisez",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "type": "tag"
                          }
                        ],
                        "slide1Image": [
                          {
                            "name": "Uni 2.jpeg",
                            "description": "Boostez l'engagement de vos étudiants",
                            "type": "image/jpeg",
                            "size": 112660,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/0d76cb11-31d2-4af2-9130-35096fd5e38d/Uni%202.jpeg",
                            "width": 1878,
                            "height": 1552,
                            "renditions": {}
                          }
                        ],
                        "slide1LinksTitle": "",
                        "slide1Links": [],
                        "slide2Title": "Renforcez votre service carrière",
                        "slide2Description": [
                          {
                            "tagName": "ul",
                            "children": [
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Gérez tous les modules de votre plateforme carrière au même endroit",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Valorisez vos partenariats avec les entreprises",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Gagnez du temps sur les tâches administratives et concentrez vous sur votre mission au près des étudiants",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Bénéficiez d'un accompagnement personnalisé pour exploiter tout le potentiel de la plateforme",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "type": "tag"
                          }
                        ],
                        "slide2Image": [
                          {
                            "name": "Uni 4.jpeg",
                            "description": "Renforcez votre service carrières",
                            "type": "image/jpeg",
                            "size": 140026,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/d81081db-f7d1-46e8-90d4-3d399c312fb4/Uni%204.jpeg",
                            "width": 1878,
                            "height": 1552,
                            "renditions": {}
                          }
                        ],
                        "slide2LinksTitle": "",
                        "slide2Links": [],
                        "slide3Title": "Profitez de notre réseau unique",
                        "slide3Description": [
                          {
                            "tagName": "ul",
                            "children": [
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Échangez avec plus de 750 écoles et universités",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Bénéficiez de partages d'expériences et bonnes pratiques",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              },
                              {
                                "tagName": "li",
                                "children": [
                                  {
                                    "content": "Assistez aux événements exclusifs du réseau",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "type": "tag"
                          }
                        ],
                        "slide3Image": [
                          {
                            "name": "Uni 5.jpeg",
                            "description": "Profitez de notre réseau unique",
                            "type": "image/jpeg",
                            "size": 91809,
                            "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/07304e26-b261-4490-a2fb-c7a58c0c8133/Uni%205.jpeg",
                            "width": 1878,
                            "height": 1552,
                            "renditions": {}
                          }
                        ],
                        "slide3LinksTitle": "",
                        "slide3Links": [],
                        "type": "growth___corporate_page_section___vertical_slider"
                      },
                      {
                        "title": "Ils ont déjà adopté la plateforme carrière de JobTeaser",
                        "testimonies": [
                          {
                            "description": [
                              {
                                "tagName": "p",
                                "children": [
                                  {
                                    "content": "JobTeaser une nouvelle plate-forme évènements et emplois utile, tant pour notre école UTBM, que pour nos étudiants et nos partenaires entreprises. Toutes les fonctionnalités sont centralisées sur cette plate-forme : création d'évènement pour notre école, CVthèque pour les entreprises et prise de connaissance dans un même lieu pour nos étudiants. Gain de temps, facilité d'utilisation et de visibilité lors de la création d'un évènement, mais en attente du nouveau outil VCF.",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "authorName": "Célyne LUCHT DE FREIBRUCH",
                            "authorJob": "Direction aux Relations avec les Entreprises",
                            "authorImage": [],
                            "companyName": "UTBM",
                            "companyImage": [
                              {
                                "name": "2560px-Utbm.svg.png",
                                "description": "témoignage UTBM",
                                "type": "image/png",
                                "size": 140193,
                                "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/afe51cbf-cdd8-4f64-b35c-fd63525188c8/2560px-Utbm.svg.png",
                                "width": 2560,
                                "height": 1055,
                                "renditions": {}
                              }
                            ],
                            "type": "growth___corporate_testimony"
                          },
                          {
                            "description": [
                              {
                                "tagName": "p",
                                "children": [
                                  {
                                    "content": "JobTeaser est une plateforme incontournable pour le Bureau d'Aide à l'Insertion Professionnelle de l'Université de Technologie de Troyes. Elle nous permet de proposer à nos étudiants des offres de stage et d'emploi en adéquation avec leurs profils et leurs aspirations professionnelles. Cette plateforme est un véritable atout pour nos étudiants, et nous permet de centraliser toutes les informations en lien avec les stages et l'insertion professionnelle.",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "authorName": "Lucie Goffroy",
                            "authorJob": "Responsable équipe des stages",
                            "authorImage": [],
                            "companyName": "Université de Technologie de Troyes",
                            "companyImage": [
                              {
                                "name": "1024px-Logo_UTT_2018.svg.png",
                                "description": "Témoignage UTT",
                                "type": "image/png",
                                "size": 65661,
                                "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/0ce24fa4-e946-4c4c-8628-1455734b45ac/1024px-Logo_UTT_2018.svg.png",
                                "width": 1024,
                                "height": 381,
                                "renditions": {}
                              }
                            ],
                            "type": "growth___corporate_testimony"
                          },
                          {
                            "description": [
                              {
                                "tagName": "p",
                                "children": [
                                  {
                                    "content": "Notre Career Center ? Un tiers-lieu évolutif où nous faisons se rencontrer le monde de l’emploi actuel et nos jeunes talents, toutes disciplines confondues !",
                                    "type": "text"
                                  }
                                ],
                                "type": "tag"
                              }
                            ],
                            "authorName": "Marc Vandeur",
                            "authorJob": "",
                            "authorImage": [],
                            "companyName": "Université Libre de Bruxelles",
                            "companyImage": [
                              {
                                "name": "ULB.jpeg",
                                "description": "Témoignage ULB",
                                "type": "image/jpeg",
                                "size": 72733,
                                "url": "https://assets-eu-01.kc-usercontent.com:443/d0ab3c4d-3ec6-0150-71bd-939f3db14bb9/7327aef3-effc-4556-9f76-410dc5a5372e/ULB.jpeg",
                                "width": 869,
                                "height": 480,
                                "renditions": {}
                              }
                            ],
                            "type": "growth___corporate_testimony"
                          }
                        ],
                        "type": "growth___corporate_page_section___testimony"
                      },
                      {
                        "title": "Aidez vos étudiants à atteindre leurs objectifs professionnels",
                        "description": [],
                        "ctaLink": [
                          {
                            "title": "Services carrières nous contacter",
                            "slug": "services-carrieres-nous-contacter",
                            "menuTitle": "Nous contacter",
                            "persona": ["university"],
                            "isPersonaRoot": ["false"],
                            "image": [],
                            "subtitle": "",
                            "shortDescription": "",
                            "childrenPagesTitle": "",
                            "redirection": "",
                            "metaDescription": "Contact us",
                            "metaImage": [],
                            "metaRobots": [],
                            "type": "growth___corporate_page"
                          }
                        ],
                        "ctaTitle": "Commencer",
                        "theme": ["purple"],
                        "type": "growth___corporate_page_section___card"
                      }
                    ],
                    "subtitle": "",
                    "shortDescription": "",
                    "childrenPages": [
                      {
                        "title": "Protection des données",
                        "slug": "protection-des-donnees",
                        "menuTitle": "Protection des données",
                        "persona": ["university"],
                        "isPersonaRoot": ["false"],
                        "image": [],
                        "subtitle": "",
                        "shortDescription": "",
                        "childrenPagesTitle": "",
                        "redirection": "",
                        "metaDescription": "JobTeaser : le partenaire de référence pour la protection de vos données. Plus de 750 services carrière nous font confiance pour garantir la souveraineté des données personnelles de leurs étudiants. ",
                        "metaImage": [],
                        "metaRobots": ["index, follow"],
                        "type": "growth___corporate_page"
                      },
                      {
                        "title": "Bonnes pratiques Services Carrières",
                        "slug": "bonnes-pratiques-services-carrieres",
                        "menuTitle": "Ressources",
                        "persona": ["university"],
                        "isPersonaRoot": ["false"],
                        "image": [],
                        "subtitle": "Nos conseils pratiques pour engager et orienter vos étudiants",
                        "shortDescription": "",
                        "childrenPagesTitle": "",
                        "redirection": "",
                        "metaDescription": "Comment engager et orienter vos étudiants ? Découvrez nos ressources, conseils et actualités. ",
                        "metaImage": [],
                        "metaRobots": ["index, follow"],
                        "type": "growth___corporate_page"
                      }
                    ],
                    "childrenPagesTitle": "",
                    "redirection": "",
                    "contactPage": [
                      {
                        "title": "Services carrières nous contacter",
                        "slug": "services-carrieres-nous-contacter",
                        "menuTitle": "Nous contacter",
                        "persona": ["university"],
                        "isPersonaRoot": ["false"],
                        "image": [],
                        "subtitle": "",
                        "shortDescription": "",
                        "childrenPagesTitle": "",
                        "redirection": "",
                        "metaDescription": "Contact us",
                        "metaImage": [],
                        "metaRobots": [],
                        "type": "growth___corporate_page"
                      }
                    ],
                    "metaDescription": "Révélez tout le potentiel de vos étudiants avec la plateforme carrière de JobTeaser",
                    "metaImage": [],
                    "metaRobots": []
                  },
                  "pageBanner": null,
                  "pageNavigation": [
                    {
                      "title": "Protection des données",
                      "slug": "protection-des-donnees",
                      "menuTitle": "Protection des données",
                      "persona": ["university"],
                      "isPersonaRoot": ["false"],
                      "image": [],
                      "subtitle": "",
                      "shortDescription": "",
                      "childrenPages": [],
                      "childrenPagesTitle": "",
                      "redirection": "",
                      "metaDescription": "JobTeaser : le partenaire de référence pour la protection de vos données. Plus de 750 services carrière nous font confiance pour garantir la souveraineté des données personnelles de leurs étudiants. ",
                      "metaImage": [],
                      "metaRobots": ["index, follow"],
                      "type": "growth___corporate_page"
                    },
                    {
                      "title": "Bonnes pratiques Services Carrières",
                      "slug": "bonnes-pratiques-services-carrieres",
                      "menuTitle": "Ressources",
                      "persona": ["university"],
                      "isPersonaRoot": ["false"],
                      "image": [],
                      "subtitle": "Nos conseils pratiques pour engager et orienter vos étudiants",
                      "shortDescription": "",
                      "childrenPages": [
                        {
                          "title": "Le Gen Z Lab",
                          "slug": "gen-z-lab",
                          "menuTitle": "Le Gen Z Lab",
                          "persona": [],
                          "isPersonaRoot": ["false"],
                          "image": [],
                          "subtitle": "L'observatoire de JobTeaser dédié à l'analyse des générations futures",
                          "shortDescription": "",
                          "childrenPages": [],
                          "childrenPagesTitle": "",
                          "redirection": "",
                          "metaDescription": "Lancé en 2023, The Gen Z Lab regroupe nos ressources liées aux tendances propres à la génération Z dans sa relation au travail. Retrouvez ici tous nos supports liés à ceux qui feront le monde du travail de demain, grâce aux experts JobTeaser.",
                          "metaImage": [],
                          "metaRobots": ["index, follow"],
                          "type": "growth___corporate_page"
                        }
                      ],
                      "childrenPagesTitle": "",
                      "redirection": "",
                      "metaDescription": "Comment engager et orienter vos étudiants ? Découvrez nos ressources, conseils et actualités. ",
                      "metaImage": [],
                      "metaRobots": ["index, follow"],
                      "type": "growth___corporate_page"
                    }
                  ],
                  "pagePagination": null,
                  "pageTranslations": {
                    "de": "career-services",
                    "en": "career-services"
                  },
                  "personas": [
                    {
                      "title": "Étudiants",
                      "slug": "etudiants",
                      "menuTitle": "",
                      "persona": ["student"],
                      "isPersonaRoot": ["true"],
                      "image": [],
                      "subtitle": "",
                      "shortDescription": "",
                      "childrenPagesTitle": "",
                      "redirection": "https://www.jobteaser.com/fr",
                      "contactPage": [],
                      "metaDescription": "N/A",
                      "metaImage": [],
                      "metaRobots": [],
                      "type": "growth___corporate_page"
                    },
                    {
                      "title": "Recruteurs",
                      "slug": "recruteurs",
                      "menuTitle": "",
                      "persona": ["recruiter"],
                      "isPersonaRoot": ["true"],
                      "image": [],
                      "subtitle": "",
                      "shortDescription": "",
                      "childrenPagesTitle": "",
                      "redirection": "",
                      "contactPage": [
                        {
                          "title": "Recruteurs nous contacter",
                          "slug": "recruteurs-nous-contacter",
                          "menuTitle": "Nous contacter",
                          "persona": ["recruiter"],
                          "isPersonaRoot": ["false"],
                          "image": [],
                          "subtitle": "",
                          "shortDescription": "",
                          "childrenPagesTitle": "",
                          "redirection": "",
                          "metaDescription": "Entrez en contact avec notre équipe",
                          "metaImage": [],
                          "metaRobots": [],
                          "type": "growth___corporate_page"
                        }
                      ],
                      "metaDescription": "Accédez au plus grand vivier de talents de la GenZ. Recrutez en toute simplicité les meilleurs profils étudiants et jeunes diplômés partout en France et en Europe ",
                      "metaImage": [],
                      "metaRobots": [],
                      "type": "growth___corporate_page"
                    },
                    {
                      "title": "Services Carrières",
                      "slug": "services-carrieres",
                      "menuTitle": "",
                      "persona": ["university"],
                      "isPersonaRoot": ["true"],
                      "image": [],
                      "subtitle": "",
                      "shortDescription": "",
                      "childrenPagesTitle": "",
                      "redirection": "",
                      "contactPage": [
                        {
                          "title": "Services carrières nous contacter",
                          "slug": "services-carrieres-nous-contacter",
                          "menuTitle": "Nous contacter",
                          "persona": ["university"],
                          "isPersonaRoot": ["false"],
                          "image": [],
                          "subtitle": "",
                          "shortDescription": "",
                          "childrenPagesTitle": "",
                          "redirection": "",
                          "metaDescription": "Contact us",
                          "metaImage": [],
                          "metaRobots": [],
                          "type": "growth___corporate_page"
                        }
                      ],
                      "metaDescription": "Révélez tout le potentiel de vos étudiants avec la plateforme carrière de JobTeaser",
                      "metaImage": [],
                      "metaRobots": [],
                      "type": "growth___corporate_page"
                    }
                  ],
                  "serverContext": {
                    "baseUrl": "https://www.jobteaser.com",
                    "hostname": "www.jobteaser.com",
                    "isUiShiftEnabled": false,
                    "isAlgoliaSearchEngineEnabled": false
                  },
                  "subPage": null
                },
                "__N_SSP": true
              },
              "page": "/corporate/[[...url]]",
              "query": { "url": ["services-carrieres"] },
              "buildId": "ztTLKRq5HbwQQ1UMb6kzP",
              "assetPrefix": "https://d2mp1cia79qmhd.cloudfront.net/next-jobteaser/production",
              "isFallback": false,
              "dynamicIds": [
                87478, 84212, 43736, 81674, 74417, 60577, 80430, 45553, 92734, 76495
              ],
              "gssp": true,
              "locale": "fr",
              "locales": [
                "default",
                "ca",
                "cs",
                "da",
                "de",
                "en",
                "es",
                "fi",
                "fr",
                "gl",
                "it",
                "nl",
                "no",
                "pl",
                "pt",
                "sv"
              ],
              "defaultLocale": "default",
              "scriptLoader": []
            }
          </script>
























                <!-- footer -->
                <footer class="app-Footer">

                    <div class="app-Footer__container">

                        <div class="app-Footer__brand">
                            <!-- le logo partie footer -->
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
                                        <a class="app-Footer__link"
                                            href="/fr/info/bts-bac2-bac3-alternance-emploi">Offres pour
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
                                            href="https://www.jobteaser.com/fr/corporate/services-carrieres">Notre
                                            offre Career
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
                                            href="https://www.jobteaser.com/fr/corporate/recruteurs">Notre offre
                                            Entreprise</a>
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
                                        <a href="https://www.jobteaser.com/fr/corporate/a-propos"
                                            class="app-Footer__link" title="À propos">
                                            À propos
                                        </a>
                                    </li>
                                    <li class="app-Footer__menuListItem">
                                        <a class="app-Footer__link" href="/fr/companies/jobteaser/teams">Rencontrer
                                            notre
                                            équipe</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- bas du footer les CGV -->
                        <div class="app-Footer__legal">

                            <ul class="app-Footer__legalLinks">

                                <li class="app-Footer__legalItem">
                                    <a class="app-Footer__link app-Footer__link--small"
                                        href="/fr/about/legal-notice">Mentions
                                        légales</a>
                                </li>

                                <li class="app-Footer__legalItem">
                                    <a class="app-Footer__link app-Footer__link--small"
                                        href="#open-cookie-banner">Cookies</a>
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
                                Copyright &copy; D'CLICK_PRO 20023-2024 From DevStudios - Site d'orientation
                                professionnelle
                            </div>

                        </div>

                    </div>
                </footer>




            </div>
        </div>
    </div>














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
