<?php
   session_start();
    
    require_once "./actions/db_connect.php";

    

    if(isset($_SESSION['id']) && $_SESSION['id'] <> ""){
        #Caso o meu usuario nao esteja setado e seja diferente de vazio entao nos entramos na sessao, caso o
        #contrario ele nao entra e fica na index.
        #echo "<h3> Sessao iniciada e usuario logado </h3>";
        include_once "../php-html/includes/header.php";

        $id = $_SESSION['id'];

        $sql = "SELECT * from POSTS WHERE(AUTOR = '$id')";

        $resultado = mysqli_query($connect, $sql);
?>
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <table class="table table-striped table-over table-responsive">
        <tr>
            <th>
                ID: 
            </th>
            <th>
                TITULO: 
            </th>
            <th>
                CONTEUDO: 
            </th>
        </tr>
        <?php
            while ($row = mysqli_fetch_assoc($resultado)){
        ?>
            <tr>
                <td>
                    <?php echo $row['ID'] ?>
                </td>
                <td>
                    <?php echo $row['TITULO'] ?>
                </td>
                <td>
                    <?php echo $row['CONTEUDO'] ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    
<?php
    include_once "../php-html/includes/footer.php";
    }
    else{
        header("location: ../php-html/index.php");
    }
    /*echo $_SESSION['nome'];
    echo $_SESSION['id'];
    echo $_SESSION['email'];*/
?>
