validar nombre de usuario
        if(empty(trim($_POST["regUsuario"]))){
            echo '<script>alert("Ingresar un usuario")</script>';
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["regUsuario"]))){
            echo '<script>alert("Nombre user debe llevar letras, números y guión bajo")</script>';
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM accounts WHERE nombre_usuario = :usuario";
            
            if($stmt = $conn->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bindParam(":usuario", $nombreUsuario);
                
                // Set parameters
                $nombreUsuario = trim($_POST["regUsuario"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        echo '<script>alert("Usuario ya existente")</script>';
                    } else{
                        $nombreUsuario = trim($_POST["regUsuario"]);
                    }
                } else{
                    echo '<script>alert("Lo sentimos, hubo un error al crear tu usuario")</script>';
                }    
                // Close statement
                unset($stmt);
            }
        }

<?php
// Include config file
require_once './../config/connection.php';
 
// Define variables and initialize with empty values
$usuario = $contrasena = $confirmarContrasena = "";
$usuarioError = $contrasenaError = $confContrasenaError = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["regUsuario"]))){
        $usuarioError = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["regUsuario"]))){
        $usuarioError = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM accounts WHERE nombre_usuario = :usuario";
        
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
            
            // Set parameters
            $usuario = trim($_POST["regUsuario"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $usuarioError = "This username is already taken.";
                } else{
                    $usuario = trim($_POST["regUsuario"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["regPassword"]))){
        $contrasenaError = "Please enter a password.";     
    } elseif(strlen(trim($_POST["regPassword"])) < 6){
        $contrasenaError = "Password must have atleast 6 characters.";
    } else{
        $contrasena = trim($_POST["regPassword"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>