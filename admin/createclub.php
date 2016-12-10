<?php

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $clubDesc = $_POST['clubDesc'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $clubImage = $_POST['clubImage'];
    $mobilePhone = $_POST['mobilePhone'];
    $housePhone = $_POST['housePhone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $country = $_POST['country'];

    include 'dbConfig.php';
    $result = $db->query("INSERT INTO genre(name, description) VALUES ('".$category."', '".$description."')");
    $result = $db->query("INSERT INTO clubs(genreID, clubName, clubDesc, clubImage, mobilePhone, housePhone, address1, city, postcode, country)
    VALUES((select genreID from genre where name='".$category."'), '".$name."', '".$clubDesc."', '".$clubImage."',
    '".$mobilePhone."', '".$housePhone."', '".$address."', '".$city."', '".$postcode."', '".$country."')");


} else {

echo '
    <a href="createCulb.php">Create a new club</a>
    <div class="editform">
        <form action="" method="post" class="login-page">
            <div class="login-header margin-bottom-30">
                <h2>Create new club</h2>
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input name="name" placeholder="name" class="form-control" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input name="clubDesc" placeholder="description" class="form-control" type="textarea">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="category" class="form-control"  name="category" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="description" class="form-control"  name="description" type="textarea">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="club image" class="form-control" name="clubImage" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="mobilePhone" class="form-control" name="mobilePhone" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="house phone" class="form-control" name="housePhone" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="address" class="form-control" name="address" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="city" class="form-control" name="city" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="postcode" class="form-control" name="postcode" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input placeholder="country" class="form-control"  name="country" type="text">
            </div>
            <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary pull-right" name="update" value="update" type="submit">Save changes</button>
                    </div>
                </form>
    </div>';

}
?>
