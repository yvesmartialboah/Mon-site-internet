@extends('layout.parent')

@section('title','Accueil')

@section('content')

 <!-- ======= Header ======= -->
 <section id="testimonials" class="testimonials mt-5">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2><a href="{{url('/')}}">Accueil</a></h2>
        <div class="row">
          <div class="col-md-9">
            <p class="text-white">Services</p>
          </div>
          <div class="col-md-3">
            <p style="color: #F8941B">Vidange</p>
          </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Header -->

  <main id="main">

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Vidange</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Revision</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Pneumatique</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Freinage</a>

                    <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#list-home1" role="tab" aria-controls="list-home">Climatisation</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile1" role="tab" aria-controls="list-profile">Batterie</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages1" role="tab" aria-controls="list-messages">Visibilité</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings1" role="tab" aria-controls="list-settings">Réparation pièces electriques</a>

                    <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#list-home11" role="tab" aria-controls="list-home">Echappement</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile11" role="tab" aria-controls="list-profile">Kit de distribution</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages11" role="tab" aria-controls="list-messages">Suspension</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings11" role="tab" aria-controls="list-settings">Pré-controle technique</a>

                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages111" role="tab" aria-controls="list-messages">Mecanique</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings111" role="tab" aria-controls="list-settings">Par brise</a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Les lubrifiants, garants d’un fonctionnement moteur optimal
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Une stricte vérification des points essentiels et le remplacement des pièces d’usure selon les préconisations constructeur.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Pneumatiques : le lien essentiel à ne pas négliger
                                    Le réseau Mobili propose à ses clients des pneumatiques de grandes marques, Hankook, Goodyear / Dunlop,
                                    Michelin, Continental, Bridgestone, Firestone, Kleber etc....
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Un freinage efficace pour une parfaite maîtrise de votre véhicule
                                </p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="list-home1" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Un élément de confort et de sécurité, hiver comme été !
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile1" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Acteur de premier ordre, la batterie permet de démarrer le moteur, mais elle alimente également la totalité du circuit électrique de votre véhicule.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages1" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Bien voir et être bien vu par tous les temps
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Ne changez plus, réparez !
                                    Une solution de réparation pour les autoradios, navigations, écrans, combinés d'instruments, calculateurs
                                    moteurs, BSI et commodos.
                                </p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="list-home11" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Un élément essentiel qui préserve les performances, le niveau sonore et contribue à la protection de l’environnement.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile11" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    La courroie de distribution est un élément mécanique vital. La changer régulièrement permet de préserver la vie du moteur...
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages11" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Des ressorts et des amortisseurs en bon état garantissent confort, tenue de route et freinage efficace.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings11" role="tabpanel" aria-labelledby="list-settings-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Pour éviter les désagréments et le coût d’une contre-visite
                                </p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="list-messages111" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Dans le réseau Mobili, toutes les interventions sont possibles sur votre véhicule, quelle que soit sa marque.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings111" role="tabpanel" aria-labelledby="list-settings-list">
                            <div class="col-md-12 ">
                                {{-- <img src="assets/icon/project-management.png" width="130" alt=""> --}}
                                <i class="ri-file-list-3-line" style="color: #11dbcf;font-size:70px !important"></i>
                            </div>
                            <div class="col-md-12">
                                <p class="pt-5">
                                    Changer ou réparer ? A chaque problème sa solution.
                                    Impact, éclat, choc, fissure... font l’objet d’une intervention sur le pare-brise.
                                    En effet, dans de nombreuses situations, les dommages doivent être réparés pour garantir votre confort de
                                    conduite et votre sécurité.
                                    Faites-nous confiance, nous ne sous-estimons pas votre sécurité.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      {{-- <div class="container">
        <div class="row content">
          <div class="d-flex justify-content-center">
            <div class="p-2 flex-fill bd-highlight">
              <i class="bx bxs-color-fill" style="color: #ffbb2c; font-size:70px !important"></i>
            </div>
            <div class="p-2 flex-fill bd-highlight">
              <p class="font-italic">
                Les lubrifiants, garants d’un fonctionnement moteur optimal
              </p>
            </div>
          </div>
        </div>
      </div> --}}
    </section>

  </main><!-- End #main -->

@endsection