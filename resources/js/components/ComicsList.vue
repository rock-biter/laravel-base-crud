<template>
  <div class="container">
    <div class="row">
      <div v-for="comic in comicList" :key="comic.id" class="card col-3" style="width: 18rem;">
        <img :src="comic.url" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{comic.title}}</h5>
            <p class="card-text">{{comic.dauthor}}</p>
            <p class="card-text">{{comic.category ? comic.category.name : ''}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'ComicsList',
    data(){
      return{
        comicList: [],
        baseUri: '/api/comics'
      }
    },
    methods: {
      getComicsList(){

        axios.get(`${this.baseUri}`)

          .then(response => {
            this.comicList = [...this.comicList,...response.data.comics];
            console.log(response);
          })
          .catch(function (error) {
            // handle error
            console.log(error);
          })
          .then(function () {
            // always executed
          });
      }
    },
    created(){
      this.getComicsList()
    }
}
</script>

<style>

</style>