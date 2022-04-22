const app = new Vue({
  el: "#app",
  data: {
    characters: [],
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/server/controller.php")
      .then((result) => {
        this.characters = result.data.results;
        console.log(result);
        console.log(this.characters);
      })
      .catch((error) => {
        console.warn(error);
      });
  },
});
