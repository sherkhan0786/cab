<?php

    echo "<table>";
    if($_POST['pickup'] && $_POST['drop'] &&  $_POST['cab'])
    {
        $value1;
        $value2;
        $pickup = $_POST['pickup'];
        $drop = $_POST['drop'];
        $cab = $_POST['cab'];
        $weight = $_POST['weight'];
        $dist = array('Charbagh'  =>  0,
        'IndiraNagar'  => 10,
        'BBD'           => 30,
        'Barabanki'     => 60,
        'Faizabad'      => 100,
        'Basti'         => 150,
        'Gorakhpur'     =>210);
        calculate();
    }else{
        echo "Please Enter a valid input";
    }
    
    function calculate(){
        global $pickup, $drop, $cab, $weight, $dist;
        
        // distance calculation
        foreach($dist as $key=>$val){
            if($key==$pickup){
                $value1 = $val;
                echo "<tr><th>FROM : </th> <td>$key </td> </tr>";
            }
        }
        foreach($dist as $key=>$val){
            if($key==$drop){
                $value2 = $val;
                echo "<tr><th>to : </th> <td>$key </td> </tr>";
            }
        }
        
        $distance = abs($value2 - $value1);
        echo "<tr><th>Total distance is : </th> <td>".$distance. "</td> </tr>";



        // fare while weight is greater than 10KG and less than 20 KG
        if($weight<=0){
            echo "<tr><th>LUGGAGE(KG) :  </th> <td> $weight KG</td> </tr>";
            // fare Calculation for ced Micro cab
            if($cab == 'micro'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab<br>";
                if($distance <= 10){
                    $fare = ($distance * 13.5) + 50 ;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*13.5;
                    $fare = $rate1 + ($distance*12) + 50 ;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*13.5 + (50*12);
                    $fare = $rate2 + ($distance * 10.2) + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*13.5 + (50*12) + 100*10.2;
                    $fare = $rate3 + ($distance * 8.5) + 50;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
            }


            // fare Calculation for ced MINI cab
            if($cab == 'mini'){
                echo "<tr><th>CAB TYPE :</th> <td> $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 14.5) + 150;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*14.5;
                    $fare = $rate1 + ($distance*13) + 150;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*14.5 + (50*13);
                    $fare = $rate2 + ($distance * 11.2) + 150;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*14.5 + (50*13) + 100*11.2;
                    $fare = $rate3 + ($distance * 9.5) + 150;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced ROYAL cab
            if($cab == 'royal'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 15.5) + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*15.5;
                    $fare = $rate1 + ($distance*14) + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*15.5 + (50*14);
                    $fare = $rate2 + ($distance * 12.2) + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*15.5 + (50*14) + 100*12.2;
                    $fare = $rate3 + ($distance * 10.5) + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced SUV cab
            if($cab == 'suv'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 16.5) + 250;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*16.5;
                    $fare = $rate1 + ($distance*15) + 250;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*16.5 + (50*15);
                    $fare = $rate2 + ($distance * 13.2) + 250;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*16.5 + (50*15) + 100*13.2;
                    $fare = $rate3 + ($distance * 11.5) + 250;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }
        }else{

        // fare while weight is less than 10KG
        if($weight < 10 && $weight>0){
            echo "<tr><th>LUGGAGE(KG) : </th> <td>$weight KG</td> </tr>";
            // fare Calculation for ced Micro cab
            if($cab == 'micro'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 13.5) + 50 + 50;
                    echo "<tr><th>Total Fare is :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*13.5;
                    $fare = $rate1 + ($distance*12) + 50 + 50;
                    echo "<tr><th>Total Fare is : </th> <td>$far</td> </tr>e";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*13.5 + (50*12);
                    $fare = $rate2 + ($distance * 10.2) + 50 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*13.5 + (50*12) + 100*10.2;
                    $fare = $rate3 + ($distance * 8.5) + 50 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }


            // fare Calculation for ced MINI cab
            if($cab == 'mini'){
                echo "<tr><th>CAB TYPE : $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 14.5) + 150 + 50;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*14.5;
                    $fare = $rate1 + ($distance*13) + 150 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*14.5 + (50*13);
                    $fare = $rate2 + ($distance * 11.2) + 150 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*14.5 + (50*13) + 100*11.2;
                    $fare = $rate3 + ($distance * 9.5) + 150 + 50;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
            }

            // fare for ced ROYAL cab
            if($cab == 'royal'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 15.5) + 200 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*15.5;
                    $fare = $rate1 + ($distance*14) + 200 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*15.5 + (50*14);
                    $fare = $rate2 + ($distance * 12.2) + 200 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*15.5 + (50*14) + 100*12.2;
                    $fare = $rate3 + ($distance * 10.5) + 200 + 50;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced SUV cab
            if($cab == 'suv'){
                echo "<tr><th>CAB TYPE : </th> <td> $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 16.5) + 250 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*16.5;
                    $fare = $rate1 + ($distance*15) + 250 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*16.5 + (50*15);
                    $fare = $rate2 + ($distance * 13.2) + 250 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*16.5 + (50*15) + 100*13.2;
                    $fare = $rate3 + ($distance * 11.5) + 250 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }
        }



        // fare while weight is greater than 10KG and less than 20 KG
        if($weight>10 && $weight<=20){
            echo "<tr><th>LUGGAGE(KG) : </th> <td>$weight KG</td> </tr>";
            // fare Calculation for ced Micro cab
            if($cab == 'micro'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 13.5) + 50 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*13.5;
                    $fare = $rate1 + ($distance*12) + 50 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*13.5 + (50*12);
                    $fare = $rate2 + ($distance * 10.2) + 50 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*13.5 + (50*12) + 100*10.2;
                    $fare = $rate3 + ($distance * 8.5) + 50 + 100;
                     echo "<tr><th><tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
            }


            // fare Calculation for ced MINI cab
            if($cab == 'mini'){
                echo "<tr><th>CAB TYPE :</th> <td> $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 14.5) + 150 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*14.5;
                    $fare = $rate1 + ($distance*13) + 150 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*14.5 + (50*13);
                    $fare = $rate2 + ($distance * 11.2) + 150 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*14.5 + (50*13) + 100*11.2;
                    $fare = $rate3 + ($distance * 9.5) + 150 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced ROYAL cab
            if($cab == 'royal'){
                echo "<tr><th>CAB TYPE : $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 15.5) + 200 + 100;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*15.5;
                    $fare = $rate1 + ($distance*14) + 200 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*15.5 + (50*14);
                    $fare = $rate2 + ($distance * 12.2) + 200 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*15.5 + (50*14) + 100*12.2;
                    $fare = $rate3 + ($distance * 10.5) + 200 + 100;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced SUV cab
            if($cab == 'suv'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab<</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 16.5) + 250 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*16.5;
                    $fare = $rate1 + ($distance*15) + 250 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*16.5 + (50*15);
                    $fare = $rate2 + ($distance * 13.2) + 250 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*16.5 + (50*15) + 100*13.2;
                    $fare = $rate3 + ($distance * 11.5) + 250 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
            }
        }



        // fare while weight is greater than 10KG and less than 20 KG
        if($weight>20){
            echo "<tr><th>LUGGAGE(KG) :</th> <td> $weight KG</td> </tr>";
            // fare Calculation for ced Micro cab
            if($cab == 'micro'){
                echo "<tr><th>CAB TYPE :</th> <td> $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 13.5) + 50 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*13.5;
                    $fare = $rate1 + ($distance*12) + 50 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*13.5 + (50*12);
                    $fare = $rate2 + ($distance * 10.2) + 50 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*13.5 + (50*12) + 100*10.2;
                    $fare = $rate3 + ($distance * 8.5) + 50 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
            }


            // fare Calculation for ced MINI cab
            if($cab == 'mini'){
                echo "<tr><th>CAB TYPE : </th> <td>$cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 14.5) + 150 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*14.5;
                    $fare = $rate1 + ($distance*13) + 150 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*14.5 + (50*13);
                    $fare = $rate2 + ($distance * 11.2) + 150 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*14.5 + (50*13) + 100*11.2;
                    $fare = $rate3 + ($distance * 9.5) + 150 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced ROYAL cab
            if($cab == 'royal'){
                echo "<tr><th>CAB TYPE :</th> <td> $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 15.5) + 200 + 200;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*15.5;
                    $fare = $rate1 + ($distance*14) + 200 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*15.5 + (50*14);
                    $fare = $rate2 + ($distance * 12.2) + 200 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*15.5 + (50*14) + 100*12.2;
                    $fare = $rate3 + ($distance * 10.5) + 200 + 200;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
            }

            // fare for ced SUV cab
            if($cab == 'suv'){
                echo "<tr><th>CAB TYPE : $cab</td> </tr>";
                if($distance <= 10){
                    $fare = ($distance * 16.5) + 250 + 400;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>10 && $distance<=50){
                    $distance = $distance-10;
                    $rate1 = 10*16.5;
                    $fare = $rate1 + ($distance*15) + 250 + 400;
                     echo "<tr><th>Total Fare(₹) : </th> <td>$fare</td> </tr>";
                }
                elseif($distance>50 && $distance<=100){
                    $distance = $distance - 60;
                    $rate2 = 10*16.5 + (50*15);
                    $fare = $rate2 + ($distance * 13.2) + 250 + 400;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
                elseif($distance>100){
                    $distance = $distance - 160;
                    $rate3 = 10*16.5 + (50*15) + 100*13.2;
                    $fare = $rate3 + ($distance * 11.5) + 250 + 400;
                     echo "<tr><th>Total Fare(₹) :</th> <td> $fare</td> </tr>";
                }
            }
        }
    }
        
    }

    echo "</table>";

?>