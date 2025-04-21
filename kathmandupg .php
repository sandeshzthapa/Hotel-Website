  <!DOCTYPE html>
  <html>
  <head>
    <title>Rooms</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #acb6f0;
  }     

  h1 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
  }
  .book-form {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }
    
    .form-item {
      display: flex;
      align-items: center;
      gap: 5px;
    }
    
    .form-item label {
      font-weight: bold;
    }
    
    .form-item input[type="date"],
    .form-item input[type="number"] {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-item .btn {
      padding: 8px 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .form-item .btn:hover {
      background-color: #0056b3;
    }

  .room-card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .room-card h2 {
    color: #555;
    font-size: 20px;
    margin-top: 0;
  }

  .room-card p {
    margin: 10px 0;
  }

  .room-card .rating {
    color: #f8b400;
    font-weight: bold;
  }

  .room-card .room-photo {
    width: 200px;
    margin-right: 20px;
    position: relative;
    overflow: hidden;
    border-radius: 5px;
  }

  .room-card .room-photo:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .room-card .room-photo:hover:before {
    opacity: 1;
  }

  .room-card .room-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .room-card .room-photo:hover img {
    transform: scale(1.05);
  }

  .room-card .room-details {
    flex: 1;
  }
  .room-card .room-price {
      font-weight: bold;
      font-size: 18px;
    }
  .room-card input[type="date"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  .room-card button {
    padding: 8px 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .room-card button:hover {
    background-color: #0056b3;
  }

  .hotel-description {
  flex: 3;
  margin-left: 0;
}

  .room-card .room-details h2,
  .room-card .room-details p {
    margin-bottom: 5px;
  }

  .room-card .room-details p span {
    font-weight: bold;
  }

  .room-card:nth-child(even) {
    background-color: #f9f9f9;
  }

  .room-card:nth-child(even) .room-photo img {
    transform: rotate(2deg);
  }

  .room-card:nth-child(odd) .room-photo img {
    transform: rotate(-2deg);
  }

  .room-card:nth-child(odd) button {
    background-color: #ff5a5f;
  }

  .room-card:nth-child(odd) button:hover {
    background-color: #e60000;
  }
  .map-container {
              width: 150px;
              height: 100px;
              cursor: pointer;
              border: 1px solid #ccc;
          }
 
  @media (max-width: 768px) {
    .room-card {
      flex-direction: column;
      align-items: center;
    }
    
    .room-card .room-photo {
      margin-bottom: 20px;
    }
    
    .room-card .room-details {
      text-align: center;
    }
  }
    </style>
  </head>
  <body>
    <div id="calendar-popup" style="display: none; position: absolute; background-color: #fff; padding: 10px;">
      <label for="checkin-date-popup">Check In Date: </label>
      <input type="date" id="checkin-date-popup" style="margin-right: 10px;">
      <label for="checkout-date-popup">Check Out Date: </label>
      <input type="date" id="checkout-date-popup" style="margin-right: 10px;">
      <button onclick="selectDatesFromPopup()">Select</button>
    </div>
    

    <h1>Kathmandu: 6 properties found </h1>
    <div class = "book">
      
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.3;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="date"],
        select {
            width: 20%;
            padding: 5%;
            margin-bottom: 9%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 50%;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>


<body>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <style>
          body {
              font-family: Arial, sans-serif;
              line-height: 1.6;
          }
  
          label {
              display: block;
              margin-bottom: 8px;
          }
  
          input[type="date"],
          select {
              width: 40%;
              padding: 5px;
              margin-bottom: 16px;
              border: 1px solid #ccc;
              border-radius: 4px;
          }
  
          select {
              width: 50%;
          }
  
          button {
              padding: 5px 20px;
              background-color: #4CAF50;
              color: white;
              border: none;
              border-radius: 4px;
              cursor: pointer;
          }
  
          button:hover {
              background-color: #45a049;
          }
      </style>
  </head>
  <body>
     
      <form>
          <label for="check-in-date">Check-in Date:</label>
          <input type="date" id="check-in-date" required>
  
          <label for="check-out-date">Check-out Date:</label>
          <input type="date" id="check-out-date" required>
  
          <label for="adults">Number of Adults:</label>
          <select id="adults" required>
              <option value="">Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>

              
          </select>
  
          <label for="children">Number of Children:</label>
          <select id="children" required>
              <option value="">Select</option>
              <option value="0">None</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              
          </select>
  
          <button type="submit">Submit</button>
      </form>
  </body>
  </html>
  


    <div class="room-card">
      <div class="room-photo">    
        
        <img decoding="async" src="img1.jpg" alt="" id="btnJampa">
      </div>
      <div class="room-details">
        <h2>Hotel Jampa</h2>
        <p>Location: <span id="location1">Hotel location 1</span></p>
        <p>Click <span id="mapLink" class="map-container">here </span> to show in map</p>
        <!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0329348904415!2d85.30817287444444!3d27.716269376177447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcd6f65055%3A0x511746f730ab68ec!2sHotel%20Jampa!5e0!3m2!1sen!2snp!4v1686412998813!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
        <p>Rating: <span class="rating">4.5</span></p>
      
        <!--<p>Check-in: <input type="date" id="check-in-date1"></p>
        <p>Check-out: <input type="date" id="check-out-date1"></p>-->
  
          <button id="showprice">Show Prices</button>
          <!-- <button id="showprice" onclick="checkAvailability(2)">Show Prices</button> -->
          
      </div>
      <div class="hotel-description">
        <p>Hotel Jampa is set in Thamel and provides air-conditioned<br> rooms with free WiFi.The property is 2.9 km from Kathmandu Durbar <br> Square and 3.1 km from Swayambhunath Temple.</p>
      </div>    
    </div>


    <div class="room-card">
      <div class="room-photo">
        <img src="img2.jpg" alt="Room Photo 2">
      </div>
      <div class="room-details">
        <h2>Hotel Bontique</h2>
        <p>Location: <span id="location2">Hotel Location 2</span></p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14128.921008500778!2d85.28948595082139!3d27.710176276570643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fbf85b5015%3A0x67b5d6aa5fd77def!2sKathmandu%20Boutique%20Hotel!5e0!3m2!1sen!2snp!4v1686413487474!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <p>Rating: <span class="rating">4.0</span></p>
        
        <!--<p>Check-in: <input type="date" id="check-in-date2"></p>
        <p>Check-out: <input type="date" id="check-out-date2"></p>-->
        <button onclick="checkAvailability(2)">Show Prices</button>
      </div>
    </div>

    <div class="room-card">
      <div class="room-photo">
        <img src="img3.jpg" alt="Room Photo 3">
      </div>
      <div class="room-details">
        <h2>Agantuk Hotel</h2>
        <p>Location: <span id="location3">Hotel Location 3</span></p>
        <p>Rating: <span class="rating">4.8</span></p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9948599916556!2d85.30857657444447!3d27.717444976176782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19dc0e696de9%3A0xa0f52874f50a7be0!2sKathmandu%20Aagantuk%20Hotel!5e0!3m2!1sen!2snp!4v1686413720901!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        
        <!--<p>Check-in: <input type="date" id="check-in-date3"></p>
        <p>Check-out: <input type="date" id="check-out-date3"></p>-->

        <button onclick="checkAvailability(3)">Show Prices</button>
      </div>
    </div>

    <div class="room-card">
      <div class="room-photo">
        <img src="img4.jpg" alt="Room Photo 4">
      </div>
      <div class="room-details">
        <h2>Thamel Bontique Hotel</h2>
        <p>Location: <span id="location4">Hotel Location 4</span></p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.024715035605!2d85.30803697444446!3d27.716523176177283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcd6ef394f%3A0xf05d1f8b1b0d4bc5!2sThamel%20Boutique%20Hotel!5e0!3m2!1sen!2snp!4v1686413945678!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <p>Rating: <span class="rating">4.2</span></p>
        
        <!--<p>Check-in: <input type="date" id="check-in-date4"></p>
        <p>Check-out: <input type="date" id="check-out-date4"></p>-->
        <button onclick="checkAvailability(4)">Show Prices</button>
      </div>
    </div>
    <div class="room-card">
      <div class="room-photo">
        <img src="img5.jpg" alt="Room Photo 5">
      </div>
      <div class="room-details">
        <h2>Swornim Boutique Hotel Kathmandu</h2>
        <p>Location: <span id="location3">Hotel Location 5</span></p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0044209600856!2d85.32797537444445!3d27.71714977617697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190d8ca0aaa5%3A0x9b6911a2cc05d01c!2sSwornim%20Boutique%20Hotel%20Kathmandu%20(P)%20Ltd.!5e0!3m2!1sen!2snp!4v1686413984694!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <p>Rating: <span class="rating">4.8</span></p>
        
        <!--<p>Check-in: <input type="date" id="check-in-date3"></p>
        <p>Check-out: <input type="date" id="check-out-date3"></p>-->
        <button onclick="checkAvailability(5)">Show Prices</button>
      </div>
    </div>
    <div class="room-card">
      <div class="room-photo">
        <img src="img6.jpg" alt="Room Photo 6">
      </div>
      <div class="room-details">
        <h2>Capital Boutique Hotel</h2>
        <p>Location: <span id="location3">Hotel Location 6</span></p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1765606469635!2d85.31029467444422!3d27.711834376179933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197467e8fb35%3A0x1d067ebd57b4e93a!2sCapital%20Boutique%20Hotel!5e0!3m2!1sen!2snp!4v1686414018928!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <p>Rating: <span class="rating">4.8</span></p>
        
        <!--<p>Check-in: <input type="date" id="check-in-date3"></p>
        <p>Check-out: <input type="date" id="check-out-date3"></p>-->
        <button onclick="checkAvailability(6)">Show Prices</button>
      </div>
    </div>



    <div class="modal" tabindex="-1" role="dialog" id="myModal" style="height: 500px;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Check Availability</h5>




            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="width: 500px;">

            <form>

              <!-- <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name"> -->



                <label for="checkin-date-popup">Check In Date: </label>
                <input type="date" id="checkin-date-popup" style="margin-right: 10px;">
                <label for="checkout-date-popup">Check Out Date: </label>
                <input type="date" id="checkout-date-popup" style="margin-right: 10px;">
                <button onclick="selectDatesFromPopup()">Select</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

                <br>
                <br>

                <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
  
           


          
          </div>
        
        </form>
        </div>
      </div>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
  <script>
        var mapLink = document.getElementById('mapLink');
          var isMapOpen = false;
      function calculateNights(checkInDate, checkOutDate) {
    const oneDay = 24 * 60 * 60 * 1000; // One day in milliseconds
    const startDate = new Date(checkInDate);
    const endDate = new Date(checkOutDate);
    const nightCount = Math.round(Math.abs((startDate - endDate) / oneDay));
    return nightCount;
  }

  function checkAvailability(roomId) {
      const checkinDate = document.getElementById("checkin-date").value;
      const checkoutDate = document.getElementById("checkout-date").value;
      

         
      if (!checkinDate || !checkoutDate) {
        alert('Please select check-in and check-out dates.');
        return;
      } 
  }
  function validateForm() {
      var checkinDate = document.getElementById("checkin-date").value;
      var checkoutDate = document.getElementById("checkout-date").value;

      if (checkinDate === "" || checkoutDate === "") {
        alert("Please select check-in and check-out dates.");
        return false;
      }

      return true;
    }
 
  document.getElementById('mapLink').addEventListener('click', function() {
              if (!isMapOpen) {
              var iframe = document.createElement('iframe');
              iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0329348904415!2d85.30817287444444!3d27.716269376177447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcd6f65055%3A0x511746f730ab68ec!2sHotel%20Jampa!5e0!3m2!1sen!2snp!4v1686412998813!5m2!1sen!2snp";
              iframe.width = "150";
              iframe.height = "100";
              iframe.style.border = "0";
              iframe.allowfullscreen = true;
              iframe.loading = "lazy";
              iframe.referrerpolicy = "no-referrer-when-downgrade";

              mapLink.innerHTML = '';
              mapLink.appendChild(iframe);
              //var mapContainer = document.getElementById('mapLink');
              //mapContainer.innerHTML = '';
              //mapContainer.appendChild(iframe);
              isMapOpen = true;
              }         

            });          
  document.addEventListener('click', function(event) {
              if (event.target !== mapLink && isMapOpen) {
                  mapLink.innerHTML = 'here';
                  isMapOpen = false;
              }
          });
          function checkAvailability(hotelId) {
  // Show the calendar popup
  var popup = document.getElementById("calendar-popup");
  popup.style.display = "block";

  // Get the check-in and check-out date inputs from the popup
  var checkinDateInput = document.getElementById("checkin-date-popup");
  var checkoutDateInput = document.getElementById("checkout-date-popup");

  // Set the selected dates from the main form to the popup inputs
  var checkinDateMainForm = document.getElementById("checkin-date");
  var checkoutDateMainForm = document.getElementById("checkout-date");
  checkinDateInput.value = checkinDateMainForm.value;
  checkoutDateInput.value = checkoutDateMainForm.value;
}
function selectDatesFromPopup() {
  // Get the selected dates from the popup inputs
  var checkinDateInput = document.getElementById("checkin-date-popup");
  var checkoutDateInput = document.getElementById("checkout-date-popup");

  // Set the selected dates to the main form inputs
  var checkinDateMainForm = document.getElementById("checkin-date");
  var checkoutDateMainForm = document.getElementById("checkout-date");
  checkinDateMainForm.value = checkinDateInput.value;
  checkoutDateMainForm.value = checkoutDateInput.value;

  // Hide the calendar popup
  var popup = document.getElementById("calendar-popup");
  popup.style.display = "none";
}


$('#showprice').on('click',function(){



  $('#myModal').modal('show');

});


$('#btnSave').on('click',function(){

debugger

  window.location.href = "http://127.0.0.1:5500/avaiability.html";

});
    </script>
  

  <script>

    $('#btnJampa').on('click',function(){
        window.location.href = "http://127.0.0.1:5500/avaiability.html";
    })
    
    </script>
    </body>
    </html>