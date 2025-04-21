<!DOCTYPE html>
<html>
<head>
  <title>Rooms</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background-color: #f2afe1;
}

h1 {
  color: #333;
  text-align: center;
  margin-bottom: 30px;
}

.room-card {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  display: flex;
  background-color: #f7faf8;
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
  <h1>Hawaii: 6 properties found </h1>

  <div class="room-card">
    <div class="room-photo">
      <img src="hawai1.jpg" alt="Room Photo 1">
    </div>
    <div class="room-details">
      <h2>Hotel Grand Holiday</h2>
      <p>Location: <span id="location1">Hotel location 1</span></p>
      <!--<p>Click <span id="mapLink" class="map-container">here </span> to show in map</p>-->
      <!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0329348904415!2d85.30817287444444!3d27.716269376177447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcd6f65055%3A0x511746f730ab68ec!2sHotel%20Jampa!5e0!3m2!1sen!2snp!4v1686412998813!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
      <p>Rating: <span class="rating">4.5</span></p>
      <p>Price: $100 per night</p>
      <p>Check-in: <input type="date" id="check-in-date1"></p>
      <p>Check-out: <input type="date" id="check-out-date1"></p>
      <a href="payment.html">
        <button>PAYMENT</button>
      </a>
    </div>
  </div>

  <div class="room-card">
    <div class="room-photo">
      <img src="hawai2.jpg" alt="Room Photo 2">
    </div>
    <div class="room-details">
      <h2>Hotel Iceland</h2>
      <p>Location: <span id="location2">Hotel Location 2</span></p>
      <!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14128.921008500778!2d85.28948595082139!3d27.710176276570643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fbf85b5015%3A0x67b5d6aa5fd77def!2sKathmandu%20Boutique%20Hotel!5e0!3m2!1sen!2snp!4v1686413487474!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
      <p>Rating: <span class="rating">4.0</span></p>
      <p>Price: $80 per night</p>
      <p>Check-in: <input type="date" id="check-in-date2"></p>
      <p>Check-out: <input type="date" id="check-out-date2"></p>
      <a href="payment.html">
        <button>PAYMENT</button>
      </a>
    </div>
  </div>

  <div class="room-card">
    <div class="room-photo">
      <img src="hawai3.jpg" alt="Room Photo 3">
    </div>
    <div class="room-details">
      <h2>Hotel Orchid</h2>
      <p>Location: <span id="location3">Hotel Location 3</span></p>
      <p>Rating: <span class="rating">4.8</span></p>
      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9948599916556!2d85.30857657444447!3d27.717444976176782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19dc0e696de9%3A0xa0f52874f50a7be0!2sKathmandu%20Aagantuk%20Hotel!5e0!3m2!1sen!2snp!4v1686413720901!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
      <p>Price: $120 per night</p>
      <p>Check-in: <input type="date" id="check-in-date3"></p>
      <p>Check-out: <input type="date" id="check-out-date3"></p>
      <a href="payment.html">
        <button>PAYMENT</button>
      </a>
    </div>
  </div>

  <div class="room-card">
    <div class="room-photo">
      <img src="hawai4.jpg" alt="Room Photo 4">
    </div>
    <div class="room-details">
      <h2>Hotel Portland</h2>
      <p>Location: <span id="location4">Hotel Location 4</span></p>
      <!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.024715035605!2d85.30803697444446!3d27.716523176177283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcd6ef394f%3A0xf05d1f8b1b0d4bc5!2sThamel%20Boutique%20Hotel!5e0!3m2!1sen!2snp!4v1686413945678!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
      <p>Rating: <span class="rating">4.2</span></p>
      <p>Price: $90 per night</p>
      <p>Check-in: <input type="date" id="check-in-date4"></p>
      <p>Check-out: <input type="date" id="check-out-date4"></p>
      <a href="payment.html">
        <button>PAYMENT</button>
      </a>
    </div>
  </div>
  <div class="room-card">
    <div class="room-photo">
      <img src="hawai5.jpg" alt="Room Photo 5">
    </div>
    <div class="room-details">
      <h2>Hotel Barahi</h2>
      <p>Location: <span id="location3">Hotel Location 5</span></p>
     <!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0044209600856!2d85.32797537444445!3d27.71714977617697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190d8ca0aaa5%3A0x9b6911a2cc05d01c!2sSwornim%20Boutique%20Hotel%20Kathmandu%20(P)%20Ltd.!5e0!3m2!1sen!2snp!4v1686413984694!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
      <p>Rating: <span class="rating">4.8</span></p>
      <p>Price: $120 per night</p>
      <p>Check-in: <input type="date" id="check-in-date3"></p>
      <p>Check-out: <input type="date" id="check-out-date3"></p>
      <a href="payment.html">
        <button>PAYMENT</button>
      </a>
    </div>
  </div>
  <div class="room-card">
    <div class="room-photo">
      <img src="hawai.jpg" alt="Room Photo 6">
    </div>
    <div class="room-details">
      <h2>Hotel Shaara</h2>
      <p>Location: <span id="location3">Hotel Location 6</span></p>
      <!--<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1765606469635!2d85.31029467444422!3d27.711834376179933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197467e8fb35%3A0x1d067ebd57b4e93a!2sCapital%20Boutique%20Hotel!5e0!3m2!1sen!2snp!4v1686414018928!5m2!1sen!2snp" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
      <p>Rating: <span class="rating">4.8</span></p>
      <p>Price: $120 per night</p>
      <p>Check-in: <input type="date" id="check-in-date3"></p>
      <p>Check-out: <input type="date" id="check-out-date3"></p>
      <a href="payment.html">
        <button>PAYMENT</button>
      </a>
    </div>
  </div>

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

// Helper function to calculate the total price based on the nightly rate and number of nights
function calculateTotalPrice(rate, nights) {
  return rate * nights;
}

function checkAvailability(roomNumber) {
  var checkInDate = document.getElementById('check-in-date' + roomNumber).value;
  var checkOutDate = document.getElementById('check-out-date' + roomNumber).value;

  if (checkInDate === "" || checkOutDate === "") {
    alert("Please select check-in and check-out dates.");
  } else {
    var nights = calculateNights(checkInDate, checkOutDate);
    var rate = parseFloat(document.getElementById('rate' + roomNumber).innerText.replace('$', ''));
    var totalPrice = calculateTotalPrice(rate, nights);

    // Perform availability check logic here

    // Assuming availability check is successful, display a success message with total price
    var message = "Room " + roomNumber + " is available!\n\n" +
      "Check-in date: " + checkInDate + "\n" +
      "Check-out date: " + checkOutDate + "\n" +
      "Number of nights: " + nights + "\n" +
      "Total Price: $" + totalPrice.toFixed(2);
    alert(message);
  }
}
/*document.getElementById('mapLink').addEventListener('click', function() {
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
            var mapContainer = document.getElementById('mapLink');
            mapContainer.innerHTML = '';
            mapContainer.appendChild(iframe);
            isMapOpen = true;
            }         

          });          
document.addEventListener('click', function(event) {
            if (event.target !== mapLink && isMapOpen) {
                mapLink.innerHTML = 'here';
                isMapOpen = false;
            }*/
        
        
      

  </script>
</body>
</html>