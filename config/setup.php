<?php

    require('db_connect.php');
    require('init.php');
    session_start();

    if(!isset($_COOKIE["user_id"])){
        init();
        //header("Refresh:0");
    }

    //echo "Hay cookie id";
    //El progreso necesita estar en sesión
    //echo "<br>El id que se está usando es ".$_COOKIE["user_id"];
    if(isset($_COOKIE["deck_id"])){
        //echo "Ya se tená una cookie de deck_id";
        $_SESSION["deckId"] = $_COOKIE["deck_id"];
        
    } else {
        $_SESSION["deckId"] = getDeckData("id");
    }
    
    //echo "<br>El deck id es: ".$_SESSION["deckId"];


    //Obtiene un array de los IDs de los slabs que corresponden al Deck ID
    function getSlabIds(){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $sql = "SELECT id FROM slab WHERE deck_id = $deckId";
        $result = mysqli_query($conn, $sql);
        $slabs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        $slab_ids =[];
        foreach ($slabs as $slab) {
            array_push($slab_ids, $slab["id"]);
        }
        return $slab_ids;
    }
    //Funciones para llenar el archivo data:

    //Obtener Slab progress:
    function getSlabsData($data){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $sql = "SELECT $data FROM slab WHERE deck_id = $deckId";
        $result = mysqli_query($conn, $sql);
        $slabs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        $dataArr =[];
        foreach ($slabs as $slab) {
            array_push($dataArr, $slab[$data]);
        }
        return $dataArr;
    }

    function getAllSlabsData($slabId){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $userId = $_COOKIE["user_id"];
        //Info Slab
        $sql = "SELECT slab_progress, slab_num, act_1, act_2, act_3, rating FROM slab WHERE id = $slabId";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        $_SESSION["slab_progress"] = $data["slab_progress"];
        $_SESSION["slab_num"] = $data["slab_num"];
        $_SESSION["act_1"] = $data["act_1"];
        $_SESSION["act_2"] = $data["act_2"];
        $_SESSION["act_3"] = $data["act_3"];
        $_SESSION["rating"] = $data["rating"];
        //Info deck
        $sql = "SELECT current_slab, tracker_1, tracker_2 FROM deck WHERE id = $deckId";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        $_SESSION["current_slab"] = $data["current_slab"];
        
        //Info metrics
        $sql = "SELECT progress FROM metrics WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        $_SESSION["progress"] = $data["progress"];
        
    }

    function getDeckData($data){
        global $conn;
        $userId = $_COOKIE["user_id"];
        $sql = "SELECT $data FROM deck WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $deck = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        $dataObt = $deck[$data];
        return $dataObt;
    }

    //Obtener n dato
    function addProgress($table, $column, $tableId, $inputId, $currentProgress, $value){
        global $conn;
        $newProgress = $currentProgress + $value;
        $sql = "UPDATE $table SET $column = $newProgress WHERE $tableId = $inputId";
        if(mysqli_query($conn, $sql)){
            //echo "Se actualizó el $table de $column exitosamente";
        } else {
            echo "Query error: " . mysqli_error($conn);
        }
        return $newProgress;
    }

    function finishAct($act_num, $slabId){
        global $conn;
        $act = "act_".$act_num;
        $sql = "UPDATE slab SET $act = 1 WHERE id = $slabId";
        if(mysqli_query($conn, $sql)){
            //echo "Se actualizó el la act $act_num";
        } else {
            echo "Query error: " . mysqli_error($conn);
        }
        return 1;
    }

    function finishSlab($currentSlab, $deckId){
        global $conn;
        if($currentSlab <=9){
            $newSlab = $currentSlab +1;
            $sql = "UPDATE deck SET current_slab = $newSlab WHERE id = $deckId";
            if(mysqli_query($conn, $sql)){
                //echo "Se actualizó el el current slab a $newSlab";
                $_SESSION["current_slab"] = $newSlab;
            } else {
                echo "Query error: " . mysqli_error($conn);
            }
            return $newSlab;
        }
    }


    function getTrackersDeck(){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $sql = "SELECT tracker_1, tracker_2 FROM deck WHERE id = $deckId";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $data;
    }

    function setTracker($trackerName){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $sql = "UPDATE deck SET $trackerName = 1 WHERE id = $deckId";
        if(mysqli_query($conn, $sql)){
            //echo "Se actualizó el $trackerName";
        }
    }

    function getTrackersSlab($slabId){
        global $conn;
        $sql = "SELECT ts_1, ts_2, ts_3, ts_4, ts_5, ts_6, ts_7, ts_8, ts_9 FROM slab WHERE id = $slabId";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $data;
    }

    function setSlabTracker($trackerName, $slabId, $value){
        global $conn;
        $sql = "UPDATE slab SET $trackerName = $value WHERE id = $slabId";
        if(mysqli_query($conn, $sql)){
            //echo "Se actualizó el $trackerName";
        }
    }

    function setRating($slabId, $value){
        global $conn;
        $sql = "UPDATE slab SET rating = $value WHERE id = $slabId";
        if(mysqli_query($conn, $sql)){
            //echo "Se actualizó el $trackerName";
        }
    }


?>