<?php
// FrontAdvert.php
namespace frontend\widgets\frontadvert;
use yii\base\Widget;
use FakerFactory;
				  
class FrontAdvert extends Widget {
  public $model;       // model, je del FrontAdvert    
				  
  public function init(){  //klic metode baznega razreda Widget				          
      parent::init();    
  }

  public function run() {
      $html = '<h2>' . $this->model->naslov . '</h2>';
      
  //$faker = Factory::create();
  //$html .= '<img width="300" src="'. $faker->imageUrl($width = 640, $height = 480).'" />';
  if ($this->model->image_web_filename!=''){
    $html .= '<img src="'.\Yii::$app->homeUrl. '/../uploads/status/'.$this->model->image_web_filename.'" width="350px" height="auto">';
    }else  // tule daj raje prazen placeholder
    $html .= '<img width="350" src="https://picsum.photos/%27.(300+(rand(0,26000)%2)).%27/200" />';
    
      $html .= '<p>';
      $html .=  $this->model->povzetek;
      $html .= '</p>';
      $html .= '<div style=" text-align: right">';
      $html .=  'spisal: '.$this->model->avtor ;
      $html .= '</div>';
    return $html;    // vračanje vrednosti
  }
}


?>

