<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ccalc extends CI_Controller {
	public function index(){
		$this->load->view('vcalc');
	}
	function set17(){
		sleep(1);
		$arr = array ('total'=>'10000','section'=>'10','cut'=>'4','polish'=>'1',
		'crew'=>'1','inefficiency'=>'40','revenue'=>'80','loading'=>null,
		'satu'=>'0.15','dua'=>'0.18','tiga'=>'0.21','empat'=>'0.24','lima'=>'0.27',
		'othermat'=>'0.07');	
		echo json_encode($arr);
	}
	function set22(){
		sleep(1);
		$arr = array ('total'=>'10000','section'=>'15','cut'=>'4','polish'=>'1',
		'crew'=>'1','inefficiency'=>'40','revenue'=>'80','loading'=>null,
		'satu'=>'0.15','dua'=>'0.18','tiga'=>'0.21','empat'=>'0.24','lima'=>'0.27',
		'othermat'=>'0.07');	
		echo json_encode($arr);
	}
	function calculation($pad,$total,$section,$cut,$polish,$crew,$inefficiency,$revenue,
	$satu,$dua,$tiga,$empat,$lima,$othermat){
		sleep(1);	
		$find=array('%22','%20');
		$replace=array('"',' ');	
		$pad=str_replace($find,$replace,$pad);
		$calculation1=$total/$section;
		$calculation2=$calculation1*$cut*4;	
		$calculation3=$section/$cut;
		$calculation4=$calculation1*$polish*4;
		$calculation5=$calculation3*60;
		$calculation6=$calculation2+$calculation4;
		$calculation8=$calculation6/60;
		$calculation9=$calculation5*0.6;
		$calculation10=$calculation8/$crew;
		$calculation7=21/$calculation9;
		$calculation11=1*($inefficiency/100)+1;
		$calculation12=$calculation11*$calculation8;
		$calculation13=$calculation12*$revenue;
		$calculation14=$calculation13/$total;
		$laborcost1=$calculation7*2;
		$laborcost2=$calculation7*3;
		$laborcost3=$calculation7*4;
		$laborcost4=$calculation7*5;
		$laborcost5=$calculation7*6;
		$onesatu=$satu+$othermat;
		$onedua=$dua+$othermat;
		$onetiga=$tiga+$othermat;
		$oneempat=$empat+$othermat;
		$onelima=$lima+$othermat;
		$twosatu=$onesatu+$laborcost1;
		$twodua=$onedua+$laborcost2;
		$twotiga=$onetiga+$laborcost3;
		$twoempat=$oneempat+$laborcost4;
		$twolima=$onelima+$laborcost5;
		$threesatu=$laborcost1/0.25;
		$threedua=$laborcost2/0.25;
		$threetiga=$laborcost3/0.25;
		$threeempat=$laborcost4/0.25;
		$threelima=$laborcost5/0.25;
		$foursatu=($threesatu/$twosatu)*100;
		$fourdua=($threedua/$twodua)*100;
		$fourtiga=($threetiga/$twotiga)*100;
		$fourempat=($threeempat/$twoempat)*100;
		$fourlima=($threelima/$twolima)*100;
		$fivesatu=($twosatu/$threesatu)*100;
		$fivedua=($twodua/$threedua)*100;
		$fivetiga=($twotiga/$threetiga)*100;
		$fiveempat=($twoempat/$threeempat)*100;
		$fivelima=($twolima/$threelima)*100;
		$sixsatu=($laborcost1/$threesatu)*100;
		$sixdua=($laborcost2/$threedua)*100;
		$sixtiga=($laborcost3/$threetiga)*100;
		$sixempat=($laborcost4/$threeempat)*100;
		$sixlima=($laborcost5/$threelima)*100;
		$sixlima=round($sixlima,2);
		$sixempat=round($sixempat,2);
		$sixtiga=round($sixtiga,2);
		$sixdua=round($sixdua,2);
		$sixsatu=round($sixsatu,2);
		$fivelima=round($fivelima,2);
		$fiveempat=round($fiveempat,2);
		$fivetiga=round($fivetiga,2);
		$fivedua=round($fivedua,2);
		$fivesatu=round($fivesatu,2);
		$fourlima=round($fourlima,2);
		$fourempat=round($fourempat,2);
		$fourtiga=round($fourtiga,2);
		$fourdua=round($fourdua,2);
		$foursatu=round($foursatu,2);
		$threelima=round($threelima,2);
		$threeempat=round($threeempat,2);
		$threetiga=round($threetiga,2);
		$threedua=round($threedua,2);
		$threesatu=round($threesatu,2);
		$twolima=round($twolima,2);
		$twoempat=round($twoempat,2);
		$twotiga=round($twotiga,2);
		$twodua=round($twodua,2);
		$twosatu=round($twosatu,2);
		$onelima=round($onelima,2);
		$oneempat=round($oneempat,2);
		$onetiga=round($onetiga,2);
		$onedua=round($onedua,2);
		$onesatu=round($onesatu,2);
		$laborcost5=round($laborcost5,2);
		$laborcost4=round($laborcost4,2);
		$laborcost3=round($laborcost3,2);
		$laborcost2=round($laborcost2,2);
		$laborcost1=round($laborcost1,2);
		$calculation14=round($calculation14,2);
		$calculation13=round($calculation13,0);
		$calculation12=round($calculation12,0);
		$calculation11=round($calculation11,2);
		$calculation10=round($calculation10,0);
		$calculation9=round($calculation9,0);
		$calculation8=round($calculation8,0);
		$calculation7=round($calculation7,2);
		$calculation6=round($calculation6,0);
		$calculation5=round($calculation5,0);			
		$calculation4=round($calculation4,0);
		$calculation3=round($calculation3,2);
		$calculation2=round($calculation2,0);
		$calculation1=round($calculation1,0);
		$arr = array ('loading'=>null,'pad'=>$pad,'total'=>$total,'section'=>$section,'cut'=>$cut,'polish'=>$polish,'crew'=>$crew,'inefficiency'=>$inefficiency,'revenue'=>$revenue,
		'calculation1'=>$calculation1,'calculation2'=>$calculation2,'calculation3'=>$calculation3,
		'calculation4'=>$calculation4,'calculation5'=>$calculation5,'calculation6'=>$calculation6,
		'calculation7'=>$calculation7,'calculation8'=>$calculation8,'calculation9'=>$calculation9,
		'calculation10'=>$calculation10,'calculation11'=>$calculation11,'calculation12'=>$calculation12,
		'calculation13'=>$calculation13,'calculation14'=>$calculation14,'laborcost1'=>$laborcost1,'laborcost2'=>$laborcost2,
		'laborcost3'=>$laborcost3,'laborcost4'=>$laborcost4,'laborcost5'=>$laborcost5,
		'satu'=>$satu,'dua'=>$dua,'tiga'=>$tiga,'empat'=>$empat,'lima'=>$lima,'othermat'=>$othermat,
		'onesatu'=>$onesatu,'onedua'=>$onedua,'onetiga'=>$onetiga,'oneempat'=>$oneempat,'onelima'=>$onelima,
		'twosatu'=>$twosatu,'twodua'=>$twodua,'twotiga'=>$twotiga,'twoempat'=>$twoempat,'twolima'=>$twolima,
		'threesatu'=>$threesatu,'threedua'=>$threedua,'threetiga'=>$threetiga,'threeempat'=>$threeempat,'threelima'=>$threelima,
		'foursatu'=>$foursatu,'fourdua'=>$fourdua,'fourtiga'=>$fourtiga,'fourempat'=>$fourempat,'fourlima'=>$fourlima,
		'fivesatu'=>$fivesatu,'fivedua'=>$fivedua,'fivetiga'=>$fivetiga,'fiveempat'=>$fiveempat,'fivelima'=>$fivelima,
		'sixsatu'=>$sixsatu,'sixdua'=>$sixdua,'sixtiga'=>$sixtiga,'sixempat'=>$sixempat,'sixlima'=>$sixlima);	
		echo json_encode($arr);
	}	
}
