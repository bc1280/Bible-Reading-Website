/**
 * Created by bchang1991 on 8/27/16.
 */
function searchKey() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 1; i < 2; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
    for (i = 3; i < 30; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
    for (i = 1; i < 2; i++) {
        if (li[i].style.display == "") {
            li[0].style.display = "";
            break;
        } else {
            li[0].style.display = "none";
        }
    }
    for (i = 3; i < 30; i++) {
        if (li[i].style.display == "") {
            li[2].style.display = "";
            break;
        } else {
            li[2].style.display = "none";
        }
    }
}