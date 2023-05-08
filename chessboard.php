<?php
//setting colors.
function getColors($image){
    return array(
        imagecolorallocate($image, 0, 0, 0), // Black
        imagecolorallocate($image, 255, 255, 255) // White
    );
}
//exist GET Request
if (isset($_GET)) {
    $width = isset($_GET['width']) ? $_GET['width'] : 0; 
    $height = isset($_GET['heigth']) ? $_GET['heigth'] : 0; 
    $fieldwith = isset($_GET['fwidth']) ? $_GET['fwidth'] : 0;

    function drawboard(int $width,int $height, int $fieldwith){
        if (isset($width) && isset($height) && $height>0 && $width>0 && $fieldwith) {
                //creating a image 
                $image = imagecreatetruecolor($width, $height);
                //getting colors
                $colors = getColors($image);
                //defining coords x
                for ($coord_x = 0; $coord_x < $height; $coord_x++) {
                //defining coords y
                    for ($coord_y = 0; $coord_y < $width; $coord_y++) {
                        // Fill in a rectangle 
                                            //Image Object     //coords x1          // coords y1                  // coords x2                           // coords y2
                       imagefilledrectangle($image, ($coord_x * $fieldwith), ($coord_y * $fieldwith), ($coord_x * $fieldwith) + $fieldwith, ($coord_y * $fieldwith) + $fieldwith,
                            // color take black and then the white color
                            $colors[0]);
                          $colors = array_reverse($colors);
                    }
                    //colour rectangles through coords y
                    $colors = array_reverse($colors);
                }
                //creating image and save on chessboard.png 
                header("content-type: image/png");
                imagepng($image);
                imagepng($image,'chessboard.png');
                imagedestroy($image);
    
        } else { //message without parameters
            echo "You should pass the parameters via GET ?width=number&heigth=number&fwidth=number parameters width,height should greather than 0";
        }
    }
}
//main function
drawboard($width,$height,$fieldwith);