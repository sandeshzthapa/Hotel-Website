<!DOCTYPE html>
<html>
<head>
  <title>Hotel Availability</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1, h2, h3 {
      color: #131111;  
    } 

    .container {
      display: flex;
    }

    .left-section {
      flex: 1;
    }

    .right-section {
      flex: 2;
    }

    .room-type {
      display: flex;
      justify-content: space-between; /* Align items horizontally */
      align-items: center; 
      margin-bottom: 10px;
      padding: 10px;
      background-color: #ebe8e8;
      border-radius: 5px;
    }

    .room-type h3 {
      margin: 0;
      font-size: 18px;
    }

    .room-type p {
      margin: 0;
      margin-left: 10px;
    }
      
    .room-type .bed-description {
      margin-top: 5px;
      color: #444640;
      font-size: 14px;
    } 
    .room-type button {
      padding: 5px 10px;
      background-color: #491bed;
      color: rgb(242, 169, 207);
      border: none;
      cursor: pointer;
    }
   
    .book {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .book-form {
    display: flex;
    flex-wrap: wrap;
  }

  .form-item {
    margin-right: 10px;
    margin-bottom: 10px;
  }

  .form-item label {
    margin-right: 5px;
  }

  .btn {
    padding: 5px 10px;
    background-color: #7149c2;
    color: rgb(218, 193, 210);
    border: none;
    cursor: pointer;
  }
  </style>
</head>
<body>
  <h1>Hotel Availability</h1>

  <div class = "book">
    <form class = "book-form">
        <div class = "form-item">
            <label for = "checkin-date">Check In Date: </label>
            <input type = "date" id = "checkin-date">
        </div>
        <div class = "form-item">
            <label for = "checkout-date">Check Out Date: </label>
            <input type = "date" id = "checkout-date">
        </div>
        <div class = "form-item">
            <label for = "adult">Adults: </label>
            <input type = "number" min = "1" value = "1" id = "adult">
        </div>
        <div class = "form-item">
            <label for = "children">Children: </label>
            <input type = "number" min = "1" value = "1" id = "children">
        </div>
        <div class = "form-item">
            <label for = "rooms">Rooms: </label>
            <input type = "number" min = "1" value = "1" id = "rooms">
        </div>
        <div class = "form-item">
            <input type = "submit" class = "btn" value = "Book Now">
        </div>
    </form>
</div>
    <div class="right-section">
      <h2>Room Types</h2>
      <div class="room-type">
        <div>
        <h3><a href="room-info.html?roomType=Deluxe Double Room">Deluxe Double Room</a></h3>
        <p class="bed-description">1 large double bed</p>
        </div>
        <button onclick="showPrices('Deluxe Double Room')">Show Prices</button>
      </div>

      <div class="room-type">
        <div>
        <h3><a href="room-info.html?roomType=King Room">King Room</a></h3>
        <p class="bed-description">1 extra-large double bed</p>
        </div>
        <button onclick="showPrices('King Room')">Show Prices</button>
      </div>

      <div class="room-type">
        <div>
        <h3><a href="room-info.html?roomType=Deluxe Twin Room">Deluxe Twin Room</a></h3>
        <p class="bed-description">2 single beds</p>
        </div>
        <button onclick="showPrices('Deluxe Twin Room')">Show Prices</button>
      </div>

      <div class="room-type">
        <div>
        <h3><a href="room-info.html?roomType=Deluxe Suite">Deluxe Suite</a></h3>
        <p class="bed-description">1 extra-large double bed</p>
        </div>
        <button onclick="showPrices('Deluxe Suite')">Show Prices</button>
      </div>

      <div class="room-type">
        <div>
        <h3><a href="room-info.html?roomType=Deluxe Triple Room">Deluxe Triple Room</a></h3>
        <p class="bed-description">1 single bed and 1 large double bed</p>
        </div>
        <button onclick="showPrices('Deluxe Triple Room')">Show Prices</button>
      </div>
    </div>

    <script>
      function showPrices(roomType) {
        var checkinDate = document.getElementById("checkin-date").value;
      var checkoutDate = document.getElementById("checkout-date").value;

      if (!checkinDate || !checkoutDate) {
        alert("Please fill in the check-in and check-out dates.");
        return;
      }

        // Replace this function with your logic to handle showing prices for the selected room type
        alert("Showing prices for " + roomType);
      }
    </script>
  </body>
  </html>

  