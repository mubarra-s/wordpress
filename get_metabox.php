<?php

function metabox_arr_func( $arr ) {

    $arr[] = array(
        "id" => "metabox_umair",
        "title" => "Umair Metabox",
        "post_type" => "post",
        "fields" => array(
            array(
                "type" => "text",
                "id" => "umair_name_id",
                "name" => "umair_name",
                "title" => "Umair Name",
            ),
            array(
                "type" => "checkbox",
                "id" => "umair_name_checkbox",
                "name" => "umair_name_checkbox",
                "title" => "Umair Name Checkbox",
            ),
        )
    );

    $arr[] = array(
        "id" => "metabox_mubarra",
        "title" => "Mubarra Metabox",
        "post_type" => "post",
        "fields" => array(
            array(
                "type" => "text",
                "id" => "mubarra_name_id",
                "name" => "mubarra_name",
                "title" => "Mubarra Name",
            ),
        )
    );

    $arr[] = array(
        "id" => "metabox_books",
        "title" => "books Metabox",
        "post_type" => "post",
        "fields" => array(
            array(
                "type" => "text",
                "id" => "books_name_id",
                "name" => "books_name",
                "title" => "Book Name",
            ),
        )
    );

    return $arr;

} add_filter("metabox_arr", "metabox_arr_func");
