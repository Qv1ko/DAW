<?php
    function makeConnection(): Object {
        $db_user = "root";
        $db_pass = "root";
        return new mysqli("localhost", $db_user, $db_pass);
    }

    function createAlum(string $name, string $age, string $curse) {
        try {
            $connection = makeConnection();
            // Comprueba que no haya errores en la conexión con el servidor MySQL
            if ($connection->errno) {
                throw new Exception("Fallo en la conexión con el servidor MySQL.");
            } else {
                // Comprueba la conexión con la base de datos
                if ($connection->select_db("ciclos")) {
                    $query = "SELECT id_al FROM alumno ORDER BY id_al DESC LIMIT 1;";
                    $exe = $connection->prepare($query);

                    if ($exe) {
                        $exe->execute();
                        $result = $exe->get_result();
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $id = $row['id_al'] + 1;
                        } else {
                            $id = 1;
                        }
                    } else {
                        throw new Exception("Error al preparar la consulta: " . $connection->error);
                    }
                    $name = htmlspecialchars($name);
                    $age = htmlspecialchars($age);
                    $curse = htmlspecialchars($curse);

                    $query = "INSERT INTO alumno(id_al, nombre, edad, id_curso) VALUES (?, ?, ?, ?)";

                    $exe = $connection->prepare($query);
                    $exe->bind_param("isii", $id, $name, $age, $curse);

                    if ($exe->execute()) {
                        if ($exe->affected_rows) {
                            echo "✅ El alumno se ha añadido correctamente.";
                        } else {
                            throw new Exception("La ejecución a fallado."); // Excepción que hay que recoger
                        }
                    }
                } else {
                    throw new Exception("Fallo en la conexión con la base de datos.");
                }
                $connection->close();
            }
        } catch (Exception $err) {
            echo "⚠️ " . $err->getMessage();
        }        
    }

    function readAlum($id) {
        try {
            $connection = makeConnection();
            // Comprueba que no haya errores en la conexión con el servidor MySQL
            if ($connection->errno) {
                throw new Exception("Fallo en la conexión con el servidor MySQL.");
            } else {
                // Comprueba la conexión con la base de datos
                if ($connection->select_db("ciclos")) {
                    $id = htmlspecialchars($id);
                    $query = "SELECT * FROM alumno WHERE id_al = ?";

                    $exe = $connection->prepare($query);
                    $exe->bind_param("i", $id);

                    if ($exe) {
                        $exe->execute();
                        $result = $exe->get_result();

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<p>🧑‍🎓Alumn@ " . $row['nombre'] . " tiene " . $row['edad'] . " años y está estudiando en el " . ($row['id_curso'] == 1 ? "primer" : "segundo") . " curso.</p>";
                        } else {
                            throw new Exception("No ha encontrado el alumno con id_al $id.");
                        }
                    } else {
                        throw new Exception("Error al preparar la consulta: " . $connection->error);
                    }
                } else {
                    throw new Exception("Fallo en la conexión con la base de datos.");
                }
                $connection->close();
            }
        } catch (Exception $err) {
            echo "⚠️ " . $err->getMessage();
        }
    }
    
    function updateAlum($id, $name, $age) {
        try {
            $connection = new PDO("mysql:host=127.0.0.1;port=3306;dbname=ciclos", "root", "root");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id = htmlspecialchars($id);
            $name = htmlspecialchars($name);
            $age = htmlspecialchars($age);

            $query = "UPDATE alumno SET nombre = ?, edad = ? WHERE id_al = ?";

            $exe = $connection->prepare($query);

            $exe->execute([$name, $age, $id]);

            if ($exe->rowCount()) {
                echo "✅ El alumno con id_al $id se ha actualizo correctamente.";
            } else {
                throw new Exception("No ha encontrado el alumno con id_al $id."); // Excepción que hay que recoger
            }

            $connection = null;
        } catch (Exception $err) {
            echo "⚠️ " . $err->getMessage();
            error_log($err->getMessage());
        }
    }

    function deleteAlum(string $id) {
        try {
            $connection = makeConnection();
            // Comprueba que no haya errores en la conexión con el servidor MySQL
            if ($connection->errno) {
                throw new Exception("Fallo en la conexión con el servidor MySQL.");
            } else {
                // Comprueba la conexión con la base de datos
                if ($connection->select_db("ciclos")) {
                    $id = htmlspecialchars($id);
                    $query = "delete from alumno where id_al = ?";

                    $exe = $connection->prepare($query);
                    $exe->bind_param("i", $id);

                    if ($exe->execute()) {
                        if ($exe->affected_rows) {
                            echo "✅ El alumno con id_al $id se ha eliminado correctamente.";
                        } else {
                            throw new Exception("No ha encontrado el alumno con id_al $id."); // Excepción que hay que recoger
                        }
                    }
                } else {
                    throw new Exception("Fallo en la conexión con la base de datos.");
                }
                $connection->close();
            }
        // Hay una clase específica para controlar los errores mysqli_sql_exception
        } catch (mysqli_sql_exception $err) {
            echo "⚠️ " . $err->getMessage();
        } catch (Error $err) {
            echo "⚠️ " . $err->getMessage();
        } catch (Exception $err) {
            echo "⚠️ " . $err->getMessage();
        }
    }
    
?>