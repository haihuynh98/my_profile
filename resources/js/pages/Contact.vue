<template>
    <div class="content">
        <div class="title-section">
            <h1>Contact <span>Me</span></h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="block-contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>District 4, HCM city, Viet Nam</h4>
                </div>
                <div class="block-contact">
                    <i class="fas fa-phone-alt"></i>
                    <h4>+84 522 915 914</h4>
                </div>
                <div class="block-contact">
                    <i class="fas fa-at"></i>
                    <h4>hai.huynh@cloudteam.vn</h4>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=52%20nguy%E1%BB%85n%20tr%C6%B0%E1%BB%9Dng%20t%E1%BB%99%2C%20qu%E1%BA%ADn%204&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                    <ContactForm></ContactForm>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import ContactForm from '../components/ContactForm'

    export default {
        name: 'Contact',
        components:{
            ContactForm
        }

    }
</script>
<style></style>
