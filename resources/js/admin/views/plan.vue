<template>
    <div class="row">
        <div class="col-md-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Plan Plans</h4>

                    <form @submit.prevent="storePlan()" enctype="multipart/form-data" method="POST">
                        <div class="container">
                            <div class="row pt-3 pb-3">


                                <!------ Standard Box ------>
                                <div class="col-md-4 mt-2">
                                    <div class="plan-box standard">
                                        <h3 class="plan-title"> Standard </h3>
                                        <!-- US Price -->
                                        <div class="form-group">
                                            <label for="standard_price_us">
                                                <img src="/admin/images/icons/usa.png" alt="usa-flag" width="30">
                                                US Price
                                            </label>
                                            <input type="text" v-model="plan.standard.price.us" class="form-control" name="standard_price_us"
                                                id="standard_price_us" placeholder="Type US Price...." :class=" errors[`standard.price.us`] ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors[`standard.price.us`]"> {{errors[`standard.price.us`][0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="standard_price_eg">
                                                <img src="/admin/images/icons/egypt.png" alt="egypt-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="plan.standard.price.eg" class="form-control" name="standard_price_eg"
                                                id="standard_price_eg" placeholder="Type EG Price...." :class=" errors[`standard.price.eg`] ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors[`standard.price.eg`]"> {{errors[`standard.price.eg`][0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="standard_content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="plan.standard.content" name="standard_content" id="standard_content"></ckeditor>
                                            <small class="text-danger" v-if="errors[`standard.content`]"> {{errors[`standard.content`][0] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>



                                <!------ Premium Box ------>
                                <div class="col-md-4 mt-2">
                                    <div class="plan-box premium">
                                        <h3 class="plan-title"> Premium </h3>
                                        <!-- US Price -->
                                        <div class="form-group">
                                            <label for="premium_price_us">
                                                <img src="/admin/images/icons/usa.png" alt="usa-flag" width="30">
                                                US Price
                                            </label>
                                            <input type="text" v-model="plan.premium.price.us" class="form-control" name="premium_price_us"
                                                id="premium_price_us" placeholder="Type US Price...." :class=" errors[`premium.price.us`] ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors[`premium.price.us`]"> {{errors[`premium.price.us`][0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="premium_price_eg">
                                                <img src="/admin/images/icons/egypt.png" alt="egypt-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="plan.premium.price.eg" class="form-control" name="premium_price_eg"
                                                id="premium_price_eg" placeholder="Type EG Price...." :class=" errors[`premium.price.eg`] ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors[`premium.price.eg`]"> {{errors[`premium.price.eg`][0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="premium_content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="plan.premium.content" name="premium_content" id="premium_content"></ckeditor>
                                            <small class="text-danger" v-if="errors[`premium.content`]"> {{errors[`premium.content`][0] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>



                                <!------ Unlimited Box ------>
                                <div class="col-md-4 mt-2">
                                    <div class="plan-box unlimited">
                                        <h3 class="plan-title"> Unlimited </h3>
                                        <!-- US Price -->
                                        <div class="form-group">
                                            <label for="unlimited_price_us">
                                                <img src="/admin/images/icons/usa.png" alt="usa-flag" width="30">
                                                US Price
                                            </label>
                                            <input type="text" v-model="plan.unlimited.price.us" class="form-control" name="unlimited_price_us"
                                                id="unlimited_price_us" placeholder="Type US Price...." :class=" errors[`unlimited.price.us`] ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors[`unlimited.price.us`]"> {{errors[`unlimited.price.us`][0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="unlimited_price_eg">
                                                <img src="/admin/images/icons/egypt.png" alt="egypt-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="plan.unlimited.price.eg" class="form-control" name="unlimited_price_eg"
                                                id="unlimited_price_eg" placeholder="Type EG Price...." :class=" errors[`unlimited.price.eg`] ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors[`unlimited.price.eg`]"> {{errors[`unlimited.price.eg`][0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="unlimited_content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="plan.unlimited.content" name="unlimited_content" id="unlimited_content"></ckeditor>
                                            <small class="text-danger" v-if="errors[`unlimited.content`]"> {{errors[`unlimited.content`][0] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import { serialize } from 'object-to-formdata';

export default {

    data() {
        return {
            editor: ClassicEditor,   // import ClassicEditor theme to use in checkEditor package
            errors: {},     // create empty object to insert errors in it to show
            plan: {
                standard: {
                    price: {
                        us: '',
                        eg: '',
                    },
                    content: ''
                },
                premium: {
                    price: {
                        us: '',
                        eg: '',
                    },
                    content: ''
                },
                unlimited: {
                    price: {
                        us: '',
                        eg: '',
                    },
                    content: ''
                },
            },
        }
    },
    mounted() {
        this.showPlan();
    },
    methods: {


        /*======================================================
        ====== GET Plan
        ======================================================*/
        showPlan() {
            axios.get('/api/admin/plan/')
                .then(
                    response => {
                        // console.log(response.data);
                        if (response.data.status == "success") {
                            this.plan = response.data.data
                        } else if (response.data.status == "error") {
                            /*=== Sweet Alert ===*/
                            this.$swal({
                                position: 'top-end',
                                icon: response.data.status,
                                text: response.data.msg,
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
        ====== Update Settings
        ======================================================*/


        storePlan() {

            // Set Config var to send it with data request
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                }
            }

            const formData = serialize(
                this.plan,
            );

            // Send request with axios
            axios.post("/api/admin/plan" , formData, config)
                .then(
                    response => {  // if there success request

                        // console.log(response.data);

                        // if response status
                        if (response.data.status == "success") {

                            // reload showPlan()
                            this.showPlan();

                            // empty error var
                            this.errors = {}

                            // Sweet Alert
                            this.$swal({
                                position: 'top-end',
                                icon: response.data.status,
                                text: response.data.msg,
                                showConfirmButton: false,
                                timer: 1500
                            });

                        }
                        // if response validation error
                        else if (response.data.status == "error" && response.data.msg == "validation failed") {

                            this.errors = response.data.errors

                        }
                        // if Settings not Found
                        else if (response.data.status == "error") {

                            // Sweet Alert
                            this.$swal({
                                position: 'top-end',
                                icon: response.data.status,
                                text: response.data.msg,
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

