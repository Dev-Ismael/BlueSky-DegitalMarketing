<template>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4 class="card-title"> <i class="fa-solid mdi mdi-book-multiple"></i> Services table</h4>
                </div>
                <div class="col-6 text-end">
                    <button type="button" class="btn btn-danger btn-rounded btn-icon p-2" data-bs-toggle="modal" data-bs-target="#showDataModal"
                    data-whatever="@mdo">Create New</button>
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
                                                <td> {{ service.title.substring(0, 20)  + '...'  }} </td>
                                                <td> {{ service.summary.substring(0, 50)  + '...' }} </td>
                                                <td>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#showDataModal" @click="showService(service.id)"
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
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-align-left"></i> summary : </span>
                                        <span class="h6"> {{ service.summary }} </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-align-left"></i> content : </span>
                                        <span class="h6"> {{ service.content }} </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-title"></i> icon : </span>
                                        <span class="h6"> <img :src="'/admin/services/' + service.icon " alt="service-icon"> </span>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-title"></i> img : </span>
                                        <span class="h6"> <img :src="'/admin/services/' + service.img " alt="service-img"> </span>
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
        }
    },
    mounted() {
        this.getServices();
    },
    methods: {

        /*=========== GET Services =========*/
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

        /*=========== GET Service =========*/
        showService(service_id){
            axios.get('/api/admin/service/' + service_id )
            .then(
                resquest => {
                    // console.log(resquest.data);
                    this.service = resquest.data.data
                }
            )
            .catch(
                error => console.log(error)
            )
        }

    },
}
</script>
