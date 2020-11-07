<!DOCTYPE html>
<html>
    <body>
        <h1>Botao de Reset</h1>
        <p>Clique no botão RESET para limpar o formulário</p>
        <form action="/action_page.php">
            <label for="email">Digite seu e-mail:</label>
            <input type="email" id="email" name="email">
            <br><br>
            <label for="pin">Digite o PIN de validação:</label>
            <input type="text" id="pin" name="pin" maxlength="4">
            <!-- O atributo maxlength faz com que eu possa colocar um quantidade maxima de caracteres
                no input em que ele esta dentro. O valor que colocamos foi 4 entao podemos colocar
                no maximo 4 caracteres.-->
            <br><br>  
            <input type="reset" value="Reset">
            <!-- O atributo type com o valore reset faz com que todo o formulario em que ele esta inserido
                tenha os valores apagados.-->
            <input type="submit" value="Submit">
        </form>
    </body>
</html>