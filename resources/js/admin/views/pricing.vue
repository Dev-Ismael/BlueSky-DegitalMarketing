<template>
    <div class="row">
        <div class="col-md-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pricing Plans</h4>

                    <form @submit.prevent="storePrice()" enctype="multipart/form-data" method="POST">
                        <div class="container">
                            <div class="row pt-3 pb-3">
                                <div class="col-md-4 mt-2">
                                    <div class="plan-box standard">
                                        <h3 class="plan-title"> Standard </h3>
                                        <!-- US Price -->
                                        <div class="form-group">
                                            <label for="linkedin">
                                                <img src="/admin/images/icons/usa.png" alt="usa-flag" width="30">
                                                US Price
                                            </label>
                                            <input type="text" v-model="settings.linkedin" class="form-control" name="linkedin"
                                                id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="linkedin">
                                                <img src="/admin/images/icons/egypt.png" alt="usa-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="settings.linkedin" class="form-control" name="linkedin"
                                                id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="settings.linkedin" name="content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{errors.content[0] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <div class="plan-box premium">
                                        <h3 class="plan-title"> Premium </h3>
                                        <!-- US Price -->
                                        <div class="form-group">
                                            <label for="linkedin">
                                                <img src="/admin/images/icons/usa.png" alt="usa-flag" width="30">
                                                US Price
                                            </label>
                                            <input type="text" v-model="settings.linkedin" class="form-control" name="linkedin"
                                                id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="linkedin">
                                                <img src="/admin/images/icons/egypt.png" alt="usa-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="settings.linkedin" class="form-control" name="linkedin"
                                                id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="settings.linkedin" name="content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{errors.content[0] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <div class="plan-box unlimited">
                                        <h3 class="plan-title"> Unlimited </h3>
                                        <!-- US Price -->
                                        <div class="form-group">
                                            <label for="linkedin">
                                                <img src="/admin/images/icons/usa.png" alt="usa-flag" width="30">
                                                US Price
                                            </label>
                                            <input type="text" v-model="settings.linkedin" class="form-control" name="linkedin"
                                                id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- EG Price -->
                                        <div class="form-group">
                                            <label for="linkedin">
                                                <img src="/admin/images/icons/egypt.png" alt="usa-flag" width="30">
                                                EG Price
                                            </label>
                                            <input type="text" v-model="settings.linkedin" class="form-control" name="linkedin"
                                                id="linkedin" placeholder="Type Linkedin...." :class=" errors.linkedin ? 'border-danger' : ''  " >
                                            <small class="text-danger" v-if="errors.linkedin"> {{errors.linkedin[0] }}
                                            </small>
                                        </div>
                                        <!-- Content -->
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label"> <i
                                                    class="mdi mdi-format-align-left"></i> Content </label>
                                            <ckeditor :editor="editor" v-model="settings.linkedin" name="content"></ckeditor>
                                            <small class="text-danger" v-if="errors.content"> {{errors.content[0] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            settings: {
                address: '',
                location: '',
                footer_content: '',
                email: '',
                phone: '',
                phone_formatted: '',
                linkedin: '',
                facebook: '',
                twitter: '',
                youtube: '',
            },
            errors: {},     // create empty object to insert errors in it to show

            pricing: {
                standard: {
                    price: {
                        eg: '',
                        other: '',
                    },
                    content: ''
                },
                premium: {
                    price: {
                        eg: '',
                        other: '',
                    },
                    content: ''
                },
                unlimited: {
                    price: {
                        eg: '',
                        other: '',
                    },
                    content: ''
                },
            }
        }
    },
    mounted() {
        this.showSettings();
    },
    methods: {


        /*======================================================
        ====== GET Settings
        ======================================================*/
        showSettings() {
            axios.get('/api/admin/settings/')
                .then(
                    response => {
                        // console.log(response.data);
                        if (response.data.status == "success") {
                            this.settings = response.data.data
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


        updateSettings() {


            // Set Config var to send it with data request
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                }
            }


            // set var from FormData Class
            let formData = new FormData();


            // Array of inputs
            const inputs = ['address', 'location', 'footer_content', 'email', 'phone', 'phone_formatted', 'linkedin', 'facebook', 'twitter', 'youtube'];


            // For Loop To append every item in inputs array
            inputs.forEach(input => {
                formData.append(String(input), this.settings[input]);
            });


            // Send request with axios
            axios.post("/api/admin/settings" , formData, config)
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

