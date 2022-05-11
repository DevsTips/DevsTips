/* eslint-disable no-undef */
/* eslint-disable no-empty */
// eslint-disable-next-line no-undef
// eslint-disable-next-line no-unused-vars
const vue = new Vue({
  data: () => {
    return { 
      inputType: "",
      searchKey: "",  
    };
  },
  computed: {
    search() {
      // eslint-disable-next-line no-unused-vars
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