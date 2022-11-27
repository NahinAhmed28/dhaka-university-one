<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                    {{--About--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        About Us
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('about.index')}}">
                                <i class="metismenu-icon">
                                </i>Edit
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Services--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Services
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('service.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                    {{--Approach--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-wine"></i>
                        Approach
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Mission & Vision
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{--Accademic--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-wine"></i>
                        Accademic
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Higher Education
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Training
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Internship
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Fellowship
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{--Expertise--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Expertise
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Edit
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>


                {{--Research--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Research
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Ongoing Research
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Completed Research
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Create
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon">
                                        </i>List
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{--Publication--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Publication
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Edit
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Contact--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Contact
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
