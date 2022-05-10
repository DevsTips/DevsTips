const vue = new Vue({
  data: () => {
    return { 
      inputType: "",
      searchKey: "",  
    };
  },
  computed: {
    search() {
      return this.codes.filter((code) => {
         
      });
    },
  },
  methods: {
    getImgUrl(pic) {
      return "assets/uploads/" + pic;
    },
    searchInput(arg) {
      this.inputType = arg;
    },
    removeItem(id) {
      this.$delete(this.codes, id);
    },
    cancelSearch() {
      this.searchKey = ""; 
    },
  },
  mounted() {
    axios
      .get("libraries/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => {
        this.codes = res;
      })
      .then(() => {
        for (let i = 0; i <= this.codees.length; i++) { 
        }
      });

    setTimeout(() => {
 
      for (let i = 0; i < arr.length; i++) {
       
      }
    }, 500);
  },
}).$mount("#vue-app");