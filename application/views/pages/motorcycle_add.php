<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <?php
        //form action or target URL string (controller/method)
        $action = "motocycles/add";
        //(optional) HTML attributes for the form tag
        $attributes = array("class" => "form_style");
        //(optional) hidden input fields for processing
        $hidden = array("id" => 1);
        echo form_open($action, $attributes, $hidden);

        //array of fields attributes data
        $attributes = array("id" => "brand", "class" => "input-control"); 
        //input value
        $value = "";
        //(optional) extra attributes
        $extra = array("placeholder" => "Enter Brand");
        echo form_input($attributes, $value, $extra);

        echo form_password(
            array("id" => "password"),
            "",
            array("placeholder" => "Enter Password")
        );


        echo form_checkbox(
            "checkbox", //field name
            "Agree", //string value
            false, //checked / unchecked
            array() // extra parameter
        ) . "This is a checkbox.";

        echo form_radio(
            "radio", //field name
            "Agree", //string value
            false, //checked / unchecked
            array() // extra parameter
        ) . "This is a radio button";

        echo form_button(
            "save", //field name
            "Save", //label
            array("id" => "btnsave", "type" => "submit") //extra parameter
        );
    ?>
</body>