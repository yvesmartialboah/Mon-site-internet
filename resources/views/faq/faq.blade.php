@extends('layout.parent')

@section('title','Faq')

@section('content')


<main id="main">

 
 <!-- ======= F.A.Q Section ======= -->
 <section id="faq" class="faq section-bg mt-5 py-5">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>B.A.S</h2>
        <p>Bon à Savoir</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Pourquoi mon moteur consomme de l’huile ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                Le moteur contient de nombreuses pièces en mouvement. La plupart de ces pièces sont métalliques,
                et certains d’entre elles frottent les unes contre les autres. L’huile permet donc de réduire les
                frottements et donc l’usure. L’huile se charge également de micro-particules métalliques. Le film
                d’huile est ainsi constamment brûlé et évacué via l’échappement.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Que signifient les termes «minéral» et «synthétique» ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il existe différents type d’huile selon les caractéristiques de votre moteur (type de carburant,
                puissance, type d’utilisation etc.). Une huile moteur minérale est conçue à base de pétrole brut, elle
                convient aux mécaniques anciennes. Une huile semi-synthétique est adaptée aux mécaniques
                actuelles. Enfin, une huile 100% synthétique est exclusivement composée de produits chimiques ou
                pétrochimiques et est la plus adaptée aux mécaniques «haute technologie».
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Les indications comme «10 W 40» présentes sur le bidon d’huile moteur ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Ces indications précisent la viscosité de l’huile. Celle-ci doit précisément correspondre aux préconisations du constructeur.
              </p>
            </div>
          </li>

          
          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Le voyant d’huile s’allume ou clignote. Que dois-je faire ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Premier réflexe, si vous êtes en circulation garez-vous sur le côté dès que possible, couper le contact,
                et patienter quelques instants. Il s’agit probablement d’un message d’alerte qui indique que votre
                niveau d’huile a atteint son point minimum. Il vous suffit donc de faire l’appoint après avoir vérifié le
                niveau via la jauge. La méthode : tirer la jauge, l’essuyer avec un chiffon, puis la plonger dans son
                orifice. Attendre quelques secondes, puis tirer à nouveau la jauge. Le film d’huile déposé sur la tige
                s’arrête à un repère entre «mini» et «maxi». Il suffit alors, de verser l’huile dans le bloc moteur par
                petites quantités, tout en vérifiant via la jauge que le niveau ne monte pas au-delà du repère maxi. Si,
                après cette vérification, le voyant ne s’éteint pas, couper le contact et faites vérifier votre véhicule
                par un professionnel.
              </p>
            </div>
          </li>
          
          
          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Quels sont les signes d’usure de mon huile moteur ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                L’usure de votre huile se contrôle à sa couleur qui doit avoir conservé son aspect originel,
                transparent et légèrement ambré. Si elle est opaque et marron foncé, il est temps d’aller faire faire la
                vidange de votre véhicule.
              </p>
            </div>
          </li>
          
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-33" class="collapsed">Qu’est-ce que le système de freinage ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-33" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il permet l’immobilisation du véhicule. Le système de freinage est composé de plusieurs éléments :
                <ul>
                  <li class="p-0"><i class="bi bi-check"></i> Pédale de frein,</li>
                  <li class="p-0"><i class="bi bi-check"></i> liquide de frein,</li>
                  <li class="p-0"><i class="bi bi-check"></i> plaquette de frein à disque,</li>
                  <li class="p-0"><i class="bi bi-check"></i> Etc.</li>
                </ul>
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-34" class="collapsed">Pourquoi prendre soin de votre système de freinage ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-34" class="collapse" data-bs-parent=".faq-list">
              <p>
                Lorsque vous conduisez, les sollicitations du système de freinage sont très fréquentes, notamment en
                milieu urbain. Pour préserver des freinages efficaces et de bonnes distances de sécurité, il est
                primordial de changer les pièces d’usure régulièrement.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-35" class="collapsed">Quand changer les éléments de votre système de freinage ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-35" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tout dépend de votre véhicule, il est donc nécessaire de suivre les indications de votre constructeur.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-36" class="collapsed">La voiture vibre et fait du bruit quand je freine. Que se passe-t-il ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-36" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il s’agit probablement d’un problème de disques voilés ou d’une usure prononcée des disques et des
                plaquettes. Une vibration peut provenir d’un disque ayant subi de fortes sollicitations à froid. En
                tournant, le disque «ondule», ce qui provoque en cas de freinage des vibrations et parfois un bruit
                anormal. S’il n’y a pas de vibration mais qu’un bruit persiste, il peut s’agir d’une usure prononcée de vos
                plaquettes, qui ne disposent plus de suffisamment de matériau d’usure. Le disque de frein est alors
                directement en contact avec le corps en métal dur de la plaquette. Dans ce cas, le disque peut
                s’endommager en une dizaines de kilomètres ! N’attendez plus et faites vérifier votre système de
                freinage par un professionnel.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-37" class="collapsed">Le voyant d’alerte du système de freinage s’allume sur mon tableau de bord. De quoi s’agit-il ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-37" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il peut s’agir de plusieurs problèmes, isolés ou cumulés. En premier lieu, l’usure des plaquettes peut
                être en cause, leur épaisseur ne garantit plus un freinage efficace, vous devez les faire changer. Autre
                problème possible, le niveau de liquide hydraulique trop bas. Si tel est le cas, il ne faut surtout pas
                attendre et faire vérifier le système au plus vite.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-38" class="collapsed">Les phares de ma voiture sont restés allumés toute la nuit et la batterie est à plat. Comment
              démarrer le moteur ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-38" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il existe une méthode, qui fonctionne uniquement pour les voitures dotées d’une boîte mécanique.
                Tournez la clé de contact en position «on», puis enclenchez le second ou le troisième rapport. Restez
                au volant, tout en débrayant. Une tierce personne doit pousser le véhicule, sur une route plane et
                sécurisée. Une fois la voiture lancée à environ 10 km/h, lâchez la pédale d’embrayage : le moteur
                doit se lancer sans l’aide du démarreur. Notez que cette méthode est aléatoire, et ne doit être
                utilisée qu’en cas de dépannage urgent.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-39" class="collapsed">Puis-je démarrer le moteur à l’aide d’une autre voiture ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-39" class="collapse" data-bs-parent=".faq-list">
              <p>
                Oui. Cette méthode réclame également l’aide de câbles de démarrage. Positionner le câble rouge sur
                les cosses + des deux batteries, et le câble noir sur les cosses – ou sur une partie métallique non
                peinte de la voiture. Démarrez le moteur de la voiture «dépanneuse» avant de démarrer le moteur
                de la voiture dont la batterie est à plat. Notez que la capacité de la batterie de la voiture qui vous
                dépanne doit être au moins égale à celle de la batterie de la voiture en panne (vous trouverez ces
                informations sur les étiquettes des batteries).
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-40" class="collapsed">L’état de mes pneus a-t-il une influence sur ma consommation de carburant ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-40" class="collapse" data-bs-parent=".faq-list">
              <p>
                Lorsqu’un pneumatique est sous-gonflé, la moindre pression engendre un effet d’écrasement qui
                «aplatit» le pneu sur la chaussée. La surface de contact au sol est alors augmentée, cette surface de
                contact plus importante demande plus d’énergie lors d’un déplacement, ce qui sollicite d’avantage la
                mécanique et engendre une surconsommation, qui peut atteindre 20%.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-41" class="collapsed">Pourquoi un pneumatique sous-gonflé augmente- t-il l’usure et les risques d’éclatement ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-41" class="collapse" data-bs-parent=".faq-list">
              <p>
                Un pneu risque d'éclater quand il n'est pas suffisamment gonflé. En effet, le pneu s'écrase plus à
                chaque tour de roue quand il est sous gonflé ou en cas de surcharge. Le caoutchouc s'échauffe
                exagérément et peut provoquer l'éclatement.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-42" class="collapsed">A quel moment dois-je changer mes pneumatiques ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-42" class="collapse" data-bs-parent=".faq-list">
              <p>
                Avec le temps, les pneumatiques s’usent. Les rainures, deviennent moins profondes. Si leur
                profondeur est inférieure à 1,6 mm, il est nécessaire de changer les pneus. Les flancs, eux aussi,
                peuvent subir des dégradations parfois invisibles, dues par exemple à un coup de trottoir. Un
                mauvais parallélisme ou un choc sur la jante peut aussi dégrader vos pneus et engendrer des
                vibrations. La durée de vie d’un pneumatique est variable selon les conditions d’utilisation, il est
                important de changer de pneumatique dès qu’il y a un signe d’usure
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-43" class="collapsed">Comment vérifier le bon état de mon pneumatique ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-43" class="collapse" data-bs-parent=".faq-list">
              <p>
                La bande de roulement est la partie centrale du pneumatique, elle est toujours en contact avec la
                route. C’est donc sur elle que vous pouvez vérifier l’état de vos pneus grâce à des témoins d’usure.
                Ces témoins d’usure permettent de vérifier la profondeur des rainures et sont présents au cœur des
                rainures sur chaque pneumatique. Si la surface du pneu se trouve au même niveau que le témoin
                d'usure le pneu est à changer car la loi précise qu'il faut au moins avoir des rainures profondes de 1.6
                mm (hauteur du témoin).
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-44" class="collapsed">Je n’ai pas de roue de secours, mais une bombe anticrevaison. Est-ce fiable ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-44" class="collapse" data-bs-parent=".faq-list">
              <p>
                Un grand nombre de voitures modernes ne sont pas dotées d’une roue de secours. Sa suppression
                permet un gain d’espace, mais aussi de poids. D’autant que la probabilité d’une crevaison devient
                extrêmement faible sur les voitures modernes. Alternative au changement de roue, l’utilisation d’une
                bombe anticrevaison permet de réparer simplement et rapidement la roue. Elle permet de regonfler
                et réparer temporairement le pneumatique. L’efficacité et la fiabilité de la bombe anticrevaison
                permet aujourd’hui de se passer de la roue de secours dans la plupart des cas.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Ma voiture n’a plus de puissance et un voyant orange reste allumé au tableau de bord. Que se passe-t-il ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il peut s’agir de symptômes indiquant un catalyseur ou une sonde lambda dégradée. La sonde
                lambda est un capteur, fixé sur la ligne d’échappement. Lorsque la sonde lambda est endommagée
                ou usée, le signal est erroné, et la voiture adopte un «mode dégradé» qui, en général, ne permet pas
                de dépasser 50 km/h. Le catalyseur, lui aussi, peut être en cause. S’il est endommagé, il ne permet
                pas aux polluants contenus dans les gaz d’échappement d’être transformés en gaz moins nocifs : la
                sonde lambda peut alors envoyer dans ce cas un signal d’alerte au moteur qui, là aussi, adopte le
                mode dégradé. Une seule solution, faire remplacer les pièces défectueuse au plus vite.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="600">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Quel est son rôle du catalyseur et doit-il être remplacé régulièrement ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
              <p>
                Le catalyseur, a une durée de vie limitée et doit être changé régulièrement selon les préconisations
                du constructeur. Le catalyseur permet de transformer ou de fortement réduire les composés les plus
                polluants contenus dans les gaz d’échappement. Lorsque le catalyseur est dégradé, ces composés
                nocifs sont totalement libérés dans l’atmosphère, et votre véhicule ne respecte plus les seuils de
                pollution autorisés.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="700">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Quelle est la durée de vie des composants d’une ligne d’échappement ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tout dépend du type de véhicule, de son utilisation et de l’environnement dans lequel il évolue. Dans
                les régions humides ou en bord de mer, les lignes d’échappement se dégradent prématurément à
                cause de l’oxydation. En général, une ligne d’échappement doit être partiellement ou complétement
                changée à partir de 8 à 9 ans d’utilisation dans des conditions sévères. Le pot de détente et le
                silencieux, conçus pour amoindrir les bruits, peuvent aussi nécessiter un remplacement à partir de
                40.000 km, mais le plus souvent bien au-delà. Les sondes lambda se remplacent lorsqu’elles sont
                diagnostiquées défectueuses.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="800">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">A quoi sert le filtre à particules monté sur les véhicules diesel ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
              <p>
                Le filtre à particules est parfois monté sur les modèles diesel récents. Présent sur la ligne
                d’échappement, ce filtre permet d’éliminer les particules de carbone et les hydrocarbures non brûlés
                présents dans les gaz d’échappement et réputés dangereux pour la santé. Le filtre à particules doit
                être régulièrement vérifié, car il peut être saturé et provoquer des pannes ou une perte significative
                de puissance. Il s’agit d’une pièce d’usure dont la durée de vie varie avec l’usage du véhicule.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="800">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-90" class="collapsed">Le constructeur préconise de remplacer la courroie de distribution, mais puis-je attendre encore
              quelques milliers de kilomètres avant l’intervention ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-90" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il est fortement déconseillé de dépasser le kilométrage préconisé sans avoir effectué le changement
                de votre courroie. En vous octroyant cette marge, vous risquez de casser peut être de façon
                irréversible votre moteur.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="800">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-91" class="collapsed">Qu’est-ce que l’éclairage à lampes «xénon» ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-91" class="collapse" data-bs-parent=".faq-list">
              <p>
                L’éclairage «xénon» est plus blanc, légèrement bleuté, avec une lumière proche de celle du jour. Cet
                éclairage est également plus puissant et a une durée de vie 2 à 3 fois supérieure à un éclairage par
                lampes classiques. Il permet une grande puissance d’éclairage et un confort visuel amélioré. Il est
                déconseillé d’intervenir vous-même sur ce type d’éclairage face aux risques d’électrocution : La
                tension atteint 20 000 Volt, contre 12 à 14 Volt pour un système classique !
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="800">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-92" class="collapsed">Lorsque je roule de nuit, je remarque que les usagers en sens inverse me font des appels de
              phares. Quelle peut être la raison ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-92" class="collapse" data-bs-parent=".faq-list">
              <p>
                Il est fort probable que votre éclairage éblouit les usagers d’en face parce que votre faisceau
                lumineux éclaire trop haut. Si vous roulez en charge, pensez également à utiliser la molette de
                réglage du faisceau lumineux si votre voiture en est équipée. Notez qu’à l’inverse, un faisceau
                lumineux trop bas réduit la surface éclairée. Pensez à faire régulièrement vérifier votre éclairage par
                un professionnel.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="800">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-93" class="collapsed">Puis-je utiliser mes phares additionnels et mon feu antibrouillard pour mieux voir et être mieux vu
              par temps de pluie ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-93" class="collapse" data-bs-parent=".faq-list">
              <p>
                Les phares additionnels antibrouillard à l’avant permettent effectivement un éclairage plus puissant
                en cas de brouillard ou de très forte pluie. Le feu rouge de brouillard, très puissant, ne doit jamais
                être utilisé par temps de pluie, car il éblouit fortement les usagers derrière vous. Ne l’utilisez
                uniquement qu’en cas de brouillard, et pensez à l’éteindre dès que les conditions météo
                s’améliorent.
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section>
  <!-- End F.A.Q Section -->

</main>
<!-- End #main -->

@endsection