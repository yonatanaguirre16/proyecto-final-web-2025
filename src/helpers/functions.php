<?php
$config = require __DIR__.'/../config/config.php';
require __DIR__.'/../config/database.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getCareers() {
    $pdo = getPDO();

    try {
        $sql = "SELECT * FROM careers";

        $stmt = $pdo->query($sql);

        $careers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $careers;
    }catch (PDOException $e) {
        error_log("Error al consultar la base de datoso: ". $e->getMessage());
        return [];
    }
}

function getCareerDetails($careerId = null) {
    if($careerId == null && isset($_GET['careerId'])){
        $careerId = filter_input(INPUT_GET, 'careerId', FILTER_SANITIZE_STRING);
    }

    //Si no se envió una carrera
    if ($careerId === null) {
        return [];
    }

    $pdo = getPDO();

    try {
        $sql = "SELECT * FROM careers WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $careerId]);
        $careerDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$careerDetails) {
            return []; // Carrera no encontrada
        }

        return $careerDetails;
    } catch (PDOException $e) {
        error_log("Error al consultar la base de datos: " . $e->getMessage());
        return [];
    }
}