<?php 
// File upload folder 
$uploadDir = 'uploads/'; 
 
// Allowed file types 
$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
 
// Default response 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['nome']) || isset($_POST['usuario']) || isset($_POST['file'])){ 
    // Get the submitted form data 


    $id_usuario = mysqli_real_escape_string($conn, $_POST['id']);
    $nome = mysqli_real_escape_string($conn, ucwords(strtolower($_POST['nome'])));
    $usuario = mysqli_real_escape_string($conn, strtolower($_POST['usuario']));
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);
     
    // Check whether submitted data is not empty 
    if(!empty($name) && !empty($usuario)){ 
        // Validate email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
            $response['message'] = 'Please enter a valid email.'; 
        }else{ 
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats to upload 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only '.implode('/', $allowTypes).' files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                session_start();
                include('config/conexao.php');
                 

                $verifica_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                $resultado_verificacao = mysqli_query($conn, $verifica_usuario);

                if (mysqli_num_rows($resultado_verificacao) == 0) {
                    $token = md5($usuario . $senha);

                $altera_usuario = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha', file_name='?' WHERE id='$id_usuario'";
                echo $altera_usuario;
                $stmt = $db->prepare($sqlQ); 
                $stmt->bind_param("sss", $nome, $usuario, $uploadedFile); 
                $resposta = mysqli_query($conn, $altera_usuario);
                            
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'; 
                } 
            } 
        } else{
            $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
        }
    }}
} 
 
// Return response 
echo json_encode($response);