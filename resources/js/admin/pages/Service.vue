<template>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4 class="card-title"> <i class="fa-solid mdi mdi-book-multiple"></i> Services table</h4>
                </div>
                <div class="col-6 text-end">
                    <button type="button" class="btn btn-danger btn-rounded btn-icon p-2" data-bs-toggle="modal"
                        data-bs-target="#formModal" data-whatever="@mdo">Create New</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer pt-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div id="order-listing_filter" class="dataTables_filter"><label><input type="search"
                                                class="form-control" placeholder="Search By Title..."
                                                aria-controls="order-listing"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr>
                                                <th> ID # </th>
                                                <th> Image </th>
                                                <th> Title </th>
                                                <th> Summary </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="service in services.data" :key="service.id">
                                                <td class="sorting_1"> {{ service.id }} </td>
                                                <td> {{ service.img }} </td>
                                                <td> {{ service.title.substring(0, 20) + '...' }} </td>
                                                <td> {{ service.summary.substring(0, 50) + '...' }} </td>
                                                <td>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#showDataModal" @click="showService(service.id)"
                                                        class="btn btn-secondary btn-rounded btn-icon p-2">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button type="button"
                                                        class="btn btn-primary btn-rounded btn-icon p-2">
                                                        <i class="ti-marker-alt"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button type="button"
                                                        class="btn btn-danger btn-rounded btn-icon p-2">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="order-listing_info" role="status"
                                        aria-live="polite">Showing {{ ( (services.total + 1) - services.from) }} to {{ (
                                        (services.total + 1) - services.to) }} of {{ services.total }} entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers">
                                        <!-- pagination Component -->
                                        <!-- <Pagination :data="services" @pagination-change-page="getServices" :limit="1"/> -->
                                        <pagination :data="services" @pagination-change-page="getServices" :limit="2">
                                            <template #prev-nav>
                                                <span>&lt; </span>
                                            </template>
                                            <template #next-nav>
                                                <span> &gt;</span>
                                            </template>
                                        </pagination>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!------- Show Modal ------>
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="modal fade" id="showDataModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Show Service Data</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-title"></i> title : </span>
                                        <span class="h6"> {{ service.title }} </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-align-left"></i> summary :
                                        </span>
                                        <span class="h6"> {{ service.summary }} </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-align-left"></i> content :
                                        </span>
                                        <span class="h6"> {{ service.content }} </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-file-image"></i> icon : </span>
                                        <span class="h6"> <img :src="'/admin/services/' + service.icon "
                                                alt="service-icon"> </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-file-image"></i> img : </span>
                                        <span class="h6"> <img :src="'/admin/services/' + service.img "
                                                alt="service-img"> </span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!---- Form Model ---->
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">{{ edit ? "Edit Service" : "Create Service"
                                    }}</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form @submit.prevent="createService()" enctype="multipart/form-data">
                                    <div class="modal-body">


                                        <!-- title -->
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label"> <i
                                                    class="mdi mdi-format-title"></i> Title:</label>
                                            <input type="text" name="title" v-model="service.title" class="form-control" id="recipient-name">
                                            <small class="text-danger" >as </small>

                                        </div>


                                        <!-- seo_title -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                                SEO Title:</label>
                                            <textarea name="seo_title"  v-model="service.seo_title"  class="form-control" id="message-text" rows="4"
                                                cols="50"></textarea>
                                        </div>


                                        <!-- seo_keywords -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                                SEO KeyWords:</label>
                                            <textarea name="seo_keywords"  v-model="service.seo_keywords"  class="form-control" id="message-text"
                                                rows="4" cols="50"></textarea>
                                        </div>


                                        <!-- seo_description -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i class="ti-search"></i>
                                                SEO Description:</label>
                                            <textarea name="seo_description" v-model="service.seo_description"  class="form-control" id="message-text"
                                                rows="4" cols="50"></textarea>
                                        </div>


                                        <!-- summary -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Summary:</label>
                                            <textarea name="summary"  v-model="service.summary"  class="form-control" id="message-text" rows="4"
                                                cols="50"></textarea>
                                        </div>


                                        <!-- content -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content:</label>
                                            <textarea name="content" v-model="service.content"  class="form-control" id="message-text" rows="4"
                                                cols="50"></textarea>
                                        </div>


                                        <!-- Icon -->
                                        <div class="form-group">
                                            <label>Upload Icon</label>
                                            <input type="file" name="icon" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" name="icon" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Image -->
                                        <div class="form-group">
                                            <label>Upload Big Image</label>
                                            <input type="file" name="img" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" name="img" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button @submit.prevent="createService()" class="btn btn-success">{{ edit ? 'Edit' : 'Save'}}</button>
                                        <!-- <button class="btn btn-light" data-bs-dismiss="modal">Close</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</template>
<script>
import axios from 'axios';
import LaravelVuePagination from 'laravel-vue-pagination';

export default {
    components: {
        'Pagination': LaravelVuePagination
    },
    data() {
        return {
            services: {},
            service: {},
            errors: {}, // create empty object to insert errors in it to show
            edit: false // set this var to know if modal for create or edit
        }
    },
    mounted() {
        this.getServices();
    },
    methods: {




        /*======================================================
        ====== GET Services
        ======================================================*/
        getServices(page = 1) {
            axios.get('/api/admin/service?page=' + page)
                .then(
                    response => {
                        // console.log(response.data);
                        this.services = response.data;
                    }
                )
                .catch(
                    error => console.log(error)
                )
        },




        /*======================================================
        ====== GET Service
        ======================================================*/
        showService(service_id) {
            axios.get('/api/admin/service/' + service_id)
                .then(
                    response => {
                        // console.log(response.data);
                        if (response.data.status == "success") {
                            this.service = response.data.data
                        } else if (response.data.status == "error" && response.data.msg == "404 not found") {
                            /*=== Sweet Alert ===*/
                            Vue.swal({
                                position: 'top-end',
                                icon: 'error',
                                text: 'Error 404 not found',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            /*=== Sweet Alert ===*/
                            Vue.swal({
                                position: 'top-end',
                                icon: 'error',
                                text: 'Server Error',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                )
                .catch(
                    error => console.log(error)
                )
        },




        /*======================================================
        ====== Create Service
        ======================================================*/
        setEditFalse() {
            this.edit = false, // set var edit equale 'false' to know that this modal for create
            this.service = {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                title: '',
                slug: '',
                summary: '',
                content: '',
                seo_description: '',
                seo_keywords: '',
                seo_title: '',
                img: '',
                icon: '',
            }
        },
        createService() {
            axios.post("/api/admin/service", this.service)
            .then(
                response => {  // if there success request
                    // console.log(response.data);
                    if (response.data.status == "success") {
                        // this.service = response.data.data
                    } else if (response.data.status == "error" && response.data.msg == "validation failed") {
                        /*=== Sweet Alert ===*/
                        this.$swal({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Opps..',
                            text: 'check validation errors',
                            title: 'Validation error',
                            showConfirmButton: false,
                            timer: 500000
                        });
                    } else {
                        /*=== Sweet Alert ===*/
                        Vue.swal({
                            position: 'top-end',
                            icon: 'error',
                            text: 'Server Error',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                }
            )
            .catch(error => console.log(error));
        },



    },

}
</script>
