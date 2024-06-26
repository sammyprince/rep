<template>
  <app-layout title="My Profile">
    <template #header></template>
    <div class="py-5 border-bottom border-dark">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              v-if="
                getPageContentType('archives_page_description') == 'textarea'
              "
            >
              <div v-html="getPageContent('archives_page_description')"></div>
            </div>
            <div
              v-else-if="
                getPageContentType('archives_page_description') == 'text'
              "
            >
              <p>{{ getPageContent("archives_page_description") ?? "-" }}</p>
            </div>
            <div v-else>
              <h2 class="fs-2 text-center">
                <span class="fw-normal">Explore | </span>
                <span class="fw-bold">All Courses</span>
              </h2>
              <!-- <p class="text-center mb-0">Discover The Best Lawyers Near You</p> -->
            </div>

            <breadcrums :breadcrums="breadcrums"></breadcrums>
          </div>
        </div>
      </div>
    </div>

    <div class="section py-0">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="search-side-bar">
              <find-archive-bar
                @getArchives="onSearch"
                :is_redirect="false"
              ></find-archive-bar>
            </div>
          </div>
          <div class="col-md-9 border-start border-dark">
            <div class="row mx-0 my-4">
              <div class="col-12" v-if="fetching">
                <div class="row media-skeleton-cards">
                  <div class="col-md-6 mb-4">
                    <card-skeleton></card-skeleton>
                  </div>
                  <div class="col-md-6 mb-4">
                    <card-skeleton></card-skeleton>
                  </div>
                  <div class="col-md-6 mb-4">
                    <card-skeleton></card-skeleton>
                  </div>
                  <div class="col-md-6 mb-4">
                    <card-skeleton></card-skeleton>
                  </div>
                </div>
              </div>
              <div class="col-12" v-if="!fetching">
                <div v-if="archives.data.length > 0" class="row">
                  <archive-card
                    :add_col="false"
                    v-for="archive in archives.data"
                    :key="archive.id"
                    :archive="archive"
                  ></archive-card>
                </div>
                <div v-else class="row">
                  <div class="col-12 text-center mb-3">
                    <record-not-found></record-not-found>
                  </div>
                </div>
                <div
                  class="row my-4"
                  v-if="archives.meta.last_page != this.filter.page"
                >
                  <div
                    class="col-md-12 d-flex align-items-center justify-content-center"
                  >
                    <button
                      @click="loadMore()"
                      class="btn btn-primary position-relative"
                      :disabled="loading_more"
                    >
                      <span
                        :class="{
                          loader: loading_more,
                        }"
                        class="position-absolute"
                      ></span>
                      {{ __("load more") }}
                    </button>
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
<script>
import { defineComponent } from "vue";
import PaginationMixin from "@/Mixins/PaginationMixin.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import FindArchiveBar from "@/Components/Archives/FindArchiveBar.vue";
import ArchiveCard from "@/Components/Archives/ArchiveCard.vue";
import RecordNotFound from "../../Components/Shared/RecordNotFound.vue";
import Breadcrums from "../../Components/Shared/Breadcrums.vue";
import CardSkeleton from "@/Components/Skeleton/CardSkeleton.vue";

export default defineComponent({
  mixins: [PaginationMixin],
  components: {
    AppLayout,
    Navbar,
    PageHeader,
    ArchiveCard,
    FindArchiveBar,
    RecordNotFound,
    Breadcrums,
    CardSkeleton,
  },
  created() {},
  data() {
    return {
      archives: {},
      breadcrums: [
        {
          id: 1,
          name: "Home",
          link: "/",
        },
        {
          id: 2,
          name: "Courses",
          link: "",
        },
      ],
    };
  },
  methods: {
    async getPaginatedData(loading_more = false) {
      await this.getArchives(loading_more);
    },
    getArchives(loading_more) {
      // if(Object.keys(route().params).length > 0){
      //     this.$inertia.replace(route('archives.listing'))
      // }
      axios.post(this.route("getApiArchives"), this.filter).then((res) => {
        const data = res.data.data;
        if (loading_more) {
          this.archives.data = this.archives.data.concat(data.data);
        } else {
          this.archives.data = data.data;
        }
        this.archives.links = data.links;
        this.archives.meta = data.meta;
        this.fetching = false;
      });
    },
  },
});
</script>
