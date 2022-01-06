import './Team.css';

const Team = () => {
    return (
        <section className='team-flex'>
            <article className='team-left'>
                <div id='img-team'></div>
                <div id='img-bg'></div>
                <h2 id='team'>CREATIVE TEAM</h2>
            </article>
            <article className='team-right'>
                <h2 id='mind'>GOOD MINDSET</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <button className='buttons-1-2'>Meet the team</button>
                <div className='buttons-1-2-line'></div>
            </article>
            <div id='logo'>
                <p id='wood2'>W <span>O O</span> D</p>
            </div>
        </section>
    )
}

export default Team;