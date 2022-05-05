//get data from mySql
const list = new XMLHttpRequest();
list.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        data = JSON.parse(this.responseText);
        console.log(data)
    }
};
list.open("GET", "libraires/controllers/getData.php", true)