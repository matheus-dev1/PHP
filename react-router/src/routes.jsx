import React from "react";
import {
  BrowserRouter as Router,
 // O componente BrowserRouter é usado para fazer o roteamento do lado do cliente com segmentos de URL. Você pode carregar um componente de nível superior para cada rota. Isso ajuda a separar questões em seu aplicativo e torna o fluxo de lógica / dados mais claro.
  Switch,
 // Um componente <Switch> olha através de seus filhos <Route> e renderiza o primeiro que corresponde ao URL atual.
  Route,
 // O componente Route cria a rota de determinada pagina.
  Link
 // O componente link e usado para linkar uma determinada pagina como se fosse uma tag ancora <a href="/"/> 
} from "react-router-dom";

import Index from './Pages/index';
import About from './Pages/About';
import Users from './Pages/Users';

function Routes(){
    return (
            <Switch>
                <Route exact path="/" component={Index}/>
                {/* path e o caminho em que determinado componente sera renderizado. Exemplo: Eu coloque que quando tiver apenas barra "/" (localhost:3000/) sera renderizado o componente index e component mostra qual componente e o que sera renderizado. */}
                <Route exact path="/about" component={About}/>
                {/* Nos usamos a propriedade exact para que o caminho seja sempre exato, por que se por exemplo eu nao tenho o exact no path="/" e busco por uma pagina que nao existe por exemplo "/aaa" ele ira renderizar o path="/" o que nao eh o que eu quero! */}
                <Route exact path="/users" component={Users}/>
            </Switch>
    );
}

export default Routes;

// export default function App() {
//   return (
//     <Router>
//       <div>
//         <nav>
//           <ul>
//             <li>
//               <Link to="/">Home</Link>
//             </li>
//             <li>
//               <Link to="/about">About</Link>
//             </li>
//             <li>
//               <Link to="/users">Users</Link>
//             </li>
//           </ul>
//         </nav>

//         {/* A <Switch> looks through its children <Route>s and
//             renders the first one that matches the current URL. */}
//         <Switch>
//           <Route path="/about">
//             <About />
//           </Route>
//           <Route path="/users">
//             <Users />
//           </Route>
//           <Route path="/">
//             <Home />
//           </Route>
//         </Switch>
//       </div>
//     </Router>
//   );
// }

// function Home() {
//   return <h2>Home</h2>;
// }

// function About() {
//   return <h2>About</h2>;
// }

// function Users() {
//   return <h2>Users</h2>;
// }