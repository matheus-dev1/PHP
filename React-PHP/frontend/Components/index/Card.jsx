const Card = () => {
    const [student, setStudent] = React.useState([]);
    const [renderStudent, setRenderStudent] = React.useState(false);
    const [msg, setMsg] = React.useState(false);

    // Recebendo dados da API do meu Backend
    React.useEffect(async () => {
        const url = "http://localhost/dashboard/PHP%20Projects/React-PHP/backend/index.php"
        const response = await fetch(url);
        const data = await response.json();
        setStudent(data);
        // Sempre a pagina carregar ou que o estado de renderStudent for alterado renderizar a pagina novamente.
    }, [renderStudent]);

    // Enviando dados para o meu backend
    function studentRegister(event) {
        // Isto e javaScript, so pelo comentario pode se reparar.

        // Impede que um evento padrao ocorra, no nosso caso seguir o link do envio de dados do form.
        event.preventDefault();

        // Este event.target retornar o meu formulario
        // console.log(event.target)

        // Obs: Os metodos e atributos de alguns objetos nao aparecem por que estamos usando a extensao .jsx e nao .js

        // let formData = new FormData;

        let formData = new FormData(event.target);

        // formData.append("name", "Matheus"); // <input name="name" value="Matheus"></input>
        // formData.append("telphone", "11969699509"); // <input name="telphone" value="11969699509"></input>

        // Resgatar o resultado do formulario name.
        // console.log(formData.get("name"));

        // Isto eh entre aspas um formulario construido em JavaScript.

        const url = "http://localhost/dashboard/PHP%20Projects/React-PHP/backend/register-student.php";

        // A funcao fetch() faz o envio para url.
        // ja o .then faz o resgate de dadis da url.
        fetch(url, {
            // O metodo de envio dos dados.
            method: "POST",
            // Onde ele vai buscar estes dados, no meu caso no meu objeto Formulario que contem o meu formulario HTML.
            body: formData
        }).then((response) => response.json())
        .then((dados) => {
            // Vai alterar o valor de renderStudent para que toda vez que eu enviar os dados do meu formulario e resgatar os dados da "api/json" do meu backend, fazendo com que o meu estado mude, consequentemente fazendo com que os dados aparecam na tela sem que eu tenha que atualizar a pagina.
            setRenderStudent(!renderStudent)
            setMsg(dados);
        })
    }

    // Apos 10 segundos ele ira atribuir false a msg
    // setInterval(() => {setMsg(false)}, 10000);
    setTimeout(async () => {setMsg(false)}, 10000);

    return (
        <div className="container py-5">
            <div className="card w-75 mx-auto border-0">
                <form onSubmit={studentRegister}>
                    {/* O padrao do action="" e o proprio arquivo e o mathod="" padrao eh POST */}
                    {/* onSubmit={} nao funciona em botoes e normalmente eh usado na tag <form> */}
                    <input className="form-control mt-2" type="text" name="name" placeholder="Nome"></input>
                    <input className="form-control mt-2" type="text" name="telphone" placeholder="Telefone"></input>
                    <button className="btn btn-info mt-2 w-100">Cadastrar Estudantes</button>
                    {/* O padrao e Type="submit", mesmo que eu nao escreva. */}
                </form>
            </div>

            {msg == true && 
                <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
                    Cadastro efetuado com sucesso!
                </div>
            }

            {student.map((element) => {
                return (
                    <div key={element.id} className="card w-75 mt-4 mx-auto">
                        <div className="card-header">
                            Nome: {element.name}   
                        </div>
                        <div className="card-body">
                            Telefone: {element.telphone}
                        </div>
                    </div>
                );
            })}
        </div>
    )
}