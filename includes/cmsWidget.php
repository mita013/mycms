<?php
require_once('cmsBase.php')
class cmsWidget extends cmsBase{
//Anything  here will be accessible in main functionally of  cms
 var $widgetPath='';
 var $widgetName='';
 
 function setWidgetPath($widgetName)
 {
 $this->widgetPath = 'widgets/'.$widgetName.'/';
 $this->widgetName = 'widgetName';
 }
 function getWidgetPath()
 {
 return $this ->widgetPath;
 }
 function display(){
 echo 'this will be default output of widget';
 }
 function run($widgetName){
 $this->setWidgetPath($widgetName);
 $this->display();
 }
}
?>