<?php
require_once ('cmsBase.php');
class TemplateFunctions extends CmsBase {
var $templateName='default';
function show() // to show the tmplte
{
require_once($this->getCurrentTemplatePath().'index.php'); // folder location
}
function getCurrentTemplatepath() 
{
return 'templates/'.$this->templateName.'/';
}
function setTemplate($templateName)
{
$this->templateName=$templateName;
}
function appOutput(){
require_once('includes/cmsApplication.php');
$app = new CmsApplication();
$app->run();

} //fungsi ini akan digunakan untk index.php in div echo appoutput
function widgetOutput($position='default'){
//echo "disini akan dtmplkan wdget scra dnamis";
if (!empty($this->widgetPositions[$position])){
$widget = $this ->widgetPositions[$position];
foreach ($widget as $widgetName){
require_once('widget/'. $widgetName. '/' . $widgetName. '.php');
$widget
}
function setWidget($position, $widgetName){
if(empty($this ->widgetPosition[$position])){
$this->widgetPositions[$position] = array ($widgetName);
}
else
{
array_push($this->widgetPositions[$position], $widgetName);
}
}
}
?>
// Semua fungsi terkait dengan
// pengaturan template ada di sini
