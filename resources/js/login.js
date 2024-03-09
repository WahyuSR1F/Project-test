// mengambil event 
document.addEventListener("DOMContentLoaded", () => {
    // mengambil elemen form 
    const formLogin = document.getElementById('form-login');

    //melakukan pengambilan trigeer event form dan melakukan function async
    formLogin.addEventListener('submit', async (event) => {
        event.preventDefault();

        const email = document.getElementsByTagName('email').value;
        const password = document.getElementsByTagName('password').value;

        console.log(email);

        // melakukan post mengunkana axios
        await axios.post('/login', {
            email: email,
            password: password
        });
    })
})