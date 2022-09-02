<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="css/register.css">

    </head>
    <body>
        <section class="form-section" >
            <main class="main">
                <h1 class="register">Login Form</h1>
                <form method="POST" action="/login">
                    @csrf
                    <div class="input-tags">
                        <label for="username">
                            Username:
                    </label>
                    <div class="input-tag">
                        <input type="text" name="username" id="username" required autocomplete=off>
                    </div>
                </div>
                <div class="input-tags">
                        <label for="email">
                            Email:
                    </label>
                    <div class="input-tag">
                        <input type="email" name="email" id="email" required autocomplete=off>
                    </div>
                </div>
                <div class="input-tags">
                    <label for="password">
                            Password:
                        </label>
                    <div class="input-tag">
                        <input type="password" name="password" id="password" required autocomplete=off>
                        </div>
                </div>
                <div>
                    <button type="submit" class="btn">LogIn</button>
                </div>
            </form>
        </main>
        </section>
    </body>
</html>
