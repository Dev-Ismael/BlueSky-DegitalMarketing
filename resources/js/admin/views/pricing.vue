<template>
    <div class="row">
        <div class="col-md-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pricing Plans</h4>

                    <form @submit.prevent="storePricing()" enctype="multipart/form-data" method="POST">
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
                                            <input type="text" v-model="pricing.standard.price.us" class="form-control" name="standard_price_us"
                                                id="standard_price_us" placeholder="Type US Price...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="standard_price_eg">
                                                <img src="/admin/images/icons/egypt.png" alt="egypt-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="pricing.standard.price.eg" class="form-control" name="standard_price_eg"
                                                id="standard_price_eg" placeholder="Type EG Price...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="standard_content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="pricing.standard.content" name="standard_content" id="standard_content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{errors.content[0] }}
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
                                            <input type="text" v-model="pricing.premium.price.us" class="form-control" name="premium_price_us"
                                                id="premium_price_us" placeholder="Type US Price...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="premium_price_eg">
                                                <img src="/admin/images/icons/egypt.png" alt="egypt-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="pricing.premium.price.eg" class="form-control" name="premium_price_eg"
                                                id="premium_price_eg" placeholder="Type EG Price...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="premium_content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="pricing.premium.content" name="premium_content" id="premium_content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{errors.content[0] }}
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
                                            <input type="text" v-model="pricing.unlimited.price.us" class="form-control" name="unlimited_price_us"
                                                id="unlimited_price_us" placeholder="Type US Price...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="unlimited_price_eg">
                                                <img src="/admin/images/icons/egypt.png" alt="egypt-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="pricing.unlimited.price.eg" class="form-control" name="unlimited_price_eg"
                                                id="unlimited_price_eg" placeholder="Type EG Price...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="unlimited_content" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="pricing.unlimited.content" name="unlimited_content" id="unlimited_content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{errors.content[0] }}
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

export default {

    data() {
        return {
            editor: ClassicEditor,   // import ClassicEditor theme to use in checkEditor package
            errors: {},     // create empty object to insert errors in it to show
            pricing: {
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
        // this.showSettings();
    },
    methods: {


        // /*======================================================
        // ====== GET Settings
        // ======================================================*/
        // showSettings() {
        //     axios.get('/api/admin/settings/')
        //         .then(
        //             response => {
        //                 // console.log(response.data);
        //                 if (response.data.status == "success") {
        //                     this.settings = response.data.data
        //                 } else if (response.data.status == "error") {
        //                     /*=== Sweet Alert ===*/
        //                     this.$swal({
        //                         position: 'top-end',
        //                         icon: response.data.status,
        //                         text: response.data.msg,
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     });
        //                 }
        //             }
        //         )
        //         .catch(
        //             error => console.log(error)
        //         )
        // },


        /*======================================================
        ====== Update Settings
        ======================================================*/


        storePricing() {

            // console.log()

            // Set Config var to send it with data request
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                }
            }


            // set var from FormData Class
            let formData = new FormData();

            formData.append('pricing', JSON.stringify(this.pricing) );


            // // Array of inputs
            // const inputs = ['address', 'location', 'footer_content', 'email', 'phone', 'phone_formatted', 'linkedin', 'facebook', 'twitter', 'youtube'];


            // // For Loop To append every item in inputs array
            // inputs.forEach(input => {
            //     formData.append(String(input), this.settings[input]);
            // });


            // Send request with axios
            axios.post("/api/admin/pricing" , formData, config)
                .then(
                    response => {  // if there success request

                        // console.log(response.data);

                        // if response status
                        if (response.data.status == "success") {

                            // reload showSettings()
                            this.showSettings();

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

