<template>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="fa-solid mdi mdi-book-multiple"></i> Services table</h4>
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
                                <div class="col-sm-12 col-md-6 text-end">
                                    <div class="dataTables_length" id="order-listing_length"><label>Show <select
                                                name="order-listing_length" aria-controls="order-listing"
                                                class="custom-select custom-select-sm form-control">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
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
                                            <tr v-for="service in services"  :key="service.id" >
                                                <td class="sorting_1"> {{ service.id }} </td>
                                                <td>  {{ service.img }} </td>
                                                <td>  {{ service.title }} </td>
                                                <td>  {{ service.summary }} </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-rounded btn-icon p-2">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button type="button" class="btn btn-primary btn-rounded btn-icon p-2">
                                                        <i class="ti-marker-alt"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger btn-rounded btn-icon p-2">
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
                                        aria-live="polite">Showing 1 to 10 of 10 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="order-listing_previous"><a href="#" aria-controls="order-listing"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="order-listing" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="order-listing_next">
                                                <a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0"
                                                    class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
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

export default {
    data() {
        return {
            services: {}
        }
    },
    mounted() {
        this.getServices();
    },
    methods: {

        /*===========  GET Service =========*/
        getServices(){
            axios.get('/api/admin/service')
            .then(
                response => {
                    // console.log(response.data.data);
                    this.services = response.data.data;
                }
            )
            .catch( error => console.log(error) )
        }

    },
}
</script>
