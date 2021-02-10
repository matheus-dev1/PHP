import React from "react";
import {Link} from "react-router-dom";
// Estou importando o componente links porque eu estou criando uma navbar que tera os links da paginas.

function NavBar(){
    return(
        <nav>
            <ul>
                <li>
                    <Link to="/">Index</Link>
                    {/* Componente link com a propriedade to que significa para que da pra entender este link como uma tag ancora <a href="/"/> ou seja pagina index.js(localhost:3000/) */}
                </li>
                <li>
                    <Link to="/about">About</Link>
                </li>
                <li>
                    <Link to="/users">Users</Link>
                </li>
            </ul>
        </nav>
    );
}

export default NavBar;