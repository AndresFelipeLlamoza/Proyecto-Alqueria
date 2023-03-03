<?php
    date_default_timezone_set("America/Bogota");
    session_start();
    include ("sweetalert.php");
    include ("conection.php");

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $read = mysqli_query($conex, "SELECT * FROM especialistas WHERE Usuario = '".$usuario."' and Clave = '".$clave."'");
    $nr = mysqli_fetch_array($read);


    if(isset($nr)){
        $_SESSION["usuario"] = $usuario;
        header("Location: /proyectoalqueria/view/dshb_control.php");
    }else{
        if ($_POST["usuario"] == "" and $_POST["clave"] == ""){
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Algo ha salido mal',
                text: 'Debe diligenciar todos los campos del formulario',
                showConfirmButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No',
            }).then((result) => {
                if(result.value){
                    window.history.go(-1)
                }
            });
            </script>";
        }else{
            if ($_POST["clave"] == ""){
                echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Algo salio mal',
                    text: 'El campo contraseña esta vacio',
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if(result.value){
                        window.history.go(-1);
                    }
                });
                </script>";
            }else{
                if ($_POST["usuario"] == ""){
                    echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Algo ha salido mal',
                        text: 'El campo usuario esta vacio',
                        showConfirmButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'No',
                    }).then((result) => {
                        if(result.value){
                            window.history.go(-1)
                        }
                    });
                    </script>";
                    }else{
                    if (!isset($nr)){
                        echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Algo ha salido mal',
                            text: 'Usuario o contraseña incorrecta',
                            showConfirmButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            cancelButtonText: 'No',
                        }).then((result) => {
                            if(result.value){
                                window.history.go(-1)
                            }
                        });
                        </script>";
                    }
                }
            }
        }
    }
?>