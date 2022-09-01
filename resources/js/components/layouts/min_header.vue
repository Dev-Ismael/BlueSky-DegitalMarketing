<template>

    <!------ Header ------>
    <section class="hero-section padding-heading-100 gradient-overlay" style="background: url('/digimark_template/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0"> <i :class="icon"></i> {{ title }} </h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">{{ url }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>
<script>
    export default {
        props: {
            icon: {
                type: String,
                required: true
            },
            title: {
                type: String,
                required: true
            },
            url: {
                type: String,
                required: true
            },
        }
    }
</script>
