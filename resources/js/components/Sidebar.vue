<template>

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand"
                        href="html/ltr/vertical-menu-template-semi-dark/index.html">
                        <span class="brand-logo">
                            <img src="/images/logo/logo.png"/>
                        </span>
                        <h2 class="brand-text">HRMS</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                      <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i>
                        </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                  <router-link class="d-flex align-items-center" :to="{name:'Dashboard'}">
                           <i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span>
                  </router-link>
                    <!-- <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul> -->
                </li>
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item"><a class="d-flex align-items-center" >
                     <i data-feather="user"></i><span
                            class="menu-title text-truncate" data-i18n="User">Employee</span></a>
                    <ul class="menu-content">
                        <li><router-link :to="{name:'AddEmployee'}" class="d-flex align-items-center"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Add Employee</span></router-link>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-user-view.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="View">View Employee</span></a>
                        </li>
                        <!-- <li><a class="d-flex align-items-center" href="app-user-edit.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Edit">Edit</span></a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Authentication">Authentication</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-auth-login-v1.html"
                                        target="_blank"><span class="menu-item text-truncate" data-i18n="LoginV1">Login
                                            v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-login-v2.html"
                                        target="_blank"><span class="menu-item text-truncate" data-i18n="LoginV2">Login
                                            v2</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-register-v1.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="RegisterV1">Register v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-register-v2.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="RegisterV2">Register v2</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-forgot-password-v1.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="ForgotPasswordV1">Forgot Password v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-forgot-password-v2.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="ForgotPasswordV2">Forgot Password v2</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-reset-password-v1.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="ResetPasswordV1">Reset Password v1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-auth-reset-password-v2.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="ResetPasswordV2">Reset Password v2</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-account-settings.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Account Settings">Account Settings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span
                                            class="menu-item text-truncate" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span
                                            class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span
                                            class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Welcome">Welcome</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Reset Password">Reset Password</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Verify Email">Verify Email</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Deactivate Account">Deactivate Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Promotional">Promotional</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="credit-card"></i><span class="menu-title text-truncate"
                            data-i18n="Card">Card</span><span
                            class="badge badge-light-success badge-pill ml-auto mr-1">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li> -->



                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="copy"></i><span
                            class="menu-title text-truncate" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="form-input.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input">Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-groups.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-mask.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input Mask">Input Mask</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-textarea.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-checkbox.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-radio.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-switch.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-select.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Select">Select</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-number-input.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-file-uploader.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-quill-editor.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li> -->


                <!-- <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><i
                        data-feather="more-horizontal"></i>
                </li> -->


                <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                            class="menu-title text-truncate" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.1</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.2</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate"
                                            data-i18n="Third Level">Third Level 3.1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate"
                                            data-i18n="Third Level">Third Level 3.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->


</template>


<script>
export default {

}
</script>
