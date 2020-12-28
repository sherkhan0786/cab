<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Cab Booking</title>
</head>
<body> -->
<?php include 'header.php';?>
    <div class="main">
    <h1 class="text-white text-center fw-bold mt-3">Book a City Taxi to your destination in town</h1>
    <p class="text-white text-center fw-bold mb-4">Choose from a range of categories and prices</p>
    
    <div class="container mt-5">
       <div class="row">
            <div class="col-lg-4 bg-white p-3 forrm">
                <form method="post" id="submit">
                    <div class="text-center mb-3"><button class="btn btn-success m-0" disabled>CITY TAXY</button></div>
                    <h5 class="text-center fw-bold">Your everyday travel partner</h5>
                    <h6 class="text-center fw-bold">AC Cabs for point to point travel</h6>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="pickup">PICKUP</label>
                    </div>
                        <select class="form-select locations" name="pickup" id="pickup" aria-label="Default select example">
                            <option selected disabled>Current location</option>
                            <option value="Charbagh">Charbagh</option>
                            <option value="IndiraNagar">Indira Nagar</option>
                            <option value="BBD">BBD</option>
                            <option value="Barabanki">Barabanki</option>
                            <option value="Faizabad">Faizabad</option>
                            <option value="Gorakhpur">Gorakhpur</option>
                            <option value="Basti">Basti</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="drop">DROP</label>
                    </div>
                        <select class="form-select locations" name="drop" id="drop" aria-label="Default select example">
                            <option selected disabled>Enter drop for ride estimate</option>
                            <option value="Charbagh">Charbagh</option>
                            <option value="IndiraNagar">Indira Nagar</option>
                            <option value="BBD">BBD</option>
                            <option value="Barabanki">Barabanki</option>
                            <option value="Faizabad">Faizabad</option>
                            <option value="Gorakhpur">Gorakhpur</option>
                            <option value="Basti">Basti</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="cab">CAB TYPE</label>
                    </div>
                        <select class="form-select" name="cab" id="cab" aria-label="Default select example">
                            <option selected disabled>Select Cab</option>
                            <option value="micro">Ced Micro</option>
                            <option value="mini">Ced Mini</option>
                            <option value="royal">Ced Royal</option>
                            <option value="suv">Ced SUV</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="luggage">LUGGAGE</label>
                    </div>
                    <input class="form-control" type="text" name="weight" id="weight">
                        
                    </div>
                    
                    <input type="submit" name="submit" class="btn btn-success btn-block" value="Calculate Fare" data-toggle="modal" data-target="#myModal">
                    </form>
            </div>
            <div class="col-lg-4 result">
                
            </div>
            
            
       </div>
       </div>
    </div>


    <div class="container">
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cab Fare</h4>
              </div>
              <div class="modal-body" id="display">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Book</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>

      <?php
        include 'footer.php';
      ?>
      
<!-- </body>
</html> -->


<script>
    var display = document.getElementById('display');
    $('#cab').on('change', function(){
        var cab = document.getElementById('cab').value;
            if(cab == 'micro'){
                $("#weight").prop('disabled', true);
                $("#weight").val("luggage not allowed in micro");
            }else{
                $("#weight").prop('disabled', false);
                $("#weight").val("");
            }
        });

    $('.locations').on('change', function(){
        var selected = $(this).val();
        var other = $('.locations').not(this);
        other.find('option').prop('disabled', false);
        other.find('option[value ='+ selected+']').prop('disabled', true);
    })
    $(document).ready(function(){
        $('#submit').submit(function(e){
            var pickup = $('#pickup').val();
            var drop = $('#drop').val();
            var cab = $('#cab').val();
            var weight = $('#weight').val();
            
            data = {'pickup':pickup, 'drop':drop, 'cab':cab, 'weight':weight,}
            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'calculate.php',
                data:data,
                success: function(data){
                    display = data;
                    console.log(data);
                    document.getElementById('display').innerHTML = display;
                }
            });
        });
    });
</script>