<template>
    <div id="wapper">
        <flash-message class="flash-wrapper"></flash-message>
        <div class="page-content">
            <header class="page-header">
                <div class="avatar">
                    <img src="/images/avatar.jpg" alt="">
                </div>
                <div class="name" id="infoLayout">
                    <h1>{{ info.i_name }}</h1>
                    <p>{{ info.i_position }}</p>
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
                        <router-view></router-view>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</template><!--<template>--><!--    <div class="container">--><!--        <div class="text-center" style="margin: 20px 0px 20px 0px;"><a href="https://www.mynotepaper.com/" target="_blank"><img src="https://i.imgur.com/hHZjfUq.png"></a><br> <span--><!--            class="text-secondary">Laravel & Vue CRUD Single Page Application (SPA) Tutorial</span></div>--><!--        <nav class="navbar navbar-expand-lg navbar-light bg-light">--><!--            <div class="collapse navbar-collapse">--><!--                <div class="navbar-nav">--><!--                    <router-link to="/" class="nav-item nav-link">Home</router-link>--><!--                    <router-link to="/add" class="nav-item nav-link">Add Book</router-link>--><!--                    <router-link to="/about" class="nav-item nav-link">About</router-link>--><!--                </div>--><!--            </div>--><!--        </nav>--><!--        <br/>--><!--        <router-view></router-view>--><!--    </div>--><!--</template>-->
<script>

    export default {
        name: 'App',
        data() {
            return {
                info: {},
            }
        },
        created() {
            axios.get('/api/info/index').then(response => {
                this.info = response.data

            })
        },
    }
</script>
<style scoped></style>
