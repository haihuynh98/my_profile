<template>
    <div class=content>
        <div class="title-section">
            <h1>About <span>Me</span></h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto asperiores at consequatur deserunt dolorem dolores ducimus earum error illo
                   iure, labore laboriosam maiores minus modi molestias nisi officia perspiciatis porro quae quas quo quod sunt ut vel voluptatem voluptatibus. Alias aperiam atque
                   blanditiis consectetur cupiditate dolorum eaque fuga impedit incidunt inventore ipsa ipsum labore magni maiores minima nam nesciunt odio pariatur perspiciatis
                   provident quo sapiente similique, totam, veniam vitae! Aperiam asperiores beatae deleniti distinctio dolores eligendi enim ex incidunt iusto labore minus
                   mollitia, nihil numquam officia pariatur quis rem, repudiandae, tempora veniam veritatis. Accusantium distinctio doloribus natus numquam voluptatibus?</p>
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
                            <input type="text" class="form-control" id="i_name" v-model="dataInfo.i_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" id="i_position" v-model="dataInfo.i_position">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" class="form-control" v-model="dataInfo.i_age">
                </div>
                <div class="form-group">
                    <label>Nationality </label>
                    <input type="text" class="form-control" v-model="dataInfo.i_nationality">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" v-model="dataInfo.i_address">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" v-model="dataInfo.i_city">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" v-model="dataInfo.i_email">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" v-model="dataInfo.i_phone">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam beatae blanditiis debitis id itaque natus nemo neque provident reprehenderit.</p>
                </div>
                <div class="col-md-6 item">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam beatae blanditiis debitis id itaque natus nemo neque provident reprehenderit.</p>
                </div>
                <div class="col-md-6 item">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam beatae blanditiis debitis id itaque natus nemo neque provident reprehenderit.</p>
                </div>
                <div class="col-md-6 item">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam beatae blanditiis debitis id itaque natus nemo neque provident reprehenderit.</p>
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
        },
        methods: {
            updateInfo() {
                axios.post(`/api/info/update`, this.dataInfo).then((response) => {
                    this.flash('Your changes have been saved', 'success')
                    $('h1#i_name').text($('input#i_name').val())
                    $('p#i_position').text($('input#i_position').val())
                }).catch(error => (this.flash(error, 'error'))).finally(() => (this.loading = false))
            },
        },
    }
</script>
<style scoped></style>
