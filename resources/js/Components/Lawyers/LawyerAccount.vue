<template>
  <div class="container-fluid py-5 border-bottom border-dark">
    <div class="row">
      <div class="col-12">
        <h2 class="fs-2 text-center">

          <span class="fw-normal">Hello {{ $page.props.auth.user.name }} |</span>
          <span class="fw-bold"> Set Profile</span>
        </h2>
        <!-- <p class="text-center mb-0">Discover The Best Lawyers Near You</p> -->
      </div>
      <breadcrums :breadcrums="breadcrums"></breadcrums>
    </div>
  </div>
  
  <div>
    <!-- Hamburger menu (only visible on mobile) -->
    <div class="hamburger" @click="toggleMenu">
      <div :class="{'bar': true, 'change': menuOpen}"></div>
      <div :class="{'bar': true, 'change': menuOpen}"></div>
      <div :class="{'bar': true, 'change': menuOpen}"></div>
    </div>

    <!-- Menu (conditionally rendered based on menuOpen) -->
    <div v-if="menuOpen" class="menu">
      <!-- Add your menu items here -->
      <a href="#">My Account</a>
      <a href="#">My Appointments</a>
      <a href="#">My Courses</a>
      <a href="#">My wallet</a>
    </div>

  <div class="section p-0 profile">
  
      <!-- Hide this part for mobile visitors -->
    <div class="container hide-on-mobile">
      <div class="row g-0">
        <div class="col-md-3 p-4">
          <div class="nav flex-column nav-pills account-tabs" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <li class="nav-item mb-3" role="presentation">
              <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'general-info' }"
                @click="changeTab('general-info')" id="general-info-tab" data-bs-toggle="tab"
                data-bs-target="#general-info" type="button" role="tab" aria-controls="general-info"
                aria-selected="true">{{ __('general info') }}</button>
            </li>
            <!-- v-if="hasModule('test')" -->
            <li class="nav-item mb-3" role="presentation">
              <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'certifications' }"
                @click="changeTab('certifications')" id="certifications-tab" data-bs-toggle="tab"
                data-bs-target="#certifications" type="button" role="tab" aria-controls="certifications"
                aria-selected="false">{{ __('certifications') }}</button>
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link w-100"
                :class="{active: active_tab == 'bookings'}"
                href="https://acemastars.com/appointment_log"
                id="bookings-tab"
                role="tab"
                aria-controls="bookings"
                aria-selected="true"
              > My Appointments </a>
            </li>
            <p></p>
            <li class="nav-item mb-3" role="presentation"  v-if="!isSubscriptionEnabled() || hasModule('lawyer-appointment', 'lawyer')">
              <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'appointment' }"
                @click="changeTab('appointment')" id="appointment-tab" data-bs-toggle="tab" data-bs-target="#appointment"
                type="button" role="tab" aria-controls="appointment" aria-selected="false">My Schedules</button>
            </li>
            <li class="nav-item mb-3" role="presentation"  v-if="!isSubscriptionEnabled() || hasModule('lawyer-archives', 'lawyer')">
              <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'archives' }"
                @click="changeTab('archives')" id="archives-tab" data-bs-toggle="tab" data-bs-target="#archives"
                type="button" role="tab" aria-controls="archives" aria-selected="false">{{ __n('archive') }}</button>
            </li>
            <li class="nav-item"><a :href="route('lawyer.my_profile')" class="nav-link" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Preview Profile</a></li>

          </div>
        </div>
        <div class="col-md-9 border-start border-dark">
          <!-- Nav tabs -->

          <!-- Tab panes -->
          <div class="tab-content w-100 p-4" id="v-pills-tabContent">
            <lawyer-general-info v-if="active_tab == 'general-info'"
              :active="active_tab == 'general-info'"></lawyer-general-info>
            <lawyer-social-info v-if="!isSubscriptionEnabled() || hasModule('lawyer-social-info', 'lawyer') && active_tab == 'social-info'"
              :active="active_tab == 'social-info'"></lawyer-social-info>
            <lawyer-certifications v-if="active_tab == 'certifications'"
              :active="active_tab == 'certifications'"></lawyer-certifications>
            <lawyer-broadcasts v-if="!isSubscriptionEnabled() || hasModule('lawyer-broadcasts', 'lawyer') && active_tab == 'broadcasts'"
              :active="active_tab == 'broadcasts'"></lawyer-broadcasts>
            <lawyer-podcasts v-if="!isSubscriptionEnabled() || hasModule('lawyer-podcasts', 'lawyer') && active_tab == 'podcasts'"
              :active="active_tab == 'podcasts'"></lawyer-podcasts>
            <lawyer-events v-if="!isSubscriptionEnabled() || hasModule('lawyer-events', 'lawyer') && active_tab == 'events'"
              :active="active_tab == 'events'"></lawyer-events>
            <lawyer-products v-if="!isSubscriptionEnabled() || hasModule('lawyer-products', 'lawyer') && active_tab == 'products'"
              :active="active_tab == 'products'"></lawyer-products>
            <lawyer-youtube v-if="active_tab == 'youtube'"
              :active="active_tab == 'youtube'"></lawyer-youtube>
            <lawyer-instagram v-if="active_tab == 'instagram'"
              :active="active_tab == 'instagram'"></lawyer-instagram>
            <lawyer-calendly v-if="!isSubscriptionEnabled() || hasModule('lawyer-calendly', 'lawyer') && active_tab == 'calendly'"
              :active="active_tab == 'calendly'"></lawyer-calendly>
            <lawyer-appointment v-if="!isSubscriptionEnabled() || hasModule('lawyer-appointment', 'lawyer') && active_tab == 'appointment'"
              :active="active_tab == 'appointment'"></lawyer-appointment>
            <lawyer-posts v-if="!isSubscriptionEnabled() || hasModule('lawyer-blogs', 'lawyer') && active_tab == 'blogs'"
              :active="active_tab == 'blogs'"></lawyer-posts>
            <lawyer-archives v-if="!isSubscriptionEnabled() || hasModule('lawyer-archives', 'lawyer') && active_tab == 'archives'"
              :active="active_tab == 'archives'"></lawyer-archives>
          </div>
        </div>
      </div>
    </div>
  </div>
      
    <div class="container hide-on-desktop">
        <div class="container">
          <div class="row g-0">
            <div class="col-md-3 p-4">
              <div class="nav flex-column nav-pills account-tabs" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <li class="nav-item mb-3" role="presentation">
                  <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'general-info' }"
                    @click="changeTab('general-info')" id="general-info-tab" data-bs-toggle="tab"
                    data-bs-target="#general-info" type="button" role="tab" aria-controls="general-info"
                    aria-selected="true">{{ __('general info') }}</button>
                </li>
                <!-- v-if="hasModule('test')" -->
                <li class="nav-item mb-3" role="presentation">
                  <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'certifications' }"
                    @click="changeTab('certifications')" id="certifications-tab" data-bs-toggle="tab"
                    data-bs-target="#certifications" type="button" role="tab" aria-controls="certifications"
                    aria-selected="false">{{ __('certifications') }}</button>
                </li>
                
                <li class="nav-item mb-3" role="presentation"  v-if="!isSubscriptionEnabled() || hasModule('lawyer-appointment', 'lawyer')">
                  <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'appointment' }"
                    @click="changeTab('appointment')" id="appointment-tab" data-bs-toggle="tab" data-bs-target="#appointment"
                    type="button" role="tab" aria-controls="appointment" aria-selected="false">Manage my schedule </button>
                </li>
                <li class="nav-item mb-3" role="presentation"  v-if="!isSubscriptionEnabled() || hasModule('lawyer-archives', 'lawyer')">
                  <button class="nav-link w-100 text-dark" :class="{ active: active_tab == 'archives' }"
                    @click="changeTab('archives')" id="archives-tab" data-bs-toggle="tab" data-bs-target="#archives"
                    type="button" role="tab" aria-controls="archives" aria-selected="false">{{ __n('archive') }}</button>
                </li>
                <li class="nav-item"><a :href="route('lawyer.my_profile')" class="nav-link" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Preview Profile</a></li>
    
              </div>
            </div>
            <div class="col-md-9 border-start border-dark">
              <!-- Nav tabs -->


          <!-- v-if="hasModule('test')" -->
          <!-- Tab panes -->
          <div class="tab-content w-100 p-4" id="v-pills-tabContent">
            <lawyer-general-info v-if="active_tab == 'general-info'"
              :active="active_tab == 'general-info'"></lawyer-general-info>
            <lawyer-certifications v-if="active_tab == 'certifications'"
              :active="active_tab == 'certifications'"></lawyer-certifications>
            <lawyer-products v-if="!isSubscriptionEnabled() || hasModule('lawyer-products', 'lawyer') && active_tab == 'products'"
              :active="active_tab == 'products'"></lawyer-products>
            <lawyer-appointment v-if="!isSubscriptionEnabled() || hasModule('lawyer-appointment', 'lawyer') && active_tab == 'appointment'"
              :active="active_tab == 'appointment'"></lawyer-appointment>
            <lawyer-posts v-if="!isSubscriptionEnabled() || hasModule('lawyer-blogs', 'lawyer') && active_tab == 'blogs'" :active="active_tab == 'blogs'"></lawyer-posts>
            <lawyer-archives v-if="!isSubscriptionEnabled() || hasModule('lawyer-archives', 'lawyer') && active_tab == 'archives'"
              :active="active_tab == 'archives'"></lawyer-archives>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
</template>

<script>
import { defineComponent } from "vue";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import Button from "@/Components/Button.vue";
import Input from "@/Components/Input.vue";
import Checkbox from "@/Components/Checkbox.vue";
import Label from "@/Components/Label.vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import LawyerGeneralInfo from "@/Components/Lawyers/LawyerGeneralInfo.vue";
import LawyerSocialInfo from "@/Components/Lawyers/LawyerSocialInfo.vue";
import LawyerBroadcasts from "@/Components/Lawyers/Broadcasts/LawyerBroadcasts.vue";
import LawyerPodcasts from "@/Components/Lawyers/Podcasts/LawyerPodcasts.vue";
import LawyerEvents from "@/Components/Lawyers/Events/LawyerEvents.vue";
import LawyerPosts from "@/Components/Lawyers/Posts/LawyerPosts.vue";
import LawyerProducts from "@/Components/Lawyers/LawyerProducts.vue";
import LawyerYoutube from "@/Components/Lawyers/LawyerYoutube.vue";
import LawyerInstagram from "@/Components/Lawyers/LawyerInstagram.vue";
import LawyerCalendly from "@/Components/Lawyers/LawyerCalendly.vue";
import LawyerAppointment from "@/Components/Lawyers/Appointments/LawyerAppointment.vue";
import LawyerCertifications from "@/Components/Lawyers/Certifications/LawyerCertifications.vue";
import Breadcrums from "../../Components/Shared/Breadcrums.vue";
import LawyerArchives from "@/Components/Lawyers/Archives/LawyerArchives.vue";

export default defineComponent({
  components: {
    Head,
    AuthenticationCard,
    AuthenticationCardLogo,
    Button,
    Input,
    Checkbox,
    Label,
    AppLayout,
    ValidationErrors,
    Link,
    LawyerGeneralInfo,
    LawyerSocialInfo,
    LawyerBroadcasts,
    LawyerPodcasts,
    LawyerEvents,
    LawyerProducts,
    LawyerPosts,
    LawyerArchives,
    LawyerYoutube,
    LawyerInstagram,
    LawyerCalendly,
    LawyerAppointment,
    LawyerCertifications,
    Breadcrums
  },

  data() {
    return {
      active_tab: route().params.active_tab ?? "general-info",
      breadcrums: [
        {
          id: 1,
          name: 'Home',
          link: '/'
        },
        {
          id: 2,
          name: 'Account',
          link: ''
        }
      ],
      menuOpen: false // Added data property for menu visibility
    };
  },

  methods: {
    changeTab(tab) {
      this.active_tab = tab;
      this.$inertia.replace(route("account"), {
        data: { active_tab: this.active_tab },
        preserveScroll: true
      });
    },
    toggleMenu() {
      this.menuOpen = !this.menuOpen;
    },
    submit() { }
  }
});
</script>

<style scoped>
/* Hide hamburger menu and the menu by default */
.hamburger, .menu {
  display: none;
}

/* Show hamburger menu and the menu only on mobile */
@media (max-width: 768px) {
  .hamburger {
    display: block;
  }
  .menu {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 10px;
    background-color: #f9f9f9;
  }
}

.bar {
  width: 35px;
  height: 5px;
  background-color: #333;
  margin: 6px 0;
  transition: 0.4s;
}

/* Rotate animation */
.change .bar:nth-child(1) {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
  transform: rotate(-45deg) translate(-9px, 6px);
}

/* Fade out the second bar */
.change .bar:nth-child(2) {
  opacity: 0;
}

/* Rotate reverse the third bar */
.change .bar:nth-child(3) {
  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  transform: rotate(45deg) translate(-8px, -8px);
}

.menu a {
  text-decoration: none;
  color: #333;
  padding: 8px;
}

.menu a:hover {
  background-color: #ddd;
}

/* Hide elements on desktop */
@media (min-width: 992px) {
  .hide-on-desktop {
    display: none !important;
  }
}


/* Hide elements on mobile */
@media (max-width: 768px) {
  .hide-on-mobile {
    display: none !important;
  }
}
</style>