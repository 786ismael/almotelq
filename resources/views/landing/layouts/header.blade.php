<div class="container">
    <div class="logo-nav clearfix">
        <a href="{{route('index')}}" class="logo">
            <img src="{{asset("public/landing")}}/images/logo.png" class="d-logo" alt="logo">
            <img src="{{asset("public/landing")}}/images/m-logo.png" class="m-logo" alt="logo">
        </a>

        <button class="toggle-menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav>
            <ul>
                <li><a href="{{route('index','#feature')}}" data-target="expert-service">Features</a></li>
                <li><a href="{{route('index','#vision')}}" data-target="our-vision">Our Vision</a></li>
                <li class="submenu-wrapper">
                    <a href="javascript:void(0);" class="opemsubmenu" data-target="our-services">
                        Services <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li><a href="{{route('online.marketing')}}">online marketing</a></li>
                            <li><a href="{{route('trading')}}">trading</a></li>
                            <li><a href="{{route('development')}}">development</a></li>
                            <li><a href="{{route('online.service')}}">online service</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{route('index','#portfolio')}}" data-target="portfolio">Portfolio</a></li>
                <li><a href="{{route('index','#contact-section')}}" data-target="contact-section">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>