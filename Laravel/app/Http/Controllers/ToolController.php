<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ToolController extends Controller
{
    public function md5(){
    	echo md5('123456');
    	// if($_POST){
			// $str = $_POST['str'];
			// $sql = "select * from te_md where mdone='".$str."' or mdtwo='".$str."'";
			// $return = mysql_query($sql); 
			// while($result = mysql_fetch_assoc($return)){
			// 	$data[] = $result;
			// }
			// // var_dump($data);
			// foreach ($data as $key => $value) {
			// 	echo '初值   ： '.$value['original'].'<br>';
			// 	echo 'md5   ：'.$value['mdone'].'<br>';
			// 	echo '2md5 : '.$value['mdtwo'].'<br>';
			// }
		// 	if(empty($data)){
		// 		echo '查无此密';
		// 	}
		// }
    	return view('tool.md5',['str'=>'1234455']);
    }
}
