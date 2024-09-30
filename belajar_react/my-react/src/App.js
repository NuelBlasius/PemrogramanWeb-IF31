import './App.css';
// import Hello from './Hello';
// import Product from './Product';
// import Registrasi from './Registrasi';
import React from 'react';
import { NavLink, Route, Routes } from 'react-router-dom';
import routes from './routes';

function App() {
  return (
    <React.Suspense fallback={<div>Loading...</div>}>
      <div className='App'>
        <h1>Universitas MDP</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <NavLink to="/" className="navbar-brand" exact="true">
              Navbar
            </NavLink>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">   
                <NavLink to="/" className="nav-link active">Home</NavLink>
              </li>
              <li class="nav-item">
                <NavLink to="/product" className="nav-link">Product</NavLink>
              </li>
              <li class="nav-item">
                <NavLink to="/registrasi" className="nav-link">Registrasi</NavLink>
              </li>
            </ul>
          </div>
        </nav>

        <div className='main container'>
          <Routes>
            {
              routes.map((route, i) => {
                const {path, Component} = route;
                return <Route key={i} path={path} element={<Component />} />;
              })
            }
          </Routes>
        </div>

      </div>
    </React.Suspense>
  );
}

export default App;
