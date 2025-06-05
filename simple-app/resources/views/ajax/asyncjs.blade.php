@extends('components.template')

@section('title', 'Exchange Page')

@section('content')

  <h1>Javascript Async</h1>

  <form id="registerForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="job">Job:</label>
    <input type="text" id="job" name="job"><br><br>

    <button type="submit">Register</button>
  </form>

  <h1>Users List</h1>

  <button id="getUsers">Get Users</button>

  <br><br>

  <div id="usersList"></div>


  <script>
    document.getElementById("registerForm").addEventListener("submit", register);
    document.getElementById("getUsers").addEventListener("click", getUsers);

    function register(e) {
      e.preventDefault();
      const name = document.getElementById("name").value;
      const job = document.getElementById("job").value;

      try {
        fetch("https://reqres.in/api/users", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              "Accept": "application/json",
              "x-api-key": "reqres-free-v1"
            },
            body: JSON.stringify({
              name,
              job,
            })
          })
          .then(
            response => response.json().then(data => console.log(data))
          )
          .catch(error => console.error("Error fetching data:", error));

      } catch (error) {
        console.error("Error parsing JSON:", error);
      }
    }

    function getUsers() {
      try {
        fetch("https://reqres.in/api/users?page=1", {
            method: "GET",
            headers: {
              "Accept": "application/json",
              "x-api-key": "reqres-free-v1"
            }
          })
          .then(response => response.json())
          .then(data => {
            const users = data.data;
            console.log(users);
            const usersList = document.getElementById("usersList");
            usersList.innerHTML = "";

            const userCards = users.map(user => {
              return `
                    <div style="
                        border: 1px solid #ccc;
                        padding: 10px;
                        margin-bottom: 10px;
                        display: flex;
                        align-items: center;
                        gap: 10px;">
                        <img src="${user.avatar}" alt="${user.first_name}" width="50" height="50" style="border-radius: 50%;">
                        <div>
                            <b>${user.first_name} ${user.last_name}</b><br>
                            <span>${user.email}</span>
                        </div>
                    </div>
                    `;
            });
            usersList.innerHTML = userCards.join("");
          })
          .catch(error => console.error("Error fetching data:", error));
      } catch (error) {
        console.error("Error parsing JSON:", error);
      }
    }
  </script>
@endsection
