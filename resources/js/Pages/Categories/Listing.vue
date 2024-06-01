<template>
  <app-layout title="Categories">
    <template #header></template>
    <div class="container-fluid py-5 border-bottom border-dark">
      <div class="row">
        <div class="col-12">
          <div v-if="getPageContentType('categories_page_description') == 'textarea'">
            <div v-html="getPageContent('categories_page_description')"></div>
          </div>
          <div v-else-if="getPageContentType('categories_page_description') == 'text'">
            <p>{{ getPageContent("categories_page_description") ?? "-" }}</p>
          </div>
          <div v-else>
            <h2 class="fs-2 text-center">
              <span class="fw-normal">Search Lawyer | </span>
              <span class="fw-bold">Make An Appointment</span>
            </h2>
          </div>
          <breadcrums :breadcrums="breadcrums"></breadcrums>
        </div>
      </div>
    </div>
    <div class="section p-0">
      <div class="container">
        <div class="row py-5 px-3 px-md-0">
          <div class="col-12 p-0">
            <div class="card rounded-0 border-0">
              <div v-if="fetching" class="row">
                <div class="col-md-4" v-for="n in 6" :key="n">
                  <categories-skeleton></categories-skeleton>
                </div>
              </div>
              <div v-else class="row">
                <div class="col-md-4 mb-4" v-for="(main_category, ind) in lawyer_main_categories" :key="ind">
                  <div
                    class="p-3 text-white d-flex align-items-center rounded-5 category-card"
                    style="background-color: #262e39; cursor: pointer;"
                    @click="selectMainCategory(ind)"
                  >
                    <span class="me-3 text-primary">
                      <img
                        :src="main_category.icon"
                        style="width: 30px; max-height: 30px; filter: invert(1);"
                        alt=""
                      />
                    </span>
                    <span class="text-decoration-none">
                      {{ main_category.name }}
                    </span>
                  </div>
                  <div v-if="selectedMainCategory === ind" class="mt-4 sub-category-list">
                    <h3>{{ main_category.name }}</h3>
                    <div class="row">
                      <div class="col-12" v-for="(sub_cat, sub_ind) in main_category.categories" :key="sub_ind">
                        <Link
                          class="text-decoration-none text-black d-block mb-2"
                          :href="
                            route('lawyers.listing', {
                              lawyer_category: sub_cat.slug,
                              main_category_slug: main_category.slug,
                            })
                          "
                        >
                          {{ sub_cat.name }}
                        </Link>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<style src="@vueform/multiselect/themes/default.css"></style>

<style scoped>
.category-card {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.sub-category-list {
  margin-top: 1rem;
}

.sub-category-list .d-block {
  padding: 0.5rem 1rem;
  background-color: #f8f9fa;
  border-radius: 0.25rem;
}
</style>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
import { router } from "@inertiajs/inertia-vue3";
import Multiselect from "@vueform/multiselect";
import CategoriesSkeleton from "@/Components/Skeleton/CategoriesSkeleton.vue";
import VueGoogleAutocomplete from "vue-google-autocomplete";
import Breadcrums from "../../Components/Shared/Breadcrums.vue";

export default defineComponent({
  components: {
    ValidationErrors,
    Link,
    Multiselect,
    VueGoogleAutocomplete,
    AppLayout,
    Breadcrums,
    CategoriesSkeleton,
  },
  props: {
    is_redirect: {
      type: Boolean,
      default: true,
    },
  },
  created() {
    this.getLawyerMainCategories();
  },
  data() {
    return {
      form: {
        lawyer_category: route().params.lawyer_category ?? "",
        search: route().params.search ?? "",
        country: route().params.country ?? "",
        location:
          route().params.search_type == "location" && route().params.location
            ? route().params.location
            : "",
        latitude: route().params.latitude ?? "",
        longitude: route().params.longitude ?? "",
        search_type: route().params.search_type ?? "country",
        distance:
          route().params.search_type == "distance" && route().params.distance
            ? route().params.distance
            : "",
        zip_code:
          route().params.search_type == "zip_code" && route().params.zip_code
            ? route().params.zip_code
            : "",
      },
      countries: [],
      lawyer_categories: [],
      lawyer_main_categories: [],
      selectedMainCategory: null,
      fetching: true,
      breadcrums: [
        {
          id: 1,
          name: "Home",
          link: "/",
        },
        {
          id: 2,
          name: "Categories",
          link: "",
        },
      ],
    };
  },
  methods: {
    getLawyerMainCategories() {
      axios.get(this.route("getApiLawyerMainCategories")).then((res) => {
        this.lawyer_main_categories = res.data.data;
        this.fetching = false;
      });
    },
    selectMainCategory(index) {
      this.selectedMainCategory = this.selectedMainCategory === index ? null : index;
    },
  },
});
</script>
