<?php

require_once("views/includes/header.php");
require_once("views/includes/sidebar.php");
require_once("views/includes/topbar.php");



switch($page)
{
    //users
    case "user_profile":
        include("pages/account/user_profile.php");
    break;

    case "user_list":
        include("pages/users/user_list.php");
    break;

    case "user_form":
        include("pages/account/user_form.php");
    break;

    case "user_view":
        include("pages/users/user_view.php");
    break;

    case "user_add":
        include("pages/users/user_add.php");
    break;

    case "user_update":
        include("pages/users/user_update.php");
    break;

    case "user_delete":
        include("pages/users/user_delete.php");
    break;

    //profiles
    case "profile_update":
        include("pages/profile/profile_update.php");
    break;

    //groups
    case "group_list":
        include("pages/groups/group_list.php");
    break;

    //import data
    case "importcsv":
        include("pages/data/importcsv.php");
    break;

    case "importcsvpersonnel":
        include("pages/data/importcsvpersonnel.php");
    break;

    //cells
    case "cells":
        include("pages/data/cells.php");
    break;

    //cells
    case "ops":
        include("pages/data/ops.php");
    break;

    //cells - operations menu
    case "cell_op":
        include("pages/data/cell_op.php");
    break;

    case "assign_sop_menu":
        include("pages/data/assign_sop_menu.php");
    break;

    case "assign_sop":
        include("pages/data/assign_sop.php");
    break;

    case "trained":
        include("pages/view/trained.php");
    break;

    case "trained_supervisor":
        include("pages/view/trained_supervisor.php");
    break;

    case "manual":
        include("pages/usermanual/manual.php");
    break;



    //default page
    default:
        include("pages/default.php");
    break;
}






require_once("views/includes/footer.php"); ?>


