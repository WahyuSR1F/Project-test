<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="container">

            <div class="my-4 p-2">
                <h1>Loging </h1>
            </div>
            <form id="formLogin">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        id="exampleInputPassword1" required>
                </div>
                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        // medapatkan element form
        const formLogin = document.getElementById("formLogin");

        // buat event listener function
        formLogin.addEventListener("submit", async (event) => {
            // mengunakan preventdefault
            event.preventDefault();

            // mengambil nilai dari input saat tombol submit diklik
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            console.log(email, password);

            //melakukan post mengunkana axios
            await axios.post('{{ route('login') }}', {
                email: email,
                password: password
            });
        });
    </script>

</body>

</html>
