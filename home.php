<?php
require "inc/inc.seo.php";

require "inc/inc.back.php";
?>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right z-index" id="sidebar-wrapper">
        <div class="sidebar-heading">
            <div class="user-dados">
                <div class="iconUser">
                    <img class=" br-100 w100" src="img/icon/user.jpg" alt="">
                </div>
                <div class="ml-2 nameUser">
                    <h3>Ola <b>User</b> </h3>
                </div>
            </div>
        </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="z-index navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btnPizza" id="menu-toggle">
                <span>
                    <img class="w100 " src="img/icon/menu.png" alt="">
                </span>
            </button>
            <div class="col-md-3 col-10 visible-xs ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Busque mais 🍕" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-prepend">
                        <button class="btn btnPesquisar" type="button" id="button-addon1">🍳</button>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="col-md-2 col-1"> </div>
                <div class="col-md-7 col-1">
                </div>
                <div class="col-md-3 col-9 hidden-xs ">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Busque mais 🍕  " aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <?php
    require "inc/inc.footer.php"
    ?>