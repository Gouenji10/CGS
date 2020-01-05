<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Dashboard</h2>
                <div>
                <div class="page-header-tools">
                    <a class="btn btn-gradient-01" href="#">Add Widget</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
                    
    <!-- Begin Row -->
    <div class="row flex-row">
        <!-- Begin Facebook -->
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-facebook text-facebook"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">David Green</div>
                            <div class="number">10,865 Likes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Facebook -->
        <!-- Begin Twitter -->
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-twitter text-twitter"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-twitter">@David_Green</div>
                            <div class="number">8,986 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Twitter -->
        <!-- Begin Linkedin -->
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-linkedin-outline text-linkedin"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-linkedin">@David_Green</div>
                            <div class="number">3,654 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Linkedin -->
    </div>
    <!-- End Row -->
                    
    <!-- Begin Row -->
    <div class="row flex-row">
        <div class="col-xl-12 col-md-6">
            <!-- Begin Widget 09 -->
            <div class="widget widget-09 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header d-flex align-items-center">
                    <h2>Delivered Orders</h2>
                    <div class="widget-options">
                        <button type="button" class="btn btn-shadow">View all</button>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xl-10 col-12 no-padding">
                            <div>
                                <canvas id="orders"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
                            <div class="new-orders">
                                <div class="title">New Orders</div>
                                <div class="circle-orders">
                                    <div class="percent-orders"></div>
                                </div>
                            </div>
                            <div class="some-stats mt-5">
                                <div class="title">Total Delivered</div>
                                <div class="number text-blue">856</div>
                            </div>
                            <div class="some-stats mt-3">
                                <div class="title">Total Estimated</div>
                                <div class="number text-blue">297</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget 09 -->
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
                
<!-- Begin Page Footer-->
<footer class="main-footer">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
            <p class="text-gradient-02">Design By Saerox</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="documentation.html">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="changelog.html">Changelog</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- End Page Footer -->
                
<a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
<!-- Offcanvas Sidebar -->
<div class="off-sidebar from-right">
    <div class="off-sidebar-container">
        <header class="off-sidebar-header">
            <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
            </ul>
            <a href="#off-canvas" class="off-sidebar-close"></a>
        </header>
        <div class="off-sidebar-content offcanvas-scroll auto-scroll">
            <div class="tab-content">
                <!-- Begin Messenger -->
                <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                    <!-- Begin Chat Message -->
                    <span class="date">Today</span>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?php echo img('avatar/avatar-02.jpg',true);?>" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    <span class="mb-2">Brandon wrote</span>
                                    Hi David, what's up?
                                </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                   Hi Brandon, fine and you?
                               </p>
                                <p>
                                   I'm working on the next update of Elisyam
                               </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?php echo img('avatar/avatar-02.jpg',true);?>" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    <span class="mb-2">Brandon wrote</span>
                                    I can't wait to see
                                </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                   I'm almost done
                               </p>
                            </div>
                            <div class="messenger-details">
                                <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <span class="date">Yesterday</span>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?php echo img('avatar/avatar-05.jpg',true);?>" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    I updated the server tonight
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                   Didn't you have any problems?
                               </p>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-sender">
                        <img class="messenger-image messenger-image-default" src="<?php echo img('avatar/avatar-05.jpg',true);?>" alt="...">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                    No!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="messenger-message messenger-message-recipient">
                        <div class="messenger-message-wrapper">
                            <div class="messenger-message-content">
                                <p>
                                   Great!
                               </p>
                                <p>
                                   See you later!
                               </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Chat Message -->
                    <!-- Begin Message Form -->
                    <div class="enter-message">
                        <div class="enter-message-form">
                            <input type="text" placeholder="Enter your message..."/>
                        </div>
                        <div class="enter-message-button">
                            <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                        </div>
                    </div>
                    <!-- End Message Form -->
                </div>
                <!-- End Messenger -->
                <!-- Begin Today -->
                <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                    <!-- Begin Today Stats -->
                    <div class="sidebar-heading pt-0">Today</div>
                    <div class="today-stats mt-3 mb-3">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="la la-users"></i>
                                <div class="counter">264</div>
                                <div class="heading">Clients</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-cart-arrow-down"></i>
                                <div class="counter">360</div>
                                <div class="heading">Sales</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-money"></i>
                                <div class="counter">$ 4,565</div>
                                <div class="heading">Earnings</div>
                            </div>
                        </div>
                    </div>
                    <!-- End Today Stats -->
                    <!-- Begin Friends -->
                    <div class="sidebar-heading">Friends</div>
                    <div class="quick-friends mt-3 mb-3">
                        <ul class="list-group w-100">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?php echo img('avatar/avatar-02.jpg',true);?>" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Brandon Smith</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?php echo img('avatar/avatar-03.jpg',true);?>" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Louis Henry</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?php echo img('avatar/avatar-04.jpg',true);?>" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Nathan Hunter</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?php echo img('avatar/avatar-05.jpg',true);?>" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Megan Duncan</a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="<?php echo img('avatar/avatar-06.jpg',true);?>" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <a href="javascript:void(0);">Beverly Oliver</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Friends -->
                    <!-- Begin Settings -->
                    <div class="sidebar-heading">Settings</div>
                    <div class="quick-settings mt-3 mb-3">
                        <ul class="list-group w-100">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="text-dark">Notifications Email</p>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox" checked>
                                            <span>
                                                <span></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="text-dark">Notifications Sound</p>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox">
                                            <span>
                                                <span></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="text-dark">Chat Message Sound</p>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox" checked>
                                            <span>
                                                <span></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Settings -->
                </div>
                <!-- End Today -->
            </div>
        </div>
        <!-- End Offcanvas Container -->
    </div>
    <!-- End Offsidebar Container -->
</div>
<!-- End Offcanvas Sidebar -->
<!-- Begin Success Modal -->
<div id="delay-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="sa-icon sa-success animate" style="display: block;">
                    <span class="sa-line sa-tip animateSuccessTip"></span>
                    <span class="sa-line sa-long animateSuccessLong"></span>
                    <div class="sa-placeholder"></div>
                    <div class="sa-fix"></div>
                </div>
                <div class="section-title mt-5 mb-5">
                    <h2 class="text-dark">Meeting successfully created</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Success Modal -->
<!-- Begin Modal -->
<div id="modal-view-event" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title event-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left align-self-center mr-3">
                        <div class="event-icon"></div>
                    </div>
                    <div class="media-body align-self-center mt-3 mb-3">
                        <div class="event-body"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->