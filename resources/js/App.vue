<template>
    <div id="wapper">
        <flash-message class="flash-wrapper"></flash-message>
        <div class="page-content">
            <header class="page-header">
                <div class="avatar">
                    <img src="/images/avatar.jpg" alt="">
                </div>
                <div class="name">
                    <h1>{{ infoLayout.i_name }}</h1>
                    <p>{{ infoLayout.i_position }}</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                    </ul>
                </div>
                <div class="button">
                    <a href="#" class="btn btn-download">download cv</a>
                </div>
            </header>
            <div class="layer-1">
                <div class="left-menu">
                    <ul>
                        <li>
                            <router-link to="/"><span class="title-menu">About Me</span><i class="fas fa-address-card"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/knowledge"><span class="title-menu">Knowledge</span><i class="fas fa-graduation-cap"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/portfolio"><span class="title-menu">Portfolio</span><i class="fas fa-atom"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/work-experience"><span class="title-menu">Work Experience</span><i class="fas fa-briefcase"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/contact"><span class="title-menu">Contact</span><i class="fas fa-envelope"></i></router-link>
                        </li>
                    </ul>
                </div>
                <div class="layer-2" id="content">
                    <figure>
                        <router-view v-bind:dataInfo="info" v-bind:dataLayout="infoLayout"></router-view>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'App',
        data() {
            return {
                info: {},
                infoLayout: {},
            }
        },
        created() {
            axios.get('/api/info/index').then(response => {
                this.getInfoLayout(response.data)
                this.info = response.data
            })

        },
        methods: {
        getInfoLayout(data) {
                // console.log(data)
                this.infoLayout = {
                    i_name: data.i_name,
                    i_position: data.i_position,
                }
            },
        },
        computed:{
            // getInfoLayout(data) {
            //     // console.log(data)
            //     this.infoLayout = {
            //         i_name: data.i_name,
            //         i_position: data.i_position,
            //     }
            // },
        }
    }
</script>
<style scoped></style>
