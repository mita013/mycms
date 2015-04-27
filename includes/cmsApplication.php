<?php
require_once('cmsBase.php');
class cmsApplication extends cmsBase{
//Anything  here will be accessible in main functionally of  cms
function run(){
if (isset($_REQUEST['task'])) {
		$task= $_REQUEST['task'];
			switch($task){
				case 'addcontent':
					$this->addcontent();
					break;
				case 'anyothertask':
					$this->anyothertask();
					break;
					default:
						$this->display();
						break;
						}
						}else {
						$this->display();

} } //end
function addcontent(){
echo'here add content functionality will takes places';
}
function viewcontent(){
echo 'here view ';
}
function anyothertask(){
echo 'this is another task here can be written a complete php againts that task ';
}
}