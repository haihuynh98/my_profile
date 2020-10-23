<template>
    <div>
        <form @submit.prevent="savecontact">
            <div class="title">
                <h4 class="text-left">You can send messages <span>here</span></h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your subject" v-model="contact.subject"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" v-model="contact.message"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name *" v-model="contact.name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" v-model="contact.email"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone Number *" v-model="contact.phone_number"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" :disabled="loading">
                            Send Message
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
    import NProgress from 'nprogress'

    export default {
        name: 'ContactForm',
        data() {
            return {
                contact: {},
                loading: false,
            }

        },
        methods: {
            savecontact() {
                this.loading = true
                console.log(this.contact)
                axios.post('/api/contact/save', this.contact).then(response => (
                    this.flash('Your message has been sent', 'success')

                )).catch(error => (this.flash(error, 'error'))).finally(() => (this.loading = false, NProgress.done()))

            },
        },

    }
</script>
<style scoped></style>
