<template>
  <app-layout title="blogs">
    <template #default>
        <div class="py-5 border-bottom border-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div v-if="getPageContentType('blogs_page_description') == 'textarea'
                            ">
                            <div v-html="getPageContent('blogs_page_description')"></div>
                        </div>
                        <div v-else-if="getPageContentType('blogs_page_description') == 'text'
                            ">
                            <p>{{ getPageContent("blogs_page_description") ?? "-" }}</p>
                        </div>
                        <div v-else>

                            <h2 class="fs-2 text-center">
                                <span class="fw-normal">Explore | </span>
                                <span class="fw-bold">All Blogs</span>
                            </h2>
                            <!-- <p class="text-center mb-0">Discover The Best Lawyers Near You</p> -->
                        </div>

                        <breadcrums :breadcrums="breadcrums"></breadcrums>
                    </div>
                </div>
            </div>
        </div>
      <div class="section py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-6">
                    <div class="" style="height: 450px">
                        <img
                        v-if="post.image"
                        class="img-fluid w-100 rounded-md"
                        :src="post.image"
                        alt="image"
                        style="height: 450px; object-fit: cover"
                      />
                      <img
                        v-else
                        class="img-fluid"
                        src="@/images/common/image.png"
                        alt="image"
                      />
                    </div>
                    </div>

                    <div class="col-md-6">
                        <h1 class="text-start mb-3">{{ post.name }}</h1>
                      <div v-html="post.description"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Breadcrums from "../../Components/Shared/Breadcrums.vue";
export default defineComponent({
  components: {
    AppLayout,
    Navbar,
    PageHeader,
    Breadcrums,
  },
  props: ["post"],
  created() {
    },
    data() {
        return {
            posts: {},
            breadcrums:[
                {
                    id:1,
                    name:'Home',
                    link:'/'
                },
                {
                    id:2,
                    name:'Blogs',
                    link:''
                }
            ]
        }
    },
});
</script>
