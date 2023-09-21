<div id="left-sidebar" class="sidebar">

        <div class="d-flex justify-content-between brand_name">
            <h5 class="brand-name">HyperMedia</h5>
            <div class="theme_btn">
                <a class="theme1" data-toggle="tooltip" title="Theme Radical" href="#" onclick="setStyleSheet('../assets/css/theme1.css', 0);"></a>
                <a class="theme2" data-toggle="tooltip" title="Theme Turmeric" href="#" onclick="setStyleSheet('../assets/css/theme2.css', 0);"></a>
                <a class="theme3" data-toggle="tooltip" title="Theme Caribbean" href="#" onclick="setStyleSheet('../assets/css/theme3.css', 0);"></a>
                <a class="theme4" data-toggle="tooltip" title="Theme Cascade" href="#" onclick="setStyleSheet('../assets/css/theme4.css', 0);"></a>
            </div>
        </div>
        <div class="input-icon">
            <span class="input-icon-addon">
                <i class="fe fe-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Search...">
        </div>
        <ul class="nav nav-tabs b-none">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all-tab"><i class="fa fa-list-ul"></i> All</a></li>

            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting-tab">Other preferences</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="all-tab">
                <nav class="sidebar-nav">
                    <ul class="metismenu ci-effect-1">
                        <li class="g_heading"><b>DASHBOARD</b></li>
                        <li class="active"><a href="{{ url('/') }}"><i class="fe fe-home"></i><span data-hover="Home">Home</span></a></li>
                        <li><a href="{{ url('/products') }}"><i class="fe fe-package"></i><span data-hover="Products">Products</span></a></li>
                        <li><a href="{{ url('/categories') }}"><i class="fe fe-grid"></i><span data-hover="Category">Category</span></a></li>

                        <li class="font-14 font-weight-bold mt-4 text-muted">PREFERENCES</li>
                        <ul class="setting-list list-unstyled mt-1 setting_switch">
                             <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Night Mode</span>
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                        </ul>


                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="app-tab">
                <nav class="sidebar-nav">

                </nav>
            </div>
            <div class="tab-pane fade" id="setting-tab">
                <div class="mb-4 mt-3">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-opensans" checked="">
                            <span class="custom-control-label">Open Sans Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                    <div class="custom-controls-stacked arrow_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                    <div class="custom-controls-stacked list_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">

                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>


                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar" checked="">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor" checked="">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
 </div>
