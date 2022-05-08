// ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombolCari');
var container = document.getElementById('container');

// tambahkan even ketika keyword diketik
keyword.addEventListener("keyup", function() {
    // buat object ajax
    var ajax = new XMLHttpRequest();
    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            container.innerHTML = ajax.responseText;
        }
    }
    
    // eksekusi ajax
    ajax.open('GET', 'ajax/index.php?keyword=' + keyword.value, true);
    ajax.send()
});