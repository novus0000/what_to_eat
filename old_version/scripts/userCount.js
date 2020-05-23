// this function is used to ask food to server and take a data with json
  function callUserCount() {
    fetch("http://gyrjs07.dothome.co.kr/what_to_eat/return_user_count.php")
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
      showUserCount(myJson);
  });
  }
  
  function showUserCount(data) {
      
    // Get mountig node from HTML
    const mountingPoind = document.getElementById("user-count");
  
    mountingPoind.innerHTML = "이용자 수 : "  + data[0];
  }
  

  callUserCount();