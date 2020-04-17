
function goToNextPage(link, paraAdd){
    var para = document.location.search;
    location.href = link + para +"&" + paraAdd;
}
