<?php

namespace App\Controller;


use Basedatos\PDO\Connection;

class ContactoController
{

    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->get_database_instance();
    }

    /**
     * Muestra una lista de este recurso
     */
    public function index()
    {

        $stmt = $this->connection->prepare("SELECT * FROM contacto");
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
        //require("../resources/views/incomes/index.php");
    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create()
    {
        //require("../resources/views/incomes/create.php");
    }

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {}

    /**
     * Muestra un único recurso especificado
     */
    public function show($id) {}

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit() {}

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update($data, $id) {}

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy($id) {}
}
