<?php

function showMovieQuote() {
    require "listAssociativeArray.php";
    $sentInfo = $_POST['movie'];

    foreach($myAssArray as $key => $value){
        if($sentInfo == $key) {
            echo "<h2>" . "<b>" . "A quote from the movie " . "'" . $key . "'" . ":" . "</h2>" . "</b>" . "<h3>" . " '" . $value . "'" . "</h3>";
        }    
    }
}

function dropDownList() {
    require "listAssociativeArray.php";

    foreach($myAssArray as $key => $value) {
        ?>
        <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
        <?php
    }
    ?>
    <input type="submit" value="Submit">
    <?php     
}
?>
