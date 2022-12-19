// async function fetchText() {
//     let response = await fetch('http://103.30.1.54:900/api/get/ssensor');

//     console.log(response.status); // 200
//     console.log(response.statusText); // OK

//     if (response.status === 200) {
//         let data = await response.text();
//         // handle data
//     }
// }

// fetchText();

// async function getData() {
//     let url = 'http://103.30.1.54:900/api/get/ssensor';
//     try {
//         let res = await fetch(url);
//         return await res.json();
//     } catch (error) {
//         console.log(error);
//     }
// }

// async function renderUsers() {
//     let table = await getData();
//     let html = '';
//     table.forEach(data => {
//         let htmlSegment = `
//         <tr>
//         <td>${data.id}</td>
//         <td>${data.id_iot} </td>
//         <td>${data.datakecepatanangin}</td>
//         <td>${data.datasuhuudara}</td>
//         <td>${data.alamat}</td>
//         <td>${data.kecepatanangin}</td>
//       </tr>`;
//         html += htmlSegment;
//     });

//     let tabel = document.querySelector('.tabel');
//     tabel.innerHTML = html;
// }

// renderUsers();

// main.js...

// 1. GET request using fetch()
fetch("http://103.30.1.54:900/api/get/ssensor")
  // Converting received data to JSON
  .then((response) => response.json())
  .then((json) => {
    
  // 2. Create a variable to store HTML table headers
    //let li = `<tr><th>ID</th><th>Name</th><th>User Name</th><th>Email</th> <th>Phone</th><th>Website</th></tr>`;
    let li = ''
    // 3. Loop through each data and add a table row
    let i = 1;
    
    json.slice(-7).forEach((user) => {
      li += `<tr align="left">
        <td>${i++}</td>
        <td>${user.id_iot}</td>
        <td>${user.alamat} </td>
        <td>${user.datakecepatanangin}</td>
        <td>${user.datasuhuudara}</td>
        <td>${user.datakelembabanudara}</td>
        <td>${user.dataphtanah}</td>
        <td>${user.datakelembabantanah}</td>
        <td>${user.datasuhutanah}</td>
        <td>${user.statusalat}</td>
        <td>${user.tanggal}</td>
      </tr>`;
    });

    // 4. DOM Display result
    document.getElementById("tabel").innerHTML = li;
  });

// main.js

// 5. POST request using fetch()
fetch("http://103.30.1.54:900/api/get/ssensor", {
  // 6. Adding method type
  method: "POST",

  // 7. Adding body or contents to send JSON Stringify
  body: JSON.stringify({
    title: "foo",
    body: "bar",
    userId: 1
  }),

  // 8. Adding headers to the request
  headers: {
    "Content-type": "application/json; charset=UTF-8"
  }
})
  // 9. Converting to JSON
  .then((response) => response.json())

  // 10. Displaying results to console
  .then((json) => console.log(json));

//   <script src="js/app.js"></script>