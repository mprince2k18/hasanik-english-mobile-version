<template>
<div>
    <!-- start -->

    <div class="page-content">
        <div class="tab-controls mr-3 ml-3 tabs-round tab-animated tabs-medium tabs-rounded clearfix shadow-xl mb-4" data-tab-items="2" data-tab-active="bg-highlight activated color-white">
            <a href="#" class="font-12 w-100" data-tab-active data-tab="tab-1">All Courses</a>
        </div>
        <div class="tab-content" id="tab-1">

            <div v-for="course in courses.data" :key="course.id" class="card card-style">
                <img :src="course.thumbnail" class="img-fluid" :alt="course.name">
                <div class="content">
                    <h1>{{ course.name }}</h1>
                    <p class="opacity-80 text-uppercase font-16 mt-n2 font-600 mb-1">৳{{ course.price }}</p>

                    <div class="d-flex">
                        <!-- <div class="mr-auto d-none">
                            <div class="list-group list-custom-large mt-n3">
                                <a href="#" class="border-0">
                                    <img src="images/pictures/1s.jpg" class="rounded-sm">
                                    <span>John Droid</span>
                                    <strong>Senior Designer</strong>
                                </a>
                            </div>
                        </div> -->
                        <div>
                            <a href="#" class="btn btn-full btn-s font-600 rounded-s gradient-highlight mt-1 float-left ">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider divider-margins"></div>

        </div>

    </div>


    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-pages"></div>

    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>

    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div>
</div>
<!-- End -->
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data(){
      return{
        courses:[],
      }
    },
    methods:{
      getData(){
        axios.get('https://hasanikenglish.com/api/courses')
        .then(response => this.courses = response.data);
      }
    },
    created(){
      this.getData();
    }
}
</script>
