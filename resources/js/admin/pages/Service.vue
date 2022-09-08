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
                                <!-- <div class="col-sm-12 col-md-6 text-end">
                                    <div class="dataTables_length" id="order-listing_length"><label>Show <select
                                                name="order-listing_length" aria-controls="order-listing"
                                                class="custom-select custom-select-sm form-control">
                                                <option value="10">10</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div> -->

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
                                                <!-- <th class="sorting sorting_asc" tabindex="0"
                                                    aria-controls="order-listing" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Order #: activate to sort column descending"
                                                    style="width: 91.5469px;">Order #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Purchased On: activate to sort column ascending"
                                                    style="width: 145.938px;">Purchased On</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 109.047px;">Customer</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 86.4375px;">Ship to</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Base Price: activate to sort column ascending"
                                                    style="width: 113.031px;">Base Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Purchased Price: activate to sort column ascending"
                                                    style="width: 166.547px;">Purchased Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 107.094px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 100.375px;">Actions</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="service in services.data" :key="service.id">
                                                <td class="sorting_1"> {{ service.id }} </td>
                                                <td> {{ service.img }} </td>
                                                <td> {{ service.title.substring(0, 20)  + '...'  }} </td>
                                                <td> {{ service.summary.substring(0, 50)  + '...' }} </td>
                                                <td>
                                                    <button type="button"
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
                                    <!-- <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form> -->
                                    <div class="form-group">
                                        <!-- <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name"> -->
                                        <span class="h5 fw-bold"> <i class="mdi mdi-format-title"></i> title : </span>
                                        <span class="h6"> asd </span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">Send message</button>
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

        /*===========  GET Service =========*/
        getServices(page = 1) {
            axios.get('/api/admin/service?page=' + page)
                .then(
                    response => {
                        // console.log(response.data);
                        this.services = response.data;
                    }
                )
                .catch(error => console.log(error))
        },

        /*===========  GET Service =========*/
        showService(service){
            axios.get('/api/admin/service/' + messege.id )
            .then(
                resquest => {
                    // this.messege = resquest.data
                    console.log(resquest.data);
                }
            )
            .catch( error => console.log(error) )
        }

    },
}
</script>
