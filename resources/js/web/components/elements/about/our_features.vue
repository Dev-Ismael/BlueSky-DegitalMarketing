<template>

    <!------- Our Features -------->
    <section class="promo-block ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 promo-col">
                    <div class="promo-item">
                        <div class="promo-img">
                            <img src="/digimark_template/img/Good-quality.gif" alt="prevention" width="75">
                        </div>
                        <h5>High Quality</h5>
                        <p>Helping you to get the best quality.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 promo-col">
                    <div class="promo-item">
                        <div class="promo-img">
                            <img src="/digimark_template/img/support-service.gif" alt="prevention" width="75">
                        </div>
                        <h5>Technical Support</h5>
                        <p>We respond to your needs with helpful solutions.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 promo-col">
                    <div class="promo-item">
                        <div class="promo-img">
                            <img src="/digimark_template/img/24-8.gif" alt="prevention" width="75">
                        </div>
                        <h5>24/7</h5>
                        <p>We are always here to serve you.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 promo-col">
                    <div class="promo-item">
                        <div class="promo-img">
                            <img src="/digimark_template/img/phonecall.gif" alt="prevention" width="75">
                        </div>
                        <h5>Call For Expert</h5>
                        <a :href=" 'tel:' + settings.phone_formatted " class="emergency-btn">
                            {{ settings.phone }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>
<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                settings: {},
            }
        },
        mounted(){
            this.showSettings();
        },
        methods: {

            /*======================================================
            ====== GET Settings
            ======================================================*/
            showSettings() {
                axios.get('/api/settings/')
                    .then(
                        response => {
                            // console.log(response.data);
                            if (response.data.status == "success") {
                                this.settings = response.data.data
                            }
                        }
                    )
                    .catch(
                        error => console.log(error)
                    )
            },
        }

    }
</script>
