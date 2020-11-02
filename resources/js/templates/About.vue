<template>
    <div class=content>
        <div class="title-section">
            <h1>About <span>Me</span></h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>My name is <strong>Hai Huynh</strong>. I was born and raised in a small rural area in Binh Thuan province Vietnam. I get to know and interact with computers very
                   early
                   and I
                   love to do everything on it, i spent four years in college at the school in Ho Chi Minh City. During that time, I learned and studied about programming
                   thinking. After graduation, I worked as a freelancer and worked for a software development company, my main work is web design and application development.
                    <br>
                   My favorite saying that I have read: <strong>" Everything you can imagine is real " - Pablo Picasso</strong></p>
            </div>
            <div class="col-md-4">
                <ul class="personal-info">
                    <li><span>Age</span><span>{{dataInfo['i_age']}}</span></li>
                    <li><span>Nationality </span><span>{{dataInfo['i_nationality']}}</span></li>
                    <li><span>Address</span><span>{{dataInfo['i_address']}}</span></li>
                    <li><span>City</span><span>{{dataInfo['i_city']}}</span></li>
                    <li><span>E-mail</span><span>{{dataInfo['i_email']}}</span></li>
                    <li><span>Phone</span><span>{{dataInfo['i_phone']}}</span></li>
                </ul>
            </div>
        </div>
        <div class="my-4">
            <div class="title">
                <h2>info <span>Editor</span></h2>
            </div>
            <!--            <button type="submit" class="btn btn-primary" v-on:click="updateInfo">Update Info</button>-->
            <form @submit.prevent="updateInfo">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="i_name" v-model="info.i_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" id="i_position" v-model="info.i_position">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" v-model="info.i_age">
                </div>
                <div class="form-group">
                    <label>Nationality </label>
                    <input type="text" class="form-control" v-model="info.i_nationality">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" v-model="info.i_address">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" v-model="info.i_city">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" v-model="info.i_email">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" v-model="info.i_phone" pre>
                </div>
                <button type="submit" class="btn btn-primary">Update Info</button>
            </form>
        </div>
        <div>
            <div class="title">
                <h2>What <span>I Do</span></h2>
            </div>
            <div class="row ido-container">
                <div class="col-md-6 item">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Web Design</h4>
                    <p>I have over 2 years of experience using <b>PHP</b> language and in parallel I have used <b>Laravel</b> for web development.
                       Also, I research and do some projects using <b>Wordpress</b>, <b>Vuejs</b>. And in particular, my webside is using <b>Vuejs</b> (SPA - Single Page
                       Application).</p>
                </div>
                <div class="col-md-6 item">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>Mobile Application</h4>
                    <p>Mobile application is an industry that I really like, I have 1 year of experience in mobile application development. I have been using the <b>Dart (Flutter)</b>
                       language to program a mobile application project recently.</p>
                </div>
                <div class="col-md-6 item">
                    <i class="fas fa-pencil-ruler"></i>
                    <h4>Graphic Design</h4>
                    <p>Graphic design is a subject I like and I teach myself. I had experience from a skills competition and I won 3rd place in that competition. This helps me to
                       have a better mindset in website design.</p>
                </div>
                <div class="col-md-6 item">
                    <i class="fas fa-bezier-curve"></i>
                    <h4>Project Management</h4>
                    <p>I have managed quite a few personal projects and projects for clients. I can confidently manage the work needed to create a quality product.</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'About',
        props: {
            dataInfo: Object,
            dataLayout: Object,
        },
        data() {
            return {
                info: {},
            }
        },
        methods: {
            getPropData() {
                this.info = this.dataInfo
            },
            updateInfo() {
                // this.$emit('updateInfo',this.info)
                axios.post(`/api/info/update`, this.info).then((response) => {
                    let style = 'error'
                    let result = response.data
                    if (result.datas) {
                        let data = result.datas
                        this.dataLayout.i_name = data.i_name
                        this.dataLayout.i_position = data.i_position
                        style = 'success'
                    }
                    this.flash(result.mess, style)
                }).catch(error => (this.flash(error, 'error'))).finally(() => (this.loading = false))
            },
        },
        created() {
            this.getPropData()
        },
        updated() {
            this.getPropData()
        },
    }
</script>
<style scoped></style>


