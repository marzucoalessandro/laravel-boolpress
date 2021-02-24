<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="post in posts">
                    <div class="card-header">Title: {{ post.title}}</div>

                    <div class="card-body">
                        Text: {{ post.body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
          posts: ""
          }
        },

        mounted() {
            axios.get('api/posts').then(response => {
              console.log(response.data.data);
              this.posts = response.data.data;
            }).catch(error => {
            console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
.card{
margin: 20px 0;
border: 2px solid black;
}
</style>
