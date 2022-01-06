import './Form.css';

const Form = () => {
    return (
        <section className='form-flex'>
            <h3>CONTACT US</h3>
            <div id='form'>
                <form action="#" method='post'>
                    <input className='inputs' type="text" placeholder='FIRST NAME' name='firstname' />
                    <input className='inputs' type="text" placeholder='LAST NAME' name='lastname' />
                    <input className='inputs' id='email' type="text" placeholder='MAIL ADRESS' name='email' />
                    <textarea name="message" id="message" placeholder='MESSAGE' cols="30" rows="10"></textarea>
                </form>
            </div>
        </section>
    )
}

export default Form;