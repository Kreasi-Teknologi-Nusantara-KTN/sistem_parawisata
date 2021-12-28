<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/summernote/summernote-bs4.min.css">
  <!-- Chat -->
  <link rel="stylesheet" href="<?= base_url('assets/assets/'); ?>dist/chat/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed" onload="inisiasi()">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="home-page__content messages-page">
            <div class="container-fluid h-100">
              <div class="row px-0 h-100">
                <!-- start message list section  -->
                <div class="col-12 col-md-4 col-lg-5 col-xl-3 px-0 messages-page__list-scroll">

                  <div class="messages-page__header mb-0 px-4 pt-3 pb-3">
                    <span class="messages-page__title">Chats</span>
                    <div class="messages-page__dark-mode-toogler">
                      <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--dark-mode" viewBox="0 0 49.7 49.7">
                        <path d="M25.4,49.7A25.6,25.6,0,0,1,1.3,32.3,25.6,25.6,0,0,1,17.3.1a2,2,0,0,1,2.1.5,2.2,2.2,0,0,1,.5,2.1,19.9,19.9,0,0,0-1.2,6.8A21,21,0,0,0,25,24.7,21,21,0,0,0,40.2,31h0a20.9,20.9,0,0,0,6.9-1.2,2,2,0,0,1,2.5,2.5,25.8,25.8,0,0,1-16,16.1A28.7,28.7,0,0,1,25.4,49.7ZM15,5.5A21.4,21.4,0,0,0,5.1,31.1,21.5,21.5,0,0,0,15.9,43.4a21.2,21.2,0,0,0,28.3-8.8,17.5,17.5,0,0,1-4,.4h0a24.9,24.9,0,0,1-18-7.5,24.9,24.9,0,0,1-7.5-18A26.9,26.9,0,0,1,15,5.5Z" fill="#f68b3c" />
                      </svg>
                    </div>
                  </div>
                  <div class="messages-page__search mb-0 px-3 pb-3">
                    <div class="custom-form__search-wrapper">
                      <input type="text" class="form-control custom-form" id="search" placeholder="Telusuri Chat..." autocomplete="off">
                      <button type="submit" class="custom-form__search-submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--search" viewBox="0 0 46.6 46.6">
                          <path d="M46.1,43.2l-9-8.9a20.9,20.9,0,1,0-2.8,2.8l8.9,9a1.9,1.9,0,0,0,1.4.5,2,2,0,0,0,1.5-.5A2.3,2.3,0,0,0,46.1,43.2ZM4,21a17,17,0,1,1,33.9,0A17.1,17.1,0,0,1,33,32.9h-.1A17,17,0,0,1,4,21Z" fill="#f68b3c" />
                        </svg>
                      </button>
                    </div>
                  </div>

                  <ul class="messages-page__list pb-5 px-1 px-md-3" id="list-chat">
                    <!-- <li class="messaging-member messaging-member--new messaging-member--online">
                  <div class="messaging-member__wrapper">
                    <div class="messaging-member__avatar">
                      <img src="https://randomuser.me/api/portraits/thumb/men/74.jpg" alt="Bessie Cooper" loading="lazy">
                      <div class="user-status"></div>
                    </div>

                    <span class="messaging-member__name">Bessie Cooper</span>
                    <span class="messaging-member__message">Yes, I need your help with the project, it need it done by tomorrow 😫</span>
                  </div>
                </li>
                <li class="messaging-member messaging-member--online messaging-member--active">
                  <div class="messaging-member__wrapper">
                    <div class="messaging-member__avatar">
                      <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                      <div class="user-status"></div>
                    </div>

                    <span class="messaging-member__name">Jenny Smith</span>
                    <span class="messaging-member__message">Perfect, thanks !</span>
                  </div>
                </li>
                <li class="messaging-member">
                  <div class="messaging-member__wrapper">
                    <div class="messaging-member__avatar">
                      <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg" alt="Savannah Nguyen" loading="lazy">
                      <div class="user-status"></div>
                    </div>

                    <span class="messaging-member__name">Savannah Nguyen</span>
                    <span class="messaging-member__message">Really ?!</span>
                  </div>
                </li> -->
                  </ul>
                </div>
                <!-- end message list section  -->
                <!-- start content section  -->
                <div class="chat col-12 col-md-8 col-lg-7 col-xl-6 px-0 pl-md-1">
                  <div class="chat__container">
                    <div class="chat__wrapper py-2 pt-mb-2 pb-md-3">
                      <div class="chat__messaging messaging-member--online pb-2 pb-md-2 pl-2 pl-md-4 pr-2">
                        <div class="chat__previous d-flex d-md-none">
                          <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--previous" viewBox="0 0 45.5 30.4">
                            <path d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z" fill="#f68b3c" />
                          </svg>
                        </div>
                        <!-- <div class="chat__notification d-flex d-md-none chat__notification--new">
                      <span>1</span>
                    </div> -->
                        <div class="chat__infos pl-2 pl-md-0">

                          <div id="header-obrolan"></div>

                          <!-- <div class="chat-member__wrapper" data-online="true">
                        <div class="chat-member__avatar">
                          <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                          <div class="user-status user-status--large"></div>
                        </div>
                        <div class="chat-member__details">
                          <span class="chat-member__name">Jenny Smith</span>
                          <span class="chat-member__status">Online</span>
                        </div>
                      </div> -->

                        </div>
                        <div class="chat__actions mr-2 ">
                          <ul class="m-0">
                            <!-- <li>
                          <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 48 48">
                            <path d="M38.4,48c-2.1,0-5.1-.8-9.5-3.2a62.9,62.9,0,0,1-14.6-11A61.7,61.7,0,0,1,3.2,19C-.9,11.8-.3,8.5.7,6.4A9.7,9.7,0,0,1,4.8,2,21.1,21.1,0,0,1,7.8.4h.3c1.8-.7,3-.3,4.9,1.5h.1a40.1,40.1,0,0,1,5.4,8.2c1.3,2.6,1.6,4.3-.2,6.9l-.5.6c-.8,1-.8,1.2-.8,1.6s1.9,3.4,5.2,6.7S28,30.8,28.8,31s.6,0,1.6-.8l.7-.4c2.5-1.9,4.2-1.6,6.8-.3A40.6,40.6,0,0,1,46.1,35h.1c1.8,1.9,2.2,3.1,1.5,4.9v.2h0a21.1,21.1,0,0,1-1.6,3,10,10,0,0,1-4.3,4.1A7.7,7.7,0,0,1,38.4,48ZM9.5,4.1H9.2L6.9,5.4H6.8A6.3,6.3,0,0,0,4.3,8.1c-.3.7-1.2,2.6,2.4,9A58.9,58.9,0,0,0,17.1,30.9,58.2,58.2,0,0,0,30.9,41.3c6.4,3.6,8.4,2.7,9.1,2.4a6.7,6.7,0,0,0,2.5-2.5.1.1,0,0,0,.1-.1c.5-.8.9-1.6,1.3-2.4v-.2l-.5-.6a35.4,35.4,0,0,0-7.3-4.8c-1.7-.8-1.8-.8-2.7-.1l-.6.4A5.3,5.3,0,0,1,28,34.9c-2.9-.6-7.4-4.9-8.7-6.2s-5.6-5.8-6.2-8.7.6-3.6,1.5-4.8l.4-.6c.7-.9.8-1-.1-2.7a35.4,35.4,0,0,0-4.8-7.3Z" fill="#f68b3c" />
                          </svg>
                        </li>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 46.8 47.4">
                            <path d="M35.8,47.4H11a11,11,0,0,1-11-11V11.6A11,11,0,0,1,11,.6h8.8a2,2,0,1,1,0,4H11a7,7,0,0,0-7,7V36.4a7,7,0,0,0,7,7H35.8a7,7,0,0,0,7-7v-9a2,2,0,1,1,4,0v9A11,11,0,0,1,35.8,47.4Z" fill="#f68b3c" />
                            <path d="M36.6,20.4A10.2,10.2,0,1,1,46.8,10.2,10.2,10.2,0,0,1,36.6,20.4ZM36.6,4a6.2,6.2,0,1,0,6.2,6.2A6.2,6.2,0,0,0,36.6,4Z" fill="#f68b3c" />
                          </svg>
                        </li> -->
                            <li class="chat__details d-flex d-xl-none">
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 42.2 11.1">
                                <g>
                                  <circle cx="5.6" cy="5.6" r="5.6" fill="#d87232" />
                                  <circle cx="21.1" cy="5.6" r="5.6" fill="#d87232" />
                                  <circle cx="36.6" cy="5.6" r="5.6" fill="#d87232" />
                                </g>
                              </svg>
                            </li>
                          </ul>

                        </div>
                      </div>
                      <div class="chat__content pt-4 px-3">
                        <ul class="chat__list-messages">
                          <div id="chat-history"></div>
                          <!-- <li>
                        <div class="chat__time">Yesterday at 16:43</div>
                        <div class="chat__bubble chat__bubble--you">
                          Hey, I bought something yesterdat but haven't gotten any confirmation. Do you know I if the order went through?
                        </div>
                      </li>
                      <li>
                        <div class="chat__bubble chat__bubble--me">
                          Hi! I just checked, your order went through and is on it's way home. Enjoy your new computer! 😃
                        </div>
                      </li>
                      <li>
                        <div class="chat__bubble chat__bubble--you">
                          Ohh thanks ! I was really worried about it !
                        </div>
                        <div class="chat__bubble chat__bubble--you">
                          Can't wait for it to be delivered
                        </div>
                      </li>
                      <li>
                        <div class="chat__time">07:14</div>
                        <div class="chat__bubble chat__bubble--me">
                          Aenean iaculis massa non lorem dignissim volutpat. Praesent id faucibus lorem, a sagittis nunc. Duis facilisis lectus vel sapien ultricies, sed placerat augue elementum. In sagittis, justo nec sodales posuere, nunc est sagittis tellus, eget scelerisque dolor risus vel augue
                        </div>
                        <div class="chat__bubble chat__bubble--me">
                          Is everything alright?
                        </div>

                      </li>
                      <li>
                        <div class="chat__bubble chat__bubble--you">
                          Vestibulum finibus pulvinar quam, at tempus lorem. Pellentesque justo sapien, pulvinar sed magna et, vulputate commodo nisl. Aenean pharetra ornare turpis. Pellentesque viverra blandit ullamcorper. Mauris tincidunt ac lacus vel convallis. Vestibulum id nunc nec urna accumsan dapibus quis ullamcorper massa. Aliquam erat volutpat. Nam mollis mi et arcu dapibus condimentum.
                        </div>
                        <div class="chat__bubble chat__bubble--you">
                          Nulla facilisi. Duis laoreet dignissim lectus vel maximus
                        </div>
                        <div class="chat__bubble chat__bubble--you">
                          Curabitur volutpat, ipsum a condimentum hendrerit ! 😊
                        </div>
                      </li>
                      <li>
                        <div class="chat__time">09:26</div>
                        <div class="chat__bubble chat__bubble--me">
                          Perfect, thanks !
                        </div>
                      </li> -->
                        </ul>
                      </div>
                      <div class="chat__send-container px-2 px-md-3 pt-1 pt-md-3" id="sending">
                        <div class="custom-form__send-wrapper">
                          <input type="text" class="form-control custom-form" id="pesan" placeholder="Tulis Pesan Disini…" autocomplete="off">
                          <div class="custom-form__send-img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-img" viewBox="0 0 45.7 45.7">
                              <path d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z" fill="#f68b3c" />
                            </svg>
                          </div>
                          <div class="custom-form__send-emoji">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-emoji" viewBox="0 0 46.2 46.2">
                              <path d="M23.1,0A23.1,23.1,0,1,0,46.2,23.1,23.1,23.1,0,0,0,23.1,0Zm0,41.6A18.5,18.5,0,1,1,41.6,23.1,18.5,18.5,0,0,1,23.1,41.6Zm8.1-20.8a3.5,3.5,0,0,0,3.5-3.5,3.5,3.5,0,0,0-7,0,3.5,3.5,0,0,0,3.5,3.5ZM15,20.8a3.5,3.5,0,0,0,3.5-3.5A3.5,3.5,0,0,0,15,13.9a3.4,3.4,0,0,0-3.4,3.4A3.5,3.5,0,0,0,15,20.8Zm8.1,15a12.6,12.6,0,0,0,10.5-5.5,1.7,1.7,0,0,0-1.3-2.6H14a1.7,1.7,0,0,0-1.4,2.6A12.9,12.9,0,0,0,23.1,35.8Z" fill="#f68b3c" />
                            </svg>
                          </div>
                          <button type="button" id="kirim_pesan" class="custom-form__send-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send" viewBox="0 0 45.6 45.6">
                              <g>
                                <path d="M20.7,26.7a1.4,1.4,0,0,1-1.2-.6,1.6,1.6,0,0,1,0-2.4L42.6.5a1.8,1.8,0,0,1,2.5,0,1.8,1.8,0,0,1,0,2.5L21.9,26.1A1.6,1.6,0,0,1,20.7,26.7Z" fill="#d87232" />
                                <path d="M29.1,45.6a1.8,1.8,0,0,1-1.6-1L19.4,26.2,1,18.1a1.9,1.9,0,0,1-1-1.7,1.8,1.8,0,0,1,1.2-1.6L43.3.1a1.7,1.7,0,0,1,1.8.4,1.7,1.7,0,0,1,.4,1.8L30.8,44.4a1.8,1.8,0,0,1-1.6,1.2ZM6.5,16.7l14.9,6.6a2,2,0,0,1,.9.9l6.6,14.9L41,4.6Z" fill="#d87232" />
                              </g>
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end content section  -->
                <!-- start infos section  -->
                <div class="col-12 col-md-5 col-lg-4 col-xl-3 px-4 px-sm-5 px-lg-4 user-profile">
                  <div class="user-profile__close d-flex d-xl-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 38.8 38.9">
                      <g>
                        <path d="M2,38.9a1.9,1.9,0,0,1-1.4-.5,2.1,2.1,0,0,1,0-2.9L35.4.6a1.9,1.9,0,0,1,2.8,0,1.9,1.9,0,0,1,0,2.8L3.4,38.4A1.9,1.9,0,0,1,2,38.9Z" fill="#d87232" />
                        <path d="M36.8,38.9a1.9,1.9,0,0,1-1.4-.5L.6,3.4A1.9,1.9,0,0,1,.6.6,1.9,1.9,0,0,1,3.4.6L38.2,35.5a2.1,2.1,0,0,1,0,2.9A1.9,1.9,0,0,1,36.8,38.9Z" fill="#d87232" />
                      </g>
                    </svg>
                  </div>
                  <div class="user-profile__wrapper">
                    <div id="detail-chat"></div>
                    <div id="form-order"></div>

                    <!-- <div class="user-profile__avatar">
                      <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="Jenny Smith" loading="lazy">
                    </div>
                    <div class="user-profile__details mt-1">
                      <span class="user-profile__name">Jenny Smith</span>
                      <span class="user-profile__phone">(025) 015-234-567</span>
                      <span class="user-profile__location">New York, United States</span>
                    </div> -->
                    <div class="user-profile__description">
                      <form action="POST">
                        <div class="form-group">

                        </div>
                      </form>
                    </div>
                    <!-- <div class="user-profile__learning mt-4">
            <span class="user-profile__label">Social Medias</span>
            <ul class="user-profile__tags user-profile__tags--primary mt-2">
              <li><a href="https://www.instagram.com/tiantsoa_sh/" target="_blank">Instagram</a></li>
              <li><a href="https://www.linkedin.com/in/tiantsoa-rabemananjara-254655152/" target="_blank">Linkedin</a></li>
              <li><a href="https://codepen.io/tiantsoa" target="_blank">Codepen</a></li>
            </ul>
          </div> -->
                    <!-- <div class="user-profile__hobbies">
            <span class="user-profile__label">Activities</span>
            <ul class="user-profile__tags user-profile__tags--secondary mt-2">
              <li>Biking</li>
              <li>Cooking</li>
              <li>Traveling</li>
              <li>Grahic design</li>
            </ul>
          </div> -->
                  </div>
                </div>
                <!-- end infos section  -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer text-center">
      <strong>Made with love by KTN Programmer</strong>
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->



  <!-- jQuery -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/vendors/PPI/dashboard/'); ?>dist/js/adminlte.js"></script>



  <script>
    function inisiasi() {
      var interval;
      daftarObrolan();
    }

    function daftarObrolan() {
      $(document).ready(function() {
        let list = '';
        $.ajax({
          url: '<?= base_url('Chat/chatList'); ?>',
          method: 'POST',
          success: function(data) {
            var data = JSON.parse(data);
            for (var i = 0; i < data.length; i++) {
              list += '<li class="messaging-member messaging-member--online">' +
                '<div class="messaging-member__wrapper" onclick="manage(\'' + data[i]['influencer_id'] + '\')">' +
                '<div class="messaging-member__avatar">' +
                '<img src="<?= base_url('assets/assets/img/profile/'); ?>' + data[i]['profile_pic'] + '" alt="Bessie Cooper" loading="lazy">' +
                '<div class="user-status"></div>' +
                '</div>' +
                '<span class="messaging-member__name">' + data[i]['nama_influencer'] + '</span>' +
                '</div>' +
                '</li>';
            }
            //$(list).appendTo('#list-chat');
            $('#list-chat').html(list);
          }
        })


      });
    }

    function manage(temanObrolan) {
      $chat.fadeIn();
      $chat.addClass("chat--show");
      this.teman = temanObrolan;
      clearInterval(this.intervalID);
      this.intervalID = setInterval(function() {
        loadHistoriObrolan(temanObrolan)
        daftarObrolan()
      }, 500);
    }

    function loadHistoriObrolan(temanObrolan) {
      $.ajax({
        url: '<?= base_url('Chat/historyObrolan'); ?>',
        type: 'POST',
        data: {
          temanObrolan: temanObrolan
        },
        success: function(response) {
          console.log(response);
          let result = JSON.parse(response);
          $('#header-obrolan').html(result.headerChat);
          $('#chat-history').html(result.isiChat);
          $('#detail-chat').html(result.detailChat);

          let messageBody = document.querySelector('.chat__content');
          messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;

        }
      })
    }

    function kirimPesan(pesan) {
      var temanObrolan = this.teman;
      var pesan = pesan;
      $('#pesan').val('');
      $.ajax({
        url: '<?= base_url('Chat/kirimPesan'); ?>',
        type: 'POST',
        data: {
          temanObrolan: temanObrolan,
          pesan: pesan
        },
        success: function(data) {
          let result = JSON.parse(data);
          console.log(result.status);
          if (result.status == 'failed') {
            alert('Oops! Terjadi Kesalahan Saat Mengirim Pesan');
          } else {
            manage(temanObrolan);
            $('#pesan').val('');
          }

        }
      })
    }

    $('#pesan').on('keypress', function(e) {
      if (e.which == 13) {
        if ($('#pesan').val() != '') {
          kirimPesan($('#pesan').val());
        } else {
          alert('Silahkan Masukan Pesan');
        }
      }
    })

    $('#kirim_pesan').on('click', function(e) {
      if ($('#pesan').val() != '') {
        kirimPesan($('#pesan').val());
      } else {
        alert('Silahkan Masukan Pesan');
      }
    })
  </script>

  <!-- Chat -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script> -->
  <script src="<?= base_url('assets/assets/'); ?>dist/chat/script.js"></script>
</body>

</html>