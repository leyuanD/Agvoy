# AGVOY
Un WEB assistant !  
E:\PHP\agvoy\agvoy-app
github: https://github.com/leyuanD/Agvoy/tree/master
## Author
PRENOM: LEYUAN  NOM:DING
Email: leyuan.ding@telecom-sudparis.eu

## Test users
admin:
email: admin@mediaforce.com
password: some 

backoffice:
email:projet@gmail.com
password: 123456

client:
email:php@gmail.com
password: 123456

## Les étapes obligatoires réalisées
 1. prise de connaissance du  [cahier des charges] 
 2. initialisation du projet Symfony
 3. ajout au modèle des données des entités liées _Propriétaire_ et _Couette-et-café_
 4. ajout d'une association entre _Couette et café_ et _Propriétaire_
 5. ajout de l'entités _Région_
 6. ajout d'une association entre _Régions_ et _Couette et cafés_
 7. ajout d'une association entre _Régions_ et _Couette et cafés_
 8. ajout de données de tests chargeables avec les fixtures
 9. création du "front-office" de _consultation des Annonces par région_(webpage: accomondation)
 10. ajout des menus de navigation dans l'application

## Les étapes recommandées réalisées

 1. gestion du code source avec Git
 2. ajout de l'authentification (ex: email: leyuan.ding@telecom-sudparis.eu mot-de-pass: lding)
 3.   ajout de mise en forme avec Bootstrap (ou un autre framework CSS)
 4. particularisation de l'affichage des pages selon le profil d'utilisateur
 5. protection de l'accès aux routes interdites selon le profil
 6. ajout de la gestion de la mise en ligne d'images pour des photos dans les annonces
 7. ajout de l'entité _Client_(name : user)
 8. ajout de l'entité _Réservation_(name : Reservation)
 9. ajout de CRUDs en "backoffice"
 10. utilisation des messages flash pour les CRUDs 
```

## L'architecture du projets
agvoy-app
├─ .env
├─ .env.test
├─ .git
│  ├─ COMMIT_EDITMSG
│  ├─ config
│  ├─ description
│  ├─ HEAD
│  ├─ hooks
│  │  ├─ applypatch-msg.sample
│  │  ├─ commit-msg.sample
│  │  ├─ fsmonitor-watchman.sample
│  │  ├─ post-update.sample
│  │  ├─ pre-applypatch.sample
│  │  ├─ pre-commit.sample
│  │  ├─ pre-merge-commit.sample
│  │  ├─ pre-push.sample
│  │  ├─ pre-rebase.sample
│  │  ├─ pre-receive.sample
│  │  ├─ prepare-commit-msg.sample
│  │  ├─ push-to-checkout.sample
│  │  └─ update.sample
│  ├─ index
│  ├─ info
│  │  └─ exclude
│  ├─ logs
│  │  ├─ HEAD
│  │  └─ refs
│  │     ├─ heads
│  │     │  └─ master
│  │     └─ remotes
│  │        └─ origin
│  │           └─ master
│  ├─ objects
│  │  ├─...
│  │  ├─ info
│  │  └─ pack
│  └─ refs
│     ├─ heads
│     │  └─ master
│     ├─ remotes
│     │  └─ origin
│     │     └─ master
│     └─ tags
├─ .gitignore
├─ assets
│  ├─ app.js
│  ├─ bootstrap.js
│  ├─ controllers
│  │  └─ hello_controller.js
│  ├─ controllers.json
│  └─ styles
│     └─ app.css
├─ bin
│  ├─ console
│  └─ phpunit
├─ composer.json
├─ composer.lock
├─ config
│  ├─ bootstrap.php
│  ├─ bundles.php
│  ├─ packages
│  │  ├─ assets.yaml
│  │  ├─ bootstrap_menu.yaml
│  │  ├─ cache.yaml
│  │  ├─ dev
│  │  │  ├─ debug.yaml
│  │  │  ├─ monolog.yaml
│  │  │  └─ web_profiler.yaml
│  │  ├─ doctrine.yaml
│  │  ├─ doctrine_migrations.yaml
│  │  ├─ framework.yaml
│  │  ├─ mailer.yaml
│  │  ├─ prod
│  │  │  ├─ deprecations.yaml
│  │  │  ├─ doctrine.yaml
│  │  │  ├─ monolog.yaml
│  │  │  ├─ routing.yaml
│  │  │  └─ webpack_encore.yaml
│  │  ├─ routing.yaml
│  │  ├─ security.yaml
│  │  ├─ sensio_framework_extra.yaml
│  │  ├─ test
│  │  │  ├─ doctrine.yaml
│  │  │  ├─ framework.yaml
│  │  │  ├─ monolog.yaml
│  │  │  ├─ twig.yaml
│  │  │  ├─ validator.yaml
│  │  │  ├─ webpack_encore.yaml
│  │  │  └─ web_profiler.yaml
│  │  ├─ translation.yaml
│  │  ├─ twig.yaml
│  │  ├─ validator.yaml
│  │  ├─ vich_uploader.yaml
│  │  └─ webpack_encore.yaml
│  ├─ preload.php
│  ├─ routes
│  │  ├─ annotations.yaml
│  │  └─ dev
│  │     ├─ framework.yaml
│  │     └─ web_profiler.yaml
│  ├─ routes.yaml
│  └─ services.yaml
├─ migrations
│  ├─ .gitignore
│  ├─ Version20211010232112.php
│  └─ Version20211012230459.php
├─ package.json
├─ public
│  ├─ assets
│  │  └─ favicon.ico
│  ├─ css
│  │  ├─ bootstrap.css
│  │  ├─ font-awesome.min.css
│  │  ├─ responsive.css
│  │  ├─ style (Mohammad Rocky's conflicted copy 2018-05-08).css
│  │  ├─ style.css
│  │  ├─ style.css (Mohammad Rocky's conflicted copy 2018-05-08).map
│  │  ├─ style.css.map
│  │  ├─ styles.css
│  │  ├─ _elements.css
│  │  ├─ _footer.css
│  │  ├─ _testimonial.css
│  │  └─ _variables.css
│  ├─ fonts
│  │  ├─ fontawesome-webfont.eot
│  │  ├─ fontawesome-webfont.svg
│  │  ├─ fontawesome-webfont.ttf
│  │  ├─ fontawesome-webfont.woff
│  │  ├─ fontawesome-webfont.woff2
│  │  └─ FontAwesome.otf
│  ├─ gh-pages.zip
│  ├─ image
│  │  ├─ about_banner.jpg
│  │  ├─ about_bg.jpg
│  │  ├─ banner
│  │  │  ├─ banner-1.jpg
│  │  │  ├─ banner-2.jpg
│  │  │  └─ banner-2_tmp18321
│  │  ├─ banner_bg.jpg
│  │  ├─ blog
│  │  │  ├─ add.jpg
│  │  │  ├─ author.png
│  │  │  ├─ blog-1.jpg
│  │  │  ├─ ...
│  │  │  ├─ cat-post
│  │  │  │  ├─ ...
│  │  │  ├─ feature-img1.jpg
│  │  │  ├─ main-blog
│  │  │  │  ├─ m-blog-1.jpg...
│  │  │  ├─ next.jpg
│  │  │  ├─ post-img1.jpg...
│  │  │  ├─ prev.jpg
│  │  │  └─ s-img.jpg
│  │  ├─ elements
│  │  │  ├─ a.jpg...
│  │  │  └─ _DS_Store
│  │  ├─ facilites_bg.jpg
│  │  ├─ favicon.png
│  │  ├─ favicon_tmp18091
│  │  ├─ gallery
│  │  │  ├─ 01-1.jpg
│  │  │  ├─ 01.jpg
│  │  │  ├─ 02-1.jpg
│  │  │  ├─ 02.jpg
│  │  │  ├─ 03-1.jpg
│  │  │  ├─ 03.jpg
│  │  │  ├─ 04.jpg
│  │  │  ├─ 05.jpg
│  │  │  └─ 06.jpg
│  │  ├─ instagram
│  │  │  ├─ Image-01.jpg...
│  │  │  └─ Image-08.jpg
│  │  ├─ logo-2.png
│  │  ├─ Logo.png
│  │  ├─ room1.jpg
│  │  ├─ room2.jpg
│  │  ├─ room3.jpg
│  │  ├─ room4.jpg
│  │  ├─ rooms
│  │  ├─ testtimonial-1.jpg
│  │  └─ testtimonial-2.jpg
│  ├─ images
│  │  ├─ owners
│  │  │  ├─ room1.jpeg
│  │  │  └─ room3.jpg
│  │  ├─ regions
│  │  │  └─ frs.jpg
│  │  └─ rooms
│  │     ├─ Paris.jpg
│  │     ├─ room1.jpeg
│  │     ├─ room3.jpg
│  │     └─ tsp.jpg
│  ├─ index.html
│  ├─ index.php
│  ├─ js
│  │  ├─ bootstrap.min.js
│  │  ├─ contact.js
│  │  ├─ custom.js
│  │  ├─ gmaps.min.js
│  │  ├─ jquery-3.2.1.min.js
│  │  ├─ jquery.ajaxchimp.min.js
│  │  ├─ jquery.form.js
│  │  ├─ jquery.validate.min.js
│  │  ├─ mail-script.js
│  │  ├─ popper.js
│  │  ├─ scripts.js
│  │  └─ stellar.js
│  ├─ royal-Doc
│  │  ├─ css
│  │  │  ├─ font-awesome.min.css
│  │  │  ├─ main.css
│  │  │  ├─ normalize.min.css
│  │  │  └─ _DS_Store
│  │  ├─ fonts
│  │  │  ├─ fontawesome-webfont.eot
│  │  │  ├─ fontawesome-webfont.svg
│  │  │  ├─ fontawesome-webfont.ttf
│  │  │  ├─ fontawesome-webfont.woff
│  │  │  ├─ FontAwesome.otf
│  │  │  └─ _DS_Store
│  │  ├─ img
│  │  │  ├─ logo.png
│  │  │  └─ _DS_Store
│  │  ├─ index.html
│  │  ├─ js
│  │  │  ├─ custom.js
│  │  │  ├─ jquery-1.11.0.min.js
│  │  │  ├─ jquery.nav.js
│  │  │  └─ _DS_Store
│  │  └─ syntax-highlighter
│  │     ├─ scripts
│  │     │  ├─ shAutoloader.js
│  │     │  ├─ shBrushAppleScript.js
│  │     │  ├─ shBrushAS3.js
│  │     │  ├─ shBrushBash.js
│  │     │  ├─ shBrushColdFusion.js
│  │     │  ├─ shBrushCpp.js
│  │     │  ├─ shBrushCSharp.js
│  │     │  ├─ shBrushCss.js
│  │     │  ├─ shBrushDelphi.js
│  │     │  ├─ shBrushDiff.js
│  │     │  ├─ shBrushErlang.js
│  │     │  ├─ shBrushGroovy.js
│  │     │  ├─ shBrushJava.js
│  │     │  ├─ shBrushJavaFX.js
│  │     │  ├─ shBrushJScript.js
│  │     │  ├─ shBrushPerl.js
│  │     │  ├─ shBrushPhp.js
│  │     │  ├─ shBrushPlain.js
│  │     │  ├─ shBrushPowerShell.js
│  │     │  ├─ shBrushPython.js
│  │     │  ├─ shBrushRuby.js
│  │     │  ├─ shBrushSass.js
│  │     │  ├─ shBrushScala.js
│  │     │  ├─ shBrushSql.js
│  │     │  ├─ shBrushVb.js
│  │     │  ├─ shBrushXml.js
│  │     │  ├─ shCore.js
│  │     │  └─ shLegacy.js
│  │     ├─ styles
│  │     │  ├─ shCore.css
│  │     │  ├─ shCoreDefault.css
│  │     │  ├─ shCoreDjango.css
│  │     │  ├─ shCoreEclipse.css
│  │     │  ├─ shCoreEmacs.css
│  │     │  ├─ shCoreFadeToGrey.css
│  │     │  ├─ shCoreMDUltra.css
│  │     │  ├─ shCoreMidnight.css
│  │     │  ├─ shCoreRDark.css
│  │     │  ├─ shThemeDefault.css
│  │     │  ├─ shThemeDjango.css
│  │     │  ├─ shThemeEclipse.css
│  │     │  ├─ shThemeEmacs.css
│  │     │  ├─ shThemeFadeToGrey.css
│  │     │  ├─ shThemeMDUltra.css
│  │     │  ├─ shThemeMidnight.css
│  │     │  └─ shThemeRDark.css
│  │     └─ _DS_Store
│  ├─ scss
│  │  ├─ style.scss
│  │  ├─ _accomodation.scss
│  │  ├─ _banner.scss
│  │  ├─ _blog.scss
│  │  ├─ _button.scss
│  │  ├─ _contact.scss
│  │  ├─ _elements.scss
│  │  ├─ _footer.scss
│  │  ├─ _header.scss
│  │  ├─ _predefine.scss
│  │  ├─ _testimonial.scss
│  │  └─ _variables.scss
│  └─ startbootstrap-bare-gh-pages
│     ├─ assets
│     │  └─ favicon.ico
│     ├─ css
│     │  └─ styles.css
│     ├─ index.html
│     └─ js
│        └─ scripts.js
├─ src
│  ├─ Controller
│  │  ├─ .gitignore
│  │  ├─ ConsultController.php
│  │  ├─ OwnerController.php
│  │  ├─ RegionController.php
│  │  ├─ ReservationController.php
│  │  ├─ RoomController.php
│  │  ├─ SecurityController.php
│  │  └─ UsersController.php
│  ├─ DataFixtures
│  │  ├─ AppFixtures.php
│  │  └─ UserFixtures.php
│  ├─ Entity
│  │  ├─ .gitignore
│  │  ├─ Owner.php
│  │  ├─ Region.php
│  │  ├─ Reservation.php
│  │  ├─ Room.php
│  │  ├─ User.php
│  │  └─ Users.php
│  ├─ Form
│  │  ├─ OwnerType.php
│  │  ├─ RegionType.php
│  │  ├─ ReservationType.php
│  │  ├─ RoomType.php
│  │  └─ UsersType.php
│  ├─ Kernel.php
│  ├─ Repository
│  │  ├─ .gitignore
│  │  ├─ OwnerRepository.php
│  │  ├─ RegionRepository.php
│  │  ├─ ReservationRepository.php
│  │  ├─ RoomRepository.php
│  │  ├─ UserRepository.php
│  │  └─ UsersRepository.php
│  └─ Security
│     └─ AppCustomAuthenticator.php
├─ symfony.lock
├─ templates
│  ├─ base.html.twig
│  ├─ consult
│  │  └─ index.html.twig
│  ├─ owner
│  │  ├─ edit.html.twig
│  │  ├─ index.html.twig
│  │  ├─ new.html.twig
│  │  ├─ show.html.twig
│  │  ├─ _delete_form.html.twig
│  │  └─ _form.html.twig
│  ├─ region
│  │  ├─ edit.html.twig
│  │  ├─ index.html.twig
│  │  ├─ new.html.twig
│  │  ├─ show.html.twig
│  │  ├─ _delete_form.html.twig
│  │  └─ _form.html.twig
│  ├─ reservation
│  │  ├─ edit.html.twig
│  │  ├─ index.html.twig
│  │  ├─ new.html.twig
│  │  ├─ show.html.twig
│  │  ├─ _delete_form.html.twig
│  │  └─ _form.html.twig
│  ├─ room
│  │  ├─ edit.html.twig
│  │  ├─ index.html.twig
│  │  ├─ new.html.twig
│  │  ├─ show.html.twig
│  │  ├─ _delete_form.html.twig
│  │  └─ _form.html.twig
│  ├─ security
│  │  └─ login.html.twig
│  ├─ tashboard.html.twig
│  ├─ users
│  │  ├─ edit.html.twig
│  │  ├─ index.html.twig
│  │  ├─ new.html.twig
│  │  ├─ show.html.twig
│  │  ├─ _delete_form.html.twig
│  │  └─ _form.html.twig
│  └─ webpage
│     ├─ about.html.twig
│     ├─ accomodation.html.twig
│     ├─ blog-single.html.twig
│     ├─ blog.html.twig
│     ├─ contact.html.twig
│     ├─ elements.html.twig
│     ├─ gallery.html.twig
│     └─ index.html.twig
├─ tests
│  └─ bootstrap.php
├─ translations
│  └─ .gitignore
├─ webpack.config.js
└─ yarn.lock

```