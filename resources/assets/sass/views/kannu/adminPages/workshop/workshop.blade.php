<?php
use Illuminate\Database\Schema\Blueprint;

if(!isset($_POST)||!isset($_POST['password'])||!isset($_POST['typeOfEvent'])) die("I don't know how you reached here, why you reached here, when you reached here, but know this that I may be knowing how you reached here, why you reached here and when you reached here and who you are!!!");
if($_POST['password']==='1w2e3r4t5y6u7i8o9p0['){
	if($_POST['typeOfEvent'] === 'createNew'){
		$eventName = $_POST['eventNames'];
        $eventName = preg_replace("![^a-z0-9]+!i", "_", $eventName);
		$eventCode = $_POST['eventCode'];
		$eventCount = $_POST['eventCount'];
        DB::table("workshop_name_list")->insert(['table_name'=>"workshop_$eventName",'workshop_name'=>$eventName,"code"=>$eventCode,"max_players"=>$eventCount]);
        DB::table("event_17")->insert(['workshop_name'=>$eventName,"table_name"=>"workshop_$eventName","code"=>$eventCode]);
		if(!$eventName || !$eventCount || !$eventCode){
			?>
				<html>
					<body>
						Sorry! You missed writing some of the input data! Redirecting back...
						<script>
							setTimeout(function(){
								window.history.back();
							},3000);
						</script>
					</body>
				</html>
			<?php
			die();
		}
		else{

			Schema::create("workshop_$eventName",function(Blueprint $table){
				$table->increments('id');
				$table->integer('team_id');
				$table->string('fname');
				$table->string('lname');
				$table->string('email');
				$table->string('city');
				$table->string('college');
				$table->string('year');
				$table->string('country');
				$table->unsignedBigInteger('phone');
				$table->longText('address1');
				$table->longText('payment_link');
				$table->string('certi_no');
				$table->integer('pincode');
	            $table->timestamps();
			});
			echo "table created";
		}
	}
	else if($_POST['typeOfEvent'] === 'showAll'){
	    if(!isset($_POST['eventName'])){
            ?>
                <html>
                <body>
                Sorry! You missed writing some of the input data! Redirecting back...
                <script>
                    setTimeout(function(){
                        window.history.back();
                    },3000);
                </script>
                </body>
                </html>
            <?php
            die();
        }
        else{
	        echo "Please write this function, I have exams tomorow and I haven't started yet! T_T :(";
        }
    }
}
else die("I don't know how you reached here, why you reached here, when you reached here, but know this that I may be knowing how you reached here, why you reached here and when you reached here and who you are!!!");
return "Whatever It was that you wanted is Done";