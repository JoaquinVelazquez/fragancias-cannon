<style type="text/css">
    /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
    #header {
        transition: all 0.5s;
        z-index: 997;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    #header.header-scrolled, #header.header-inner-pages {
        background: rgba(40, 40, 40, 0.9);
    }

    #header .logo {
        font-size: 28px;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    #header .logo a {
        color: #fff;
    }

    #header .logo img {
        max-height: 35px;
    }

    @media (max-width: 992px) {
        #header {
            border: 0;
            padding: 15px 0;
        }
    }
    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Desktop Navigation */
    .nav-menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-menu > ul {
        display: flex;
    }

    .nav-menu > ul > li {
        position: relative;
        white-space: nowrap;
        margin: 0 12px;
    }

    .nav-menu a {
        display: block;
        position: relative;
        color: rgba(255, 255, 255, 0.7);
        transition: 0.3s;
        font-size: 14px;
        padding: 25px 3px;
        font-weight: 600;
        font-family: "Open Sans", sans-serif;
        text-decoration: none;
    }

    .nav-menu > ul > li > a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #ffffff;
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
    }

    .nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .active > a:before {
        visibility: visible;
        width: 100%;
    }

    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
        color: #fff;
    }

    .nav-menu .drop-down ul {
        display: block;
        position: absolute;
        left: 0;
        top: calc(100% + 30px);
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        padding: 10px 0;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
        border-top: 2px solid #000000;
    }

    .nav-menu .drop-down:hover > ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
    }

    .nav-menu .drop-down li {
        min-width: 180px;
        position: relative;
    }

    .nav-menu .drop-down ul a {
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 500;
        text-transform: none;
        color: #282828;
    }

    .nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
        color: #000000;
    }

    .nav-menu .drop-down > a:after {
        content: "\ea99";
        font-family: IcoFont;
        padding-left: 5px;
    }

    .nav-menu .drop-down .drop-down ul {
        top: 0;
        left: calc(100% - 30px);
    }

    .nav-menu .drop-down .drop-down:hover > ul {
        opacity: 1;
        top: 0;
        left: 100%;
    }

    .nav-menu .drop-down .drop-down > a {
        padding-right: 35px;
    }

    .nav-menu .drop-down .drop-down > a:after {
        content: "\eaa0";
        font-family: IcoFont;
        position: absolute;
        right: 15px;
    }

    @media (max-width: 1366px) {
        .nav-menu .drop-down .drop-down ul {
            left: -90%;
        }
        .nav-menu .drop-down .drop-down:hover > ul {
            left: -100%;
        }
        .nav-menu .drop-down .drop-down > a:after {
            content: "\ea9d";
        }
    }
    /* Mobile Navigation */
    .mobile-nav-toggle {
        position: fixed;
        right: 15px;
        top: 18px;
        z-index: 9998;
        border: 0;
        background: none;
        font-size: 24px;
        transition: all 0.4s;
        outline: none !important;
        line-height: 1;
        cursor: pointer;
        text-align: right;
    }

    .mobile-nav-toggle i {
        color: #fff;
    }

    .mobile-nav {
        position: fixed;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        z-index: 9999;
        overflow-y: auto;
        background: #fff;
        transition: ease-in-out 0.2s;
        opacity: 0;
        visibility: hidden;
        border-radius: 10px;
        padding: 10px 0;
    }

    .mobile-nav * {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .mobile-nav a {
        display: block;
        position: relative;
        color: #282828;
        padding: 10px 20px;
        font-weight: 500;
        outline: none;
    }

    .mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
        color: #ffffff;
        text-decoration: none;
    }

    .mobile-nav .drop-down > a:after {
        content: "\ea99";
        font-family: IcoFont;
        padding-left: 10px;
        position: absolute;
        right: 15px;
    }

    .mobile-nav .active.drop-down > a:after {
        content: "\eaa1";
    }

    .mobile-nav .drop-down > a {
        padding-right: 35px;
    }

    .mobile-nav .drop-down ul {
        display: none;
        overflow: hidden;
    }

    .mobile-nav .drop-down li {
        padding-left: 20px;
    }

    .mobile-nav-overly {
        width: 100%;
        height: 100%;
        z-index: 9997;
        top: 0;
        left: 0;
        position: fixed;
        background: rgba(15, 15, 15, 0.6);
        overflow: hidden;
        display: none;
        transition: ease-in-out 0.2s;
    }

    .mobile-nav-active {
        overflow: hidden;
    }

    .mobile-nav-active .mobile-nav {
        opacity: 1;
        visibility: visible;
    }

    .mobile-nav-active .mobile-nav-toggle i {
        color: #fff;
    }

    .active{
        border-bottom-color: transparent;
    }
    .item-link {
        /*text-transform: uppercase !important;*/
        color:white !important;
        display: block;
    }

</style>
<div id="header" style="background-color: rgba(0, 0, 0, .9)">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-between">
                <nav class="nav-menu d-none d-lg-block">
                    <ul>

                        <li><a href="/#lanzamientos" class="item-link">Lanzamientos</a></li>
                        <li><a href="/#fragancias" class="item-link">Fragancias</a></li>
{{--                        <li><a href="/campaigns" class="item-link">Campa??as</a></li>--}}
                        <li><a href="/nosotros " class="item-link">Nosotros</a></li>
						<li><a href="/clientes" class="item-link">Clientes</a></li>

                        <li><a href="/contacto" class="item-link">Contacto</a></li>
                    </ul>
                </nav>
                <a href="/" class="logo"><img src="{{asset('img/home/logo-03.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
