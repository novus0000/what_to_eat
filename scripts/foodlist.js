const fakeApiResponse = [
  ["number", "name", "q-ty"],
  ["1.", "soda", "2"],
  ["2.", "beer", "3"],
  ["3", "pizza", "3"]
];

// this function is used to ask food to server and take a data with json
function showFoodList() {
  // Emulate api call to get data
  fetch("http://gyrjs07.dothome.co.kr/what_to_eat/foodlist.php")
  .then(function(response) {
      return response.json();
  })
  .then(function(myJson) {
      creatTable(myJson);
  });
}

function creatTable(data) {
  // Get mountig node from HTML
  const mountingPoind = document.getElementById("food-list");

  // Create Table element and set some attributes
  const table = document.createElement("table");
  table.setAttribute("width", "80%");
  table.setAttribute("border", "1");
  table.setAttribute("style", "margin: auto; text-align: center");

  // Start iterate over data to create table structure
  for (let i = 0; i < data.length; i++) {
    createTableRow(table, data[i]);
  }

  // Append table structure to mounting point
  mountingPoind.appendChild(table);
}

// Creates row. Add text call createCell function to generate cells with data
// and append it to parent
function createTableRow(parent, rowData) {
  const row = document.createElement("tr");
  for (let j = 0; j < rowData.length; j++) {
    createCell(row, rowData[j]);
  }
  parent.appendChild(row);
}

// Creates cell. Add text data to it and append it to parent
function createCell(parent, cellData) {
  const cell = document.createElement("td");
  cell.innerText = cellData;
  parent.appendChild(cell);
}

showFoodList();