<?php
    include_once('funcitions.php');
    $dbManager =  new DataBaseController;
    $controller = new pageController;
    $dbManager->startConnection();
    session_start();

    if(isset($_GET['page'])){
      
      $tempPage = $_GET['page'];
      $page;
      switch($tempPage){
        case 'inicio':
        require_once("Controller/courseListPage.php");
          $getController = new CourseListPage();
        break;
        case 'detalle':
        require_once("Controller/courseDetailPage.php");
          $getController =  new CourseDetailPage();
        break;
        case 'video':
          require_once("Controller/videoCoursePage.php");
          $getController = new VideoCoursePage();
        break;
        case 'usuario':
          require_once("Controller/userData.php");
          $getController = new UserData();
        break;
        case 'configurar':
          require_once("Controller/configUserPage.php");
          $getController =  new ConfigUserPage();
        break;
        case 'curso':
          require_once("Controller/courseDataPage.php");
          $getController = new CourseDataPage();
        break;
        case 'cursoOP':
          require_once("Controller/courseData.php");
          $getController = new CourseData();
        break;
        default: 
          require_once("Controller/notFound.php");
          $getController = new NotFound();
        break;
      }

      $getController->start();  
      //$controller->loadContent($page);

    }else{
      require_once("Controller/courseListPage.php");
          $getController = new CourseListPage();
          $getController->start(); 
    }
  ?> 