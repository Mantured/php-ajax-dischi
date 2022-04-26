const app = new Vue({
  el: "#app",
  data: {
    characters: [],
    filteredCharacters: [],
    species: [],
    selectedSpecies: "",
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/server/controller/characters.php")
      .then((result) => {
        this.characters = result.data.results;
        console.log(this.characters);
      })
      .catch((error) => {
        console.warn(error);
      });

    axios
      .get("http://localhost/php-ajax-dischi/server/controller/species.php")
      .then((result) => {
        this.species = result.data;
        console.log(result);
        console.log(this.characters);
      })
      .catch((error) => {
        console.warn(error);
      });
  },
  methods: {
    filterCharactersBySpecies() {
      console.warn("filtered!");
      console.log(typeof this.species);
      if (this.selectedSpecies == "all") {
        this.filteredCharacters = this.characters;
      } else {
        this.filteredCharacters = this.characters.filter(
          (kind) =>
            kind.species.toLowerCase() == this.selectedSpecies.toLowerCase()
        );
      }
    },
  },
});
