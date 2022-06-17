<?php
ini_set('display_errors',0);
require('constant.php');



 $m1 = isset($_POST['month1']) ? $_POST['month1'] : 0;
//  $m1 = isset($_POST['month1']);
$y1 = isset($_POST['year1']) ? $_POST['year1'] : 0;
 $amnt1 = isset($_POST['amount1']) ? $_POST['amount1'] : 0;
 $m2 = isset($_POST['month2']) ? $_POST['month2'] : 0;
 $y2 = isset($_POST['year2']) ? $_POST['year2'] : 0;
 $amnt2  = isset($_POST['amount2']) ? $_POST['amount2'] : 0;
 $m3 = isset($_POST['month3']) ? $_POST['month3'] : 0;
 $y3 = isset($_POST['year3']) ? $_POST['year3'] : 0;
 $amnt3 = isset($_POST['amount3']) ? $_POST['amount3'] : 0;
 $m4 =isset($_POST['month4']) ? $_POST['month4'] : 0;
 $y4 = isset($_POST['year4']) ? $_POST['year4'] : 0;
 $amnt4 = isset($_POST['amount4']) ? $_POST['amount4'] : 0;
 $m5 = isset($_POST['month5']) ? $_POST['month5'] : 0;
 $y5 = isset($_POST['year5']) ? $_POST['year5'] : 0;
 $amnt5 = isset($_POST['amount5']) ? $_POST['amount5'] : 0;



 $inputs = array();


$inputs = array(
    array($m1,$y1,$amnt1,$amnt1/500),
    array($m2,$y2,$amnt2,$amnt2/500),
    array($m3,$y3,$amnt3,$amnt3/500),
    array($m4,$y4,$amnt4,$amnt4/500),
    array($m5,$y5,$amnt5,$amnt5/500),

);

//var_dump($inputs);

// $inputs = array(
//     array(5,2018,15000,15000/500),
//     array(10,2019,6000,6000/500),
//     array(11,2020,10000,10000/500),

//     // array($m5,$y5,$amnt5,$amnt5/500),

// );
 
// var_dump($inputs);




// $sharesAtInitialDeposit = $inputs[0][2] / $catagory_A_payoutAt;  
// echo $sharesAtInitialDeposit;
$temp = 0;
for ($i=0; $i < count($inputs); $i++) { 
  $temp += $inputs[$i][2];
}
$totalDeposit = $temp;
// echo $totalDeposit;
// $sharesAt2Deposit = 2;
/*
// -------------------------jan-------------
$janActiveShareAtPotA = 0;
$janCurrentBalanceSharesAtPotA = $janActiveShareAtPotA * ($catagory_A_payoutAt/100* $monthly_yield_in_per);
$janExtensionSharesPotA = intval($janCurrentBalanceSharesAtPotA / $catagory_A_payoutAt);
// echo $janCurrentBalanceSharesAtPotA;
$janExtensionSharesPotB = intval();
// ----------------feb----------------
$febActiveSharesPotA = $janActiveShareAtPotA;
$febCurrentBalanceSharesPo;
*/



$outputs = array();

$month = "";
$active_shares_pot_a = 0;
$active_shares_pot_b = 0;
$active_shares_pot_c = 0;
$current_balance_pot_a = 0;
$current_balance_pot_b = 0;
$current_balance_pot_c = 0;
$extention_pot_a = 0;
$fulfilled_posts_pot_b = 0;
$fulfilled_posts_pot_c = 0;
$monthly_total = 0;
$monthly_total_percent = 0;

$annual_total = 0;
$temp_annual_total = array();
$annual_total_percent = 0;
$annual_total_balance = 0;
$annual_total_balance_percent = 0;



for($a=0;$a<count($years);$a++){
    $annual_total = 0;
    $current_month = date('m');
    array_push($outputs,array());
    for($b=0;$b<12;$b++){


        if($a==count($years) && $current_month>0){   
            // echo '---------';
            // echo $annual_total;
            // echo '----------';
            // echo $annual_total_percent;
            // echo '------------';
            // echo $annual_total_balance;
            // echo '-------------';
            // echo $annual_total_balance_percent;
            // echo '--------------';
        }
        else{
         if($a==0&&$b==0){

            // if(($b + 1) >= $inputs[0][2]){
            //     getShares();
            // }
            $month = $b;            
            $active_shares_pot_a = getShares($b+1 , $years[$a] );
            $active_shares_pot_b = getShares($b+1 , $years[$a] );
            $active_shares_pot_c = getShares($b+1 , $years[$a] );
            $active_shares_fulfilled_pot_c = 0;
            $current_balance_pot_a = $active_shares_pot_a*(($catagory_A_payoutAt/100)*getMonthlyPerformance($b+1,$years[$a]));
            $current_balance_pot_b = 0;
            $current_balance_pot_c = 0;
            $current_balance_fulfilled_pot_c = 0;
            $extention_pot_a = intval($current_balance_pot_a/$catagory_A_payoutAt);
            $fulfilled_posts_pot_b = intval($current_balance_pot_b/$catagory_B_payoutAt);
            $fulfilled_posts_pot_c = intval($current_balance_pot_c/$catagory_C6x_payoutAt);
            $monthly_total = ($fulfilled_posts_pot_b * $catagory_B_payoutAt) + (6 * $fulfilled_posts_pot_c * $catagory_C6x_payoutAt);
            if ($totalDeposit!=0){

                $monthly_total_percent = ((100 / $totalDeposit)* ($monthly_total/100))*100 ;
            }
            $annual_total += $monthly_total ;
            // $tmp_total += $monthly_total;
            // $temp_total = 0;
            // for ($i=12; $i < 24; $i++) { 
            //     $temp_total += $temp_annual_total[$i];
            //     }
            // array_push($temp_annual_total,$monthly_total);
            if ($annual_total_percent!=0){

                $annual_total_percent = ((100/$totalDeposit)* ($annual_total/100))*100;
            }
            $annual_total_balance += $monthly_total   ;
            if ($annual_total_balance_percent!=0){

                $annual_total_balance_percent = ((100/$totalDeposit)* ($annual_total_balance/100))*100;
            }

         }else if($a!=0&&$b==0){

         


            $month = $b;            
            $active_shares_pot_a = $outputs[$a-1][11][1]+ getShares($b+1 , $years[$a] );
            $active_shares_pot_b = ($outputs[$a-1][11][2]+$outputs[$a-1][11][8] -$outputs[$a-1][11][9]);
            $active_shares_pot_c = ($outputs[$a-1][11][9] + $outputs[$a-1][11][3] - $outputs[$a-1][11][7]);
            $current_balance_pot_c = $active_shares_pot_c * (($catagory_A_payoutAt/100) * getMonthlyPerformance($b+1,$years[$a])) +  mod($outputs[$a-1][11][6],$catagory_C6x_payoutAt);

            // if($a==2 && $b=1){
            //     echo "--------";
            //     echo $outputs[$a-1][11][9];
            //     echo "---------";
            //     echo $outputs[$a-1][11][3];
            //     echo "---------";
            //     echo $outputs[$a-1][11][7];
            //     echo "=========";
            //     echo $active_shares_pot_c;
            // }

            $current_balance_pot_a = $active_shares_pot_a*(($catagory_A_payoutAt/100)*getMonthlyPerformance($b+1,$years[$a]))+ (mod($outputs[$a-1][11][11],$catagory_A_payoutAt));
            $fulfilled_posts_pot_c = (intval($current_balance_pot_c/$catagory_C6x_payoutAt))/6;

            $active_shares_fulfilled_pot_c = $fulfilled_posts_pot_c +  $outputs[$a-1][11][4] - $outputs[$a-1][11][7];

           

            $current_balance_pot_b = ($active_shares_pot_b * (($catagory_A_payoutAt/100)*getMonthlyPerformance($b+1,$years[$a]))* 0.75) + mod($outputs[$a-1][11][5],$catagory_B_payoutAt);


           
            $current_balance_fulfilled_pot_c = floor(round($active_shares_fulfilled_pot_c,10));

           
            $extention_pot_a = intval($current_balance_pot_a/$catagory_A_payoutAt);
            $fulfilled_posts_pot_b = intval($current_balance_pot_b/$catagory_B_payoutAt);
            $monthly_total = ($fulfilled_posts_pot_b * $catagory_B_payoutAt) + (6 * $fulfilled_posts_pot_c * $catagory_C6x_payoutAt);
            if($monthly_total_percent!=0){

                $monthly_total_percent = ((100 / $totalDeposit)* ($monthly_total/100))*100 ;
            }
            $annual_total += $monthly_total ;
            array_push($temp_annual_total,$monthly_total);
            if ($annual_total_percent!=0) {
                #
                $annual_total_percent = ((100/$totalDeposit)* ($annual_total/100))*100;
            }
            $annual_total_balance += $monthly_total ;
            if($annual_total_balance_percent!=0){

                $annual_total_balance_percent = ((100/$totalDeposit)* ($annual_total_balance/100))*100;;
            }
         }

        
         else{
            $month = $b;
               
           
            
            $active_shares_pot_a = $outputs[$a][$b-1][1]+ getShares($b+1 , $years[$a] );
            $active_shares_pot_b = ($outputs[$a][$b-1][2]+$outputs[$a][$b-1][8] -$outputs[$a][$b-1][9]);
            $active_shares_pot_c = ($outputs[$a][$b-1][9] + $outputs[$a][$b-1][3] - $outputs[$a][$b-1][7]);
            $current_balance_pot_c = $active_shares_pot_c * (($catagory_A_payoutAt/100) * getMonthlyPerformance($b+1,$years[$a])) +  mod($outputs[$a][$b-1][6],$catagory_C6x_payoutAt);
            // if ($a==4 && $b==6) {
            //  echo "========";
            //  echo $outputs[$a][$b-1][6];
            //  echo "==========";
            // }
            $current_balance_pot_a = $active_shares_pot_a*(($catagory_A_payoutAt/100)*getMonthlyPerformance($b+1,$years[$a])) + (mod($outputs[$a][$b-1][11],$catagory_A_payoutAt));

            $fulfilled_posts_pot_c = (intval($current_balance_pot_c/$catagory_C6x_payoutAt))/6;
            $active_shares_fulfilled_pot_c = $fulfilled_posts_pot_c +  $outputs[$a][$b-1][4] - $outputs[$a][$b-1][7];

            $current_balance_pot_b = ($active_shares_pot_b * (($catagory_A_payoutAt/100)*getMonthlyPerformance($b+1,$years[$a]))* 0.75) + mod($outputs[$a][$b-1][5],$catagory_B_payoutAt);
            $current_balance_fulfilled_pot_c = floor(round($active_shares_fulfilled_pot_c,10));
            $extention_pot_a = intval($current_balance_pot_a/$catagory_A_payoutAt);
            $fulfilled_posts_pot_b = intval($current_balance_pot_b/$catagory_B_payoutAt) ;
            $monthly_total = ($fulfilled_posts_pot_b * $catagory_B_payoutAt) + (6*$fulfilled_posts_pot_c*$catagory_C6x_payoutAt);
            if ($monthly_total_percent!=0){

                $monthly_total_percent = ((100/$totalDeposit)*($monthly_total/100))*100;
            }
            else{
                $monthly_total_percent = ((100/$totalDeposit)*($monthly_total/100))*100;
            }
            $annual_total += $monthly_total ;
            array_push($temp_annual_total,$monthly_total);
          if($annual_total_percent!=0){

              $annual_total_percent = ((100/$totalDeposit)* ($annual_total/100))*100;
          }
          else{
            $annual_total_percent = ((100/$totalDeposit)* ($annual_total/100))*100;
          }
            $annual_total_balance += $monthly_total ;
            if($annual_total_balance_percent!=0){

                $annual_total_balance_percent = ((100/$totalDeposit)* ($annual_total_balance/100))*100;
            }
            else{
                $annual_total_balance_percent = ((100/$totalDeposit)* ($annual_total_balance/100))*100;
            }
         }
         array_push($outputs[$a],array(
             $month,
         $active_shares_pot_a,
         $active_shares_pot_b,
         $active_shares_pot_c, 
         $active_shares_fulfilled_pot_c,
         $current_balance_pot_b,
         $current_balance_pot_c,
         $current_balance_fulfilled_pot_c,
         $extention_pot_a,
         $fulfilled_posts_pot_b,
         $fulfilled_posts_pot_c,
         $current_balance_pot_a,
         $monthly_total,
         $monthly_total_percent));
        }
        //  $annual_total,
        //  $annual_total_percent,
        //  $annual_total_balance,
        //  $annual_total_balance_percent ));
        
    }
    array_push($temp_annual_total,$annual_total);
    array_push($outputs[$a],$annual_total,$annual_total_percent,$annual_total_balance,$annual_total_balance_percent);
}

// test();
// function test(){

// echo $GLOBALS['inputs'][0][2];
    
// }
// echo json_encode($outputs);

// echo 'Total : '+$temp_total;
//var_dump($outputs);
 //var_dump($temp_annual_total);
//var_dump($inputs);
// var_dump($outputs);




echo json_encode($outputs);


function getShares($month, $year ){

    
    $amount=0;
    
    for($i =0; $i<count($GLOBALS['inputs']); $i++){
        if($GLOBALS['inputs'][$i][1] == $year && $GLOBALS['inputs'][$i][0] == $month){
            $amount = $GLOBALS['inputs'][$i][2];
        }
    }
//$inputs


    // $inputs = array($month,$year,$amount);
    return ($amount / $GLOBALS['catagory_A_payoutAt']);
        // return 0;
   
}
function mod($num , $den){
      // n-d*INT(n/d)
    return $num - ($den * intval($num/$den));
}
function getMonthlyPerformance($month, $year){
    $monthly = 0;

    for($i =0; $i<count($GLOBALS['monthly_performance']); $i++){
       

        if($GLOBALS['monthly_performance'][$i][0] == $year && $GLOBALS['monthly_performance'][$i][1] == $month){
            $monthly = $GLOBALS['monthly_performance'][$i][2];
            
        }
    }
    return $monthly;
}



?>