<?php
class WallPaper{
    public $Name;
    public $BackGroundColor;
    public $extraBackGroundColors;
    public function __get( $propertyName ) {
    if ( array_key_exists( $propertyName, $this->extraBackGroundColors )){
        return $this->extraBackGroundColors[$propertyName];
    }else{
        echo "The variable does not exists";
        return null;
    }
    }
}
$WallPaper1 = new Wallpaper();
$WallPaper1->Name = "SunRise";
$WallPaper1->BackGroundColor = "Blue";
$WallPaper1->extraBackGroundColors = array( "green", "red", "purple" );
print_r($WallPaper1);
?>
