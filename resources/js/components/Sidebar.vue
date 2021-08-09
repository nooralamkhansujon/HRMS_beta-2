<template>
  <!-- BEGIN: Main Menu-->
  <div
    class="main-menu menu-fixed menu-dark menu-accordion menu-shadow"
    data-scroll-to-active="true"
  >
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto">
          <a
            class="navbar-brand"
            href="html/ltr/vertical-menu-template-semi-dark/index.html"
          >
            <span class="brand-logo">
              <img src="/images/logo/logo.png" />
            </span>
            <h2 class="brand-text">HRMS</h2>
          </a>
        </li>
        <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
            <vue-feather
              class="d-block d-xl-none text-primary toggle-icon font-medium-4"
              type="x"
            ></vue-feather>

            <!-- <i
              class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
              data-feather="disc"
              data-ticon="disc"
            ></i> -->

            <vue-feather
              class="d-block d-xl-none text-primary toggle-icon font-medium-4"
              type="disc"
            ></vue-feather>
          </a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul
        class="navigation navigation-main"
        id="main-menu-navigation"
        data-menu="menu-navigation"
      >
        <li class="nav-item">
          <router-link class="d-flex align-items-center" :to="{ name: 'Dashboard' }">
            <vue-feather type="home"></vue-feather>

            <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
          </router-link>
        </li>

        <li class="nav-item">
          <a class="d-flex align-items-center">
            <vue-feather type="user"></vue-feather>
            <span class="menu-title text-truncate" data-i18n="User">Employee</span></a
          >
          <ul class="menu-content">
            <li>
              <router-link
                :to="{ name: 'AddEmployee' }"
                class="d-flex align-items-center"
              >
                <vue-feather type="circle"></vue-feather>
                <span class="menu-item text-truncate" data-i18n="List">Add Employee</span>
              </router-link>
            </li>
            <li>
              <router-link
                class="d-flex align-items-center"
                :to="{ name: 'ViewEmployee' }"
              >
                <vue-feather type="circle"></vue-feather>
                <span class="menu-item text-truncate" data-i18n="View"
                  >View Employee</span
                >
              </router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <router-link class="d-flex align-items-center" :to="{ name: 'ViewDepartment' }">
            <vue-feather type="file-text"></vue-feather>
            <span class="menu-title text-truncate" data-i18n="User">Department</span>
          </router-link>
        </li>
      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->
</template>

<script>
import initAppMenu from "../core/app-menu.js";
import initApp from "../core/app.js";
export default {
  components: {},

  mounted() {
    initAppMenu();
    initApp()
    window.addEventListener("resize", function () {
      // We execute the same script as before
      var vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty("--vh", vh + "px");
    });
  },
};
</script>
