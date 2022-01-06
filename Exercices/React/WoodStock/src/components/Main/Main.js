import './Main.css';
import AboutUs from '../About/About.jsx';
import Shop from '../Shop/Shop.jsx';
import Team from '../Team/Team.jsx';
import Form from '../Form/Form.jsx';
import Footer from '../Footer/Footer.jsx';

function Main() {
    return (

        <main className="main">
            <AboutUs />
            <Shop />
            <Team />
            <Form />
            <Footer />
        </main>
    )
}

export default Main;