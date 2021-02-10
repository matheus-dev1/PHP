import React from "react";
import {BrowserRouter} from "react-router-dom";
// A navegacao da rota.
import Routes from "./routes";
// Importando as minhas rotas para se renderizada pelo App.
import NavBar from "./Components/NavBar";
// importando minha barra de navegacao porque neste caso eu quero que toda pagina tenha esta barra de navegacao.

function App() {
  return (
    <BrowserRouter>
    {/* Eh interresante deixar o <BrowserRouter /> aqui em vez de estar no arquivo routes.jsx por que se eu tiver mais de uma componente de rota eu nao preciso ficar declarando em todo arquivos de rota. */}
      <NavBar />
      <Routes />
    </BrowserRouter>
  );
}

export default App;