import './Header.css';
import Nav from '../Menu/Menu.jsx';
import TitlePage from '../Title/Title.jsx';

function Header() {
    return (

        <header className='header'>
            <Nav />
            <TitlePage />
        </header>
    );
};

export default Header;